<h2>{{ $assignment->title }}</h2>

@unless($assignment->submitted)
<button>Submit Assignment</button>
@endunless

@include('user', ['message'=>'This include the whole user blade view file if users blade file exists..'])
@includeif('users', ['message'=>'This include if users blade file exists.'])