@extends('layouts.base')

@section('og')
    <meta property="og:title" content="HRIS" />
    <link rel="stylesheet" media="screen, print"
    href="{{ asset('css/timepicker/jquery.timepicker.css') }}">
    <link rel="stylesheet" media="screen, print"
    href="{{ asset('css/timepicker/jquery.timepicker.min.css') }}">

    <style>
        input {
            border-color: transparent !important;
            border: 0.5px solid #c0c0c0 !important;
            text-align: right;
        }
        .ui-timepicker-wrapper{
            width: 15% !important;
        }
    </style>
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/employee">Employee</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $title }}</a></li>
@endsection

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-md">
                    <div class="card-body">

                        <div class="card-title flex justify-between mb-2">
                            <div>Set new schedule</div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger" role="error">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                        <div class="container">
                            @livewire('schedule.form-livewire')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/dashboard/dashboard.js"></script>

@endsection
