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
        }
        .header h1{
            text-decoration: overline;
        }
        .header p{
            font-size: 1.3rem;
            font-style: italic;
        }
        .icon{
            filter: invert(1);
            height: 30px;
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
        form h1{
            color: white;
            text-decoration: underline;
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
            width: 20%;
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
            padding: 5px;
        }

        .bottom .button:hover{
            background-color: white;
            color: rgba(0, 0, 0, 0.5);
            transition: all 0.2s;
        }

        .forgot{
            color: white;
            text-decoration: none;
        }
        .forgot:hover{
            text-decoration: underline;
        }
        
        @media (max-width:1200px){
            label{
                width: 100%;
            }

            .bottom .button{
                width: 40%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
            <div class="header">
                <h1>.LEARN</h1>
                <p>By nature, all men are alike... Through education they become completely different</p>
            </div>
           <form action="">
                <label for=""><input type="text" name="" id="" placeholder="Username or email"><img src="assets/images/icons8-utilisateur-100.png" alt="" class="icon"></label>
                <label for=""><input type="password" name="" id="" placeholder="Password"><img src="assets/images/icons8-mot-de-passe-100.png" alt="" class="icon"></label>
                <div class="bottom">
                    <button type="submit" class="button"><span>Sign In</span></button>
                    <a href="" class="button">Sign Up</a>
                </div>
           </form>
           <a href="" class="forgot">Forgot password</a>
    </div>
</body>
</html>