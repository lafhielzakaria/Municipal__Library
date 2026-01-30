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
      <form action="{{ route('store.book') }}" method="post">
             @csrf
         <label>Enter book title *</label>
        <input type="text" name = "title"> <br><br><br>
         <label>Enter book author *</label>
        <input type="text" name = "author">
        <select name="category_id">
            <option value="">select the book category</option>
            @foreach ($categories as $category)
             <option name = "category_id" value="{{$category->id}}">{{$category->name}}</option>
             @endforeach
        </select>
        <button>submit</button>
      </form>     
    </body>
</html>
