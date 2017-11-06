<table>
<tbody>
<?php foreach ($dominios as $key => $value): ?>
  <tr><td><?php echo $key+1; ?></td><td><?php echo $value->nombre ?></td></tr>
<?php endforeach ?>
</tbody>
</table>