<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
        <script src="/js/confirm.js"></script>
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div class="container">
            <h1>AppleBee's Menu</h1><button class="back" style onclick='history.go(-1);'>Back </button>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
