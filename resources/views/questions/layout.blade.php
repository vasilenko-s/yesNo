<!DOCTYPE html>

<html>

<head>

    <title>Laravel 5.8 CRUD Application - Belka</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <style>
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>

</head>

<body>

<div class="container">
    <div class="links">
        <a href="/">Home</a>
        <a href="/questions">Questions</a>
        <a href=" {{ route('random') }} ">Random Question</a>
    </div>

    @yield('content')

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

    function ajaxAnswer() {
        $.ajax({
            url: 'https://yesno.wtf/api',
            type: "GET",
            dataType : "json",
            data: {
                answer: $('input[name=answer]:checked', '#myForm').val(),
            },
            success: function(result){

                 // {alert(result.image);}
                $( "#image" ).empty();
                var rowHtml = "<p>Ваш ответ:</p>";
                rowHtml +="<p><img src="+result.image+" ></p>"
                $( "#image" ).append(rowHtml)

            },
            error: function(){alert('No result');}
        });
    }

</script>

</body>

</html>