<h2>{{ $assignment->title }}</h2>

@unless($assignment->submitted)
    <button>Submit Assignment</button>
@endunless
