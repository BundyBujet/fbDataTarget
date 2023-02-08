<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap"
      
    />
    <!-- Normalize file -->
    {{-- <link rel="stylesheet" href="style/css/normalize.css" /> --}}
    <link rel="stylesheet" href="{{asset('style/css/normalize.css'  )}}" />
    <!-- google Icons -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    {{-- <link rel="stylesheet" href="style/css/dash_style.css" /> --}}
    <link rel="stylesheet" href="{{asset('style/css/dash_style.css'  )}}" />
    <title>Dashboard</title>
  </head>
  <body>
    <section id="dash">
      <div class="dash-cont">
        <div class="point-cont">
          <div class="point-head">
            <p>FB-Data Target</p>
            <span class="material-symbols-outlined"> add </span>
          </div>
          <div class="point-body">
            <h3>Points</h3>
            <h2 class="Points">{{auth()->user()->points}}</h2>
          </div>
        </div>
        <div class="dash-action">
          <button class="extract btn"><a href="{{route('user.getdata')}}">Extract Data</a></button>
          <div class="upload-file">
            <ul>
              <li class="id">IDS</li>
              <li class="phone">Phones</li>
            </ul>
            <label class="btn" for="upload">Upload File</label>
            <input type="file" name="upload" id="upload" />
          </div>
        </div>
      </div>
      <div class="mobile-nav">
        <ul>
          <li><span class="material-symbols-outlined"><a href="{{route('home')}}">home</a>  </span></li>
          <li><span class="material-symbols-outlined"> chat </span></li>
          <li><span class="material-symbols-outlined"> <a class="dropdown-item" href="{{ route('logout') }}">logout</a> </span></li>
          <li>
            <span class="material-symbols-outlined">  <a href="{{route('user.editprofile')}}">edit profile / account_circle</a>  </span>
          </li>
        </ul>
      </div>
      <div class="dsktop-nav">
        <div class="container">
          <img src="{{asset('images/'.auth()->user()->image  )}}" alt="avatar" />
          <ul>
            <li><a href="{{route('home')}}">home</a></li>
            <li>Contact</li>
            <li>Pricing</li>
            <li>   
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form>
           </li>
          </ul>
          <span class="material-symbols-outlined"> <a href="{{route('user.editprofile')}}">edit profile / account_circle</a> </span>
        </div>
      </div>
    </section>
  </body>
</html>
