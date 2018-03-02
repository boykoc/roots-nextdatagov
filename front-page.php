<div class="wrap container">
<div class="page-header">
  <h1>Browse Topics</h1>
</div>
<?php  

$args = array(
	'type'                     => 'post',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'name',
	'order'                    => 'ASC',
	'hide_empty'               => 1,
	'hierarchical'             => 1,
	'exclude'                  => '112,71,73,79,64,82,65,62,63,70,74,59,67,26880,102,93,69,61,57,60,72,94,56,26881,26879,81,68,75,26882,26883,26877,33884',
	'include'                  => '',
	'number'                   => '',
	'taxonomy'                 => 'category',
	'pad_counts'               => false 

);

?>

<ul class="topics">
<?php 
$ckan_access_pt = 'http://intra.stage.catalogue.ogo.tbs.gov.on.ca/dataset';
//$ckan_access_pt = (get_option('ckan_default_server'));

// 	$categories = get_categories($args); 
// 	foreach ($categories as $category) {
// 		$option = '<li class="topic-' . $category->category_nicename . '"><a href="/'.$category->category_nicename.'">';
// 		$option .= "<i></i><span>{$category->cat_name}</span>";
// 		$option .= '</a></li>';
// 		echo $option;
// 	}
?>


	<li class="topic-jobs">
		<a href="<?php echo $ckan_access_pt;?>?tags=Jobs+and+employment"><i></i><span>Jobs + Employment</span></a>
	</li>
	<li class="topic-driving">
		<a href="<?php echo $ckan_access_pt;?>?tags=Driving+and+roads"><i></i><span>Driving + Roads</span></a>
	</li>
	<li class="topic-education">
		<a href="<?php echo $ckan_access_pt;?>?tags=Education+and+training"><i></i><span>Education + Training</span></a>
	</li>	
    <li class="topic-business">
        <a href="<?php echo $ckan_access_pt;?>?tags=Business+and+economy"><i></i><span>Business + Economy</span></a>
    </li>	
	<li class="topic-environment">
		<a href="<?php echo $ckan_access_pt;?>?tags=Environment+and+energy"><i></i><span>Environment + Energy</span></a>
	</li>
	<li class="topic-health">
		<a href="<?php echo $ckan_access_pt;?>?tags=Health+and+wellness"><i></i><span>Health + Wellness</span></a>
	</li>
	<li class="topic-home">
		<a href="<?php echo $ckan_access_pt;?>?tags=Home+and+community"><i></i><span>Home + Community</span></a>
	</li>
	<li class="topic-law">
		<a href="<?php echo $ckan_access_pt;?>?tags=Law+and+safety"><i></i><span>Law + Safety</span></a>
	</li>
	<li class="topic-rural">
		<a href="<?php echo $ckan_access_pt;?>?tags=Rural+and+north"><i></i><span>Rural + North</span></a>
	</li>
	<li class="topic-taxes">
		<a href="<?php echo $ckan_access_pt;?>?tags=Taxes+and+benefits"><i></i><span>Taxes + Benefits</span></a>
	</li>		
	<li class="topic-travel">
		<a href="<?php echo $ckan_access_pt;?>?tags=Travel+and+recreation"><i></i><span>Travel + Recreation</span></a>
	</li>	
	<li class="topic-arts">
		<a href="<?php echo $ckan_access_pt;?>?tags=Arts+and+Culture"><i></i><span>Arts + Culture</span></a>
	</li>		
</ul> 

</div><!--/.container-->


<?php get_template_part('templates/content','highlights'); ?>

<div class="wrap container">
<?php get_template_part('templates/content','excerpts'); ?>
</div><!--/.container-->
