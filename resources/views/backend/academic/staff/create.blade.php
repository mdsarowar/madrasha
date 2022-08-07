@extends('backend.master')

@section('title')
    Create Staff
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Staff', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">Create Staff</h4>
                                <a href="{{ route('staff.index') }}" class="btn btn-success float-end">
                                    Manage
                                    {{--                                    <i class="dripicons-arrow-thin-left"></i>--}}
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{isset($staff) ? route('staff.update', $staff->id) : route('staff.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($staff))
                                            @method('put')
                                        @endif
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label"> Name </label>
                                                <input type="text"  class="form-control" name="name" placeholder="" value="{{ isset($staff)? $staff->name :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Father's Name  </label>
                                                <input type="text"  class="form-control" name="father_name" placeholder="" value="{{ isset($staff)? $staff->father_name :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label"> Mother's Name </label>
                                                <input type="text"  class="form-control" name="mother_name" placeholder="" value="{{ isset($staff)? $staff->mother_name :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">designation </label>
                                                <input type="text"  class="form-control" name="designation" placeholder="" value="{{ isset($staff)? $staff->designation :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label id="datepicker4" class="form-label">DOB</label>
                                                <input type="text" class="form-control" name="dob" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker4">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Gender </label>
                                                <select name="gender" class="form-control select2" data-toggle="select2">>
                                                    <option value="male" {{isset($subject) && $subject->gender=='male'? 'selected':''}}>Male</option>
                                                    <option value="female" {{isset($subject) && $subject->gender=='female'? 'selected':''}}>Female</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">Religion</label>
                                                <select name="religion" class="form-control select2" data-toggle="select2">>
                                                    <option value="islam" {{isset($subject) && $subject->religion=='islam'? 'selected':''}}>Islam</option>
                                                    <option value="nonislam" {{isset($subject) && $subject->religion=='nonislam'? 'selected':''}}>nonislam</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label id="datepicker4" class="form-label">Joining Date </label>
                                                <input type="text" class="form-control" name="joining_date" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker4" value="{{ isset($staff)? $staff->joining_date :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Email </label>
                                                <input type="email"  class="form-control" name="email" placeholder="" value="{{ isset($staff)? $staff->email :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Phone </label>
                                                <input type="text"  class="form-control" name="phone" placeholder="" value="{{ isset($staff)? $staff->phone :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">Photo</label><br>
                                                <input type="file"  class="form-control-file" name="photo" placeholder="" >
                                                @if(isset($staff))
                                                    <img src="{{asset($staff->photo)}}" style="width: 100px;height: 100px" alt="">
                                                @endif
                                            </div>
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">Education</label>
                                                <input type="text"  class="form-control" name="education" placeholder="" value="{{ isset($staff)? $staff->education :''}}">
                                            </div>


                                        </div>

                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">User Name </label>
                                                <input type="text"  class="form-control" name="user_name" multiple placeholder="" value="{{ isset($staff)? $staff->user_name :''}}">
                                            </div>
                                            <div class="col-md-6  ">
                                                @if(isset($staff))
                                                @else
                                                    <label for="disabledTextInput" class="form-label">Password</label>
                                                    <input type="password"  class="form-control" name="password" placeholder="" value="{{ isset($staff)? $staff->password :''}}">

                                                @endif
                                            </div>


                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">certificates </label>
                                                <input type="file"  class="form-control" name="file_path[]" multiple placeholder="" value="{{ isset($staff)? $staff->certificates :''}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Status</label>
                                                <div class="col-md-9">
                                                    <label class="sm-2" for=""><input type="radio" name="status" {{isset($staff) && $staff->status == 1? 'checked':''}} value="1"> Published</label>
                                                    <label for=""><input type="radio" name="status" {{isset($staff) && $staff->status == 0? 'checked':''}} value="0"> Unpublished</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">address </label>
                                                <textarea name="address" class="form-control" id="editor1" style="height: 300px;">{!! isset($staff) ? $staff->address : '' !!} </textarea>
                                            </div>

                                        </div>
                                        <div class="mt-5 float-end">
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="{{ isset($staff) ? 'Update ' : 'Create ' }} Staff">
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

