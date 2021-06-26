@extends('layout.front-end.app')
@section('content')
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-right">
				<h1>Photo Gallery</h1>
				<div class="page_link">
					<a href="/">Home</a>
					<a href="javascript:void(0)">Photo Gallery</a>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="gallery-area section_gap gray-bg">
	<div class="container">
		<div class="portfolio">
	
                    @php($photos = \App\Models\PhotoGallery::orderBy('id','desc')->where('status',1)->get())
            @foreach ($photos as $photo)
            <a href="javascript:void(0)" class="card">
			    <div class="image">
                    <img src="{{ $photo->image }}" alt="" />
			    </div>
			</a>
            @endforeach
			     

		</div>
	</div>
</section>
@endsection