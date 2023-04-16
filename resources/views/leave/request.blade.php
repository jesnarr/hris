@extends('layouts.one-panel')
@section('head')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" rel="stylesheet">
<link rel="stylesheet" href="/css/formplugins/select2/select2.bundle.css">
<style>

    .gallery-cell {
  width: 300px;
  height: 70px;
  margin-right: 10px;
  border:0.5px solid #c0c0c0;
  border-radius: 2px;
}

.gallery-cell:before {
  display: block;
  font-size: 80px;

}
.flickity-page-dots{
    display: none;
}
</style>
@endsection
@section('panel-header')
@if($current == url('timeoff'))
    <div class="pr-3 mb-1 align-self-end d-flex-end">

        @if(count($available_leave) > 0)
        <x-forms.button-primary onclick="modalComponent(this.value,null)" data-target="#add-schedule" class="float-right"  value="add-leave">
            <i class="fal fa-plus mr-2"></i>New Request
        </x-forms.button-primary>
        @endif
    </div>
@endif
@endsection
@section('panel-content')

@if($current == url('timeoff'))
    {{-- <div
     class="js-flickity" --}}
    {{-- data-flickity-options='{ "wrapAround": true }' --}}
    {{-- > --}}
<div class="row">
    @forelse ( $available_leave as $al)
    <div class="col-md-3">
        <label class="ml-3" style="font-size:20px;"><strong>{{ $al->name }}</strong></label><br>
        <label class="ml-3">{{ number_format($al->counter,2) }} DAYS</label><br>
    </div>

    @empty
        <label>No availalbe Leave</label>
    @endforelse
</div>
    {{-- </div> --}}

@endif
    <div class="row">
        <div class="list-grid mt-5 col-md-12 col-xs-12">
            <div class="projects">
                <div id="panel-1" class="panel panel-locked">
                    {{-- start of header --}}
                    <div class="panel-hdr">
                        <h2>
                            <div class="d-flex flex-row">
                                <div class="p-2 flex-5">
                                   {{$title}}
                                </div>
                            </div>
                        </h2>

                    </div>
                    {{-- end of header --}}

                    {{-- start of panel --}}
                    <div class="panel-container show">
                        <div class="panel-content">
                            <table class="dt-basic table  table-striped w-100">
                                <thead>
                                    <tr>
                                        {{-- <th>Membership ID</th> --}}
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Total</th>
                                        <th>Type</th>
                                        <th>Attachment</th>
                                        <th>Status</th>
                                        <th> {{ $current == url('timeoff') ? 'Approved/Rejected By' : 'Requested By' }}</th>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4">New type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                @livewire('modals.leave.request')
            </div>

        </div>
    </div>
</div>


@endpush

@section('scripts')
{{-- <script src="/js/schedule/schedule.js"></script> --}}

<script src="/js/components/modal.js"></script>
<script src="/js/leave/leave.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
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
