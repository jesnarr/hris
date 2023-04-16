<div class="row">
    <div class="col-md-2">
        <select class="form-control" wire:model="filter">
            <option value="">Select filter --</option>
            <option value="1">Monthly</option>
            <option value="2">Custom Date</option>
        </select>
    </div>

    @if ($filter && $filter == 1)
        <div class="col-md-2">
            <select class="form-control" wire:model="month" wire:change="select">
                <option value="">Select month --</option>
                @foreach ($months as $key => $val)
                    <option value="{{ $key }}">{{ $val }}</option>
                @endforeach
            </select>
        </div>
    @endif

    <div class="col-md-2 mb-3" style="display: {{ $filter == 2 ? 'block' : 'none' }}">
        {{-- <label><strong>Select Range --</strong></label> --}}
        <div class="input-group">
            <input type="text" class="form-control datepicker-1" placeholder="Select date" id="datepicker-1">
            <div class="input-group-append">
                <span class="input-group-text fs-xl">
                    <i class="fal fa-calendar"></i>
                </span>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="/js/moment.min.js"></script>
        <script src="/js/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
        <script>
            var range = []
            $('#datepicker-1, #datepicker-modal-2').daterangepicker({
                opens: 'left',
            }, function(start, end, label) {
                range.push(start.format('YYYY-MM-DD'))
                range.push(end.format('YYYY-MM-DD'))
                @this.set('range', range)
                range = []
            });
            $('#datepicker-1').val('')
        </script>
    @endpush
</div>
