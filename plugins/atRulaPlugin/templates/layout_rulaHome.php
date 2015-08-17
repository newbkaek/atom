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

    <!-- Hacky inline styles -->
    <style type="text/css">
      .main {
        margin-top: 15px;
      }
      .main #browse-menu {
        position: relative;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
      }

      .main .top-item {
        margin: 0;
      }

      .main .top-dropdown, 
      .main a.top-dropdown:link, 
      .main a.top-dropdown:visited, 
      .main a.top-dropdown:active {
        padding: 0 0 0 12px;
        line-height: 28px;
        width: 100%;
        box-sizing: border-box;
      }

      #search-form-wrapper {
        position: relative;
      }
      
      #search-form-wrapper button {
        display: block;
        width: 30px;
        height: 30px;
        right: 0px;
        position: absolute;
        top: 0px;
        background-color: #1c5793;
        color: white;
        margin-top: 0px;
        font-size: 1.1em;
        border: none;
        -webkit-border-radius: 0 4px 4px 0;
        -moz-border-radius: 0 4px 4px 0;
        border-radius: 0 4px 4px 0;
      }

      #search-form-wrapper button:before {
        font-family: FontAwesome;
        content: "\f002";
      }

      .search-popover {
        top: 30px;
      }

      #search-bar .search-popover {
        top: 25px;
      }

      @media (max-width: 767px) {
        #search-form-wrapper {
          margin-top: 10px;
        }
      }
    </style>
  </head>

  <body class="yui-skin-sam <?php echo $sf_context->getModuleName() ?> <?php echo $sf_context->getActionName() ?>">

    <?php echo get_partial('header') ?>

    <div class="container">

      <div class="row main">
        <div class="span2 clearfix">
          <?php echo get_component('menu', 'browseMenu', array('sf_cache_key' => $sf_user->getCulture().$sf_user->getUserID())) ?>
        </div>
        <div class="span10 clearfix">
          <?php echo get_component('search', 'box') ?>
        </div>
      </div>

      <div class="row">
        <div class="span12">
          <?php if (!include_slot('content')) : ?>
            <?php echo $sf_content ?>
          <?php endif; ?>
        </div>
      </div>  

    </div>

    <?php echo get_partial('footer') ?>

  </body>
</html>
