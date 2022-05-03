<footer class="l-footer">
        <div class="p-footer">
            <?php wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'container_class' => 'p-footer__list'
            ));
            ?>
            <!-- <ul class="p-footer__list">
                <li class="p-footer__border"><a href="#" class="p-footer__list-item">ショップ情報</a></li>
                <li><a href="#" class="p-footer__list-item">ヒストリー</a></li>
            </ul> -->
            <p class="p-footer__copyright">Copyright: RaiseTech</p>
        </div>
    </footer>
</div> 
<?php wp_footer(); ?>
</body>
</html>