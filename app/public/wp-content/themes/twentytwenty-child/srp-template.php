<?php
/**
 * Template Name: SRP Vehicle Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

global $wpdb;

//create the sql structure
$table_name = 'inventory';
$column_names = 'id, vin, stock_number, make, model, year_manufactured';
$sql = 'SELECT ' . $column_names . ' FROM ' . $table_name;

//execute the query
$vehicles = $wpdb->get_results($sql);

//loop through the array
foreach($vehicles as $v) {
    echo $v->id;
    echo $v->vin;
    echo $v->make;
    echo $v->model;
    echo $v->year_manufactured;
}


get_template_part( 'singular' );
?>
