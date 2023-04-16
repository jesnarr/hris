<div class="col-md-12">
    <div>
        <label>Salary</label>
        <div class="row">

            <div class="col-md-3" wire.ignore>
                <label>Basic Pay</label>
                <input type="text" autocomplete="off" class="form-control" onchange="calculate_salary(this.value)"
                    id="basic_pay" value="{{ isset($salary->basic_pay) ? number_format($salary->basic_pay,2) : 0.0 }}">
            </div>

            <div class="col-md-3" wire.ignore>
                <label>Rate/Cutoff</label>
                <input type="text" class="form-control" disabled id="rate_per_cutoff">
            </div>

            <div class="col-md-3" wire.ignore>
                <label>Rate/day</label>
                <input type="text" class="form-control" disabled id="rate_per_day">
            </div>
            <div class="col-md-3" wire.ignore>
                <label>Rate/hr</label>
                <input type="text" class="form-control" disabled id="rate_per_hr">
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
        var basic_pay = document.getElementById('basic_pay').value;
        var rate_per_cutoff = document.getElementById('rate_per_cutoff')
        var rate_per_day = document.getElementById('rate_per_day')
        var rate_per_hr = document.getElementById('rate_per_hr')
        var rate = '{{ isset($this->settings->rate_per_day) ? $this->settings->rate_per_day : 0 }}'

        rate_per_cutoff.value = (parseFloat(basic_pay.replace(',', '')) / 2).toFixed(2);
        rate_per_day.value = (parseFloat(basic_pay.replace(',', '')) / rate).toFixed(2);
        rate_per_hr.value = (parseFloat(rate_per_day.value) / 8).toFixed(2);

        @this.set('basic_pay',parseFloat(basic_pay.replace(',','')).toFixed(2))


        const calculate_salary = async (value) => {
            var rate_per_cutoff = document.getElementById('rate_per_cutoff')
            var rate_per_day = document.getElementById('rate_per_day')
            var rate_per_hr = document.getElementById('rate_per_hr')
            var rate = '{{ isset($this->settings->rate_per_day) ? $this->settings->rate_per_day : 0 }}'

            rate_per_cutoff.value = parseFloat(value.replace(',', '')) / 2;
            rate_per_day.value = (parseFloat(value.replace(',', '')) / rate).toFixed(2);
            rate_per_hr.value = (parseFloat(rate_per_day.value) / 8).toFixed(2);

            @this.set('basic_pay',parseFloat(value.replace(',','')).toFixed(2))
        }

        window.addEventListener('save-employee-basic_pay', function() {
            location.reload();
            return displayMessage('success', 'Successfully saved')
        })
    </script>
@endpush
