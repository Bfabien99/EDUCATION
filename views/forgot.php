<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
            background: url('assets/images/olieman-eth--o90yRQoXAM-unsplash.jpg') no-repeat center/cover;
            background-blend-mode: lighten;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #back{
            background: rgba( 104, 80, 80, 0.15 );
            box-shadow: 0 8px 32px 0 rgba( 0, 0, 0, 0.37 );
            backdrop-filter: blur( 7.5px );
            -webkit-backdrop-filter: blur( 7.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            position: absolute;
            top: 20px;
            left: 10px;
            width: 20%;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: white;
            text-decoration: none;
            font-size: 1.3rem;
            padding: 1.5rem;
        }
        #back:hover{
            background: rgba( 255, 255, 255, 0.3 );
        }
        form{
            background: rgba( 104, 80, 80, 0.15 );
            box-shadow: 0 8px 32px 0 rgba( 0, 0, 0, 0.37 );
            backdrop-filter: blur( 7.5px );
            -webkit-backdrop-filter: blur( 7.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            width: 50%;
            max-height: 80%;
            padding: 0.5rem;
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 70%;
            align-items: center;
            gap: 1.5rem;
            font-size: 1.3rem;
        }
        form h1{
            color: white;
        }
        label{
            width: 60%;
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
        .icon{
            height: 40px;
            filter: invert(1) drop-shadow(0 0 5px black);
        }
        label input::placeholder{
            color: lightgrey;
            text-shadow: 1px 0px 10px black;
        }
        #submit{
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
        #submit:hover{
            background-color: white;
            color: rgba(0, 0, 0, 0.7);
            transition: all 0.2s;
        }

        @media (max-width:900px){
            label{
                width: 80%;
            }

            #submit{
                width: 45%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <a id="back" href="/EDUCATION"><img src="assets/images/icons8-arrow-left-128.png" alt="" class="icon"><span>Back</span></a>
        <form action="" method="post">
            <h1>Password Recovery</h1>
            <label for=""><input type="text" name="" id="" placeholder="Username"><img src="assets/images/icons8-utilisateur-100.png" alt="" class="icon"></label>
            <label for=""><input type="text" name="" id="" placeholder="Email"><img src="assets/images/icons8-email-100.png" alt="" class="icon"></label>
            <label for=""><input type="date" name="" id="" title="birthday"><img src="assets/images/icons8-anniversaire-100.png" alt="" class="icon"></label>
            <button type="submit" id="submit">Check</button>
        </form>
    </div>
</body>
</html>