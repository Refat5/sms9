@extends('layout.front-end.app')
@section('content')
<section class="banner-area owl-carousel" id="home">
    @php($banners=\App\Models\Slider::where('status',1)->orderBy('id','desc')->get())
    @foreach ( $banners as $key=>$banner )
    <div class="single_slide_banner slide_bg1">
        <img src="/{{ $banner->image }}">
        
          
	</div>
    @endforeach
	
</section>


<section class="section_gap portfolio_area" id="work">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="main-title">
					<h1>About Us</h1>
					{!! $limit !!}
				</div>
			</div>
		</div>
		<div class="projects_inner row grid">
			<div class="grid-sizer col-sm-6 col-md-3 col-lg-3"></div>
			<div class="col-lg-6 col-sm-6 col-sm-12 brand grid-item">
				<div class="projects_item">
                    @php($photo = \App\Models\PhotoGallery::orderBy('id','desc')->where('status', 1)->get());

                    
					<img class="img-fluid w-100" src="{{ asset('assets/front-end/img/12.jpg')}}" alt="">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-sm-12 brand work grid-item">
				<div class="projects_item">
					<img class="img-fluid w-100" src="{{ asset('assets/front-end/img/19.jpg')}}" alt="">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 work grid-item">
				<div class="projects_item">
					<img class="img-fluid w-100" src="{{ asset('assets/front-end/img/34.jpg')}}" alt="">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 brand work grid-item">
				<div class="projects_item">
					<img class="img-fluid w-100" src="{{ asset('assets/front-end/img/35.jpg')}}" alt="">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 brand prohject grid-item">
				<div class="projects_item">
					<img class="img-fluid w-100" src="{{ asset('assets/front-end/img/30.jpg')}}" alt="">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 brand work prohject grid-item">
				<div class="projects_item">
					<img class="img-fluid w-100" src="{{ asset('assets/front-end/img/30.jpg')}}" alt="">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 brand work prohject grid-item">
				<div class="projects_item">
					<img class="img-fluid w-100" src="{{ asset('assets/front-end/img/36.jpg')}}" alt="">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 brand work prohject grid-item">
				<div class="projects_item">
					<img class="img-fluid w-100" src="{{ asset('assets/front-end/img/35.jpg')}}" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Video Area -->
<section class="home-video-area bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-10 m-auto">
				<video autoplay muted controls class="w-100 h-100">
                    @php($config=\App\Models\Setting::where('type','homeVideo')->first())

				  	<source src="{{ $config['value']}}" type="video/mp4">
				</video>
			</div>
		</div>
	</div>
</section>	

    
@endsection