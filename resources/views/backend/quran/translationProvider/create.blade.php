@extends('backend.master')

@section('title')
    Create Translation Provider
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Translation Provider', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">Create Translation Provider</h4>
                                <a href="{{ route('translation_provider.index') }}" class="btn btn-success float-end">
                                    Manage
                                    {{--                                    <i class="dripicons-arrow-thin-left"></i>--}}
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{isset($transprov) ? route('translation_provider.update', $transprov->id) : route('translation_provider.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($transprov))
                                            @method('put')
                                        @endif

                                        <div class="form-group row mt-2">
                                            <div class="col-md-4 ">
                                                <label for="disabledTextInput" class="form-label">Brand Name </label>
                                                <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Brand Name" data-bs-placement="right"></i>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text"  class="form-control" name="brand_name" placeholder="" value="{{$errors->any() ? (old('brand_name')): (isset($transprov)? $transprov->brand_name :'')}}">
                                                @error('brand_name')<span class="text-danger f-s-12">{{$errors->first('brand_name')}}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4 ">
                                                <label  class="form-label">Translated By </label>
                                                <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Translated By" data-bs-placement="right"></i>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text"  class="form-control" name="translated_by" placeholder="" value="{{$errors->any() ? (old('translated_by')) :(isset($transprov)? $transprov->translated_by :'')}}">
                                                @error('translated_by')<span class="text-danger f-s-12">{{$errors->first('translated_by')}}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4 ">
                                                <label class="form-label">language</label>
                                                <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set language" data-bs-placement="right"></i>
                                            </div>
                                            <div class="col-md-8 ">
                                                <select name="language" class="form-control select2" data-toggle="select2">
                                                    <option value="">Select Language</option>
                                                    <option value="bangla" {{$errors->any() ? (old('language')) :(isset($transprov) && $transprov->language=='bangla'? 'selected':'')}}>Bangla</option>
                                                    <option value="english" {{$errors->any() ? (old('language')) :(isset($transprov) && $transprov->language=='english'? 'selected':'')}}>English</option>
                                                    <option value="arabic" {{$errors->any() ? (old('language')) :(isset($transprov) && $transprov->language=='arabic'? 'selected':'')}}>Erabic</option>
                                                </select>
                                                @error('language')<span class="text-danger f-s-12">{{$errors->first('language')}}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-4 ">
                                                <label for="" class="col-md-4">
                                                    Status
                                                    <i class="dripicons-question" data-bs-toggle="tooltip" data-bs-title="Set Your Status" data-bs-placement="right"></i>
                                                </label>
                                                <br/>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="" class="mt-2"> <input type="radio" name="status" value="1" @if(isset($transprov)) {{$transprov->status == 1 ?'checked':''}} @endif>Published</label>
                                                <label for=""class="mt-2"> <input type="radio"  name="status" value="0" @if(isset($transprov)) {{$transprov->status == 0 ?'checked':''}} @endif>UnPublished</label>
                                                <br> @error('language')<span class="text-danger f-s-12">{{$errors->first('language')}}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="mt-5 float-end">
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="{{ isset($transprov) ? 'Update ' : 'Create ' }} Provider">
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

