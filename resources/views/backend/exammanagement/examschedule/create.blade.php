@extends('backend.master')

@section('title')
    Create Exam Schedule
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Exam Schedule', 'child' =>'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">{{isset($examShedule) ?'Update':'Create'}} Exam Schedule</h4>
                                <a href="{{ route('exam_schedule.index') }}" class="btn btn-success float-end">
                                    Manage
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{isset($examShedule) ? route('exam_schedule.update', $examShedule->id) : route('exam_schedule.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($examShedule))
                                            @method('put')
                                        @endif

                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                    Exam Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Exam Name" data-bs-placement="right"></i>
                                                </label>
                                                <select name="exam_id" class="select form-control" data-toggle="select" data-placeholder="Choose ...">
                                                    <option value="">Select A Option</option>
                                                    @foreach($exams as $exam)
                                                        <option value="{{$exam->id}}" {{$errors->any() && old('exam_id')==$exam->id? ('selected'):(isset($examShedule) && $examShedule->exam_id==$exam->id? 'selected':'')}}> {{$exam->title}}</option>
                                                    @endforeach
                                                </select>
                                                @error('exam_id')<span class="text-danger f-s-12">{{$errors->first('exam_id')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                    Section Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Section Name" data-bs-placement="right"></i>
                                                </label>
                                                <select name="section_id" class="select form-control" data-toggle="select"  data-placeholder="Choose ...">
                                                    <option value="">Select A Option</option>
                                                        @foreach($sections as  $section)
                                                        <option value="{{$section->id}}" {{$errors->any() && old('section_id')==$section->id? ('selected'):(isset($examShedule) && $examShedule->section_id==$section->id? 'selected':'')}}> {{$section->section_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('section_id')<span class="text-danger f-s-12">{{$errors->first('section_id')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                    Subject Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Subject Name" data-bs-placement="right"></i>
                                                </label>
                                                <select name="subject_id" class="select1 form-control" data-toggle="select1"  data-placeholder="Choose ...">
                                                    <option value="">Select A Option</option>
                                                    @foreach($subjects as  $subject)
                                                        <option value="{{$subject->id}}" {{$errors->any() && old('subject_id')==$subject->id? ('selected'):(isset($examShedule) && $examShedule->subject_id==$subject->id? 'selected':'')}}> {{$subject->subject_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('subject_id')<span class="text-danger f-s-12">{{$errors->first('subject_id')}}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                    Academic Year Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Academic Year Name" data-bs-placement="right"></i>
                                                </label>
                                                <select name="academic_year_id" class="select2 form-control" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                                    <option value="1">ss</option>
                                                    {{--                                                    @foreach($classes as $class)--}}
                                                    {{--                                                        <option value="{{$errors->any()? old('hostel_type'): $class->id}}" {{isset($subject) && $subject->hostel_type?'selected':''}}> {{$class->hostel_type}}</option>--}}
                                                    {{--                                                    @endforeach--}}
                                                </select>
                                                @error('academic_year_id')<span class="text-danger f-s-12">{{$errors->first('academic_year_id')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                    Academic Class Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Academic Class Name" data-bs-placement="right"></i>
                                                </label>
                                                <select name="academic_class_id" class="select2 form-control" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                                    <option value="1">aa</option>
                                                    {{--                                                    @foreach($classes as $class)--}}
                                                    {{--                                                        <option value="{{$errors->any()? old('hostel_type'): $class->id}}" {{isset($subject) && $subject->hostel_type?'selected':''}}> {{$class->hostel_type}}</option>--}}
                                                    {{--                                                    @endforeach--}}
                                                </select>
                                                @error('academic_class_id')<span class="text-danger f-s-12">{{$errors->first('academic_class_id')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4" id="datepicker1">
                                                <label  class="form-label">
                                                    Exam Date
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Exam Date " data-bs-placement="right"></i>
                                                </label>
                                                <input type="text" data-provide="datepicker" data-date-container="#datepicker1"  class="form-control" name="exam_date" placeholder="" value="{{ $errors->any() ? old('exam_date') : (isset($examShedule)? $examShedule->exam_date :'')}}">
                                                @error('exam_date')<span class="text-danger f-s-12">{{$errors->first('exam_date')}}</span> @enderror
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4" id="datepicker3">
                                                <label  class="form-label">
                                                    Start Time
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Start Time " data-bs-placement="right"></i>
                                                </label>
                                                <input type="text" data-provide="datepicker" data-date-container="#datepicker3"  class="form-control" name="start_time" placeholder="" value="{{ $errors->any() ? old('start_time') : (isset($examShedule)? $examShedule->start_time :'')}}">
                                                @error('start_time')<span class="text-danger f-s-12">{{$errors->first('start_time')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4" id="datepicker2">
                                                <label  class="form-label">
                                                    End Time
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your End Time " data-bs-placement="right"></i>
                                                </label>
                                                <input type="text" data-provide="datepicker" data-date-container="#datepicker2"  class="form-control" name="end_time" placeholder="" value="{{ $errors->any() ? old('end_time') : (isset($examShedule)? $examShedule->end_time :'')}}">
                                                @error('end_time')<span class="text-danger f-s-12">{{$errors->first('end_time')}}</span> @enderror
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

                                        <div class="form-group row mt-2">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">
                                                    Note
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Note" data-bs-placement="right"></i>
                                                </label>
                                                <textarea name="note" id="editor" cols="20" rows="5" class="form-control" value="">{!!isset($examShedule)? $examShedule->note:''!!}</textarea>
                                                @error('note')<span class="text-danger f-s-12">{{$errors->first('note')}}</span> @enderror
                                            </div>

                                        </div>

                                        <div class=" form-group row mt-3 float-end ">
                                            <input type="submit" value="{{isset($examShedule)?'Update ':'Add '}} Exam Schedule" class="btn btn-success">
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
