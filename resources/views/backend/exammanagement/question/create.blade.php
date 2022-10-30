@extends('backend.master')

@section('title')
    Add Question
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Queston', 'child' =>'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">{{isset($question) ?'Update':'Create'}} Question</h4>
                                <a href="{{ route('question.index') }}" class="btn btn-success float-end">
                                    Manage
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{isset($question) ? route('question.update', $question->id) : route('question.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($question))
                                            @method('put')
                                        @endif

                                        <div class="form-group row mt-2">

                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                   Academic Class
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Academic Class" data-bs-placement="right"></i>
                                                </label>
                                                <select name="academic_class_id" class="select1 form-control" data-toggle="select1"  data-placeholder="Choose ...">
                                                    <option value=""> Choice a option</option>
                                                    @foreach($classes as $class)
                                                        <option value="{{$class->id}}" {{$errors->any() && old('academic_class_id')?('selected'):(isset($question) && $question->academic_class_id?'selected':'')}}> {{$class->class_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('academic_class_id')<span class="text-danger f-s-12">{{$errors->first('academic_class_id')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                    Subject
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Subject name" data-bs-placement="right"></i>
                                                </label>
                                                <select name="subject_id" class="select1 form-control" data-toggle="select" data-placeholder="Choose ...">
                                                    <option value="">Select A Option</option>
                                                    @foreach($subjects as $subject)
                                                        <option value="{{$subject->id}}" {{$errors->any()&& old('subject_id')? ('selected'):(isset($question) && $question->subject_id?'selected':'')}}> {{$subject->subject_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('subject_id ')<span class="text-danger f-s-12">{{$errors->first('subject_id ')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                    Question Difficulty
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Question Difficulty" data-bs-placement="right"></i>
                                                </label>
                                                <select name="question_difficulty_level_id" class="select1 form-control" data-toggle="select1" data-placeholder="Choose ...">
                                                    <option value=""> select a option</option>
                                                    @foreach($difficultys as $class)
                                                        <option value="{{$class->id}}" {{$errors->any() && old('question_difficulty_level_id')==$class->id? ('selected'):(isset($question) && $question->question_difficulty_level_id?'selected':'')}}> {{$class->title}}</option>
                                                    @endforeach
                                                </select>
                                                @error('question_difficulty_level_id')<span class="text-danger f-s-12">{{$errors->first('question_difficulty_level_id')}}</span> @enderror
                                            </div>


                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Question
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Question" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="question" placeholder="" value="{{ $errors->any() ? old('question') : (isset($question)? $question->question :'')}}">
                                                @error('question')<span class="text-danger f-s-12">{{$errors->first('question')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Explanation
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Explanation" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="explanation" placeholder="" value="{{ $errors->any() ? old('explanation') : (isset($question)? $question->explanation :'')}}">
                                                @error('explanation')<span class="text-danger f-s-12">{{$errors->first('explanation')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">
                                                    Question Image
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Question Image" data-bs-placement="right"></i>
                                                </label>
                                                <br>
                                                <input type="file"  class="form-control-file" name="question_img" placeholder=""/>
                                                @if(isset($question))
                                                    <img src="{{asset($question->question_img)}}" style="height: 100px;width: 100px" alt="">
                                                @endif
                                                @error('question_img')<span class="text-danger f-s-12">{{$errors->first('question_img')}}</span> @enderror
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Mark
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your  Mark" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="mark" placeholder="" value="{{ $errors->any() ? old('mark') : (isset($question)? $question->mark :'')}}">
                                                @error('mark')<span class="text-danger f-s-12">{{$errors->first('mark')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Hints
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Hints" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="hints" placeholder="" value="{{ $errors->any() ? old('hints') : (isset($question)? $question->hints :'')}}">
                                                @error('hints')<span class="text-danger f-s-12">{{$errors->first('hints')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                    Question Answer type
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Question Answer type" data-bs-placement="right"></i>
                                                </label>
                                                <select name="question_answer_type" class="select1 form-control" data-toggle="select1"  data-placeholder="Choose ...">
                                                        <option value="1" {{$errors->any() && old('question_answer_type')==1? ('selected'):(isset($question) && $question->question_answer_type?'selected':'')}}> MCQ</option>
                                                        <option value="2" {{$errors->any() && old('question_answer_type')==2? ('selected'):(isset($question) && $question->question_answer_type?'selected':'')}}>ill_in_the_blanks</option>
                                                        <option value="3" {{$errors->any() && old('question_answer_type')==3? ('selected'):(isset($question) && $question->question_answer_type?'selected':'')}}> brod_que_ans</option>
                                                </select>
                                                @error('question_answer_type')<span class="text-danger f-s-12">{{$errors->first('question_answer_type')}}</span> @enderror
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Total Option
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Total Option" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="total_options" placeholder="" value="{{ $errors->any() ? old('total_options') : (isset($question)? $question->total_options :'')}}">
                                                @error('total_options')<span class="text-danger f-s-12">{{$errors->first('total_options')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="col-md-4">
                                                    Status
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Status" data-bs-placement="right"></i>
                                                </label>
                                                <label for="" class="mt-2"> <input type="radio" name="status" value="1"  {{$errors->any() && old('status')==1? 'checked' :( isset($hostel) && $hostel->status == 1 ?'checked':'')}} >Published</label>
                                                <label for=""class="mt-2"> <input type="radio"  name="status" value="0" {{$errors->any() && old('status')==0?'checked' :(isset($hostel) && $hostel->status == 0 ?'checked':'')}} >UnPublished</label>
                                                <br> @error('status')<span class="text-danger f-s-12">{{$errors->first('status')}}</span> @enderror
                                            </div>

                                        </div>
                                        <div class=" form-group row mt-3 float-end ">
                                            <input type="submit" value="{{isset($question)?'Update ':'Add '}} question" class="btn btn-success">
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
