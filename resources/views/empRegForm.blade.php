<div>
    <h1>Employee Registration form</h1>
</div>
<div>
    <form action="\empDetails" method="post"> 
        @csrf
        <div class="emp-form">
            <label for="empName">Employee Name : </label>
            <input type="text" name="empName" placeholder="Enter name">
        </div><br>
        <div class="emp-form">
            <label for="empEmail">Employee Email : </label>
            <input type="text" name="empEmail" placeholder="Enter Email Id">
        </div><br>
        <div class="emp-form">
            <label for="empPhone">Employee Phone : </label>
            <input type="text" name="empPhone" placeholder="Enter Phone Number">
        </div><br>
        <div class="emp-form">
            <button type="submit">Submit</button>
        </div><br>
    </form>
</div>