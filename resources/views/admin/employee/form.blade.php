@extends('layouts.adminApp')

@section('script')
    <script type="text/javascript">
        $().ready(function () {
            demo.initMaterialWizard();
            demo.initFormExtendedDatetimepickers();
        });
    </script>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            @if(isset($employee))
                <div class="row">
                    <form method="post" action="/employees/update/{{ $employee->id }}">
                        @csrf
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <i class="material-icons">perm_identity</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Edit Profile -
                                        <small class="category">Update employee information</small>
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Username</label>
                                                <input disabled="" name="username"
                                                       value="{{ $employee->user->username }}" type="text"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Register Number</label>
                                                <input required name="regnumber" value="{{ $employee->reg_number }}" type="text"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Name</label>
                                                <input required name="name" value="{{ $employee->name }}" type="text"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Adress</label>
                                                <input required name="address" value="{{ $employee->address }}" type="text"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Job</label>
                                                <select required name="job" class="selectpicker" data-style="btn btn-info btn-round" title="Single Select" data-size="7">
                                                    <option disabled>Choose Job</option>
                                                    <option {{ ($employee->job == '3D Designer') ? "selected" : "" }} value="3D Designer">3D Designer</option>
                                                    <option {{ ($employee->job == 'Backend Dev') ? "selected" : "" }} value="Backend Dev">Backend Dev</option>
                                                    <option {{ ($employee->job == 'Frontend Dev') ? "selected" : "" }} value="Frontend Dev">Frontend Dev</option>
                                                </select>
                                                <span class="material-input"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Work Since</label>
                                                <input required name="since" value="{{ $employee->since }}" type="text"
                                                       class="form-control datepicker">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            @else
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="blue" id="wizardProfile">
                            <form action="/employees/insert" method="post" enctype="multipart/form-data">
                            @csrf
                            <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        Adding New Employee
                                    </h3>
                                    <h5>This information will let us know more about this new employee.</h5>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li>
                                            <a href="#account" data-toggle="tab">Account</a>
                                        </li>
                                        <li>
                                            <a href="#job" data-toggle="tab">Job</a>
                                        </li>
                                        <li>
                                            <a href="#address" data-toggle="tab">Address</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="account">
                                        <div class="row">
                                            <h4 class="info-text"> Let's start with the account information</h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="/adminpage/img/default-avatar.png"
                                                             class="picture-src" id="wizardPicturePreview" title=""/>
                                                        <input name="photo" type="file" id="wizard-picture">
                                                    </div>
                                                    <h6>Choose Photo
                                                        <small>(required)</small>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Username
                                                            <small>(required)</small>
                                                        </label>
                                                        <input name="username" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Full Name
                                                            <small>(required)</small>
                                                        </label>
                                                        <input name="name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">lock</i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Password
                                                            <small>(6 chars minimal required)</small>
                                                        </label>
                                                        <input name="password" type="password" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">fingerprint</i>
                                                        </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Register Number
                                                            <small>(6 chars minimal required)</small>
                                                        </label>
                                                        <input name="regnumber" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="job">
                                        <h4 class="info-text"> What Job?</h4>
                                        <div class="row">
                                            <div class="col-lg-10 col-lg-offset-1">
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-radio">
                                                        <input type="radio" checked name="job" value="3D Designer">
                                                        <div class="icon">
                                                            <i class="fa fa-pencil"></i>
                                                        </div>
                                                        <h6>3D Design</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-radio">
                                                        <input type="radio" name="job" value="Backend Dev">
                                                        <div class="icon">
                                                            <i class="fa fa-terminal"></i>
                                                        </div>
                                                        <h6>Backend Dev</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-radio">
                                                        <input type="radio" name="job" value="Frontend Dev">
                                                        <div class="icon">
                                                            <i class="fa fa-laptop"></i>
                                                        </div>
                                                        <h6>Frontend Dev</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Where He/She is living? Since When He/She
                                                    work? </h4>
                                            </div>
                                            <div class="col-sm-3 col-sm-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Since</label>
                                                    <input name="since" type="text" class="form-control datepicker">
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">City</label>
                                                    <input name="city" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Full Street Address</label>
                                                    <input name="street" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-info btn-wd' name='next'
                                               value='Next'/>
                                        <input type='submit' class='btn btn-finish btn-fill btn-info btn-wd'
                                               name='finish' value='Finish'/>
                                    </div>
                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd'
                                               name='previous' value='Previous'/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- wizard container -->
                </div>
            @endif
        </div>
    </div>
@endsection