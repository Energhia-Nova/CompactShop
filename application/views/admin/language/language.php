<div class="btn-group">
  <?php foreach ($languages as $language) { ?>
  <a class="btn" href="<?=URL::base(true)?>admin/language/<?=$language->name?>"><?=ucfirst($language->name)?></a>
  <?php }; ?>
</div>