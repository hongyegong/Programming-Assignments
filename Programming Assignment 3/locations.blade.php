<!-- View stored in resources/views/greeting.php -->

<html>
		<body>
				@foreach($locations as $location)
				<p>{{ $location->value }}</p>
				@endforeach
		</body>
</html>