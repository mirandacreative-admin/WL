<?php
/*
Accordions
*/
?>
<?php if (have_rows('accordion')):
$count = 0;
$uid = 3;
?>
<section class="row">
    <?php while (have_rows('accordion')) : the_row();
    $count++;
    $uid++;
    $amtofcols = get_sub_field('columns');
        $onetitle = get_sub_field('onetitle');
        $twotitle = get_sub_field('twotitle');
        $onecontent = get_sub_field('onecontent');
        $twocontent = get_sub_field('twocontent');
        $fullwidth = get_sub_field('full_width');
            if ($amtofcols == 1) {
            if ($fullwidth = 1) {
            $colwidth = '12';
            } else {
            $colwidth = '6';
        }
    ?>
    <div class="col-sm-<?= $colwidth; ?> accordian-hold">
        <div id="full-<?= $uid; ?>" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="one">
                    <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#full-<?= $uid; ?>"
                        href="#full-<?= $uid; ?>" aria-expanded="true"
                        aria-controls="full-<?= $uid; ?>">
                        <?= $onetitle; ?> <i class="material-icons">arrow_drop_down</i>
                    </a>
                    </h5>
                </div>
                <div id="full-<?= $uid; ?>" class="collapse show" role="tabpanel"
                    aria-labelledby="one-<?= $uid; ?>">
                    <div class="card-block">
                        <?= $onecontent; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    if ($amtofcols == 2) {
    ?>
    <div class="col-sm-6">
        <div id="halfone-<?= $uid; ?>" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="one">
                    <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#halfone-<?= $uid; ?>"
                        href="#halfone-<?= $uid; ?>" aria-expanded="true"
                        aria-controls="halfone-<?= $uid; ?>">
                        <?= $onetitle; ?> <i class="material-icons">arrow_drop_down</i>
                    </a>
                    </h5>
                </div>
                <div id="halfone-<?= $uid; ?>" class="collapse show" role="tabpanel"
                    aria-labelledby="one-<?= $uid; ?>">
                    <div class="card-block">
                        <h1><?= $fullwidth; ?></h1>
                        <?= $onecontent; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div id="halftwo-<?= $uid; ?>" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="one">
                    <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#halftwo-<?= $uid; ?>"
                        href="#halftwo-<?= $uid; ?>" aria-expanded="true"
                        aria-controls="halftwo-<?= $uid; ?>">
                        <?= $twotitle; ?> <i class="material-icons">arrow_drop_down</i>
                    </a>
                    </h5>
                </div>
                <div id="halftwo-<?= $uid; ?>" class="collapse show" role="tabpanel"
                    aria-labelledby="one">
                    <div class="card-block">
                        <?= $twocontent; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100"></div>
    <?php }
    endwhile;
    ?>
</section>
<?php endif; ?>