<div id="app">
	<div id="app-navigation">
		<ul id="grouplist">
			<li class="special">
				<a role="button" class="">
					+ <?php p($l->t('New external Calendar')); ?>
				</a>
			</li>
		</ul>
	</div>
	<div id="app-content">
		<h1><?php p($_['msg']); ?></h1>
		<h2>My own calendar</h2>
		<ul>
<?php 
		$option_calendars = OC_Calendar_Calendar::allCalendars(OCP\USER::getUser());
		for($i = 0; $i < count($option_calendars); $i++) {
			$cal = $option_calendars[$i]; 
?>
			<li><?php p($cal['displayname']); ?>
<?php			
		} 
?>
		</ul>
	</div>
</div>
