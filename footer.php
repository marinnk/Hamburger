<footer class="l-footer">
        <div class="p-footer">
            <?php wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'container_class' => 'p-footer__list'
            ));
            ?>
            <p class="p-footer__copyright">Copyright: RaiseTech</p>
        </div>
    </footer>
</div> 
<?php wp_footer(); ?>
</body>
</html>