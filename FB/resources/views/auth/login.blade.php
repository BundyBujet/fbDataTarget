<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- Normalize file -->
    <link rel="stylesheet" href="style/css/normalize.css" />
    <link rel="stylesheet" href="style/css/login_style.css">
    <title>login</title>
  </head>
  <body>
    <section id="login">
      <div class="login-cont">

        <div class="panner">
          <img src="style/image/skills-01.jpg" alt="avatar" />
          <p>FB Data Target</p>
        </div>
        <div class="frm_container">
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                 </span>
            @enderror
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="submit" value="Login" />
          </form>
          
          <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
          </a>
        </div>
      </div>
      </section>
    </body>
    </html>
    