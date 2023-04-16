<div>
    <div class="row">
        <div class="col-12">
            <div class="card border shadow-md">
                <div class="card-body">

                    <div class="card-title flex justify-between mb-2">
                        <div>Position</div>
                        <div>
                            <x-forms.button-primary onclick="addPosition()"><i
                                    class="fal fa-plus"></i> Add New Position</x-forms.button-primary>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12" wire:ignore>
                            <table class="table dt-basic table-responsive w-100">
                                <thead>
                                    <tr>
                                        <th>Position</th>
                                        <th>Department</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('modals')
        <div class="modal fade" id="add-position" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document" style="top:20%">
                <div class="modal-content" style="border-radius: 0.75rem;">
                    <div class="modal-header">
                        <h1 class="modal-title text-lg">Add Position</h1>
                        <button type="button" class="close" aria-label="Close" onclick="closeModal('add-position')">
                            <span aria-hidden="true"><i class="fal fa-times text-red-500"></i></span>
                        </button>
                    </div>
                    @livewire('modals.position.add')
                </div>
            </div>
        </div>
    @endpush

    @push('scripts')
    <script>
        $('.dt-basic').DataTable({
            stateSave: true,
            processing: true,
            responsive: true,
            ajax: "{!! url()->current() !!}",
            deferRender: true,
            columns: [
                {data: 'position'},
                {data: 'department'},
                {data: 'created_at'},
                {data: 'action'}
            ]
        })

        const deleteConfirmationPosition = (id, message) => {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: message,
                showConfirmButton: true,
                confirmButtonColor: '#3B82F6',
                showCancelButton: true,
                cancelButtonColor: '#EF4444',
                preConfirm: async () => {
                    Livewire.emit('deletePosition', id)
                }
            })
        }

        const addPosition = () => {
            Livewire.emit('resetAddPosition')
            $('#add-position').modal('show')
        }

        const editPosition = (id) => {
            Livewire.emit('resetAddPosition')
            Livewire.emit('editPosition', id)
            $('#add-position').modal('show')
        }
    </script>
    @endpush
</div>
