<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,400&family=Roboto+Serif:ital,wght@0,100;0,300;0,400;0,500;1,100;1,200&family=Titillium+Web:ital,wght@0,200;0,400;1,200;1,300&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Titillium Web',Roboto,Poppins,cursive;
        }
        .container{
            position: relative;
            width: 100vw;
            height: 100vh;
            background: url('assets/images/jaredd-craig-HH4WBGNyltc-unsplash.jpg') no-repeat center/cover;
            background-blend-mode: lighten;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }
        .header{
            text-align: center;
            color: white;
            font-size: 2rem;
            padding: 0.3rem;
            text-shadow: 0px 0px 5px black;
            width: 35%;
        }
        .header h1{
            text-decoration: overline;
            text-shadow: 0px 0px 5px black;
        }
        .header p{
            font-size: 1.3rem;
            font-style: italic;
        }
        .icon{
            height: 30px;
            filter: invert(1) drop-shadow(0 0 5px black);
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 70%;
            align-items: center;
            gap: 2.5rem;
            font-size: 1.3rem;
            padding: 10px;
        }
        label{
            width: 50%;
            display: flex;
            gap: 0.5em;
            align-items: center;
            padding: 3px;
            border-bottom:2px solid white;
        }
        label input{
            width: 90%;
            height: 30px;
            padding: 10px;
            background: transparent;
            border: none;
            color: white;
            outline: none;
            font-size: 1.3rem;
        }

        label input::placeholder{
            color: lightgrey;
            text-shadow: 1px 0px 10px black;
        }

        .bottom{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            color: lightgrey;
            width: 50%;
            gap: 0.5rem;
        }

        .bottom .button{
            width: 40%;
            height: 30px;
            border: 2px solid white;
            padding: 5px;
            background: transparent;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: white;
            text-decoration: none;
            font-size: 1.3rem;
            padding: 1.5rem;
        }

        .bottom .button:hover{
            background-color: white;
            color: rgba(0, 0, 0, 0.7);
            transition: all 0.2s;
        }

        .forgot{
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
        }
        .forgot:hover{
            text-decoration: underline;
        }
        
        @media (max-width:1000px){
            .header{
                width: 70%;
            }
            label,.bottom{
                width: 100%;
            }

            .bottom .button{
                width: 45%;
            }
        }

        @media (max-width:420px){
            .header{
                width: 80%;
            }
            form{
                width: 90%;
            }
            label,.bottom{
                width: 100%;
            }
            .bottom{
                flex-direction: column;
            }
            .bottom .button{
                width: 70%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
            <div class="header">
                <h1>.LEARN</h1>
                <p>Education is like an art; it is a perpetual creation that progresses by provoking ever new encounters. [...] The educational system can therefore be defined as the place where one teaches and where one practices the art of encounter</p>
            </div>
           <form action="" method="post">
                <label for=""><input type="text" name="" id="" placeholder="Username or email"><img src="assets/images/icons8-utilisateur-100.png" alt="" class="icon"></label>
                <label for=""><input type="password" name="" id="" placeholder="Password"><img src="assets/images/icons8-mot-de-passe-100.png" alt="" class="icon"></label>
                <div class="bottom">
                    <button type="submit" class="button"><span>Sign In</span></button>
                    <a href="signup" class="button">Sign Up</a>
                </div>
           </form>
           <a href="forgot" class="forgot">Forgot password</a>
    </div>
</body>
</html>