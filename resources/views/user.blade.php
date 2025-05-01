<div>
    <h1>User Page</h1>
    <h2>Hello I am {{$meraNaam}}</h2>
    <h1>{{$message}}</h1>
</div>
<br>
<div>
    <x-notifications class="success" ntf="Code Compiled and Executed Successfully"/>
    <x-notifications class="warning" ntf="ES-Lint Warning"/>
    <x-notifications class="failure" ntf="Syntax Error"/>
</div>