<div>
    <div class="modal-body">
        <div class="row">

            <div class="col-12">
                <label>Department</label>
                <select class="form-control border-gray-300 rounded-lg @error('department') is-invalid @enderror"
                    wire:model="department">
                    <option value="">--Select Department--</option>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->department }}</option>
                    @endforeach
                </select>
                    @error('department')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>

            <div class="col-12">
                <label>Position Name</label>
                <input type="text"
                    class="form-control border-gray-300 rounded-lg @error('position') is-invalid @enderror"
                    wire:model="position">
                @error('position')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <x-forms.button-success wire:click="save">Save <i class="fal fa-arrow-right"></i></x-forms.button-success>
    </div>
</div>
