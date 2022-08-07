@extends('backend.master')

@section('title')
    Subjects
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'subject', 'child' => 'manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Subject</h4>
                    <a href="{{ route('subject.create') }}" class="btn btn-success float-end">
                        Create
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>class_name</th>
                                <th>Subject Name</th>
                                <th>Subject Type</th>
                                <th>Pass Mark</th>
                                <th>Full Mark</th>
                                <th>Subject Author</th>
                                <th>Subject Code</th>
                                <th>Subject Book</th>
                                <th>Lavel</th>
                                <th>is_graduation</th>
                                <th>is_main</th>
                                <th>is_optional</th>
                                <th>note</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subjects as $subj)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
{{--                                    <td>{{ $subj->classes->class_name }}</td>--}}
                                    <td>{{\App\Models\ClassMadrasha::find($subj->class_id)->class_name}}</td>
                                    <td>{{ $subj->subject_name }}</td>
                                    <td>{!! $subj->subject_type !!}</td>
                                    <td>{{ $subj->pass_mark }}</td>
                                    <td>{{ $subj->full_mark }}</td>
                                    <td>{{ $subj->subject_author }}</td>
                                    <td>{{ $subj->subject_code }}</td>
                                    <td>
                                        <img src="{{asset($subj->book_image) }}" style="height: 100px;width: 100px" alt="">
                                    </td>
                                    <td>{{ $subj->lavel }}</td>
                                    <td>{{ $subj->is_graduation==0? 'NO':'Yes'}}</td>
                                    <td>{{ $subj->is_main==0? 'NO':'Yes'}}</td>
                                    <td>{{ $subj->is_optional==0? 'NO':'Yes'}}</td>
                                    <td>{!! \Illuminate\Support\Str::words($subj->note,3,'...') !!}</td>
                                    <td >
                                        <div class="d-flex">
                                            <a href="{{route('subject.show',$subj->slug)}}" class=" btn btn-primary btn-sm py-0 px-1"><i class="uil-eye"></i></a>
                                            <a href="{{ route('subject.edit', $subj->slug) }}" class="mx-1 btn btn-info btn-sm py-0 px-1"><i class="dripicons-document-edit"></i></a>
                                            <form action="{{ route('subject.destroy', $subj->slug) }}" method="post" style="display: inline-block"  onsubmit="return confirm('Are You sure that to delete this Class'); ">
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

