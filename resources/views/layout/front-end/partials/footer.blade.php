<footer class="footer_area">
	<div class="container">
		<div class="row footer_inner justify-content-center">
			<div class="col-lg-6 text-center ">
				<aside class="f_widget social_widget">
					<div class="f_logo">
						<img src="{{ asset('assets/front-end/img/logo.jpg')}}" alt="">
						<div class="logo-slogan text-center" style="    max-width: 46%;
						margin: auto;">
                             
                        @php($config=\App\Helpers\Helper::get_app_settings('appAddress'))
                                   {{ $config['name'] }}
						</div>
					</div>
					<div class="f_title">
						<h4>Follow</h4>
					</div>
					<ul class="list">
                         
                        @php($config=\App\Helpers\Helper::get_app_settings('social'))
						<li><a target="_blank" href="{{ $config['facebook'] }}"><i class="fa fa-facebook"></i></a></li>
						<li><a target="_blank" href="{{ $config['twiter'] }}"><i class="fa fa-twitter"></i></a></li>
						<li><a target="_blank" href="{{ $config['youtube'] }}"><i class="fa fa-youtube"></i></a></li>
						<li><a target="_blank" href="{{ $config['instagram'] }}"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</aside>
			</div>
			<div class="col-md-12">
				<div class="copyright text-center pt-3">
					<p class="copy_right text-center">

						Developed by 
						<a href="http://bizitbd.com/" target="_blank">Biz IT BD</a>

						</p>
				</div>
			</div>
		</div>
	</div>
</footer>

