@extends('layouts.loginApp')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <form method="post" action="/login">
                        @csrf
                        <div class="card card-login card-hidden">
                            <div class="card-header text-center" data-background-color="blue">
                                <h4 class="card-title">Login</h4>
                            </div>
                            <p class="category text-center">
                                Input your Username and Password
                            </p>
                            <div class="card-content">
                                <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Username</label>
                                        <input name="username" type="text" class="form-control">
                                        <span class="help-block">{{ ($errors->has('username')) ? "Insert valid Username" : "" }}</span>
                                    </div>
                                </div>
                                <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Password</label>
                                        <input name="password" type="password" class="form-control">
                                        <span class="help-block">{{ ($errors->has('password')) ? "Insert your password correctly" : "" }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-info btn-simple btn-wd btn-lg">Let's go</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection