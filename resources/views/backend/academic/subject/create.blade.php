@extends('backend.master')

@section('title')
    Create Subject
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Subject', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">Create Subject</h4>
                                <a href="{{ route('subject.index') }}" class="btn btn-success float-end">
                                    Manage
                                    {{--                                    <i class="dripicons-arrow-thin-left"></i>--}}
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{isset($subject) ? route('subject.update', $subject->id) : route('subject.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($subject))
                                            @method('put')
                                        @endif
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Class Name </label>
                                                <select name="class_id" class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                                    @foreach($classes as $class)
                                                        <option value="{{$class->id}}" {{isset($subject) && $subject->class_id==$class->id? 'selected':''}}> {{$class->class_name}}</option>
                                                    @endforeach
                                                 </select>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Group Name </label>
                                                <select name="group_id" class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
{{--                                                    @foreach($classes as $class)--}}
{{--                                                        <option value="{{$class->id}}" {{isset($subject) && $subject->class_id==$class->id? 'selected':''}}> {{$class->class_name}}</option>--}}
{{--                                                    @endforeach--}}
                                                </select>
                                            </div>


                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">Subject Name </label>
                                                <input type="text"  class="form-control" name="subject_name" placeholder="" value="{{ isset($subject)? $subject->subject_name :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Subject Type </label>
                                                <input type="text"  class="form-control" name="subject_type" placeholder="" value="{{ isset($subject)? $subject->subject_type :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">Pass Mark </label>
                                                <input type="text"  class="form-control" name="pass_mark" placeholder="" value="{{ isset($subject)? $subject->pass_mark :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Full Mark </label>
                                                <input type="text"  class="form-control" name="full_mark" placeholder="" value="{{ isset($subject)? $subject->full_mark :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">subject Author </label>
                                                <input type="text"  class="form-control" name="subject_author" placeholder="" value="{{ isset($subject)? $subject->subject_author :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Subject Code </label>
                                                <input type="text"  class="form-control" name="subject_code" placeholder="" value="{{ isset($subject)? $subject->subject_code :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">Subject Book Image </label><br>
                                                <input type="file"  class="form-control-file" name="book_image" placeholder="" >
                                                @if(isset($subject))
                                                    <img src="{{asset($subject->book_image)}}" style="width: 100px;height: 100px" alt="">
                                                @endif
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="form-label">Label</label>
                                                <select name="lavel" class="form-control select2" data-toggle="select2">>
                                                    <option value="primary" {{isset($subject) && $subject->class_label=='primary'? 'selected':''}}>Primary</option>
                                                    <option value="school" {{isset($subject) && $subject->class_label=='school'? 'selected':''}}>School</option>
                                                    <option value="college" {{isset($subject) && $subject->class_label=='college'? 'selected':''}}>College</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="" class="form-label">Is_for_graduation</label>
                                                <div class="col-md-9">
                                                    <label class="sm-2" for=""><input type="radio" name="is_graduation" {{isset($subject) && $subject->is_graduation == 1? 'checked':''}} value="1"> Yes</label>
                                                    <label for=""><input type="radio" name="is_graduation" {{isset($subject) && $subject->is_graduation == 0? 'checked':''}} value="0"> NO</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">is_main_subject  </label>
                                                <div class="col-md-9">
                                                    <label class="sm-2" for=""><input type="radio" name="is_main" {{isset($subject) && $subject->is_main == 1? 'checked':''}} value="1"> yes</label>
                                                    <label for=""><input type="radio" name="is_main" {{isset($subject) && $subject->is_main == 0? 'checked':''}} value="0"> No</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Is_optional</label>
                                                <div class="col-md-9">
                                                    <label class="sm-2" for=""><input type="radio" name="is_optional" {{isset($subject) && $subject->is_optional == 1? 'checked':''}} value="1"> Yes</label>
                                                    <label for=""><input type="radio" name="is_optional" {{isset($subject) && $subject->is_optional == 0? 'checked':''}} value="0"> No</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Status</label>
                                                <div class="col-md-9">
                                                    <label class="sm-2" for=""><input type="radio" name="status" {{isset($subject) && $subject->status == 1? 'checked':''}} value="1"> Published</label>
                                                    <label for=""><input type="radio" name="status" {{isset($subject) && $subject->status == 0? 'checked':''}} value="0"> Unpublished</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="mb-3">
                                                <label class="form-label">Note </label><br>
                                                <div id="snow-editor">
                                                    <textarea name="note" class="form-control" style="height: 300px;">{!! isset($subject) ? $subject->note : '' !!}
                                                    </textarea>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="mt-5 float-end">
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="{{ isset($subject) ? 'Update ' : 'Create ' }} subject">
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


@section('style')
    <!-- Quill css -->
    <link href="{{asset('/')}}backend/assets/css/vendor/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}backend/assets/css/vendor/quill.snow.css" rel="stylesheet" type="text/css" />
@endsection



@section('script')
    <!-- quill js -->
    <script src="{{asset('/')}}backend/assets/js/vendor/quill.min.js"></script>
    <!-- quill Init js-->
    <script src="{{asset('/')}}backend/assets/js/pages/demo.quilljs.js"></script>
@endsection
