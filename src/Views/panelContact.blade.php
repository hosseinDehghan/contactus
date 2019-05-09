@if(session("message"))
    <p>{{session("message")}}</p>
@endif
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>family</th>
        <th>email</th>
        <th>create_at</th>
        <th>show</th>
        <th>delete</th>
    </tr>
@if(isset($contact))
    @foreach($contact as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->family}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->created_at}}</td>
            <td><a href="{{url("showContact")}}/{{$value->id}}">show</a></td>
            <td><a href="{{url("deleteContact")}}/{{$value->id}}">delete</a></td>
        </tr>
    @endforeach
@endif
</table>
@if(session("showContact"))
    <p>{{session("showContact")->message}}</p>
@endif