<?php decorate_with('layout_rulaHome') ?>

<?php // Title slot ?>
<?php slot('title') ?>

<?php end_slot() ?>

<?php // sidebar slot ?>
<?php slot('sidebar') ?>
  <section>
    <h3><?php echo __('Browse by') ?></h3>
    <ul>
      <?php $browseMenu = QubitMenu::getById(QubitMenu::BROWSE_ID) ?>
      <?php if ($browseMenu->hasChildren()): ?>
        <?php foreach ($browseMenu->getChildren() as $item): ?>
          <li>
            <a href="<?php echo url_for($item->getPath(array('getUrl' => true, 'resolveAlias' => true))) ?>">
              <?php echo esc_specialchars($item->getLabel(array('cultureFallback' => true))) ?>
            </a>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </section>

  <?php echo get_component('default', 'popular', array('limit' => 10, 'sf_cache_key' => $sf_user->getCulture())) ?>
<?php end_slot() ?>

<?php // main content ?>
<h1><?php echo render_title($resource->getTitle(array('cultureFallback' => true))) ?></h1>
<?php echo render_value($sf_data->getRaw('content')) ?>

<?php if (SecurityCheck::hasPermission($sf_user, array('module' => 'staticpage', 'action' => 'update'))): ?>
  <?php slot('after-content') ?>
    <section class="actions">
      <ul>
        <li><?php echo link_to(__('Edit'), array($resource, 'module' => 'staticpage', 'action' => 'edit'), array('title' => __('Edit this page'), 'class' => 'c-btn')) ?></li>
      </ul>
    </section>
  <?php end_slot() ?>
<?php endif; ?>
