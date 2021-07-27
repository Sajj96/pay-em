@extends('index')

@section('content-header')
Department
@endsection

@section('content-breadcumb')
<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
    <li class="breadcrumb-item">
        <a href="/home">
            <i class="icofont icofont-home"></i>
        </a>
    </li>
    <li class="breadcrumb-item"><a href="#">Departments</a>
    </li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text">Department Form</h5>
            </div>
            <div class="card-block">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-control-label">Name</label>
                        <textarea class="form-control" name="dept-name" id="name" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="code" class="form-control-label">Code (optional)</label>
                        <input type="text" class="form-control" name="dept-code" id="code" placeholder="Enter code">
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
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Action</th>
                                    <th>Nickname</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Ducky</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>Ducky</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>Otto</td>
                                    <td>@twitter</td>
                                    <td>Ducky</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>Ducky</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>Ducky</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>Ducky</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>Ducky</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>Ducky</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection