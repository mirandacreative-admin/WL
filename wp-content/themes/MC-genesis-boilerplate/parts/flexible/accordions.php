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
    $onetitle = get_sub_field('onetitle');
    $onecontent = get_sub_field('onecontent');
    $twotitle = get_sub_field('twotitle');
    $twocontent = get_sub_field('twocontent');
    $fullwidth = get_sub_field('full_width');
    $columns = get_sub_field('columns');
    if ($columns == 1) {
    if ($fullwidth = 1) {
    $colwidth = '12';
    } else {
    $colwidth = '6';
    }
    ?>
    <div class="col-sm-<?= $colwidth; ?> accordionsection">
        <div id="accordionfull-<?= $uid; ?>" role="tablist" aria-multiselectable="true">
            <div class="card accordionhold">
                <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordionfull-<?= $uid; ?>"
                        href="#collapseOnefull-<?= $uid; ?>" aria-expanded="true"
                        aria-controls="collapseOnefull-<?= $uid; ?>">
                        <?= $onetitle; ?>
                    </a>
                    </h5>
                </div>
                <div id="collapseOnefull-<?= $uid; ?>" class="collapse hide" role="tabpanel"
                    aria-labelledby="headingOne-<?= $uid; ?>">
                    <div class="card-block">
                        <?= $onecontent; ?>
                    </div>
                </div>
            </div>
            <?php
            }
            if ($columns == 2) {
            ?>
            <div class="row">
                <div class="col-sm-6">
                    <div id="accordionhalfy-<?= $uid; ?>" role="tablist" aria-multiselectable="true">
                        <div class="card accordionhold">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordionhalfy-<?= $uid; ?>"
                                    href="#collapsehalfy-<?= $uid; ?>" aria-expanded="true"
                                    aria-controls="collapsehalfy-<?= $uid; ?>">
                                    <?= $onetitle; ?>
                                </a>
                                </h5>
                            </div>
                            <div id="collapsehalfy-<?= $uid; ?>" class="collapse hide" role="tabpanel"
                                aria-labelledby="headingOne-<?= $uid; ?>">
                                <div class="card-block">
                                    <?= $fullwidth; ?>
                                    <?= $onecontent; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="accordiontwo-<?= $uid; ?>" role="tablist" aria-multiselectable="true">
                        <div class="card accordionhold">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordiontwo-<?= $uid; ?>"
                                    href="#collapsetwo-<?= $uid; ?>" aria-expanded="true"
                                    aria-controls="collapsetwo-<?= $uid; ?>">
                                    <?= $twotitle; ?>
                                </a>
                                </h5>
                            </div>
                            <div id="collapsetwo-<?= $uid; ?>" class="collapse hide" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="card-block">
                                    <?= $twocontent; ?>
                                </div>
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