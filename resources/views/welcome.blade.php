<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                padding:20%;
                /* right: 10px; */
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .btn{
                color: #fff;
                text-decoration: none;
                border: #ccc 1px solid;
                padding: 10px 15px;
                border-radius: 8px;
                line-height: 4em;
                
            }
            
            .btn:hover{
                color: #b19295;
                border: #fff 1px solid;
            }
        body{
             background-image: url('images/image1.jpg');
             height: 100vh;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }
        </style>
    </head>
    <body >
    
        <div id="particles-js" class="flex-center position-ref full-height" class=>
            @if (Route::has('login'))
                <div align="center" class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
                            <a style="color:white;font-size:20px" href="{{ route('login') }}">Student Login</a>
                            <a style="color:white;font-size:20px" href="{{ route('admin.login') }}">Faculty Login</a>
                            <a style="color:white;font-size:20px" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div >
            </div>
        
                
            </div>
        </div>

    <script>
        particlesJS.load('particles-js', 'js/particles.json',
        function(){
            console.log('particles.json loaded...')
        })
    </script>
    </body>
</html>
