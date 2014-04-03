<table>
  <?php foreach($album as $album): ?>
  <tr>
    <td>
      <?php echo $album->getId(); ?>
    </td>
    <td>
      <?php echo $album->getNombre(); ?>
    </td>
    <td>
      <?php echo $album->getArtista()->getNombre(); ?>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
