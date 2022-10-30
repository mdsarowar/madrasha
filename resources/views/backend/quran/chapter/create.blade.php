@extends('backend.master')

@section('title')
    Create Quran Chapter
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'chapter', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">Create Chapter</h4>
                                <a href="{{ route('chapter.index') }}" class="btn btn-success float-end">
                                    Manage
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{isset($chapter) ? route('chapter.update', $chapter->id) : route('chapter.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($chapter))
                                            @method('put')
                                        @endif

                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Arabic Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Arabic Name" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="arabic_name" placeholder="" value="{{ $errors->any() ? old('arabic_name') : (isset($hostel)? $hostel->arabic_name :'')}}">
                                                @error('arabic_name')<span class="text-danger f-s-12">{{$errors->first('arabic_name')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Bangla Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Bangla Name" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="bangla_name" placeholder="" value="{{ $errors->any() ? old('bangla_name') : (isset($hostel)? $hostel->bangla_name :'')}}">
                                                @error('bangla_name')<span class="text-danger f-s-12">{{$errors->first('bangla_name')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    English Name
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set English Name" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="english_name" placeholder="" value="{{ $errors->any() ? old('english_name') : (isset($hostel)? $hostel->english_name :'')}}">
                                                @error('english_name')<span class="text-danger f-s-12">{{$errors->first('english_name')}}</span> @enderror
                                            </div>


                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Chapter Serial
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set English Name" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="chapter_serial" placeholder="" value="{{ $errors->any() ? old('chapter_serial') : (isset($hostel)? $hostel->chapter_serial :'')}}">
                                                @error('chapter_serial')<span class="text-danger f-s-12">{{$errors->first('chapter_serial')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="form-label">
                                                    Total Verse
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Total Verse" data-bs-placement="right"></i>
                                                </label>
                                                <input type="text"  class="form-control" name="total_verse" placeholder="" value="{{ $errors->any() ? old('total_verse') : (isset($hostel)? $hostel->total_verse :'')}}">
                                                @error('total_verse')<span class="text-danger f-s-12">{{$errors->first('total_verse')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Surah Origin</label>
                                                <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Select Surah Origin" data-bs-placement="right"></i>
                                                <select name="surah_origin" class="form-control select2" data-toggle="select2">
                                                    <option value="" selected>select sura origin</option>
                                                    <option value="makki" {{$errors->any() ? ('selected' ):(isset($chapter) && $chapter->surah_origin=='makki'? 'selected':'')}}>Makki</option>
                                                    <option value="madani" {{$errors->any() ?( 'selected' ):(isset($chapter) && $chapter->surah_origin=='madani'? 'selected':'')}}>Madani</option>
                                                </select>
                                                @error('surah_origin')<span class="text-danger f-s-12">{{$errors->first('surah_origin')}}</span> @enderror
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label for="" class="col-md-4">
                                                    Status
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Status" data-bs-placement="right"></i><br>
                                                </label>

                                                <br/>
                                                <label for="" class="mt-2"> <input type="radio" name="status" value="1" {{$errors->any() ? (old('surah_origin')):(isset($chapter) && $chapter->status == 1 ?'checked':'')}} >Published</label>
                                                <label for=""class="mt-2"> <input type="radio"  name="status" value="0" {{$errors->any() ? (old('surah_origin')) :(isset($chapter) && $chapter->status == 0 ?'checked':'')}} >UnPublished</label>
                                            </div>
                                            @error('status')<span class="text-danger f-s-12" >{{$errors->first('status')}}</span> @enderror
                                        </div>

                                        <div class="mt-5 float-end">
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="{{ isset($chapter) ? 'Update ' : 'Create ' }} Chapter">
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
