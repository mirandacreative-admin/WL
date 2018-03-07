<div id="hours_language_mobile">
    <div class="row">
        <div class="col-12">
            <h4 class="library-hours">Library Hours</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <ul>
                <li class="hours-widget-item" data-day="monday">Mon</li>
                <li class="hours-widget-item" data-day="tuesday">Tue</li>
                <li class="hours-widget-item" data-day="wednesday">Wed</li>
                <li class="hours-widget-item" data-day="thursday">Thu</li>
                <li class="hours-widget-item" data-day="friday">Fri</li>
                <li class="hours-widget-item" data-day="saturday">Sat</li>
                <li class="hours-widget-item" data-day="sunday">Sun</li>
            </ul>
        </div>
        <div class="col-8">
            <ul>
                <li class="hours-widget-item" data-day="monday">
                    <?php the_field( 'monday_hours', 'option' ); ?>
                </li>
                <li class="hours-widget-item" data-day="tuesday">
                    <?php the_field( 'tuesday_hours', 'option' ); ?>
                </li>
                <li class="hours-widget-item" data-day="wednesday">
                    <?php the_field( 'wednesday_hours', 'option' ); ?>
                </li>
                <li class="hours-widget-item" data-day="thursday">
                    <?php the_field( 'thursday_hours', 'option' ); ?>
                </li>
                <li class="hours-widget-item" data-day="friday">
                    <?php the_field( 'friday_hours', 'option' ); ?>
                </li>
                <li class="hours-widget-item" data-day="saturday">
                    <?php the_field( 'saturday_hours', 'option' ); ?>
                 </li>
                <li class="hours-widget-item" data-day="sunday">
                    <?php the_field( 'sunday_hours', 'option' ); ?>
                </li>
            </ul>
        </div>
        <div class="col-2">
            <p>
                <i id="library-hours-dropdown-button" class="library-hours-arrows arrow library-hours-left"></i>
            </p>
        </div>
    </div>
</div>

<div class="row">
    <!-- if we're on a mobile device, the google translate drop-down will display here  -->
    <div class="col-xs-12" id="google_translate_mobile" style="display: block; margin: 0 auto;"></div>
</div>