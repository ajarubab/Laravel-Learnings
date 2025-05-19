<div>
    <h1>Student List</h1>
</div>
<div>
    <table border="2px">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Class</td>
            <td>Roll No</td>
        </tr>
        @foreach($StdList as $std)
        <tr>
            <td>{{$std->Id}}</td>
            <td>{{$std->Name}}</td>
            <td>{{$std->Class}}</td>
            <td>{{$std->RollNo}}</td>
        </tr>
        @endforeach
    </table>
</div>
