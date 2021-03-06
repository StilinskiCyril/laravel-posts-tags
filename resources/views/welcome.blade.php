<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="card">
                    <div class="card-body">
                        @forelse($posts as $post)
                        <h3>{{ $post->title }}</h3>
                            <p>{{ $post->body }}</p>
                        @empty
                        No records
                        @endforelse
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        @forelse($tags as $tag)
                            <a href="/posts/tag/{{ $tag->name }}" >{{ $tag->name }}</a >
                        @empty
                        No records
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
