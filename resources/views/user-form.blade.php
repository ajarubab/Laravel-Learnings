<div>

    <h2>User- form</h2>

</div>

<div>
    <form action="/form-data" method="post">
        @csrf
        <div class="form-wrapper">
            <label for="username">Username : </label>
            <input type="text" placeholder="Enter username" name="username">
        </div><br>
        <div class="form-wrapper">
            <label for="email">User Email : </label>
            <input type="email" placeholder="Enter Email Id" name="email">
        </div><br>
        <div class="form-wrapper">
            <label for="phone">Phone : </label>
            <input type="number" placeholder="Enter Phone Number" name="phone">
        </div><br>
        <div class="form-wrapper">
            <label for="password">Password : </label>
            <input type="password" placeholder="Enter password" name="password">
        </div><br>
        <h3>User Skills : </h3>
        <div class="form-wrapper">
            <label for="php">PHP </label>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
        </div>
        <div class="form-wrapper">
            <input type="checkbox" name="skill[]" value="Laravel" id="laravel">
            <label for="laravel">Laravel </label>
        </div>
        <div class="form-wrapper">
            <label for="vue">Vue </label>
            <input type="checkbox" name="skill[]" value="Vue" id="vue">
        </div>
        <div>
        <input type="checkbox" name="skill[]" value="React" id="react">
        <label for="react">React </label>
        </div>
<h3>Gender : </h3>
<div class="form-wrapper">
    <label for="male">Male </label>
    <input type="radio" name="gender" value="Male" id="male">
    <label for="female">Female </label>
    <input type="radio" name="gender" value="Female" id="female">
</div><br>
<div>
    <h3>City : </h3>
    <select name="city" id="city">
        <option value="Delhi">Delhi</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Kolkata">Kolkata</option>
        <option value="Chennai">Chennai</option>
    </select>
</div><br>
<div class="form-wrapper">
    <button type="submit">Login</button>
</div><br>
</form>
</div>