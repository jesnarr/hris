@extends('layouts.one-panel')

@section('head')
@endsection

@section('panel-header')
    <div class="panel-toolbar pr-3 mb-1 align-self-end d-flex-end">
        <x-forms.button-primary onclick="add_schedule(null)" data-target="#add-schedule" class="float-right">Add
        </x-forms.button-primary>
    </div>
@endsection
@section('panel-content')
    <div class="row">
        <div class="list-grid mt-5 col-md-12 col-xs-12">
            <div class="projects">
                <div id="panel-1" class="panel panel-locked">
                    {{-- start of header --}}
                    <div class="panel-hdr">
                        <h2>
                            <div class="d-flex flex-row">
                                <div class="p-2 flex-5">
                                    Work schedule
                                </div>
                            </div>
                        </h2>

                    </div>
                    {{-- end of header --}}

                    {{-- start of panel --}}
                    <div class="panel-container show">
                        <div class="panel-content">
                            <table class="dt-basic table  table-hover table-striped w-100">
                                <thead>
                                    <tr>
                                        {{-- <th>Membership ID</th> --}}
                                        <th>ID</th>
                                        <th>Days</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>

                            {{-- <div class="col-md-12 mb-4">
                            <button onClick="" class="btn btn-sm btn-primary" id="move" style="display:none">Move</button>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('modals')
    <div class="modal fade" id="add-schedule" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" style="top:20%">
            <div class="modal-content" style="border-radius: 0.75rem;">
                <div class="modal-header">
                    <h1 class="modal-title text-lg">Add Schedule</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times text-red-500"></i></span>
                    </button>
                </div>
                @livewire('modals.schedule.add', ['days' => $days,'time' => $time])
            </div>
        </div>
    </div>
@endpush

@section('scripts')
    <script src="/js/schedule/schedule.js"></script>
    <script>
            $('.dt-basic').DataTable({
                stateSave: true,
                processing: true,
                fixedHeader: {
                    header: true,
                    footer: true
                },
                responsive: true,
                ajax: "{!! url()->current() !!}",
                deferRender: true,
                columns: @json($response),
            });

    </script>
@endsection
