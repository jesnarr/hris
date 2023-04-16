@extends('layouts.one-panel')

@section('head')
<style>
    .dt-basic td > p { margin: 0px; }
</style>
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
    <li class="breadcrumb-item">MRF</li>
@endsection

@section('panel-header')
<h2>MRF List</h2>
{{-- <div class="panel-toolbar pr-3 mb-1 align-self-end">
    <a href="/permission/0" class="btn btn-sm btn-primary"><i class="fal fa-plus"></i> Add Agent</a>
</div> --}}
@endsection

@section('panel-content')
<table class="dt-basic table table-bordered table-hover table-striped w-100">
    <thead>
        <tr>
            <th>Requested By</th>
            <th>Department</th>
            <th>Position</th>
            <th>Number</th>
            <th>Date Needed</th>
            <th>Specification</th>
            <th>Reason for Requisition</th>
            <th>Specifications</th>
            <th>Qualification</th>
            {{-- <th>Action</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $mrf)
            <tr>
                <td>
                    <a href="/mrf/view/{{ $mrf->id }}">{{ $mrf->last_name.', '.$mrf->first_name}}</a>
                </td>
                <td>
                    @if(array_key_exists($mrf->department,$arr))
                            {{ $arr[$mrf->department] }}
                    @endif
                </td>
                <td>{{ strtoupper($mrf->position) }}</td>
                <td>{{ $mrf->number }}</td>
                <td>{{ date('F d, Y',strtotime($mrf->date_needed)) }}</td>
                <td>
                    @if(array_key_exists($mrf->specs1,$arr2))
                         {{ $arr2[$mrf->specs1] }}
                    @endif
                </td>
                <td>
                     @if(array_key_exists($mrf->app_status,$arr3))
                    {{ $arr3[$mrf->app_status] }}
                      @endif
                    </td>
                <td>
                    @if(array_key_exists($mrf->specs2,$arr4))
                    {{ $arr4[$mrf->specs2] }}
                     @endif
                </td>
                <td>{{ $mrf->qualification }}</td>
                {{-- <td>
                    <a href="/generate_pdf">
                        Generate PDF
                    </a>

                </td> --}}
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')
<script>
    dtBasicOptions.columnDefs = [{
        "targets": 0,
        "sortable": false,
    }];
    dtBasicOptions.order = [[ 1, "asc" ]];

    $('.dt-basic').dataTable(dtBasicOptions);
</script>
@endsection
