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
                    <h4 class="text-capitalize float-start"> Certificates</h4>
                    <a href="{{ route('teacher.index') }}" class="btn btn-success float-end">
                        Manage
                    </a>
{{--                    <a href="{{ route('certificate.edit',$certificate->teacher_id) }}" class="btn mx-1 btn-success float-end">--}}
{{--                        Add-Certificate--}}
{{--                    </a>--}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Teacher Name</th>
                                <th>File</th>
                                <th>Extension</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($certificates as $certificate)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{\App\Models\Teacher::find($certificate->teacher_id)->name}}</td>
{{--                                    <td>{{ $certificate->teacher->name}}</td>--}}
                                    <td>
                                        <img src="{{asset($certificate->file_path) }}" style="height: 100px;width: 100px" alt="">
                                    </td>
                                    <td>{{ $certificate->extension }}</td>

                                    <td >
                                        <div class="d-flex">
{{--                                            <a href="{{route('certificate.show',$teacher->id)}}" class="mx-1 btn btn-info btn-sm py-0 px-1"><i class="dripicons-graduation"></i></a>--}}
{{--                                            <a href="{{route('teacher.show',$teacher->slug)}}" class=" btn btn-primary btn-sm py-0 px-1"><i class="uil-eye"></i></a>--}}
                                            <a href="{{ route('certificate.edit',$certificate->teacher_id) }}" class="mx-1 btn btn-info btn-sm py-0 px-1"><i class="dripicons-document-edit"></i></a>
                                            <form action="{{ route('certificate.destroy',$certificate->id) }}" method="post" style="display: inline-block"  onsubmit="return confirm('Are You sure that to delete this Class'); ">
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

