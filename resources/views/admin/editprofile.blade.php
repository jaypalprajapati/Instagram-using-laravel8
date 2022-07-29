@extends('layouts.edit')
<style>
	/*

All grid code is placed in a 'supports' rule (feature query) at the bottom of the CSS (Line 310). 
        
The 'supports' rule will only run if your browser supports CSS grid.

Flexbox and floats are used as a fallback so that browsers which don't support grid will still recieve a similar layout.

*/

	/* Base Styles */

	:root {
		font-size: 15px;
	}

	*,
	*::before,
	*::after {
		box-sizing: border-box;
	}

	body {
		font-family: "Open Sans", Arial, sans-serif;
		min-height: 100vh;
		background-color: #fafafa;
		color: #262626;
		padding-bottom: 3rem;
	}

	img {
		display: block;
	}

	.container {
		max-width: 93.5rem;
		margin: 0 auto;
		padding: 0 2rem;
	}

	.btn {
		display: inline-block;
		font: inherit;
		background: none;
		border: none;
		color: inherit;
		padding: 0;
		cursor: pointer;
	}

	.btn:focus {
		outline: 0.5rem auto #4d90fe;
	}

	.visually-hidden {
		position: absolute !important;
		height: 1px;
		width: 1px;
		overflow: hidden;
		clip: rect(1px, 1px, 1px, 1px);
	}

	/* Profile Section */

	.profile {
		padding: 5rem 0;
	}

	.profile::after {
		content: "";
		display: block;
		clear: both;
	}

	.profile-image {
		float: left;
		width: calc(33.333% - 1rem);
		display: flex;
		justify-content: center;
		align-items: center;
		margin-right: 3rem;
	}

	.profile-image img {
		border-radius: 50%;
	}

	.profile-user-settings,
	.profile-stats,
	.profile-bio {
		float: left;
		width: calc(66.666% - 2rem);
	}

	.profile-user-settings {
		margin-top: 1.1rem;
	}

	.profile-user-name {
		display: inline-block;
		font-size: 3.2rem;
		font-weight: 300;
	}

	.profile-edit-btn {
		font-size: 1.4rem;
		line-height: 1.8;
		border: 0.1rem solid #dbdbdb;
		border-radius: 0.3rem;
		padding: 0 2.4rem;
		margin-left: 2rem;
	}

	.profile-settings-btn {
		font-size: 2rem;
		margin-left: 1rem;
	}

	.profile-stats {
		margin-top: 2.3rem;
	}

	.profile-stats li {
		display: inline-block;
		font-size: 1.6rem;
		line-height: 1.5;
		margin-right: 4rem;
		cursor: pointer;
	}

	.profile-stats li:last-of-type {
		margin-right: 0;
	}

	.profile-bio {
		font-size: 1.6rem;
		font-weight: 400;
		line-height: 1.5;
		margin-top: 2.3rem;
	}

	.profile-real-name,
	.profile-stat-count,
	.profile-edit-btn {
		font-weight: 600;
	}

	/* Gallery Section */

	.gallery {
		display: flex;
		flex-wrap: wrap;
		margin: -1rem -1rem;
		padding-bottom: 3rem;
	}

	.gallery-item {
		position: relative;
		flex: 1 0 22rem;
		margin: 1rem;
		color: #fff;
		cursor: pointer;

	}

	.gallery-item:hover .gallery-item-info,
	.gallery-item:focus .gallery-item-info {
		display: flex;
		justify-content: center;
		align-items: center;
		position: absolute;
		top: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, 0.3);

	}

	.gallery-item-info {
		display: none;
	}

	.gallery-item-info li {
		display: inline-block;
		font-size: 1.7rem;
		font-weight: 600;

	}

	.gallery-item-likes {
		margin-right: 2.2rem;
	}

	.gallery-item-type {
		position: absolute;
		top: 1rem;
		right: 1rem;
		font-size: 2.5rem;
		text-shadow: 0.2rem 0.2rem 0.2rem rgba(0, 0, 0, 0.1);
	}

	.fa-clone,
	.fa-comment {
		transform: rotateY(180deg);
	}

	.gallery-image {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	/* Loader */

	.loader {
		width: 5rem;
		height: 5rem;
		border: 0.6rem solid #999;
		border-bottom-color: transparent;
		border-radius: 50%;
		margin: 0 auto;
		animation: loader 500ms linear infinite;
	}

	/* Media Query */

	@media screen and (max-width: 40rem) {
		.profile {
			display: flex;
			flex-wrap: wrap;
			padding: 4rem 0;
		}

		.profile::after {
			display: none;
		}

		.profile-image,
		.profile-user-settings,
		.profile-bio,
		.profile-stats {
			float: none;
			width: auto;
		}

		.profile-image img {
			width: 7.7rem;
		}

		.profile-user-settings {
			flex-basis: calc(100% - 10.7rem);
			display: flex;
			flex-wrap: wrap;
			margin-top: 1rem;
		}

		.profile-user-name {
			font-size: 2.2rem;
		}

		.profile-edit-btn {
			order: 1;
			padding: 0;
			text-align: center;
			margin-top: 1rem;
		}

		.profile-edit-btn {
			margin-left: 0;
		}

		.profile-bio {
			font-size: 1.4rem;
			margin-top: 1.5rem;
		}

		.profile-edit-btn,
		.profile-bio,
		.profile-stats {
			flex-basis: 100%;
		}

		.profile-stats {
			order: 1;
			margin-top: 1.5rem;
		}

		.profile-stats ul {
			display: flex;
			text-align: center;
			padding: 1.2rem 0;
			border-top: 0.1rem solid #dadada;
			border-bottom: 0.1rem solid #dadada;
		}

		.profile-stats li {
			font-size: 1.4rem;
			flex: 1;
			margin: 0;
		}

		.profile-stat-count {
			display: block;
		}
	}

	/* Spinner Animation */

	@keyframes loader {
		to {
			transform: rotate(360deg);
		}
	}

	/*

The following code will only run if your browser supports CSS grid.

Remove or comment-out the code block below to see how the browser will fall-back to flexbox & floated styling. 

*/

	@supports (display: grid) {
		.profile {
			display: grid;
			grid-template-columns: 1fr 2fr;
			grid-template-rows: repeat(3, auto);
			grid-column-gap: 3rem;
			align-items: center;
		}

		.profile-image {
			grid-row: 1 / -1;
		}

		.gallery {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
			grid-gap: 2rem;
		}

		.profile-image,
		.profile-user-settings,
		.profile-stats,
		.profile-bio,
		.gallery-item,
		.gallery {
			width: auto;
			margin: 0;
		}

		@media (max-width: 40rem) {
			.profile {
				grid-template-columns: auto 1fr;
				grid-row-gap: 1.5rem;
			}

			.profile-image {
				grid-row: 1 / 2;
			}

			.profile-user-settings {
				display: grid;
				grid-template-columns: auto 1fr;
				grid-gap: 1rem;
			}

			.profile-edit-btn,
			.profile-stats,
			.profile-bio {
				grid-column: 1 / -1;
			}

			.profile-user-settings,
			.profile-edit-btn,
			.profile-settings-btn,
			.profile-bio,
			.profile-stats {
				margin: 0;
			}
		}
	}
</style>
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
<script type="text/javascript">
	/*

Full-page view:

https://codepen.io/GeorgePark/full/VXrwOP/

*/

	// const posts = document.querySelectorAll('.gallery-item');

	// posts.forEach(post => {
	// 	post.addEventListener('click', () => {
	// 		//Get original image URL
	// 		const imgUrl = post.firstElementChild.src.split("?")[0];
	// 		//Open image in new tab
	// 		window.open(imgUrl, '_blank');
	// 	});
	// });
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<header>
	<div class="container">
		<div class="pull-left">
			<a class="btn btn-primary" href="{{ route('post.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
		</div>
		<div class="container">
			<div class="row gutters">
				<div class="profile-stats" style="text-align:center;">
					<ul>
						<li class="badge rounded-pill bg-secondary"><span class="profile-stat-count">{{$postCount}}</span> Posts</li>
						<li class="badge rounded-pill bg-secondary"><span class="profile-stat-count">{{$followCount}}</span> Followers</li>
						<li class="badge rounded-pill bg-secondary"><span class="profile-stat-count">{{$followingCount}}</span> Following</li>
					</ul>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
					<div class="card h-100">
						<form action="{{ route('user.update',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
							@csrf
							@method('PUT')
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
										<input type="text" name="name" class="form-control" id="fullName" value=" {{ Auth::user()->name }}" placeholder="Enter full name">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="eMail">Email</label>
										<input type="email" name="email" class="form-control" id="eMail" value=" {{ Auth::user()->email }}" placeholder="Enter email ID">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" name="contect" class="form-control" id="phone" value=" {{ Auth::user()->contect }}" placeholder="Enter phone number">
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
							<input type="password" name="password" class="form-control" id="password" value=" {{ Auth::user()->password }}" hidden>
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="text-right">
										<button type="button" class="btn btn-secondary">Cancel</button>
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
							</div>
							</form>
							<hr>
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mt-3 mb-2 text-primary" style="text-align:center;">All Post</h6>
								</div>
								<main>
									<div class="container">
										<div class="gallery">
											@foreach($data1->all() as $data1)
											<div class="gallery-item" tabindex="0">
												<img src=" {{ asset('image/' . $data1->image_post)}}" class="gallery-image" alt="">
												<div class="gallery-item-info">
													<ul>
														<!-- <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span> <button type="submit"> <a class=" btn btn-primary" href="">Edit</button></a></li> -->
														<form action="{{ route('post.destroy',$data1->id) }}" method="POST">
															@csrf
															@method('DELETE')
															<li class="gallery-item-comments delete" title="Delete This Post?"><span class="visually-hidden"> </span><button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"> </button></i> </li>
															<!-- <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"><a class="btn btn-danger" href="n">Hide.</a></i> </li> -->
														</form>
													</ul>
												</div>
											</div>
											@endforeach
										</div>
										<!-- <div class="loader"></div> -->
									</div>
									<!-- End of container -->
								</main>
							</div>
							<hr>
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mt-3 mb-2 text-primary" style="text-align:center;">All Pending Post</h6>
								</div>
								<main>
									<div class="container">
										<div class="gallery">
											@foreach($pending as $pending)
											<div class="gallery-item" tabindex="0">
												<img src=" {{ asset('image/' . $pending->image_post)}}" class="gallery-image" alt="">
												<div class="gallery-item-info">
													<ul>
														<!-- <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span> <button type="submit"> <a class=" btn btn-primary" href="">Edit</button></a></li> -->
														<form action="{{ route('post.destroy',$pending->id) }}" method="POST">
															@csrf
															@method('DELETE')
															<li class="gallery-item-comments delete" title="Delete This Post?"><span class="visually-hidden"> </span><button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"> </button></i> </li>
															<!-- <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"><a class="btn btn-danger" href="n">Hide.</a></i> </li> -->
														</form>
													</ul>
												</div>
											</div>
											@endforeach
										</div>
										<!-- <div class="loader"></div> -->
									</div>
									<!-- End of container -->
								</main>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of container -->
</header>