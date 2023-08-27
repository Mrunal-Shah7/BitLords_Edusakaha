<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="./node_modules/hover.css/css/hover.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,500;0,900;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="assets\images\favicon.png" type="image/x-icon">
<style>
    .registeration-card{
    border-radius: 10%;
    background: rgba( 255, 255, 255, 0.05 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 20px );
-webkit-backdrop-filter: blur( 20px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
</style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="navbar is-flex is-align-items-center is-justify-content-space-between navbar-animated is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="">
        <img src="./assets/logo/mainlogo.png" alt="logo" style="object-fit: contain; background-size: cover;aspect-ratio: 3/2;width: 10em;">
      </a>
    </div> 
  </nav>
    <div style="height: 100vh; width: 100vw;" class="is-marginless is-paddingless">
        <div class="columns is-flex is-justify-content-center is-align-items-center is-fullwidth is-fullheight is-overlay">
            <!-- <div class="column is-one-quarter"></div> -->
            <div class="column is-half">
                <div class="registeration-card p-3" >
                <div> <h2 class="has-text-centered is-size-1 has-text-weight-bold"> Registration</h2><br></div>
        
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                      <input class="input" type="text" placeholder="Enter your name">
                    </div>
                  </div>
        
                  <div class="field">
                    <label class="label">Username</label>
                    <div class="control">
                      <input class="input is-success" type="text" placeholder="Enter your username">
                  <div class="field">
                    <label class="label">Email</label>
                    <div class="control ">
                      <input class="input is-danger" type="email" placeholder="Enter your emal" >
                      
                        <i class="fas fa-exclamation-triangle"></i>
                      </span>
                    </div>
                    <p class="help is-danger">This email is invalid</p>
                  </div>
        
        
                  </div>
                  </div>
                  <div class="column  is-one-quarter"></div>
                  <div class=" is-flex is-justify-content-space-between">
                  <button class="button is-info is-outlined">Submit</button>
                  <button class="button is-info is-outlined">Cancel</button>
                  </div>
        
            </div>
        
        </div>
    </div>
    
</body>


