@extends('backend.master')

@section('title')
    Create Parent
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Parent', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">Create Parent</h4>
                                <a href="{{ route('parent.index') }}" class="btn btn-success float-end">
                                    Manage
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{isset($parent) ? route('parent.update', $parent->id) : route('parent.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($parent))
                                            @method('put')
                                        @endif
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label"> Guardian Name  </label>
                                                <input type="text"  class="form-control" name="guardian_name" placeholder="" value="{{ isset($parent)? $parent->guardian_name :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Guardian Relation </label>
                                                <input type="text"  class="form-control" name="guardian_relation" placeholder="" value="{{ isset($parent)? $parent->guardian_relation :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Father's Name </label>
                                                <input type="text"  class="form-control" name="father_name" placeholder="" value="{{ isset($parent)? $parent->father_name :''}}">
                                            </div><div class="col-md-6 ">
                                                <label  class="form-label">Mother's Name </label>
                                                <input type="text"  class="form-control" name="mother_name" placeholder="" value="{{ isset($parent)? $parent->mother_name :''}}">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Father's Profession </label>
                                                <input type="text"  class="form-control" name="father_profession" placeholder="" value="{{ isset($parent)? $parent->father_profession :''}}">
                                            </div><div class="col-md-6 ">
                                                <label  class="form-label">Mother's Profession </label>
                                                <input type="text"  class="form-control" name="mother_profession" placeholder="" value="{{ isset($parent)? $parent->mother_profession :''}}">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Email </label>
                                                <input type="email"  class="form-control" name="email" placeholder="" value="{{ isset($parent)? $parent->email :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Phone </label>
                                                <input type="text"  class="form-control" name="phone" placeholder="" value="{{ isset($parent)? $parent->phone :''}}">
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">User Name </label>
                                                <input type="text"  class="form-control" name="user_name" multiple placeholder="" value="{{ isset($parent)? $parent->user_name :''}}">
                                            </div>
                                            <div class="col-md-6  ">
                                                @if(isset($parent))
                                                @else
                                                    <label for="disabledTextInput" class="form-label">Password</label>
                                                    <input type="password"  class="form-control" name="password" placeholder="" value="{{ isset($parent)? $parent->password :''}}">
                                                @endif
                                            </div>


                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">Photo</label><br>
                                                <input type="file"  class="form-control-file" name="photo" placeholder="" >
                                                @if(isset($parent))
                                                    <img src="{{asset($parent->photo)}}" style="width: 100px;height: 100px" alt="">
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Status</label>
                                                <div class="col-md-9">
                                                    <label class="sm-2" for=""><input type="radio" name="status" {{isset($parent) && $parent->status == 1? 'checked':''}} value="1"> Published</label>
                                                    <label for=""><input type="radio" name="status" {{isset($parent) && $parent->status == 0? 'checked':''}} value="0"> Unpublished</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">address </label>
                                                <textarea name="address" class="form-control" id="editor1" style="height: 300px;">{!! isset($parent) ? $parent->address : '' !!} </textarea>
                                            </div>

                                        </div>
                                        <div class="mt-5 float-end">
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="{{ isset($parent) ? 'Update ' : 'Create ' }} Parent">
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

