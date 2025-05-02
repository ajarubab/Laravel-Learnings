<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>

<body>
    <div>
        <h2>User- form</h2>
    </div>
    <div>
        <form action="/form-data" method="post">
            @csrf
            <div class="form-wrapper">
                <label for="username">Username : </label>
                <input type="text" placeholder="Enter username" name="username" value="{{old('username')}}">
                <span style="color: red;">@error ('username') {{$message}}@enderror</span>
            </div><br>
            <div class="form-wrapper">
                <label for="email">User Email : </label>
                <input type="email" placeholder="Enter Email Id" name="email" value="{{old('email')}}">
                <span style="color: red;">@error ('email') {{$message}}@enderror</span>

            </div><br>
            <div class="form-wrapper">
                <label for="phone">Phone : </label>
                <input type="text" placeholder="Enter Phone Number" name="phone" value="{{old('phone')}}">
                <span style="color: red;">@error ('phone') {{$message}}@enderror</span>
            </div><br>
            <div class="form-wrapper">
            <label for="create_password">Create Password : </label>
            <input id="createPass" type="password" placeholder="Create Password" name="create_password">
            <span id="createPassError" style="color:red">@error('create_password'){{$message}}@enderror</span><br>
            </div><br>
            <div class="form-wrapper">
            <label for="confirm_password">Confirm Password : </label>
            <input id="confirmPass" type="password" placeholder="Confirm Password" name="confirm_password">
            <span id="confirmPassError" style="color:red">@error('confirm_password'){{$message}}@enderror</span><br>
            </div><br>
            <h3>User Skills : </h3>
            <div class="form-wrapper">
                <label for="php">PHP </label>
                <input type="checkbox" name="skill[]" id="php" value='PHP' {{ (is_array(old('skill')) 
                && in_array('PHP', old('skill'))) ? 'checked' : '' }}>
                <label for="laravel">Laravel </label>
                <input type="checkbox" name="skill[]" id="laravel" value='Laravel' {{ (is_array(old('skill')) 
                && in_array('Laravel', old('skill'))) ? 'checked' : '' }}>
                <label for="vue">Vue </label>
                <input type="checkbox" name="skill[]" id="vue" value='Vue' {{ (is_array(old('skill')) 
                && in_array('Vue', old('skill'))) ? 'checked' : '' }}>
                <label for="react">React </label>
                <input type="checkbox" name="skill[]" id="react" value='React' {{ (is_array(old('skill')) 
            && in_array('React', old('skill'))) ? 'checked' : '' }}>
                <span style="color: red;">@error ('skill') {{$message}}@enderror</span>
            </div>
            <h3>Gender : </h3>
            <div class="form-wrapper">
                <label for="male">Male </label>
                <input type="radio" name="gender" id="male" value='Male' {{ old('gender') == 'Male' ? 'checked' : '' }}>
                <label for="female">Female </label>
                <input type="radio" name="gender" id="female" value='Female' {{ old('gender') == 'Female' ? 'checked' : '' }}>
                <span style="color: red;">@error ('gender') {{$message}}@enderror</span>
            </div><br>
            <div class="form-wrapper">
                <label for="dob">Date of Birth :</label>
                <input type="text" name="dob" id="jquery-datepicker" placeholder="DD-MM-YYYY" value="{{old('dob')}}">
                <span style="color: red;">@error ('dob') {{$message}}@enderror</span>
            </div><br>
            <div>
                <label for="age">Age </label>
                <input type="range" name="age" id="age" min="18" max="65" value="{{old('age')}}"
                    oninput="updateAgeValue(this.value)">
                <span id="ageValue">{{ old('age', 42) }}</span>
                <span style="color:red">@error('age'){{$message}}@enderror</span>
            </div>

            <div>
                <h3>City : </h3>
                <select name="city" id="city" value="{{old('city')}}">
                    <option value="">Select City</option>
                    <option value="Delhi" {{ old('city') == 'Delhi' ? 'selected' : '' }}>Delhi</option>
                    <option value="Mumbai" {{ old('city') == 'Mumbai' ? 'selected' : '' }}>Mumbai</option>
                    <option value="Kolkata" {{ old('city') == 'Kolkata' ? 'selected' : '' }}>Kolkata</option>
                    <option value="Chennai" {{ old('city') == 'Chennai' ? 'selected' : '' }}>Chennai</option>
                </select>
                <span style="color: red;">@error ('city') {{$message}}@enderror</span>
            </div><br>
            <div class="form-wrapper">
                <button type="submit">Login</button>
            </div><br>
        </form>
    </div>
</body>

</html>

<script>
    // script to update the slider value for Age
    function updateAgeValue(value) {
        document.getElementById('ageValue').textContent = value;
    }

    // Ensure the displayed value is correct when the page loads
    document.addEventListener('DOMContentLoaded', function() {
        var ageRange = document.getElementById('ageRange');
        updateAgeValue(ageRange.value);
    });

    // Update the value when the slider is changed (to ensure proper binding)
    document.getElementById('ageRange').addEventListener('input', function() {
        updateAgeValue(this.value);
    });
</script>
<!-- scripts to use  jQuery UI Datepicker -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $("#jquery-datepicker").datepicker({
        dateFormat: "dd-mm-yy",
        changeMonth: true,
        changeYear: true,
        yearRange: "1900:+0",
        maxDate: 0
    });
</script>