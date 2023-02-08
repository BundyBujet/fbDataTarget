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
    <link rel="stylesheet" href="{{asset('style/css/normalize.css')}}" />
    <!-- google Icons -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link rel="stylesheet" href="{{asset('style/css/dataTable_style.css')}}" />
    <title>Data Table</title>
  </head>
  <body>
    <section id="data-tbl">
      <div class="tbl-cont">
        @isset($datas)
        @foreach ($datas as $data)
        <table>
          <thead class="black">
            <td>ID</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Location</td>
            <td>Work</td>
            <td>Relation</td>
            <td>Education</td>
            <td>Relegion</td>
            <td>Gender</td>
          </thead>
          <tbody>
            <tr class="white">
              <td>0123985478489</td>
              <td>Hossam Awad</td>
              <td>+201138457205</td>
              <td>Egypt, minofia-gov, minuf, gizaai</td>
              <td>Accountant</td>
              <td>Single</td>
              <td>Collage degree</td>
              <td>Muslim</td>
              <td>Male</td>
            </tr>
            <tr class="dark">
              <td>0123455668489</td>
              <td>Mohamed Awad</td>
              <td>+201234557205</td>
              <td>Egypt, minofia-gov, minuf, gizaai</td>
              <td>Student</td>
              <td>Single</td>
              <td>High School</td>
              <td>Muslim</td>
              <td>Male</td>
            </tr>
            <tr class="white">
              <td>012229100998489</td>
              <td>Mohamed Rashad</td>
              <td>+2012348981030</td>
              <td>Egypt, minofia-gov, minuf, gizaai</td>
              <td>Electric-Eng</td>
              <td>Maried</td>
              <td>Collage degree</td>
              <td>Muslim</td>
              <td>Male</td>
            </tr>
            <tr class="dark">
              <td>0002345478489</td>
              <td>Ali Seta</td>
              <td>+201235983702</td>
              <td>Egypt, minofia-gov, minuf, gizaai</td>
              <td>Accountant</td>
              <td>Single</td>
              <td>Collage degree</td>
              <td>Muslim</td>
              <td>Male</td>
            </tr>
            <tr class="white">
              <td>01239212333319</td>
              <td>Ahmed Mahdy</td>
              <td>+201098174639</td>
              <td>Egypt, minofia-gov, minuf, gizaai</td>
              <td>Accountant</td>
              <td>Single</td>
              <td>Collage degree</td>
              <td>Muslim</td>
              <td>Male</td>
            </tr>
            <tr class="dark">
              <td>0123985478489</td>
              <td>Hossam Awad</td>
              <td>+201138457205</td>
              <td>Egypt, minofia-gov, minuf, gizaai</td>
              <td>Accountant</td>
              <td>Single</td>
              <td>Collage degree</td>
              <td>Muslim</td>
              <td>Male</td>
            </tr>
            <tr class="white">
              <td>0123455668489</td>
              <td>Mohamed Awad</td>
              <td>+201234557205</td>
              <td>Egypt, minofia-gov, minuf, gizaai</td>
              <td>Student</td>
              <td>Single</td>
              <td>High School</td>
              <td>Muslim</td>
              <td>Male</td>
            </tr>
            <tr class="dark">
              <td>012229100998489</td>
              <td>Mohamed Rashad</td>
              <td>+2012348981030</td>
              <td>Egypt, minofia-gov, minuf, gizaai</td>
              <td>Electric-Eng</td>
              <td>Maried</td>
              <td>Collage degree</td>
              <td>Muslim</td>
              <td>Male</td>
            </tr>
            <tr class="white">
              <td>0002345478489</td>
              <td>Ali Seta</td>
              <td>+201235983702</td>
              <td>Egypt, minofia-gov, minuf, gizaai</td>
              <td>Accountant</td>
              <td>Single</td>
              <td>Collage degree</td>
              <td>Muslim</td>
              <td>Male</td>
            </tr>
          </tbody>
        </table>
        @endforeach
        @endisset
      </div>
      <button class="btn">Download Spreed sheet</button>
      <div class="mobile-nav">
        <ul>
          <li><span class="material-symbols-outlined"> <a href="{{route('home')}}">home</a> </span></li>
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
