<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-
        1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        {{ Form::open(array('url' => '/story/store', 'method' => 'post')) }}

        <p></p>
        {{ Form::label('location', 'Location') }}
        <select name="location_id">
            @foreach ($locations as $location)
            <option value="{{ $location->id }}">{{ $location->value }}</option>
            @endforeach
        </select>

        <p></p>
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title') }}

        <p></p>
        {{ Form::label('story', 'Story') }}
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::textarea('story') }}

        <p></p>
        {{ Form::label('published', 'Published?') }}
        {{ Form::hidden('published', false) }}
        {{ Form::checkbox('published', true) }}
        <p></p>
        {{ Form::submit('Submit') }}
        
        {{ Form::close() }}

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
    </body>
</html>
