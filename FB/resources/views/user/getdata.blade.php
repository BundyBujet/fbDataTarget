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
    {{-- <link rel="stylesheet" href="style/css/normalize.css" /> --}}
    <link rel="stylesheet" href="{{asset('style/css/normalize.css'  )}}" />
    <!-- google Icons -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    {{-- <link rel="stylesheet" href="style/css/dataForm_style.css" /> --}}
    <link rel="stylesheet" href="{{asset('style/css/dataForm_style.css'  )}}" />
    <title>Data Form</title>
  </head>
  <body>
    <section id="data-frm">
      <div class="frm-cont">
        @if (session('message'))
        {{session('message')}}    
        @endif
        @if (session('messg'))
            {{session('messg')}}    
        @endif
        @if (session('status'))
            {{session('status')}}    
        @endif
        <form action="{{route('find.data',['id'=>auth()->user()->id])}}" method="post">
            @csrf
          <div class="region-slct">
            <label for="region">Region</label>
            <select name="table" id="region">
              <option value="selectdata">selectdata</option>
            {<option value="canda">canda</option> 
            <option value="data">data</option>
            </select>
          </div>
          <div class="id-slct">
            <label for="id">Id</label>
            <input type="text" name="id" id="id" placeholder="ID" />
          </div>
          <div class="name-slct">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" />
          </div>
          <div class="job-slct">
            <label for="job">Job</label>
            <input type="text" name="job" id="job" placeholder="Job" />
          </div>
          <div class="edu-slct">
            <label for="education">Education</label>
            <input
              type="text"
              name="education"
              id="education"
              placeholder="Education"
            />
          </div>
          <div class="loc-slct">
            <label for="location">Location</label>
            <input
              type="text"
              name="location"
              id="location"
              placeholder="Location"
            />
          </div>
          <div class="home-slct">
            <label for="home">Home</label>
            <input type="text" name="home" id="home" placeholder="Home Town" />
          </div>
          <div class="reltion-slct">
            <label for="relation">Relationship</label>
            <input
              type="text"
              name="relation"
              id="relation"
              placeholder="Relationship"
            />
          </div>
          <div class="gendr-slct">
            <label for="gender">Region</label>
            <select name="gender" id="gender">
              <option value="male">Male</option>
              <option value="fmale">Female</option>
              <option value="Others">Others</option>
            </select>
          </div>
          <div class="relegion-slct">
            <label for="relegion">Relegion</label>
            <select name="relegion" id="relegion">
              <option value="christ">Muslim</option>
              <option value="christ">Christ</option>
              <option value="hindu">Hindu</option>
            </select>
          </div>
          <div class="lmt-slct">
            <label for="limit">Limit</label>
            <input type="number" name="limit" id="limit" placeholder="Limit" />
          </div>
          <input type="submit" value="Target" />
        </form>
      </div>
      <div class="mobile-nav">
        <ul>
          <li><span class="material-symbols-outlined"> {{route('home')}}">home</a> </span></li>
          <li><span class="material-symbols-outlined"> chat </span></li>
          <li>
            <span class="material-symbols-outlined"> <a href="{{route('user.editprofile')}}">edit profile / account_circle</a> </span>
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
          </ul>
          <span class="material-symbols-outlined"> <a href="{{route('user.editprofile')}}">edit profile / account_circle</a> </span>
        </div>
      </div>
    </section>
  </body>
</html>
