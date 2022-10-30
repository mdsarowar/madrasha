@extends('backend.master')

@section('title')
    Create Member
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Member', 'child' =>'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">{{isset($member) ?'Update':'Create'}} Member</h4>
                                <a href="{{ route('library_member.index') }}" class="btn btn-success float-end">
                                    Manage
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{isset($member) ? route('library_member.update', $member->id) : route('library_member.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($member))
                                            @method('put')
                                        @endif

                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                    Library Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Library Name" data-bs-placement="right"></i>
                                                </label>
                                                <select name="library_id" class="select1 form-control" data-toggle="select1"  data-placeholder="Choose ...">
                                                    <option value="1">11</option>
                                                    {{--                                                    @foreach($classes as $class)--}}
                                                    {{--                                                        <option value="{{$errors->any()? old('library_book_category_id'): $class->id}}" {{isset($subject) && $subject->class_id==$class->id? 'selected':''}}> {{$class->class_name}}</option>--}}
                                                    {{--                                                    @endforeach--}}
                                                </select>
                                                @error('library_id')<span class="text-danger f-s-12">{{$errors->first('library_id')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                    User Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your User Name" data-bs-placement="right"></i>
                                                </label>
                                                <select name="user_id" class="select1 form-control" data-toggle="select1"  data-placeholder="Choose ...">
                                                    @foreach($users as $user)
                                                        <option value="{{$user->id}}" {{$errors->any() && old('user_id')==$user->id? ('selected'):(isset($member) && $member->user_id==$user->id? 'selected':'')}}> {{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('user_id')<span class="text-danger f-s-12">{{$errors->first('user_id')}}</span> @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Member Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your member Name" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="name" placeholder="" value="{{ $errors->any() ? old('name') : (isset($member)? $member->name :'')}}">
                                                @error('name')<span class="text-danger f-s-12">{{$errors->first('name')}}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <div class="col-md-4  ">
                                                <label for="disabledTextInput" class="form-label">
                                                    Email
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your  Email" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="email" placeholder="" value="{{ $errors->any() ? old('email') : (isset($member)? $member->email :'')}}">
                                                @error('email')<span class="text-danger f-s-12">{{$errors->first('email')}}</span> @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Phone
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Phone" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="phone" placeholder="" value="{{$errors->any() ? old('phone') : (isset($member)? $member->phone :'')}}">
                                                @error('phone')<span class="text-danger f-s-12">{{$errors->first('phone')}}</span> @enderror
                                            </div>

                                        </div>

                                        <div class=" form-group row mt-3 float-end ">
                                            <input type="submit" value="{{isset($member)?'Update Member':'Add Member'}}" class="btn btn-success">
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
