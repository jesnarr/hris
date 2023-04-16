<div>
    <div class="row">
        <div class="col-12">
            <div class="card border shadow-md">
                <div class="card-body">

                    <div class="card-title flex justify-between mb-2">
                        <div>Basic Information</div>
                    </div>

                    <div class="row mt-3">

                        <div class="flex justify-center col-12 mb-2">
                            <img src="{{ $employee->image ?? env('APP_URL') . '/placeholder.jpg' }}" id="image" onclick="clickImage(event)" wire:ignore class="rounded-full h-24 w-24 border border-gray-500 object-cover hover:opacity-50 cursor-pointer" alt="Employee Image">
                            <input type="file" style="display:none;" wire:model="images" id="file" onchange="displayImage(event)">
                        </div>

                        <div class="col-md-4">
                            <label>First Name</label>
                            <input type="text" wire:model="first_name" class="form-control @error('first_name') is-invalid @enderror">
                            @error('first_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label>Middle Name</label>
                            <input type="text" wire:model="middle_name" class="form-control @error('middle_name') is-invalid @enderror">
                            @error('middle_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label>Last Name</label>
                            <input type="text" wire:model="last_name" class="form-control @error('last_name') is-invalid @enderror">
                            @error('last_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label>Suffix</label>
                            <select wire:model="suffix" class="form-control @error('suffix') is-invalid @enderror">
                                <option value="">--Select--</option>
                                @foreach ($suffixes as $suffix)
                                    <option value="{{ $suffix }}">{{ $suffix }}</option>
                                @endforeach
                            </select>
                            @error('suffix')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label>Gender</label>
                            <select wire:model="gender" class="form-control @error('gender') is-invalid @enderror">
                                <option value="">--Select--</option>
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                            </select>
                            @error('gender')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label>Marital Status</label>
                            <select wire:model="marital_status" class="form-control @error('marital_status') is-invalid @enderror">
                                <option value="">--Select--</option>
                                @foreach ($marital_statuses as $marital_status)
                                    <option value="{{ $marital_status }}">{{ $marital_status }}</option>
                                @endforeach
                            </select>
                            @error('marital_status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label>Birthdate</label>
                            <input type="text" autocomplete="off" id="birthdate" wire:model="birthdate" class="form-control @error('birthdate') is-invalid @enderror">
                            @error('birthdate')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <div wire:ignore>
                                <label>Nationality</label>
                                <select wire:model="nationality" id="nationality" class="form-control @error('nationality') is-invalid @enderror">
                                    <option value="">--Select--</option>
                                    @foreach ($nationalities as $val)
                                        <option value="{{ $val->id }}" >{{ $val->nationality }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('nationality')
                                <div class="help-block text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label>Work Email</label>
                            <input type="email" wire:model="work_email" class="form-control @error('work_email') is-invalid @enderror" disabled>
                            @error('work_email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label>Contact Number</label>
                            <input type="email" wire:model="contact_number" class="form-control @error('contact_number') is-invalid @enderror">
                            @error('contact_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <div wire:ignore>
                                <label>Branch</label>
                                <select wire:model="branch" class="form-control @error('branch') is-invalid @enderror" id="branch">
                                    <option value="">--Select--</option>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ mb_strtoupper($tag->tag) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('branch')
                                <div class="help-block text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="flex justify-end col-md-12 mt-5">
                            <x-forms.button-success wire:click="save">Save <i class="fal fa-arrow-right"></i>
                            </x-forms.button-success>
                        </div>

                    </div>

                </div>
            </div>
        </div>
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
                image.src = "{!! $images ?? env('APP_URL') . '/placeholder.jpg' !!}"
            }

            const displayImage = (event) => {
                setTimeout(() => {
                    image.src = URL.createObjectURL(event.target.files[0])
                }, 1000)
            }

            $('#birthdate').datepicker({
                format: "MM dd, yyyy",
                autoclose: true,
                minDate: Date(),
            }).change(function(e) {
                @this.set('birthdate', e.target.value)
            })

            $('#nationality').select2()
            $('#nationality').change(function(e) {
                @this.set('nationality', e.target.value)
            })

            $('#branch').select2().change(function(e) {
                @this.set('branch', e.target.value)
            })
        </script>
    @endpush
</div>
