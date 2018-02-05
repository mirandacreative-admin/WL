<?php
/**
 * Register widget areas
 *
 * @package      Scratch
 * @author       Carrie Dils
 * @link         http://www.carriedils.com/
 * @copyright    Copyright (c) 2015, Carrie Dils
 * @license      GPL-2.0+
 */

// Register front page widget areas
genesis_register_sidebar( array(
	'id'            => 'main-sidebar',
	'name'          => __( 'Global right sidebar' ),
	'description'   => __( 'This is the global sidebar'),
) );
genesis_register_sidebar( array(
	'id'            => 'top-right-widget',
	'name'          => __( 'Top Right Widget Area' ),
	'description'   => __( 'This is the top right widget area'),
) );
