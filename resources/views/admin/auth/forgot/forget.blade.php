<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">Forget</div>
        <div class="desc">Enter the correct username and password</div>
        <form action="">
            <div class="input-box">
                <input type="text" name="user" id="user" required />
                <label for="user" id="labeluser">Username</label>
                <i class="fa fa-user" id="user_icon"></i>
            </div>
            <div class="input-box">
                <input type="password" name="pass" id="pass" required />
                <label for="pass" id="labelpass">Password</label>
                <i class="fa fa-eye-slash" id="pass_icon"></i>
            </div>
            <div class="forget">
                <label>
                    <input type="checkbox" id="checkbox"/> Remember me
                </label>
                <a href="#">Forget Password</a>
            </div>
            <div class="input-box button">
                <input id="button" type="button" value="Submit" class="" required />
            </div>
            <div class="register">
                <span class="text">Don't have an account? </span><a href="#" class="link">Register</a>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
