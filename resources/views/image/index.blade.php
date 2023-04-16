@extends('layouts.one-panel')

@section('head')
@endsection

@section('panel-header')
    <div class="panel-toolbar pr-3 mb-1 align-self-end d-flex-end">
        <x-forms.button-primary onclick="add_schedule(null)" data-target="#add-schedule" class="float-right">Add
        </x-forms.button-primary>
    </div>
@endsection
@section('panel-content')
    <div class="row">
        <div class="list-grid mt-5 col-md-12 col-xs-12">
            <div class="projects">
                <div id="panel-1" class="panel panel-locked">
                    {{-- start of header --}}
                    <div class="panel-hdr">
                        <h2>
                            <div class="d-flex flex-row">
                                <div class="p-2 flex-5">
                                    Work schedule
                                </div>
                            </div>
                        </h2>

                    </div>
                    {{-- end of header --}}

                    {{-- start of panel --}}
                    <div class="panel-container show">
                        <div class="panel-content">

                            <form action="/image/" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="image" id="image">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            {{-- <div class="col-md-12 mb-4">
                            <button onClick="" class="btn btn-sm btn-primary" id="move" style="display:none">Move</button>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')

@endsection
