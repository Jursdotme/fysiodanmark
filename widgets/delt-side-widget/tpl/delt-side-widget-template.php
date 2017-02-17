<div class="delt-indhold-container"></div>

<script type="text/javascript">
	$.getJSON( "<?php echo $instance['text']; ?>", function( data ) {
		var items = [];
		$.each( data, function( key, val ) {
			items.push( "<li id='" + key + "'>" + val + "</li>" );
		});

		console.log(data.content.rendered);

		$( "<div/>", {
			"class": "delt-indhold",
			html: data.content.rendered
		}).appendTo( ".delt-indhold-container" );

	});
</script>
