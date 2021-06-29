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
					
				</div>
                {!! $limit !!}
			</div>
		</div>
		
	</div>
</section>

<section class="gallery-area section_gap gray-bg">
    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">              
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <img src="" class="imagepreview" style="width: 100%;" >
            </div>
          </div>
        </div>
      </div>
	<div class="container">
        <div class="main-title">
            <h1>Our Photo</h1>
            
        </div>
		<div class="portfolio">
            
	
                    @php($photos = \App\Models\PhotoGallery::orderBy('id','desc')->where('status',1)->take(8)->get())
            @foreach ($photos as $photo)
            <a href="javascript:void(0)" class="card pop">
			    <div class="image" style=" padding:46px;">
                    <img src="{{ $photo->image }}" alt="" />
			    </div>
			</a>
            @endforeach     

		</div>
        <a class="btn btn-secondary mt-3" style="margin-left: 100%;" href="{{ route('photoGallery') }}"> View All</a>

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

@push('script')
<script>
    $(function() {
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');   
		});		
});
</script>
@endpush