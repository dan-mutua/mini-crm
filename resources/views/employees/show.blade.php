@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Employee Details</h2>
                <hr>
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $employee->first_name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $employee->last_name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="company_id">Company:</label>
                    <input type="text" class="form-control" id="company_id" name="company_id" value="{{ $employee->company->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" readonly>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" readonly>
                </div>
            </div>
        </div>
        <a href="{{ route('employees.index') }}" class="btn btn-primary">Back to Employees</a>
    </div>
@endsection
