<?php get_header(); ?>


<?php 

if (is_single()):
	//echo 'single index' ;
	
	get_template_part( 'single', 'index' );
	
else :

?>
	
	<div class="masonry">
	
	<!-- Masonry gutter sizer-->
	  <div class="masonry__gutter"></div>
	  <!-- Masonry columnWidth sizer -->
	  <div class="masonry__column"></div>
	  <!-- Masonry items -->
	  <!--
	  <div class="masonry__item">1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu risus sit amet dui tristique venenatis. Donec tempor eros efficitur, vehicula orci nec, varius eros. Pellentesque luctus arcu id libero placerat condimentum sed ac urna. Donec fermentum pulvinar ante eget volutpat</div>
	  
	  <div class="masonry__item">2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu risus sit amet dui tristique venenatis. Donec tempor eros efficitur, vehicula orci nec, varius eros. Pellentesque luctus arcu id libero placerat condimentum sed ac urna. Donec fermentum pulvinar ante eget volutpat. Phasellus at lobortis eros. Proin nec nunc in mauris luctus dictum. </div>
	  <div class="masonry__item">3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu risus sit amet dui tristique venenatis. Donec tempor eros efficitur, vehicula orci nec, varius eros. Pellentesque luctus arcu id libero placerat condimentum sed ac urna. Donec fermentum pulvinar ante eget volutpat. Phasellus at lobortis eros. Proin nec nunc in mauris luctus dictum. Suspendisse gravida ac justo euismod 
	  <br/><br/>
	  fermentum. Vestibulum auctor rutrum leo, at hendrerit lectus auctor quis. Pellentesque nec ipsum sodales diam posuere pretium vitae volutpat diam. Ut vitae ultricies libero, nec aliquam magna. Nunc iaculis velit ligula, et hendrerit lacus varius non. Duis non varius lorem, et convallis urna. Sed sit amet suscipit lectus.
	
	</div>
	
	  <div class="masonry__item">4  fermentum. Vestibulum auctor rutrum leo, at hendrerit lectus auctor quis. Pellentesque nec ipsum sodales diam posuere pretium vitae volutpat diam. Ut vitae ultricies libero, nec aliquam magna. Nunc iaculis velit ligula, et hendrerit lacus varius non. Duis non varius lorem, et convallis urna. Sed sit amet suscipit lectus.
	</div>
	
	  <div class="masonry__item"> 5 fermentum. Vestibulum auctor rutrum leo, at hendrerit lectus auctor quis. Pellentesque nec ipsum sodales diam posuere pretium vitae volutpat diam. Ut vitae ultricies libero, nec aliquam magna. Nunc iaculis velit ligula, et hendrerit lacus varius non. Duis non varius lorem, et convallis urna. Sed sit amet suscipit lectus.
	  fermentum. Vestibulum auctor rutrum leo, at hendrerit lectus auctor quis. Pellentesque nec ipsum sodales diam posuere pretium vitae volutpat diam. Ut vitae ultricies libero, nec aliquam magna. Nunc iaculis velit ligula, et hendrerit lacus varius non. Duis non varius lorem, et convallis urna. Sed sit amet suscipit lectus.
	</div>	
	
	  <div class="masonry__item"> 6 fermentum. Vestibulum auctor rutrum leo, at hendrerit lectus auctor quis. Pellentesque nec ipsum sodales diam posuere pretium vitae volutpat diam. Ut vitae ultricies libero, nec aliquam magna. Nunc iaculis velit ligula, et hendrerit lacus varius non. Duis non varius lorem, et convallis urna. Sed sit amet suscipit lectus.
	</div>
	  <div class="masonry__item"> 7 fermentum. Vestibulum auctor rutrum leo, at hendrerit lectus auctor quis. Pellentesque nec ipsum sodales diam posuere pretium vitae volutpat diam. Ut vitae ultricies libero, nec aliquam magna. Nunc iaculis velit ligula, et hendrerit lacus varius non. Duis non varius lorem, et convallis urna. Sed sit amet suscipit lectus.
	  fermentum. Vestibulum auctor rutrum leo, at hendrerit lectus auctor quis. Pellentesque nec ipsum sodales diam posuere pretium vitae volutpat diam. Ut vitae ultricies libero, nec aliquam magna. Nunc iaculis velit ligula, et hendrerit lacus varius non. Duis non varius lorem, et convallis urna. Sed sit amet suscipit lectus.
	  fermentum. Vestibulum auctor rutrum leo, at hendrerit lectus auctor quis. Pellentesque nec ipsum sodales diam posuere pretium vitae volutpat diam. Ut vitae ultricies libero, nec aliquam magna. Nunc iaculis velit ligula, et hendrerit lacus varius non. Duis non varius lorem, et convallis urna. Sed sit amet suscipit lectus.
	</div>
	  <div class="masonry__item"> 8 fermentum. Vestibulum auctor rutrum leo, at hendrerit lectus auctor quis. Pellentesque nec ipsum sodales diam posuere pretium vitae volutpat diam. Ut vitae ultricies libero, nec aliquam magna. Nunc iaculis velit ligula, et hendrerit lacus varius non. Duis non varius lorem, et convallis urna. Sed sit amet suscipit lectus.
	</div>
	  <div class="masonry__item"> 9 fermentum. Vestibulum auctor rutrum leo, at hendrerit lectus auctor quis. Pellentesque nec ipsum sodales diam posuere pretium vitae volutpat diam. Ut vitae ultricies libero, nec aliquam magna. Nunc iaculis velit ligula, et hendrerit lacus varius non. Duis non varius lorem, et convallis urna. Sed sit amet suscipit lectus.
	  fermentum. Vestibulum auctor rutrum leo, at hendrerit lectus auctor quis. Pellentesque nec ipsum sodales diam posuere pretium vitae volutpat diam. Ut vitae ultricies libero, nec aliquam magna. Nunc iaculis velit ligula, et hendrerit lacus varius non. Duis non varius lorem, et convallis urna. Sed sit amet suscipit lectus.
	</div>	
	-->
	
<?php 		endif; ?>

<?php get_footer(); ?>

