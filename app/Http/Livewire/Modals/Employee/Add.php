<?php

namespace App\Http\Livewire\Modals\Employee;

use App\Http\Requests\Employee\CreateRequest;
use App\Models\Department;
use App\Models\Eligibility;
use App\Models\Employee;
use App\Models\EmployeeStatus;
use App\Models\EmployeeType;
use App\Models\JobInformation;
use App\Models\Leave;
use App\Models\National;
use App\Models\Position;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads;

    public $first_name;
    public $middle_name;
    public $last_name;
    public $suffix;
    public $gender;
    public $birthdate;
    public $contact_number;
    public $marital_status;
    public $nationality;
    public $work_email;
    public $employee_type;
    public $employee_status;
    public $image;
    public $departments;
    public $position;
    public $branch;

    public $suffixes = ['Jr.','Sr.','II','III', 'PhD','Dr.','RMT','RN','IX'];
    public $marital_statuses = ['Single', 'Married', 'Divorced', 'Separated', 'Widowed'];

    protected $rules = CreateRequest::RULES;
    protected $messages = CreateRequest::MESSAGES;

    protected $listeners = [
        'resetAddEmployee' => 'clearVars'
    ];

    public function render()
    {
        return view('livewire.modals.employee.add');
    }

    public function mount()
    {
        $this->nationalities = National::select('id', 'nationality')->get();
        $this->employee_types = EmployeeType::select('id', 'employee_type')->get();
        $this->positions = Position::select('id', 'position')->get();
        $this->employee_statuses = EmployeeStatus::select('id', 'status')->get();
        $this->tags = Tag::select('id', 'tag')->get();
    }

    public function save()
    {
        $this->validate();

        try {
            DB::transaction(function () {
                $user_id = User::insertGetId([
                    'name' => mb_strtoupper($this->last_name) . ', ' . mb_strtoupper($this->first_name),
                    'email' => $this->work_email,
                    'password' => Hash::make('ilovefilglobal'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

                $employee = new Employee();
                $employee->user_id = $user_id;

                $employee->first_name = $this->first_name;
                $employee->middle_name = $this->middle_name;
                $employee->last_name = $this->last_name;
                $employee->suffix = $this->suffix;
                $employee->gender = $this->gender;
                $employee->birthdate = date('Y-m-d', strtotime($this->birthdate));
                $employee->contact_number = $this->contact_number;
                $employee->marital_status = $this->marital_status;
                $employee->nationality_id = $this->nationality;
                $employee->work_email = $this->work_email;
                $employee->tag_id = $this->branch;

                if ($this->image) { //check image exist
                    $temp = Carbon::now()->format('mdYhis') . rand(1000,9999) . '.png';
                    $this->image->storeAs('public/employee', $temp);
                    $this->image = config('app.url') . '/storage/employee/' . $temp;
                    $employee->image = $this->image;
                }

                $employee->save();
                $employee_id = $employee->id;

                $job = new JobInformation();
                $job->employee_type_id = $this->employee_type;
                $job->employee_status_id = $this->employee_status;
                $job->position_id = $this->position;
                $job->employee_id = $employee_id;
                $job->save();

                if($this->employee_type == 1){
                    $leave = Leave::where('status',1)->where('eligibility',1)->get();
                    foreach($leave as $leave){
                        $eligibility = new Eligibility();
                        $eligibility->user_id = $employee->id;
                        $eligibility->leave_id = $leave->id;
                        $eligibility->counter = $leave->entitlement;
                        $eligibility->save();
                    }
                }

                $this->clearVars();
                $this->dispatchBrowserEvent('close-modal', [
                    'id' => 'add-employee'
                ]);
                $this->dispatchBrowserEvent('prompt-message', [
                    'type' => 'success',
                    'message' => 'Added Successfully.'
                ]);
            });
        } catch (QueryException $e) {
            $this->dispatchBrowserEvent('prompt-message', [
                'type' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }

    public function clearVars()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset([
            'first_name',
            'middle_name',
            'last_name',
            'suffix',
            'gender',
            'birthdate',
            'contact_number',
            'marital_status',
            'nationality',
            'work_email',
            'employee_type',
            'image',
        ]);
    }
}
