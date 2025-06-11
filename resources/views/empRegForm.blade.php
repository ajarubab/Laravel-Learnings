<div>
    <h1>Employee Registration/Updation form</h1>
</div>
<div>
    <form action="{{route('emp.store',$emp->Id)}}" method="post"> 
        @csrf
        <div>
            <input type="hidden" name="id" value="{{ $emp->Id }}">
        </div>
        <div class="emp-form">
            <label for="empName">Employee Name : </label>
            <input type="text" name="empName" value="{{$emp->Name}}">
        </div><br>
        <div class="emp-form">
            <label for="empEmail">Employee Email : </label>
            <input type="text" name="empEmail" value="{{$emp->Email}}">
        </div><br>
        <div class="emp-form">
            <label for="empPhone">Employee Phone : </label>
            <input type="text" name="empPhone" value="{{$emp->Phone}}">
        </div><br>
        <div class="emp-form">
            <button type="submit">Submit</button>
        </div><br>
    </form>
</div>