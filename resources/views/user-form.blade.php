<div>
    <h2>User- form</h2>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
    <form action="/form-data" method="post">
        @csrf
        <div class="form-wrapper">
            <label for="username">Username : </label>
            <input type="text" placeholder="Enter username" name="username" value="{{old('username')}}">
        </div><br>
        <div class="form-wrapper">
            <label for="email">User Email : </label>
            <input type="email" placeholder="Enter Email Id" name="email" value="{{old('email')}}">
        </div><br>
        <div class="form-wrapper">
            <label for="phone">Phone : </label>
            <input type="number" placeholder="Enter Phone Number" name="phone" value="{{old('phone')}}">
        </div><br>
        <div class="form-wrapper">
            <label for="password">Password : </label>
            <input type="password" placeholder="Enter password" name="password" value="{{old('password')}}">
        </div><br>
        <h3>User Skills : </h3>
        <div class="form-wrapper">
            <label for="php">PHP </label>
            <input type="checkbox" name="skill[]" id="php" value='PHP' {{ (is_array(old('skill')) && in_array('PHP', old('skill'))) ? 'checked' : '' }}>
        </div>
        <div class="form-wrapper">
            <input type="checkbox" name="skill[]" id="laravel" value='Laravel' {{ (is_array(old('skill')) && in_array('Laravel', old('skill'))) ? 'checked' : '' }}>
            <label for="laravel">Laravel </label>
        </div>
        <div class="form-wrapper">
            <label for="vue">Vue </label>
            <input type="checkbox" name="skill[]" id="vue" value='Vue' {{ (is_array(old('skill')) && in_array('Vue', old('skill'))) ? 'checked' : '' }}>
        </div>
        <div>
        <input type="checkbox" name="skill[]" id="react" value='React' {{ (is_array(old('skill')) 
            && in_array('React', old('skill'))) ? 'checked' : '' }} >
        <label for="react">React </label>
        </div>
<h3>Gender : </h3>
<div class="form-wrapper">
    <label for="male">Male </label>
    <input type="radio" name="gender" id="male" value='Male' {{ old('gender') == 'Male' ? 'checked' : '' }}>
    <label for="female">Female </label>
    <input type="radio" name="gender" id="female" value='Female' {{ old('gender') == 'Female' ? 'checked' : '' }}>
</div><br>
<div>
    <h3>City : </h3>
    <select name="city" id="city"  value="{{old('city')}}">
        <option value="Delhi" {{ old('city') == 'Delhi' ? 'selected' : '' }}>Delhi</option>
        <option value="Mumbai" {{ old('city') == 'Mumbai' ? 'selected' : '' }}>Mumbai</option>
        <option value="Kolkata" {{ old('city') == 'Kolkata' ? 'selected' : '' }}>Kolkata</option>
        <option value="Chennai" {{ old('city') == 'Chennai' ? 'selected' : '' }}>Chennai</option>
    </select>
</div><br>
<div class="form-wrapper">
    <button type="submit">Login</button>
</div><br>
</form>
</div>