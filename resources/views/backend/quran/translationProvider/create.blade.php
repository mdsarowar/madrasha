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
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">Brand Name </label>
                                                <input type="text"  class="form-control" name="brand_name" placeholder="" value="{{ isset($transprov)? $transprov->brand_name :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Translated By </label>
                                                <input type="text"  class="form-control" name="translated_by" placeholder="" value="{{ isset($transprov)? $transprov->translated_by :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label class="form-label">language</label>
                                                <select name="language" class="form-control select2" data-toggle="select2">>
                                                    <option value="bangla" {{isset($transprov) && $transprov->language=='bangla'? 'selected':''}}>Bangla</option>
                                                    <option value="english" {{isset($transprov) && $transprov->language=='english'? 'selected':''}}>English</option>
                                                    <option value="arabic" {{isset($transprov) && $transprov->language=='arabic'? 'selected':''}}>Erabic</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Status</label>
                                                <div class="col-md-9">
                                                    <label class="sm-2" for=""><input type="radio" name="status" {{isset($transprov) && $transprov->status == 1? 'checked':''}} value="1"> Published</label>
                                                    <label for=""><input type="radio" name="status" {{isset($transprov) && $transprov->status == 0? 'checked':''}} value="0"> Unpublished</label>
                                                </div>
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

