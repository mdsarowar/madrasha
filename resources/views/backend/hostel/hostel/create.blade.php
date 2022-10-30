@extends('backend.master')

@section('title')
    Create Hostel
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Hostel', 'child' =>'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">{{isset($hostel) ?'Update':'Create'}} Hostel</h4>
                                <a href="{{ route('hostel.index') }}" class="btn btn-success float-end">
                                    Manage
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{isset($hostel) ? route('hostel.update', $hostel->id) : route('hostel.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($hostel))
                                            @method('put')
                                        @endif

                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Hostel Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Hostel Name" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="hostel_name" placeholder="" value="{{ $errors->any() ? old('hostel_name') : (isset($hostel)? $hostel->hostel_name :'')}}">
                                                @error('hostel_name')<span class="text-danger f-s-12">{{$errors->first('hostel_name')}}</span> @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label for="disabledTextInput" class="form-label">
                                                    Academic Class Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Academic Class Name" data-bs-placement="right"></i>
                                                </label>
                                                <select name="hostel_type" class="select1 form-control" data-toggle="select1" data-placeholder="Choose ...">
                                                    <option value="1">six</option>
                                                    {{--                                                    @foreach($classes as $class)--}}
                                                    {{--                                                        <option value="{{$errors->any()? old('hostel_type'): $class->id}}" {{isset($subject) && $subject->hostel_type?'selected':''}}> {{$class->hostel_type}}</option>--}}
                                                    {{--                                                    @endforeach--}}
                                                </select>
                                                @error('hostel_type')<span class="text-danger f-s-12">{{$errors->first('hostel_type')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="form-label">
                                                    Fee
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Fee" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="fee" placeholder="" value="{{$errors->any() ? old('fee') : (isset($hostel)? $hostel->fee :'')}}">
                                                @error('fee')<span class="text-danger f-s-12">{{$errors->first('fee')}}</span> @enderror
                                            </div>


                                        </div>

                                        <div class="form-group row mt-2">

                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    class_type
                                                    <i class="dripicons-question text-danger" data-bs-toggle="tooltip" data-bs-title="Set Your Designation" data-bs-placement="right"></i>
                                                </label>
                                                <br/>
{{--                                                <select name="quran_chapter_id" class=" form-control " data-toggle="select" data-placeholder="Choose ...">--}}
{{--                                                    <option value="">select a chapter</option>--}}
{{--                                                    @foreach($chapters as $chapter)--}}
{{--                                                        <option value="{{$chapter->id}}" {{$errors->any() ? (old('quran_chapter_id')) :(isset($varse) && $varse->quran_chapter_id==$chapter->id? 'selected':'')}}> {{$chapter->arabic_name}}</option>--}}
{{--                                                    @endforeach--}}
{{--                                                </select>--}}
                                                <select name="class_type" class="form-control"  data-toggle="select" data-placeholder="Choose ...">
                                                    <option value="" disabled selected>select a Class</option>
                                                    <option value="1">aaaaaaa</option>

                                                </select>
                                                @error('designation_id')<span class="text-danger f-s-12">{{$errors->first('designation_id')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Total Floor
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Total Floor" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="total_floor" placeholder="" value="{{$errors->any() ? old('total_floor') : (isset($hostel)? $hostel->total_floor :'')}}">
                                                @error('total_floor')<span class="text-danger f-s-12">{{$errors->first('total_floor')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Total Room
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Total Room" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="total_rooms" placeholder="" value="{{$errors->any() ? old('total_rooms') : (isset($hostel)? $hostel->total_rooms :'')}}">
                                                @error('total_rooms')<span class="text-danger f-s-12">{{$errors->first('total_rooms')}}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Seat
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Seat" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="seat_per_room" placeholder="" value="{{$errors->any() ? old('seat_per_room') : (isset($hostel)? $hostel->seat_per_room :'')}}">
                                                @error('seat_per_room')<span class="text-danger f-s-12">{{$errors->first('seat_per_room')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="col-md-4">
                                                    Status
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Status" data-bs-placement="right"></i>
                                                </label>
                                                <br/>
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
                                                <textarea name="note" id="editor" cols="20" rows="5" class="form-control" value="">{!! $errors->any()? old('note'):(isset($hostel)? $hostel->note:'')!!}</textarea>
                                                @error('note')<span class="text-danger f-s-12">{{$errors->first('note')}}</span> @enderror
                                            </div>
                                            <div class="col-md-6  ">
                                                <label for="" class="form-label">
                                                    Address
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Address" data-bs-placement="right"></i>
                                                </label>
                                                <textarea name="address" id="editor" cols="20" rows="5" class="form-control" value="">{!! $errors->any()? old('address'):(isset($hostel)? $hostel->address:'')!!}</textarea>
                                                @error('address')<span class="text-danger f-s-12">{{$errors->first('address')}}</span> @enderror
                                            </div>

                                        </div>

                                        <div class=" form-group row mt-3 float-end ">
                                            <input type="submit" value="{{isset($hostel)?'Update ':'Add '}} Hostel" class="btn btn-success">
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
