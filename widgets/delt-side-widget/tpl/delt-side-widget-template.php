<div class="delt-indhold-container"></div>

<script type="text/javascript">

	var str = "<?php echo $instance['text']; ?>";
	var res = str.replace("/?json=get_page&amp;page_id=", "/wp-json/wp/v2/pages/");

	$.getJSON( res, function( data ) {
		var items = [];
		$.each( data, function( key, val ) {
			items.push( "<li id='" + key + "'>" + val + "</li>" );
		});

		$( "<div/>", {
			"class": "delt-indhold",
			html: data.content.rendered
		}).appendTo( ".delt-indhold-container" );

	});
</script>
