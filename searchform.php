<form method="get" id="search_form" action="<?php bloginfo('home'); ?>" />
	<input name="s" type="text" class="search-field" id="s" onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" value="Search..." />
	<input type="hidden" id="searchsubmit" value="Search" />

</form>