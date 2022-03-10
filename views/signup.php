<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/signup.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
    <a id="back" href="/EDUCATION"><img src="assets/images/icons8-double-gauche-64.png" alt="" class="icon"><span>Back</span></a>
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
                <label for="username"><input type="text" name="username" id="username" placeholder="Your username (Eg: MisterMe)"></label>
            </div>
            <div class="group">
                <label for="email"><input type="email" name="email" placeholder="Your email (Eg: Me@me.me)"></label>
            </div>
            <div class="group">
                <label for="gender">
                <select name="gender">
                    <option value="male" style="color:tomato">Male</option>
                    <option value="female" style="color:tomato">Female</option>
                    <option value="other" style="color:tomato">none</option>
                </select>
            </label>
            </div>
            <div class="group">
                <label for="name"><input type="date" name="birth"></label>
            </div>
            <div class="group">
            <h5>At least 6 characters</h5>
                <label for="password1"><input type="password" id="password" name="password" placeholder="Your password"></label>
            </div>
            <div class="group">
                <label for="password2"><input type="password" name="cpassword" placeholder="Comfirm password"></label>
            </div>
            <button type="submit" id="submit">Sign Up</button>
        </form>
    </div>
</body>
<script>
    function check(variable,number){
        variable.addEventListener('keydown',function(){
            if (variable.value.length<number-1) {
                variable.style.color="red";
            }
            else {
                variable.style.color="white";
            }
        })
    }

    const username = document.getElementById('username');
    const password = document.getElementById('password');
    check(username,5);
    check(password,6);
</script>
</html>