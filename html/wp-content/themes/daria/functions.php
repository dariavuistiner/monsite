<?php

add_filter('next_post_link', 'posts_link_attributes');
add_filter('previous_post_link', 'posts_link_attributes');

function posts_link_attributes($output)
{
    return str_replace('href=', 'class="arrow" href=', $output);
}
