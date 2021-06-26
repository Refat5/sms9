@extends('layout.front-end.app')
@section('content')

<section class="notice-area section_gap gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="notice-box box-shadow-1">
                    @php($notic = \App\Models\Setting::where('type','our_vision')->first())
					<p class="mb-0">
                        {!! $notic->value !!}
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection