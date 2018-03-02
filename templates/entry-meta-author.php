<?php

$taxonomy = 'organization';
 
// Get the term IDs assigned to post.
$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
$data_lead = get_the_excerpt($post->ID);
 
// Separator between links.
$separator = ', ';
 
if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {
 
    $term_ids = implode( ',' , $post_terms );
 
    $terms = wp_list_categories( array(
        'title_li' => '',
        'style'    => 'none',
        'echo'     => false,
        'taxonomy' => $taxonomy,
        'include'  => $term_ids
    ) );
 
    $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
 
    // Display post categories.
    
}
?>
<div class="entry-meta" xmlns="//www.w3.org/1999/html">
    <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?>&nbsp;&nbsp;<i><?php echo $terms;?></i></time>
</div>

<div class="entry-summary">
				<?php
echo $data_lead;
				?>
</div>


