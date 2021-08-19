@extends('index')

@section('content-header')
Employees
@endsection

@section('content-breadcumb')
<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
    <li class="breadcrumb-item">
        <a href="/home">
            <i class="icofont icofont-home"></i>
        </a>
    </li>
    <li class="breadcrumb-item"><a href="#">Employees List</a>
    </li>
</ol>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <div class="f-right">
            <a href="/employees/add" class="btn btn-primary"> <!-- data-toggle="modal" data-target="#raised-Modal" data-backdrop="static" data-keyboard="false" -->
                <i class="icofont icofont-plus"></i> Add Employee
            </a>
        </div>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-sm-12 table-responsive">
                <table class="table table-hover" id="mytable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach($employees as $key=>$values)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $values->FirstName }}</td>
                            <td>{{ $values->LastName }}</td>
                            <td>{{ $values->Email }}</td>
                            <td>{{ $values->Phone }}</td>
                            <td>{{ $values->JobTitle }}</td>
                            <td class="d-flex">
                                <button class="btn btn-info edit-btn m-r-20" id="{{ $values->id }}"><i class="icofont icofont-edit-alt"></i></button>
                                <form action="{{ route('employee.delete', $values->id )}}" method="post" class="delete mt-2">
                                    @csrf
                                    <input type="hidden" name="method" value="DELETE">
                                    <button class="btn btn-danger delete-dept"><i class="icofont icofont-trash"></i></button>
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
<div class="modal fade modal-flex" id="raised-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Add Employee</h5>
            </div>
            <!-- end of modal-header -->
            <div class="modal-body">
                ...
            </div>
            <!-- end of modal-body -->
        </div>
        <!-- end of modal-content -->
    </div>
    <!-- end of modal-dialog -->
</div>
@endsection

