@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <div class="card card-primary mt-3">
                <div class="card-header">
                <h3 class="card-title">Update Admin</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('admin.admin_user.update',  $admin->id )}}">
                    <div class="p-3">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{ $error }}
                            </div>
                            @endforeach
                        @endif

                        @if (session('message'))  
                            <div class="alert alert-{{session('classs')}} alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>

                    <input type="hidden" value="{{csrf_token()}}" name="_token" />
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ $admin->name }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ $admin->email }}" >
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="{{ $admin->phone }}">
                        </div>

                        <div class="form-group">
                            <label for="password">Password (optional)</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password (optional)</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Password Again">
                        </div>

                    </div>
                    <!-- /.card-body -->
                
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection