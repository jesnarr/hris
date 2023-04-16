<?php

namespace App\Http\Livewire\Employee;

use App\Http\Requests\JobInformationRequest;
use App\Models\Employee;
use App\Models\EmployeeStatus;
use App\Models\EmployeeType;
use App\Models\JobInformation as ModelsJobInformation;
use App\Models\Position;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Livewire\Component;

class JobInformation extends Component
{
    public $employee;
    public $employment_status;
    public $employment_type;
    public $position;
    public $department;
    public $line_manager;
    public $immediate_head;
    public $join_date;
    public $probation_start_date;
    public $probation_end_date;
    public $contract_start_date;
    public $contract_end_date;
    public $date_separated;

    protected $listeners = [
        'initializeJobInformation'
    ];

    protected $rules = JobInformationRequest::RULES;

    public function render()
    {
        return view('livewire.employee.job-information');
    }

    public function mount()
    {
        $this->positions = Position::select('id', 'position')->orderBy('position')->get();
        $this->employee_statuses = EmployeeStatus::select('id', 'status')->orderBy('status')->get();
        $this->employee_types = EmployeeType::select('id', 'employee_type')->orderBy('employee_type')->get();
        $this->line_managers = Employee::select('id', 'first_name', 'last_name')->orderBy('last_name')->get();
        $this->initializeJobInformation();
    }

    public function initializeJobInformation()
    {
        $job = ModelsJobInformation::with(['position', 'position.department'])
            ->where('employee_id', $this->employee->id)
            ->first();
            $this->employment_status = $job->employee_status_id;
            $this->employment_type = $job->employee_type_id;
            $this->position = $job->position_id;
            $this->department = $job->position->department;
            $this->line_manager = $job->line_manager_id;
            $this->immediate_head = $job->immediate_head_id;
            $this->join_date = $job->join_date ? $this->formatDate($job->join_date) : null;
            $this->regularization_date = $job->regularization_date ? $this->formatDate($job->regularization_date) : null;
            $this->probation_start_date = $job->probation_start_date ? $this->formatDate($job->probation_start_date) : null;
            $this->probation_end_date = $job->probation_end_date ? $this->formatDate($job->probation_end_date) : null;
            $this->date_separated = $job->date_separated ? $this->formatDate($job->date_separated) : null;
            $this->regularization_date = $job->regularization_date ? $this->formatDate($job->regularization_date) : null;
           
    }

    public function formatDate($date)
    {
        return $date
            ? date('F d, Y', strtotime($date))
            : null;
    }

    public function saveFormattedDate($date)
    {
        return $date
            ? date('Y-m-d', strtotime($date))
            : null;
    }

    public function updatedProbationStartDate()
    {
       $this->probation_end_date = date('F d, Y', strtotime('+6 months', strtotime($this->probation_start_date)));
    }

    public function updatedPosition()
    {
        $this->department = Position::with('department')
        ->where('id', $this->position)
        ->first()
        ->department;
    }

    public function save()
    {
        $this->validate();

        try {

            $job = ModelsJobInformation::find($this->employee->id);
            $job->employee_status_id = $this->employment_status;
            $job->employee_type_id = $this->employment_type;
            $job->position_id = $this->position;
            $job->line_manager_id = $this->line_manager;
            $job->immediate_head_id = $this->immediate_head;
            $job->join_date = $this->saveFormattedDate($this->join_date);
            $job->probation_start_date = $this->saveFormattedDate($this->probation_start_date);
            $job->probation_end_date = $this->saveFormattedDate($this->probation_end_date);
            $job->regularization_date = $this->saveFormattedDate($this->regularization_date);
            $job->date_separated = $this->saveFormattedDate($this->date_separated);
            $job->save();

            $this->clearVars();
            $this->emit('leave-refresh');
            return $this->dispatchBrowserEvent('prompt-message', [
                'type' => 'success',
                'message' => 'Save Successfully.'
            ]);
        } catch (QueryException $e) {
            return $this->dispatchBrowserEvent('prompt-message', [
                'type' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }

    public function clearVars()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
