<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>lara01 - crud</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
             .badge {
                background-color: white;
            }
        </style>
    </head>

    <body>
        <div class="todo-site">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{url('/')}}">$projects++ </a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/')}}">Principal</a></li>
                        <li><a href="{{url('/registar')}}">Registar</a></li>
                        
                    </ul>
                </div>
            </nav>
            <div class="base">
                @yield('conteudo')
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

