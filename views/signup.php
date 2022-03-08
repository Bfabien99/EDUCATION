<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            color: white;
        }
        .top{
            background-color: rgba( 255, 255, 255, 0.68 );
            width: 40%;
        }
        .top h1{
            background-color: #AAA;
            text-align: center;
        }
        .box{
            color: rgba( 0, 0, 0, 1);
            padding: 00.5rem;
        }
        form{
            border: 1px solid rgba( 255, 255, 255, 0.68 );
            width: 45%;
            display: flex;
            flex-direction: column;
            gap: 1em;
            justify-content: center;
            align-items: center;
            padding: 1em 0;
            text-shadow: 0px 0px 5px black;
        }

        form .group{
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 0.5em;
            width: 80%;
            justify-content: center;
            text-align: center;
        }

        form .group input,form .group select{
            border: none;
            width: 60%;
            height: 40px;
            text-align: center;
            border-bottom: 2px solid white;
            font-size: 1.3rem;
            outline: none;
            background-color: transparent;
            color: white;
        }

        form .group input::placeholder{
            color: #eee;
            text-shadow: 0px 0px 5px black;
        }

        form .group input:focus{
            border-bottom: 2px solid tomato;
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
            border: 2px solid tomato;
            color: tomato;
            transition: all 0.2s;
        }

        @media (max-width:1250px){
            .container{
                flex-direction: column;
            }
            form{
                padding: 0.5em;
                width: 70%;
            }
            form.group{
                width: 90%;
            }
            form .group input,form .group select{
            width: 80%;
            }
            .top{
                width: 70%;
            }
            #submit{
                width: 45%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="top">
            <h1>Welcome to .Learn</h1>
            <div class="box">
                <p>Join our community with more than 1 million users</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, asperiores tempora veritatis similique exercitationem illo quos distinctio voluptatum quo, aspernatur ullam. Quos nostrum fugiat officiis quisquam, praesentium repellat ad quam reprehenderit rerum quas corporis dolore unde iure quaerat vel facilis sunt inventore aspernatur. Nulla accusantium suscipit expedita et earum quae. Deserunt, eaque officia. Excepturi fuga obcaecati repellat, suscipit dolor, ratione eaque quod omnis reprehenderit, unde ad molestiae officiis. Consequatur vero inventore odio corrupti omnis. Saepe eveniet tempore reprehenderit id. Odio repellat dolorum sed ipsa saepe nam velit magni quisquam nulla vel possimus itaque, odit, quaerat doloremque voluptate non. Quidem, veniam?</p>
            </div>
            
        </div>
        <form action="" method="post" autocomplete="off">
            <h1>Sign Up Form</h1>
            <div class="group">
                <label for="name"><input type="text" name="name" placeholder="Your name (Eg: Mister Me)"></label>
            </div>
            <div class="group">
                <h5>At least 5 characters</h5>
                <label for="username"><input type="text" name="username" placeholder="Your username (Eg: MisterMe)"></label>
            </div>
            <div class="group">
                <h5>A valid email please</h5>
                <label for="email"><input type="email" name="email" placeholder="Your email (Eg: Me@me.me)"></label>
            </div>
            <div class="group">
                <label for="gender">
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">none</option>
                </select>
            </label>
            </div>
            <div class="group">
                <label for="name"><input type="date" name="birth"></label>
            </div>
            <div class="group">
            <h5>At least 6 characters</h5>
                <label for="password1"><input type="password" name="password" placeholder="Your password"></label>
            </div>
            <div class="group">
                <label for="password2"><input type="password" name="cpassword" placeholder="Comfirm password"></label>
            </div>
            <button type="submit" id="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>