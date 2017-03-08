<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
                /*align-items: center;*/
                align-items: baseline;
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

            /* From here is my style, taken from Code Pen */

            .feedback-input {
                color:#3c3c3c;
                font-family: Helvetica, Arial, sans-serif;
                font-weight:500;
                font-size: 18px;
                border-radius: 0;
                line-height: 22px;
                background-color: #fbfbfb;
                padding: 13px 13px 13px 54px;
                margin-bottom: 10px;
                width:100%;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                -ms-box-sizing: border-box;
                box-sizing: border-box;
                border: 3px solid rgba(0,0,0,0);
            }

            .feedback-input:focus{
                background: #fff;
                box-shadow: 0;
                border: 3px solid #3498db;
                color: #3498db;
                outline: none;
              padding: 13px 13px 13px 54px;
            }

            .focused{
                color:#30aed6;
                border:#30aed6 solid 3px;
            }

            #form-main{
            width:100%;
            float:left;
            padding-top:0px;
            }

            #form-div {
                background-color:rgba(72,72,72,0.4);
                padding-left:35px;
                padding-right:35px;
                padding-top:35px;
                padding-bottom:50px;
                width: 450px;
                float: left;
                left: 50%;
                position: absolute;
              margin-top:30px;
                margin-left: -260px;
              -moz-border-radius: 7px;
              -webkit-border-radius: 7px;
            }

            #email{
                background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
                background-size: 30px 30px;
                background-position: 11px 8px;
                background-repeat: no-repeat;
            }

            #email:focus{
                background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
                background-size: 30px 30px;
                background-position: 11px 8px;
                background-repeat: no-repeat;
            }

            #comment{
                background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
                background-size: 30px 30px;
                background-position: 11px 8px;
                background-repeat: no-repeat;
            }

            textarea {
                width: 100%;
                height: 150px;
                line-height: 150%;
                resize:vertical;
            }

            input:hover, textarea:hover,
            input:focus, textarea:focus {
                background-color:white;
            }

            #button-blue{
                font-family: 'Montserrat', Arial, Helvetica, sans-serif;
                float:left;
                width: 100%;
                border: #fbfbfb solid 4px;
                cursor:pointer;
                background-color: #3498db;
                color:white;
                font-size:24px;
                padding-top:22px;
                padding-bottom:22px;
                -webkit-transition: all 0.3s;
                -moz-transition: all 0.3s;
                transition: all 0.3s;
              margin-top:-4px;
              font-weight:700;
            }

            #button-blue:hover{
                background-color: rgba(0,0,0,0);
                color: #0493bd;
            }
    
            .submit:hover {
                color: #3498db;
            }

            .ease {
                width: 0px;
                height: 74px;
                background-color: #fbfbfb;
                -webkit-transition: .3s ease;
                -moz-transition: .3s ease;
                -o-transition: .3s ease;
                -ms-transition: .3s ease;
                transition: .3s ease;
            }

            .submit:hover .ease{
                width:100%;
                background-color:white;
            }

            @media only screen and (max-width: 580px) {
            #form-div{
                left: 3%;
                margin-right: 3%;
                width: 88%;
                margin-left: 0;
                padding-left: 3%;
                padding-right: 3%;
            }

        </style>
    </head>

<!-- All the things I care about starts here: -->    
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Find out the latest Make and Model!
                </div>

                <!-- Form to submit information.  From CodePen http://codepen.io/rexkirby/pen/Fdnlz?editors=1100 -->
                <div id="form-main">
                    <div id="form-div">
                        <form class="form" id="form1" action="SendMakeModel", method="post">

                            <p class="email">
                                <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                            </p>

                            <p class="text">
                                <input name="make" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Make"></input>
                            </p>

                            <p class="text">
                                <input name="model" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Model"></input>
                            </p>


                            <div class="submit">
                                <input type="submit" value="SEND" id="button-blue"/>
                            <div class="ease"></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
