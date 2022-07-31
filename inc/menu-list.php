<ul>
    <?php if( have_rows('menu', 'option') ): ?>
        <?php while( have_rows('menu', 'option') ): the_row(); ?>
        <li>
            <a href="<? the_sub_field('link', 'option')?>"><? the_sub_field('name', 'option')?></a>
            <?php if( get_sub_field('enable_menu', 'option') ):?>
            <ul class="header-main__nav-submenu">
            <?php if( have_rows('submenu', 'option') ): ?>
                <?php while( have_rows('submenu', 'option') ): the_row(); ?>
                <li><a href="<? the_sub_field('link', 'option')?>"><? the_sub_field('name', 'option')?></a></li>
                <?php endwhile; ?>
            <?php endif; ?>
                
            </ul>
            <?php endif;?>
        </li>
        <?php endwhile; ?>
    <?php endif; ?>
</ul>