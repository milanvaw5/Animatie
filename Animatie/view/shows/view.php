<section class="details">
  <h2 class="details__title"><?php echo $show['title']; ?></h2>
  <!-- controleren of de show net werd geupdated -->
  <?php if(!empty($updated)): ?>
    <p class="state">De show werd aangepast.</p>
  <?php endif; ?>
  <form action="index.php?page=show-detail&id=<?php echo $show['id'] ?>" method="POST">
    <input type="hidden" name="action" value="updateShow">
    <p class="error"><?php if(!empty($errors)) echo 'Some errors occured'; ?></p>
    <div class="fields">
      <div class="field-wrapper">
        <label for="rating">
          <span class="input-label">Rating</span>
          <!-- bij value de huidige gegevens invullen -->
          <input type="text" id="rating" name="rating" class="input" minlength="5" value="<?php echo $show['rating']; ?>" required />
          <!-- het span element gebruiken om server side te valideren, wordt enkel ingevuld indien JavaScript niet beschikbaar is -->
          <span class="error"><?php if(!empty($errors['rating'])) echo $errors['rating']; ?></span>
        </label>
      </div>
      <div class="field-wrapper">
        <label for="released">
          <span class="input-label">Released</span>
          <input type="text" id="released" name="released" class="input" minlength="4" maxlength="4" value="<?php echo $show['released']; ?>" required />
          <span class="error"><?php if(!empty($errors['released'])) echo 'Some errors occured'; ?></span>
        </label>
      </div>
      <div class="field-wrapper">
        <label for="score">
          <span class="input-label">Score</span>
          <input type="number" id="score" name="score" class="input" max="100" value="<?php echo $show['score']; ?>" required />
          <span class="error"><?php if(!empty($errors['score'])) echo 'Some errors occured'; ?></span>
        </label>
      </div>
      <div class="field-wrapper">
        <label for="amount">
          <span class="input-label">Vote amount</span>
          <input type="number" id="amount" name="vote_amount" class="input" value="<?php echo $show['vote_amount']; ?>" required />
          <span class="error"><?php if(!empty($errors['vote_amount'])) echo 'Some errors occured'; ?></span>
        </label>
      </div>
    </div>
    <input type="submit" class="button" value="Update show" />
  </form>
</section>
