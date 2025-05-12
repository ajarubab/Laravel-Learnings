<div>
    <h1>Welcome page</h1><br><br>
    <a href="/home">Home page</a><br><br>
    <a href="{{URL('user')}}">User View page</a><br><br>
    <a href="{{URL::to('fcv')}}">first Custom View page</a><br><br>
</div>
<br>
<h2>Current Page URL : {{URL::current()}}</h2>
<h2>Previous Page URL : {{URL::previous()}}</h2>
<br>
<div>
    <x-notifications ntf="Reached Home within time" class="success" />
    <x-notifications ntf="Failed to reach home on time." class="failure" />
    <x-notifications ntf="Last 30 seconds remaining to reach home." class="warning" />
</div>