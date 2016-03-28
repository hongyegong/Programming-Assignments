<!-- View stored in resources/views/greeting.php -->

<html>
		<body>
				@foreach($locations as $location)
					<p>{{ $location->value }}</p>
					<ol>
						@foreach($location->stories as $story)
							<li>{{ $story->title }}</li>
						@endforeach
					</ol>
				@endforeach
		</body>
</html>