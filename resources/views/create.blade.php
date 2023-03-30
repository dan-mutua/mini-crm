@extends('layouts.app')

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">New Company</h3>
                            </div>
                            <div class="container-fluid">

                                <div id="form-messages">
                                    @include('admin.partials.alerts.flash')
                                    @include('admin.partials.errors.error')
                                </div>

                            </div>
                            {{--                            <div class="col-4 text-right">--}}
                            {{--                                <a href="{{ route('providers.index') }}" class="btn btn-sm btn-primary">Back to List</a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('companies.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">Company Information</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Company Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Company Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Company Website</label>
                                    <input type="url" name="website" class="form-control" id="exampleInputEmail1" placeholder="Enter website">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
