@extends('backend.master')

@section('title')
    Question
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Question', 'child' => 'manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Question</h4>
                    <a href="{{ route('question.create') }}" class="btn btn-success float-end">
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
                                <th>Accademic Class</th>
                                <th>Subject Name</th>
                                <th>Question Difficulty Level</th>
                                <th>Question</th>
                                <th>Explanation</th>
                                <th>Question Image</th>
                                <th>Mark</th>
                                <th>Hints</th>
                                <th>Question Answer Type</th>
                                <th>total Options</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questions as $question)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $question->academicClass->class_name }}</td>
                                    <td>{{ $question->subject->subject_name }}</td>
                                    <td>{{ $question->questionDifficultyLevel->title }}</td>
                                    <td>{{ $question->question }}</td>
                                    <td>{{ $question->explanation }}</td>
                                    <td style="height: 100px;width: 150px">
                                        <img src=" {{ asset($question->question_img) }}" alt="">

                                    </td>
                                    <td>{{ $question->mark }}</td>
                                    <td>{{ $question->hints }}</td>
                                    <td>{{ $question->question_answer_type }}</td>
                                    <td>{{ $question->total_options }}</td>
{{--                                    <td>{{ $question->total_options }}</td>--}}
                                    <td>{{ $question->status==0? 'Unpublished':'Publishid'}}</td>
                                    <td>
                                        {{--                                        <a href="{{route('section.show',$question->id)}}" class="btn btn-{{$question->status==0? 'secondary':'primary'}} btn-sm py-0 px-1"><i class="uil-arrow-{{$question->status==0? 'down':'up'}}"></i></a>--}}
                                        <a href="{{ route('question.edit', $question->slug) }}" class="btn btn-info btn-sm py-0 px-1"><i class="dripicons-document-edit"></i></a>
                                        <form action="{{ route('question.destroy', $question->slug) }}" method="post" style="display: inline-block"  onsubmit="return confirm('Are You sure that to delete this Section'); ">
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

