<table>
  <?php foreach($genero as $genero): ?>
    <tr>
      <td>
        <?php echo $genero->getId(); ?>
      </td>
      <td>
        <?php echo $genero->getNombre(); ?>
      </td>
      <td>
        <?php echo link_to('Ver Artistas', 'listado_artistas_por_genero', array('id'=>$genero->getId()), array('class'=>'enlace','style'=>'color: #ff0000')); ?>
      </td>  
    </tr>
  <?php endforeach; ?>
  <?php echo link_to('Cerrar Sesion', 'sf_guard_signout', array('class'=>'enlace','style'=>'color: #ff0000')); ?>
</table>
