<div class="col-md-12">
<div >
    <label>Allowances</label>
    <div class="row">
        <div class="col-md-3" wire.ignore>
            <label>Allowance</label>
            <input type="text" autocomplete="off" class="form-control" onchange="calculate_allowance(this.value)"
                id="allowance" value="{{ isset($salary->allowance) ? number_format($salary->allowance,2) : 0.00 }}">
            </select>
        </div>

        <div class="col-md-3" wire.ignore>
            <label>Allowance/Cutoff</label>
            <input type="text" class="form-control" disabled id="allowance_per_cutoff">
        </div>

        <div class="col-md-3" wire.ignore>
            <label>Allowance/day</label>
            <input type="text" class="form-control" disabled id="allowance_per_day">
        </div>

        <div class="col-md-3" wire.ignore>
            <label>Allowance/hr</label>
            <input type="text" class="form-control" disabled id="allowance_per_hr">
        </div>
    </div>
</div>

<div class="flex justify-end col-md-12 mt-2">
    <x-forms.button-success wire:click="submit">Save <i class="fal fa-arrow-right"></i>
    </x-forms.button-success>
</div>
</div>
@push('scripts')
    <script>
        var allowance = document.getElementById('allowance').value;
        var allowance_per_cutoff = document.getElementById('allowance_per_cutoff')
        var allowance_per_day = document.getElementById('allowance_per_day')
        var allowance_per_hr = document.getElementById('allowance_per_hr')
        var allowance_rate = '{{ isset($this->settings->allowance_per_day) ? $this->settings->allowance_per_day : 0 }}'

        allowance_per_cutoff.value = (parseFloat(allowance.replace(',', '')) / 2).toFixed(2);
        allowance_per_day.value = (parseFloat(allowance.replace(',', '')) / allowance_rate).toFixed(2);
        allowance_per_hr.value = (parseFloat(allowance_per_day.value) / 8).toFixed(2);

        @this.set('allowance',parseFloat(allowance.replace(',','')).toFixed(2))

        const calculate_allowance = async (value) => {
            var allowance_per_cutoff = document.getElementById('allowance_per_cutoff')
            var allowance_per_day = document.getElementById('allowance_per_day')
            var allowance_per_hr  = document.getElementById('allowance_per_hr')
            var allowance_rate = '{{ isset($this->settings->allowance_per_day) ? $this->settings->allowance_per_day : 0 }}'

            allowance_per_cutoff.value = parseFloat(value.replace(',','')) / 2;
            allowance_per_day.value = (parseFloat(value.replace(',','')) / allowance_rate).toFixed(2);
            allowance_per_hr.value = (parseFloat(allowance_per_day.value) / 8).toFixed(2);

            @this.set('allowance',parseFloat(value.replace(',','')).toFixed(2))
        }

        window.addEventListener('save-employee-allowance', function(){
                location.reload();
                return displayMessage('success','Successfully saved')
            })
    </script>
@endpush
