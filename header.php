<!DOCTYPE html>
<html<?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet"href="<?php echo get_stylesheet_uri();?>">
    <?php wp_head();?>
</head>
<body<?php body_class();?>>
    <header class="site-header">
        
    <div class="header-logo">
        <a href="<?php echo esc_url(home_url('/'));?>">
         <img src="<?php echo get_template_directory_uri();?>/images/logo.png"alt=<?php bloginfo("name");?>">
        </a>

        <?php if (is_front_page()):?>
         <h1 class="site-title"><?php bloginfo('name');?></h1>
        <?php else:?>
         <p class="site-title"><?php bloginfo('name');?></p>
        <?php endif;?>

    </div>

    <div class="header-nav-area">
     
     <nav class="global-nav">
      <ul class="main-menu">
       <li><a href="<?php echo esc_url(home_url('/'));?>">ホーム</a></li>
       <li><a href="#>プロフィール</a><li>
       <li><a href="#">制作実績＜/a></li>
       <li><a href="#”>料金・制作の流れ</a></li>
      </ul>
    
    <ul class="sub-menu">
     <li><a href="#">ブログ</a></li>
     <li><a href="#">プライバシーポリシー</a></li>
    </ul>
    </nav>
 </div>
 <a class="header-button"href="#">無料相談会</a>

</header>
       


