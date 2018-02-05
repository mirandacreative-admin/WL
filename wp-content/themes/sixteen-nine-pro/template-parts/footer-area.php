    <div class="copyright">
        <div class="row">
            <div class="column">
                <?php the_field('copyright', 'options'); ?>
                <?php $name = get_field('label_name', 'options');
                if ($name):?>

                    <span class="pull-right footer__name"><?php echo $name ?></span>

                <?php endif; ?>
            </div>
        </div>
    </div>