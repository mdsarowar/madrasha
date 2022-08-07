@extends('backend.master')

@section('title')
    Create Quran Translation
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Translation', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start">Create Quran Translation</h4>
                                <a href="{{ route('translation.index') }}" class="btn btn-success float-end">
                                    Manage
                                    {{--                                    <i class="dripicons-arrow-thin-left"></i>--}}
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{isset($translation) ? route('translation.update', $translation->id) : route('translation.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($translation))
                                            @method('put')
                                        @endif

                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label" id="xx">Quran Chapterx</label>
                                                <select name="quran_chapter_id" id="chapterId" class=" form-control ">
                                                    <option value="">select a verse</option>
                                                    @foreach($chapters as $chapter)
                                                        <option value="{{$chapter->id}}" {{isset($translation) && $translation->quran_chapter_id==$chapter->id? 'selected':''}}> {{$chapter->arabic_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Quran Verse</label>
                                                <select name="quran_verse_id" id="quranVerses" class="form-control " data-toggle="select2" data-placeholder="Choose ...">
{{--                                                    @foreach($varses as $varse)--}}
{{--                                                        <option value="{{$varse->id}}" {{isset($translation) && $translation->quran_verse_id==$varse->id? 'selected':''}}> {!! $varse->verse_arabic !!}</option>--}}
{{--                                                    @endforeach--}}
                                                </select>
                                            </div>

                                        </div>

                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Quran Translation Provider</label>
                                                <select name="quran_translation_provider_id" class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                                    @foreach($transproviders as $trprovider)
                                                        <option value="{{$trprovider->id}}" {{isset($translation) && $translation->quran_translation_provider_id==$trprovider->id? 'selected':''}}> {{$trprovider->brand_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Status</label>
                                                <div class="col-md-9">
                                                    <label class="sm-2" for=""><input type="radio" name="status" {{isset($translation) && $translation->status == 1? 'checked':''}} value="1"> Published</label>
                                                    <label for=""><input type="radio" name="status" {{isset($translation) && $translation->status == 0? 'checked':''}} value="0"> Unpublished</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 ">
                                                <label  class="form-label">Translated Verse</label>
                                                <div id="snow-editor">
                                                    <textarea name="translated_verse" id="editor1" class="form-control" style="height: 300px;">{!! isset($translation) ? $translation->translated_verse : '' !!}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-5 float-end">
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="{{ isset($translation) ? 'Update ' : 'Create ' }} Translation">
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

@section('script')
    <script>
        var base_url = {!! json_encode(url('/')) !!}+'/';
        // $('#xx').click(function (){
        //     alert('sdfsdf');
        // });
        // $('#chapterId').click(function (){
        $(document).on('click','#chapterId', function(){
            // alert('sdfsdf');
            var chapterId = $(this).val();
            $.ajax({
                url: base_url +"admin/get-verse-data-by-chapter-id",
                dataType: "JSON",
                method: "POST",
                data: {quran_chapter_id:chapterId},
                success: function (res) {
                    console.log(res);
                    var verse = '';
                    verse += '<option value="">select a verse</option>';
                    $.each(res, function (index, value) {
                        verse += '<option value="'+value.id+'">'+value.verse_arabic+'</option>';
                    })

                    $('#quranVerses').empty().append(verse);
                }
            })
        })
    </script>
@endsection

