<div>
    <div class="row">
        <div class="col-12">
            <div class="card border shadow-md">
                <div class="card-body">

                    <div class="card-title flex justify-between mb-2">
                        <div>Settings (Rates)</div>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger" role="error">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <div class="row mt-3 mb-3">

                     <div class="col-md-4 mb-3">
                     <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rate/day</span>
                            </div>
                            <input type="text" class="form-control" wire:model="rate_per_day" placeholder="Number of days">
                            <div class="input-group-append">
                                <span class="input-group-text">#</span>
                            </div>
                        </div>
                    </div>

                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Allowance/day</span>
                                </div>
                                <input type="text" class="form-control" wire:model="allowance_per_day" placeholder="Number of days">
                                <div class="input-group-append">
                                    <span class="input-group-text">#</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Night Differential</span>
                                </div>
                                <input type="text" class="form-control"  wire:model="night_diff" placeholder="Night diff rate">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Overtime Special Day</span>
                                </div>
                                <input type="text" class="form-control"  wire:model="ot_spc_day" placeholder="Overtime Special rate">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Regular Overtime</span>
                                </div>
                                <input type="text" autocomplete="off" class="form-control" wire:model="reg_ot" placeholder="Regular Overtime rate">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Overtime Restday</span>
                                </div>
                                <input type="text" autocomplete="off" class="form-control" wire:model="ot_rd" placeholder="Overtime Rest day rate"
                                >
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
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
@push('scripts')
<script>
    window.addEventListener('save-salary',function() {
        location.reload()
        return displayMessage('Successfully saved');
    })
</script>
@endpush
</div>
