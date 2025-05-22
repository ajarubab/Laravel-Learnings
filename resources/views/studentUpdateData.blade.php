<div>
    <h1>Student Data Updation Page</h1>
</div>
<div>
    <form action="{{route('stdStore',[$data->Id])}}" method="post">
        @csrf
        <div class="std-form">
            <label for="name">Student Name : </label>
            <input type="text" name="name" value="{{$data->Name}}" placeholder="Enter name">
        </div><br>
        <div class="std-form">
            <label for="class">Student Class : </label>
            <input type="text" name="class" value="{{$data->Class}}" placeholder="Enter class">
        </div><br>
        <div class="std-form">
            <label for="section">Student Section : </label>
            <input type="text" name="section" value="{{$data->Section}}" placeholder="Enter section">
        </div><br>
        <div class="std-form">
            <label for="roll">Student Roll : </label>
            <input type="text" name="roll" value="{{$data->RollNo}}" placeholder="Enter Roll No">
        </div><br>
        <div class="std-form">
            <button type="submit">Submit</button>
        </div><br>
    </form>
</div>