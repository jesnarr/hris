<div class="ml-3 mt-2">
    <div class="row">
        <div class="col-md-4">
            <div class="input-group">
                <input type="text" class="form-control datepicker-1" placeholder="Select date" id="datepicker-1">
                <div class="input-group-append">
                    <span class="input-group-text fs-xl">
                        <i class="fal fa-calendar"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>
@push('scripts')
    <script src="/js/moment.min.js"></script>
    <script src="/js/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
    <script>
        const start = "{{ $start }}";
        const end = "{{ $end }}";
        var range = []
        $('#datepicker-1, #datepicker-modal-2').daterangepicker({
            opens: 'left',
        }, function(start, end, label) {
            range.push(start.format('YYYY-MM-DD'))
            range.push(end.format('YYYY-MM-DD'))
            @this.set('range', range)
            range = []
        }).val(start + ' - ' + end);
    </script>
@endpush
