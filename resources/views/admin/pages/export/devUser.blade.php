<table>
    <thead>
    <tr>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($devUser as $data) 
        <tr>
            <td>{{ $data->full_name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>