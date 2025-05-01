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

<div>
    <h1>Inbuilt functions:</h1>

    <h2 style="color: red;">use of round(decimal digit) function</h2>
    <h2>Rounding off 2.43 will results : {{round(2.43)}}</h2>
    <h2>Rounding off -5.38 will results : {{round(-5.38)}}</h2>
    <h2><?php echo "Rounding off 2.73 will results in echo of php tagged h2 tag is : " . round(2.73) ?></h2><br>

    <h2 style="color: red;">use of ceil(decimal digit) function</h2>
    <h2>ceil value of 4.3 is : {{ ceil(4.3) }}</h2>
    <h2><?php echo "ceil value of 4.73 is in echo of php tagged h2 tag is : " . ceil(4.73) ?></h2><br>

    <h2 style="color: red;">use of floor(decimal digit) function</h2>
    <h2>floor value of 4.3 is : {{ floor(4.3) }}</h2>
    <h2><?php echo "floor value of 4.73 is in echo of php tagged h2 tag is : " . floor(4.73) ?></h2><br>


    <h2 style="color: red;">use of abs(negative value) function</h2>
    <h2>Abstract value of -14.3 is : {{ abs(-14.3) }}</h2>
    <h2><?php echo "Abstract value of -14.73 is in echo of php tagged h2 tag is : " . abs(-14.73) ?></h2><br>


    <h2 style="color: red;">use of min(digits) function</h2>
    <h2>Minimum value among 6,4,8,3 and 9 is {{min(6,4,8,3,9)}}</h2>
    <h2><?php echo "Minimum value among 6,4,1,8,3 and 9 is in echo of php tagged h2 tag is : " . min(6, 4, 8, 3, 9) ?></h2><br>


    <h2 style="color: red;">use of max(digits) function</h2>
    <h2>Maximum value among 6,4,9,3 and 8 is {{max(6,4,9,3,8)}}</h2>
    <h2><?php echo "Maximum value among 6,4,1,9,3 and 8 is in echo of php tagged h2 tag is : " . max(6, 4, 9, 3, 8) ?></h2><br>


    <h2 style="color: red;">use of pow(base,power) function</h2>
    <h2>2 Raised to power 3 is {{pow(2,3)}}</h2>
    <h2><?php echo "5 Raised to power 4 in echo of php tagged h2 tag is : " . pow(5, 4) ?></h2><br>


    <h2 style="color: red;">use of strlen() function</h2>
    <h2>The length of the word 'allhumdullilaah' is {{strlen('allhumdullilaah')}}</h2>
    <h2><?php echo "The length of the word 'allhumdullilaah' in echo of php tagged h2 tag : " . strlen('allhumdullilaah') ?></h2><br>


    <h2 style="color: red;">use of str_word_count() function</h2>
    <h2>The length of the word 'Laravel blade templates example' is {{str_word_count('Laravel blade templates example')}}</h2>
    <h2><?php echo "The length of the word 'Laravel blade templates example' in echo of php tagged h2 tag : " . str_word_count('Laravel blade templates example') ?></h2><br>


    <h2 style="color: red;">use of strrev() function</h2>
    <h2>The Reverse word of the word '@malayalam#' is {{strrev('@malayalam#')}}</h2>
    <h2><?php echo "The Reverse word of the word '@malayalam#' in echo of php tagged h2 tag  : " . strrev('@malayalam#') ?></h2><br>


    <h2 style="color: red;">use of strtoupper('lowercase word') function</h2>
    <h2>laravel is all upper case is : {{strtoupper('laravel') }}</h2>
    <h2><?php echo "laravel is all upper case in echo of php tagged h2 tag is : " . strtoupper('laravel') ?></h2><br>


    <h2 style="color: red;">use of strtolower('uppercase word') function</h2>
    <h2>LARAVEL is all lower case is : {{strtolower('laravel') }}</h2>
    <h2><?php echo "LARAVEL is all lower case in echo of php tagged h2 tag is : " . strtolower('laravel') ?></h2><br>


    <h2 style="color: red;">use of ucfirst('word') function</h2>
    <h2>'laravel framework' in using ucfirst funtion will be : {{ ucfirst('laravel framework') }}</h2>
    <h2><?php echo "'laravel framework' in using ucfirst funtion in echo of php tagged h2 tag will be : " . ucfirst('laravel framework') ?></h2><br>


    <h2 style="color: red;">use of lcfirst('word') function</h2>
    <h2>'Laravel Framework' in using lcfirst funtion will be : {{ lcfirst('Laravel Framework') }}</h2>
    <h2><?php echo "'Laravel Framework' in using lcfirst funtion in echo of php tagged h2 tag will be : " . lcfirst('Laravel Framework') ?></h2><br>


    <h2 style="color: red;">use of ucwords('word') function</h2>
    <h2>'laravel framework' in using ucwords funtion will be : {{ ucwords('laravel framework') }}</h2>
    <h2><?php echo "'laravel framework' in using ucwords funtion in echo of php tagged h2 tag will be : " . ucwords('laravel framework') ?></h2><br>


    <h2 style="color: red;">use of rand() function</h2>
    <h2>The random number is {{rand()}}</h2>
    <h2><?php echo "The random number using php tag in h2 tag with echo is : " . rand() ?></h2>
    <h2>The random number from 2 to 10 is {{rand(2,10)}}</h2>
    <h2><?php echo "The random number from 1.1 to 9.9 using in echo of php tagged h2 tag : " . (rand(11, 99) / 10) ?></h2><br>


    <h2 style="color: red;">use of strpos() function</h2>
    <h2>The word of 'File' in 'Laravel Blade File Inbuilt Functions' starts at index : {{ strpos('Laravel Blade File Inbuilt Functions', 'File') }}</h2>


    <h2 style="color: red;">use of str_replace() function : case-sensitive</h2>
    <h2>Replacing All occurances of Blade word of ''Laravel Blade is blade' by word 'View': {{ str_replace('Blade', 'View', 'Laravel Blade is blade') }}</h2>


    <h2 style="color: red;">use of str_ireplace() function : case-insensitive</h2>
    <h2>Replacing Blade word of ''Laravel Blade is Blade' by word 'View' case-insensitive : {{ str_ireplace('Blade', 'View', 'Laravel Blade is blade') }}</h2>


    <h2 style="color: red;">use of substr() function </h2>
    <h2>getting the sliced word from word 'Laravel Blade' from index 0 to 6 : {{ substr('Laravel Blade', 0, 7) }}</h2>


    <h2 style="color: red;">use of substr_replace() function </h2>
    <h2>getting the sliced word from word 'Laravel Blade' from index 0 to 7 and replacing that by word 'View' : {{ substr_replace('Laravel Blade', 'View', 0,7) }}</h2>
    <h2>getting the sliced word from word 'Laravel Blade' from index 8 to last and replacing that by word 'View' : {{ substr_replace('Laravel Blade', 'View', 8) }}</h2>

    <h2 style="color: red;">use of trim(), ltrim() and rtrim() function</h2>
    <h2>The word length having extra spaces ' Laravel ' {{strlen(' Laravel       ')}}</h2>
    <h2>The word lentgth after left trimmed spaces ' Laravel ' {{strlen(ltrim(' Laravel       '))}} </h2>
    <h2>The word lentgth after right trimmed spaces ' Laravel ' {{strlen(rtrim(' Laravel       '))}} </h2>
    <h2>The word length after both side trimming of spaces ' Laravel ' {{strlen(trim(' Laravel       '))}} </h2><br>

    <h2 style="color: red;">use of now(), date(), time() and checkdate(M,D,Y) function</h2>
    <h2><?php date_default_timezone_set('Asia/Kolkata'); ?></h2>
    <h2 style="color: blue;">Present Timestamp : {{now()}}</h2>
    <h2 style="color: blue;">Present Time : {{date('H:i:s')}}</h2>
    <h2 style="color: blue;">Present Date : {{date('d-m-Y')}}</h2>
    <h2>Present Timestamp : {{date("Y-m-d H:i:s")}}</h2>
    <h2> The number of seconds since January 1, 1970, 00:00:00 UTC (the Unix Epoch). : {{time()}}</h2>
    <h2>Date 29/12/2024 according to (month/day/year) is {{ checkdate(29, 12, 2024) ? 'Valid' : 'Invalid' }}</h2><br>

    <h2 style="color: red;">use of date_parse() and getdate() functions</h2>
    @php
        $parsed = date_parse('2025-04-30');
        $to_date = getdate();
    @endphp
    <h2>{{ $parsed['day'] }}-{{ $parsed['month'] }}-{{ $parsed['year'] }}</h2>
    <h2>{{ $to_date['mday']}}-{{ $to_date['month'] }}-{{ $to_date['year'] }}</h2><br>

    <h2 style="color: red;">use of htmlspecialchars() and htmlentities() functions</h2>
    <h2>converts {<,>, &, ", '} to their HTML entities — so they are displayed as plain text : {{ htmlspecialchars('<b>Laravel</b>') }}</h2>
    <h2>converts all special HTML characters to their HTML entities — so they are displayed as plain text : {{ htmlentities('Laravel & PHP © 2025') }}</h2><br>

    <h2 style="color: red;">use of getcwd() and realpath() function</h2>
    <h2>The current working directory path : {{ getcwd() }}</h2>
    <h2>The current working directory path : {{ realpath('.') }}</h2>

    <h2 style="color: red;">use of implode() function</h2>
    <h2>The VIPs name using implode function will be {{implode(' - ',$restUsers)}}</h2>

    @php
        $arr = ['Laravel', 'Vue', 'React'];
    @endphp
    <h2>{{ implode(', ', $arr) }}</h2>

    @php
        $arr1 = explode(' ', 'ram siya ram jai jai siya ram'); // default
        $arr2 = explode(' ', 'hare rama hare krishna',2); // overall in 2 parts
        $arr3 = explode(' ', 'govind bolo hari gopal bolo',3); // overall in 3 parts
    @endphp
    <br>

    @foreach($arr1 as $x)
        <h2 style="color: brown;">{{$x}}</h2>
    @endforeach
    <br>

    @foreach($arr2 as $y)
        <h2 style="color: blue;">{{$y}}</h2>
    @endforeach
    <br>

    @foreach($arr3 as $z)
        <h2 style="color: violet;">{{$z}}</h2>
    @endforeach
    <br>

    @php $var = 'Laravel'; @endphp
    <h1>{{isset($var) ? 'Set' : 'Not Set'}}</h1><br>

    @php $val1 = ''; @endphp
    @php $val2 = '12'; @endphp
    <h1>{{empty($val1) ? 'Empty' : 'Not Empty'}}</h1>
    <h1>{{empty($val2) ? 'Empty' : 'Not Empty'}}</h1><br>

    <h2 style="color: red;">use of json_encode() function</h2>
    <h2>Encoding associate array in JSON format : {{ json_encode(['framework' => 'Laravel']) }}</h2>

    <h2 style="color: red;">use of json_decode() function</h2>
    @php 
        $data = json_decode('{"name": "Laravel","Age":22}');
    @endphp
    <h2>Decoding Name from $data : {{ $data->name }}</h2>
    <h2>Decoding Age from $data : {{ $data->Age }}</h2><br>

    <h2 style="color: red;">various encryption functions</h2>
    <h2>Laravel in md5 : {{ md5('Laravel') }}</h2>
    <h2>Laravel in sha1 : {{ sha1('Laravel') }}</h2>
    <h2>Laravel in crc32 : {{ crc32('Laravel') }}</h2>
    <h2>Laravel in binary to hexadecimal : {{ bin2hex('Laravel') }}</h2>
    <h2>Laravel's bin2hex changed to hex2bin : {{ hex2bin(bin2hex('Laravel')) }}</h2><br>

    <h2 style="color: red;">use of range() functions</h2>
    @php $range1 = range(1, 5); @endphp
    @php $range2 = range(1, 50, 4); @endphp
    <h1>{{ implode(', ', $range1) }}</h1>
    <h1>{{ implode(', ', $range2) }}</h1>

    <h2 style="color: red;">use of array_search() function</h2>
    <h2>The element 'PHP' in the array have the first occurance index at : 
        {{ array_search('PHP', ['Laravel', 'Blade', 'PHP', 'View', 'PHP', 'JAVA', 'PHP']) }}</h2><br>

    <h2 style="color: red;">use of array_values() functions</h2>
    @php
        $arr = array_values(
            [
                'a' => 'Laravel',
                'b' => 'Blade'
            ]
        );
    @endphp
    <h1>{{ implode(', ', $arr) }}</h1><br>

    <h2 style="color: red;">use of array_keys() functions</h2>
    @php
        $arr2 = array_keys(
            [
                'a' => 'Laravel',
                'b' => 'Blade'
            ]
        );
    @endphp
    <h1>{{ implode(', ', $arr2) }}</h1><br>

    <h2 style="color: red;">use of array_slice() functions</h2>
    @php
        $slice1 = array_slice(['Laravel', 'Vue', 'React', 'Java', 'PHP', 'React', 'Postman'], 2);
        $slice2 = array_slice(['Laravel', 'Vue', 'React', 'Java', 'PHP', 'React', 'Postman'], 1,-2);
    @endphp
    <h2>{{ implode(', ', $slice1) }}</h2>
    <h2>{{ implode(', ', $slice2) }}</h2><br>

    <h2 style="color: red;">use of array_splice() functions</h2>
    @php
        $arr1 = ['a', 'b', 'c'];
        $arr2 = ['a', 'b', 'c', 'd', 'e', 'f', 'g'];
        array_splice($arr1, 1, 1, ['x', 'y']); // starts at index 1, removes 1 element and insert given elements on the place of removed element
        array_splice($arr2, 3, 2, [1, 2, 3, 4, 5]); // starts at index 3, removes 2 element and insert given elements on the place of removed element
    @endphp
    <h2>{{ implode(', ', $arr1) }}</h2>
    <h2>{{ implode(', ', $arr2) }}</h2><br>

    <h2 style="color: red;">use of array_replace() functions</h2>
    @php
        $replaced = array_replace(['a', 'b', 'c', 'd', 'e'], [1 => 'z', 3=>'Q']);
    @endphp
    <h1>{{ implode(', ', $replaced) }}</h2><br>

    <h2 style="color: red;">use of array_diff() functions</h2>
    @php
        $diff = array_diff([1, 2, 3, 4, 5, 6], [2, 4]);
    @endphp
    <h2>{{ implode(', ', $diff) }}</h2><br>

    <h2 style="color: red;">use of array_intersect() functions</h2>
    @php
        $intr = array_intersect([1, 2, 3, 4, 5, 6], [2, 4, 7]);
    @endphp
    <h2>{{ implode(', ', $intr) }}</h2><br>

    <h2 style="color: red;">use of compact() functions</h2>
    @php
        $a = 'Laravel';
        $b = 'Blade';
        $arr = compact('a', 'b');
    @endphp
    <h2>
        <pre>{{ print_r($arr, true) }}</pre>
    </h2>

    <h2 style="color: red;">use of array_combine() functions</h2>
    @php
        $combined = array_combine(['a', 'b' ,'c'], ['Laravel', 'Blade', 'Vue3']);
    @endphp
    <h2>In JSON FORMAT :
        <pre>{{ json_encode($combined, JSON_PRETTY_PRINT) }}</pre>
        In Array Format 1:
        <pre>{{ print_r($combined, true) }}</pre>
        In Array Format 2 using php tag:
        <?php echo '<pre>' . print_r($combined, true) . '</pre>'; ?><br>
    </h2><br>

    <h2 style="color: red;">use of array_fill() functions</h2>
    @php
        $arr = ['Apple', 2, '@', NULL, TRUE];
        $filled = array_fill(0, 3, 'Laravel');
        $customSpliceAndFill = array_splice($arr, 2, 3, array_fill(0, 3, 'ram ram'));
    @endphp
    <h2>{{ implode(', ', $filled) }}</h2>
    <h2>
        <pre>{{ json_encode($arr, JSON_PRETTY_PRINT) }}</pre>
    </h2><br>

    <h2 style="color: red;">use of array_pad() functions</h2>
    @php
        $padded1 = array_pad(['Laravel', 'View'], 5, 'Blade'); // right side padding
        $padded2 = array_pad(['Laravel', 'PHP', 'React', 'Vue'], -9, 'Java'); //left side padding
        @endphp
    <h2>{{ implode(', ', $padded1) }}</h2>
    <h2>{{ implode(', ', $padded2) }}</h2><br>

    <h2 style="color: red;">use of extract() functions</h2>
    @php
        extract(
            [
                'x' => 'Laravel',
                'y' => 'Blade'
            ]
        );
    @endphp
    <h2>{{ $x }} & {{ $y }}</h2><br>
    <h2>
        <pre>{{ print_r(gettimeofday(), true) }}</pre>
    </h2>

</div>