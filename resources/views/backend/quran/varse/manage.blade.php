@extends('backend.master')

@section('title')
    Quran Varse
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Varse', 'child' => 'manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Qurarn Varse</h4>
                    <a href="{{ route('varse.create') }}" class="btn btn-success float-end">
                        Create
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Quran Chapter</th>
                                <th>Verse Arabic</th>
                                <th>Verse Bangla</th>
                                <th>Verse English</th>
                                <th>Audio</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($varses as $varse)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                   <td>{{ $varse->quranChapter->arabic_name }}</td>
                                    <td>{!! \Illuminate\Support\Str::words($varse->verse_arabic,3,'...') !!}</td>
                                    <td>{!! \Illuminate\Support\Str::words($varse->verse_bangla,3,'...') !!}</td>
                                    <td>{!! \Illuminate\Support\Str::words($varse->verse_english,3,'...') !!}</td>
                                    <td>
                                        <audio controls  muted><source src={{asset($varse->audio)}} type="audio/mpeg"></audio>
                                    </td>
                                    <td>{{ $varse->status==0? 'unpublished':'published'}}</td>
                                    <td >
                                        <div class="d-flex">
{{--                                            <a href="{{route('varse.show',$varse->slug)}}" class=" btn btn-primary btn-sm py-0 px-1"><i class="uil-eye"></i></a>--}}
                                            <a href="{{ route('varse.edit',$varse->slug) }}" class="mx-1 btn btn-info btn-sm py-0 px-1"><i class="dripicons-document-edit"></i></a>
                                            <form action="{{ route('varse.destroy',$varse->slug) }}" method="post" style="display: inline-block"  onsubmit="return confirm('Are You sure that to delete this Class'); ">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm py-0 px-1">
                                                    <i class="dripicons-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

