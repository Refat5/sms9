<footer class="footer_area py-5">
	<div class="container">
		<div class="row footer_inner justify-content-center">
			<div class="col-lg-6 text-center">
				<aside class="f_widget social_widget">
					<div class="f_logo">
						<img src="{{ asset('assets/front-end/img/logo.jpg')}}" alt="">
						<div class="logo-slogan">
                             
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
					<p class="mb-0">
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> This template is made with  by <a href="https://bizitbd.com/" target="_blank">Bizitbd</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>

