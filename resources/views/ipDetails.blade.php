<div>
    <h1>Ip Address Details </h1>
    <ul>
        <li>
            <span>IP Address : </span><span><b>{{$ipData['ip']}}</b></span>
        </li>
        <li>
            <span>City : </span><span><b>{{$ipData['city']}}</b></span>
        </li>
        <li>
            <span>Region : </span><span><b>{{$ipData['region']}}</b></span>
        </li>
        <li>
            <span>Country Code : </span><span><b>{{$ipData['country']}}</b></span>
        </li>
        <li>
            <span>Postal Code : </span><span><b>{{$ipData['postal'] ?? 'N/A'}}</b></span>
        </li>
        <li>
            <span>Timezone : </span><span><b>{{$ipData['timezone'] ?? 'N/A'}}</b></span>
        </li>
        <li>
            <span>Organisation : </span><span><b>{{$ipData['org'] ?? 'N/A'}}</b></span>
        </li>
        <li>
            <span>Location Co-ordinates : </span><span><b>{{$ipData['loc']}}</b></span>
        </li>
    </ul>
</div>
