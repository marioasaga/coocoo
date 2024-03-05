<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>小鳥餌Coocoo</title>
  <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
  <script>
    (function(d) {
      var config = {
        kitId: 'ded0utm',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <?php wp_head(); ?>
</head>

<body>

  <!-- header -->
  <header class="header">
      <!-- ロゴ -->
      <a href="/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/Coocoo_logo1.png" alt=""></a>
      <!-- PC用ナビゲーション -->
      <nav id="nav-pc">
          <a href="home.php#product">商品一覧</a>
          <a href="<?php echo home_url(); ?>/category/safety">安全へのこだわり</a>
          <a href="<?php echo home_url(); ?>/category/guide">ご利用ガイド</a>
      </nav>
  </header>
  <!-- /header -->