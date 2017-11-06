<table>
<tbody>

   <tr><td>{{$dominios->nombre}}</td><td><a href="/dominios/{{$dominios->id}}">editar</a></td><td>ver más</td></tr>
@foreach ($paginas as $key => $value)
   <tr><td>{{$key+1}} </td><td>{{$value->titulo}}</td><td><a href="/paginas/{{$value->id}}/edit">editar</a></td><td>ver más</td></tr>
@endforeach
</tbody>
</table>