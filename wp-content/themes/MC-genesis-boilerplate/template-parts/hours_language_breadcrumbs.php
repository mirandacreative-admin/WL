<div id="hours_language_breadcrumbs">
    <div class="row">
        <div class="col-12">
            <h4 class="library-hours">Library Hours</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <ul>
                <li class="hours-widget-day-abbr">Mon</li>
            </ul>
        </div>
        <div class="col-9">
            <ul>
                <li class="hours-widget-details"><?php the_field( 'monday_hours', 'option' ); ?></li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <!-- if we're on a mobile device, the google translate drop-down will display here  -->
    <div class="col-xs-12" id="google_translate_mobile" style="display: block; margin: 0 auto;"></div>
</div>