<div>
    <h1>Welcome page</h1><br><br>
    <a href="/home">Home page</a><br><br>
    <a href="/fcv">first Custom View page</a><br>
</div>
<h2>Current Page URL without arguments method 1 : {{URL::current()}}</h2>
<h2>Previous Page URL without arguments method 1 : {{URL::previous()}}</h2>
<br>
<div>
    <x-notifications ntf="Reached Home within time" class="success" />
    <x-notifications ntf="Failed to reach home on time." class="failure" />
    <x-notifications ntf="Last 30 seconds remaining to reach home." class="warning" />
</div>