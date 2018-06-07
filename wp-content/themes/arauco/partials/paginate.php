<?php 

/**
 * La variable $max_num_pages contiene el valor del objeto retornado por WP_Query.
 * EJ: $max_num_pages = $request->max_num_pages;
 *
 */

$big = 999999999; // need an unlikely integer

$paginate =  paginate_links( array(
	'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format'    => '?paged=%#%',
	'current'   => max( 1, get_query_var('paged') ),
	'total'     => $max_num_pages,
	'prev_text' => '<i class="fa fa-angle-left"></i>',
	'next_text' => '<i class="fa fa-angle-right"></i>',
	'type'      => 'list',
	'before_page_number' => '',
	'after_page_number' => '',
	'show_all' => true
) );

if (!empty($paginate)) { ?>
<div class="row">
	<div class="col-sm-12 wow fadeInUp">
		<?php echo $paginate; ?>
	</div>
</div>
<?php
}

