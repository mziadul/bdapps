@extends('admin.layouts.master')

@section('extra-head-scripts')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<style>
    .form-pad{
        padding-top: 6px !important;
    }
    th, td {
        text-align: center !important;
        white-space: nowrap;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card p-4 mt-4">

                <h4 class="pb-2">Developer List</h4>
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
                    <table id="example" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Division</th>

                                <th>Has PC</th>
                                <th>Has Wifi</th>

                                <th class="w-100">Programming Exp</th>
                                <th class="w-100">Programming Rate</th>

                                <th>Android Exp</th>
                                <th>Android Rate</th>

                                <th>Time Allocation</th>
                                <th>Cost Bearing</th>

                                <th>Mail</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 0 @endphp
                            @foreach ($all_dev_user as $dev_user)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{ $dev_user->full_name }}</td>
                                <td>{{ $dev_user->email }}</td>
                                <td>{{ $dev_user->mobile_number }}</td>
                                <td>{{ $dev_user->date }}</td>
                                <td>{{ $dev_user->division }}</td>

                                <td>{{ $dev_user->has_pc }}</td>
                                <td>{{ $dev_user->has_wifi }}</td>

                                <td>{{ $dev_user->has_programming_experience }}</td>
                                <td>{{ $dev_user->programming_experience_rate }}</td>

                                <td>{{ $dev_user->has_android_experience }}</td>
                                <td>{{ $dev_user->android_experience_rate }}</td>

                                <td>{{ $dev_user->allocate_time }}</td>
                                <td>{{ $dev_user->bear_cost }}</td>

                                <td>
                                    @if ($dev_user->mail_status == 1)
                                        <span style="color:green">Delivered</span>
                                    @elseif ($dev_user->mail_status == -1)
                                        <span style="color:red">Failed</span>
                                    @else
                                        <span style="color:blue">Pending</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{route('admin.dev_user.detail', $dev_user->id)}}">
                                        <i class="fas fa-edit text-primary"></i>
                                    </a>
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

@section('extra-foot-scripts')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
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

    new DataTable('#example');

</script>
@endsection