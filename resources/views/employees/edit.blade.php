@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Employee</h2>
        <hr>
        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $employee->first_name }}" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $employee->last_name }}" required>
            </div>
            <div class="form-group">
                <label for="company_id">Company:</label>
                <select class="form-control" id="company_id" name="company_id" required>
                    @foreach ($companies as $id => $name)
                        <option value="{{ $id }}" {{ $employee->company_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('employees.index') }}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
