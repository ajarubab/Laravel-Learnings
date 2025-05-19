<div>
    <h1>User Page</h1>
</div>
<div>
    <table border="2px">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        @foreach($data as $dt)
        <tr>
            <td>{{$dt->Id}}</td>
            <td>{{$dt->Name}}</td>
            <td>{{$dt->Email}}</td>
            <td>{{$dt->Phone}}</td>
        </tr>
        @endforeach
    </table>
</div>
