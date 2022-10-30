@extends('backend.master')

@section('title')
    Create verse
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'verse', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">Create verse</h4>
                                <a href="{{ route('varse.index') }}" class="btn btn-success float-end">
                                    Manage
                                    {{--                                    <i class="dripicons-arrow-thin-left"></i>--}}
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{isset($varse) ? route('varse.update', $varse->id) : route('varse.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($varse))
                                            @method('put')
                                        @endif
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4  ">
                                                <label for="disabledTextInput" class="form-label">Brand Name </label>
                                                <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Brand Name" data-bs-placement="right"></i>
                                                <input type="text"  class="form-control" name="brand_name" placeholder="" value="{{ $errors->any() ? old('brand_name') : (isset($varse)? $varse->brand_name :'')}}">
                                               @error('brand_name')<span class="text-danger f-s-12">{{$errors->first('brand_name')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4 ">
                                                <label  class="form-label">Quran Chapter </label>
                                                <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Quran Chapter" data-bs-placement="right"></i>
                                                <select name="quran_chapter_id" class=" form-control " data-toggle="select" data-placeholder="Choose ...">
                                                    <option value="">select a chapter</option>
                                                    @foreach($chapters as $chapter)
                                                        <option value="{{$chapter->id}}" {{$errors->any() ? (old('quran_chapter_id')) :(isset($varse) && $varse->quran_chapter_id==$chapter->id? 'selected':'')}}> {{$chapter->arabic_name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('quran_chapter_id')<span class="text-danger f-s-12">{{$errors->first('quran_chapter_id')}}</span> @enderror
                                            </div>
                                            <div class="col-md-4  ">
                                                <label for="disabledTextInput" class="form-label">Audio </label>
                                                <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set audio" data-bs-placement="right"></i>
                                                <input type="file"  class="form-control-file" name="audio" placeholder="">
                                                @if(isset($verse))
                                                    <audio controls autoplay muted>
                                                        <source src={{asset($verse->audio)}} type="audio/mpeg">
                                                    </audio>
                                                @endif
                                                @error('audio')<span class="text-danger f-s-12">{{$errors->first('audio')}}</span> @enderror
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">

                                            <div class="col-md-4">
                                                <label for="" class="col-md-4">
                                                    Status
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Status" data-bs-placement="right"></i>
                                                </label>
                                                <br/>
                                                <label for="" class="mt-2"> <input type="radio" name="status" value="1" @if(isset($hostel)) {{$hostel->status == 1 ?'checked':''}} @endif>Published</label>
                                                <label for=""class="mt-2"> <input type="radio"  name="status" value="0" @if(isset($hostel)) {{$hostel->status == 0 ?'checked':''}} @endif>UnPublished</label>
                                                <br>@error('audio')<span class="text-danger f-s-12">{{$errors->first('audio')}}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label for="" class="form-label">
                                                    Verse Arabic
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Verse Arabic" data-bs-placement="right"></i>
                                                </label>
                                            </div>
                                                <div class="col-md-8">
                                                    <textarea name="verse_arabic" id="editor" cols="20" rows="5" class="form-control" value="">{!!$errors->any() ? (old('verse_arabic')) :(isset($varse)? $varse->verse_arabic:'')!!}</textarea>
                                                    @error('verse_arabic')<span class="text-danger f-s-12">{{$errors->first('verse_arabic')}}</span> @enderror
                                                </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label for="" class="form-label">
                                                    Verse Bangla
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Verse Bangla" data-bs-placement="right"></i>
                                                </label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea name="verse_bangla" id="editor" cols="20" rows="5" class="form-control" value="">{!!$errors->any() ? (old('verse_bangla')) :(isset($varse)? $varse->verse_bangla:'')!!}</textarea>
                                                @error('verse_bangla')<span class="text-danger f-s-12">{{$errors->first('verse_bangla')}}</span> @enderror

                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4">
                                                <label for="" class="form-label">
                                                    Verse English
                                                </label>
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Verse English" data-bs-placement="right"></i>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea name="verse_english" id="editor" cols="20" rows="5" class="form-control" value="">{!!$errors->any() ? (old('verse_english')) :(isset($varse)? $varse->verse_english:'')!!}</textarea>
                                                @error('verse_english')<span class="text-danger f-s-12">{{$errors->first('verse_english')}}</span> @enderror

                                            </div>

                                        </div>

                                        <div class="mt-5 float-end">
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="{{ isset($varse) ? 'Update ' : 'Create ' }} Varse">
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

