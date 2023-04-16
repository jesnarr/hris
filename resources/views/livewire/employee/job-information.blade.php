<div>
    <div class="row">
        <div class="col-12">
            <div class="card border shadow-md">
                <div class="card-body">

                    <div class="card-title flex justify-between mb-2">
                        <div>Job Information</div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger" role="error">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif

                    <div class="row mt-3">

                        <div class="col-md-4">
                            <label>Join Date</label>
                            <input type="text" autocomplete="off" class="form-control" wire:model="join_date"
                                id="join_date">
                        </div>

                        <div class="col-md-4">
                            <label>Employment Status</label>
                            <select class="form-control" wire:model="employment_status">
                                <option value="">--Select--</option>
                                @foreach ($employee_statuses as $val)
                                    <option value="{{ $val->id }}">{{ $val->status }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label>Employment Type</label>
                            <select class="form-control" wire:model="employment_type">
                                <option value="">--Select--</option>
                                @foreach ($employee_types as $val)
                                    <option value="{{ $val->id }}">{{ $val->employee_type }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col-md-4" wire:ignore>
                            <label>Line Manager</label>
                            <select class="form-control" wire:model="line_manager" id="line_manager">
                                <option value="">--Select--</option>
                                @foreach ($line_managers as $val)
                                    <option value="{{ $val->id }}">
                                        {{ mb_strtoupper($val->last_name) . ', ' . mb_strtoupper($val->first_name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4" wire:ignore>
                            <label>Immediate Head</label>
                            <select class="form-control" wire:model="immediate_head" id="immediate_head">
                                <option value="">--Select--</option>
                                @foreach ($line_managers as $val)
                                    <option value="{{ $val->id }}">{{ mb_strtoupper($val->last_name) . ', ' . mb_strtoupper($val->first_name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4" wire:ignore>
                            <label>Position</label>
                            <select class="form-control" wire:model="position" id="position">
                                <option value="">--Select--</option>
                                @foreach ($positions as $val)
                                    <option value="{{ $val->id }}">{{ $val->position }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label>Department</label>
                            <input type="text" disabled class="form-control" wire:model="department">
                        </div>

                        <div class="col-md-4" style="display:{{ $employment_status == 3 ? 'block' : 'none' }}">
                            <label>Regularization Date</label>
                            <input type="text" autocomplete="off" class="form-control"
                                wire:model="regularization_date" id="regularization_date">
                        </div>

                        <div class="col-md-4">
                            <label>Probation Start Date</label>
                            <input type="text" autocomplete="off" class="form-control"
                                wire:model="probation_start_date" id="probation_start_date">
                        </div>

                        <div class="col-md-4">
                            <label>Probation End Date</label>
                            <input type="text" autocomplete="off" class="form-control" wire:model="probation_end_date"
                                id="probation_end_date">
                        </div>

                        <div class="col-md-4" style="display:{{$employment_status == 5 ? 'block' : 'none'  }}">
                            <label>Date Separated</label>
                            <input type="text" autocomplete="off" class="form-control" wire:model="date_separated" id="date_separated">
                        </div>


                        <div class="flex justify-end col-md-12 mt-5">
                            <x-forms.button-success wire:click="save">Save <i class="fal fa-arrow-right"></i>
                            </x-forms.button-success>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            const JOB_INFORMATION_DATE = ['probation_start_date', 'probation_end_date', 'contract_start_date',
                'contract_end_date', 'join_date', 'regularization_date','date_separated'
            ]
            JOB_INFORMATION_DATE.forEach(el => {
                $(`#${el}`).datepicker({
                    format: "MM dd, yyyy",
                    autoclose: true,
                    todayBtn: "linked",
                    todayHighlight: true,
                }).change(function(e) {
                    @this.set(`${el}`, e.target.value)
                })
            })

            $('#position').select2().change(function(e) {
                @this.set('position', e.target.value)
            })
            $('#line_manager').select2().change(function(e) {
                @this.set('line_manager', e.target.value)
            })
            $('#immediate_head').select2().change(function(e) {
                @this.set('immediate_head', e.target.value)
            })
        </script>
    @endpush
</div>
