<?php
/**
 * Display calendar
 */

elgg_load_js('fullcalendar');
elgg_load_css('fullcalendar');

?>

<script>
$(document).ready(function() {

    $('#calendar').fullCalendar({
		events: {
			url: '/services/api/rest/json/?method=lunch',
			color: '#00bff3',
			textColor: 'white',
		}
	});
	
});
</script>

<div id="calendar"></div>


 