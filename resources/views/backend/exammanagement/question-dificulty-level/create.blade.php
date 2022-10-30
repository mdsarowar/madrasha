@extends('backend.master')

@section('title')
    Add Question Difficulty level
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Question Difficulty level', 'child' =>'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">{{isset($questionDificulty) ?'Update':'Create'}} Hostel</h4>
                                <a href="{{ route('question_difficulty_level.index') }}" class="btn btn-success float-end">
                                    Manage
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{isset($questionDificulty) ? route('question_difficulty_level.update', $questionDificulty->id) : route('question_difficulty_level.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($questionDificulty))
                                            @method('put')
                                        @endif
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                   Title
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Title" data-bs-placement="right"></i>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text"  class="form-control" name="title" placeholder="" value="{{ $errors->any() ? old('title') : (isset($questionDificulty)? $questionDificulty->title :'')}}">
                                                @error('title')<span class="text-danger f-s-12">{{$errors->first('title')}}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label for="" class="col-md-4">
                                                    Status
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Status" data-bs-placement="right"></i>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="" class="mt-2"> <input type="radio" name="status" value="1"  {{$errors->any() && old('status')==1? 'checked' :( isset($hostel) && $hostel->status == 1 ?'checked':'')}} >Published</label>
                                                <label for=""class="mt-2"> <input type="radio"  name="status" value="0" {{$errors->any() && old('status')==0?'checked' :(isset($hostel) && $hostel->status == 0 ?'checked':'')}} >UnPublished</label>
                                                <br> @error('status')<span class="text-danger f-s-12">{{$errors->first('status')}}</span> @enderror
                                            </div>

                                        </div>
                                        <div class=" form-group row mt-3 float-end ">
                                            <input type="submit" value="{{isset($questionDificulty)?'Update ':'Add '}} Question Difficulty Level" class="btn btn-success">
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
