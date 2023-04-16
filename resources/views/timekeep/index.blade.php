@extends('layouts.one-panel')
@section('head')
    <link rel="stylesheet" media="screen, print"
        href="/css/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.css">
    <style>


        input {
            border-color: transparent !important;
            border: 0.3px solid #c0c0c0 !important;
            font-size: 13px !important;
            border-top-left-radius: 5px !important;
            border-bottom-left-radius: 5px !important;
        }

        .DTFC_LeftHeadWrapper:before {
            background: transparent !important;
        }

        .__total {
            font-weight: 900;
        }

    </style>
@endsection
@section('panel-content')

<div class="panel-container show">
    <livewire:dtr.filter-livewire />
    <div class="panel-content">

        <table class="dt-basic table table-sm table-bordered table-hover table-striped w-100">
            <thead class="thead-dark">
                <tr>

                    <th rowspan="2">NAME</th>
                    <th rowspan="2">DATE</th>
                    <th colspan="2">ACTUAL</th>
                    <th colspan="3">DEDUCTIONS</th>
                    <th colspan="4">OVERTIME</th>
                    <th rowspan="2">ND</th>
                    <th colspan="2">LEAVE CREDITS</th>
                    <th rowspan="2">TOTAL HR WORKED</th>
                    <th rowspan="2">REMARKS</th>
                    <th rowspan="2">BASIC</th>
                    <th rowspan="2">ALLOW</th>
                    <th rowspan="2">TOTAL</th>
                </tr>
                <tr>

                    <th>In</th>
                    <th>out</th>
                    <th>Late</th>
                    <th>UT</th>
                    <th>LWOP</th>
                    <th>RE GOT</th>
                    <th>OT RD</th>
                    <th>OT SPC DAY</th>
                    <th>REG HD</th>
                    <th>SL</th>
                    <th>VL</th>
                </tr>
            </thead>

            {{-- <livewire:dtr.table-livewire/> --}}
        </table>

    </div>
</div>

    {{-- <div class="row">
        <div class="list-grid mt-5 col-md-12 col-xs-12">
            <div class="projects">

            </div>
        </div>
    </div>
    </div> --}}
@endsection


@section('scripts')
    {{-- <script src="/js/schedule/schedule.js"></script> --}}
    <script src="/js/components/modal.js"></script>
    <script src="/js/leave/leave.js"></script>
    <script>
        const dtable = async (ajax) => {
            $('.dt-basic').DataTable({
                pageLength: 15,
                rowGroup: {
                    dataSrc: "full_name"
                },
                stateSave: true,
                processing: true,
                responsive: false,
                ajax: ajax,
                deferRender: true,
                columns: @json($response),
                columnDefs: [
                    { orderable: false, targets:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18]}
                ],


            });
        }

        dtable(
            ajax = {
                url: '{{ url()->current() }}',
                type: 'get',
            })

        const tr = $(`<tr role="row">
                <td class="__total">ABAYAN, AVEL - Summary</td>
                <td class="__total">Friday, April 01, 2022</td>
                <td class="__total">123</td>
                <td class="__total">123</td>
                <td class="__total">qwe</td>
                <td class="__total"></td>
                <td class="__total">1</td>
                <td class="__total">2</td>
                <td class="__total">3</td>
                <td class="__total">4</td>
                <td class="__total">5</td>
                <td class="__total">6</td>
                <td class="__total">7</td>
                <td class="__total">8</td>
                <td class="__total">00:00</td>
                <td class="__total">2</td>
                <td class="__total" >1</td>
                <td class="__total">3</td>
                <td class="__total">4</td></tr>`);
        $('.dt-basic').DataTable().row.add(tr).draw();

        // $('.dt-basic tbody').append(``)

        window.addEventListener('filter-dtr-table', async function(e) {
            $('.dt-basic').DataTable().destroy();

             dtable(
                ajax = {
                    url: '/dtr/list/dtr',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "from": event.detail.from,
                        "to": event.detail.to,
                    },
                    type: 'post'
                }
            )
            const trs = $(`

            <tr role="row">
                <td>ABAYAN, AVEL - Summary</td>
                <td>Friday, April 01, 2022</td>
                <td>123</td>
                <td>123</td>
                <td>qwe</td>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>00:00</td>
                <td>2</td>
                <td >1</td>
                <td>3</td>
                <td>4</td></tr>`);

                $('.dt-basic').DataTable().row.add(trs).draw();

        })
    </script>
@endsection
