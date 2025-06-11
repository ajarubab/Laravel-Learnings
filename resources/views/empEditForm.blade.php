<h1>Update Employee Data Page</h1>
<div>
     <form action="{{route('updateEmp',[$empDtls->id])}}" method="post"> 
        @csrf
        <div class="emp-form">
            <input type="hidden" name="empId" value="{{$empDtls->Id}}">
        </div><br>
        <div class="emp-form">
            <label for="empName">Employee Name : </label>
            <input type="text" name="empName" value="{{$empDtls->Name}}">
        </div><br>
        <div class="emp-form">
            <label for="empEmail">Employee Email : </label>
            <input type="text" name="empEmail" value="{{$empDtls->Email}}">
        </div><br>
        <div class="emp-form">
            <label for="empPhone">Employee Phone : </label>
            <input type="text" name="empPhone" value="{{$empDtls->Phone}}">
        </div><br>
        <div class="emp-form">
            <button type="submit">Submit</button>
        </div><br>
    </form>
</div>