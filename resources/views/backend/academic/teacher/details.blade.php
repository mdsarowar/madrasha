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
                    <h4 class="text-capitalize float-start">{{ $teacher->name }} -informations</h4>
                    <a href="{{ route('teacher.index') }}" class="btn btn-success float-end">
                        manage
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th class="col-md-3">Content</th>
                                <th class="col-md-9">Informations</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Name :</td>
                                <td>{{ $teacher->name }}</td>
                            </tr>
                            <tr>
                                <td>Email :</td>
                                <td>{{ $teacher->email }}</td>
                            </tr>
                            <tr>
                                <td>User Name :</td>
                                <td>{{ $teacher->user_name }}</td>
                            </tr>
                            <tr>
                                <td>Subject :</td>
                                <td>{{ $teacher->subject }}</td>
                            </tr>
                            <tr>
                                <td>Phone :</td>
                                <td>{{ $teacher->phone }}</td>
                            </tr>
                            <tr>
                                <td>Desination :</td>
                                <td>{{ $teacher->desination }}</td>
                            </tr>
                            <tr>
                                <td>DOB :</td>
                                <td>{{ $teacher->dob }}</td>
                            </tr>
                            <tr>
                                <td>Gender :</td>
                                <td>{{ $teacher->gender }}</td>
                            </tr>
                            <tr><td>Religion :</td>
                                <td>{{ $teacher->religion }}</td></tr>
                            <tr>
                                <td>Joining Date :</td>
                                <td>{{ $teacher->joining_date }}</td></tr>
                            <tr>
                                <td>Photo :</td>
                                <td>
                                    <img src="{{asset($teacher->photo) }}" style="height: 100px;width: 100px" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td>Education :</td>
                                <td>{{ $teacher->education }}</td>
                            </tr>
                            <tr>
                                <td>address :</td>
                                <td>{!! $teacher->address !!}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

