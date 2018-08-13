<!DOCTYPE html>
<!--template basico. -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{$title or 'Painel Curso Laravel 5.3'}}</title>

        <!-- Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        
        <link rel="stylesheet" href="{{url('assets/painel/css/style.css')}}"/>
    </head>
    <body>
        <div class="container">

            @yield('content')
 
        </div>
    </body>
</html>
