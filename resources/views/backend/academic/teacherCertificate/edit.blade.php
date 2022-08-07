@extends('backend.master')

@section('title')
    Create Teacher
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Teacher', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">Create Teacher</h4>
                                <a href="{{ route('teacher.index') }}" class="btn btn-success float-end">
                                    Manage
                                    {{--                                    <i class="dripicons-arrow-thin-left"></i>--}}
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{route('certificate.update',$certificate->teacher_id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($certificate))
                                            @method('put')
                                        @endif
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label"> Teacher Name </label>
                                                <input type="text" readonly class="form-control" name="teacher_id" placeholder="" value="{{$certificate->teacher_id}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">File-Path </label>
                                                <input type="file" class="form-control" name="file_path[]" placeholder="" >
{{--                                                <img src="{{asset($certificate->file_path)}}" style="width: 100px;height: 100px" alt="">--}}
                                            </div>
                                        </div>
                                        <div class="mt-5 float-end">
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="update-certificate">
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

