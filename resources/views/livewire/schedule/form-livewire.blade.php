<div class="row mt-3 mb-3" wire:ignore>
    <div class="col-md-4 mb-3">
        <label>Schedule Name *</label>
        <input type="text" class="form-control" wire:model="name" placeholder="Schedule name">
    </div>
    <div class="col-md-4 mb-3">
        <label>Effective From *</label>
        <input type="text" class="form-control" wire:model="effective_from" placeholder="Effective From">
    </div>

    <div class="col-md-4 mb-3">
        <label>Standard working hours/day</label>
        <select class="form-control" wire:model="standard" id="standard">
            <option value="">Select --</option>
            @foreach ($times as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        {{-- <input type="text" class="form-control timepicker2" wire:model="standard"> --}}
    </div>
    <table class="table table-borderless">
        <tbody>
            <tr>
                <td>Working day</td>
                <td>Day</td>
                <td>Time Range</td>
                <td></td>
                <td>Break Time</td>
                <td>Total Hours</td>
            </tr>
            @foreach ($schedule as $i => $schedule)
                <tr>
                    <td>
                        <div class="col-md-1 mb-3 mt-2">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input"
                                    id="customcheckbox.{{ $i }}"
                                    onchange="checkWorkingDay(this.id,{{ $i }})"
                                    wire:model='schedule.{{ $i }}.check'>
                                <label class="custom-control-label" for="customcheckbox.{{ $i }}"></label>
                            </div>
                        </div>
                    </td>
                    <td>
                        {{-- {{ $days[$i] }} --}}
                    </td>
                    <td>

                        <div class="input-group">

                            <select class="form-control" id="schedule.{{ $i }}.day_start"
                                id="schedule.{{ $i }}.day_start" style="display:block"
                                onchange="timeRange(this.value,{{ $i }})">
                                <option value="">Start --</option>
                                @foreach ($times as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                            {{-- {{ isset($schedule[$i]['day_start']) ? $schedule[$i]['day_start'] : 'N/A' }} --}}
                            <select class="form-control" {{-- {{ $standard ? '' : 'disabled' }} --}}
                                wire:model="schedule.{{ $i }}.day_end"
                                id="schedule.{{ $i }}.day_end" style="display:block"
                                onchange="timeRange(this.value,{{ $i }})">
                                <option value="">End --</option>
                                @foreach ($times as $key => $value)
                                    @if ($standard <= $key)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group" id="schedule.{{ $i }}.non-working" style="display:none">
                            <label>Non-working day</label>
                        </div>

                    </td>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultChecked{{ $i }}"
                                checked="" wire:model="schedule.{{ $i }}.breaktime">
                            <label class="custom-control-label" for="defaultChecked{{ $i }}"></label>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <select class="form-control" wire:model="schedule.{{ $i }}.breaktime_start">
                                <option value="">Start --</option>
                                @foreach ($times as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                            {{-- <span class="input-group-addon">-</span> --}}
                            <select class="form-control" {{-- {{ isset($schedule[$i]['breaktime_start']) ? '' : 'disabled' }} --}}
                                wire:model="schedule.{{ $i }}.breaktime_end">
                                <option value="">End --</option>
                                @foreach ($times as $key => $value)
                                    @if (isset($schedule[$i]['breaktime_start']) && $schedule[$i]['breaktime_start'] + $standard <= $key)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </td>
                    <td> <input type="text" class="form-control" disabled></td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="flex justify-end col-md-12 mt-5">
        <x-forms.button-success wire:click="save">Save <i class="fal fa-arrow-right"></i>
        </x-forms.button-success>
    </div>

</div>
@push('scripts')
    <script src="{{ asset('js/timepicker/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('js/timepicker/jquery.timepicker.min.js') }}"></script>
    <script>
        $('.timepicker2').timepicker({
            'timeFormat': 'H:i',
        }).on('change', function(e) {
            @this.set('standard', e.target.value)
        });
        $('.timepicker').timepicker({
            'timeFormat': 'H:i',
            'disableTimeRanges': [
                [@this.get('standard'), @this.get('standard')],
            ]
        }).on('change', function(e) {

            @this.set('standard', e.target.value)
        });

        const checkWorkingDay = (id, i) => {
            var checkBox = document.getElementById(id);
            var day_start = document.getElementById('schedule.' + i + '.day_start')
            var day_end = document.getElementById('schedule.' + i + '.day_end')
            var non_working = document.getElementById('schedule.' + i + '.non-working')
            if (checkBox.checked == true) {
                day_end.style.display = "block";
                day_start.style.display = "block";
                non_working.style.display = "none";
            } else {
                day_end.style.display = "none";
                day_start.style.display = "none";
                non_working.style.display = "block";
            }
        }

        const timeRange = async (value, i) => {

            var standard = document.getElementById('standard').value
            var day_start = document.getElementById('schedule.' + i + '.day_start').value
            var day_end = document.getElementById('schedule.' + i + '.day_end').value
            var breaktime = document.getElementById('defaultChecked' + i)
            var break_time_total = 0;
            if (breaktime.checked == true) {
                var breaktime_start = document.getElementById('schedule.' + i + '.breaktime_start')
                var breaktime_end = document.getElementById('schedule.' + i + '.breaktime_end')
                break_time_total = (parseFloat(breaktime_end.value) - parseFloat(breaktime_start.value)).toFixed(2)
            }
            var total = 0;
            total = (parseFloat(day_end) - parseFloat(day_start)).toFixed(2)
            if (total + break_time_total < standard)
                return displayMessage('error', 'Time must be equal to Standard hours/day')
        }
    </script>
@endpush
