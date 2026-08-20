<?php
/**
 * Bottega Design Studio - Footer Template (footer.php)
 */
?>
<footer class="site-footer" style="padding: 40px; text-align: center; border-top: 1px solid rgba(0,0,0,0.1); font-family: var(--font-normal);">
    <p style="margin: 0; font-size: 13px; color: #77716a;">
        &copy; <?php echo date('Y'); ?> Bottega The Design Studio. All rights reserved.
    </p>
</footer>

<script src="<?php echo get_stylesheet_directory_uri ? get_stylesheet_directory_uri() . '/assets/js/scroll-animation.js' : 'assets/js/scroll-animation.js'; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri ? get_stylesheet_directory_uri() . '/assets/js/mobile-menu.js' : 'assets/js/mobile-menu.js'; ?>"></script>

<?php if (function_exists('wp_footer')) wp_footer(); ?>
</body>
</html>
