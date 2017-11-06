<table>
<tbody>
@foreach ($dominios as $key => $value)
   <tr><td>{{$key+1}} </td><td>{{$value->nombre}}</td><td><a href="/dominios/{{$value->id}}">editar</a></td><td>ver más</td></tr>
@endforeach

</tbody>
</table>