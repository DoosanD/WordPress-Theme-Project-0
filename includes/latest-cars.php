<?php 

$attributes = get_query_var('attributes');

print_r($attributes['colour']);
$args = [
    'post_type' => 'cars',
    'meta_key' => 'colour',
    'meta_value' => 'Black',
    'posts_per_page' => 0,
]
