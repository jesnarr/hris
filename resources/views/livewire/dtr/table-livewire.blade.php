<div>


        {{-- @foreach ($dtr as $row)
            <tr>
                <td>{{ $row['full_name'] }}</td>
                <td>{!! $row['created_at'] !!}</td>
                <td>{{ $row['in'] }}</td>
                <td>{{ $row['out'] }}</td>
                <td>{{ $row['late'] }}</td>
                <td>{{ $row['ut'] }}</td>
                <td>{{ $row['lwop'] }}</td>
                <td>{{ $row['reg_ot'] }}</td>
                <td>{{ $row['ot_rd'] }}</td>
                <td>{{ $row['ot_spc_day'] }}</td>
                <td>{{ $row['reg_hd'] }}</td>
                <td>{{ $row['nd'] }}</td>
                <td>{{ $row['sl'] }}</td>
                <td>{{ $row['vl'] }}</td>
                <td>{{ $row['total_hr'] }}</td>
                <td>{{ $row['remarks'] }}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endforeach --}}

        @foreach($data as $key => $value)
        <tr>
            <td class="__total">{{ $key }}</td>
            <td class="__total"></td>
            <td class="__total"></td>
            <td class="__total"></td>
            <td class="__total">{{ $data[$key]['late'] }}</td>
            <td class="__total">{{ $data[$key]['ut'] }}</td>
            <td class="__total">{{ $data[$key]['lwop'] }}</td>
            <td class="__total">{{ $data[$key]['reg_ot'] }}</td>
            <td class="__total">{{ $data[$key]['ot_rd'] }}</td>
            <td class="__total">{{ $data[$key]['ot_spc_day'] }}</td>
            <td class="__total">{{ $data[$key]['reg_hd'] }}</td>
            <td class="__total">{{ $data[$key]['nd'] }}</td>
            <td class="__total">{{ $data[$key]['sl'] }}</td>
            <td class="__total">{{ $data[$key]['vl'] }}</td>
            <td class="__total">₱{{ $data[$key]['basic'] }}</td>
            <td class="__total"></td>
            <td class="__total">₱{{ $data[$key]['basic'] }}</td>
            <td class="__total">{{ $data[$key]['allowance'] != 0 ? '₱'.$data[$key]['allowance'] : '0.00' }}</td>
            <td class="__total">₱{{ $data[$key]['total'] }}</td>

        </tr>
        @endforeach

</div>

@push('scripts')
    <script>
    //     const dt_basic_rowgroup = () => {
    //     $('.dt-basic-rowgroup').dataTable({
	// 		responsive: true,
	// 		pageLength: 15,
	// 		rowGroup: {
	// 			dataSrc: "data.full_name"
	// 		},
    //         "deferRender": true,
    //         stateSave: true,
	// 	});
    //   }

    //   dt_basic_rowgroup();

    //      const data = @json($dtr);
        // console.log(data);
        window.addEventListener('refresh-dtr-table',function(event){
            $('.dt-basic-rowgroup').DataTable().destroy();
            dt_basic_rowgroup();
        })
    </script>
@endpush
