<div>
    <h1>Home page</h1><br><br>
    <h2>Current Page URL without arguments method 1 : {{URL::current()}}</h2>
    <h2>Current Page URL without arguments method 2 : {{url()->current()}}</h2>
    <h2>Current Page URL with arguments method 1 : {{URL::full()}}</h2>
    <h2>Current Page URL with arguments method 2 : {{url()->full()}}</h2>
<br><br>
    <h2>Previous Page URL without arguments method 1 : {{URL::previous()}}</h2>
    <h2>Previous Page URL without arguments method 2 : {{url()->previous()}}</h2>
    <h2>Previous Page URL with arguments method 1 : {{URL::previous()}}</h2>
    <h2>Previous Page URL with arguments method 2 : {{url()->previous()}}</h2>
    <br>
    <a href="/welcome">Welcome page</a><br><br>
    <a href="/fcv">first Custom View page</a><br>
</div>
<br>
<div>
<x-notifications ntf="Signup succsessfull" class="success" />
<x-notifications ntf="Login succsessfull" class="success" />
<x-notifications ntf="Only one Login attempt remaining." class="warning" />
<x-notifications ntf="Login Failed" class="failure" />
</div>