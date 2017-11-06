<table>
<tbody>
<?php foreach ($paginas as $key => $value): ?>
  <tr><td><?php echo $key+1; ?></td><td><?php echo $value->titulo ?></td></tr>
<?php endforeach ?>
</tbody>