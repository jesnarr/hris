@extends('layouts.base')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div id="panel-1" class="panel" data-panel-lock="false" data-panel-close="false"
                data-panel-fullscreen="false" data-panel-collapsed="false" data-panel-color="false"
                data-panel-locked="false" data-panel-refresh="false" data-panel-reset="false">
                <div class="panel-hdr">
                    @yield('panel-header')
                </div>
                <div class="panel-container show">
                    <div class="panel-content border-faded border-left-0 border-right-0 border-top-0">
                        <div class="row no-gutters">
                            <div class="col-12">
                                @yield('panel-content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
