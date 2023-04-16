<div>
    <div class="row">
        <div class="col-12">
            <div class="card border shadow-md">
                <div class="card-body">

                    <div class="card-title flex justify-between mb-2">
                        <div>Settings</div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger" role="error">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <div class="row mt-3 mb-3">

                        @livewire('salary.salary-livewire',['salary' => $salary,'employee' => $employee])
                        @livewire('salary.allowance-livewire',['salary' => $salary,'employee' => $employee])


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
