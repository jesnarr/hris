<div>
    <div class="row">
        <div class="col-12">
            <div class="card border shadow-md">
                <div class="card-body">

                    <div class="card-title flex justify-between mb-2">
                        <div>Leave Settings</div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger" role="error">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif

                    <div class="row mt-3">
                        <div class="col-md-12" wire:ignore>
                            <label>Leave(s)</label>
                            <select class="form-control  select2" id="leave" multiple="true"  name="leave[]" wire:model="leave">
                                <option value="">--Select--</option>
                                @foreach ($leaves as $val)
                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex justify-end col-md-12 mt-5">
                            <x-forms.button-success wire:click="submit">Save <i class="fal fa-arrow-right"></i>
                            </x-forms.button-success>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            var leave = [];
            $('#leave').select2().change(function(e) {
            @this.set('leave', $('#leave').val())
        })
        </script>
    @endpush
</div>
