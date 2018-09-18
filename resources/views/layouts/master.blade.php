
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Starter Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <p>Logged as <b>{{ Auth::user()->name }}</b> </p>
            <button href="" class="waves-effect waves-light btn" type="submit">Logout</button>
        </form>

        @isAdmin
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons">person_add</i>Invitations</div>
                <div class="collapsible-body">
                   <p>
                        <span class="red-text">
                        <b>Buzz McCallister</b>

                        <a href="">accept</a> | <a href="">deny</a>
                    </span>
                   </p>
                    <p>
                        <span class="red-text">
                        <b>Fuller McCallister</b>

                        <a href="">accept</a> | <a href="">deny</a>
                    </span>
                    </p>
                    <p>
                        <span class="red-text">
                        <b>Hary Lime</b>

                        <a href="">accept</a> | <a href="">deny</a>
                    </span>
                    </p>
                    <p>
                        <span class="red-text">
                        <b>Murv Merchants</b>

                        <a href="">accept</a> | <a href="">deny</a>
                    </span>
                    </p>
                </div>
            </li>
        </ul>

        @endisAdmin

        <h1 class="center-align green-text text-darken-4">To-do list</h1>

        @yield('content')

    </div>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      // Or with jQuery

      $(document).ready(function(){
        $('.collapsible').collapsible();
        $('select').formSelect();
      });
    </script>
</body>
</html>
