@extends('admin.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0">Dashboard</h1> -->
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    
    <div class="container">
        <h5>Day Wise Traffic</h5>
        <!-- Small boxes (Stat box) -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Date</th>
                    <th>Total Users</th>
                </tr>
            </thead>
            <tbody>
                @php $ind = $traffic_data->perPage() * ($traffic_data->currentPage() - 1) @endphp
                @foreach ($traffic_data as $data)
                <tr>
                    <td>{{ ++$ind }}</td>
                    <td>{{  $data->date }}</td>
                    <td>{{ $data->tot_user }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $traffic_data->links('pagination::bootstrap-4') }}

        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection