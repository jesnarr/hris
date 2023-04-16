    @push('head')
        <link rel="stylesheet" href="{{ asset('css/formplugins/summernote/summernote.css') }}">
    @endpush
    <div class="modal-body">
        <div class="row">

            <div class="col-12 mt-4">
                <label>Department</label>
                <select class="form-control border-gray-300 rounded-lg @error('department') is-invalid @enderror" wire:model="department">
                    <option value="">--Select Department--</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->department }}</option>
                    @endforeach
                </select>
                @error('department')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 mt-4">
                <label>Position</label>
                <select class="form-control border-gray-300 rounded-lg @error('job_name') is-invalid @enderror" wire:model="job_name">
                    <option value="">--Select Position--</option>
                    @foreach ($positions as $position)
                        <option value="{{ $position->id }}">{{ $position->position }}</option>
                    @endforeach
                </select>
                @error('job_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 mt-4" wire:ignore>
                <textarea id="editor" class="form-control" style="height:250px">
                    {!! trim($job_responsibilities) !!}
                </textarea>
            </div>

        </div>
    </div>
    <div class="modal-footer mt-4">
        <x-forms.button-success wire:click="save">Save <i class="fal fa-arrow-right"></i></x-forms.button-success>
    </div>

    @push('scripts')
        <script src="{{ asset('js/formplugins/summernote/summernote.js') }}"></script>
        <script>
            $('#editor').summernote({
                height: 250
            })

            const editCareer = (id) => {
                Livewire.emit('editCareer', id)
            }

            window.addEventListener('edit-career', event => {
                $('#career_modal').modal('show')
            })
        </script>
    @endpush
