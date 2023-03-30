@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employees</h1>
        <p>
            <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
        </p>
        @if (count($employees))
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->first_name }}</td>
                            <td>{{ $employee->last_name }}</td>
                            <td>{{ optional($employee->company)->name }}</td>

                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>
                                <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-secondary">Edit</a>
                                <form method="POST" action="{{ route('employees.destroy', $employee->id) }}" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $employees->links() }}
        @else
            <p>No employees found.</p>
        @endif
    </div>
@endsection
