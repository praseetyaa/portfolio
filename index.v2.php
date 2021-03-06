<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="favicon.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/all.css">
	<title>Document</title>
	<style type="text/css">
	:root{
		--primary: #20c997;
		--primary-s: #DDFAF1;
		--secondary: #ffc107;
		--secondary-s: #FFF6DB;
		--shadow-p: 0rem .125rem 1.5rem var(--primary-s);
		--rounded-1: .5rem;
	}
	body{font-family: 'Montserrat', sans-serif;}
	.rounded-1{border-radius: .5rem!important;}
	.rounded-2{border-radius: 1rem!important;}
	.rounded-3{border-radius: 1.5rem!important;}
	.rounded-4{border-radius: 2rem!important;}
	.text-primary{color: var(--primary)!important;}
	.text-secondary{color: var(--secondary)!important;}
	.border-primary{border-color: var(--primary)!important;}
	.border-secondary{border-color: var(--secondary)!important;}
	.shadow-primary{box-shadow: 0rem .125rem 1.5rem var(--primary-s)!important}
	.shadow-secondary{box-shadow: 0rem .125rem 1.5rem var(--secondary-s)!important}
	.w-fit{width: fit-content;}

	.btn{border-radius: var(--rounded-1);}
	.btn:focus, .btn:active{animation: button .25s ease;}
	.btn-primary{background-color: var(--primary-s); color: var(--primary); border-color: var(--primary-s);}
	.btn-primary:hover,
	.btn-check:focus+.btn-primary, .btn-primary:focus,
	.btn-check:active+.btn-primary, .btn-check:checked+.btn-primary, .btn-primary.active, .btn-primary:active, .show>.btn-primary.dropdown-toggle{background-color: var(--primary); color: var(--bs-white); border-color: var(--primary);}
	.btn-check:focus+.btn-primary, .btn-primary:focus,
	.btn-check:active+.btn-primary:focus, .btn-check:checked+.btn-primary:focus, .btn-primary.active:focus, .btn-primary:active:focus, .show>.btn-primary.dropdown-toggle:focus{box-shadow: 0 0 0 0.25rem var(--primary-s);}

	.item-carousel{padding: 1rem;}
	.navbar-nav .nav-title{font-size: .8rem;}
	.form-control.mailing:focus{box-shadow: unset;}
	.fixed-navbar .nav-link.active .fad{color: var(--primary)!important;}
	.fixed-navbar .nav-link.active .fa-home-lg-alt:before{animation: home .25s ease-in;}
	.fixed-navbar .nav-link.active .fa-project-diagram:before{animation: projects .25s ease-in;}
	.fixed-navbar .nav-link.active .fa-address-card:before{animation: about .25s ease-in;}
	.overlay-img-banner-left{transition: .5s ease;position: absolute;top: 80%;left: 25%;transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%);text-align: center;}
	.overlay-img-banner-right{transition: .5s ease;position: absolute;top: 10%;right: -15%;transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%);text-align: center;}
	.modal-body .modal-icon{animation: modal-icon 2s ease 1 forwards; animation-delay: .25s; position: relative; overflow: hidden; border-radius: 100%; border: 2px solid transparent; width: fit-content;}
	.modal-body .fad{animation: modal-icon-fad 1s ease; animation-delay: .35s;}
	.header-icon:hover .fad{animation: scale .5s ease-in-out;}

	.card-hover {transition: .3s ease}
	.item:hover .card-hover {transform: scale(1.1); }
	.item img{opacity: 1; display: block; width: 100%; height: auto; transition: .25s ease; backface-visibility: hidden;}
	.item i{color: var(--color)}
	.middle {transition: .5s ease;opacity: 0;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%);text-align: center;}
	.item:hover img {opacity: 0.3;}
	.item:hover .middle {opacity: 1;}

	@keyframes home {
		0%{transform: scale(1); top: 0;}
		50%{transform: scale(1.3); top: -3px;}
		100%{transform: scale(1); top: 0;}
	}
	@keyframes projects {
		0%{opacity: 1;}
		50%{opacity: 0;}
		100%{opacity: 1;}
	}
	@keyframes about {
		0%{transform: scale(1);}
		50%{transform: scale(1.5);}
		100%{transform: scale(1);}
	}
	@keyframes overlay-link{
		from{transform: scale(0);}
		to{transform: scale(1);}
	}
	@keyframes button{
		from{transform: scale(.9);}
		to{transform: scale(1);}
	}
	@keyframes modal-icon {
		0%{border-top: 2px solid var(--primary);}
		25%{border-right: 2px solid var(--primary);}
		50%{border-bottom: 2px solid var(--primary);}
		75%{border-left: 2px solid var(--primary);}
		100%{border: 2px solid var(--primary);}
	}
	@keyframes modal-icon-fad {
	  0%{transform: scale(1);}
	  15%{transform: scale(1.5);}
	  50%{transform: rotate(45deg);}
	  75%{transform: rotate(0deg);}
	  100%{transform: scale(1);}
	}
	@keyframes scale {
		from{transform: scale(1.5);}
		to{transform: scale(1.0);}
	}

	@media (max-width: 991.98px) {
	.navbar .fixed-navbar{position: fixed; bottom: 0; left: 0; width: 100%; background-color: var(--bs-white); border-radius: .5rem; box-shadow: var(--shadow-p);}
	.fixed-navbar .nav-link{transition: .25s cubic-bezier(0.68, -0.55, 0.27, 1.55); position: relative; top: 0;}
	.fixed-navbar .nav-link.active .fad{position: relative; top: -.5rem; color: var(--primary)!important; font-weight: normal!important;}
	.fixed-navbar .overlay-link{position: absolute; background-color: var(--primary-s); width: 40px; height: 40px; border-radius: 100%; border: 5px solid var(--bs-white); top: -13px; left: -11px; z-index: -1; animation: overlay-link .15s ease;}
	}

	}
	</style>
</head>
<body id="home">
<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top" id="nav">
  <div class="container">
    <a class="navbar-brand mx-auto d-flex d-lg-none align-items-center" href="#">
    	<span style="color: var(--bs-gray); font-size: 1.5rem; font-family: 'Sacramento', cursive; font-weight: bold">Sidepr&nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="25" height="25" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path d="m86.166 124.462c0 39.165 17.458 76.823 47.897 103.318l106.937 93.081v-14.434c0-8.284 6.716-15 15-15s15 6.716 15 15v14.451l106.944-93.097c30.435-26.494 47.89-64.15 47.89-103.312v-121.163c-.772-.619-1.609-1.17-2.508-1.635-4.985-2.574-10.993-2.15-15.567 1.1l-68.026 48.323c-26.866-8.886-54.993-13.386-83.733-13.386-29.165 0-57.684 4.63-84.899 13.774l-66.713-48.606c-4.561-3.323-10.603-3.804-15.634-1.246-.929.473-1.794 1.036-2.588 1.673zm209.904 58.778c.635-6.246 5.2-11.53 11.283-13.072 6.049-1.534 12.671 1.004 16.117 6.213 3.465 5.236 3.312 12.202-.42 17.261-3.721 5.044-10.413 7.232-16.4 5.419-6.744-2.044-11.294-8.793-10.58-15.821zm-110 0c.634-6.236 5.198-11.543 11.281-13.072 6.059-1.524 12.659.999 16.119 6.213 3.472 5.232 3.309 12.205-.42 17.261-3.721 5.044-10.423 7.236-16.41 5.419-6.839-2.077-11.146-8.773-10.57-15.821z" fill="var(--primary)" data-original="#000000" style="" class=""/><path d="m455.834 114.557v9.91c0 47.843-21.211 93.746-58.193 125.939l-131.782 114.72c-2.823 2.458-6.336 3.687-9.849 3.687s-7.025-1.229-9.848-3.686l-116.346-101.27c-2.717 25.259-12.831 49.383-29.159 69.08-18.737 22.603-44.765 38.395-73.399 44.576 12.183 23.047 28.286 44.332 47.982 63.097 48.322 46.036 112.516 71.39 180.76 71.39s132.439-25.354 180.759-71.391c48.52-46.226 75.241-107.742 75.241-173.217 0-55.89-20.111-109.756-56.166-152.835z" fill="var(--primary-s)" data-original="#000000" style="" class=""/><path d="m20.016 348.388c45.899-9.456 79.395-49.617 80.492-95.996h-85.508c-8.284 0-15 6.716-15 15 0 28.754 5.157 56.744 15.047 83.012 1.484-.937 3.148-1.641 4.969-2.016z" fill="var(--primary)" data-original="#000000" style="" class=""/></g></g></svg>&nbsp;ject</span>
    </a>
    <div class="fixed-navbar d-flex align-items-center justify-content-center justify-content-lg-start flex-grow-1">
      <ul class="navbar-nav flex-row">
				<li class="nav-item">
				  <a class="nav-link active-link active fw-bold p-0 mt-2 mb-1 mx-4 d-flex flex-column align-items-center" aria-current="page" href="#home"><i class="fad fa-home-lg-alt"><div class="overlay-link"></div></i><span class="nav-title">Home</span></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active-link fw-bold p-0 mt-2 mb-1 mx-4 d-flex flex-column align-items-center" href="#projects"><i class="fad fa-project-diagram"></i><span class="nav-title">Projects</span></a>
				</li>		    
				<li class="nav-item">
		      <a class="nav-link active-link fw-bold p-0 mt-2 mb-1 mx-4 d-flex flex-column align-items-center" href="#about"><i class="fad fa-address-card"></i><span class="nav-title">About</span></a>
		    </li>
			</ul>
			<ul class="nav navbar-nav d-none d-lg-block mx-auto">
		    <a class="navbar-brand d-none d-lg-flex align-items-center" href="#">
		    	<span class="ms-2" style="color: var(--bs-gray); font-size: 1.5rem; font-family: 'Sacramento', cursive; font-weight: bold">Sidepr&nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="25" height="25" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path d="m86.166 124.462c0 39.165 17.458 76.823 47.897 103.318l106.937 93.081v-14.434c0-8.284 6.716-15 15-15s15 6.716 15 15v14.451l106.944-93.097c30.435-26.494 47.89-64.15 47.89-103.312v-121.163c-.772-.619-1.609-1.17-2.508-1.635-4.985-2.574-10.993-2.15-15.567 1.1l-68.026 48.323c-26.866-8.886-54.993-13.386-83.733-13.386-29.165 0-57.684 4.63-84.899 13.774l-66.713-48.606c-4.561-3.323-10.603-3.804-15.634-1.246-.929.473-1.794 1.036-2.588 1.673zm209.904 58.778c.635-6.246 5.2-11.53 11.283-13.072 6.049-1.534 12.671 1.004 16.117 6.213 3.465 5.236 3.312 12.202-.42 17.261-3.721 5.044-10.413 7.232-16.4 5.419-6.744-2.044-11.294-8.793-10.58-15.821zm-110 0c.634-6.236 5.198-11.543 11.281-13.072 6.059-1.524 12.659.999 16.119 6.213 3.472 5.232 3.309 12.205-.42 17.261-3.721 5.044-10.423 7.236-16.41 5.419-6.839-2.077-11.146-8.773-10.57-15.821z" fill="var(--primary)" data-original="#000000" style="" class=""/><path d="m455.834 114.557v9.91c0 47.843-21.211 93.746-58.193 125.939l-131.782 114.72c-2.823 2.458-6.336 3.687-9.849 3.687s-7.025-1.229-9.848-3.686l-116.346-101.27c-2.717 25.259-12.831 49.383-29.159 69.08-18.737 22.603-44.765 38.395-73.399 44.576 12.183 23.047 28.286 44.332 47.982 63.097 48.322 46.036 112.516 71.39 180.76 71.39s132.439-25.354 180.759-71.391c48.52-46.226 75.241-107.742 75.241-173.217 0-55.89-20.111-109.756-56.166-152.835z" fill="var(--primary-s)" data-original="#000000" style="" class=""/><path d="m20.016 348.388c45.899-9.456 79.395-49.617 80.492-95.996h-85.508c-8.284 0-15 6.716-15 15 0 28.754 5.157 56.744 15.047 83.012 1.484-.937 3.148-1.641 4.969-2.016z" fill="var(--primary)" data-original="#000000" style="" class=""/></g></g></svg>&nbsp;ject</span>
		    </a>
			</ul>
			<ul class="navbar-nav ms-auto d-none d-lg-flex ">
				<li class="nav-item">
		      <a class="nav-link fw-bold fs-4 p-0 m-0 mx-4" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dark Mode"><i class="fad fa-moon-stars"></i></a>
		    </li>
		    <li class="nav-item">
		      <a class="btn btn-primary px-4 fw-bold" href="#contact">Contact</a>
		    </li>
			</ul>
    </div>
  </div>
</nav>

<section class="section-header">
	<div class="container py-5">
		<div class="row align-items-center">
			<div class="col-lg-5 text-center text-lg-start mb-3 mb-lg-0" style="background-image: url(assets/img/485.svg); background-size: cover;">
				<div id="typed-strings">
					<p><span class="fw-bold text-primary">Software Developer</span></p>
					<p><span class="fw-bold text-primary">UI Design</span></p>
					<p><span class="fw-bold text-primary">Content Creator</span></p>
				</div>
				<h1 class="fw-bold mb-4"><span style="font-size: 3rem">A Fully Stack</span><br><span id="typed"></span></h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Atque culpa sequi optio labore ipsum tempora.</p>
				<div class="row justify-content-center justify-content-lg-start">
					<div class="col-md-8 col-lg-12">
						<div class="input-group p-2 bg-white rounded-1 shadow-primary">
						  <span class="input-group-text border-0 bg-white text-primary" id="mailing" style="font-size: 1.25rem"><i class="fad fa-at"></i></span>
						  <input type="text" class="form-control mailing border-0" placeholder="Email Address" aria-label="Email Address" aria-describedby="mailing">
						  <button class="btn btn-primary rounded-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Notify Me!</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 position-relative">
				<img class="img-fluid" src="assets/img/484.svg" alt="header-image">
				<div class="overlay-img-banner-left">
					<div class="card border-0 rounded-1 shadow-primary" style="width: fit-content;">
						<div class="card-body">
							<span class="h5 mx-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<u>Facebook</u><br>Isna Prasetyo"><a style="color: var(--bs-blue);" href="#"><i class="fab fa-facebook"></i></a></span>
							<span class="h5 mx-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<u>Instagram</u><br>Isnaprasetyo"><a style="color: var(--bs-indigo);" href="#"><i class="fab fa-instagram"></i></a></span>
							<span class="h5 mx-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<u>Twitter</u><br>Isna Prasetyo"><a style="color: var(--bs-cyan);" href="#"><i class="fab fa-twitter"></i></a></span>
							<span class="h5 mx-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<u>YouTube</u><br>Prasetyo Isna"><a style="color: var(--bs-red);" href="#"><i class="fab fa-youtube"></i></a></span>
						</div>
					</div>
				</div>
				<div class="overlay-img-banner-right">
					<div class="card border-0 rounded-1 shadow-primary" style="width: fit-content;">
						<div class="card-body">
							<span class="h5 mx-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<u>Github</u><br>Isna Prasetyo"><a style="color: var(--bs-dark);" href="#"><i class="fab fa-github"></i></a></span>
							<span class="h5 mx-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<u>Dribbble</u><br>Isna Prasetyo"><a style="color: var(--bs-pink);" href="#"><i class="fab fa-dribbble"></i></a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
				<div class="col-6 col-lg-4 d-block d-lg-flex text-center text-lg-start mb-3 header-icon">
					<div class="p-3 border border-secondary rounded-1 mb-3 mb-lg-0 me-lg-3 mx-auto w-fit header-icon-child">
						<i class="fad fa-swatchbook text-secondary h1 m-0"></i>
					</div>
					<div>
						<p class="mb-0 fw-bold">Title</p>
						<p class="mb-0">Lorem ipsum dolor sit amet</p>
					</div>
				</div>
				<div class="col-6 col-lg-4 d-block d-lg-flex text-center text-lg-start mb-3 header-icon">
					<div class="p-3 border border-secondary rounded-1 mb-3 mb-lg-0 me-lg-3 mx-auto w-fit header-icon-child">
						<i class="fad fa-drafting-compass text-secondary h1 m-0"></i>
					</div>
					<div>
						<p class="mb-0 fw-bold">Title</p>
						<p class="mb-0">Lorem ipsum dolor sit amet</p>
					</div>
				</div>
				<div class="col-6 col-lg-4 d-block d-lg-flex text-center text-lg-start mb-3 header-icon">
					<div class="p-3 border border-secondary rounded-1 mb-3 mb-lg-0 me-lg-3 mx-auto w-fit header-icon-child">
						<i class="fad fa-crop text-secondary h1 m-0"></i>
					</div>
					<div>
						<p class="mb-0 fw-bold">Title</p>
						<p class="mb-0">Lorem ipsum dolor sit amet</p>
					</div>
				</div>
		</div>
	</div>	
</section>
<section id="projects" class="" style="padding-top: 6rem">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 mb-4 mb-lg-0 text-center text-lg-start">
				<h1 class="fw-bold"><span style="font-size: 3rem">My Awesome</span><br><span class="text-primary">Projects</span></h1>
				<p>Lorem ipsum dolor sit amet consectetu<br>elit. Ipsam reprehenderit commodi</p>
				<button class="btn btn-primary">Download CV</button>
			</div>
			<div class="col-lg-7">
				<div class="owl-carousel owl-theme">
				  <div class="item-carousel">
						<div class="card rounded-1 border-0 shadow-primary">
							<div class="card-body p-4 text-center">
								<i class="fad fa-swatchbook text-danger mb-3" style="font-size: 4rem"></i>
								<h5 class="fw-bold">Design</h5>
								<p>Lorem, ipsum dolor sit amet consectetur</p>
							</div>
						</div>
				  </div>
				  <div class="item-carousel">
						<div class="card rounded-1 border-0 shadow-primary">
							<div class="card-body p-4 text-center">
								<i class="fad fa-swatchbook text-danger mb-3" style="font-size: 4rem"></i>
								<h5 class="fw-bold">Design</h5>
								<p>Lorem, ipsum dolor sit amet consectetur</p>
							</div>
						</div>
				  </div>
				  <div class="item-carousel">
						<div class="card rounded-1 border-0 shadow-primary">
							<div class="card-body p-4 text-center">
								<i class="fad fa-swatchbook text-danger mb-3" style="font-size: 4rem"></i>
								<h5 class="fw-bold">Design</h5>
								<p>Lorem, ipsum dolor sit amet consectetur</p>
							</div>
						</div>
				  </div>
				</div>
			</div>
		</div>
		<div class="project-wrap d-none d-md-block">
			<div class="row">
				<div class="col-4 item col-lg-3 my-2" v-for="item in 8" :key="item.src">
					<div class="card card-hover">
						<div class="card-body">
							<a :href="items[item].text" :target="items[item].text" data-toggle="tooltip" :title=" 'Open ' + items[item].text">
								<img class="figure rounded img-fluid" :src="items[item].src">
								<div class="middle">
									<div class="text"><i class="fas fa-external-link-alt" style="font-size: 3rem"></i></div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="about" class="vh-100">
	
</section>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0">
      <div class="modal-body text-center">
      	<div class="modal-icon mx-auto mb-3">
      		<i class="fad fa-check text-primary p-3" style="font-size: 3rem"></i>
      	</div>
        <h5>Thaks For Subscribe</h5>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script type="text/javascript">
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
<script>
  var typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
    loop: true,
    typeSpeed: 30,
    smartBackspace: true,
  });
</script>
<script type="text/javascript">
$('#nav a').click(function () {
    $('#nav a.active').removeClass('active');
    $(this).addClass('active');
});
$('#nav a').click(function () {
    $('#nav .overlay-link').remove();
    $(this).find('i').append("<div class='overlay-link'></div>");
});


$(window).scroll(function () {
    var href = $(this).scrollTop();
    $('.active-link').each(function (event) {
        if (href >= $($(this).attr('href')).offset().top -1) {
            $('#nav a.active').removeClass('active');
            $(this).addClass('active');
        }
    });


    $('.active-link').each(function (event) {
        if (href >= $($(this).attr('href')).offset().top -1) {
            $('#nav .overlay-link').remove();
    				$(this).find('i').append("<div class='overlay-link'></div>");
        }
    });
});

</script>
<script>
var myModal = $('#staticBackdrop').on('shown.bs.modal', function () {
    clearTimeout(myModal.data('hidden.bs.modal'))
    var id = setTimeout(function(){
        myModal.modal('hide.bs.modal');
    });
    myModal.data('hidden.bs.modal', id);
})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})
</script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
// vue
var example1 = new Vue({
  el: '#slider',
  data: {
    items: [
      { text: 'http://www.smkn1mandiraja.unaux.com',
        src: 'assets/img/1.webp'},
      { text: 'http://www.sikos.unaux.com', 
        src: 'assets/img/2.webp'},
      { text: 'http://www.rania.unaux.com',
        src: 'assets/img/3.webp'},
      { text: 'http://www.tabungan.unaux.com', 
        src: 'assets/img/4.webp'},
      { text: 'http://www.mmkproject.unaux.com',
        src: 'assets/img/5.webp'},
      { text: '#', 
        src: 'assets/img/6.webp'},
      { text: 'https://bisa.co.id',
        src: 'assets/img/7.webp'},
      { text: 'https://campusnet.id', 
        src: 'assets/img/8.webp'},
      { text: 'https://demo.campusnet.id', 
        src: 'assets/img/9.webp'}
    ]
  }
})

var example2 = new Vue({
  el: '#projects',
  data: {
    items: [
      { text: 'http://www.smkn1mandiraja.unaux.com',
        src: 'assets/img/1.webp'},
      { text: 'http://www.sikos.unaux.com', 
        src: 'assets/img/2.webp'},
      { text: 'http://www.rania.unaux.com',
        src: 'assets/img/3.webp'},
      { text: 'http://www.tabungan.unaux.com', 
        src: 'assets/img/4.webp'},
      { text: 'http://www.mmkproject.unaux.com',
        src: 'assets/img/5.webp'},
      { text: '#', 
        src: 'assets/img/6.webp'},
      { text: 'https://bisa.co.id',
        src: 'assets/img/7.webp'},
      { text: 'https://campusnet.id', 
        src: 'assets/img/8.webp'},
      { text: 'https://demo.campusnet.id', 
        src: 'assets/img/9.webp'}
    ]
  }
})

</script>
</body>
</html>