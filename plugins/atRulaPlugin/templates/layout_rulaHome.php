<!DOCTYPE html>
<html lang="<?php echo $sf_user->getCulture() ?>" dir="<?php echo sfCultureInfo::getInstance($sf_user->getCulture())->direction ?>">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="<?php echo public_path('favicon.ico') ?>"/>
    <?php include_stylesheets() ?>
    <?php include_component_slot('css') ?>
    <?php if ($sf_context->getConfiguration()->isDebug()): ?>
      <script type="text/javascript" charset="utf-8">
        less = { env: 'development', optimize: 0, relativeUrls: true };
      </script>
    <?php endif; ?>
    <?php include_javascripts() ?>


  </head>

  <body class="yui-skin-sam <?php echo $sf_context->getModuleName() ?> <?php echo $sf_context->getActionName() ?>">

    <?php echo get_partial('header') ?>

    <div class="container">
      <div class="row">
        <div class="span2">
          <?php echo get_component('default', 'popular', array('limit' => 10, 'sf_cache_key' => $sf_user->getCulture())) ?>
        </div>
        <div class="span10">
          <?php if (!include_slot('content')) : ?>
            <?php echo $sf_content ?>
          <?php endif; ?>
        </div>
      </div>  

    </div>

    <?php echo get_partial('footer') ?>

  </body>
</html>
