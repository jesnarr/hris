@extends('layouts.base')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
    <style>
        .status {
            top: inherit;
            right: inherit;
        }

        .status:before {
            /* background-color: #c0c0c0 !important; */
        }

    </style>
@endsection

@section('content')
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-chart-area'></i>
            <span class='fw-300'>Dashboard</span>
        </h1>
    </div>

    <div class="flex justify-center items-center mb-4">
        <div class="col-sm-4 col-xl-4">
            <div class="p-3 card bg-white shadow-md h-100">
                <div class="mt-3 flex items-center">
                    <i class="fal fa-stopwatch text-3xl text-blue-500 font-bold"></i>
                    <p class="pl-3 text-gray-900 text-lg font-bold">Clock in/out</p>
                    <span class="ml-auto text-gray-900 text-lg font-bold">{{ date('M d - G:i') }}</span>
                </div>
                @if ($count  == 0)


                    @if (isset($log->status) && $log->status == 1)
                    <button class="mt-3 py-3 btn bg-red-500 hover:bg-red-600 rounded-lg" id="loader_out" disabled style="display:none">
                        <p class="text-white text-xl font-bold align-middle text-center">
                            <i class="fal fa-sign-out-alt mr-2"></i> Loading...
                            <span class="spinner-border spinner-border-sm mr-1" role="status"aria-hidden="true"></span>
                        </p>
                    </button>
                        <button type="button" class="mt-3 py-3 btn bg-red-500 hover:bg-red-600 rounded-lg" id="out_button" onclick="timelog({{ $log->id }})">
                            <p class="text-white text-xl font-bold align-middle text-center"><i class="fal fa-sign-out-alt mr-2"></i> Clock out {{ date('h:i A') }}</p>
                        </button>
                    @else
                    <button class="mt-3 py-3 btn bg-green-500 hover:bg-green-600 rounded-lg" id="loader_in" disabled style="display:none">
                        <p class="text-white text-xl font-bold align-middle text-center">
                            <i class="fal fa-clock mr-2"></i> Loading...
                            <span class="spinner-border spinner-border-sm mr-1" role="status"aria-hidden="true"></span>
                        </p>
                    </button>
                        <button type="button" class="mt-3 py-3 btn bg-green-500 hover:bg-green-600 rounded-lg"   id="in_button" onclick="timelog()">
                            <p class="text-white text-xl font-bold align-middle text-center"><i class="fal fa-clock mr-2"></i> Clock in</p>
                        </button>
                    @endif
                @else
                    <button type="button" class="mt-3 py-3 btn bg-red-500 hover:bg-red-600 rounded-lg">
                        <p class="text-white text-lg font-bold align-middle text-center"><i class="fal fa-times-circle mr-2"></i> Reached the maximum attempts.</p>
                    </button>
                @endif
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-6 col-xl-4 py-2">
            <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g h-100">
                <div class="">
                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                        3
                        <small class="m-0 l-h-n">
                            Birthdays</small>
                    </h3>
                </div>
                <i class="fal fa-calendar position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1"
                    style="font-size:6rem"></i>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4 py-2">
            <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g h-100">
                <div class="">
                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                        5
                        <small class="m-0 l-h-n">
                            Leaves</small>
                    </h3>
                </div>
                <i class="fal fa-file position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1"
                    style="font-size:6rem"></i>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4 py-2">
            <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g h-100">
                <div class="">
                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                        {{ $employees_count }}
                        <small class="m-0 l-h-n">
                            Head count</small>
                    </h3>
                </div>
                <i class="fal fa-users position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1"
                    style="font-size:6rem"></i>
            </div>
        </div>
    </div>
    <div class="row pt-3">
        <div class="py-2 col-12">
            <div id="panel-1" class="panel h-100">
                <div class="panel-hdr">
                    <h2>
                        Who's<span class="fw-300">IN/OUT</span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <table class="dt-basic table table-hover table-striped h-100 w-100">
                            <thead>
                                <tr>
                                    {{-- <th>Membership ID</th> --}}
                                    <th>Name</th>
                                    <th>IN/OUT</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $l)
                                    <tr>
                                        <td>{{ $l->name }}</td>
                                        <td>
                                            @if ($l->status == 0)
                                                Out <span
                                                    class="badge badge-danger">{{ date('g:i A', strtotime($l->out)) }}</span>today
                                            @else
                                                In <span
                                                    class="badge badge-success">{{ date('g:i A', strtotime($l->in)) }}</span>
                                                today
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>

        <div class="py-2 col-12">
            <div id="panel-6" class="panel h-100">
                <div class="panel-hdr">
                    <h2>
                        Out<span class="fw-300"> of Work</span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <table class="dt-basic table table-hover table-striped w-100">
                            <thead>
                                <tr>
                                    {{-- <th>Membership ID</th> --}}
                                    <th>Name</th>
                                    <th>Position</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($out_of_work as $l)
                                    <tr>
                                        <td>{{ $l->name }}</td>
                                        <td>
                                            @if ($l->status == 0)
                                                {{ $l->in }}
                                            @else
                                                {{ $l->out }}
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection

@section('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="/js/datatable.js"></script> --}}
    <script src="/js/dashboard/dashboard.js"></script>
    <script>

        dtBasicOptions.columnDefs = [{
            "targets": 0,
            "sortable": false,
        }];
        $('.dt-basic').dataTable(dtBasicOptions);
    </script>
@endsection
