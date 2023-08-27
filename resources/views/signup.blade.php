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
                <div class="column is-marginless is-paddingless is-relative">
                      <img src="./assets/images/singup.png" alt="" srcset="" class="signupimg" style="box-shadow: 7px 0px 25px 7px rgba(24, 227, 230, 1);">
                      <div class="is-overlay has-text-centered" style="top: 45%;
                      right: 25%;">
                          <h2 class="has-text-white has-text-weight-bold is-size-3">Welcome back</h2>
                          <p class="has-text-white">To keep connected with us with your information.</p>
                      </div>
                </div>
                <div class="column is-flex-direction-column is-justify-content-center is-align-items-center">
                    <h1 class="has-text-centered is-size-4 is-block" style="font-weight: bold;font-size: 2em !important; color: #FFFFFF;margin-top: 2vh;margin-bottom: 7vh;">Sign Up to Edusakha</h1>
                    <div class="box cards is-centered">
                        <form method="post" action="{{url('index')}}">
                            @csrf
                        <div class="field">
                            <label class="label has-text-white">Full Name</label>
                            <div class="control">
                              <input class="input" name="name" type="text" placeholder="Enter your name" value="{{old('name')}}">
                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                            </div>
                          </div>

                          <div class="field">
                            <label class="label has-text-white">Username</label>
                            <div class="control">
                              <input class="input is-success" name="username" type="text" placeholder="Enter your username" value="{{old('username')}}">
                                <span class="text-danger">@error('username') {{$message}} @enderror</span>
                            </div>

                          </div>

                          <div class="field">
                            <label class="label has-text-white">Email</label>
                            <div class="control">
                              <input class="input is-danger" type="email" name="email" placeholder="Enter your email" value="{{old('email')}}">
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            </div>

                          </div>

                          <div class="field">
                            <label class="label has-text-white">Password</label>
                            <div class="control">
                              <input class="input is-danger" name="password" type="email" placeholder="Enter your email" value="{{old('password')}}">
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            </div>
                          </div>
                          <div class="field">
                            <div class="control has-text-white">
                              By signing up, you agree to our <a href="" class="is-link terms">Terms of Use</a> and <a href="" class="is-link terms">Privacy Policy</a>
                            </div>
                          </div>

                          <div class="field">
                            <div class="control is-flex is-justify-content-center">
                              <button class="button has-text-weight-bold signup" type="submit">Sign Up</button>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
          </div>
        </section>


</body>
</html>
