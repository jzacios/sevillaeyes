<!DOCTYPE html>
<html lang="pl">
    <head>

        <title> SevillaEyes </title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="main/var.css">
        <link rel="stylesheet" href="main/index.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" 
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    </head>
    <body>
        <nav class="navbar">
            <div class="options" id="options">
                <a href="#" class="option"><i class="fas fa-user"></i></a>
                <a href="#" class="option"><i class="fas fa-user"></i></a>
                <a href="#" class="option"><i class="fas fa-user"></i></a>
            </div>
            <div class="scroll-down" id="scroll-down"><i class="fas fa-angle-down"></i></div>
            <div class="scroll-up" id="scroll-up"><i class="fas fa-angle-up"></i></div>
        </nav>
        <section class="slide-1">
            <h1 class="title">Sevilla<span class="title-light">Eyes</span></h1>
            <p class="desc">Head nudges hopped up on catnip. Attack dog, run away and pretend to be victim lick sellotape with tail in the air stare out the window thinking longingly about tuna brine so who's the baby. </p>
        </section>
        <section class="slide-2">

        </section>
        <script>
            $("#scroll-up").hide();
            $(document).ready(function() {
                $("#scroll-down").click(function() {
                    $("#scroll-down").hide();
                    $("#options").css("display", "grid");
                    $("#scroll-up").show();
                });
                $("#scroll-up").click(function() {
                    $("#scroll-up").hide();
                    $("#options").css("display", "none");
                    $("#scroll-down").show();
                });
            });
        </script>
    </body>
</html>