@extends('backend.master')

@section('title')
    Question Difficulty level
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Question Difficulty Level', 'child' => 'manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Exam</h4>
                    <a href="{{ route('question_difficulty_level.create') }}" class="btn btn-success float-end">
                        {{--                        <i class="mdi mdi-plus"></i>--}}
                        Create
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($difficultys as $difficulty)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $difficulty->title }}</td>
                                    <td>{{ $difficulty->status==0? 'Unpublished':'Publishid'}}</td>
                                    <td>
                                        {{--                                        <a href="{{route('section.show',$difficulty->id)}}" class="btn btn-{{$difficulty->status==0? 'secondary':'primary'}} btn-sm py-0 px-1"><i class="uil-arrow-{{$difficulty->status==0? 'down':'up'}}"></i></a>--}}
                                        <a href="{{ route('question_difficulty_level.edit', $difficulty->slug) }}" class="btn btn-info btn-sm py-0 px-1"><i class="dripicons-document-edit"></i></a>
                                        <form action="{{ route('question_difficulty_level.destroy', $difficulty->slug) }}" method="post" style="display: inline-block"  onsubmit="return confirm('Are You sure that to delete this Question Difficulty level'); ">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm py-0 px-1">
                                                <i class="dripicons-trash"></i>
                                            </button>
                                        </form>
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

