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
    <title>Edusakha</title>
</head>
<body>
    <nav class="navbar is-flex is-align-items-center is-justify-content-space-between navbar-animated is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="">
            <img src="./assets/logo/mainlogo.png" alt="logo" style="object-fit: contain; background-size: cover;aspect-ratio: 3/2;width: 10em; margin-left: 1.5em !important;">
          </a>
        </div>
          <div>
              <a class="button signup hvr-sweep-to-right" href="signup">Sign Up</a>
              <a class="button signin hvr-grow" href="signin">Sign In</a>
          </div>
      </nav>
      <!-- Slider container -->
<div class="slider">
  <div class="slide">
    <img src="./assets/images/home-slider-1.jpg" alt="" />
  </div>
  <div class="slide">
    <img src="./assets/images/home-slider-2.jpg" alt="" />
  </div>
  <div class="slide">
    <img src="./assets/images/home-slider-3.jpg" alt="" />
  </div>

  <!-- Control buttons -->
  <button class="btn btn-next">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/></svg>
     </button>
  <button class="btn btn-prev">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"/></svg>
</button>
</div>
<div class="container page-2">
  <div class="container pagelowerdiv">
      <div class="columns is-flex is-align-items-center ">
        <div class="column is-flex-direction-column pl-4">
          <h1><span class="has-text-white has-text-weight-semibold">Looking for</span></h1>
        <div class="field has-addons" >
          <p class="control">
            <span class="select" >
              <select class="has-text-black has-text-weight-bold">
                <option selected > Choose event type</option>
                <option>£</option>
                <option>€</option>
              </select>
            </span>
          </p>
        </div>
        </div>
        <div class="column is-flex-direction-column">
          <h1><span class="has-text-white has-text-weight-semibold">Location</span></h1>
        <div class="field has-addons" style="width: auto;" >
          <p class="control">
            <span class="select" >
              <select style="width: auto;" class="has-text-black has-text-weight-bold">
                <option selected > Choose location</option>
                <option>£</option>
                <option>€</option>
              </select>
            </span>
          </p>
        </div>
        </div>
        <div class="column is-flex-direction-column">
          <h1><span class="has-text-white has-text-weight-semibold">When</span></h1>
        <div class="field has-addons">
          <p class="control has-background-white has-text-black p-1" style="border-radius: 5px;">
            <input type="datetime-local" name="" id="" class="select has-text-black has-text-weight-bold" style="border: none;">
          </p>
        </div>
        </div>
        <div class="column is-relative">
          <button class="button is-overlay" type="submit" style="right: 12px;top:4px
          "><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
          </button>
        </div>
      </div>
  </div>


      <section class="section">
        <div class="container">
          <div class="heading is-flex is-justify-content-space-between is-align-items-center">
            <h1 class="title has-text-white">Upcoming <span style="color: #f0466b;"> Events</span></h1>
            <div class="is-flex p-1">
              <div class="field has-addons mr-2" >
                <p class="control">
                  <span class="select" >
                    <select class="has-text-black has-text-weight-bold">
                      <option selected > Weekdays</option>
                      <option>£</option>
                      <option>€</option>
                    </select>
                  </span>
                </p>
              </div>
              <div class="field has-addons mr-2">
                <p class="control">
                  <span class="select" >
                    <select class="has-text-black has-text-weight-bold">
                      <option selected >Event type</option>
                      <option>£</option>
                      <option>€</option>
                    </select>
                  </span>
                </p>
              </div>
              <div class="field has-addons mr-2">
                <p class="control">
                  <span class="select">
                    <select class="has-text-black has-text-weight-bold">
                      <option selected >Any Category</option>
                      <option>£</option>
                      <option>€</option>
                    </select>
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

        <section class="section">
          <div class="container">
            <div class="columns is-multiline is-flex is-justify-content-center is-align-items-center">
              <div class="column is-one-third">
                <div class="card eventcard">
                  <div class="card-image">
                    <figure class="image">
                      <img src="./assets/images/eventimage-1.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="card-content">
                      <div class="media-content">
                        <p class="has-text-black is-6 has-text-weight-semibold">BestSelller Book Bootcamp -write, Market & Publish Your Book -Lucknow</p>
                      </div>
                  </div>
                  <div class="content p-5">
                      <p class="has-text-black is-6 is-light mt-1">BestSelller Book Bootcamp -write, Market & Publish Your Book -Lucknow</p>
                      <a href="#">#css</a> <a href="#">#responsive</a>
                      <br>
                      <time datetime="2016-1-1" style="color: #f0466b;">11:09 PM - 1 Jan 2016</time>
                      <p class="is-text is-light mt-1">ONLINE EVENT - Attend Anywhere</p>
                  </div>
                </div>
              </div>
              <div class="column is-one-third">
                <div class="card eventcard">
                  <div class="card-image">
                    <figure class="image">
                      <img src="./assets/images/eventimage-1.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="card-content">
                      <div class="media-content">
                        <p class="has-text-black is-6 has-text-weight-semibold">BestSelller Book Bootcamp -write, Market & Publish Your Book -Lucknow</p>
                      </div>
                  </div>
                  <div class="content p-5">
                      <p class="has-text-black is-6 is-light mt-1">BestSelller Book Bootcamp -write, Market & Publish Your Book -Lucknow</p>
                      <a href="#">#css</a> <a href="#">#responsive</a>
                      <br>
                      <time datetime="2016-1-1" style="color: #f0466b;">11:09 PM - 1 Jan 2016</time>
                      <p class="is-text is-light mt-1">ONLINE EVENT - Attend Anywhere</p>
                  </div>
                </div>
              </div>
              <div class="column is-one-third">
                <div class="card eventcard">
                  <div class="card-image">
                    <figure class="image">
                      <img src="./assets/images/eventimage-1.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="card-content">
                      <div class="media-content">
                        <p class="has-text-black is-6 has-text-weight-semibold">BestSelller Book Bootcamp -write, Market & Publish Your Book -Lucknow</p>
                      </div>
                  </div>
                  <div class="content p-5">
                      <p class="has-text-black is-6 is-light mt-1">BestSelller Book Bootcamp -write, Market & Publish Your Book -Lucknow</p>
                      <a href="#">#css</a> <a href="#">#responsive</a>
                      <br>
                      <time datetime="2016-1-1" style="color: #f0466b;">11:09 PM - 1 Jan 2016</time>
                      <p class="is-text is-light mt-1">ONLINE EVENT - Attend Anywhere</p>
                  </div>
                </div>
              </div>
              <div class="column is-one-third">
                <div class="card eventcard">
                  <div class="card-image">
                    <figure class="image">
                      <img src="./assets/images/eventimage-1.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="card-content">
                      <div class="media-content">
                        <p class="has-text-black is-6 has-text-weight-semibold">BestSelller Book Bootcamp -write, Market & Publish Your Book -Lucknow</p>
                      </div>
                  </div>
                  <div class="content p-5">
                      <p class="has-text-black is-6 is-light mt-1">BestSelller Book Bootcamp -write, Market & Publish Your Book -Lucknow</p>
                      <a href="#">#css</a> <a href="#">#responsive</a>
                      <br>
                      <time datetime="2016-1-1" style="color: #f0466b;">11:09 PM - 1 Jan 2016</time>
                      <p class="is-text is-light mt-1">ONLINE EVENT - Attend Anywhere</p>
                  </div>
                </div>
              </div>
              <div class="column is-one-third">
                <div class="card eventcard">
                  <div class="card-image">
                    <figure class="image">
                      <img src="./assets/images/eventimage-1.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="card-content">
                      <div class="media-content">
                        <p class="has-text-black is-6 has-text-weight-semibold">BestSelller Book Bootcamp -write, Market & Publish Your Book -Lucknow</p>
                      </div>
                  </div>
                  <div class="content p-5">
                      <p class="has-text-black is-6 is-light mt-1">BestSelller Book Bootcamp -write, Market & Publish Your Book -Lucknow</p>
                      <a href="#">#css</a> <a href="#">#responsive</a>
                      <br>
                      <time datetime="2016-1-1" style="color: #f0466b;">11:09 PM - 1 Jan 2016</time>
                      <p class="is-text is-light mt-1">ONLINE EVENT - Attend Anywhere</p>
                  </div>
                </div>
              </div>
              <div class="column is-one-third">
                <div class="card eventcard ">
                  <div class="card-image">
                    <figure class="image">
                      <img src="./assets/images/eventimage-1.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="card-content">
                      <div class="media-content">
                        <p class="has-text-black is-6 has-text-weight-semibold">BestSelller Book Bootcamp -write, Market & Publish Your Book -Lucknow</p>
                      </div>
                  </div>
                  <div class="content p-5">
                      <p class="has-text-black is-6 is-light mt-1">BestSelller Book Bootcamp -write, Market & Publish Your Book -Lucknow</p>
                      <a href="#">#css</a> <a href="#">#responsive</a>
                      <br>
                      <time datetime="2016-1-1" style="color: #f0466b;">11:09 PM - 1 Jan 2016</time>
                      <p class="is-text is-light mt-1">ONLINE EVENT - Attend Anywhere</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
        <div class="is-flex is-justify-content-center">
          <button class="button is-info mb-6" style="border: 0px; border-radius: 0px; background-color: #0d595a;">Load more...</button>
        </div>
</div>

      <div class="is-paddingless is-marginless is-fullwidth is-flex is-justify-content-space-between is-align-items-center columns" style="background:rgba(13, 220, 224, 0.783);">
        <div class="column is-two-fifths is-relative" style="height: 252px !important;">
          <img src="./assets/images/illus-1.png" class="is-overlay" style="top: -51px;" alt="" srcset="">
        </div>
        <div class="column">
          <h1 class="title has-text-white">Make your own Event</h1>
          <p class="subtitle has-text-white ">A pitch competition for student startups with game-changing ideas.</p>
        </div>
      </div>

      <section class="section py-20">
        <div class="container">
          <div class="pb-6 pb-10-desktop" style="border-bottom: 1px solid #DADFE9;">
            <div class="columns">
              <div class="column is-2 mb-6 mb-0-desktop">
                <a class="is-inline-block mb-5 title is-5 has-text-dark" href="#">
                  <img src="./assets/logo/mainlogo.png" alt="" style="height: 28px" width="auto">
                </a>
              </div>
              <div class="column">
                <ul class="is-flex is-justify-content-end">
                  <li class="ml-auto-desktop mr-6 mb-2 mb-0-desktop"><a class="has-text-white has-text-weight-semibold" href="#">About</a></li>
                  <li class="mr-6 mb-2 mb-0-desktop"><a class="has-text-light has-text-weight-semibold" href="#">Company</a></li>
                  <li class="mr-6 mb-2 mb-0-desktop"><a class="has-text-light has-text-weight-semibold" href="#">Services</a></li>
                  <li class="mr-6 mb-2 mb-0-desktop"><a class="has-text-light has-text-weight-semibold" href="#">Testimonials</a></li>
                </ul>
              </div>
            </div>
          </div>
          <p class="column has-text-grey-light mb-4 mb-0-tablet">All rights reserved &copy; Edusakha</p>

        </div>
      </section>
</body>

<script src="./assets/carousel.js"></script>
</html>
