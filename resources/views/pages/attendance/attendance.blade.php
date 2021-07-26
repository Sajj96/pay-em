@extends('index')

@section('content-header')
Attendance
@endsection

@section('content-breadcumb')
<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
    <li class="breadcrumb-item">
        <a href="/home">
            <i class="icofont icofont-home"></i>
        </a>
    </li>
    <li class="breadcrumb-item"><a href="#">Attendance List</a>
    </li>
</ol>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-header-text">Hover Effects on Row</h5>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-sm-12 table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
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
@endsection