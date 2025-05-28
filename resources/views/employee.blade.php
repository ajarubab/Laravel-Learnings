<div>
    <h1>Employee Page</h1>
    <table border="2px solid black">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Delete</td>
        </tr>
        @foreach ($empData as $dt)
        <tr>
            <td>{{$dt->Id}}</td>
            <td>{{$dt->Name}}</td>
            <td>{{$dt->Email}}</td>
            <td>{{$dt->Phone}}</td>
            <td><a href="{{route('delEmp',$dt->Id)}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>