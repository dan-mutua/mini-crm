@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Company</h4>
                            <p><a href="{{ route('employees.index') }}">View Employees</a></p>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ url('/add-company-route') }}" class="btn btn-sm btn-primary">Add company</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{--                    @include('alerts.success')--}}

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Website</th>
                            </thead>
                            <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>{{ $company->name }}</td>

                                    <td>
                                        <a href="mailto:{{ $company->email }}">{{ $company->email }}</a>
                                    </td>
                                    <td>{{ $company->website }}</td>


                                    <td class="text-right">
                                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Edit Provider">
                                            {{--                                            <i class="tim-icons icon-pencil"></i>--}}
                                            <p>update</p>
                                        </a>
                                        <form action="{{ route('companies.destroy', $company->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Delete Provider" onclick="confirm('Are you sure you want to delete this merchant?') ? this.parentElement.submit() : ''">
                                                {{--                                                <i class="tim-icons icon-simple-remove"></i>--}}
                                                <p>delete</p>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
@endsection
