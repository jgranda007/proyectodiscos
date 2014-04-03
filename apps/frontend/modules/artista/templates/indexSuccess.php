<table>
  <?php foreach($artista as $artista): ?>
    <tr>
      <td>
        <?php echo $artista->getId(); ?>
      </td>
      <td>
        <?php echo $artista->getGenero()->getNombre(); ?>
      </td>
      <td>
        <?php echo $artista->getNombre(); ?>
      </td>
      <td>
        <?php echo link_to('Ver Albumes', 'listado_albumes_por_artista', array('id'=>$artista->getId()), array('class'=>'enlace','style'=>'color: #ff0000')); ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
