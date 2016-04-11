<!-- View stored in resources/views/greeting.php -->
@extends('layouts.page')

@section('content')
    @parent
    @foreach($locations as $location)
			<p>{{ $location->value }}</p>
			<ol>
				@foreach($location->stories as $story)
					<li>{{ $story->title }}</li>
				@endforeach
			</ol>
		@endforeach
@endsection