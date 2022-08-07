@extends('backend.master')

@section('title')
    Create Section
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Section', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">Create Section</h4>
                                <a href="{{ route('section.index') }}" class="btn btn-success float-end">
                                    Manage
                                    {{--                                    <i class="dripicons-arrow-thin-left"></i>--}}
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ isset($section) ? route('section.update', $section->id) : route('section.store') }}" method="POST">
                                        @csrf
                                        @if(isset($section))
                                            @method('put')
                                        @endif
                                        <div class="mb-3">
                                            <label class="form-label">Section Name  </label>
                                            <input type="text" class="form-control" name="section_name" value="{{ isset($section) ? $section->section_name : '' }}" data-provide="typeahead" id="the-basics" placeholder="Name">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Capacity  </label>
                                            <input type="number" class="form-control" name="section_capacity" value="{{ isset($section) ? $section->section_capacity : '' }}" data-provide="typeahead" id="the-basics" placeholder="Capacity">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Status</label>
                                            <div class="col-md-9">
                                                <label class="sm-2" for=""><input type="radio" name="status" {{isset($section) && $section->status == 1? 'checked':''}} value="1"> Published</label>
                                                <label for=""><input type="radio" name="status" {{isset($section) && $section->status == 0? 'checked':''}} value="0"> Unpublished</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Note </label><br>
                                            <textarea name="section_note" class="form-control" id="editor1" style="height: 300px;">{!! isset($section) ? $section->section_note : '' !!}</textarea>
                                        </div>
                                        <div class="mb-3 float-end">
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="{{ isset($section) ? 'Update' : 'Create' }} Section">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



