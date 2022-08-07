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
                                    {{--                                    <i class="dripicons-arrow-thin-left"></i>--}}
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
                                            <div class="col-md-6">
                                                <label for="disabledTextInput" class="form-label">Arabic Name </label>
                                                <input type="text"  class="form-control" name="arabic_name" placeholder="" value="{{ isset($chapter)? $chapter->arabic_name :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Bangla Name </label>
                                                <input type="text"  class="form-control" name="bangla_name" placeholder="" value="{{ isset($chapter)? $chapter->bangla_name :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">English Name </label>
                                                <input type="text"  class="form-control" name="english_name" placeholder="" value="{{ isset($chapter)? $chapter->english_name :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Chapter Serial </label>
                                                <input type="text"  class="form-control" name="chapter_serial" placeholder="" value="{{ isset($chapter)? $chapter->chapter_serial :''}}">
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6  ">
                                                <label for="disabledTextInput" class="form-label">Total Verse </label>
                                                <input type="text"  class="form-control" name="total_verse" placeholder="" value="{{ isset($chapter)? $chapter->total_verse :''}}">
                                            </div>
                                            <div class="col-md-6 ">
                                                <label class="form-label">Surah Origin</label>
                                                <select name="surah_origin" class="form-control select2" data-toggle="select2">>
                                                    <option value="makki" {{isset($chapter) && $chapter->surah_origin=='makki'? 'selected':''}}>Makki</option>
                                                    <option value="madani" {{isset($chapter) && $chapter->surah_origin=='madani'? 'selected':''}}>Madani</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Status</label>
                                                <div class="col-md-9">
                                                    <label class="sm-2" for=""><input type="radio" name="status" {{isset($chapter) && $chapter->status == 1? 'checked':''}} value="1"> Published</label>
                                                    <label for=""><input type="radio" name="status" {{isset($chapter) && $chapter->status == 0? 'checked':''}} value="0"> Unpublished</label>
                                                </div>
                                            </div>
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
