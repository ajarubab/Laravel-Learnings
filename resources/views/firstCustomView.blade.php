<div>
    <h1>First Custom View page</h1><br><br>
    <a href="/welcome">Welcome page</a><br><br>
    <a href="{{URL('user')}}">User View page</a><br>
    <a href="{{URL::to('home')}}">Home page</a><br><br>
</div>
<h2>Current Page URL  : {{URL::current()}}</h2>
<h2>Previous Page URL : {{URL::previous()}}</h2>
<br>
<div>
    <x-notifications ntf="Amount credited Sucessfully" class="success" />
    <x-notifications ntf="transaction Failed" class="failure" />
    <x-notifications ntf="Enter Correct Password, Last Chance" class="warning" />
</div>