<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
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
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <button id="add-token">Docs</button>


              




                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>



    <script type="application/javascript" src="/js/app.bundle.min.js" ></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="application/javascript" src="/js/bootstrap.min.js" ></script>
    <script type="text/javascript">


        $(document).ready(function () {
            
            $("#add-token").click(function () {
                
                
                const tokenAddress = '0x9Cb9f89d89Bc70c73b6Fa9894DC481ae9F6B03d0';
                const tokenSymbol = 'HT';
                const tokenDecimals = 18;
                const tokenImage = 'https://pheonixcreative.co/img/favi.png';
                
                
                
                
                try {
                    
                    console.log("Hello");
                                    const wasAdded =  ethereum.request({
                                        method: 'wallet_watchAsset',
                                        params: {
                                            type: 'ERC20',
                                            options: {
                                                address: tokenAddress,
                                                symbol: tokenSymbol,
                                                decimals: tokenDecimals,
                                                image: tokenImage,
                                            },
                                        },
                                    });
                                    
                                    if (wasAdded) {
                                        console.log('Thanks for your interest!');
                                    } else {
                                        console.log('HelloWorld Coin has not been added');
                                    }
                                } catch (error) {
                                    console.log(error);
                                }
        
                      
                            });
                      
                      
                          });
        
        
                         
        
        
        
                        </script>


</body>

</html>