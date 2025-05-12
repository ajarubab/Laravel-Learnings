<div>
    <h1>User Page</h1>
    <h2>Hello I am {{$meraNaam}}</h2>
    <h1>{{$message}}</h1>
</div>
<br>
<a href="/welcome">Welcome page</a><br><br>
<a href="{{URL('home')}}">Home View page</a><br><br>
<a href="{{URL::to('fcv')}}">first Custom View page</a><br><br>

<h2>Current Page URL : {{URL::current()}}</h2>
<h2>Previous Page URL : {{URL::previous()}}</h2>

<br>
<div>
    <x-notifications class="success" ntf="Code Compiled and Executed Successfully" />
    <x-notifications class="warning" ntf="ES-Lint Warning" />
    <x-notifications class="failure" ntf="Syntax Error" />
</div>