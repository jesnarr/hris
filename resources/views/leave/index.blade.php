@extends('layouts.one-panel')
@section('panel-header')
    <div class="panel-toolbar pr-3 mb-1 align-self-end d-flex-end">
        <x-forms.button-primary onclick="modalComponent(this.value,null)" data-target="#add-schedule" class="float-right"  value="add-leave"><i class="fal fa-plus mr-2"></i>Add
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
                                   Leave
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
                                        <th>Type name</th>
                                        <th>Entitlement</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('modals')
<div class="modal fade " tabindex="-1" id="add-leave" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4">New type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                @livewire('modals.leave.add')
            </div>

        </div>
    </div>
</div>
@endpush

@section('scripts')
{{-- <script src="/js/schedule/schedule.js"></script> --}}
<script src="/js/components/modal.js"></script>
<script src="/js/leave/leave.js"></script>
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
