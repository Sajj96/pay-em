@extends('index')

@section('content-header')
Positions
@endsection

@section('content-breadcumb')
<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
    <li class="breadcrumb-item">
        <a href="/home">
            <i class="icofont icofont-home"></i>
        </a>
    </li>
    <li class="breadcrumb-item"><a href="#">Positions</a>
    </li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text">Position Form</h5>
            </div>
            <div class="card-block">
                <form id="positionForm" action="{{ route('position.add')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="positionName" class="form-control-label">Name</label>
                        <textarea class="form-control" name="name" id="positionName" rows="4"></textarea>
                    </div>
                    <button type="reset" class="btn btn-warning waves-effect waves-light m-r-20">Cancel</button>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Save</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text">Departments List</h5>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-sm-12 table-responsive">
                        <table class="table table-hover" id="mytable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($positions as $key=>$values)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $values->name }}</td>
                                    <td class="d-flex">
                                        <button class="btn btn-info edit-btn m-r-20" id="{{ $values->id }}"><i class="icofont icofont-edit-alt"></i></button>
                                        <form action="{{ route('department.delete', $values->id )}}" method="post" class="delete mt-2">
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
    </div>
</div>
<div class="modal fade modal-flex" id="raised-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Edit Position Details</h5>
            </div>
            <!-- end of modal-header -->
            <div class="modal-body">
                <form action="{{ route('position.edit')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="position_name" class="form-control-label">Name</label>
                        <textarea class="form-control" name="name" id="position_name" rows="4"></textarea>
                    </div>
                    <button type="reset" data-dismiss="modal" class="btn btn-warning waves-effect waves-light m-r-20">Cancel</button>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Update</button>
                </form>
            </div>
            <!-- end of modal-body -->
        </div>
        <!-- end of modal-content -->
    </div>
    <!-- end of modal-dialog -->
</div>
@endsection

@section('page-script')
<script type="text/javascript" src="{{ asset('assets/pages/department.js')}}"></script>
@endsection