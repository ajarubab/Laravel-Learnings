<!DOCTYPE html>
<html>

<head>
    <title>Student Data Page</title>
</head>

<body>
    <div>
        <table border="2px">
            <tr>
                <td>Id</td>
                <td>Roll No</td>
                <td>Name</td>
                <td>Class</td>
                <td>Section</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            @foreach($data as $dt)
            <tr>
                <td>{{$dt->Id}}</td>
                <td>{{$dt->RollNo}}</td>
                <td>{{$dt->Name}}</td>
                <td>{{$dt->Class}}</td>
                <td>{{$dt->Section}}</td>
                <td><a href="{{route('stdEdt',$dt->Id)}}">Edit</a></td>
                <td><a href="{{route('stdDlt',$dt->Id)}}">Delete</a></td>
            </tr>
            @endforeach
        </table><br><br>
        <span><a href="{{route('addStudent')}}">Add New Record </a></span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span><a href="{{route('EraseAll')}}">Delete all Records </a></span>
    </div>
</body>

</html>