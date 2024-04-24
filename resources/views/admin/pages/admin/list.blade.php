@extends('admin.layouts.master')

@section('extra-head-scripts')
<style>
    .form-pad{
        padding-top: 6px !important;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card p-4 mt-4">

                <h4 class="pb-2">Admin Users</h4>
                <div class="">
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
    
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Enable/Disable</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = $admins->perPage() * ($admins->currentPage() - 1) @endphp
                            @foreach ($admins as $admin)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->phone }}</td>
                                <td>
                                    @if( $admin->created_at )
                                        {{ $admin->created_at->format('Y-m-d') }}
                                    @endif    
                                </td>
                                <td>
                                    @if( $admin->status )
                                        <span style="color:green">Active</span>
                                    @else
                                        <span style="color:red">Inactive</span>
                                    @endif
                                </td>
                                <td class="text-center form-pad">
                                    <form method="post" action="{{route('admin.admin_user.disable')}}">
                                        <input type="hidden" value="{{csrf_token()}}" name="_token" />
                                        <input type="hidden" value="{{$admin->id}}" name="id" />
                                        <button class="btn @if($admin->status) btn-warning @else btn-success @endif" type='submit' value='submit'>
                                            @if ( $admin->status )
                                                click for disable
                                            @else
                                                click for enable
                                            @endif
                                        </button>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <a href="{{route('admin.admin_user.edit', $admin->id)}}">
                                        <i class="fas fa-edit text-primary"></i>
                                    </a>
                                </td>
                                <td class="text-center form-pad">
                                    <form method="post" action="{{route('admin.admin_user.delete', $admin->id)}}">
                                        <input type="hidden" value="{{csrf_token()}}" name="_token" />
                                        <input name="_method" type="hidden" value="DELETE">
                                        <!-- <input type="hidden" value="{{$admin->id}}" name="id" /> -->
                                        <button class="btn" type='submit' value='submit'                onclick="ConfirmDelete()">
                                            <i class="fas fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>   
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- {{ $admins->links() }} -->
                <!-- {{ $admins->appends(Request::except('page'))->links() }} -->
                {{ $admins->links('pagination::bootstrap-4') }}
            </div>

        </div>
    </div>
</div>

@endsection

@section('extra-foot-scripts')
<script type="text/javascript">
    // function ConfirmDelete() {
    //     if(!confirm("Are You Sure to delete this user?"))
    //     event.preventDefault();
    // }

    function ConfirmDelete() {
        let text = "Are you sure to delete this user? \nPlease click OK to delete.";
        if (confirm(text) == false) {
            event.preventDefault();
        } 
    }

</script>
@endsection