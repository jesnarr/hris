<?php

namespace App\Http\Livewire\Employee;

use App\Http\Requests\Employee\UpdateRequest;
use App\Models\Employee;
use App\Models\EmployeeStatus;
use App\Models\EmployeeType;
use App\Models\National;
use App\Models\Position;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Livewire\Component;
use Livewire\WithFileUploads;

class BasicInformation extends Component
{
    use WithFileUploads;

    public $position;
    public $employee_type;
    public $employee_status;

    public $employee;
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
    public $images;
    public $image;
    public $departments;
    public $branch;

    public $suffixes = ['Jr.','Sr.','II','III', 'PhD','Dr.','RMT','RN','IX'];
    public $marital_statuses = ['Single', 'Married', 'Divorced', 'Legally Separated', 'Widowed'];

    protected $rules = UpdateRequest::RULES;
    protected $messages = UpdateRequest::MESSAGES;

    public function render()
    {
        return view('livewire.employee.basic-information');
    }

    public function mount()
    {
        $this->nationalities = National::select('id', 'nationality')->get();
        $this->tags = Tag::select('id', 'tag')->get();
        // $this->employee_types = EmployeeType::select('id', 'employee_type')->get();
        // $this->employee_statuses = EmployeeStatus::select('id', 'status')->get();
        // $this->positions = Position::select('id', 'position')->get();

        $this->first_name = $this->employee->first_name;
        $this->middle_name = $this->employee->middle_name;
        $this->last_name = $this->employee->last_name;
        $this->suffix = $this->employee->suffix;
        $this->gender = $this->employee->gender;
        $this->marital_status = $this->employee->marital_status;
        $this->birthdate = date('F d, Y', strtotime($this->employee->birthdate));
        $this->images = $this->employee->image;
        $this->work_email = $this->employee->work_email;
        $this->contact_number = $this->employee->contact_number;
        $this->gender = $this->employee->gender;
        $this->marital_status = $this->employee->marital_status;
        $this->nationality = 62;
        $this->branch = $this->employee->tag_id;

        $this->position = $this->employee->position_id;
        $this->employee_type = $this->employee->employee_type_id;
        $this->employee_status = $this->employee->employee_status_id;
    }

    public function save()
    {
        $this->validate();
        try {
            $employee = Employee::find($this->employee->id);
            $employee->first_name = $this->first_name;
            $employee->middle_name = $this->middle_name ? $this->middle_name : 'NMN';
            $employee->last_name = $this->last_name;
            $employee->suffix = $this->suffix;
            $employee->gender = $this->gender;
            $employee->birthdate = date('Y-m-d', strtotime($this->birthdate));
            $employee->contact_number = $this->contact_number;
            $employee->marital_status = $this->marital_status;
            $employee->nationality_id = $this->nationality;
            $employee->work_email = $this->work_email;
            $employee->tag_id = $this->branch;
            // $employee->position_id = $this->position;
            // $employee->employee_type_id = $this->employee_type;
            // $employee->employee_status_id = $this->employee_status;
            if ($this->images) {
                if($this->images !== $this->employee->image) {
                    $this->image = $this->images;
                    $temp = Carbon::now()->format('mdYhis') . rand(1000,9999) . '.png';
                    $this->image->storeAs('public/employee', $temp);
                    $this->image = config('app.url') . '/storage/employee/' . $temp;
                    $employee->image = $this->image;
                }
            }
            $employee->save();

            $this->resetErrorBag();

            $this->dispatchBrowserEvent('prompt-message', [
                'type' => 'success',
                'message' => 'Save Successfully.'
            ]);
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
        // $this->reset([
        //     'first_name',
        //     'middle_name',
        //     'last_name',
        //     'suffix',
        //     'gender',
        //     'birthdate',
        //     'contact_number',
        //     'marital_status',
        //     'nationality',
        //     'work_email',
        //     'employee_type',
        //     'image',
        // ]);
    }

}
