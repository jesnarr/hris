@extends('layouts.one-panel')

@section('head')
    <link rel="stylesheet" media="screen, print"
        href="/css/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.css">
@endsection

@section('panel-header')
    <div class="pr-3 mb-1 align-self-end d-flex-end">
        <x-forms.button-primary onclick="modalComponent(this.value,null)" data-target="#request-overtime"
            class="float-right" value="request-overtime">
            <i class="fal fa-plus mr-2"></i>Request Overtime
        </x-forms.button-primary>
    </div>
@endsection
@section('panel-content')

    <div class="container">

        <div class="list-grid mt-5 col-md-12 col-xs-12">
            <div class="projects">
                <div id="panel-1" class="panel panel-locked">
                    {{-- start of header --}}
                    <div class="panel-hdr">
                        <h2>
                            <div class="d-flex flex-row">
                                <div class="p-2 flex-5">
                                    My Requests
                                </div>
                            </div>
                        </h2>

                    </div>
                    {{-- end of header --}}

                    {{-- start of panel --}}
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="col-md-12 mb-4">
                                <table class="dt-basic table  table-hover table-striped w-100">
                                    <thead>
                                        <tr>
                                            {{-- <th>Membership ID</th> --}}
                                            <th>Full name</th>
                                            <th>Date</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Total Hours</th>
                                            <th>Purpose</th>
                                            <th>Client</th>
                                            <th>Detailed</th>
                                            <th>Status</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            {{-- <th>Membership ID</th> --}}
                                            <th>Full name</th>
                                            <th>Date</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Total Hours</th>
                                            <th>Purpose</th>
                                            <th>Client</th>
                                            <th>Detailed</th>
                                            <th>Status</th>
                                            <th>Action</th>


                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('modals')
        <div class="modal fade " tabindex="-1" id="request-overtime" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4">Request</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @livewire('overtime.form-livewire')
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade " tabindex="-1" id="update-overtime" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4">Approvals</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @livewire('overtime.form-signature')
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade " tabindex="-1" id="approval-overtime" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4">Approvals</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @livewire('overtime.form-signature')
                    </div>
                </div>
            </div>
        </div>
    @endpush
@endsection

@section('scripts')
    <script src="/js/components/modal.js"></script>
    <script>
         const updateModal = (overtime_id,id,type) => {
             console.log('asdasd')
            Livewire.emit('getId',overtime_id,id,type)
            if(type == 1)
              $('#update-overtime').modal('show');
            else
              $('#approval-overtime').modal('show');

        }

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
            dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'B><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'l>>" +
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            // 'Blfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            buttons: [{
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-sm mr-1'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-sm mr-1'
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    titleAttr: 'Generate CSV',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'copyHtml5',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-primary btn-sm'
                }

            ]
        });
        window.addEventListener('save-request', async (event) => {
            $(".dt-basic").DataTable().ajax.reload(null, false);
            $('#request-overtime').modal('hide');
            return displayMessage('success', "Request Submitted")
        })
    </script>
@endsection
