<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CV Maker | Register</title>






    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <style>
        body {
            height: 100vh;
            background: rgb(249, 249, 249);
            background: radial-gradient(circle, rgba(249, 249, 249, 1) 0%, rgba(240, 232, 127, 1) 49%, rgba(246, 243, 132, 1) 100%);

        }

        .form-signin {
            max-width: 330px;
            padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>



</head>

<body class="d-flex align-items-center">



    <div class="w-100">
        <main class="form-signin w-100 m-auto bg-white shadow rounded">
            <form action="action/registerAction.php" method="post">
                <div class="d-flex gap-2 justify-content-center">
                    <img class="mb-4" src="logo.png" alt="" height="70">

                    <div>
                        <h1 class="h3 fw-normal my-1"><b>CV</b> Maker</h1>
                        <p class="m-0">Create your new account</p>

                    </div>
                </div>


                <div class="form-floating">
                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                    <label for="floatingInput"><i class="bi bi-person"></i> Full Name</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    <label for="floatingInput"><i class="bi bi-envelope"></i> Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="floatingPassword"><i class="bi bi-key"></i> Password</label>
                </div>


                <button class="btn btn-primary w-100 py-2" name="register" id="register" type="submit"><i class="bi bi-person-plus-fill"></i> Register
                </button>
                <div class="d-flex justify-content-between my-3">

                    <a href="forgot-password.php" class="text-decoration-none">Forgot Password ?</a>
                    <a href="login.php" class="text-decoration-none">Login</a>

                </div>

            </form>
        </main>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script> $(document).ready(function(){
$('#register').on('click',function(e){
    e.preventDefault();
    var email=$('#email').val();
    var name=$('#name').val();
    var password=$('#password').val();
    $.ajax({
        type: "post",
        url: "action/registerAction.php",
        data: {name:name,email:email,password:password},
        //dataType: "dataType",
        success: function (response) {
            if(response==1){
            //('#para').html('logging');
            window.location.replace('login.php');
            }else{
                //('#para').html('wrong');
                window.location.replace('index.php');
            }
        }
    });
});
    });
</script>



</body>

<html>