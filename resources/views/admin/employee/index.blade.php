@extends('layouts.adminApp')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="blue">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Employee Data</h4>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Register Number</th>
                                        <th>Name</th>
                                        <th>Job Position</th>
                                        <th>Since</th>
                                        <th>Address</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($employees))
                                        @foreach($employees as $employee)
                                            <tr>
                                                <td>{{ $employee->reg_number }}</td>
                                                <td>{{ $employee->name }}</td>
                                                <td>{{ $employee->job }}</td>
                                                <td>{{ $employee->since }}</td>
                                                <td>{{ $employee->address }}</td>
                                                <td class="td-actions text-right">
                                                    <a href="/employees/update/{{ $employee->id }}" type="button"
                                                       rel="tooltip" title="Update Employee Information"
                                                       class="btn btn-success btn-simple">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a href="/employees/delete/{{ $employee->id }}" type="button"
                                                       rel="tooltip" title="Delete Employee"
                                                       class="btn btn-danger btn-simple">
                                                        <i class="material-icons">close</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('tab')
    <div class="collapse navbar-collapse">
        <form class="navbar-form navbar-right" role="search">
            <a href="/employees/insert" title="Add Employee" class="btn btn-info btn-round btn-fab btn-fab-mini">
                <i class="material-icons">people</i>
            </a>
        </form>
    </div>
@endsection