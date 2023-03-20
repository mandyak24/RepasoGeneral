<table border="1 black solid">
  <tr>
    <?php for ($i = 0; $i <= 10; $i++) { ?>
      
    <?php } ?>
  </tr>
  <?php for ($i = 0; $i <= 10; $i++) { ?>
    
    <tr>
      <?php for ($j = 0; $j <= 10; $j++) { ?>
        <td><?php echo $i * $j; ?></td>
      <?php } ?>
    </tr>
  <?php } ?>
</table>
