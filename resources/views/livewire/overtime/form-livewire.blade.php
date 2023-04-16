<div class="row mt-5">
    <div class="col-md-4 mb-3">
        <label>Date Rendered</label>
        <div class="input-group">

            <input type="text" class="form-control @error('date') is-invalid @enderror" placeholder="Select date" id="datepicker-1" onchange="selectDate(this.value)">
            <div class="input-group-append">
                <span class="input-group-text fs-xl">
                    <i class="fal fa-calendar"></i>
                </span>
            </div>
            @error('date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

    </div>
<div class="col-md-4 mb-3">
    <label>Time rendered (From)</label>
    <div class="input-group">

        <input type="time" class="form-control @error('from') is-invalid @enderror" placeholder="select from" wire:model="from">
        <div class="input-group-append">
            <span class="input-group-text fs-xl">
                <i class="fal fa-clock"></i>
            </span>
        </div>
        @error('from')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
<div class="col-md-4 mb-3">
    <label>Time rendered (To)</label>
    <div class="input-group">
        <input type="time" class="form-control @error('to') is-invalid @enderror" placeholder="select to" wire:model="to">
        <div class="input-group-append">
            <span class="input-group-text fs-xl">
                <i class="fal fa-clock"></i>
            </span>
        </div>
        @error('to')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
    {{-- <div class="col-md-6 mb-3">
        <label>Total No. of hours:</label>
        <div class="input-group">
            <input type="text" class="form-control" wire:model="total_hours">
        </div>
    </div> --}}

    <div class="col-md-12 mb-3">
        <label>Purpose of overtime work:</label>
        <div class="input-group">
            <textarea class="form-control @error('purpose') is-invalid @enderror" wire:model="purpose"></textarea>
        </div>
        @error('purpose')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-md-12 mb-3">
        <label>Client(s) / Customer(s) overtime needed for:</label>
        <div class="input-group">
            <textarea class="form-control @error('client') is-invalid @enderror" wire:model="client"></textarea>
        </div>
        @error('client')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-md-12 mb-3">
        <label>Detailed explanation why you need the overtime:</label>
        <div class="input-group">
            <textarea class="form-control @error('detailed') is-invalid @enderror" wire:model="detailed"></textarea>
        </div>
        @error('detailed')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-md-12 mb-3">
        <label>Signature</label>
        <div class="form-group mb-0" wire:ignore>
            <div class="custom-file">
                <input type="file" class="custom-file-input @error('signature') is-invalid @enderror" id="file" wire:model="signature">
                <label class="custom-file-label" for="customFile" id="file_name">Choose file</label>
            </div>
        </div>
        @error('signature')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>


    {{-- <div id="status2">
                <label>Select --</label>
                <select class="form-control" id="manpower">
                    <option value="1">Budgeted</option>
                    <option value="2">Unbudgeted</option>
                </select>
        </div> --}}

    <div class="col-md-12 pt-4 pb-2">
        <button class="btn btn-outline-primary float-right" id="submit" wire:click="submit">Submit <span
                class="fal fa-arrow-right"></span></button>
    </div>
    @push('scripts')
        <script src="js/moment.min.js"></script>
        <script src="js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <script>
            var range = []
            $('#datepicker-1').datepicker()
            const selectDate = (date) => {
                @this.set('date',date)
            }
            // $('.datepicker-1').val('')
        </script>
    @endpush
</div>
