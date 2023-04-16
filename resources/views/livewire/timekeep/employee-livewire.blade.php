<div>
    <table class="dt-basic2 table  table-hover table-striped w-100" >
        <thead>
            <tr>
                {{-- <th>Membership ID</th> --}}
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Schedule</th>
                <th>Position</th>
                <th>Dept/Branch</th>
                <th>DTR Period</th>
                <th>Basic Pay</th>
                <th>Rate/Cutoff</th>
                <th>Rate/Day</th>
                <th>Rate/Hour</th>
                <th>Allowance</th>
                <th>Allowance/Cutoff</th>
                <th>Allowance/Day</th>
                <th>Allowance/Hour</th>

            </tr>
        </thead>
    </table>
</div>
@push('scripts')
    <script>
        $('.dt-basic2').DataTable({
            stateSave: true,
            processing: true,
            fixedHeader: {
                header: true,
                footer: true
            },
            responsive: true,
            ajax: "{!! url()->current() !!}",
            deferRender: true,
            columns: @json($data),
        });
    </script>
@endpush
