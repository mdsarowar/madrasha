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
                    <button type="button" class="btn btn-info m-2">Print</button>
                    <button type="button" class="btn btn-info m-2">PDF Preview</button>
                    <button type="button" class="btn btn-info m-2">Edit</button>
                    <button type="button" class="btn btn-info m-2">Send Pdf to Mail</button>
{{--                    <h4 class="text-capitalize float-start">Manage teacher</h4>--}}
                    <a href="{{ route('teacher.create') }}" class="btn btn-success float-end">
                        Create
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="row">
                                <picture >
                                    <source srcset="..." type="image/svg+xml">
                                    <img src="..." class="img-fluid img-thumbnail float-center" alt="...">
                                    <h3>Student</h3>
                                </picture>
                                <table class="col-md-12">
                                    <tr>
                                        <th>Register NO</th>
                                        <td>:123456</td>
                                    </tr>
                                    <tr>
                                        <th>Roll</th>
                                        <td>:145</td>
                                    </tr>
                                    <tr>
                                        <th>Clas </th>
                                        <td>:one</td>
                                    </tr>
                                    <tr>
                                        <th>Section</th>
                                        <td>:A</td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                        <div class="col-md-8 ">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="true">Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="parent-tab" data-bs-toggle="tab" data-bs-target="#parent-tab-pane" type="button" role="tab" aria-controls="parent-tab-pane" aria-selected="false">Parents</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="routine-tab" data-bs-toggle="tab" data-bs-target="#routine-tab-pane" type="button" role="tab" aria-controls="routine-tab-pane" aria-selected="false">Routine</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="attend-tab" data-bs-toggle="tab" data-bs-target="#attend-tab-pane" type="button" role="tab" aria-controls="attend-tab-pane" aria-selected="false">Attendance</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="mark-tab" data-bs-toggle="tab" data-bs-target="#mark-tab-pane" type="button" role="tab" aria-controls="mark-tab-pane" aria-selected="false">Mark</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="invoice-tab" data-bs-toggle="tab" data-bs-target="#invoice-tab-pane" type="button" role="tab" aria-controls="invoice-tab-pane" aria-selected="false">Invoice</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment-tab-pane" type="button" role="tab" aria-controls="payment-tab-pane" aria-selected="false">Payment</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="document-tab" data-bs-toggle="tab" data-bs-target="#document-tab-pane" type="button" role="tab" aria-controls="document-tab-pane" aria-selected="false">Document</button>
                                </li>
{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>--}}
{{--                                </li>--}}
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-md-6">
{{--                                            <div class="row">--}}
{{--                                                <div class="col-md-6">--}}
{{--                                                    --}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <table class="col-md-12">
                                                <tr>
                                                    <th>Group</th>
                                                    <td>:Sceince</td>
                                                </tr>
                                                <tr>
                                                    <th>Date of Birth</th>
                                                    <td>:28 jan 2020</td>
                                                </tr>
                                                <tr>
                                                    <th>Blood Group</th>
                                                    <td>:B+</td>
                                                </tr>
                                                <tr>
                                                    <th>State</th>
                                                    <td>:Dhaka</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="col-md-12">
                                                <tr>
                                                    <th>Optional Subject</th>
                                                    <td>:Bangla</td>
                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <td>:Male</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>:1111111111111</td>
                                                </tr>
                                                <tr>
                                                    <th>Country</th>
                                                    <td>:Bangladesh</td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="parent-tab-pane" role="tabpanel" aria-labelledby="parent-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="routine-tab-pane" role="tabpanel" aria-labelledby="routine-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="attend-tab-pane" role="tabpanel" aria-labelledby="attend-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="mark-tab-pane" role="tabpanel" aria-labelledby="mark-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="invoice-tab-pane" role="tabpanel" aria-labelledby="invoice-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="payment-tab-pane" role="tabpanel" aria-labelledby="payment-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="document-tab-pane" role="tabpanel" aria-labelledby="document-tab" tabindex="0">...</div>
{{--                                <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>--}}
                            </div>
                        </div>
                    </div>
{{--                    <div class="table-responsive">--}}
{{--                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>#</th>--}}
{{--                                <th>Name</th>--}}
{{--                                <th>Email</th>--}}
{{--                                <th>User Name</th>--}}
{{--                                <th>Subject</th>--}}
{{--                                <th>Phone</th>--}}
{{--                                <th>Desination</th>--}}
{{--                                <th>DOB</th>--}}
{{--                                <th>Gender</th>--}}
{{--                                <th>Religion</th>--}}
{{--                                <th>Joining Date</th>--}}
{{--                                <th>Photo</th>--}}
{{--                                <th>Education</th>--}}
{{--                                <th>certificates</th>--}}
{{--                                <th>address</th>--}}
{{--                                <th>Status</th>--}}
{{--                                <th>Action</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($teachers as $teacher)--}}
{{--                                <tr>--}}
{{--                                    <td>{{ $loop->iteration }}</td>--}}
{{--                                    <td>{{ $teacher->classes->class_name }}</td>--}}
{{--                                    <td>{{\App\Models\ClassMadrasha::find($teacher->class_id)->class_name}}</td>--}}
{{--                                    <td>{{ $teacher->name }}</td>--}}
{{--                                    <td>{{ $teacher->email }}</td>--}}
{{--                                    <td>{{ $teacher->user_name }}</td>--}}
{{--                                    <td>{{ $teacher->subject }}</td>--}}
{{--                                    <td>{{ $teacher->phone }}</td>--}}
{{--                                    <td>{{ $teacher->desination }}</td>--}}
{{--                                    <td>{{ $teacher->dob }}</td>--}}
{{--                                    <td>{{ $teacher->gender }}</td>--}}
{{--                                    <td>{{ $teacher->religion }}</td>--}}
{{--                                    <td>{{ $teacher->joining_date }}</td>--}}
{{--                                    <td>--}}
{{--                                        <img src="{{asset($teacher->photo) }}" style="height: 100px;width: 100px" alt="">--}}
{{--                                    </td>--}}
{{--                                    <td>{{ $teacher->password }}</td>--}}
{{--                                    <td>{{ $teacher->education }}</td>--}}
{{--                                    <td>{!! \Illuminate\Support\Str::words($teacher->address,3,'...') !!}</td>--}}
{{--                                    <td>{{ $teacher->status==0? 'unpublished':'published'}}</td>--}}
{{--                                    <td >--}}
{{--                                        <div class="d-flex">--}}
{{--                                            <a href="{{route('certificate.show',$teacher->id)}}" class="mx-1 btn btn-info btn-sm py-0 px-1"><i class="dripicons-graduation"></i></a>--}}
{{--                                            <a href="{{route('teacher.show',$teacher->slug)}}" class=" btn btn-primary btn-sm py-0 px-1"><i class="uil-eye"></i></a>--}}
{{--                                            <a href="{{ route('teacher.edit',$teacher->slug) }}" class="mx-1 btn btn-info btn-sm py-0 px-1"><i class="dripicons-document-edit"></i></a>--}}
{{--                                            <form action="{{ route('teacher.destroy',$teacher->slug) }}" method="post" style="display: inline-block"  onsubmit="return confirm('Are You sure that to delete this Class'); ">--}}
{{--                                                @csrf--}}
{{--                                                @method('delete')--}}
{{--                                                <button type="submit" class="btn btn-danger btn-sm py-0 px-1">--}}
{{--                                                    <i class="dripicons-trash"></i>--}}
{{--                                                </button>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}

{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

