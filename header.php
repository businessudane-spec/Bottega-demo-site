<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header site-header-transparent">
    <div class="header-inner">
        <!-- Brand -->
        <div class="site-brand">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-link">
                <svg class="brand-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <polygon points="12 2 22 12 12 22 2 12 12 2"></polygon>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <span class="brand-name">BOTTEGA</span>
            </a>
        </div>

        <!-- Mobile Hamburger Toggle Button -->
        <button id="mobileMenuToggle" class="mobile-menu-toggle" aria-label="Toggle Navigation">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <!-- Navigation -->
        <nav class="main-nav">
            <ul class="main-menu">
                <li><a href="services.html">Services</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <a href="contact.html" class="contact-link">
                Contact
            </a>
        </nav>
    </div>
</header>
