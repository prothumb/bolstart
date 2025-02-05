@extends('frontend.layouts.about')

@section('title') {{app_name()}} @endsection

@section('content')

<div data-elementor-type="wp-page" data-elementor-id="972" class="elementor elementor-972">

			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-2cd9cb30 
				elementor-section-boxed elementor-section-height-default elementor-section-height-default" style="margin-bottom:0px"
				data-id="2cd9cb30" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1ad1785"
						data-id="1ad1785" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">

							<section
								class="elementor-section elementor-inner-section elementor-element elementor-element-fd2f942 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
								data-id="fd2f942" data-element_type="section">

								<div class="elementor-container elementor-column-gap-no">
									
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c5d40fa"
										data-id="c5d40fa" data-element_type="column" style="width:100%">

										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-b487ebe elementor-widget elementor-widget-heading"
												data-id="b487ebe" data-element_type="widget"
												data-widget_type="heading.default">
												<div class="elementor-widget-container" style="height:400px">
													<h2 class="elementor-heading-title elementor-size-default" style="text-align:center">
														{{$aboutPageContents['header_heading']}}</h2>
													<p class="elementor-heading-title elementor-size-default" 
													style="text-align:center;font-size:20px;margin-top:20px;font-weight:normal">
													{{$aboutPageContents['header_paragraph']}}

													</p>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							
							
						</div>
					</div>
				</div>
			</section>

			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-68973a6 elementor-section-boxed 
				elementor-section-height-default elementor-section-height-default" style="padding:80px 0px 80px 0px"
				data-id="68973a6" data-element_type="section">
				<div class="elementor-container elementor-column-gap-default">
					
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-113c68e" 
					 style="width:100%;text-align:center"
						data-id="113c68e" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							
							<div class="elementor-element elementor-element-09b9d5f elementor-widget elementor-widget-heading"
								data-id="09b9d5f" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">{{$aboutPageContents['vision_heading']}}
								    </h2>
									<p class="elementor-heading-title elementor-size-default" 
													style="text-align:center;font-size:20px;margin-top:20px;font-weight:normal">

											{{$aboutPageContents['vision_paragraph']}}
 
									</p>
								</div>
							</div>						
						</div>
					</div>
				</div>
			</section>

			<hr style="width:50%;margin-left:25%;margin-right:25%"/>


			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-68973a6 elementor-section-boxed 
				elementor-section-height-default elementor-section-height-default" style="padding:80px 0px 80px 0px"
				data-id="68973a6" data-element_type="section">
				<div class="elementor-container elementor-column-gap-default">
					
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-113c68e" 
					 style="width:100%;text-align:center"
						data-id="113c68e" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							
							<div class="elementor-element elementor-element-09b9d5f elementor-widget elementor-widget-heading"
								data-id="09b9d5f" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">{{$aboutPageContents['mission_heading']}}
								    </h2>
									<p class="elementor-heading-title elementor-size-default" 
													style="text-align:center;font-size:20px;margin-top:20px;font-weight:normal">

											{{$aboutPageContents['mission_paragraph']}}	
									</p>
								</div>
							</div>						
							
						</div>
					</div>
				</div>
			</section>

			<hr style="width:50%;margin-left:25%;margin-right:25%"/>


			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-68973a6 elementor-section-boxed 
				elementor-section-height-default elementor-section-height-default" style="padding:80px 0px 80px 0px"
				data-id="68973a6" data-element_type="section">
				<div class="elementor-container elementor-column-gap-default">
					
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-113c68e" 
					 style="width:100%;text-align:center"
						data-id="113c68e" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							
							<div class="elementor-element elementor-element-09b9d5f elementor-widget elementor-widget-heading"
								data-id="09b9d5f" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">{{$aboutPageContents['who_are_we_heading']}}
								    </h2>
									<p class="elementor-heading-title elementor-size-default" 
													style="text-align:center;font-size:20px;margin-top:20px;font-weight:normal">

													{{$aboutPageContents['who_are_we_paragraph']}}
									</p>
								</div>
							</div>						
							
						</div>
					</div>
				</div>
			</section>
			

		</div>



@endsection