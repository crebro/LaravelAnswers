<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
         
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           
            <div class="container text-center">
                <div class="title">
                    <h1>Laravel Questions </h1>
                </div>

                <div class="links">
                    <a href=" {{ route('posts.index') }} " class="btn btn-success mx-1">Home</a>
                    <a href=" {{ route('posts.create') }} " class="btn btn-success mx-1">Create a Post</a>
                    <a href="https://laravel-news.com" class="btn btn-success mx-1">News</a>
                    <a href="https://blog.laravel.com" class="btn btn-success mx-1">Blog</a>
                    <a href="https://nova.laravel.com" class="btn btn-success mx-1">Nova</a>
                    <a href="https://forge.laravel.com" class="btn btn-success mx-1">Forge</a>
                    <a href="https://vapor.laravel.com" class="btn btn-success mx-1">Vapor</a>
                    <a href="https://github.com/laravel/laravel" class="btn btn-success mx-1">GitHub</a>
                </div>


            </div>
                @yield('content')
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
