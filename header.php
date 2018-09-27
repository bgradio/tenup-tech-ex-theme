<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>10up Technical Exercise Theme</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="tenup__header clearfix" role="banner">
        <section class="tenup__header__title-container guttered">
            <div id="mobileMenuButton" class="tenup__header__mobile-menu-container" role="button">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" role="img" aria-label="Open menu"><path class="svg-open" d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" role="img" aria-label="Close menu"><path class="svg-close" d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
            </div>
            <div class="tenup__header__site-logo">
              <img src="<?php echo TENUP_STYLESHEET_DIR . '/images/logo.svg' ?>" alt="site logo" style="height: 40px; width: 50px;"/>
            </div>
            <h1 class="tenup__header__site-title">
                <a href="<?php echo get_bloginfo('url') ?>">
                    <?php echo get_bloginfo('name'); ?>
                </a>
            </h1>
        </section>
        <section id="main-menu" class="tenup__header__menu-container">
            <nav class="tenup__header__menu" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'main-nav' ) ); ?>
            </nav>
        </section>
    </header>
