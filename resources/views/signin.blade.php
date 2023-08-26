<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="assets/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,500;0,900;1,800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">

    <title>Edusakha</title>
</head>
<body style="background: linear-gradient(165deg, #000 0%, #232323 100%);">
<section>
    <div class="container is-paddingless is-marginless">
        <div class="columns  is-marginless">
            <div class="column is-marginless is-paddingless">
                <img src="./assets/images/singup.png" alt="" srcset="" class="signupimg" style="box-shadow: 7px 0px 25px 7px #fa0035;">
                <div class="is-overlay has-text-centered" style="top: 45%;
                      right: 65%;">
                    <h2 class="has-text-white has-text-weight-bold is-size-3">Hello Friend</h2>
                    <p class="has-text-white">To keep connected with us with your information.</p>
                </div>
            </div>
            <div class="column is-flex-direction-column is-justify-content-center is-align-items-center">
                <div class="is-flex is-justify-content-center is-align-items-center">
                </div>
                <h1 class="has-text-centered is-size-4 is-block" style="font-weight: bold;font-size: 2em !important; color: #FFFFFF;margin-top: 2vh;margin-bottom: 7vh;">Sign In to Edusakha</h1>
                <div class="box cards is-centered">
                    <form method="post" onsubmit="/index">
                        @csrf
                    <div class="field">
                        <label class="label has-text-white">Username</label>
                        <div class="control">
                            <input class="input is-success" name="username" type="text" placeholder="Enter a username" value="{{old('username')}}">
                            <span class="has-text-danger">@error('username') {{$message}} @enderror</span>

                        </div>
                    </div>
                    <div class="field">
                        <label class="label has-text-white">Password</label>
                        <div class="control">
                            <input class="input is-danger" name="password" type="password" placeholder="Enter your password" value="{{old('password')}}">
                            <span class="has-text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                    </div>

                    <div class="field is-grouped is-flex-direction-column is-justify-content-center is-align-items-center">
                        <div class="control">
                            <button type="submit" class="button is-danger">Log In</button>
                            <a href="./signup" class="is-link is-block terms m-3">New User ? Register Here :) </a>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>
