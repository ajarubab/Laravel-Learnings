<div>
    <h1>Student Registration Form</h1>
</div>
<div>
    <form action="{{route('stdStore')}}" method="post">
        @csrf
        <div class="std-form">
            <label for="name">Student Name : </label>
            <input type="text" name="name" placeholder="Enter name">
        </div><br>
        <div class="std-form">
            <label for="class">Student Class : </label>
            <input type="text" name="class" placeholder="Enter class">
        </div><br>
        <div class="std-form">
            <label for="section">Student Section : </label>
            <input type="text" name="section" placeholder="Enter section">
        </div><br>
        <div class="std-form">
            <label for="roll">Student Roll : </label>
            <input type="text" name="roll" placeholder="Enter Roll No">
        </div><br>
        <div class="std-form">
            <button type="submit">Submit</button>
        </div><br>
    </form>
</div>