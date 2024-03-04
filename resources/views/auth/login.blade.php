<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>T-Sync</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
        <form method="POST" action="{{ route('login') }}">
            @csrf
              <div class="logo">
                <img src="./img/logo.png" />
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="/register" class="toggle">Sign up</a>
              </div>


              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email')"
                    minlength="4"
                    class="input-field"
                    autocomplete="username"
                    required
                  />
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    id="password"
                    name="password"
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="current-password"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Log In" class="sign-btn" />



                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
        </form>

          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="./img/Cimage1.png" class="image img-1 show" alt="" />
              <img src="./img/Cimage2.png" class="image img-2" alt="" />
              <img src="./img/Cimage3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Choose your on adventure</h2>
                  <h2>Customize as you like</h2>
                  <h2>This goal is on track.</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="app.js"></script>
  </body>
</html>
