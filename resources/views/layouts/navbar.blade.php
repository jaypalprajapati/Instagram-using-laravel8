<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/v5-font-face.min.css" integrity="sha512-wVffp1z2cYYhxt8nhif5UsMu415VRqX2CkMeWg5lYyrcpFBLfoMQ6ngVSJG8BumKBl83wf2bMRDwVmTgfoDovQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $("document").ready(function() {
    setTimeout(function() {
      $("#msg").remove();
    }, 2000); // 2 secs
  });
</script>
<style>
  .bg-custom-1 {
    background-color: #85144b;
  }

  .bg-custom-2 {
    background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
  }

  .right {
    float: right;
  }

  svg {
    height: 15px;
  }

  #myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 15px;
    border: none;
    outline: none;
    background-color: red;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
  }

  #myBtn:hover {
    background-color: #555;
  }

  .right1 {
    margin-left: 73%;
  }

  * {
    box-sizing: border-box;
  }

  .site-navigation {
    background-color: black;
    position: fixed;
    z-index: 1 !important;
    width: 100%;
  }

  .site-navigation ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
  }

  .site-navigation ul li {
    flex: 1;
  }

  .site-navigation ul li a {
    display: block;
    padding: 20px 0;
    text-decoration: none;
    text-transform: uppercase;
    text-align: center;
    color: white;
    /*   position: relative; */
  }

  .site-navigation ul li a:hover {
    background-color: #FCAF45;
  }

  .menu li>a:not(:only-child):after {
    color: #fff;
    content: ' ▾';
  }

  /*Sub-Menu Dropdowns*/
  .site-navigation ul li.sub-menu>ul {
    display: none;
    position: absolute;
    flex-direction: column;
    width: 250px;
    color: black;
    background-color: burlywood;
  }

  .site-navigation ul li:hover>ul {
    display: flex;
    color: black;
  }

  /*Nav-Toggle */
  .nav-toggle {
    cursor: pointer;
    display: none;
    float: right;
  }

  .bar {
    display: block;
    width: 35px;
    height: 4px;
    background-color: #fff;
    margin: 6px 0;
    transition: 0.4s;
  }

  .nav-toggle.open .bar1 {
    transform: rotate(-45deg) translate(-6px, 6px);
  }

  .nav-toggle.open .bar2 {
    opacity: 0;
  }

  .nav-toggle.open .bar3 {
    transform: rotate(45deg) translate(-8px, -8px);
  }

  @media (max-width: 991px) {
    .nav-toggle {
      display: block;
      padding: 10px 10px 10px 0px;
    }

    .site-navigation {
      display: block;
    }

    ul.menu {
      display: none;
    }

    .site-navigation ul.open {
      display: flex;
      flex-direction: column;
      margin-top: 75px;
    }

    /*.site-navigation ul li.sub-menu > ul {
    position: relative;
    display: block;
    margin-top: 0px;
    width: 100%;
  }*/
  }
  svg{
    height: 80px;
  }
  
</style>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    mobileMenu();
  });

  function mobileMenu() {
    var navbutton = document.querySelector('.nav-toggle');
    navbutton.onclick = function() {
      var menu = document.querySelector('.menu');
      if (menu.className == 'menu') {
        menu.className += ' open';
        navbutton.className += ' open';
      } else {
        menu.className = 'menu';
        navbutton.className = 'nav-toggle';
      }
    }
  };
</script>
<!-- style="padding-left:90% !important;" -->
<nav class="site-navigation">
  <div class="container">
    <div class="row">
      <ul class="menu">
        <!-- <li><a class="navbar-brand" href="post" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg><img width="120" height="30" src="https://www.onlinepalette.com/wp-content/uploads/2019/12/instagram-logo-1-1024x366.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.onlinepalette.com/wp-content/uploads/2019/12/instagram-logo-1-1024x366.png 1024w, https://www.onlinepalette.com/wp-content/uploads/2019/12/instagram-logo-1-300x107.png 300w, https://www.onlinepalette.com/wp-content/uploads/2019/12/instagram-logo-1-768x275.png 768w, https://www.onlinepalette.com/wp-content/uploads/2019/12/instagram-logo-1.png 1200w" sizes="(max-width: 980px) 100vw, 980px"/> </a></li> -->
        <li><a class="navbar-brand" href="post"> <img width="120" height="30" src="https://www.onlinepalette.com/wp-content/uploads/2019/12/instagram-old-logo.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.onlinepalette.com/wp-content/uploads/2019/12/instagram-old-logo.png 919w, https://www.onlinepalette.com/wp-content/uploads/2019/12/instagram-old-logo-300x104.png 300w, https://www.onlinepalette.com/wp-content/uploads/2019/12/instagram-old-logo-768x266.png 768w" sizes="(max-width: 919px) 100vw, 919px" />
          </a>
        </li>
        <li><a class="navbar-brand" href="post/create" title="New Post"> <i class="fa fa-upload" aria-hidden="true"></i> </a></li>
        <!-- <li><a href="#Suggestions" title="All User"><i class="fa fa-users" aria-hidden="true"></i></a></li> -->
        <li><a href="/Friend_requests" title="Request User"><i class="fa fa-user-plus" aria-hidden="true"></i><p class="badge"></p></a></li>
        <!-- <li><a href="#friends" title="Following User"><i class="fas fa-user-friends"></i></a></li> -->
        @if(auth()->user()->type ==' 1')
        <li><a href="/postshow" title="Following User"> Accept post</a></li>
        @endif
        <li style="margin-top: 12px;">
          <form class="d-flex input-group w-auto" action="{{ route('search')}}" method="get">@csrf
            <input type="search"name="search" class="form-control rounded" style="opacity: 0.8;"; placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
            <button type="submit"  ><i class="fas fa-search"></i></button> 
            </span>
          </form>
        </li>
        <li class="sub-menu"><a href="#"> {{ Auth::user()->name }}</a>
          <ul>
            <li><a href="{{route('admin/editprofile')}}">Edit Profile</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>
        </li>
       
      </ul>
      <div class="nav-toggle">
        <span class="bar bar1"></span>
        <span class="bar bar2"></span>
        <span class="bar bar3"></span>
      </div>
    </div>
  </div>
</nav>
<main class="py-4">
  <br>
  <hr>
  <div id="msg">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Success!</strong> {{ $message }}
    </div>
    @endif
  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top"> <i class="fa-solid fa-arrow-up"></i></button>
  <script>
    var mybutton = document.getElementById("myBtn");
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $("document").ready(function() {
      setTimeout(function() {
        $("#msg").remove();
      }, 2000); // 2 secs
    });
  </script>
  @yield('content')
</main>
</body>

</html>