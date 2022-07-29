<style>
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body {
font-family: -apple-system, system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu,
	Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
background: #fafafa;
}

.navbar {
position: fixed;
z-index: 100000;
display: flex;
align-items: center;
justify-content: center;
background: rgb(255, 255, 255);
width: 100%;
border: 1px solid rgb(218, 217, 217);
}

.navbar .container {
/* background-color: #555; */
padding: 15px 0;
width: 75%;
display: flex;
align-items: center;
justify-content: space-between;
/* margin: 0 auto; */
}

.container .logo {
display: inline-block;
cursor: pointer;
}

.searchbar {
width: -10%;
text-align: end;
}

.searchbar input {
background-color: #fafafa;
padding: 5px;
text-indent: 21px;
outline: none;
border: 1px solid rgb(218, 217, 217);
border-radius: 2px;
color: rgb(77, 77, 77);
}

.searchbar img {
position: absolute;
margin-left: -10.5rem;
margin-top: 0.25rem;
}

.searchbar input::placeholder {
font-weight: lighter;
color: rgb(172, 172, 172);
}

.nav-links {
font-weight: lighter;
color: rgb(172, 172, 172);
/* background: #333 ; */
}

.nav-group .nav-item {
list-style-type: none;
margin: 0 8px;
}

.nav-group .nav-item a {
font-size: 22px;
display: block;
color: black;
}

.nav-group {
display: flex;
align-items: center;
justify-content: center;
}

.action .profile {
position: relative;
width: 25px;
height: 25px;
border-radius: 50%;
overflow: hidden;
cursor: pointer;
display: flex;
align-items: center;
justify-content: center;
}

.action .profile img {
width: 100%;
height: 100%;
object-fit: cover;
}

main {
width: 100%;
display: flex;
align-items: center;
justify-content: center;
}

main .container {
position: relative;
margin-top: 60px;
width: 75%;
display: flex;
align-items: flex-start;
justify-content: space-between;
/* background: #ddd; */
}

.col-9 {
width: 65%;
margin-top: 30px;
}

.statuses {
margin-bottom: 30px;
width: 100%;
background-color: #fff;
display: flex;
align-items: center;
justify-content: start;
padding: 20px 0;
border-radius: 2px;
border: 1px solid rgb(218, 217, 217);
overflow: auto;
}

.statuses .status {
display: inline-block;
border-radius: 50%;
overflow: auto;
width: 70px;
height: 70px;
min-width: 70px;
min-height: 70px;
background: linear-gradient(to right, red, orange);
padding: 2px;
margin-left: 15px;
cursor: pointer;
}

.statuses .status .image {
position: relative;
width: 100%;
height: 100%;
border-radius: 50%;
overflow: hidden;
cursor: pointer;
display: flex;
align-items: center;
justify-content: center;
border: 2px solid white;
}

.statuses .status img {
width: 100%;
height: 100%;
object-fit: cover;
}

.col-3 {
width: 33%;
position: -webkit-sticky;
position: sticky;
top: 90px;
}

.col-3 h4 {
color: rgb(100, 100, 100);
}

.col-3 .card {
margin-bottom: 20px;
position: relative;
width: 100%;
/* min-height: 400px; */
display: inline-block;
}

.col-3 .card .top {
padding: 10px 0px;
display: flex;
justify-content: space-between;
align-items: center;
}

.col-3 .card .top a {
color: #1d92ff;
}

.col-3 .card .bottom {
padding: 10px 20px;
}

.col-3 .card .top .userDetails {
width: 100%;
display: flex;
align-items: center;
}

.col-3 .card .top .userDetails h3 {
font-size: 16px;
color: #4d4d4f;
font-weight: 500;
line-height: 1em;
}

.col-3 .card .top .userDetails h3 span {
font-size: 0.75em;
}

.col-3 .card .top .userDetails h3 span {
font-size: 0.75em;
}

.col-9 .card {
margin-bottom: 20px;
position: relative;
width: 100%;
/* min-height: 400px; */
display: inline-block;
border: 1px solid rgba(7, 7, 7, 0.24);
}

.col-9 .card .top {
padding: 10px 20px;
display: flex;
justify-content: space-between;
align-items: center;
}

.col-9 .card .bottom {
padding: 10px 20px;
}

.col-9 .card .top .userDetails {
width: 100%;
display: flex;
align-items: center;
}

.profilepic {
display: inline-block;
cursor: pointer;
}

.profilepic .profile_img {
display: flex;
align-items: center;
justify-content: center;
border-radius: 50%;
overflow: hidden;
width: 30px;
height: 30px;
background: linear-gradient(to right, red, orange);
padding: 2px;
margin-right: 8px;
cursor: pointer;
}

.profilepic .profile_img .image {
position: relative;
width: 100%;
height: 100%;
border-radius: 50%;
overflow: hidden;
cursor: pointer;
display: flex;
align-items: center;
justify-content: center;
border: 2px solid white;
}

.profilepic .profile_img img {
width: 100%;
height: 100%;
object-fit: cover;
}

.cover {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
object-fit: cover;
}

.col-9 .card .top .userDetails h3 {
/* width: 100%; */
font-size: 16px;
color: #4d4d4f;
font-weight: 500;
line-height: 1em;
}

.col-9 .card .top .userDetails h3 span {
font-size: 0.75em;
}

.col-9 .card .top .userDetails h3 span {
font-size: 0.75em;
}

.dot {
transform: scale(0.6);
cursor: pointer;
}

.imgBx {
position: relative;
width: 100%;
min-height: 600px;
margin: 10px 0 15px;
}

.actionBtns {
display: flex;
justify-content: space-between;
align-items: center;
}

.actionBtns svg {
cursor: pointer;
}

.actionBtns .left svg {
margin-right: 8px;
}

.likes {
font-weight: 500;
margin-top: 5px;
font-size: 14px;
color: #4d4d4f;
}

.message {
font-weight: 400;
margin-top: 5px;
font-size: 14px;
color: #777;
line-height: 1.5em;
}

.message b {
color: #262626;
}

.message span {
cursor: pointer;
color: #1d92ff;
}

.comments {
margin-top: 10px;
font-weight: 400;
color: #999;
}

.addComments {
display: flex;
align-items: center;
margin-top: 20px;
border-top: 1px solid #ddd;
padding: 10px 0;
}

.addComments a {
color: #1d92ffcb;
font-weight: 500;
}

.addComments .reaction {
position: relative;
font-size: 1.3rem;
margin-right: 10px;
color: rgb(88, 88, 88);
}

input.text {
width: 100%;
border: none;
outline: none;
font-weight: 400;
font-size: 14px;
color: #262626;
background: none;
}

input.text::placeholder {
color: #777;
}

.postTime {
margin-top: 8px;
font-weight: lighter;
color: rgb(163, 163, 163);
font-size: 12px;
text-transform: uppercase;
}

a {
text-decoration: none;
}

.hidden {
display: none;
}

@media screen and (max-width: 1000px) {
.col-9 {
	width: 100%;
	background: #fafafa;
}

.col-3 {
	display: none;
}
}

@media screen and (max-width: 600px) {
.container {
	width: 100% !important;
}

.navbar .container {
	padding: 15px 10px !important;
}

.col-9 {
	margin-top: 4px;
	min-width: 100%;
}

.statuses {
	margin-bottom: 0px;
}

.col-9 .card {
	margin-bottom: 0px;
	width: 100%;
	border: none;
}

.imgBx {
	position: relative;
	width: 100%;
	min-height: 400px;
	margin: 10px 0 15px;
}

.searchbar {
	display: none;
}
}

.footer .footer-section {
margin-left: 0.5rem;
color: #999999;
font-size: 14px;
font-family: sans-serif;
}

.footer a:hover {
color: #ff0000;
}

</style>	
<main>
        <div class="container">
            <div class="col-9">
<div class="card">
                    <div class="top">
                        <div class="userDetails">
                            <div class="profilepic">
                                <div class="profile_img">
                                    <div class="image">
                                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20220609093241/g3-200x200.png" alt="img9">
                                    </div>
                                </div>
                            </div>
                            <h3>Piyush Agarwal<br>
                                <span>Delhi, India</span>
                            </h3>
                        </div>
                        <div>
                            <span class="dot">
								<i class="fas fa-ellipsis-h"></i>
							</span>
                        </div>
                    </div>
                    <div class="imgBx">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20220609090119/gfg2-300x297.jpeg" alt="post-1" class="cover">
                    </div>
                    <div class="bottom">
                        <div class="actionBtns">
                            <div class="left">
                                <span class="heart" onclick="addlike()">
									<span>
										<svg aria-label="Like"
											color="#262626"
											fill="#262626"
											height="24"
											role="img"
											viewBox="0 0 48 48"
											width="24">
								<!-- Coordinate path -->

											<path
												d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5
												0 6.8-5.9 11-11.5 16S25 41.3 24
												41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3
												11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1
												4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3
												2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5
												0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6
												3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6
												16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9
												6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0
												1.1-.2 1.6-.5 1-.6 2.8-2.2
												7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7
												29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
											</path>
										</svg>
									</span>
                                </span>
                                <svg aria-label="Comment" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
									<path clip-rule="evenodd"
											
							<!-- Coordinate path -->
						
										d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1
										2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11
										47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2
										1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2
										1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8
										1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7
										3.5 24 3.5 44.5 12.7 44.5 24z"
										fill-rule="evenodd"></path>
								</svg>
                                <svg aria-label="Share Post" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
									<path
										d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3
										3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6
										1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2
										6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4
										8.6 23.9 39.7z">
									</path>
								</svg>
                            </div>
                            <div class="right">
                                <svg aria-label="Save" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
							<!-- Coordinate path -->

									<path
										d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6
										47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7
										3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4
										1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3
										2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z">
									</path>
								</svg>
                            </div>
                        </div>

                        <!-- Adding number of like and name of people -->

                        <a href="#">
                            <p class="likes">119 likes</p>

                        </a>
                        <a href="#">
                            <p class="message">
                                <b>Piyush Agarwal</b>
                            </p>

                        </a>
                        <a href="#">
                            <h4 class="comments">View all 20 comments</h4>
                        </a>
                        <a href="#">
                            <h5 class="postTime">4 hours ago</h5>
                        </a>
                        <div class="addComments">
                            <div class="reaction">
                                <h3><i class="far fa-smile"></i></h3>
                            </div>
                            <input type="text" class="text" placeholder="Add a comment...">
                            <a href="#">Post</a>
                        </div>
                    </div>
                </div>
			</div>
		</div>
</main>


====

@extends('layouts.navbar')
@section('content')
<style type="text/css">
body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

</style>
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
<form action="{{ route('update_profile') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="{{ asset('profile/' . Auth::user()->image)}}" alt="Maxwell Admin">
					<hr>
					<input type="file" name="image" class="form-control" value="{{old('name')}}">
				</div>
				<h5 class="user-name">{{ Auth::user()->name }}</h5>
				<h6 class="user-email">{{ Auth::user()->email }}</h6>
			</div>
			<!-- <div class="about">
				<h5>About</h5>
				<p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
			</div> -->
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
	
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" name="name"  class="form-control"  id="fullName" value=" {{ Auth::user()->name }}"  placeholder="Enter full name">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email"name="email" class="form-control" id="eMail" value=" {{ Auth::user()->email }}"placeholder="Enter email ID">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text"name="contect" class="form-control" id="phone"value=" {{ Auth::user()->contect }}" placeholder="Enter phone number">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group ">
					<label for="website">Gender</label>
				<div class=" form-control">
					<input type="radio" name="gender" value="male" checked value="{{old('gender')}}">Male
                    <input type="radio" name="gender" value="female" value="{{old('gender')}}">Female
				</div>
				</div>
			</div>
		</div>
		<!-- <div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mt-3 mb-2 text-primary">Address</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Street">PASSWORD</label>
					<input type="password" class="form-control" id="Street" placeholder="Enter Street">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="ciTy">City</label>
					<input type="name" class="form-control" id="ciTy" placeholder="Enter City">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="sTate">State</label>
					<input type="text" class="form-control" id="sTate" placeholder="Enter State">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="zIp">Zip Code</label>
					<input type="text" class="form-control" id="zIp" placeholder="Zip Code">
				</div>
			</div>
		</div> -->
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button type="button"  class="btn btn-secondary">Cancel</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
</div>
</form>
</div>
@endsection
============================================================
<link rel="shortcut icon" href="assets/favicon.svg" type="image/x-icon" />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

/* CSS Reset */
*,
*::after,
*::before {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

*,
button,
input,
select,
textarea {
  font-family: 'Roboto', sans-serif;
}

/* Vars */
:root {
  --primary: hsl(0, 0%, 100%);
  --secondary: hsl(0, 0%, 98%);
  --border: hsl(0, 0%, 86%);

  --story-border: hsl(0, 0%, 78%);
  --img-border: hsla(0, 0%, 0%, 0.1);

  --text-dark: hsl(0, 0%, 15%);
  --text-light: hsl(0, 0%, 60%);

  --like: hsl(355, 82%, 61%);
  --link: hsl(204, 100%, 48%);

  --header-height: 44px;
  --nav-height: 44px;
}
:root.darkTheme {
  --primary: hsl(0, 0%, 0%);
  --secondary: hsl(0, 0%, 2%);
  --border: hsl(0, 0%, 15%);

  --story-border: hsl(0, 0%, 44%);
  --img-border: hsla(0, 0%, 100%, 0.1);

  --text-dark: hsl(0, 0%, 98%);
  --text-light: hsl(0, 0%, 60%);
}

/* -------------------------------------------------- */

/* General Styles */
body {
  min-height: 100vh;

  display: flex;
  flex-direction: column;
  overflow-y: auto;
}

svg {
  display: block;
}

img {
  max-width: 100%;
}

/* -------------------------------------------------- */

/* Header Navbar */
.header {
  width: 100%;
  height: var(--header-height);
  background-color: var(--primary);

  display: flex;
  justify-content: center;

  position: fixed;
  top: 0;
  left: 0;
  z-index: 2;
}
.header::after {
  content: '';
  position: absolute;
  bottom: 0;

  width: 100%;
  height: 1px;
  background-color: var(--border);
}

.header__content {
  width: 100%;
  max-width: 975px;

  padding: 0 14px;

  display: flex;
  justify-content: space-between;
  align-items: center;
}

.header__home {
  margin-top: 5px;
}
.header__theme-button {
  background-color: transparent;
  border: none;
  cursor: pointer;
}
.header__theme-button-sun {
  display: none;
}
.header__theme-button-moon {
  display: unset;
}
:root.darkTheme .header__theme-button-sun {
  display: unset;
}
:root.darkTheme .header__theme-button-moon {
  display: none;
}

.header__search {
  width: 216px;
  height: 28px;

  display: none;
  align-items: center;
  position: relative;
}
.header__search svg {
  width: 12px;
  height: 12px;

  position: absolute;
  left: 8px;
}
.header__search input {
  width: 100%;
  height: 100%;
  background-color: var(--secondary);

  padding: 4px 10px 4px 28px;
  border: 1px solid var(--border);
  border-radius: 4px;
  outline: none;

  font-size: 12px;
  font-weight: 300;
  text-decoration: none;
  color: var(--text-light);

  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}
.header__search input:focus {
  color: var(--text-dark);
}

.header__buttons {
  display: flex;
  align-items: center;
  gap: 16px;
}

/* Bottom Navbar */
.navbar {
  width: 100%;
  height: var(--nav-height);
  background-color: var(--primary);

  display: flex;
  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 2;
}
.navbar::after {
  content: '';
  position: absolute;
  top: 0;

  width: 100%;
  height: 1px;
  background-color: var(--border);
}

.navbar__button {
  flex: 1 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;
}

.navbar__button.profile-button .profile-button__border {
  width: 28px;
  height: 28px;
  border-width: 2px;
}

/* Main Content */
.main-container {
  background-color: var(--primary);

  margin-top: var(--header-height);
  margin-bottom: var(--nav-height);

  display: flex;
  flex: 1;
}

.content-container {
  width: 100%;
  max-width: 935px;

  padding: 0 0 8px;

  margin: 0 auto;
  display: flex;
}
.content {
  width: 100%;
  max-width: 614px;

  margin: 0 auto;
  display: flex;
  flex-direction: column;
}

.stories {
  width: 100%;
  background-color: var(--primary);
  padding: 16px 0;
  flex-shrink: 0;

  position: relative;
  overflow: hidden;
}
.stories::after {
  content: '';
  position: absolute;
  bottom: 0;

  width: 100%;
  height: 1px;
  background-color: var(--border);
}
.stories__content {
  display: flex;
  overflow-x: auto;
  overflow-y: hidden;
  gap: 16px;
  padding: 0 16px;
  position: relative;

  scroll-behavior: smooth;
  scrollbar-width: none;
}
.stories__content::-webkit-scrollbar {
  display: none;
}

.posts {
  display: flex;
  flex-direction: column;
  flex: 1;
  gap: 8px;
}

.stories__left-button,
.post__left-button,
.stories__right-button,
.post__right-button {
  width: 24px;
  height: 24px;
  display: none;

  background-color: transparent;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  filter: drop-shadow(0px 0px 5px rgba(0, 0, 0, 0.5));

  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 1;
}
.stories__left-button {
  left: 10px;
}
.stories__right-button {
  right: 10px;
}
.post__left-button {
  left: 16px;
  opacity: 0.7;
}
.post__right-button {
  right: 16px;
  opacity: 0.7;
}

/* Components */
/* Story */
.story {
  background-color: transparent;
  border: none;
  cursor: pointer;

  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 6px;
}

.story__avatar {
  position: relative;
}
.story__border {
  width: 64px;
  height: 64px;

  fill: none;
  stroke: var(--story-border);
  stroke-width: 1.5;
}
.story--has-story .story__border {
  stroke: url(#--story-gradient);
  stroke-width: 2;
}
.story__picture {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

  width: 56px;
  height: 56px;
  border-radius: 50%;
  overflow: hidden;
}
.story__picture::after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;

  border: 1px solid var(--img-border);
  border-radius: 50%;
}

.story__user {
  font-size: 12px;
  font-weight: 400;
  color: var(--text-light);
  text-transform: lowercase;

  max-width: 72px;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}
.story--has-story .story__user {
  color: var(--text-dark);
}

/* Post */
.post {
  width: 100%;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.post__header {
  background-color: var(--primary);
  border-bottom: 1px solid var(--border);

  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 16px;
}
.post__profile {
  display: flex;
  align-items: center;
  gap: 12px;
}
.post__avatar {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  overflow: hidden;
  position: relative;
}
.post__avatar::after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;

  border: 1px solid var(--img-border);
  border-radius: 50%;
}
.post__user {
  font-size: 14px;
  font-weight: 500;
  color: var(--text-dark);
  text-decoration: none;
  text-transform: lowercase;
}
.post__user:hover {
  text-decoration: underline;
}
.post__more-options {
  background-color: transparent;
  border: none;
  cursor: pointer;
}

.post__content {
  display: flex;
  position: relative;
}
.post__medias {
  display: flex;
  overflow-y: hidden;
  overflow-x: auto;

  width: 100%;
  scroll-snap-type: x mandatory;
  scroll-behavior: smooth;
  scrollbar-width: none;
}
.post__medias::-webkit-scrollbar {
  display: none;
}
.post__media {
  width: 100%;
  flex: none;
  scroll-snap-align: start;
  scroll-snap-stop: always;
}

.post__footer {
  background-color: var(--primary);
  display: flex;
  flex-direction: column;
  gap: 4px;
  padding: 0 4px;
}
.post__buttons {
  display: flex;
  position: relative;
}
.post__button {
  background-color: transparent;
  border: none;
  cursor: pointer;

  padding: 8px;
}
.post__button--align-right {
  margin-left: auto;
}
.post__indicators {
  display: flex;
  align-items: center;
  gap: 4px;

  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -100%);
}
.post__indicator {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background-color: var(--text-light);
}
.post__indicator--active {
  background-color: var(--link);
}

.post__infos {
  display: flex;
  flex-direction: column;
  padding: 0 8px;
  gap: 10px;
}
.post__likes,
.post__description {
  display: flex;
}
.post__likes {
  align-items: center;
  gap: 6px;
}
.post__likes-avatar {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  overflow: hidden;
  position: relative;
}
.post__likes-avatar::after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;

  border: 1px solid var(--img-border);
  border-radius: 50%;
}
.post__likes span,
.post__description span {
  font-size: 14px;
  font-weight: 400;
  color: var(--text-dark);
}
.post__likes a,
.post__description a {
  font-size: 14px;
  font-weight: 500;
  color: var(--text-dark);
  text-decoration: none;
}
.post__name--underline:hover {
  text-decoration: underline;
}
.post__date-time {
  font-size: 10px;
  font-weight: 400;
  color: var(--text-light);
  text-transform: uppercase;
}

/* Side Menu */
.side-menu {
  max-width: 290px;
  position: fixed;
  left: 50%;
  top: 84px;
  transform: translateX(calc(-50% + 322px));

  display: none;
  flex-direction: column;
}

.side-menu__user-profile {
  display: flex;
  align-items: center;

  margin: 20px 0 22px;
}
.side-menu__user-avatar {
  width: 56px;
  height: 56px;
  border-radius: 50%;

  margin-right: 12px;
  flex-shrink: 0;

  overflow: hidden;
  position: relative;
}
.side-menu__user-avatar::after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;

  border: 1px solid var(--img-border);
  border-radius: 50%;
}
.side-menu__user-info {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  flex: 1;
  gap: 4px;
}
.side-menu__user-info a {
  font-size: 14px;
  font-weight: 500;
  color: var(--text-dark);
  text-decoration: none;
  text-transform: lowercase;

  max-width: 180px;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}
.side-menu__user-info span {
  font-size: 14px;
  font-weight: 400;
  color: var(--text-light);

  max-width: 180px;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}
.side-menu__user-button {
  background-color: transparent;
  border: none;
  cursor: pointer;

  font-size: 12px;
  font-weight: 500;
  color: var(--link);

  flex-shrink: 0;
}

.side-menu__suggestions-section {
  display: flex;
  flex-direction: column;
}
.side-menu__suggestions-header {
  display: flex;
  justify-content: space-between;
}
.side-menu__suggestions-header h2 {
  font-size: 14px;
  font-weight: 500;
  color: var(--text-light);
}
.side-menu__suggestions-header button {
  background-color: transparent;
  border: none;
  cursor: pointer;

  font-size: 12px;
  font-weight: 500;
  color: var(--text-dark);
}

.side-menu__suggestions-content {
  display: flex;
  flex-direction: column;
  gap: 16px;

  margin: 16px 0 24px;
  padding-left: 4px;
}
.side-menu__suggestion {
  display: flex;
  align-items: center;
}
.side-menu__suggestion-avatar {
  width: 32px;
  height: 32px;
  border-radius: 50%;

  margin-right: 12px;
  flex-shrink: 0;

  overflow: hidden;
  position: relative;
}
.side-menu__suggestion-avatar::after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;

  border: 1px solid var(--img-border);
  border-radius: 50%;
}
.side-menu__suggestion-info {
  display: flex;
  align-items: flex-start;
  flex-direction: column;
  flex: 1;
  gap: 2px;
}
.side-menu__suggestion-info a {
  font-size: 14px;
  font-weight: 500;
  color: var(--text-dark);
  text-decoration: none;
  text-transform: lowercase;

  max-width: 180px;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}
.side-menu__suggestion-info a:hover {
  text-decoration: underline;
}
.side-menu__suggestion-info span {
  font-size: 12px;
  font-weight: 400;
  color: var(--text-light);

  max-width: 180px;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
}
.side-menu__suggestion-button {
  background-color: transparent;
  border: none;
  cursor: pointer;

  font-size: 12px;
  font-weight: 500;
  color: var(--link);

  flex-shrink: 0;
}

.side-menu__footer {
  display: flex;
  flex-direction: column;
  gap: 16px;
}
.side-menu__footer-links {
  display: flex;
}
.side-menu__footer-list {
  list-style: none;
}
.side-menu__footer-item {
  display: inline-block;
}
.side-menu__footer-item:not(:last-of-type)::after {
  content: '\00B7';
  margin: 0 0.5px;
}
.side-menu__footer-item,
.side-menu__footer-link,
.side-menu__footer-copyright {
  font-size: 11px;
  font-weight: 400;
  color: var(--text-light);
  text-decoration: none;
}
.side-menu__footer-copyright {
  text-transform: uppercase;
}

/* Profile Button */
.profile-button {
  background-color: transparent;
  border: none;
  outline: none;
  cursor: pointer;
  position: relative;
}
.profile-button__border {
  display: none;

  width: 30px;
  height: 30px;
  border: 1px solid var(--text-dark);
  border-radius: 50%;

  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.profile-button:focus .profile-button__border {
  display: block;
}
.profile-button__picture {
  width: 24px;
  height: 24px;
  border-radius: 50%;

  overflow: hidden;
  position: relative;
}
.profile-button__picture::after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;

  border: 1px solid var(--img-border);
  border-radius: 50%;
}

/* Media Queries */
@media (max-width: 767px) {
  .header__buttons--desktop {
    display: none;
  }

  /* Fix post medias indicators bugs on mobile */
  .post__medias {
    gap: 1px;
  }
}

@media (min-width: 620px) {
  .content-container {
    padding: 30px 0 24px;
  }

  .content {
    gap: 24px;
  }

  .stories {
    border: 1px solid var(--border);
    border-radius: 4px;
  }
  .stories::after {
    content: none;
  }

  .posts {
    gap: 24px;
  }
  .post {
    border: 1px solid var(--border);
    border-radius: 4px;
  }
  .post__footer {
    padding: 4px 8px 12px;
  }
  .post__date-time {
    margin-top: 6px;
  }
}

@media (min-width: 768px) {
  :root {
    --header-height: 54px;
    --nav-height: 0px;
  }

  .header__content {
    padding: 0 20px;
  }

  .header__search {
    display: flex;
  }

  .header__buttons--mobile {
    display: none;
  }

  .navbar {
    display: none;
  }
}

@media (min-width: 1024px) {
  .main-container {
    background-color: var(--secondary);
  }

  .content {
    margin: unset;
  }

  .side-menu {
    display: flex;
  }
}
</style>
<script type="text/javascript">
// Elements
const toggleThemeBtn = document.querySelector('.header__theme-button');
const storiesContent = document.querySelector('.stories__content');
const storiesLeftButton = document.querySelector('.stories__left-button');
const storiesRightButton = document.querySelector('.stories__right-button');
const posts = document.querySelectorAll('.post');
const postsContent = document.querySelectorAll('.post__content');

// ===================================
// DARK/LIGHT THEME
// Set initial theme from LocalStorage
document.onload = setInitialTheme(localStorage.getItem('theme'));
function setInitialTheme(themeKey) {
  if (themeKey === 'dark') {
    document.documentElement.classList.add('darkTheme');
  } else {
    document.documentElement.classList.remove('darkTheme');
  }
}

// Toggle theme button
toggleThemeBtn.addEventListener('click', () => {
  // Toggle root class
  document.documentElement.classList.toggle('darkTheme');

  // Saving current theme on LocalStorage
  if (document.documentElement.classList.contains('darkTheme')) {
    localStorage.setItem('theme', 'dark');
  } else {
    localStorage.setItem('theme', 'light');
  }
});

// ===================================
// STORIES SCROLL BUTTONS
// Scrolling stories content
storiesLeftButton.addEventListener('click', () => {
  storiesContent.scrollLeft -= 320;
});
storiesRightButton.addEventListener('click', () => {
  storiesContent.scrollLeft += 320;
});

// Checking if screen has minimun size of 1024px
if (window.matchMedia('(min-width: 1024px)').matches) {
  // Observer to hide buttons when necessary
  const storiesObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach((entry) => {
        if (entry.target === document.querySelector('.story:first-child')) {
          storiesLeftButton.style.display = entry.isIntersecting
            ? 'none'
            : 'unset';
        } else if (
          entry.target === document.querySelector('.story:last-child')
        ) {
          storiesRightButton.style.display = entry.isIntersecting
            ? 'none'
            : 'unset';
        }
      });
    },
    { root: storiesContent, threshold: 1 }
  );

  // Calling the observer with the first and last stories
  storiesObserver.observe(document.querySelector('.story:first-child'));
  storiesObserver.observe(document.querySelector('.story:last-child'));
}

// ===================================
// POST MULTIPLE MEDIAS
// Creating scroll buttons and indicators when post has more than one media
posts.forEach((post) => {
  if (post.querySelectorAll('.post__media').length > 1) {
    const leftButtonElement = document.createElement('button');
    leftButtonElement.classList.add('post__left-button');
    leftButtonElement.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="#fff" d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z"></path>
      </svg>
    `;

    const rightButtonElement = document.createElement('button');
    rightButtonElement.classList.add('post__right-button');
    rightButtonElement.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="#fff" d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path>
      </svg>
    `;

    post.querySelector('.post__content').appendChild(leftButtonElement);
    post.querySelector('.post__content').appendChild(rightButtonElement);

    post.querySelectorAll('.post__media').forEach(function () {
      const postMediaIndicatorElement = document.createElement('div');
      postMediaIndicatorElement.classList.add('post__indicator');

      post
        .querySelector('.post__indicators')
        .appendChild(postMediaIndicatorElement);
    });

    // Observer to change the actual media indicator
    const postMediasContainer = post.querySelector('.post__medias');
    const postMediaIndicators = post.querySelectorAll('.post__indicator');
    const postIndicatorObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            // Removing all the indicators
            postMediaIndicators.forEach((indicator) =>
              indicator.classList.remove('post__indicator--active')
            );
            // Adding the indicator that matches the current post media
            postMediaIndicators[
              Array.from(postMedias).indexOf(entry.target)
            ].classList.add('post__indicator--active');
          }
        });
      },
      { root: postMediasContainer, threshold: 0.5 }
    );

    // Calling the observer for every post media
    const postMedias = post.querySelectorAll('.post__media');
    postMedias.forEach((media) => {
      postIndicatorObserver.observe(media);
    });
  }
});

// Adding buttons features on every post with multiple medias
postsContent.forEach((post) => {
  if (post.querySelectorAll('.post__media').length > 1) {
    const leftButton = post.querySelector('.post__left-button');
    const rightButton = post.querySelector('.post__right-button');
    const postMediasContainer = post.querySelector('.post__medias');

    // Functions for left and right buttons
    leftButton.addEventListener('click', () => {
      postMediasContainer.scrollLeft -= 400;
    });
    rightButton.addEventListener('click', () => {
      postMediasContainer.scrollLeft += 400;
    });

    // Observer to hide button if necessary
    const postButtonObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach((entry) => {
          if (entry.target === post.querySelector('.post__media:first-child')) {
            leftButton.style.display = entry.isIntersecting ? 'none' : 'unset';
          } else if (
            entry.target === post.querySelector('.post__media:last-child')
          ) {
            rightButton.style.display = entry.isIntersecting ? 'none' : 'unset';
          }
        });
      },
      { root: postMediasContainer, threshold: 0.5 }
    );

    if (window.matchMedia('(min-width: 1024px)').matches) {
      postButtonObserver.observe(
        post.querySelector('.post__media:first-child')
      );
      postButtonObserver.observe(post.querySelector('.post__media:last-child'));
    }
  }
});
    </script>
<header class="header">
      <nav class="header__content">
        <div class="header__buttons">
          <a href="index.html" class="header__home">
            <svg
              width="104"
              height="30"
              viewBox="0 0 104 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M5.34906 0.103386C3.22375 1.01086 0.881358 3.5683 0.144313 6.78057C-0.789613 10.8488 3.10259 12.5709 3.42568 12.0089C3.7942 11.3437 2.72397 11.1169 2.50185 9.00802C2.2141 6.28043 3.46606 3.23316 5.03607 1.89772C5.32887 1.65022 5.31372 1.99568 5.31372 2.63504C5.31372 3.7797 5.25314 14.0456 5.25314 16.1853C5.25314 19.0831 5.13703 20.0009 4.92501 20.9032C4.70793 21.821 4.36465 22.4397 4.62716 22.6769C4.91996 22.945 6.16688 22.3108 6.88373 21.2848C7.74698 20.0576 8.04987 18.5829 8.10541 16.9845C8.17103 15.051 8.16599 11.9934 8.17103 10.2455C8.17103 8.64193 8.19627 3.95501 8.14579 1.13461C8.1256 0.448846 6.2426 -0.273011 5.34906 0.103386ZM103.522 15.3294C103.214 15.3294 103.073 15.6543 102.957 16.1957C102.553 18.088 102.129 18.5159 101.579 18.5159C100.968 18.5159 100.418 17.5775 100.276 15.7007C100.165 14.226 100.18 11.5087 100.322 8.80693C100.352 8.25007 100.201 7.70352 98.7367 7.16212C98.1056 6.9301 97.1868 6.58464 96.7325 7.70867C95.4452 10.8694 94.9404 13.3804 94.8192 14.4013C94.8142 14.4529 94.7485 14.4632 94.7384 14.3446C94.6627 13.5248 94.4961 12.0398 94.4709 8.92036C94.4658 8.31194 94.3396 7.79117 93.6783 7.36837C93.2492 7.09509 91.9468 6.60526 91.4773 7.1879C91.0734 7.66227 90.5989 8.93583 90.1092 10.4466C89.7104 11.6737 89.4378 12.5039 89.4378 12.5039C89.4378 12.5039 89.4428 9.18848 89.4479 7.93554C89.4479 7.46118 89.1298 7.3065 89.0339 7.27556C88.5998 7.14666 87.7416 6.93525 87.3781 6.93525C86.9288 6.93525 86.8228 7.1879 86.8228 7.55915C86.8228 7.60555 86.7521 11.9212 86.7521 14.9376V15.3655C86.5047 16.7525 85.7021 18.6345 84.8287 18.6345C83.9503 18.6345 83.5414 17.8508 83.5414 14.2518C83.5414 12.1533 83.602 11.2406 83.6323 9.72472C83.6474 8.85333 83.6828 8.17788 83.6828 8.02835C83.6777 7.55915 82.8801 7.32712 82.5116 7.23947C82.138 7.15181 81.8149 7.11572 81.5625 7.13119C81.2041 7.15181 80.9517 7.38899 80.9517 7.71899C80.9517 7.89429 80.9517 8.22944 80.9517 8.22944C80.4923 7.49727 79.7552 6.98682 79.2605 6.83729C77.9379 6.44027 76.5546 6.79088 75.5097 8.27585C74.6817 9.45144 74.182 10.7869 73.9851 12.705C73.8387 14.1074 73.8892 15.5305 74.1416 16.7319C73.8336 18.088 73.2581 18.6448 72.6321 18.6448C71.7235 18.6448 71.0621 17.1341 71.1379 14.5199C71.1883 12.8029 71.5266 11.5964 71.8951 9.84847C72.0516 9.10598 71.9254 8.71412 71.6023 8.34288C71.3095 8.00257 70.6785 7.82726 69.7748 8.03867C69.1337 8.19335 68.2099 8.35835 67.3719 8.48209C67.3719 8.48209 67.4224 8.27585 67.4627 7.91492C67.6798 6.01231 65.6454 6.16699 64.9941 6.77541C64.6054 7.1415 64.3429 7.56946 64.242 8.33772C64.0855 9.55972 65.0648 10.1372 65.0648 10.1372C64.7417 11.6325 63.9542 13.5867 63.1414 14.9994C62.7073 15.7574 62.3691 16.3194 61.94 16.9124C61.94 16.6906 61.94 16.4689 61.9349 16.2472C61.9248 13.102 61.9652 10.627 61.9854 9.73503C62.0005 8.86365 62.0359 8.20882 62.0359 8.05413C62.0308 7.71383 61.8339 7.58493 61.425 7.41993C61.0616 7.27556 60.6375 7.17759 60.1933 7.1415C59.638 7.09509 59.2997 7.39931 59.3098 7.75508C59.3098 7.82211 59.3098 8.2346 59.3098 8.2346C58.8504 7.50243 58.1134 6.99197 57.6187 6.84244C56.296 6.44542 54.9128 6.79604 53.8678 8.281C53.0399 9.4566 52.4997 11.1117 52.3432 12.6946C52.2019 14.1693 52.2271 15.4222 52.424 16.4792C52.212 17.5363 51.6062 18.6448 50.9247 18.6448C50.0513 18.6448 49.5515 17.8611 49.5515 14.2621C49.5515 12.1636 49.6121 11.2509 49.6424 9.73503C49.6626 8.86365 49.6929 8.18819 49.6929 8.03867C49.6879 7.56946 48.8902 7.33743 48.5217 7.24978C48.133 7.15697 47.7998 7.12603 47.5423 7.14666C47.2041 7.17244 46.9668 7.4818 46.9668 7.70867V8.23975C46.5075 7.50758 45.7654 6.99713 45.2757 6.8476C43.953 6.45058 42.5799 6.81151 41.5299 8.28616C40.8433 9.25036 40.288 10.3177 40.0053 12.6792C39.9195 13.3598 39.8841 13.9991 39.8892 14.5973C39.6166 16.2988 38.4101 18.253 37.4256 18.253C36.8501 18.253 36.2999 17.1134 36.2999 14.6901C36.2999 11.4572 36.4968 6.85791 36.5321 6.41449C36.5321 6.41449 37.779 6.39386 38.0213 6.38871C38.6423 6.38355 39.2077 6.39902 40.0356 6.35261C40.4495 6.33199 40.8484 4.81609 40.4243 4.63047C40.2274 4.54281 38.8543 4.47063 38.3091 4.46031C37.8749 4.43453 36.5977 4.33657 36.5977 4.33657C36.5977 4.33657 36.7138 1.28414 36.7391 0.959303C36.7593 0.691184 36.416 0.551969 36.2242 0.469471C35.7446 0.263226 35.3205 0.165259 34.8157 0.0621369C34.114 -0.0873908 33.801 0.0569808 33.7354 0.660248C33.6395 1.56773 33.594 4.2386 33.594 4.2386C33.0791 4.2386 31.3274 4.13548 30.8175 4.13548C30.3379 4.13548 29.828 6.21855 30.4843 6.24433C31.2415 6.27527 32.5642 6.30105 33.4426 6.32683C33.4426 6.32683 33.4022 11.0034 33.4022 12.4472C33.4022 12.5967 33.4022 12.7462 33.4022 12.8906C32.9226 15.448 31.2213 16.8247 31.2213 16.8247C31.5848 15.1335 30.8427 13.8651 29.4999 12.7926C29.0052 12.3956 28.0309 11.648 26.9354 10.823C26.9354 10.823 27.5664 10.1888 28.1318 8.91521C28.5306 8.01289 28.5458 6.9765 27.5715 6.74963C25.9611 6.37324 24.6283 7.57461 24.2346 8.86365C23.9266 9.85878 24.0932 10.5961 24.694 11.3644C24.7343 11.4211 24.7848 11.4778 24.8353 11.5345C24.4718 12.2512 23.9721 13.2103 23.548 13.9527C22.3718 16.0204 21.4833 17.6548 20.8119 17.6548C20.2767 17.6548 20.2818 15.9946 20.2818 14.4426C20.2818 13.102 20.3777 11.0911 20.4585 9.00286C20.4837 8.31194 20.1455 7.92007 19.575 7.5643C19.2318 7.34774 18.4947 6.91979 18.0656 6.91979C17.4245 6.91979 15.5819 7.00744 13.8402 12.1326C13.6231 12.7771 13.189 13.9579 13.189 13.9579L13.2243 7.79633C13.2243 7.65196 13.1486 7.51274 12.977 7.41477C12.6842 7.24978 11.8966 6.91979 11.2 6.91979C10.8668 6.91979 10.7002 7.07963 10.7002 7.39415L10.6396 17.0361C10.6396 17.7683 10.6598 18.6242 10.7305 18.9954C10.8012 19.3667 10.9173 19.676 11.0586 19.8565C11.2 20.037 11.3666 20.1762 11.6341 20.2329C11.8865 20.2845 13.2698 20.4649 13.3404 19.9287C13.4263 19.2842 13.4313 18.5881 14.1583 15.9946C15.2891 11.9522 16.7632 9.98253 17.4548 9.28129C17.5759 9.15755 17.7173 9.15239 17.7072 9.35348C17.6769 10.2403 17.5759 12.4575 17.5052 14.3343C17.3185 19.3667 18.2171 20.2999 19.5044 20.2999C20.4888 20.2999 21.877 19.3048 23.3663 16.7886C24.2951 15.2212 25.1937 13.6795 25.845 12.5709C26.2943 12.9937 26.8041 13.4526 27.309 13.9373C28.4852 15.0716 28.8689 16.1493 28.6164 17.1702C28.4196 17.9539 27.6825 18.7583 26.37 17.9745C25.9863 17.7477 25.8248 17.5723 25.4411 17.3094C25.2341 17.1702 24.9161 17.1289 24.7293 17.2784C24.2396 17.6548 23.9569 18.1344 23.7954 18.7273C23.6389 19.3048 24.2093 19.609 24.7949 19.8771C25.3048 20.1092 26.3952 20.3154 27.0919 20.3412C29.8028 20.434 31.9735 19.0109 33.488 15.3397C33.7606 18.5108 34.9116 20.3051 36.9107 20.3051C38.2485 20.3051 39.5913 18.5469 40.1769 16.8195C40.3435 17.5259 40.596 18.1395 40.914 18.6551C42.4588 21.1404 45.4473 20.6041 46.9517 18.4953C47.4161 17.8456 47.4868 17.6084 47.4868 17.6084C47.7039 19.5987 49.284 20.2948 50.1876 20.2948C51.1973 20.2948 52.2423 19.8101 52.9743 18.1344C53.0601 18.3148 53.156 18.4901 53.257 18.6551C54.7967 21.1404 57.7903 20.6041 59.2896 18.4953C59.3603 18.3973 59.4209 18.3097 59.4764 18.2272L59.5218 19.5368C59.5218 19.5368 58.6636 20.336 58.1386 20.8259C55.8215 22.9863 54.0596 24.6259 53.9284 26.5337C53.7618 28.9674 55.7054 29.8697 57.1744 29.9883C58.7343 30.112 60.0721 29.2407 60.8899 28.0135C61.6118 26.9359 62.0864 24.6105 62.051 22.3211C62.0359 21.4033 62.0157 20.2381 61.9955 18.9851C62.8083 18.0261 63.727 16.8092 64.5701 15.3913C65.4889 13.8393 66.4783 11.7614 66.9832 10.1424C66.9832 10.1424 67.8414 10.1475 68.7551 10.0908C69.0479 10.0753 69.1287 10.1321 69.0782 10.3486C69.0126 10.6116 67.9221 14.886 68.9166 17.7322C69.5982 19.6812 71.1328 20.3102 72.0415 20.3102C73.1067 20.3102 74.1264 19.4956 74.6716 18.2787C74.7373 18.4128 74.8079 18.5417 74.8837 18.6654C76.4234 21.1507 79.4069 20.6093 80.9214 18.5056C81.2647 18.0312 81.4565 17.6187 81.4565 17.6187C81.7796 19.6812 83.3597 20.3154 84.2633 20.3154C85.2023 20.3154 86.0958 19.9235 86.8228 18.1808C86.8531 18.949 86.9035 19.5781 86.9742 19.774C87.0197 19.8926 87.2872 20.0473 87.4841 20.1195C88.3474 20.4443 89.2207 20.2896 89.5488 20.2226C89.776 20.1762 89.9476 19.9906 89.9729 19.5214C90.0335 18.2787 89.9981 16.1853 90.3667 14.6334C90.9876 12.0244 91.5681 11.0138 91.8458 10.5136C91.9972 10.2352 92.1739 10.1888 92.179 10.4827C92.1941 11.0859 92.2244 12.8442 92.4617 15.216C92.6384 16.9588 92.8756 17.99 93.0574 18.3148C93.5773 19.2481 94.2185 19.2893 94.7384 19.2893C95.0716 19.2893 95.7632 19.1965 95.7027 18.6036C95.6724 18.3148 95.7279 16.5308 96.3387 13.9579C96.7426 12.2822 97.409 10.7663 97.6513 10.2146C97.7421 10.0083 97.7825 10.1733 97.7825 10.2042C97.7321 11.3592 97.6159 15.1335 98.0804 17.2011C98.7064 20.0009 100.524 20.3102 101.155 20.3102C102.503 20.3102 103.608 19.2687 103.982 16.5205C104.052 15.845 103.921 15.3294 103.522 15.3294ZM46.9668 13.6331C46.8911 15.0871 46.6084 16.3039 46.1642 17.1856C45.3514 18.784 43.7511 19.2893 43.0443 16.9794C42.5345 15.314 42.7061 13.0453 42.9181 11.8181C43.2311 9.99799 44.0187 8.70896 45.2504 8.83271C46.5175 8.96161 47.1284 10.6116 46.9668 13.6331ZM59.3098 13.6537C59.2391 15.0252 58.8858 16.4071 58.5071 17.1856C57.7196 18.7943 56.0688 19.2996 55.3873 16.9794C54.9229 15.3965 55.0339 13.3495 55.2611 12.0604C55.559 10.3847 56.2859 8.83271 57.5934 8.83271C58.8656 8.83271 59.4916 10.2506 59.3098 13.6537ZM59.6329 23.0224C59.6178 25.5282 59.229 27.7196 58.3961 28.359C57.2148 29.2613 55.6296 28.5858 55.9578 26.7606C56.2506 25.1415 57.6186 23.4916 59.6329 21.4755C59.638 21.4704 59.638 21.9293 59.6329 23.0224ZM80.9365 13.6692C80.8659 15.1747 80.5377 16.3555 80.1339 17.1856C79.3463 18.7943 77.7056 19.2945 77.014 16.9794C76.6354 15.7213 76.6203 13.6124 76.8929 11.8542C77.1705 10.065 77.9429 8.70896 79.2252 8.83271C80.4822 8.95646 81.0728 10.6116 80.9365 13.6692Z"
                fill="var(--text-dark)"
              />
            </svg>
          </a>

          <button class="header__theme-button" title="Toggle Theme">
            <svg
              class="header__theme-button-moon"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              fill="var(--text-dark)"
              viewBox="0 0 16 16"
            >
              <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"
              />
            </svg>
            <svg
              class="header__theme-button-sun"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              fill="var(--text-dark)"
              viewBox="0 0 16 16"
            >
              <path
                d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
              />
            </svg>
          </button>
        </div>

        <div class="header__search">
          <input type="text" placeholder="Search" />
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M21.669 21.6543C21.8625 21.4622 21.863 21.1494 21.6703 20.9566L17.3049 16.5913C18.7912 14.9327 19.7017 12.7525 19.7017 10.3508C19.7017 5.18819 15.5135 1 10.3508 1C5.18819 1 1 5.18819 1 10.3508C1 15.5135 5.18819 19.7017 10.3508 19.7017C12.7624 19.7017 14.9475 18.7813 16.606 17.2852L20.9739 21.653C21.1657 21.8449 21.4765 21.8454 21.669 21.6543ZM1.9843 10.3508C1.9843 5.7394 5.7394 1.9843 10.3508 1.9843C14.9623 1.9843 18.7174 5.7394 18.7174 10.3508C18.7174 14.9623 14.9623 18.7174 10.3508 18.7174C5.7394 18.7174 1.9843 14.9623 1.9843 10.3508Z"
              fill="#A5A5A5"
              stroke="#A5A5A5"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </div>

        <div class="header__buttons header__buttons--mobile">
          <a href="#">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <rect
                x="3"
                y="3"
                width="18"
                height="18"
                rx="5"
                stroke="var(--text-dark)"
                stroke-width="1.8"
              />
              <line
                x1="12.1"
                y1="6.9"
                x2="12.1"
                y2="17.1"
                stroke="var(--text-dark)"
                stroke-width="1.8"
                stroke-linecap="round"
              />
              <line
                x1="6.9"
                y1="11.8"
                x2="17.1"
                y2="11.8"
                stroke="var(--text-dark)"
                stroke-width="1.8"
                stroke-linecap="round"
              />
            </svg>
          </a>
          <a href="#">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M11.4995 21.2609C11.1062 21.2609 10.7307 21.1362 10.4133 20.9001C8.2588 19.3012 3.10938 15.3239 1.81755 12.9143C0.127895 9.76543 1.14258 5.72131 4.07489 3.89968C5.02253 3.31177 6.09533 3 7.18601 3C8.81755 3 10.3508 3.66808 11.4995 4.85726C12.6483 3.66808 14.1815 3 15.8131 3C16.9038 3 17.9766 3.31177 18.9242 3.89968C21.8565 5.72131 22.8712 9.76543 21.186 12.9143C19.8942 15.3239 14.7448 19.3012 12.5902 20.9001C12.2684 21.1362 11.8929 21.2609 11.4995 21.2609ZM7.18601 4.33616C6.34565 4.33616 5.5187 4.57667 4.78562 5.03096C2.43888 6.49183 1.63428 9.74316 2.99763 12.2819C4.19558 14.5177 9.58639 18.6242 11.209 19.8267C11.3789 19.9514 11.6158 19.9514 11.7856 19.8267C13.4082 18.6197 18.799 14.5133 19.997 12.2819C21.3603 9.74316 20.5557 6.48738 18.209 5.03096C17.4804 4.57667 16.6534 4.33616 15.8131 4.33616C14.3425 4.33616 12.9657 5.04878 12.0359 6.28696L11.4995 7.00848L10.9631 6.28696C10.0334 5.04878 8.6611 4.33616 7.18601 4.33616Z"
                fill="var(--text-dark)"
                stroke="var(--text-dark)"
                stroke-width="0.6"
              />
            </svg>
          </a>
          <a href="#">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M5.81038 19.7478C5.83176 19.4539 5.70787 19.1681 5.47873 18.9827C3.2792 17.2037 1.9 14.5525 1.9 11.5868C1.9 6.27627 6.38748 1.9 12.0098 1.9C17.6196 1.9 22.1078 6.27565 22.1078 11.5868C22.1078 16.8966 17.6092 21.2735 11.998 21.2735C11.0656 21.2735 10.1798 21.1544 9.32697 20.9277C9.15685 20.8825 8.97721 20.8882 8.81028 20.944L5.64643 22.0022L5.81038 19.7478Z"
                stroke="var(--text-dark)"
                stroke-width="1.8"
                stroke-linejoin="round"
              />
              <path
                d="M10.1498 8.7952C10.2222 8.80563 10.2825 8.81606 10.3548 8.82649C11.428 9.05591 12.5252 10.0362 13.3693 10.6202C13.8396 10.9539 14.2375 10.9226 14.7078 10.6097C15.7086 9.92147 16.7456 9.26448 17.7705 8.58664C18.0478 8.39893 18.3372 8.20079 18.6748 8.45107C19.0486 8.7222 18.8195 9.0142 18.6266 9.28534C17.6137 10.6827 16.6129 12.0801 15.588 13.4671C14.8886 14.4265 13.8999 14.5621 12.8388 13.8842C12.1032 13.4045 11.3436 12.9561 10.6201 12.4556C10.1378 12.1219 9.73984 12.1636 9.28163 12.4764C8.26876 13.1647 7.24382 13.8217 6.21889 14.4995C5.94156 14.6872 5.65216 14.8854 5.31454 14.6247C4.97691 14.3744 5.15778 14.0928 5.33865 13.8321C6.3877 12.393 7.42469 10.9539 8.47374 9.51476C8.82343 9.02463 9.47456 8.73263 10.1498 8.7952Z"
                fill="var(--text-dark)"
              />
            </svg>
          </a>
        </div>

        <div class="header__buttons header__buttons--desktop">
          <a href="#">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M2.45307 11.751L11.9773 2.02175L21.5015 11.751C21.7906 12.0463 21.9545 12.4468 21.9545 12.8711V20.4556C21.9545 20.7747 21.7037 21 21.4427 21H15.964C15.713 21 15.4721 20.7849 15.4721 20.476V15.8886C15.4721 13.9497 13.9267 12.34 11.9773 12.34C10.0279 12.34 8.48244 13.9497 8.48244 15.8886V20.476C8.48244 20.7849 8.24157 21 7.99053 21H2.51187C2.25085 21 2 20.7747 2 20.4556V12.8711C2 12.4468 2.16397 12.0463 2.45307 11.751Z"
                stroke="var(--text-dark)"
                stroke-width="2"
              />
            </svg>
          </a>
          <a href="#">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M5.81038 19.7478C5.83176 19.4539 5.70787 19.1681 5.47873 18.9827C3.2792 17.2037 1.9 14.5525 1.9 11.5868C1.9 6.27627 6.38748 1.9 12.0098 1.9C17.6196 1.9 22.1078 6.27565 22.1078 11.5868C22.1078 16.8966 17.6092 21.2735 11.998 21.2735C11.0656 21.2735 10.1798 21.1544 9.32697 20.9277C9.15685 20.8825 8.97721 20.8882 8.81028 20.944L5.64643 22.0022L5.81038 19.7478Z"
                stroke="var(--text-dark)"
                stroke-width="1.8"
                stroke-linejoin="round"
              />
              <path
                d="M10.1498 8.7952C10.2222 8.80563 10.2825 8.81606 10.3548 8.82649C11.428 9.05591 12.5252 10.0362 13.3693 10.6202C13.8396 10.9539 14.2375 10.9226 14.7078 10.6097C15.7086 9.92147 16.7456 9.26448 17.7705 8.58664C18.0478 8.39893 18.3372 8.20079 18.6748 8.45107C19.0486 8.7222 18.8195 9.0142 18.6266 9.28534C17.6137 10.6827 16.6129 12.0801 15.588 13.4671C14.8886 14.4265 13.8999 14.5621 12.8388 13.8842C12.1032 13.4045 11.3436 12.9561 10.6201 12.4556C10.1378 12.1219 9.73984 12.1636 9.28163 12.4764C8.26876 13.1647 7.24382 13.8217 6.21889 14.4995C5.94156 14.6872 5.65216 14.8854 5.31454 14.6247C4.97691 14.3744 5.15778 14.0928 5.33865 13.8321C6.3877 12.393 7.42469 10.9539 8.47374 9.51476C8.82343 9.02463 9.47456 8.73263 10.1498 8.7952Z"
                fill="var(--text-dark)"
              />
            </svg>
          </a>
          <a href="#">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M18 2.8H7C5.23269 2.8 3.8 4.23269 3.8 6V17C3.8 18.7673 5.23269 20.2 7 20.2H18C19.7673 20.2 21.2 18.7673 21.2 17V6C21.2 4.23269 19.7673 2.8 18 2.8ZM7 1C4.23858 1 2 3.23858 2 6V17C2 19.7614 4.23858 22 7 22H18C20.7614 22 23 19.7614 23 17V6C23 3.23858 20.7614 1 18 1H7Z"
                fill="var(--text-dark)"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M22 7.99995H3V6.19995H22V7.99995Z"
                fill="var(--text-dark)"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M10 6.99989L6 1.99989L7.57349 1.12573L11.5735 6.12573L10 6.99989Z"
                fill="var(--text-dark)"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M16.5 6.99989L12.5 1.99989L14.0735 1.12573L18.0735 6.12573L16.5 6.99989Z"
                fill="var(--text-dark)"
              />
              <path
                d="M15.75 13.0671C16.0833 13.2595 16.0833 13.7407 15.75 13.9331L10.5 16.9642C10.1667 17.1566 9.75 16.9161 9.75 16.5312L9.75 10.469C9.75 10.0841 10.1667 9.84354 10.5 10.036L15.75 13.0671Z"
                fill="var(--text-dark)"
              />
            </svg>
          </a>
          <a href="#">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M11.4995 21.2609C11.1062 21.2609 10.7307 21.1362 10.4133 20.9001C8.2588 19.3012 3.10938 15.3239 1.81755 12.9143C0.127895 9.76543 1.14258 5.72131 4.07489 3.89968C5.02253 3.31177 6.09533 3 7.18601 3C8.81755 3 10.3508 3.66808 11.4995 4.85726C12.6483 3.66808 14.1815 3 15.8131 3C16.9038 3 17.9766 3.31177 18.9242 3.89968C21.8565 5.72131 22.8712 9.76543 21.186 12.9143C19.8942 15.3239 14.7448 19.3012 12.5902 20.9001C12.2684 21.1362 11.8929 21.2609 11.4995 21.2609ZM7.18601 4.33616C6.34565 4.33616 5.5187 4.57667 4.78562 5.03096C2.43888 6.49183 1.63428 9.74316 2.99763 12.2819C4.19558 14.5177 9.58639 18.6242 11.209 19.8267C11.3789 19.9514 11.6158 19.9514 11.7856 19.8267C13.4082 18.6197 18.799 14.5133 19.997 12.2819C21.3603 9.74316 20.5557 6.48738 18.209 5.03096C17.4804 4.57667 16.6534 4.33616 15.8131 4.33616C14.3425 4.33616 12.9657 5.04878 12.0359 6.28696L11.4995 7.00848L10.9631 6.28696C10.0334 5.04878 8.6611 4.33616 7.18601 4.33616Z"
                fill="var(--text-dark)"
                stroke="var(--text-dark)"
                stroke-width="0.6"
              />
            </svg>
          </a>
          <button class="profile-button">
            <div class="profile-button__border"></div>
            <div class="profile-button__picture">
              <img src="assets/default-user.png" alt="User Picture" />
            </div>
          </button>
        </div>
      </nav>
    </header>
    
@extends('layouts.navbar')
@section('content')
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Hobbies</th>
       
    </tr>
    @foreach($data as $key => $value)
    <!-- <tr  id-="uid{{$value->id}}"> -->
       <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->gender }}</td>
        <td><img src=" {{ asset('profile/' . $value->image)}}" width="160" height="80"></td>
        <td>
                @if(request()->has('trashed'))
                <form action="{{ route('user.destroy',$value->id) }}" method="POST">
                <a href="{{ route('user.restore', $value->id) }}" class="btn btn-success">Restore</a>
              
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete">Delete</button>
                </form>
                 @else
                <form action="{{ route('user.destroy',$value->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('user.edit',$value->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete">Delete</button>
                </form>
                @endif
</td>      
    </tr>
    @endforeach
</table>

{!! $data->links() !!}
<div class="float-end" style="text-align:right;">
    @if(request()->has('trashed'))
    <a href="{{ route('user.index') }}" class="btn btn-info">View All products</a>
    <a href="{{ route('user.restoreAll') }}" class="btn btn-success">Restore All</a>
    @else
    <a href="{{ route('user.index', ['trashed' => 'product']) }}" class="btn btn-primary">View Deleted user</a>
    @endif
</div>
@endsection


@extends('layouts.navbar')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="styleshhet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('global.css')}}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<meta name="meta_data" data-token="{{csrf_token()}}" data-user="{{auth()->check() ? auth()->id() : 0}}">
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
<style>
    .redHeart {
        color: red;
    }
</style>
<style>
    body {
        background-color: #eee
    }

    .time {
        font-size: 9px !important
    }

    .socials i {
        margin-right: 14px;
        font-size: 17px;
        color: #d2c8c8;
        cursor: pointer
    }

    .feed-image img {
        width: 100%;
        height: auto
    }

    .anyClasss {
        height: 150px;
        overflow-y: scroll;
    }

    body {
        background: #eee
    }

    .date {
        font-size: 11px
    }

    .comment-text {
        font-size: 12px
    }

    .fs-12 {
        font-size: 12px
    }

    .shadow-none {
        box-shadow: none
    }

    .name {
        color: #007bff
    }

    .cursor:hover {
        color: blue
    }

    .cursor {
        cursor: pointer
    }

    .textarea {
        resize: none
    }

    .comments {
        margin-top: 10px;
        font-weight: 400;
        color: #999;
    }

    .addComments {
        display: flex;
        align-items: center;
        margin-top: 20px;
        border-top: 1px solid #ddd;
        padding: 10px 0;
    }

    .addComments a {
        color: #1d92ffcb;
        font-weight: 500;
    }

    .addComments .reaction {
        position: relative;
        font-size: 1.3rem;
        margin-right: 10px;
        color: rgb(88, 88, 88);
    }

    input.text {
        width: 100%;
        border: none;
        outline: none;
        font-weight: 400;
        font-size: 14px;
        color: #262626;
        background: none;
    }

    input.text::placeholder {
        color: #777;
    }

    .comment-section {
        overflow-y: scroll;
        height: 250px;
    }

    .right-col {
        padding: 10px;

    }

    .profile-card {
        /* width: fit-content; */
        display: flex;
        justify-content: center;
        align-items: center;
        /* margin-bottom: 10px; */
    }

    .profile-card .profile-pic {
        flex: 0 0 auto;
        padding: 0;
        background: none;
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    .profile-card:first-child .profile-pic {
        width: 70px;
        height: 70px;
    }

    .profile-card .profile-pic img {
        border: none;
    }

    .profile-card .username {
        font-weight: 500;
        font-size: 14px;
        color: #000;
    }

    .sub-text {
        color: rgba(0, 0, 0, 0.5);
        font-size: 12px;
        font-weight: 500;
        margin-top: 5px;
    }

    .action-btn {
        opacity: 1;
        font-weight: 700;
        font-size: 12px;
        margin-left: 35px;
        background-color: blue;
        color: white;
    }

    .suggestion-text {
        font-size: 14px;
        color: rgba(0, 0, 0, 0.5);
        font-weight: 700;
        margin: 20px 0;
    }

    @media (max-width: 1100px) {

        .right-col,
        .search-box {
            display: none;
        }

        .nav-wrapper,
        .wrapper {
            width: 90%;
        }

        .wrapper {
            display: block;
        }
    }

    @media (max-width: 500px) {
        .nav-items .icon {
            margin: 0 5px;
        }

        .post-image {
            height: 300px;
        }
    }
</style>
@section('content')
<div class="container mt-4 mb-5">
    <div class="wrapper">
        <!-- left col element -->
        <p class="suggestion-text" style="position: fixed;">Suggestions for you</p><br><br>
        <div class="right-col " style="float:left;position: fixed; overflow-y: scroll;height: 80%;">
            @foreach($comments as $value)
            <div class="profile-card">
                <div class="profile-pic">
                    <img class="rounded-circle" alt="dp" src="{{ asset('profile/' . $value->image)}}" width="45">
                </div>
                <div>
                    <p class="username">{{ $value->name }}</p>
                    <p class="sub-text">followed by user</p>
                </div>
                <form method="post" action="">
                    @csrf
                    <button type="submit" class="action-btn btn btn-primary btn-sm shadow-none">Follow</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center row" style="height:50px !important; position:absolute !important;">
        <div class="col-md-5">
            <div class="feed p-2">
                @foreach($posts->all() as $data1)
                <div class="bg-white border mt-2 " style="z-index:-1 !important;">
                    <div>
                        <div class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
                            <div class="d-flex flex-row align-items-center feed-text px-2"><img class="rounded-circle" alt="dp" src=" {{ asset('profile/' . $data1->image)}}" width="45">
                                <div class="d-flex flex-column flex-wrap ml-2"><span class="font-weight-bold">{{$data1->name}}</span><span class="text-black-50 time"> {{\Carbon\Carbon::parse($data1->created_at)->diffForHumans()}}</span></div>
                            </div>
                            <div class="feed-icon px-2"><i class="fa fa-ellipsis-v text-black-50"></i></div>
                        </div>
                    </div>
                    <div class="p-2 px-3"><span>{{$data1->body}}</span></div>
                    <div class="feed-image p-2 px-3"><img class="img-fluid img-responsive" src=" {{ asset('image/' . $data1->image_post)}}" width="160" height="80" alt="No Image"></div>
                    <div class="bg-white">
                        <div class="d-flex flex-row fs-12">
                            <div class="like p-2 cursor pressLove">
                           
                            <div class="like p-2 cursor">   
                                  <span class="ml-1"><a href="#addComments">Comment </a></span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex  row">
                        <div class="col-md-12">
                            <div class="d-flex flex-column comment-section">

                                @foreach($comments->all() as $comment)
                                <div class="bg-white p-2 ">
                                    <div class="d-flex flex-row user-info"><img class="rounded-circle" src="{{ asset('profile/' . $data1->image)}}" width="40">
                                        <div class="d-flex flex-column justify-content-start ml-2">
                                            <span class="d-block font-weight-bold name">{{$data1->name}}</span>
                                            <span class=" text-black-50 time"> {{\Carbon\Carbon::parse($comments->created_at)->diffForHumans()}}</span>
                                            <span class="comment-text">{{$comment->comment_body}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <div class="bg-light p-2">
                                    <form method="post" action="{{ route('post.store_comment') }}">
                                        @csrf
                                        <div class="d-flex flex-row align-items-start addComments" id="addComments">
                                            <textarea class="form-control ml-1 shadow-none textarea" placeholder="Add a comment..." name="comment_body" required></textarea>
                                            <input name="post_id" value="{{$data1->id}}" hidden>
                                            <input name="user_id" value="{{ Auth::user()->id }}" hidden>
                                        </div>
                                        <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="submit"><i class="far fa-smile"></i> Comment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
@endsection
<script>
    $('.pressLove').click(function() {
        var elem = $(this).parents('.card');
        var data = {};
        data.post_id = elem.data('post');
        $.ajax({
            url: 'like',
            data,
            success: function(data) {
                elem.find('.pressLove').text(data.likes);
                if (elem.find('.pressLove').hasClass('redHeart')) {
                    elem.find('.pressLove').removeClass('redHeart');
                } else {
                    elem.find('.pressLove').addClass('redHeart');
                }
            }
        });
    });
</script>

=============== SHOW request============
@extends('layouts.navbar')

<style>
    * {
        text-align: center;
    }

    #fb {
        width: 500px;
        border: 1px solid gray;
        border-radius: 5px;
        position: relative;
        height: 175px;
    }

    #fb p {
        font-family: sans-serif;
        margin: 0 0 0 10px;
        line-height: 30px;
    }

    #fb-top span {
        color: #4267B2;
        float: right;
        margin-right: 10px;
    }

    #fb-top {
        background-color: #efefef;
        height: 30px;
        width: 500px;
        border-radius: 5px 5px 0 0;
        position: absolute;
        top: -1px;
        left: -1px;
        border: 1px solid gray;
    }

    #fb img {
        position: absolute;
        left: 10px;
        top: 52.5px;
    }

    #info {
        position: absolute;
        left: 120px;
        top: 75px;
    }

    #info {
        color: #4267B2;
        line-height: 25px;
        font-size: 18px;
    }

    #info span {
        color: #777;
        font-size: 14px;
    }

    #button-block {
        position: absolute;
        right: 10px;
        top: 85px;
    }

    #button-block div {
        display: inline-block;
    }

    #confirm,
    #delete {
        background-color: #4267B2;
        color: white;
        padding: 7px;
        border-radius: 2px;
        margin-right: 10px;
        font-family: sans-serif;
    }

    #delete {
        color: #222;
        background-color: #bbb;
        border: 1px solid #999;
        padding: 6px;
        margin-right: 0;
    }

    #button-block div:hover {
        opacity: .8;
        cursor: pointer;
    }
</style>
@section('content')
@foreach($friend_req as $friend)
<div id="fb">
    <div id="fb-top">
        <p><b>Friend Requests</b><span></span></p>
    </div>
  
    <img src="{{ asset('profile/' . $friend->image)}}" height="100" width="100" alt="Image of woman">
    <p id="info"><b> {{$friend->name}}</b> <br> <span> {{\Carbon\Carbon::parse($friend->created_at)->diffForHumans()}}</p>
    <div id="button-block">
        <form method="get" action="{{route('friend.accept',$friend->fid) }}">
        
              <div id="confirm"><button type="submit">Confirm </button></div>
        </form>

        <form action="{{ route('friends.dltfrd',$friend->fid) }}" method="POST">
            @csrf
           
            <div id="delete" class="delete">
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true">Delete Request </button></i>
            </div>
        </form>
    </div>
    @endforeach
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('.delete').click(function(e) {

            if (!confirm('Are you sure you want to delete this post?')) {

                e.preventDefault();

            }

        });

    });
</script>