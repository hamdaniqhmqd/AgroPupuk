<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>

    .dalam-container .dalam-form {
        height: 60px; 
        width: 30%; 
        margin-top: -10px;
        margin: auto;
    }

    @media only screen and (max-width: 600px) {
        /* Kode CSS untuk layar mobile */
        .dalam-container .dalam-form {
            width: 50%;
            height: 50px;
        }
    }
</style>
<body>

    <div class="container-fluid position-fixed align-content-center bg-abu " style="height: 100dvh;">

        <div class="container text-center h-50 align-items-center">
            <div class="dalam-container">
                <h1 class="fw-bold" style="font-size: 45px; color:#224038;">SIGN IN</h1>
            </div>
            <div class="dalam-container">
                <p class="mt-2 fs-6 ">  Use Your Admin Email Password </p>
            </div>
            <div class="dalam-container">
                <div class="dalam-form">
                    <label for="exampleFormControlInput1" class="form-label text-start"></label>
                    <input type="email" class="form-control" style="height: 60px; font-size: 20px;" id="exampleFormControlInput1" placeholder="Email">
                </div>
            </div>
            <div class="dalam-container">
                <div class="mb-3 mt-3 dalam-form">
                    <label for="inputPassword5" class="form-label  text-start "></label>
                    <input type="password" id="inputPassword5" class="form-control" placeholder="Password" style="height: 60px; font-size: 20px;" aria-describedby="passwordHelpBlock">
                        <!-- <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </div> -->
                </div>
            </div>
            <div class="dalam-container mt-4 pt-3">
                <a class="mt-4 fs-6 text-decoration-none text-black-50  " href="#" > Forget Your Password? </a>
            </div>
            <div class="dalam-container mt-4">
                <input class="btn fs-5 py-2 px-4 " style="background-color: #224038; color:white;" type="submit" value="Log In">
            </div>
            
        </div>
        
    </div>
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>