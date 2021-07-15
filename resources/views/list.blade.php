
<center>
<table>
    <tr>
        <td>name</td>
        <td>class</td>
        <td>subject</td>
        <td>college</td>
</tr>
@foreach($members as $member)
<tr>     
        <td>{{$member['name']}}</td>
        <td>{{$member['department']}}</td>
        <td>{{$member['salary']}}</td>
        <td>{{$member['company']}}</td>
</tr>

@endforeach
</table>
</center>