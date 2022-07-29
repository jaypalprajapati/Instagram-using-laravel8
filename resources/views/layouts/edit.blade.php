<!-- Image and text -->
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
.right{float:right;}
svg{height: 15px;}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
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
.right1{margin-left: 73%;}
* {
  box-sizing: border-box;
}

.site-navigation {
  background-color: #2DAFE8;
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
  color: #fff;
/*   position: relative; */
}

.site-navigation ul li a:hover {
  background-color: #68cdfa;
}

.menu li > a:not(:only-child):after {
       color: #fff;
       content: ' ▾';
    }

/*Sub-Menu Dropdowns*/
.site-navigation ul li.sub-menu > ul {
  display:none;
  position:absolute;
  flex-direction:column;
  width: 250px;
  background-color: #2DAFE8;
}

.site-navigation ul li:hover > ul {
  display: flex;
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
  
   ul.menu  {
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

</style>
<script>document.addEventListener('DOMContentLoaded', function() {
    mobileMenu();
});


function mobileMenu() {

	var navbutton =  document.querySelector('.nav-toggle');

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
}; </script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/v5-font-face.min.css" integrity="sha512-wVffp1z2cYYhxt8nhif5UsMu415VRqX2CkMeWg5lYyrcpFBLfoMQ6ngVSJG8BumKBl83wf2bMRDwVmTgfoDovQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- style="padding-left:90% !important;" -->


        </body>
</html>