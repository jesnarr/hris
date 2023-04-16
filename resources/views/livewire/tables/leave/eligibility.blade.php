<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
                    {{-- start of panel --}}
                    <div class="panel-container show">
                        <div class="panel-content">
                            <table class="dt-basic table  table-striped w-100">
                                <thead>
                                    <tr>
                                        {{-- <th>Membership ID</th> --}}
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($eligibility))
                                        @foreach($eligibility as $e)
                                        <tr>
                                            <td>{{ $e->name }}</td>
                                            <td>{{ $e->email }}</td>
                                            <td>
                                            <button
                                                onclick="deleteUser({{ $e->id }})"
                                                class="btn-sm text-red-500">
                                                <i class="fal fa-times "></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

                            {{-- <div class="col-md-12 mb-4">
                            <button onClick="" class="btn btn-sm btn-primary" id="move" style="display:none">Move</button>
                        </div> --}}
                        </div>
                    </div>

</div>
