<link rel="stylesheet" href="http://grapesjs.com/stylesheets/grapes.min.css?v0.12.15">
<script src="http://grapesjs.com/js/grapes.min.js?v0.12.15"></script>
<script src="http://grapesjs.com/js/grapesjs-blocks-basic.min.js"></script>

	<div id="gjs" >

</div>


<script type="text/javascript">
  var editor = grapesjs.init({
      fromElement: 1,
      container : '#gjs',
      plugins: ['gjs-blocks-basic'],
      pluginsOpts: {
        'gjs-blocks-basic': {/* ...options */}
      }
  });
</script>
<table>
<tbody>

   
   <tr><td>{{$paginas->titulo}}</td><td><a href="/paginas/{{$paginas->id}}">editar</a></td><td>ver más</td></tr>

</tbody>
</table>