<ul class="shows">
<?php foreach($shows as $show): ?>
  <li class="show">
    <a href="index.php?page=show-detail&id=<?php echo $show['id']; ?>"><?php echo $show['title'] ?></a>
  </li>
<?php endforeach; ?>
</ul>
