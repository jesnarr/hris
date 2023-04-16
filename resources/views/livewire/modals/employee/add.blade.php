<div>
    <div class="modal-body">
        <div class="row">

            @error('image')
                <div class="col-12 mb-2">
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                </div>
            @enderror

            <div class="flex justify-center items-center col-12 mb-2">
                <img src="{{ env('APP_URL') . '/placeholder.jpg' }}" id="image" onclick="clickImage(event)" wire:ignore
                    class="rounded-full h-24 w-24 border border-gray-500 object-cover hover:opacity-50 cursor-pointer"
                    alt="Employee Image">
                <input type="file" style="display:none;" wire:model="image" id="file" onchange="displayImage(event)">
            </div>

            <div class="col-md-6 mt-2">
                <label>First Name</label>
                <input type="text" autocomplete="off"
                    class="form-control border-gray-300 rounded-lg @error('first_name') is-invalid @enderror"
                    wire:model="first_name">
                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mt-2">
                <label>Middle Name</label>
                <input type="text" autocomplete="off"
                    class="form-control border-gray-300 rounded-lg @error('middle_name') is-invalid @enderror"
                    wire:model="middle_name">
                @error('middle_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mt-2">
                <label>Last Name</label>
                <input type="text" autocomplete="off"
                    class="form-control border-gray-300 rounded-lg @error('last_name') is-invalid @enderror"
                    wire:model="last_name">
                @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mt-2">
                <label>Suffix</label>
                <select class="form-control border-gray-300 rounded-lg @error('suffix') is-invalid @enderror"
                    wire:model="suffix">
                    <option value="">--Select--</option>
                    @foreach ($suffixes as $suffix)
                        <option value="{{ $suffix }}">{{ $suffix }}</option>
                    @endforeach
                </select>
                @error('suffix')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mt-2">
                <label>Gender</label>
                <select class="form-control border-gray-300 rounded-lg @error('gender') is-invalid @enderror"
                    wire:model="gender">
                    <option value="">--Select--</option>
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>
                @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mt-2">
                <label>Birth date</label>
                <input type="text" autocomplete="off" id="birthdate"
                    class="form-control border-gray-300 rounded-lg @error('birthdate') is-invalid @enderror"
                    wire:model="birthdate">
                @error('birthdate')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mt-2">
                <label>Marital Status</label>
                <select class="form-control border-gray-300 rounded-lg @error('marital_status') is-invalid @enderror"
                    wire:model="marital_status">
                    <option value="">--Select--</option>
                    @foreach ($marital_statuses as $marital)
                        <option value="{{ $marital }}">{{ $marital }}</option>
                    @endforeach
                </select>
                @error('marital_status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mt-2">
                <div wire:ignore>
                    <label>Nationality</label>
                    <select class="form-control border-gray-300 rounded-lg @error('nationality') is-invalid @enderror"
                        id="nationality">
                        <option value="">--Select--</option>
                        @foreach ($nationalities as $national)
                            <option value="{{ $national->id }}">{{ $national->nationality }}</option>
                        @endforeach
                    </select>
                </div>
                @error('nationality')
                    <div class="help-block text-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="col-md-6 mt-2">
                <label>Contact Number</label>
                <input type="text" autocomplete="off"
                    class="form-control border-gray-300 rounded-lg @error('contact_number') is-invalid @enderror"
                    wire:model="contact_number">
                @error('contact_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mt-2">
                <label>Work Email</label>
                <input type="email" autocomplete="off"
                    class="form-control border-gray-300 rounded-lg @error('work_email') is-invalid @enderror"
                    wire:model="work_email">
                @error('work_email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mt-2">
                <label>Employment Type</label>
                <select class="form-control border-gray-300 rounded-lg @error('employee_type') is-invalid @enderror"
                    wire:model="employee_type">
                    <option value="">--Select--</option>
                    @foreach ($employee_types as $type)
                        <option value="{{ $type->id }}">{{ $type->employee_type }}</option>
                    @endforeach
                </select>
                @error('employee_type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mt-2">
                <label>Employement Status</label>
                <select class="form-control border-gray-300 rounded-lg @error('employee_status') is-invalid @enderror"
                    wire:model="employee_status">
                    <option value="">--Select--</option>
                    @foreach ($employee_statuses as $type)
                        <option value="{{ $type->id }}">{{ $type->status }}</option>
                    @endforeach
                </select>
                @error('employee_status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mt-2">
                <label>Position</label>
                <select class="form-control border-gray-300 rounded-lg @error('position') is-invalid @enderror"
                    wire:model="position">
                    <option value="">--Select--</option>
                    @foreach ($positions as $position)
                        <option value="{{ $position->id }}">{{ $position->position }}</option>
                    @endforeach
                </select>
                @error('position')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mt-2">
                <label>Branch</label>
                <select class="form-control border-gray-300 rounded-lg @error('branch') is-invalid @enderror"
                    wire:model="branch">
                    <option value="">--Select--</option>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ mb_strtoupper($tag->tag) }}</option>
                    @endforeach
                </select>
                @error('branch')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <x-forms.button-success wire:click="save">Save <i class="fal fa-arrow-right"></i></x-forms.button-success>
    </div>
    @push('head')
        <link rel="stylesheet" href="{{ asset('css/formplugins/select2/select2.bundle.css') }}">
    @endpush

    @push('scripts')
        <script src="{{ asset('js/formplugins/select2/select2.bundle.js') }}"></script>
        <script>
            const image = document.getElementById('image')

            const clickImage = (event) => {
                $('#file').click()
                image.src = "{!! $image ?? env('APP_URL') . '/placeholder.jpg' !!}"
            }

            const displayImage = (event) => {
                setTimeout(() => {
                    image.src = URL.createObjectURL(event.target.files[0])
                }, 1000)
            }
            $('#add-employee').modal({
                backdrop: 'static',
                keyboard: false,
                show: false
            })

            $('#birthdate').datepicker({
                format: "MM dd, yyyy",
                autoclose: true,
                minDate: Date()
            }).change(function(e) {
                @this.set('birthdate', e.target.value)
            })

            $('#nationality').select2({
                dropdownParent: $('#add-employee')
            })

            $('#nationality').on('change', function(e) {
                @this.set('nationality', e.target.value)
            })
        </script>
    @endpush
</div>
