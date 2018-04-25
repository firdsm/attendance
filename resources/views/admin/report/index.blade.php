@extends('layouts.adminApp')

@section('script')
    <script>
        $(document).ready(function () {
            console.log('Ready');
            $('#reportDate').change(function () {
                console.log('Ganti');
                var report = $(this).val();
                window.location.replace('/report/' + report);
            });
        });
    </script>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="blue">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Attendance Data</h4>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Job Position</th>
                                        <th>Workhours</th>
                                        <th>Workdays</th>
                                        <th>Absence</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($attendances))
                                        @foreach($attendances as $attendance)
                                            <tr>
                                                <td>{{ $attendance->employee->reg_number }}</td>
                                                <td>{{ $attendance->employee->name }}</td>
                                                <td>{{ $attendance->employee->job }}</td>
                                                <td>{{ $attendance->workhours_total." Minutes" }}</td>
                                                <td>{{ $attendance->workdays_total." Days" }}</td>
                                                <td>{{ $attendance->absence_total." Days" }}</td>
                                                <th class="text-right">
                                                    <a href="/report/detail/{{ $attendance->id }}" type="button"
                                                       rel="tooltip" title="Delete Employee"
                                                       class="btn btn-danger btn-simple">
                                                        <i class="material-icons">close</i>
                                                    </a>
                                                </th>
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

@section('loadedTab')
    <div class="collapse navbar-collapse">
        <form class="navbar-form navbar-right" role="search">
            <div class="form-group form-search is-empty">
                <select id="reportDate" class="selectpicker" data-style="btn btn-info btn-round" title="Single Select"
                        data-size="7">
                    <option disabled selected>Choose Date</option>
                    @if(isset($dates))
                        @foreach($dates as $date)
                            <option value="{{ $date->report_date }}">{{ $date->report_date }}</option>
                        @endforeach
                    @endif
                </select>
                <span class="material-input"></span>
            </div>
        </form>
    </div>
@endsection