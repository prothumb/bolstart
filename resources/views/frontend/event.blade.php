@extends('frontend.layouts.single-event')

@section('title') Bolstart - Event - Sample Event @endsection

@section('content')

<div data-elementor-type="wp-post" data-elementor-id="715" class="elementor elementor-715 elementor-kit-3">

			<section class="elementor-section elementor-top-section 
							elementor-element elementor-element-68540f1 
							elementor-section-boxed elementor-section-height-default elementor-section-height-default" 
							data-id="68540f1" 
							data-element_type="section" 
							style="padding:150px 0px 60px 0px"
							data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-96e7b65" 
									data-id="96e7b65" data-element_type="column">

						<div class="elementor-widget-wrap elementor-element-populated">
							
							<div class="elementor-element elementor-element-457ca663 elementor-widget elementor-widget-jkit_post_title" 
								data-id="457ca663" data-element_type="widget" data-widget_type="jkit_post_title.default">
								<div class="elementor-widget-container">

									<div  class="jeg-elementor-kit jkit-post-title jeg_module_715_2_654f64e45065b" >
										<h2 class="post-title style-color ">{{$event->name}}</h2>
										<p class="style-color" style="font-family:Mulish;color:white;font-size:18px;margin-top:-20px">
										{{$event->intro}}</hp>

									</div>	
									
								</div>
							</div>
									
														
									<div class="elementor-element elementor-element-32332de2 
														       elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" 
															   data-id="32332de2" data-element_type="widget" data-widget_type="icon.default">
															
										<div class="elementor-widget-container">
											<div class="elementor-icon-wrapper">
													<div class="elementor-icon">
														<i aria-hidden="true" class="jki jki-calendar-1-light"></i>			
													</div>
											</div>
										</div>
									</div>
														
									<div class="elementor-element elementor-element-27dd5fe9 elementor-widget__width-auto 
														       elementor-widget elementor-widget-jkit_post_date" data-id="27dd5fe9" data-element_type="widget" 
															   		data-widget_type="jkit_post_date.default">

										<div class="elementor-widget-container">
											<div  class="jeg-elementor-kit jkit-post-date jeg_module_715_4_654f64e4536dd" >
												<p class="post-date ">{{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}</p>
											</div>		
										</div>
									</div>

									<div class="show-desktop elementor-element elementor-element-28d25ee9 elementor-widget__width-auto 
										elementor-view-default elementor-widget elementor-widget-icon" style="margin-left:50px"
									data-id="28d25ee9" data-element_type="widget" data-widget_type="icon.default">
										<div class="elementor-widget-container">
											<div class="elementor-icon-wrapper">
												<div class="elementor-icon">
													<i aria-hidden="true" class="jki jki-clock-light"></i>			
												</div>
											</div>
										</div>
									</div>

									<div class="elementor-element elementor-element-c0e35cc 
												      elementor-widget__width-auto elementor-widget elementor-widget-jkit_post_author" 
													  data-id="c0e35cc" data-element_type="widget" data-widget_type="jkit_post_author.default">

										<div class="elementor-widget-container">
											<div class="jeg-elementor-kit jkit-post-author jeg_module_715_3_654f64e45209e" >
												<p class="post-author "><i aria-hidden="true" class="jki jki-clock-light show-mobile" 
												style="color:#11ee84"></i>&nbsp;&nbsp;&nbsp;{{$event->event_timing}}</p>
											</div>
										</div>
									</div>


									<div class="elementor-element elementor-element-457ca663 elementor-widget elementor-widget-jkit_post_title" 
										data-id="457ca663" data-element_type="widget" data-widget_type="jkit_post_title.default" style="margin-top:50px">
										<div class="elementor-widget-container">
												<div  class="jeg-elementor-kit jkit-post-title jeg_module_715_2_654f64e45065b" >										
														<p class="style-color" style="font-family:Mulish;color:white;font-size:18px;margin-top:-20px">
														RSVP <a href="{{ $event->rsvp_link }}" target="_blank" style="color:white;text-decoration:underline">here</a></p>
												</div>										
										</div>
								</div>


								</div>

								


							</div>
						</div>
			</section>



			<section class="elementor-section elementor-top-section elementor-element elementor-element-3a3c9759 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3a3c9759" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-bc43832 jkit-sticky-element--enabled jkit-sticky-element-on--down jkit-sticky-position--sticky" data-id="bc43832" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jkit_sticky_device&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jkit_sticky_top_position&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]}}">
						<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6148738 elementor-widget__width-auto elementor-widget-tablet__width-inherit elementor-widget elementor-widget-heading" data-id="6148738" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">										
										<h2 class="elementor-heading-title elementor-size-default">Share</h2>		
									</div>
								</div>

								<div class="elementor-element elementor-element-a185a16 elementor-widget__width-auto jkit-social-shape shape-none 
				     elementor-widget elementor-widget-jkit_social_share" data-id="a185a16" data-element_type="widget" data-widget_type="jkit_social_share.default">
				
					<div class="elementor-widget-container">

						<div  class="jeg-elementor-kit jkit-social-share jeg_module_715_5_654f64e456978" >
										<ul class="social-share-list">
    										<li class="elementor-repeater-item-844dad6" data-social="facebook">
        										<a class="facebook social-icon" onclick="shareOnFacebook()"><i aria-hidden="true" class="fa fa-facebook"></i></a>
    										</li>
    										<li class="elementor-repeater-item-3afceda" data-social="twitter">
        										<a class="twitter social-icon" onclick="shareOnTwitter()"><i aria-hidden="true" class="fab fa-twitter"></i></a>
    										</li>
    										<li class="elementor-repeater-item-b3346a1" data-social="linkedin">
        										<a class="linkedin social-icon" onclick="shareOnLinkedIn()"><i aria-hidden="true" class="fab fa-linkedin-in"></i></a>
   	 										</li>
    										<li class="elementor-repeater-item-68544eb" data-social="telegram">
        										<a class="telegram social-icon" onclick="shareOnTelegram()"><i aria-hidden="true" class="fab fa-telegram-plane"></i></a>
    										</li>
										</ul>
						</div>		
					</div>
				</div>
					</div>
		</div>
				
		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-724cfb1c" 
				data-id="724cfb1c" 
				data-element_type="column">

			<div class="elementor-widget-wrap elementor-element-populated">	

				<div class="elementor-element elementor-element-3ad850aa elementor-widget elementor-widget-jkit_post_featured_image" 
					 data-id="3ad850aa" 
					 data-element_type="widget" 
					 data-widget_type="jkit_post_featured_image.default">

						<div class="elementor-widget-container">

							<div class="jeg-elementor-kit jkit-post-featured-image jeg_module_715_6_654f64e458358">

								<div class="post-featured-image">

									<img loading="lazy" width="1440" height="961" 
										 src="{{ $event->featured_image }}" 
										 class="attachment-full size-full wp-post-image" 
										 alt="selective focus of investors in suits talking with advisor on background at workspace" 
										 decoding="async" 
									/>
								</div>
							</div>		
						</div>
				</div>
								
				
				<div class="elementor-element elementor-element-594e33c8 elementor-widget elementor-widget-heading" 
										data-id="594e33c8" data-element_type="widget" data-widget_type="heading.default">

					<div class="elementor-widget-container">
						<h2 class="elementor-heading-title elementor-size-default">
							{{$event->intro}}
						</h2>		
					</div>
				</div>			


				<div class="elementor-element elementor-element-594e33c8 elementor-widget elementor-widget-heading" 
										data-id="594e33c8" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										{!! $event->content !!}
									</div>
				</div>		
				
			</div>
		</div>
		</section>
	</div>


	<script>
    function shareOnFacebook() {
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href), '_blank');
    }

    function shareOnTwitter() {
        window.open('https://twitter.com/share?url=' + encodeURIComponent(window.location.href), '_blank');
    }

    function shareOnLinkedIn() {
        window.open('https://www.linkedin.com/shareArticle?url=' + encodeURIComponent(window.location.href), '_blank');
    }

    function shareOnTelegram() {
        window.open('https://t.me/share/url?url=' + encodeURIComponent(window.location.href), '_blank');
    }
</script>


@endsection