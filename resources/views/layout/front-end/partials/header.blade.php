<!-- Header Area -->
<header class="header_area">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container-fluid">

				<a class="navbar-brand" href="/">
					<img src="{{ asset('assets/front-end/img/logo.jpg')}}" alt="">
				
				</a>
                <div class="logo-slogan" style="width: 178px;
                color: black;">
                    
                    @php($config=\App\Helpers\Helper::get_app_settings('appAddress'))
                    <strong style="width: 23px;">{{ $config['name'] }}</strong>
                
                </div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav justify-content-end">
						<li class="nav-item active"><a class="nav-link" href="/"><i class="fa fa-home mr-1"></i>Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('contact.home') }}">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('memberList',[0]) }}">Executive Committee</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('memberList',[1]) }}">Honor Board</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('memberList',[2]) }}">Members</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('socialActivity') }}">Social Activities</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('memberList',[3]) }}">Donor</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('notice') }}">Notice</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('photoGallery') }}">Photo Gallery</a></li>
						<li class="nav-item">
							<a class="nav-link" href="{{ asset('img/doc/pc.pdf')}}" download target="_blank">Download</a>
						</li>
						<li class="nav-item">
							{{-- <select class="form-control">
								<option>En</option>
								<option>Bn</option>
							</select> --}}
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
