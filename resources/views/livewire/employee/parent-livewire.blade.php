<div>
    <div class="row">
        <div class="col-12">
            <div class="card border shadow-md">
                <div class="card-body">

                    <div class="card-title flex justify-between mb-2">
                        <div>{{ $title }}</div>
                        <div>
                            @admin
                            <x-forms.button-primary onclick="addEmployee()"><i class="fal fa-plus"></i> Add New
                                Employee</x-forms.button-primary>
                            @endadmin
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-col md:flex-row justify-start items-center px-2 pt-2 pb-8">

                            <div class="w-full md:w-2/12 md:pr-2">
                                <select class="form-control" wire:model="tag">
                                    <option value="">All Branches</option>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ mb_strtoupper($tag->tag) }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-full md:w-2/12 md:pr-2">
                                <select class="form-control" wire:model="department">
                                    <option value="">All Departments</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->department }}">{{ $department->department }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-full md:w-2/12 md:pr-2">
                                <select class="form-control" wire:model="position">
                                    <option value="">All Positions</option>
                                    @foreach ($positions as $val)
                                        <option value="{{ $val->id }}">{{ $val->position }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-full md:w-3/12">
                                <input type="text" class="form-control" wire:model="txtSearch" placeholder="Search">
                            </div>

                        </div>
                    </div>
                    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">

                        @if (count($employees) > 0)
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach ($employees as $employee)
                                    <x-employee-card onclick="employeeView({{ $employee->id }})">
                                        <x-slot name="image">
                                            {{ $employee->image ?? asset('img/blank.jpg') }}</x-slot>
                                        <x-slot name="contact">{{ $employee->contact_number }}</x-slot>
                                        <x-slot name="email">{{ $employee->work_email }}</x-slot>
                                        <x-slot name="position">{{ $employee->position }}</x-slot>
                                        <x-slot name="name">{{ $employee->first_name . ' ' . $employee->last_name }}
                                        </x-slot>
                                    </x-employee-card>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center pt-5">
                                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-500">
                                    No result...
                                </h1>
                            </div>
                        @endif
                    </section>
                </div>
            </div>
        </div>
    </div>

    @push('modals')
        <div class="modal fade" id="add-employee" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right modal-lg" role="document">
                <div class="modal-content" style="border-radius: 0.75rem;">
                    <div class="modal-header">
                        <h1 class="modal-title text-lg">Add Employee</h1>
                        <button type="button" class="close" aria-label="Close"
                            onclick="closeModal('add-employee')">
                            <span aria-hidden="true"><i class="fal fa-times text-red-500"></i></span>
                        </button>
                    </div>
                    @livewire('modals.employee.add')
                </div>
            </div>
        </div>
    @endpush

    @push('scripts')
        <script>
            const employeeView = (id) => {
                return location.href = `/employee/${id}`
            }
            const deleteConfirmationEmplpyee = (id, message) => {
                Swal.fire({
                    position: 'middle',
                    icon: 'warning',
                    title: message,
                    padding: '0',
                    showConfirmButton: true,
                    showCancelButton: true,
                    preConfirm: async () => {
                        Livewire.emit('deletePosition', id)
                    }
                })
            }

            const addEmployee = () => {
                Livewire.emit('resetAddEmployee')
                image.src = "{!! env('APP_URL') . '/placeholder.jpg' !!}"
                $('#add-employee').modal('show')
            }

            const editEmployee = (id) => {
                Livewire.emit('resetAddEmployee')
                Livewire.emit('editEmployee', id)
                $('#add-employee').modal('show')
            }
        </script>
    @endpush
</div>
