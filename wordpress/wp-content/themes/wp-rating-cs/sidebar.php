<?php if ( is_active_sidebar('widgetarea1') ) : ?>
<div class="item_blocks">
    <div class="groups">
	    <?php dynamic_sidebar( 'widgetarea1' ); ?>
    </div>
</div>
<?php else : ?>

	<!-- If you want display static widget content - write code here
	RU: Здесь код вывода того, что необходимо для статического контента виджетов -->

<?php endif; ?>
