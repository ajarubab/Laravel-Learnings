<div>
    <h1>First Custom View page</h1><br><br>
    <a href="/welcome">Welcome page</a><br><br>
    <a href="/home">Home page</a><br>
</div>
<h2>Current Page URL without arguments method 1 : {{URL::current()}}</h2>
<h2>Previous Page URL without arguments method 1 : {{URL::previous()}}</h2>
<br>
<div>
    <x-notifications ntf="Amount credited Sucessfully" class="success" />
    <x-notifications ntf="transaction Failed" class="failure" />
    <x-notifications ntf="Enter Correct Password, Last Chance" class="warning" />
</div>