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
        <div class="f-right">
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#raised-Modal">
                <i class="icofont icofont-plus"></i> Add Attendance
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
<div class="modal fade modal-flex" id="raised-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Code Explanation for Block Button</h5>
            </div>
            <!-- end of modal-header -->
            <div class="modal-body">
                <pre class="brush: html;">

                        /* Block Button For Primary Button */

                        &lt;button type="button" class="btn btn-primary btn-block waves-effect"&gt;Primary&lt;/button&gt;
                        /* Block Button For Success Button */

                        &lt;button type="button" class="btn btn-success btn-block waves-effect"&gt;Success&lt;/button&gt;
                      </pre>
            </div>
            <!-- end of modal-body -->
        </div>
        <!-- end of modal-content -->
    </div>
    <!-- end of modal-dialog -->
</div>
@endsection