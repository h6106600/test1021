<html>
    <body>
        <h1>Hello, {{ $aaa }}</h1>

        @foreach ($data as $d)
            <p>This is {{ $d }}</p>
        @endforeach

        @if (count($data) === 1)
            <p>I have one data!</p>
        @elseif (count($data) > 1)
            <p>I have multiple data!</p>
        @else
            <p>I don't have any data!</p>
        @endif

    </body>
</html>