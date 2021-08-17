@extends('index')

@section('page-styles')
<!--Date Picker Material Icon Css-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Date Picker css -->
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" />
<!-- Bootstrap Date-Picker css -->
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" />

@endsection

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
    <li class="breadcrumb-item"><a href="#">Add Employee Details</a>
    </li>
</ol>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <div class="f-right">
            <a href="/employees" class="btn btn-primary">
                <i class="icofont icofont-list"></i> Employees List
            </a>
        </div>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-sm-12">
            <form action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first_name" class="form-control-label">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="middle_name" class="form-control-label">Middle Name (optional)</label>
                                <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Enter middle name" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="last_name" class="form-control-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last name" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email" class="form-control-label">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone" class="form-control-label">Phone Number</label>
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter phone number" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone" class="form-control-label">Gender</label>
                                <div class="form-check">
                                    <label class="custom-control custom-radio">
                                        <input id="radio1" name="gender" value="male" type="radio" class="custom-control-input radio-inline">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Male</span>
                                    </label> 
                                    <label class="custom-control custom-radio">
                                        <input id="radio1" name="gender" value="female" type="radio" class="custom-control-input radio-inline">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Female</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="address" class="form-control-label">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3" placeholder="Type your address here"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="city" class="form-control-label">City</label>
                                <select name="city" id="city" class="form-control">
                                    <option value="">Please select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="country" class="form-control-label">Nationality</label>
                                <select name="country" id="country" class="form-control">
                                    <option value="">Please select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="marital_status" class="form-control-label">Marital Status</label>
                                <select name="marital_status" id="marital_status" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">Divorced</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="country" class="form-control-label">Date of Birth</label>
                                <input type="text" id="date" class="form-control floating-label" name="dob" placeholder="Enter Date">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="country" class="form-control-label">Department</label>
                                <select name="country" id="country" class="form-control">
                                    <option value="">Please select</option>
                                    @foreach($department as $key => $value)
                                    <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="country" class="form-control-label">Job Title</label>
                                <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Enter job title" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="country" class="form-control-label">Basic Salary</label>
                                <input type="number" class="form-control" name="salary" id="salary" placeholder="Enter salary" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="payfrequency" class="form-control-label">Payment Frequency</label>
                                <select name="payfrequency" id="payfrequency" class="form-control">
                                    <option value="">Please select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="paymethod" class="form-control-label">Payment Method</label>
                                <select name="paymethod" id="paymethod" class="form-control">
                                    <option value="">Please select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="employment_type" class="form-control-label">Employment Type</label>
                                <select name="employment_type" id="employment_type" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="full_time">Full Time</option>
                                    <option value="part_time">Part Time</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="joindate" class="form-control-label">Join Date</label>
                                <input type="text" name="joindate" id="joindate" class="form-control floating-label" placeholder="Join date">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="enddate" class="form-control-label">End Date</label>
                                <input type="text" name="enddate" id="enddate" class="form-control floating-label" placeholder="End date">
                            </div>
                        </div>
                        <div class="col-md-4 text-right"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button type="reset" data-dismiss="modal" class="btn btn-warning waves-effect waves-light m-r-20">Cancel</button>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-script')
<!-- Date picker.js -->
<script src="{{ asset('assets/plugins/datepicker/js/moment-with-locales.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

<!-- Select 2 js -->
<script src="{{ asset('assets/plugins/select2/dist/js/select2.full.min.js')}}"></script>
<!-- Bootstrap Datepicker js -->
<script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#date').bootstrapMaterialDatePicker({
            time: false,
            clearButton: true
        });
        $('#joindate').bootstrapMaterialDatePicker({
            time: false,
            clearButton: true
        });
        $('#enddate').bootstrapMaterialDatePicker({
            time: false,
            clearButton: true
        });
    });
</script>
@endsection
