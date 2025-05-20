<div>
    <h1>User Page</h1>
</div>
<div>
    <ul>
        <li>
            <!-- <span>Id : </span><span><b>{{$data->id ?? 'N/A'}}</b></span> -->
            <span>Person Id : </span><span><b>{{$details['id'] ?? 'N/A'}}</b></span>
        </li>
        <li>
            <!-- <span>Name : </span><span><b>{{$data->name ?? 'N/A'}}</b></span> -->
            <span>Name : </span><span><b>{{$details['name'] ?? 'N/A'}}</b></span>
        </li>
        <li>
            <!-- <span>Username : </span><span><b>{{$data->username ?? 'N/A'}}</b></span> -->
            <span>Username : </span><span><b>{{$details['username'] ?? 'N/A'}}</b></span>
        </li>
        <li>
            <!-- <span>Email : </span><span><b>{{$data->email ?? 'N/A'}}</b></span> -->
            <span>Email : </span><span><b>{{$details['email'] ?? 'N/A'}}</b></span>
        </li>
        <li>
            <!-- <span>Street : </span><span><b>{{$data->address->street ?? 'N/A'}}</b></span> -->
            <span>Street : </span><span><b>{{$details['address']['street'] ?? 'N/A'}}</b></span>
        </li>
        <li>
            <!-- <span>City : </span><span><b>{{$data->address->city ?? 'N/A'}}</b></span> -->
            <span>City : </span><span><b>{{$details['address']['city'] ?? 'N/A'}}</b></span>
        </li>
        <li>
            <!-- <span>Zipcode : </span><span><b>{{$data->address->zipcode ?? 'N/A'}}</b></span> -->
            <span>Zipcode : </span><span><b>{{$details['address']['zipcode'] ?? 'N/A'}}</b></span>
        </li>
        <li>
            <span>Co-ordinates : </span>
            <!-- <span>Lat : <b>({{$data->address->geo->lat ?? 'N/A'}})</b></span>
            <span>Long : <b>({{$data->address->geo->lng ?? 'N/A'}})</b></span> -->
            <span>Lat : <b>({{$details['address']['geo']['lat'] ?? 'N/A'}})</b></span>
            <span>Long : <b>({{$details['address']['geo']['lng'] ?? 'N/A'}})</b></span>
        </li>
        <li>
            <!-- <span>Phone : </span><span><b>{{$data->phone ?? 'N/A'}}</b></span> -->
            <span>Phone : </span><span><b>{{$details['phone'] ?? 'N/A'}}</b></span>
        </li>
        <li>
            <!-- <span>Website : </span><span><b>{{$data->website ?? 'N/A'}}</b></span> -->
            <span>Website : </span><span><b>{{$details['website'] ?? 'N/A'}}</b></span>
        </li>
</div>
