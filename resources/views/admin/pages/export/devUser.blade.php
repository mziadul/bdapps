<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date</th> 

        <th>Home Address</th> 
        <th>Current Address</th> 
        <th>Educational Background</th> 

        <th>Has PC</th> 
        <th>Has Wifi</th> 
        <th>Has Programming Experience</th> 
        <th>Detail of Programming Experience</th> 
        <th>Programming Experience Rate</th> 

        <th>Has Android Experience</th> 
        <th>Detail of Android Experience</th> 
        <th>Android Experience Rate</th> 
        <th>Time Allocate</th> 
        <th>Cost Bearing</th> 

        <th>User IP</th> 
        <th>User Agent</th> 
        <th>Mail Status</th> 
        <th>mail Response</th> 
    </tr>
    </thead>
    <tbody>
    @foreach($devUser as $data) 
        <tr>
            <td>{{ $data->full_name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone_number }}</td>
            <td>{{ $data->date }}</td>

            <td>{{ $data->home_address }}</td>
            <td>{{ $data->current_address }}</td>
            <td>{!! $data->educational_background !!}</td>

            <td>{{ $data->has_pc }}</td>
            <td>{{ $data->has_wifi }}</td>
            <td>{{ $data->has_programming_experience }}</td>
            <td>{!! $data->programming_experience !!}</td>
            <td>{{ $data->programming_experience_rate }}</td>

            <td>{{ $data->has_android_experience }}</td>
            <td>{!! $data->android_experience !!}</td>
            <td>{{ $data->android_experience_rate }}</td>
            <td>{{ $data->allocate_time }}</td>
            <td>{{ $data->bear_cost }}</td>

            <td>{{ $data->user_ip }}</td>
            <td>{{ $data->user_agent }}</td>
            <td>
                @if ($data->mail_status == 1)
                    Delivered
                @elseif ($data->mail_status == -1)
                    Failed
                @else
                    Pending
                @endif
            </td>
            <td>{{ $data->mail_response }}</td>
        </tr>
    @endforeach
    </tbody>
</table>