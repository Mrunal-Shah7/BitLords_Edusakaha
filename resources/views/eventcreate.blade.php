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
  <title>Edusakha | Create Event</title>
</head>
<body>
  <nav class="navbar is-flex is-align-items-center is-justify-content-space-between navbar-animated is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="./index">
        <img src="./assets/logo/mainlogo.png" alt="logo" style="width: 120px;margin-left: 10px;height: 50px;">
      </a>
    </div>
  </nav>
  <div class="container is-large" style="margin-top: 6em;">
    <div class="columns is-fullheight is-fullwidth">
    <div class="column is-primary is-fullheight is-fullwidth">
    </div>
    <div class="column is-three-quarters is-danger is-fullheight is-fullwidth">
      <h1 class="title">Create an event</h1>
      <div class="field">
          <form method="post">
              @csrf
        <label  class="label">Event Title</label>
        <div class="control">
          <input has-text-black class="input has-text-black" name="title" type="text" placeholder="Enter event title">
        </div>
      </div>
      <div class="field">
        <label class="label">Enter Venue</label>
        <div class="control">
          <input has-text-black name="venue" class="input has-text-black is-success" type="text" placeholder="Enter address" >
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <div class="field">
            <label class="label">Start Time</label>
            <div class="control">
              <input has-text-black name="s_time" class="input has-text-black is-danger" type="time" placeholder="Enter start time">
            </div>
          </div>
        </div>
        <div class="column">
          <div class="field">
            <label class="label">End Time</label>
            <div class="control">
              <input has-text-black name="e_time" class="input has-text-black is-danger" type="time" placeholder="Enter end time">
            </div>

          </div>
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <div class="field">
            <label class="label">Start Date</label>
            <div class="control">
              <input has-text-black name="s_date" class="input has-text-black is-danger" type="date" placeholder="Enter start date">
            </div>

          </div>
        </div>
        <div class="column">
          <div class="field">
            <label class="label">End date</label>
            <div class="control">
              <input has-text-black name="e_date" class="input has-text-black is-danger has-text-black" type="date" placeholder="Enter end date">
            </div>
          </div>
        </div>
      </div>
      <h1 class="title">Event Description</h1>
      <div class="field">
        <div class="control">
          <textarea name="description" class="textarea" placeholder=""></textarea>
        </div>
      </div>
      <div class="field">
        <label class="label">Event image</label>
        <div class="control">
          <input type="file" name="image" accept=".jpg, .jpeg, .png" / class="has-text-black " >
        </div>
      </div>
      <div class="field is-grouped">
        <div class="control">
          <button class="button" type="submit">Submit</button>
        </div>
        <div class="control">
          <button class="button  is-light">Cancel</button>
        </div>
      </div>
    </form>
    </div>
    </div>
    <div class="column is-fullheight is-fullwidth">
    </div>
    </div>
  </div>
</div>
</body>
</html>
