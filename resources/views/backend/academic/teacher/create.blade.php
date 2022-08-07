@extends('backend.master')

@section('title')
    Create Teacher
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Teacher', 'child' => 'Create'])
@endsection

@section('body')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
                                    <form action="{{isset($teacher) ? route('teacher.update', $teacher->id) : route('teacher.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($teacher))
                                            @method('put')
                                        @endif
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label"> Name </label>
                                                <input type="text"  class="form-control" name="name" placeholder="" value="{{ isset($teacher)? $teacher->name :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Email </label>
                                                <input type="email"  class="form-control" name="email" placeholder="" value="{{ isset($teacher)? $teacher->email :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label"> User Name </label>
                                                <input type="text"  class="form-control" name="user_name" placeholder="" value="{{ isset($teacher)? $teacher->user_name :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Subject </label>
                                                <input type="text"  class="form-control" name="subject" placeholder="" value="{{ isset($teacher)? $teacher->subject :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">Phone </label>
                                                <input type="text"  class="form-control" name="phone" placeholder="" value="{{ isset($teacher)? $teacher->phone :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Desination </label>
                                                <input type="text"  class="form-control" name="desination" placeholder="" value="{{ isset($teacher)? $teacher->desination :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" id="datepicker4" class="form-label">DOB</label>
                                                <input type="text"  class="form-control" name="dob" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker4" value="{{ isset($teacher)? $teacher->dob :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Gender </label>
                                                <select name="gender" class="form-control select2" data-toggle="select2">>
                                                    <option value="male" {{isset($teacher) && $teacher->gender=='male'? 'selected':''}}>Male</option>
                                                    <option value="female" {{isset($teacher) && $teacher->gender=='female'? 'selected':''}}>Female</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">Religion</label>
                                                <select name="religion" class="form-control select2" data-toggle="select2">>
                                                    <option value="islam" {{isset($teacher) && $teacher->religion=='islam'? 'selected':''}}>Islam</option>
                                                    <option value="nonislam" {{isset($teacher) && $teacher->religion=='nonislam'? 'selected':''}}>nonislam</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label id="datepicker4" class="form-label">Joining Date </label>
                                                <input type="text"  class="form-control" name="joining_date" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker4" value="{{ isset($teacher)? $teacher->joining_date :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">Photo</label><br>
                                                <input type="file"  class="form-control-file" name="photo" placeholder="" >
                                                @if(isset($teacher))
                                                    <img src="{{asset($teacher->photo)}}" style="width: 100px;height: 100px" alt="">
                                                @endif
                                            </div>
                                            <div class="col-md-6  ">
                                                @if(isset($teacher))
                                                @else
                                                <label for="disabledTextInput" class="form-label">Password</label>
                                                    <input type="password"  class="form-control" name="password" placeholder="" value="{{ isset($teacher)? $teacher->password :''}}">

                                                @endif
                                                </div>

                                        </div>

                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">Education</label>
                                                <input type="text"  class="form-control" name="education" placeholder="" value="{{ isset($teacher)? $teacher->education :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">certificates </label>
                                                <input type="file"  class="form-control" name="file_path[]" multiple placeholder="" value="{{ isset($teacher)? $teacher->certificates :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Status</label>
                                                <div class="col-md-9">
                                                    <label class="sm-2" for=""><input type="radio" name="status" {{isset($teacher) && $teacher->status == 1? 'checked':''}} value="1"> Published</label>
                                                    <label for=""><input type="radio" name="status" {{isset($teacher) && $teacher->status == 0? 'checked':''}} value="0"> Unpublished</label>
                                                </div>
                                            </div>
{{--                                            <div class="col-md-6">--}}
{{--                                                <label for="" class="form-label">Status</label>--}}
{{--                                                <div class="col-md-9">--}}
{{--                                                    <input type="checkbox" name="status" id="switch1" checked data-switch="bool" value="{{ isset($teacher) && $teacher->status=='true'? 'On':'Off'}}"/>--}}
{{--                                                    <label for="switch1" data-on-label="Off" data-off-label="On"></label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">address </label>
                                                <textarea name="address" class="form-control" id="editor1" style="height: 300px;">{!! isset($teacher) ? $teacher->address : '' !!} </textarea>
                                            </div>

                                        </div>
                                        <div class="mt-5 float-end">
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="{{ isset($teacher) ? 'Update ' : 'Create ' }} teacher">
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

