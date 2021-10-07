<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WhatToEat</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<header>

    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="far fa-clone"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/recipes"><i class="far fa-clone"></i>Recipes</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/builder"><i class="far fa-calendar-alt"></i>Weekly Food Builder</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body>
@yield('main')
@yield('recipes')
@yield('edit')
@yield('create')
@yield('builders')
<footer>
    <p>Created by Zenonas. © 2021</p>
</footer>
</body>

</html>
