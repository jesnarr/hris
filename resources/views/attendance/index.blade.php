@extends('layouts.one-panel')
@section('head')
<link rel="stylesheet" media="screen, print" href="/css/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.css">
<style>
    input{
        border-color:#f1f1f1 !important;
        padding:0px !important;
    }
</style>
@endsection
@section('panel-content')
<div class="col-md-12 mb-5">
        @livewire('attendance.filter-livewire')
</div>
    <div class="row">
        <div class="list-grid mt-5 col-md-12 col-xs-12">
            <div class="projects">
                <div id="panel-1" class="panel panel-locked">
                    {{-- start of header --}}
                    <div class="panel-hdr">
                        <h2>
                            <div class="d-flex flex-row">
                                <div class="p-2 flex-5">
                                    Attendance List
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
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>In</th>
                                        <th>Out</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        {{-- <th>Membership ID</th> --}}
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>In</th>
                                        <th>Out</th>

                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    <script>
     const dataTable = (ajax) => {
        $('.dt-basic').DataTable({
        stateSave: true,
        processing: true,
        fixedHeader: {
            header: true,
            footer: true
        },
        responsive: true,
        ajax: ajax,
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
                buttons: [
                    {
					extend:    'pdfHtml5',
					text:      'PDF',
					titleAttr: 'Generate PDF',
					className: 'btn-outline-danger btn-sm mr-1'
				},
				{
					extend:    'excelHtml5',
					text:      'Excel',
					titleAttr: 'Generate Excel',
					className: 'btn-outline-success btn-sm mr-1'
				},
				{
					extend:    'csvHtml5',
					text:      'CSV',
					titleAttr: 'Generate CSV',
					className: 'btn-outline-primary btn-sm mr-1'
				},
				{
					extend:    'copyHtml5',
					text:      'Copy',
					titleAttr: 'Copy to clipboard',
					className: 'btn-outline-primary btn-sm mr-1'
				},
				{
					extend:    'print',
					text:      'Print',
					titleAttr: 'Print Table',
					className: 'btn-outline-primary btn-sm'
				}

                ],
        initComplete: function () {
            this.api().columns([0]).every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value="">All</option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()

                        );
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );

                column.data().unique().sort().each( function ( d, j ) {
                    // var x = ;
                    select.append( `<option value="${d}">${d}</option>` )
                } );

            } );
        }


    });
    }

    dataTable(
        ajax = {
                url: "{!! url()->current() !!}",
                type: 'get',
            }
    )

    window.addEventListener('refresh-attendance-datatable', (event) => {
        $("#datepicker-1").val('')
        $('.dt-basic').DataTable().destroy();
           var ajax = {
                url: '/attendance/filter',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'filter': event.detail.filter,
                    'month': event.detail.month,
                    'from': event.detail.from,
                    'to': event.detail.to
                },
                type: 'post'
            };
            dataTable(ajax)
    })
    </script>
@endsection
