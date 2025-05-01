<div>

    <h1>User Page</h1>
    <h2>Hello I am {{$meraNaam}}</h2>
</div>

<h1><?php echo "My Name is $meraNaam" ?></h1>
<h1><?php echo 'My Name is using php tag under h1 tag : ' . $meraNaam ?></h1>

<h2>The Person on index 2 into the restUsers array is {{$restUsers[2]}}</h2>
<h2><?php echo "The person on index 1  in the restUsers array is : " . $restUsers[1] ?></h2>
<div>
    <h2 style="color: red;"> Use of double curly braces</h2>
    <h2>The sum of 12 and 13 is {{12+13}}</h2>
    <h2>The difference of 22 and 13 is {{22-13}}</h2>
    <h2>The multiplication resilt of 22 and 13 is {{22*13}}</h2>
    <h2>The Division resilt of 221 / 13 is {{221/13}}</h2>
    <h2>5 raised to the power 3 is {{5**3}}</h2>
</div>
<div>
    <h2 style="color: red;"> Use of if-elseif-else Statement</h2>
    @php
        $myAge = 18;
    @endphp

    @if($myAge < 18)
    <h2>You are minor.</h2>
    @elseif($myAge == 18)
    <h2>Issue your vote id card.</h2>
    @else
    <h2>You can vote.</h2>
    @endif

    <h2 style="color: red;"> Use of Isset() Statement</h2>
    @isset($meraNaam)
        <h1>Isset True : The name is {{ $meraNaam }}</h1>
    @endisset

    <h2 style="color: red;"> Use of empty() Statement</h2>
    @php $noWord = ''; @endphp
    @empty($noWord)
    <h2>No Word or Charcter available.</h2>
    @endempty

    <h2 style="color: red;"> Use of Switch-case-break-default Statement</h2>
    @php $role = 'editor'; @endphp
    @switch($role)
        @case('admin')
            <h2>Admin Panel</h2>
        @break

        @case('editor')
            <h2>Editor Dashboard</h2>
        @break

        @default
            <h2>General Access</h2>
    @endswitch

    <h2 style="color: red;"> Use of for() loop</h2>
    @for($i = 2; $i <= 20; $i+=2)
    <span style="margin-right: 15px; font-size: 24px; font-weight: bold;">{{ $i }}</span>
    @endfor
    
    <br><h2 style="color: red;"> Use of while() loop</h2>
    @php $i = 1; @endphp
    @while($i <= 10)
        <span style="margin-right: 15px; font-size: 24px; font-weight: bold;">{{ $i * 5 }}</span>
        @php $i++; @endphp
    @endwhile
    
    <h2 style="color: red;"> Use of foreach() loop</h2>
    <h2>The list of VIPs are : </h2>
    @foreach($restUsers as $vip)
        <span style="margin-right: 15px; font-size: 24px; font-weight: bold;">{{ $vip }}</span>
    @endforeach


    <h2 style="color: red;"> Use of forelse() loop</h2>
    @php
        $comments = [
            (object)['user_name' => 'Alice', 'body' => 'Great post!'],
            (object)['user_name' => 'Bob', 'body' => 'Nice tutorial.']
        ];
    @endphp
    @forelse($comments as $comment)
        <div style="margin-bottom: 10px;">
            <h2>{{ $comment->user_name }}:</h2>
            <h3>{{ $comment->body }}</h3>
        </div>
    @empty
        <p>No comments yet.</p>
    @endforelse

</div>