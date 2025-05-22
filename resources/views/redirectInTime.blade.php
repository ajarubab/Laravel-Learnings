<!DOCTYPE html>
<html>

<head>
    <title>Redirecting...</title>
    <meta http-equiv="refresh" content="3;url=/stdForm" />
</head>

<body>
    <h2>{{ $message }}</h2>
    <div>
    </div>
    <div>
        <table border="2px">
            <tr>
                <td>Id</td>
                <td>Roll No</td>
                <td>Name</td>
                <td>Class</td>
                <td>Section</td>
            </tr>
            @foreach($data as $dt)
            <tr>
                <td>{{$dt->Id}}</td>
                <td>{{$dt->RollNo}}</td>
                <td>{{$dt->Name}}</td>
                <td>{{$dt->Class}}</td>
                <td>{{$dt->Section}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <h1>Redirecting to Registration form in 3 seconds...</h1>
</body>

</html>