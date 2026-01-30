<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
            <style>
            </style>
    </head>
    <body>
      <form action="{{ route('book.edit', $bookselected->id) }}" method="get">
             @csrf
         <label>Enter new book title</label>
        <input placeholder="{{$bookselected->title}}" type="text" name = "title">
        <input placeholder="{{$bookselected->author}}" type="text" name = "author">
        <button>submit</button>
      </form>
     
    </body>
</html>
