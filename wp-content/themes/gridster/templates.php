<script type="text/html" id="post-template">
	
	<!-- Post container -->
	<div class="post-content">
		<a href="<%= href %>">	
			<div class="thumbnail_container"><img src="<%= thumbnail %>" class="post_thumbnail" ></div>
		    <div class="post-title"><%= title %> </div>
		    <div class="post-description">
		     <%= content %>	
		    </div>
	    </a>
	</div>	    
	    <div class="entry-meta-footer">
	    	<span class="entry-categories"><%= date %> &nbsp;
			
				<% _.each(categories, function(category){ %>
				<a href="#/category/<%= category.name %>"rel="category tag">
            	<%= category.name %>
				</a> 
				<% }); %>


            
			    &nbsp; <a href="#" class="recommend" id="<%= id  %>" title="Vind dit leuk"><span class="ion-android-favorite heart-icon"></span> <span class="zilla-likes-postfix"></span></a></span>
    <!-- END .entry-meta-footer-->
	</div>
	<!--

	-->
</script>