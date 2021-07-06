@foreach ($transport as $t)
<table>
    <tr>
        <td>{{$t->id}}</td>
        <td>{{$t->moyTrans}}</td>
        <td>{{$t->image}}</td>
    </tr>
</table>
@endforeach


