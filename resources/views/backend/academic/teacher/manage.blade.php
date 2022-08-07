@extends('backend.master')

@section('title')
    Teacher
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Teacher', 'child' => 'manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage teacher</h4>
                    <a href="{{ route('teacher.create') }}" class="btn btn-success float-end">
                        Create
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Name</th>
                                <th>Subject</th>
                                <th>Phone</th>
                                <th>Desination</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Religion</th>
                                <th>Joining Date</th>
                                <th>Photo</th>
                                <th>Education</th>
{{--                                <th>certificates</th>--}}
                                <th>address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
{{--                                    <td>{{ $teacher->classes->class_name }}</td>--}}
{{--                                    <td>{{\App\Models\ClassMadrasha::find($teacher->class_id)->class_name}}</td>--}}
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->user_name }}</td>
                                    <td>{{ $teacher->subject }}</td>
                                    <td>{{ $teacher->phone }}</td>
                                    <td>{{ $teacher->desination }}</td>
                                    <td>{{ $teacher->dob }}</td>
                                    <td>{{ $teacher->gender }}</td>
                                    <td>{{ $teacher->religion }}</td>
                                    <td>{{ $teacher->joining_date }}</td>
                                    <td>
                                        <img src="{{asset($teacher->photo) }}" style="height: 100px;width: 100px" alt="">
                                    </td>
{{--                                    <td>{{ $teacher->password }}</td>--}}
                                    <td>{{ $teacher->education }}</td>
                                    <td>{!! \Illuminate\Support\Str::words($teacher->address,3,'...') !!}</td>
                                    <td>{{ $teacher->status==0? 'unpublished':'published'}}</td>
                                    <td >
                                        <div class="d-flex">
                                            <a href="{{route('certificate.show',$teacher->id)}}" class="mx-1 btn btn-info btn-sm py-0 px-1"><i class="dripicons-graduation"></i></a>
                                            <a href="{{route('teacher.show',$teacher->slug)}}" class=" btn btn-primary btn-sm py-0 px-1"><i class="uil-eye"></i></a>
                                            <a href="{{ route('teacher.edit',$teacher->slug) }}" class="mx-1 btn btn-info btn-sm py-0 px-1"><i class="dripicons-document-edit"></i></a>
                                            <form action="{{ route('teacher.destroy',$teacher->slug) }}" method="post" style="display: inline-block"  onsubmit="return confirm('Are You sure that to delete this Class'); ">
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

