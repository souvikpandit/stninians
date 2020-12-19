
<!-- Slider Area Start -->
@php
    $all_banners = PrayuktySelect('App\Models\website\Post','type','banner');
@endphp
        <div id="rs-slider" class="slider-overlay-2">
        	<div id="home-slider">
                @foreach ($all_banners as $banner)
                    @if ($loop->iteration==1)
                        <div class="item active">
                    @else
                        <div class="item">
                    @endif
                        <img src="{{ asset('storage/'.$banner->image) }}" alt="Slide1">
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container text-center">
									<h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">{{ $banner->name }}</h1>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">{{ $banner->getMetaDetails($banner->id,'sub_title') }}</p>
									<a href="{{ $banner->getMetaDetails($banner->id,'read_more_button_url') }}" class="sl-readmore-btn mr-30" data-animation-in="lightSpeedIn" data-animation-out="animate-out">READ MORE</a>
									<a href="{{ $banner->getMetaDetails($banner->id,'get_started_button_url') }}" class="sl-get-started-btn" data-animation-in="lightSpeedIn" data-animation-out="animate-out">GET STARTED NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>
                @endforeach

        	</div>
        </div>
        <!-- Slider Area End -->
