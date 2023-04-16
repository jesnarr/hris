@extends('layouts.one-panel')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/careers-admin">Careers</a></li>
@endsection

@section('head')
    <style></style>
@endsection

@section('panel-header')
    <h1 class="text-lg font-bold">Careers</h1>
@endsection

@section('panel-content')
    <div class="p-4">
        <table class="dt-basic table table-striped table-bordered w-100">
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Description</th>
                    <th>Vacant</th>
                    <th>Applicants</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($careers as $career)
                    <tr>
                        <td>{{ $career->job_name }}</td>
                        <td>{{ $career->department ?? '' }}</td>
                        <td>{{ $career->job_description }}</td>
                        <td>{{ $career->job_available }}</td>
                        <td>{{ $career->application_count }}</td>
                        <td>
                            <div class="flex justify-center">
                                <button type="button" class="px-4" onclick="editCareer({{ $career->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                    </svg>
                                </button>
                                <button type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule='evenodd' d='M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z' clip-rule='evenodd' />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('modals')
    <div class="modal modal-fullscreen fade" id="career_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content" style="border-radius: 0.75rem;">
                <div class="modal-header">
                    <h1 class="modal-title text-lg">Career</h1>
                    <button type="button" class="close" aria-label="Close" onclick="closeModal('career_modal')">
                        <span aria-hidden="true"><i class="fal fa-times text-red-500"></i></span>
                    </button>
                </div>
                @livewire('modals.career.add')
            </div>
        </div>
    </div>
@endpush


@section('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/dashboard/dashboard.js"></script>

    <script>

        $('.dt-basic').DataTable({
            columnDefs: [{
                orderable: false,
                targets: 2
            }, {
                orderable: false,
                targets: 4
            }],
        })
    </script>
@endsection
