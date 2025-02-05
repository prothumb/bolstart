@extends('frontend.layouts.app')

@section('title') Bolstart | Home @endsection

@section('content')

<div data-elementor-type="wp-page" data-elementor-id="908" class="elementor elementor-908 elementor-972">

			<section
				class="elementor-section elementor-top-section 
				elementor-element elementor-element-37c2759e elementor-section-boxed elementor-section-height-default elementor-section-height-default investors-section"
				data-id="37c2759e" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1b667429"
						data-id="1b667429" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-668c1873 elementor-widget elementor-widget-heading"
								data-id="668c1873" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									
									<h2 class="elementor-heading-title elementor-size-default">{{$homePageContents['top_investor_section_small_heading']}}
									</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-3c650a45 elementor-widget elementor-widget-jkit_heading"
								data-id="3c650a45" data-element_type="widget" data-widget_type="jkit_heading.default">
								<div class="elementor-widget-container">
									<div
										class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_908_2_64fad1aab53d8">
										<div class="heading-section-title  display-inline-block">
											<h2 class="heading-title home-main-heading-title">{{$homePageContents['top_investor_section_main_heading_part_1']}} <span class="style-color home-main-heading-title" style="display:inline">
											{{$homePageContents['top_investor_section_main_heading_part_2']}}</span>
												{{$homePageContents['top_investor_section_main_heading_part_3']}}</span></h2>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-1649c294 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
								data-id="1649c294" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
								{{$homePageContents['top_investor_section_paragraph']}}
								</div>
							</div>
							<div class="elementor-element elementor-element-4f9c1dc4 elementor-widget elementor-widget-spacer"
								data-id="4f9c1dc4" data-element_type="widget" data-widget_type="spacer.default">
								<div class="elementor-widget-container">

									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>

							<div class="elementor-element elementor-element-53067593 elementor-widget__width-auto elementor-widget elementor-widget-jkit_button"
								data-id="53067593" data-element_type="widget" data-widget_type="jkit_button.default">
								<div class="elementor-widget-container">
									<div
										class="jeg-elementor-kit jkit-button  icon-position-after jeg_module_908_3_64fad1aabcb22">
										<a href="{{$homePageContents['top_investor_section_button_link']}}" class="jkit-button-wrapper">{{$homePageContents['top_investor_section_button_text']}}</a>
									</div>
								</div>
							</div>

							<div class="elementor-element elementor-element-3a7b9eee elementor-widget__width-auto elementor-widget elementor-widget-jkit_video_button"
								data-id="3a7b9eee" data-element_type="widget"
								data-widget_type="jkit_video_button.default">
								<div class="elementor-widget-container">
									<div class="jeg-elementor-kit jkit-video-button jeg_module_908_4_6517afd4199b7"
										data-autoplay="0" data-loop="0" data-controls="0" data-type="youtube"
										data-mute="0" data-start="0" data-end="0">
										<a href="{{$homePageContents['top_investor_section_youtube_video_link']}}"
											class="jkit-video-popup-btn glow-enable">
											<span class="icon-position-before"><i aria-hidden="true"
													class="fa fa-play"></i></span>
										</a>
									</div>
								</div>
							</div>


							<div class="elementor-element elementor-element-64a86bbe elementor-widget__width-auto elementor-hidden-mobile elementor-widget elementor-widget-jkit_button"
								data-id="64a86bbe" data-element_type="widget" data-widget_type="jkit_button.default">
								<div class="elementor-widget-container">
									<div
										class="jeg-elementor-kit jkit-button  icon-position-after jeg_module_908_5_6517afd41a49d">
										<a href="" class="jkit-button-wrapper">{{$homePageContents['top_investor_section_video_button_text']}}</a></div>
								</div>
							</div>


							<div class="elementor-element elementor-element-ac41984 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
								data-id="ac41984" data-element_type="widget" data-widget_type="divider.default">
								<div class="elementor-widget-container">

									<div class="elementor-divider">
										<span class="elementor-divider-separator">
										</span>
									</div>
								</div>
							</div>
							<section
								class="elementor-section elementor-inner-section elementor-element elementor-element-43971b0e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
								data-id="43971b0e" data-element_type="section">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6a0600f9"
										data-id="6a0600f9" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated" >
											<div class="elementor-element elementor-element-189e6eb9 elementor-widget__width-initial elementor-widget elementor-widget-image"
												data-id="189e6eb9" data-element_type="widget"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img width="300" height="300"
														src="img/young-woman-smiling-cheerful-concept-PYF2KEL-300x300.jpg"
														class="attachment-medium size-medium wp-image-345" alt=""
														decoding="async" loading="lazy"
														srcset="img/young-woman-smiling-cheerful-concept-PYF2KEL-300x300.jpg 300w, 
														img/young-woman-smiling-cheerful-concept-PYF2KEL-150x150.jpg 150w, 
														img/young-woman-smiling-cheerful-concept-PYF2KEL-768x768.jpg 768w, 
														img/young-woman-smiling-cheerful-concept-PYF2KEL.jpg 800w"
														sizes="(max-width: 300px) 100vw, 300px" />
												</div>
											</div>
											<div class="elementor-element elementor-element-4f9c2602 elementor-widget__width-initial elementor-widget elementor-widget-image"
												data-id="4f9c2602" data-element_type="widget"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img width="300" height="300"
														src="img/young-man-with-redhead-beard-and-cap-TXQKADY-300x300.jpg"
														class="attachment-medium size-medium wp-image-344" alt=""
														decoding="async" loading="lazy"
														srcset="img/young-man-with-redhead-beard-and-cap-TXQKADY-300x300.jpg 300w, 
														img/young-man-with-redhead-beard-and-cap-TXQKADY-150x150.jpg 150w, 
														img/young-man-with-redhead-beard-and-cap-TXQKADY-768x768.jpg 768w, 
														img/young-man-with-redhead-beard-and-cap-TXQKADY.jpg 800w"
														sizes="(max-width: 300px) 100vw, 300px" />
												</div>
											</div>
											<div class="elementor-element elementor-element-3db4983 elementor-widget__width-initial elementor-widget elementor-widget-image"
												data-id="3db4983" data-element_type="widget"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img width="300" height="300"
														src="img/handsome-man-smiling-in-the-park-RKUHFQB-300x300.jpg"
														class="attachment-medium size-medium wp-image-340" alt=""
														decoding="async" loading="lazy"
														srcset="img/handsome-man-smiling-in-the-park-RKUHFQB-300x300.jpg 300w, 
														img/handsome-man-smiling-in-the-park-RKUHFQB-150x150.jpg 150w, 
														img/handsome-man-smiling-in-the-park-RKUHFQB-768x768.jpg 768w, 
														img/handsome-man-smiling-in-the-park-RKUHFQB.jpg 800w"
														sizes="(max-width: 300px) 100vw, 300px" />
												</div>
											</div>
											<div class="elementor-element elementor-element-487a953 elementor-widget__width-initial elementor-widget elementor-widget-image"
												data-id="487a953" data-element_type="widget"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img width="300" height="300"
														src="img/portrait-of-a-woman-6M4S34K-300x300.jpg"
														class="attachment-medium size-medium wp-image-341" alt=""
														decoding="async" loading="lazy"
														srcset="img/portrait-of-a-woman-6M4S34K-300x300.jpg 300w, 
														img/portrait-of-a-woman-6M4S34K-150x150.jpg 150w, 
														img/portrait-of-a-woman-6M4S34K-768x768.jpg 768w, 
														img/portrait-of-a-woman-6M4S34K.jpg 800w"
														sizes="(max-width: 300px) 100vw, 300px" />
												</div>
											</div>
											<div class="elementor-element elementor-element-8d92703 elementor-widget__width-auto elementor-widget elementor-widget-heading"
												data-id="8d92703" data-element_type="widget"
												data-widget_type="heading.default">
												<div class="elementor-widget-container count-circle" 
														>
													<h2 class="elementor-heading-title elementor-size-default" style="text-align:center">
														{{$homePageContents['top_investor_section_number_of_investors']}}
													</h2>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-17d389ab"
										data-id="17d389ab" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-6d4343cd elementor--star-style-star_unicode elementor-widget elementor-widget-star-rating"
												data-id="6d4343cd" data-element_type="widget"
												data-widget_type="star-rating.default">

											</div>
											<div class="elementor-element elementor-element-3c259f4c elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-widget elementor-widget-jkit_heading"
												data-id="3c259f4c" data-element_type="widget"
												data-widget_type="jkit_heading.default" style="margin-top:-13px">

												<div class="elementor-widget-container">
													<div
														class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_908_6_64fad1aad08e0">
														<div class="heading-section-title  display-inline-block">
															<h2 class="heading-title">
																{{$homePageContents['top_investor_section_number_of_investors_heading']}}
															</h2>
														</div>

														<div class="heading-section-title  display-inline-block">
															<h4 class="heading-title" style="font-size:13px">
																{{$homePageContents['top_investor_section_number_of_investors_text']}}
															</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4dd347bf"
						data-id="4dd347bf" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-409a338 elementor-widget__width-initial elementor-absolute elementor-hidden-mobile elementor-widget elementor-widget-jkit_pie_chart"
								data-id="409a338" data-element_type="widget"
								data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
								data-widget_type="jkit_pie_chart.default">
								<div class="elementor-widget-container">
									<div class="jeg-elementor-kit jkit-pie-chart style-static  jeg_module_908_7_64fad1aad73da"
										data-cutout="93" data-percent="98" data-color-type="normal" data-color="#11ee84"
										data-bg-color="#02010117" data-gradient1="#11ee84" data-gradient2="#009cc347"
										data-animation-duration="3600" data-content-type="percentage">
										<div class="pie-chart-wrapper">
											<span class="pie-chart-content">{{$homePageContents['top_investor_section_right_card_2_number']}}%</span>
											<canvas class="main-canvas" height="100" width="100"></canvas>
											<canvas class="background-canvas" height="100" width="100"></canvas>
										</div>
										<h2 class="pie-chart-title">{{$homePageContents['top_investor_section_right_card_2_heading']}}</h2>
										<div class="pie-chart-description">
											<p>{{$homePageContents['top_investor_section_right_card_2_text']}}</p>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-76e257a5 elementor-widget__width-initial elementor-absolute elementor-widget-mobile__width-initial jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
								data-id="76e257a5" data-element_type="widget"
								data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
								data-widget_type="jkit_icon_box.default">
								<div class="elementor-widget-container">
									<div
										class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_908_8_64fad1aadc81b">
										<div class="jkit-icon-box-wrapper hover-from-left">
											<div class="icon-box icon-box-header elementor-animation-">
												<div class="icon style-color"><i aria-hidden="true"
														class="jki jki-line-chart-light"></i></div>
											</div>
											<div class="icon-box icon-box-body">
												<h2 class="title">{{$homePageContents['top_investor_section_right_card_1_heading']}}</h2>
												<p class="icon-box-description">{{$homePageContents['top_investor_section_right_card_1_text_1']}} <br> 
																				{{$homePageContents['top_investor_section_right_card_1_text_2']}} <br>
																				{{$homePageContents['top_investor_section_right_card_1_text_3']}}</p>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-414facc7 elementor-widget elementor-widget-image"
								data-id="414facc7" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container">
									<img width="1000" height="1500"
										src="img/smiling-asian-businesswoman-enjoying-the-phone-answering-questions-talking-to-customers-on-the-pho-e1676701439858.jpg"
										class="attachment-full size-full wp-image-201"
										alt="Image"
										decoding="async" loading="lazy"
										srcset="img/smiling-asian-businesswoman-enjoying-the-phone-answering-questions-talking-to-customers-on-the-pho-e1676701439858.jpg 1000w, 
										img/smiling-asian-businesswoman-enjoying-the-phone-answering-questions-talking-to-customers-on-the-pho-e1676701439858-200x300.jpg 200w, 
										img/smiling-asian-businesswoman-enjoying-the-phone-answering-questions-talking-to-customers-on-the-pho-e1676701439858-683x1024.jpg 683w, 
										img/smiling-asian-businesswoman-enjoying-the-phone-answering-questions-talking-to-customers-on-the-pho-e1676701439858-768x1152.jpg 768w, 
										img/smiling-asian-businesswoman-enjoying-the-phone-answering-questions-talking-to-customers-on-the-pho-e1676701439858-800x1200.jpg 800w"
										sizes="(max-width: 1000px) 100vw, 1000px" />
								</div>
							</div>
							<div class="elementor-element elementor-element-207fc87d elementor-widget__width-initial elementor-absolute elementor-widget-mobile__width-initial elementor-widget elementor-widget-spacer"
								data-id="207fc87d" data-element_type="widget"
								data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
								data-widget_type="spacer.default">
								<div class="elementor-widget-container">
									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr class="major-separator">

			</section>

			

			<!-- Banner - for startups-->
			<section
				class="elementor-section elementor-top-section elementor-element home-page-startups-banner
				elementor-element-37c2759e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="37c2759e" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
				>				

				<div class="elementor-background-overlay"></div>

				<div class="elementor-container elementor-column-gap-default">

					<div class="elementor-column elementor-col-60 elementor-top-column elementor-element elementor-element-1b667429"
						data-id="1b667429" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-668c1873 elementor-widget elementor-widget-heading"
								data-id="668c1873" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									
									<h2 class="elementor-heading-title elementor-size-default" style="display: none;">
										
									</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-3c650a45 elementor-widget elementor-widget-jkit_heading"
								data-id="3c650a45" data-element_type="widget" data-widget_type="jkit_heading.default">
								<div class="elementor-widget-container">
									<div
										class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_908_2_64fad1aab53d8">
										<div class="heading-section-title  display-inline-block">
											<h2 class="heading-title home-main-heading-title">
											{{$homePageContents['top_startup_section_heading_part_1']}}
											<span class="style-color home-main-heading-title"><span>{{$homePageContents['top_startup_section_heading_part_2']}}
												 </span></span></h2>
										</div>
									</div>
								</div>
							</div>
							
							<div class="elementor-element elementor-element-4f9c1dc4 elementor-widget elementor-widget-spacer"
								data-id="4f9c1dc4" data-element_type="widget" data-widget_type="spacer.default">
								<div class="elementor-widget-container">

									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>		
						</div>
					</div>

					<div class="elementor-column elementor-col-40 elementor-top-column elementor-element elementor-element-4dd347bf"
						data-id="4dd347bf" data-element_type="column">
						

						<section
								class="elementor-section elementor-inner-section elementor-element home-page-startup-slide-thumbnails
								elementor-element-43971b0e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
								data-id="43971b0e" data-element_type="section" 
								>

								<div class="elementor-container elementor-column-gap-no home-page-startup-slide-thumbnails-inner" 
								>

									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6a0600f9" 
									style="width:auto"
										data-id="6a0600f9" data-element_type="column">

										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-189e6eb9 elementor-widget__width-initial elementor-widget elementor-widget-image"
												data-id="189e6eb9" data-element_type="widget"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img width="300" height="300"
														src="img/young-woman-smiling-cheerful-concept-PYF2KEL-300x300.jpg"
														class="attachment-medium size-medium wp-image-345" alt=""
														decoding="async" loading="lazy"
														srcset="img/young-woman-smiling-cheerful-concept-PYF2KEL-300x300.jpg 300w, 
														img/young-woman-smiling-cheerful-concept-PYF2KEL-150x150.jpg 150w, 
														img/young-woman-smiling-cheerful-concept-PYF2KEL-768x768.jpg 768w, 
														img/young-woman-smiling-cheerful-concept-PYF2KEL.jpg 800w"
														sizes="(max-width: 300px) 100vw, 300px" />
												</div>
											</div>
											<div class="elementor-element elementor-element-4f9c2602 elementor-widget__width-initial elementor-widget elementor-widget-image"
												data-id="4f9c2602" data-element_type="widget"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img width="300" height="300"
														src="img/young-man-with-redhead-beard-and-cap-TXQKADY-300x300.jpg"
														class="attachment-medium size-medium wp-image-344" alt=""
														decoding="async" loading="lazy"
														srcset="img/young-man-with-redhead-beard-and-cap-TXQKADY-300x300.jpg 300w, 
														img/young-man-with-redhead-beard-and-cap-TXQKADY-150x150.jpg 150w, 
														img/young-man-with-redhead-beard-and-cap-TXQKADY-768x768.jpg 768w,
														img/young-man-with-redhead-beard-and-cap-TXQKADY.jpg 800w"
														sizes="(max-width: 300px) 100vw, 300px" />
												</div>
											</div>
											<div class="elementor-element elementor-element-3db4983 elementor-widget__width-initial elementor-widget elementor-widget-image"
												data-id="3db4983" data-element_type="widget"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img width="300" height="300"
														src="img/handsome-man-smiling-in-the-park-RKUHFQB-300x300.jpg"
														class="attachment-medium size-medium wp-image-340" alt=""
														decoding="async" loading="lazy"
														srcset="img/handsome-man-smiling-in-the-park-RKUHFQB-300x300.jpg 300w, 
														img/handsome-man-smiling-in-the-park-RKUHFQB-150x150.jpg 150w, 
														img/handsome-man-smiling-in-the-park-RKUHFQB-768x768.jpg 768w, 
														img/handsome-man-smiling-in-the-park-RKUHFQB.jpg 800w"
														sizes="(max-width: 300px) 100vw, 300px" />
												</div>
											</div>
											<div class="elementor-element elementor-element-487a953 elementor-widget__width-initial elementor-widget elementor-widget-image"
												data-id="487a953" data-element_type="widget"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img width="300" height="300"
														src="img/portrait-of-a-woman-6M4S34K-300x300.jpg"
														class="attachment-medium size-medium wp-image-341" alt=""
														decoding="async" loading="lazy"
														srcset="img/portrait-of-a-woman-6M4S34K-300x300.jpg 300w, 
														img/portrait-of-a-woman-6M4S34K-150x150.jpg 150w, 
														img/portrait-of-a-woman-6M4S34K-768x768.jpg 768w, 
														img/portrait-of-a-woman-6M4S34K.jpg 800w"
														sizes="(max-width: 300px) 100vw, 300px" />
												</div>
											</div>
											<div class="elementor-element elementor-element-8d92703 elementor-widget__width-auto elementor-widget elementor-widget-heading"
												data-id="8d92703" data-element_type="widget"
												data-widget_type="heading.default">
												<div class="elementor-widget-container count-circle">
													<h2 class="elementor-heading-title elementor-size-default">
														{{$homePageContents['top_startup_section_number_of_startups']}}
													</h2>
												</div>
											</div>
										</div>

									</div>

									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-17d389ab" 
									style="width:auto;margin-left:10px"
										data-id="17d389ab" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-6d4343cd elementor--star-style-star_unicode elementor-widget elementor-widget-star-rating"
												data-id="6d4343cd" data-element_type="widget"
												data-widget_type="star-rating.default">

											</div>
											<div class="elementor-element elementor-element-3c259f4c elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-widget elementor-widget-jkit_heading"
												data-id="3c259f4c" data-element_type="widget"
												data-widget_type="jkit_heading.default" style="margin-top:-13px">

												<div class="elementor-widget-container">
													<div
														class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_908_6_64fad1aad08e0">
														<div class="heading-section-title  display-inline-block">
															<h2 class="heading-title">{{$homePageContents['top_startup_section_number_of_startups_heading']}}
															</h2>
														</div>

														<div class="heading-section-title  display-inline-block">
															<h4 class="heading-title" style="font-size:13px">
																{{$homePageContents['top_startup_section_number_of_startups_text']}}															
															</h4>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										
									</div>									
								</div>

								<div class="elementor-element elementor-element-1649c294 elementor-widget__width-initial home-page-startup-slide-paragraph
										elementor-widget elementor-widget-text-editor"
										data-id="1649c294" data-element_type="widget" 
											data-widget_type="text-editor.default">
									<div class="elementor-widget-container" >
										<span style="word-wrap: break-word; overflow-wrap: break-word;">{{$homePageContents['top_startup_section_paragraph']}}</span>
									</div>
								</div>
							</section>
							
					</div>
				</div>
			</section>
			<!--END - banner for startups-->


			<!-- Investors in our community-->
			<section class="elementor-section elementor-top-section elementor-element elementor-element-257319d3 elementor-section-full_width 
				elementor-section-height-default elementor-section-height-default custom-section
				data-id=" 257319d3" data-element_type="section">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-54417c3"
						data-id="54417c3" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-706c8daf elementor-widget elementor-widget-jkit_heading"
								data-id="706c8daf" data-element_type="widget" data-widget_type="jkit_heading.default">
								<div class="elementor-widget-container">
									<div
										class="jeg-elementor-kit jkit-heading  align-center align-tablet- align-mobile- jeg_module_908_9_64fad1aae5c7d">
										<div class="heading-section-title  display-inline-block">

											<h3 class="heading-title">{{$homePageContents['partners_section_heading_part_1']}} <span
													class="style-color"><span>{{$homePageContents['partners_section_heading_part_2']}}</span></span>
											</h3>
										</div>
									</div>
								</div>
							</div>

							<div class="elementor-element elementor-element-4dcde901 elementor-widget elementor-widget-jkit_client_logo"
								data-id="4dcde901" data-element_type="widget"
								data-widget_type="jkit_client_logo.default">
								<div class="elementor-widget-container">
									<div class="jeg-elementor-kit jkit-client-logo arrow-bottom-middle jeg_module_908_10_64fad1aaeb355"
										data-id="jeg_module_908_10_64fad1aaeb355"
										data-settings="{&quot;autoplay&quot;:true,&quot;autoplay_speed&quot;:3500,&quot;autoplay_hover_pause&quot;:false,&quot;show_navigation&quot;:false,&quot;navigation_left&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-left\&quot;&gt;&lt;\/i&gt;&quot;,&quot;navigation_right&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-right\&quot;&gt;&lt;\/i&gt;&quot;,&quot;show_dots&quot;:false,&quot;arrow_position&quot;:&quot;bottom&quot;,&quot;responsive&quot;:{&quot;desktop&quot;:{&quot;items&quot;:7,&quot;margin&quot;:40,&quot;breakpoint&quot;:1025},&quot;tablet&quot;:{&quot;items&quot;:4,&quot;margin&quot;:40,&quot;breakpoint&quot;:768},&quot;mobile&quot;:{&quot;items&quot;:2,&quot;margin&quot;:30,&quot;breakpoint&quot;:0}}}">
									
									
										<div class="" style="display:flex;flex-direction: row;justify-content: space-between;margin-left:3%;margin-right:3%">

											<div class="" style="display:flex;flex-direction: row;justify-content: space-between;width:100vw;align-items:center">
												

												<div class="client-slider item" style="width:18%">
													<div class="image-list" style="width:100%">
														<div class="content-image">
															<img decoding="async"
																src="img/spring.svg" style="width:80%"
																class="main-image" alt="Title"></div>
													</div>
												</div>

												<div class="client-slider item" style="width:18%">
													<div class="image-list" style="width:100%">
														<div class="content-image" style="width:80%">
														<img decoding="async"
																src="img/pentathlon-ventures.svg" style="width:100%"
																class="main-image" alt="Title"></div>
													</div>
												</div>

												<div class="client-slider item" style="width:18%">
													<div class="image-list" style="width:100%">
														<div class="content-image" style="width:100%">
														<img decoding="async"
																src="img/windrose-logo.jpeg" style="width:100%"
																class="main-image" alt="Title"></div>
													</div>
												</div>

												<div class="client-slider item" style="width:18%">
													<div class="image-list" style="width:100%">
														<div class="content-image" style="width:100%">
														<img decoding="async"
																src="img/ankur-capital.svg" style="width:100%"
																class="main-image" alt="Title"></div>
													</div>
												</div>

												<div class="client-slider item" style="width:18%">
													<div class="image-list" style="width:100%">
														<div class="content-image" style="width:100%">
														<img decoding="async"
																src="img/artha-venture.png" style="width:100%"
																class="main-image" alt="Title"></div>
													</div>
												</div>												
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-2c839ec2 elementor-widget elementor-widget-spacer"
								data-id="2c839ec2" data-element_type="widget" data-widget_type="spacer.default">
								<div class="elementor-widget-container">
									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END - investors in our community-->


			<!-- About Bolstart-->
			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-4f814def elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="4f814def" data-element_type="section">
				<div class="elementor-container elementor-column-gap-default">

					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-30e1cb0"
						data-id="30e1cb0" data-element_type="column">

						<div class="elementor-widget-wrap elementor-element-populated">
							<section
								class="elementor-section elementor-inner-section elementor-element elementor-element-4a99bd9b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
								data-id="4a99bd9b" data-element_type="section">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-48e5c609"
										data-id="48e5c609" data-element_type="column">

										<div class="elementor-widget-wrap elementor-element-populated">

											<div class="elementor-element elementor-element-4792cb28 
											jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" id="about-div-1"
											   				onclick="changeContent(1)" onmouseover="changeContent(1)"

												data-id="74178582" data-element_type="widget"
												data-widget_type="jkit_icon_box.default">
												<div class="elementor-widget-container">
													<div
														class="jeg-elementor-kit jkit-icon-box icon-position-top elementor-animation- jeg_module_908_11_64fad1aaf233a">
														<div class="jkit-icon-box-wrapper hover-from-bottom" id="about-div-1-box">
															<div class="icon-box icon-box-header elementor-animation-">
																<div class="icon style-color"><i aria-hidden="true"
																		class="fa fa-dollar"></i></div>
															</div>
															<div class="icon-box icon-box-body">
																<h3 class="title">{{$homePageContents['about_section_card_1_heading']}}</h3>
																<p class="icon-box-description">{{$homePageContents['about_section_card_1_text']}}</p>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="elementor-element elementor-element-4792cb28 
											jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" id="about-div-2" 
											onclick="changeContent(2)" onmouseover="changeContent(2)"
												data-id="4792cb28" data-element_type="widget"
												data-widget_type="jkit_icon_box.default">
												<div class="elementor-widget-container">
													<div
														class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation-float jeg_module_908_12_64fad1ab02bc5">
														<div class="jkit-icon-box-wrapper hover-from-bottom" id="about-div-2-box">
															<div
																class="icon-box icon-box-header elementor-animation-float">
																<div class="icon style-color"><i aria-hidden="true"
																		class="fa fa-sign-out-alt"></i></div>
															</div>
															<div class="icon-box icon-box-body">
																<h3 class="title">{{$homePageContents['about_section_card_2_heading']}}</h3>
																<p class="icon-box-description">
																{{$homePageContents['about_section_card_2_text']}}</p>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7980af9a" 
										data-id="7980af9a" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">

											<div class="elementor-element elementor-element-35d40568 jkit-equal-height-disable 
											        elementor-widget elementor-widget-jkit_icon_box" id="about-div-3"
													onclick="changeContent(3)" onmouseover="changeContent(3)"
												data-id="35d40568" data-element_type="widget"
												data-widget_type="jkit_icon_box.default">
												<div class="elementor-widget-container">
													<div
														class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation-float jeg_module_908_13_64fad1ab07ec1">
														<div class="jkit-icon-box-wrapper hover-from-bottom" id="about-div-3-box">
															<div
																class="icon-box icon-box-header elementor-animation-float">
																<div class="icon style-color"><i aria-hidden="true"
																		class="fa fa-compass"></i></div>
															</div>
															<div class="icon-box icon-box-body">
																<h3 class="title">{{$homePageContents['about_section_card_3_heading']}}</h3>
																<p class="icon-box-description"
																style="font-size:16px">
																{{$homePageContents['about_section_card_3_text']}}</p>
															</div>

														</div>
													</div>
												</div>
											</div>

											<div class="elementor-element elementor-element-5e127186 
											  jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" id="about-div-4"
											  onclick="changeContent(4)" onmouseover="changeContent(4)"
												data-id="5e127186" data-element_type="widget"
												data-widget_type="jkit_icon_box.default">
												<div class="elementor-widget-container">
													<div
														class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation-float jeg_module_908_14_64fad1ab0cc25">
														<div class="jkit-icon-box-wrapper hover-from-bottom" id="about-div-4-box">
															<div
																class="icon-box icon-box-header elementor-animation-float">
																<div class="icon style-color"><i aria-hidden="true"
																		class="fa fa-lightbulb"></i></div>
															</div>
															<div class="icon-box icon-box-body">
																<h3 class="title">{{$homePageContents['about_section_card_4_heading']}}</h3>
																<p class="icon-box-description">
																{{$homePageContents['about_section_card_4_text']}}</p>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>			
									


					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b97289b"
						data-id="b97289b" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-460327dd elementor-widget elementor-widget-heading"
								data-id="460327dd" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default" id="what-we-do">
										{{$homePageContents['about_section_card_1_right_side_text_1']}}
									</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-1687a7ae elementor-widget elementor-widget-heading"
								data-id="1687a7ae" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default" id="about-bolstart">
										{{$homePageContents['about_section_card_1_right_side_text_2']}}
									</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-537fdc7b elementor-widget elementor-widget-text-editor"
								data-id="537fdc7b" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container" id="about-para">
									<p id="right-side-paragraph">
									{{$homePageContents['about_section_card_1_right_side_paragraph']}}
									</p>
								</div>
							</div>
							<section
								class="elementor-section elementor-inner-section elementor-element elementor-element-49992b80 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
								data-id="49992b80" data-element_type="section">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6a0df002"
										data-id="6a0df002" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-5edb39fe elementor-widget elementor-widget-heading"
												data-id="5edb39fe" data-element_type="widget"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default" id="right-side-small-heading">
															{{$homePageContents['about_section_card_1_right_small_heading']}}
													</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-a5859dc elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
												data-id="a5859dc" data-element_type="widget"
												data-widget_type="icon-list.default">
												<div class="elementor-widget-container">
													
													<ul class="elementor-icon-list-items">
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="fas fa-check-circle"></i>
															</span>
															<span class="elementor-icon-list-text" id="about-point-1">
															{{$homePageContents['about_section_card_1_right_side_text_3']}}</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="fas fa-check-circle"></i>
															</span>
															<span class="elementor-icon-list-text" id="about-point-2">
															{{$homePageContents['about_section_card_1_right_side_text_4']}}</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="fas fa-check-circle"></i>
															</span>
															<span class="elementor-icon-list-text" id="about-point-3">
															{{$homePageContents['about_section_card_1_right_side_text_5']}}</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="fas fa-check-circle"></i>
															</span>
															<span class="elementor-icon-list-text" id="about-point-4">
															{{$homePageContents['about_section_card_1_right_side_text_6']}}</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="fas fa-check-circle"></i>
															</span>
															<span class="elementor-icon-list-text" id="about-point-5">
															{{$homePageContents['about_section_card_1_right_side_text_7']}}</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-40e357cd"
										data-id="40e357cd" data-element_type="column"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-55a090ec elementor-widget elementor-widget-spacer"
												data-id="55a090ec" data-element_type="widget"
												data-widget_type="spacer.default">
												<div class="elementor-widget-container">
													<div class="elementor-spacer">
														<div class="elementor-spacer-inner"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<div class="elementor-element elementor-element-37ad50d8 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-hidden-mobile elementor-absolute elementor-widget elementor-widget-image"
								data-id="37ad50d8" data-element_type="widget"
								data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
								data-widget_type="image.default">
								<div class="elementor-widget-container">
									<img decoding="async"
										src="img/business-corporate-people-working-concept-e1676701832390-q2bw9am61xtntpz6dppl4t773op8g6oeou9qb8qo7k.jpg"
										title="Business Corporate People Working Concept"
										alt="Business Corporate People Working Concept" loading="lazy" />
								</div>
							</div>
							<div class="elementor-element elementor-element-552293cd elementor-widget__width-auto elementor-widget elementor-widget-jkit_button"
								data-id="552293cd" data-element_type="widget" data-widget_type="jkit_button.default">
								<div class="elementor-widget-container">
									<div
										class="jeg-elementor-kit jkit-button  icon-position-after jeg_module_908_15_64fad1ab1e703">
										<a href="{{$homePageContents['about_section_card_1_right_side_button_link']}}" class="jkit-button-wrapper">{{$homePageContents['about_section_card_1_right_side_button_text']}}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- End - ABout Bolstart-->

			<!---->


			<section
				class="elementor-section elementor-top-section 
				elementor-element elementor-element-a6153d8 elementor-section-content-middle elementor-section-boxed 
				elementor-section-height-default elementor-section-height-default"
				data-id="a6153d8" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default" >
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5f25b41"
						data-id="5f25b41" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated investment-report-section-inner" 
						>

							<div class="elementor-background-overlay"></div>

							<div class="elementor-element elementor-element-74448e6f 
							elementor-widget__width-initial elementor-widget-tablet__width-inherit 
							elementor-widget elementor-widget-jkit_animated_text" 
								data-id="74448e6f" data-element_type="widget"
								data-widget_type="jkit_animated_text.default">

								<div class="elementor-widget-container" >
									<div class="jeg-elementor-kit jkit-animated-text jeg_module_908_16_6517afd446982"
										data-style="highlighted" data-text="~$2,000,000" data-shape="underline">
										<p class="animated-text testimonial-section-text">
											<span class="normal-text style-color testimonial-section-text">
												{{$homePageContents['testimonial_section_text_part_1']}} 
										    </span>
											<span class="dynamic-wrapper style-color testimonial-section-text" style="display:inline">
												<span
													class="dynamic-text testimonial-section-text">{{$homePageContents['testimonial_section_text_part_2']}}</span><svg
													xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150"
													preserveAspectRatio="none">
													<path class="style-color" d="M3,77.5s200.54-11,493,0"
														transform="translate(-2.75 -68.11)" />
												</svg>
										   </span>
										   <span class="normal-text style-color testimonial-section-text"> {{$homePageContents['testimonial_section_text_part_3']}}</span>
										</p>
									</div>
								</div>
							</div>

							<div class="elementor-element elementor-element-96fe73c elementor-widget elementor-widget-jkit_heading"
								data-id="96fe73c" data-element_type="widget" data-widget_type="jkit_heading.default">
								<div class="elementor-widget-container">
									<div
										class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_908_17_6517afd4477f9">
										<div class="heading-section-title  display-inline-block">
											<h2 class="heading-title">~ <span class="style-color">
												<span>{{$homePageContents['testimonial_section_name']}}</span></span></h2>
										</div>
										<h3 class="heading-section-subtitle  style-color">{{$homePageContents['testimonial_section_designation']}}</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-38ff7f33"
						data-id="38ff7f33" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-2264abb1 elementor-widget-tablet__width-initial elementor-widget elementor-widget-image"
								data-id="2264abb1" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container">
									<a target="_blank" href="https://www.linkedin.com/in/kshitijlodha/">
									<img width="700" height="1126"
										src="img/kshitij.png"
										class="attachment-full size-full wp-image-541" alt="" decoding="async"
										loading="lazy"
										srcset="img/kshitij.png 700w, img/kshitij.png 187w, img/kshitij.png 637w"
										sizes="(max-width: 700px) 100vw, 700px" />
									</a>
								</div>
							</div>

							<div class="elementor-element elementor-element-75301b7 elementor-widget__width-initial elementor-absolute jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
								data-id="75301b7" data-element_type="widget"
								data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
								data-widget_type="jkit_icon_box.default">
								<div class="elementor-widget-container">
									<div
										class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_908_18_6517afd44a062">
										<div class="jkit-icon-box-wrapper hover-from-bottom">
											<div class="icon-box icon-box-header elementor-animation-float">
												<div class="icon style-color"><i aria-hidden="true"
														class="fas fa-check-circle"></i></div>
											</div>
											<div class="icon-box icon-box-body">
												<h3 class="title">{{$homePageContents['testimonial_section_card_2_text_1']}}</h3>
												<p class="icon-box-description">
													{{$homePageContents['testimonial_section_card_2_text_2']}}
												</p>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-1a6a09c6 elementor-widget__width-initial elementor-absolute elementor-hidden-mobile elementor-widget elementor-widget-jkit_progress_bar"
								data-id="1a6a09c6" data-element_type="widget"
								data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
								data-widget_type="jkit_progress_bar.default">
								<div class="elementor-widget-container">
									<div class="jeg-elementor-kit jkit-progress-bar jeg_module_908_19_6517afd44bec2">
										<div class="progress-group ">
											<div class="progress-skill-bar">
												<div class="skill-bar-content" style="display:flex;flex-direction:row;justify-content:space-between;padding-bottom:5px">
													<span class="skill-title">{{$homePageContents['testimonial_section_card_1_text_1']}}</span>
													<span class="skill-title">{{$homePageContents['testimonial_section_card_1_text_2']}}</span>
												</div>
												<div class="skill-bar" style="margin-top:5px">
													<div class="skill-track">
														<div class="number-percentage-wrapper">
															<span class="number-percentage" data-value="94"
																data-animation-duration="3500">{{$homePageContents['testimonial_section_card_1_text_2']}}</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-11d8d594 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-spacer"
								data-id="11d8d594" data-element_type="widget"
								data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
								data-widget_type="spacer.default">
								<div class="elementor-widget-container">
									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-94ea28b elementor-widget__width-initial elementor-absolute elementor-widget-mobile__width-initial elementor-widget elementor-widget-spacer"
								data-id="94ea28b" data-element_type="widget"
								data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
								data-widget_type="spacer.default">
								<div class="elementor-widget-container">
									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>



			<!--END-->

			<!-- -->


			<section
				class="elementor-section elementor-top-section elementor-element 
				elementor-element-7154b9e9 elementor-reverse-tablet elementor-reverse-mobile 
				elementor-section-boxed elementor-section-height-default elementor-section-height-default cards-section"
				data-id="7154b9e9" data-element_type="section">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3617fd4a"
						data-id="3617fd4a" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated home-color-cards-section">

							<section
								class="elementor-section elementor-inner-section elementor-element elementor-element-677c6d4f 
								jkit-sticky-element--enabled elementor-section-boxed 
								elementor-section-height-default elementor-section-height-default 
								jkit-sticky-element-on--down jkit-sticky-position--sticky" id="first-card"
								data-id="677c6d4f" data-element_type="section"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jkit_sticky_top_position&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;jkit_sticky_device&quot;:&quot;desktop&quot;}">
								<div class="elementor-background-overlay"></div>
								<div class="elementor-container elementor-column-gap-default">

									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-75e96bd1 pull-up-160"
										data-id="75e96bd1" data-element_type="column">

										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-3052c91f jkit-equal-height-disable 
											elementor-widget elementor-widget-jkit_icon_box"
												data-id="3052c91f" data-element_type="widget"
												data-widget_type="jkit_icon_box.default">
												<div class="elementor-widget-container">
													<div
														class="we-know-distract-div">
														<div class="jkit-icon-box-wrapper hover-from-left">
															<div class="icon-box icon-box-body">
																<h2 class="title color-card-title"  
																style="text-align: center;font-family: Poppins;
																color:#1d2343;font-weight: normal;">
																	{{$homePageContents['big_card_1_text']}}</h2>																			
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

							<section
								id="second-card"
								class="elementor-section elementor-inner-section elementor-element elementor-element-1bb93df3 jkit-sticky-element--enabled elementor-section-boxed elementor-section-height-default elementor-section-height-default jkit-sticky-element-on--down jkit-sticky-position--sticky"
								data-id="1bb93df3" data-element_type="section"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jkit_sticky_top_position&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;10&quot;,&quot;sizes&quot;:[]},&quot;jkit_sticky_device&quot;:&quot;desktop&quot;}">
								<div class="elementor-background-overlay"></div>
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-324320c7 pull-up-160"
										data-id="324320c7" data-element_type="column">

										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-540e960 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
												data-id="540e960" data-element_type="widget"
												data-widget_type="jkit_icon_box.default">
												<div class="elementor-widget-container">
													<div
														class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- 
															jeg_module_908_21_6517afd4507d6">
														<div class="jkit-icon-box-wrapper hover-from-left we-know-attracts-wrap">
															<div class="icon-box icon-box-body">
																<h2 class="title we-know-what-attracts color-card-title" 
																style="text-align: center;
																font-family: Poppins;color:#0feb7d;font-weight: normal;">
																	{{$homePageContents['big_card_2_text']}}</h2>																
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

							<section id="third-card"
								class="elementor-section elementor-inner-section elementor-element 
								elementor-element-65b30139 jkit-sticky-element--enabled elementor-section-boxed elementor-section-height-default 
								elementor-section-height-default jkit-sticky-element-on--down jkit-sticky-position--sticky"
								data-id="65b30139" data-element_type="section"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jkit_sticky_top_position&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;10&quot;,&quot;sizes&quot;:[]},&quot;jkit_sticky_device&quot;:&quot;desktop&quot;}">
								<div class="elementor-background-overlay"></div>
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6b07e20f pull-up-160"
										data-id="6b07e20f" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-80eb039 jkit-equal-height-disable 
											elementor-widget elementor-widget-jkit_icon_box"
												data-id="80eb039" data-element_type="widget"
												data-widget_type="jkit_icon_box.default">

												<div class="elementor-widget-container">
													<div
														class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_908_22_6517afd452487">
														<div class="jkit-icon-box-wrapper hover-from-left we-know-focus-wrap">
															<div class="icon-box icon-box-body">
																<h2 class="title we-know-what-to-focus-on color-card-title" 
																style="text-align: center;
																font-family: Poppins;color:#1f2549;font-weight: normal;">{{$homePageContents['big_card_3_text_part_1']}} 
																<span style="color:#0feb7d">{{$homePageContents['big_card_3_text_part_2']}} </span>
																{{$homePageContents['big_card_3_text_part_3']}}</h2>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>


					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-18d1a8d6 
					jkit-sticky-element--enabled jkit-sticky-element-on--down jkit-sticky-position--sticky intrigued-section" 
					
						data-id="18d1a8d6" data-element_type="column"
						data-settings="{&quot;jkit_sticky_device&quot;:[&quot;desktop&quot;],&quot;jkit_sticky_top_position&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]}}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-3469cb68 elementor-widget elementor-widget-heading"
								data-id="3469cb68" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default" id="cards-section-text-1">
										{{$homePageContents['big_card_1_right_side_text_1']}}
									</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-55f7a2b elementor-widget elementor-widget-heading"
								data-id="55f7a2b" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default" id="cards-section-text-2">
									{{$homePageContents['big_card_1_right_side_text_2']}}</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-579fe2f9 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget-tablet__width-initial elementor-widget elementor-widget-text-editor"
								data-id="579fe2f9" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container" id="cards-section-text-3">

								{{$homePageContents['big_card_1_right_side_text_3']}}
									
								</div>
							</div>
							<div class="elementor-element elementor-element-e61ace8 elementor-widget elementor-widget-spacer"
								data-id="e61ace8" data-element_type="widget" data-widget_type="spacer.default">
								<div class="elementor-widget-container">
									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-256bd26d elementor-widget__width-auto elementor-widget elementor-widget-jkit_button"
								data-id="256bd26d" data-element_type="widget" data-widget_type="jkit_button.default">
								<div class="elementor-widget-container">
									<div
										class="jeg-elementor-kit jkit-button  icon-position-after jeg_module_908_25_6517afd459760">
										<a href="{{$homePageContents['big_card_1_right_side_button_link']}}" class="jkit-button-wrapper">{{$homePageContents['big_card_1_right_side_button_text']}}</a></div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>

			<!-- END-->


			<!-- Bolstart reports-->
			<section class="pt-3 container position-relative counter-card-section custom-section" 
					style="display: flex; flex-direction: row; align-items: center; justify-content: center;max-width:100%">

	<div class="custom-section-innner" style="display: flex; padding-right: 30px; padding-left: 30px;">
		
		<div class="custom-section-image-area" style="position: relative;">
			<img src="img/red-circle.svg" style="position: absolute; top: 0; left: 0; width: 90%;height:90%;object-fit:contain"/>
			<img src="img/reports-ss.png" style="position: relative; animation: floating 3s infinite; width: 90%;height:90%;object-fit:contain"/>
		</div>

		<div class="custom-section-text-area" style="display: flex; flex-direction: column;">

			<h2 style="text-align: center;font-family:Mulish;font-weight:700">{{$homePageContents['reports_section_heading']}}</h2>
			<p style="text-align: center;font-size:18px !important;color:#222631;text-align:left;font-family:Mulish">
				{{$homePageContents['reports_section_paragraph_1']}}
		    </p>

			<p style="text-align: center;font-size:18px !important;color:#222631;text-align:left;font-family:Mulish">			 
				{{$homePageContents['reports_section_paragraph_2']}}
			</p>

			<a target="_blank" href="{{ env('APP_URL') }}/sample.pdf" style="text-align:center; margin-top:30px;">
    			<button class="view-report-button" style="text-align: center;">{{$homePageContents['reports_section_button_text']}}</button>
			</a>	
			
		</div>

	</div>
</section>
			<!-- end bolstart reports-->


			<!-- Gallery-->

			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-76eb90d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="76eb90d" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-42e959c"
						data-id="42e959c" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-09af747 elementor-widget elementor-widget-heading"
								data-id="09af747" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h5 class="elementor-heading-title elementor-size-default">
									{{$homePageContents['events_section_small_heading']}}
									</h5>
								</div>
							</div>
							<div class="elementor-element elementor-element-6fafe04 elementor-widget elementor-widget-heading"
								data-id="6fafe04" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">{{$homePageContents['events_section_heading']}}
									</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-46e75e4 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
								data-id="46e75e4" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									{{$homePageContents['events_section_paragraph']}}
								</div>
							</div>

							<section
								class="elementor-section elementor-inner-section elementor-element elementor-element-b5bbbf3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
								data-id="b5bbbf3" data-element_type="section">
								<div class="elementor-container elementor-column-gap-no">

								@foreach($events as $event)

									<div class="elementor-column elementor-col-25 elementor-inner-column 
											elementor-element elementor-element-6a5afd3" 
										data-id="6a5afd3" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-e12eb5f elementor-widget elementor-widget-jkit_team"
												data-id="e12eb5f" data-element_type="widget"
												data-widget_type="jkit_team.default">
												<div class="elementor-widget-container">
													<div
														class="jeg-elementor-kit jkit-team style-hover-social  jeg_module_972_12_652f9499826e4">
														<div class="profile-box">
															<div class="profile-card" style="padding:20px !important;min-height:330px">
																<div class="profile-header jkit-team-img ">
																	<img
																		decoding="async"
																		src="{{ $event->featured_image }}" 
																		alt="Event Image">
																	<div class="image-hover-bg"></div>
																</div>
																<div class="profile-body" style="margin-top:30px">
																	<h2 class="profile-title">{{$event->name}}</h2>
																	<p class="profile-designation">{{$event->event_category}}</p>

																	<h4 class="profile-title" style="font-weight:500;font-size:11px">
																		<i class="fa fa-calendar"></i>&nbsp;&nbsp;{{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}
																	</h4>

																	<ul class="social-list" style="margin-top:10px">
																		<li class="social-icon elementor-repeater-item-80228ed">
																			<a href="https://linkedin.com" contenteditable="false" style="cursor: pointer;" target="_blank">
																			<i aria-hidden="true" class="fab fa-linkedin"></i></a>
																		</li>
																		<li class="social-icon elementor-repeater-item-4712865">
																			<a href="https://instagram.com" contenteditable="false" style="cursor: pointer;" target="_blank">
																			<i aria-hidden="true" class="fab fa-instagram"></i></a>
																	    </li>
																		<li class="social-icon elementor-repeater-item-40cc730">
																			<a href="https://twitter.com" contenteditable="false" style="cursor: pointer;" target="_blank">
																			<i aria-hidden="true" class="fab fa-twitter"></i></a>
																		</li>
																	</ul>																	
																	
																</div>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								@endforeach
									

									
									<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-23407af"
										data-id="23407af" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-a838b8e jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
												data-id="a838b8e" data-element_type="widget"
												data-widget_type="jkit_icon_box.default">
												<div class="elementor-widget-container">
													<div
														class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_972_15_652f949988828">
														<div class="jkit-icon-box-wrapper hover-from-bottom" style="padding:20px !important;min-height:340px">
															<div class="icon-box icon-box-header elementor-animation-">
																<div class="icon style-color" style="padding:10px 0px 0px 5px">
																	<i aria-hidden="true"
																		class="fa fa-users" style="text-align:center">
																	</i>
																	</div>
															</div>
															<div class="icon-box icon-box-body">
																<h3 class="title">{{$homePageContents['events_section_card_small_heading']}}</h3>
																<p class="icon-box-description" style="font-size:20px">
																	{{$homePageContents['events_section_card_heading']}}
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-cf7d1e3 elementor-widget__width-inherit elementor-widget elementor-widget-jkit_button"
												data-id="cf7d1e3" data-element_type="widget"
												data-widget_type="jkit_button.default">
												<div class="elementor-widget-container">
													<div
														class="jeg-elementor-kit jkit-button  icon-position-after jeg_module_972_16_652f94998974f">
														<a href="{{$homePageContents['events_section_button_link']}}" class="jkit-button-wrapper">
															{{$homePageContents['events_section_button_text']}}</a>
													</div>
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


			
			<!-- END gallery-->


			<!-- FAQ-->
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-7154b9e9 
				  elementor-reverse-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default faq-section-home"
                data-id="2744f9e" data-element_type="section">

                <div class="elementor-container elementor-column-gap-default">

                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-32f2d02 jkit-sticky-element--enabled jkit-sticky-element-on--down jkit-sticky-position--sticky"
                        data-id="32f2d02" data-element_type="column"
                        data-settings="{&quot;jkit_sticky_device&quot;:[&quot;desktop&quot;],&quot;jkit_sticky_top_position&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]}}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-446dcca elementor-widget elementor-widget-heading"
                                data-id="446dcca" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">                                    
									<h2 class="elementor-heading-title elementor-size-default" 
									style="font-size:16px;color:#11ee84;font-weight: 700;line-height: 24px;">{{$homePageContents['faq_section_small_heading']}}
									</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-83301be elementor-widget elementor-widget-heading"
                                data-id="83301be" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default" style="font-size:52px;color:#222631;font-weight: 700;">
										{{$homePageContents['faq_section_heading']}}</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-0084958 elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
                                data-id="0084958" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
									{{$homePageContents['faq_section_text_with_email']}} <span
                                        style="color: #222631;"><strong><a href="/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="8ef8efe2fbebe0facefdfbfefee1fcfaa0ede1e3">
												{{$homePageContents['faq_section_email']}}</a></strong></span>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4a5cef4 elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-spacer"
                                data-id="4a5cef4" data-element_type="widget" data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="elementor-element elementor-element-0ad16b6 
									elementor-widget__width-auto elementor-widget elementor-widget-jkit_button faq-contact-button"
                                data-id="0ad16b6" data-element_type="widget" data-widget_type="jkit_button.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-button  icon-position-after jeg_module_972_17_6517fdbfc554b">
                                        <a class="view-report-button" href="{{$homePageContents['faq_section_button_link']}}">
												{{$homePageContents['faq_section_button_text']}}</a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-297a13a"
                        data-id="297a13a" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-6ab42fd elementor-widget elementor-widget-jkit_accordion"
                                data-id="6ab42fd" data-element_type="widget" data-widget_type="jkit_accordion.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="jeg-elementor-kit jkit-accordion style-default jeg_module_972_18_6517fdbfc910a">

										@foreach($faqs as $key => $faq)
    <div class="card-wrapper{{ $key === 0 ? ' expand' : '' }}">
        <div class="card-header">
            <a href="#expand-{{ Str::random(8) }}" class="card-header-button"
                aria-expanded="{{ $key === 0 ? 'true' : 'false' }}" data-target="#expand-{{ Str::random(8) }}"
                aria-controls="expand-{{ Str::random(8) }}">
                <span class="title">{{ $faq['question'] }}</span>
                <div class="right-icon-group">
                    <div class="normal-icon"><i aria-hidden="true" class="fa fa-plus"></i></div>
                    <div class="active-icon"><i aria-hidden="true" class="fa fa-minus"></i></div>
                </div>
            </a>
        </div>
        <div class="card-expand{{ $key === 0 ? ' expand' : '' }}" id="expand-{{ Str::random(8) }}" style="{{ $key === 0 ? 'display:block' : 'display:none' }}">
            <div class="card-body">
                <p>{{ $faq['answer'] }}</p>
            </div>
        </div>
    </div>
@endforeach

                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


			<!-- End - FAQ-->



			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-1b215ae2 
				elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default custom-section"
				data-id="1b215ae2" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="display:none">

				<div class="elementor-background-overlay"></div>

				<h2 style="text-align: center;margin-top:20px">Client Testimonials</h2>
				<br />

				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-21a63b24 elementor-hidden-tablet elementor-hidden-mobile"
						data-id="21a63b24" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-element elementor-element-37483864 elementor-widget elementor-widget-image"
								data-id="37483864" data-element_type="widget" data-widget_type="image.default">
								<div class="elementor-widget-container">
									<img width="700" height="1014"
										src="img/studio-shot-of-young-happy-woman-smiling-while-8PZACCF.png"
										class="attachment-full size-full wp-image-769" alt="" decoding="async"
										loading="lazy"
										srcset="img/studio-shot-of-young-happy-woman-smiling-while-8PZACCF.png 700w, 
										img/studio-shot-of-young-happy-woman-smiling-while-8PZACCF-207x300.png 207w"
										sizes="(max-width: 700px) 100vw, 700px" />
								</div>
							</div>
						</div>
					</div>

					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-40d76f88"
						data-id="40d76f88" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-531bc417 elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-jkit_testimonials"
								data-id="531bc417" data-element_type="widget"
								data-widget_type="jkit_testimonials.default">
								<div class="elementor-widget-container">
									<div class="jeg-elementor-kit jkit-testimonials arrow-top-right style-2 quote-override jeg_module_908_26_64fad1ab86a15"
										data-id="jeg_module_908_26_64fad1ab86a15"
										data-settings="{&quot;autoplay&quot;:false,&quot;autoplay_speed&quot;:3500,&quot;autoplay_hover_pause&quot;:false,&quot;show_navigation&quot;:true,&quot;navigation_left&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-chevron-left\&quot;&gt;&lt;\/i&gt;&quot;,&quot;navigation_right&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-chevron-right\&quot;&gt;&lt;\/i&gt;&quot;,&quot;show_dots&quot;:false,&quot;arrow_position&quot;:&quot;top&quot;,&quot;responsive&quot;:{&quot;desktop&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:1025},&quot;tablet&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:768},&quot;mobile&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:0}}}">
										<div class="testimonials-list">
											<div class="testimonials-track">
												<div class="testimonial-item  elementor-repeater-item-c83a45a">
													<div class="testimonial-box hover-from-left">
														<div class="icon-content"><i aria-hidden="true"
																class="jki jki-quote2-light"></i></div>

														<div class="comment-content">
															<p>I&#039;ve worked with Bolstart for the last five years,
																and it&#039;s been a great experience. From day one, I
																was impressed by the company&#039;s culture of
																innovation, collaboration and dedication to excellence.
															</p>
														</div>
														<div class="comment-header">
															<ul class="rating-stars">
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
															</ul>
														</div>
														<div class="comment-bio">
															<div class="bio-details">
																<div class="profile-image"></div>
																<span class="profile-info">
																	<strong class="profile-name">Alena Huffman</strong>
																	<p class="profile-des">Volunteer</p>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="testimonial-item  elementor-repeater-item-d882a7d">
													<div class="testimonial-box hover-from-left">
														<div class="icon-content"><i aria-hidden="true"
																class="jki jki-quote2-light"></i></div>
														<div class="comment-content">
															<p>The company&#039;s values of honesty, integrity and
																teamwork are evident in everything they do. A fun and
																dynamic environment, with a diverse team of
																professionals all working towards a common goal.</p>
														</div>
														<div class="comment-header">
															<ul class="rating-stars">
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
															</ul>
														</div>
														<div class="comment-bio">
															<div class="bio-details">
																<div class="profile-image"></div>
																<span class="profile-info">
																	<strong class="profile-name">Sinead Bailey</strong>
																	<p class="profile-des">Volunteer</p>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="testimonial-item  elementor-repeater-item-98a0cde">
													<div class="testimonial-box hover-from-left">
														<div class="icon-content"><i aria-hidden="true"
																class="jki jki-quote2-light"></i></div>
														<div class="comment-content">
															<p>I feel proud to be part of the Bolstart Company, and I
																would highly recommend it to anyone looking to invest in
																growing their business or product and who truly care
																about business success.</p>
														</div>
														<div class="comment-header">
															<ul class="rating-stars">
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
																<li><i aria-hidden="true" class="fas fa-star"></i></li>
															</ul>
														</div>
														<div class="comment-bio">
															<div class="bio-details">
																<div class="profile-image"></div>
																<span class="profile-info">
																	<strong class="profile-name">Colette Daniel</strong>
																	<p class="profile-des">Volunteer</p>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Client testimonials section ENDS-->


			<!--Blog section - START-->
			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-3741b778 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="3741b778" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="display:none">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-595e4105"
						data-id="595e4105" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<section
								class="elementor-section elementor-inner-section elementor-element elementor-element-17f17345 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
								data-id="17f17345" data-element_type="section">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-656c932c"
										data-id="656c932c" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-667ba1d2 elementor-widget elementor-widget-heading"
												data-id="667ba1d2" data-element_type="widget"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h5 class="elementor-heading-title elementor-size-default">Our Blog
													</h5>
												</div>
											</div>
											<div class="elementor-element elementor-element-79820910 elementor-widget elementor-widget-heading"
												data-id="79820910" data-element_type="widget"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Latest
														News/Blog</h2>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-76095c0c"
										data-id="76095c0c" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-5eaea9b7 elementor-widget__width-auto elementor-widget elementor-widget-jkit_button"
												data-id="5eaea9b7" data-element_type="widget"
												data-widget_type="jkit_button.default">
												<div class="elementor-widget-container">
													<div
														class="jeg-elementor-kit jkit-button  icon-position-after jeg_module_908_29_64fad1ab9b94b">
														<a href="/blog" class="jkit-button-wrapper">View All</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<section
								class="elementor-section elementor-inner-section elementor-element elementor-element-1d5f5d70 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
								data-id="1d5f5d70" data-element_type="section">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6b4364e1"
										data-id="6b4364e1" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-5c8d5fde elementor-widget elementor-widget-jkit_post_block"
												data-id="5c8d5fde" data-element_type="widget"
												data-widget_type="jkit_post_block.default">
												<div class="elementor-widget-container">
													<div class="jeg-elementor-kit jkit-postblock postblock-type-2 jkit-pagination-disable post-element jeg_module_908_30_64fad1aba8b27"
														data-id="jeg_module_908_30_64fad1aba8b27"
														data-settings="{&quot;post_type&quot;:&quot;post&quot;,&quot;number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;post_offset&quot;:1,&quot;unique_content&quot;:&quot;disable&quot;,&quot;include_post&quot;:&quot;&quot;,&quot;exclude_post&quot;:&quot;&quot;,&quot;include_category&quot;:&quot;&quot;,&quot;exclude_category&quot;:&quot;&quot;,&quot;include_author&quot;:&quot;&quot;,&quot;include_tag&quot;:&quot;&quot;,&quot;exclude_tag&quot;:&quot;&quot;,&quot;sort_by&quot;:&quot;latest&quot;,&quot;pagination_mode&quot;:&quot;disable&quot;,&quot;pagination_loadmore_text&quot;:&quot;Load More&quot;,&quot;pagination_loading_text&quot;:&quot;Loading...&quot;,&quot;pagination_number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;pagination_scroll_limit&quot;:0,&quot;pagination_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;pagination_icon_position&quot;:&quot;before&quot;,&quot;st_category_position&quot;:&quot;left&quot;,&quot;sg_content_postblock_type&quot;:&quot;type-2&quot;,&quot;sg_content_title_html_tag&quot;:&quot;h3&quot;,&quot;sg_content_category_enable&quot;:&quot;&quot;,&quot;sg_content_excerpt_enable&quot;:&quot;&quot;,&quot;sg_content_excerpt_length&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:24,&quot;sizes&quot;:[]},&quot;sg_content_excerpt_more&quot;:&quot;...&quot;,&quot;sg_content_readmore_enable&quot;:&quot;&quot;,&quot;sg_content_readmore_icon&quot;:{&quot;value&quot;:&quot;fas fa-arrow-right&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_readmore_icon_position&quot;:&quot;after&quot;,&quot;sg_content_readmore_text&quot;:&quot;Read More&quot;,&quot;sg_content_comment_heading&quot;:&quot;&quot;,&quot;sg_content_comment_enable&quot;:&quot;&quot;,&quot;sg_content_comment_icon&quot;:{&quot;value&quot;:&quot;fas fa-comment&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_comment_icon_position&quot;:&quot;before&quot;,&quot;sg_content_meta_enable&quot;:&quot;yes&quot;,&quot;sg_content_meta_author_enable&quot;:&quot;&quot;,&quot;sg_content_meta_author_by_text&quot;:&quot;By &quot;,&quot;sg_content_meta_author_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;sg_content_meta_author_icon_position&quot;:&quot;before&quot;,&quot;sg_content_meta_date_enable&quot;:&quot;yes&quot;,&quot;sg_content_meta_date_type&quot;:&quot;published&quot;,&quot;sg_content_meta_date_format&quot;:&quot;default&quot;,&quot;sg_content_meta_date_format_custom&quot;:&quot;F j, Y&quot;,&quot;sg_content_meta_date_icon&quot;:{&quot;value&quot;:&quot;fas fa-calendar-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_meta_date_icon_position&quot;:&quot;before&quot;,&quot;sg_content_image_size_imagesize_size&quot;:&quot;full&quot;,&quot;paged&quot;:1,&quot;class&quot;:&quot;jkit_post_block&quot;}">
														<div class="jkit-block-container">
															<div class="jkit-posts jkit-ajax-flag">
																<article
																	class="jkit-post post-716 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-business">
																	<div class="jkit-thumb"><a href="#">
																			<div class="thumbnail-container ">
																				<img loading="lazy" width="1440"
																					height="961"
																					src="img/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg"
																					class="attachment-full size-full wp-post-image"
																					alt="Casual businessman and woman with laptop meeting in office"
																					decoding="async"
																					srcset="img/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg 1440w, 
																					img/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492-300x200.jpg 300w, 
																					img/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492-1024x683.jpg 1024w, 
																					img/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492-768x513.jpg 768w, https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492-800x534.jpg 800w"
																					sizes="(max-width: 1440px) 100vw, 1440px" />
																			</div>
																		</a></div>
																	<div class="jkit-postblock-content">
																		<h3 class="jkit-post-title">
																			<a href="#">8
																				Frequently Asked Questions by Investors
																				from Startup Founders</a>
																		</h3>
																		<div class="jkit-post-meta">
																			<div
																				class="jkit-meta-date icon-position-before">
																				<i aria-hidden="true"
																					class="fas fa-calendar-alt"></i>February
																				12, 2023
																			</div>
																		</div>
																		<div class="jkit-post-meta-bottom">

																		</div>
																	</div>
																</article>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-be757e5"
										data-id="be757e5" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-501ded3f elementor-widget elementor-widget-jkit_post_list"
												data-id="501ded3f" data-element_type="widget"
												data-widget_type="jkit_post_list.default">
												<div class="elementor-widget-container">
													<div class="jeg-elementor-kit jkit-postlist layout-vertical post-element jkit-pagination-disable jeg_module_908_31_64fad1abb9042"
														data-id="jeg_module_908_31_64fad1abb9042"
														data-settings="{&quot;post_type&quot;:&quot;post&quot;,&quot;number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;post_offset&quot;:2,&quot;unique_content&quot;:&quot;disable&quot;,&quot;include_post&quot;:&quot;&quot;,&quot;exclude_post&quot;:&quot;&quot;,&quot;include_category&quot;:&quot;&quot;,&quot;exclude_category&quot;:&quot;&quot;,&quot;include_author&quot;:&quot;&quot;,&quot;include_tag&quot;:&quot;&quot;,&quot;exclude_tag&quot;:&quot;&quot;,&quot;sort_by&quot;:&quot;latest&quot;,&quot;pagination_mode&quot;:&quot;disable&quot;,&quot;pagination_loadmore_text&quot;:&quot;Load More&quot;,&quot;pagination_loading_text&quot;:&quot;Loading...&quot;,&quot;pagination_number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;pagination_scroll_limit&quot;:0,&quot;pagination_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;pagination_icon_position&quot;:&quot;before&quot;,&quot;sg_content_layout&quot;:&quot;vertical&quot;,&quot;sg_content_image_enable&quot;:0,&quot;sg_content_background_image_enable&quot;:&quot;&quot;,&quot;sg_content_icon_enable&quot;:&quot;&quot;,&quot;sg_content_icon&quot;:{&quot;value&quot;:&quot;fas fa-circle&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_meta_enable&quot;:&quot;yes&quot;,&quot;sg_content_meta_date_enable&quot;:&quot;yes&quot;,&quot;sg_content_meta_date_type&quot;:&quot;published&quot;,&quot;sg_content_meta_date_format&quot;:&quot;default&quot;,&quot;sg_content_meta_date_format_custom&quot;:&quot;F j, Y&quot;,&quot;sg_content_meta_date_icon&quot;:{&quot;value&quot;:&quot;fas fa-calendar-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_meta_category_enable&quot;:0,&quot;sg_content_meta_category_icon&quot;:{&quot;value&quot;:&quot;fas fa-tag&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_meta_position&quot;:&quot;top&quot;,&quot;sg_content_image_size_imagesize_size&quot;:&quot;large&quot;,&quot;paged&quot;:1,&quot;class&quot;:&quot;jkit_post_list&quot;}">
														<div class="jkit-block-container">
															<div class="jkit-posts jkit-ajax-flag">
																<article class="jkit-post post-list-item">
																	<a href="#">

																		<div class="jkit-postlist-content">
																			<div class="meta-lists"><span
																					class="meta-date"><i
																						aria-hidden="true"
																						class="fas fa-calendar-alt"></i>February
																					12, 2023</span> </div><span
																				class="jkit-postlist-title">Kargo
																				Subsidiary Venture Capital Has a New
																				Boss: Ready to Inject Startup</span>
																		</div>
																	</a>
																</article>
																<article class="jkit-post post-list-item">
																	<a href="#">

																		<div class="jkit-postlist-content">
																			<div class="meta-lists"><span
																					class="meta-date"><i
																						aria-hidden="true"
																						class="fas fa-calendar-alt"></i>February
																					12, 2023</span> </div><span
																				class="jkit-postlist-title">Rows of
																				Investors Who Are Most Diligent
																				Investing in Large Companies</span>
																		</div>
																	</a>
																</article>
																<article class="jkit-post post-list-item">
																	<a href="#">

																		<div class="jkit-postlist-content">
																			<div class="meta-lists"><span
																					class="meta-date"><i
																						aria-hidden="true"
																						class="fas fa-calendar-alt"></i>February
																					12, 2023</span> </div><span
																				class="jkit-postlist-title">5 Indonesian
																				Venture Capital Owners of Unicorn
																				Startup Shares</span>
																		</div>
																	</a>
																</article>
																<article class="jkit-post post-list-item">
																	<a href="#">

																		<div class="jkit-postlist-content">
																			<div class="meta-lists"><span
																					class="meta-date"><i
																						aria-hidden="true"
																						class="fas fa-calendar-alt"></i>February
																					12, 2023</span> </div><span
																				class="jkit-postlist-title">Venturing
																				into new territory: A look at VC’s
																				record-breaking 2022</span>
																		</div>
																	</a>
																</article>
															</div>
														</div>
													</div>
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

			<!--Blog section ENDS-->

			
			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-6a8a63aa
				 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="6a8a63aa" data-element_type="section" style="display:none"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">

				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5bb5604e"
						data-id="5bb5604e" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated" >
							<section
								class="elementor-section elementor-inner-section elementor-element elementor-element-2c5b3d83 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
								data-id="2c5b3d83" data-element_type="section"
								data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4c326e8b"
										data-id="4c326e8b" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-709bcbf4 elementor-widget elementor-widget-metform"
												data-id="709bcbf4" data-element_type="widget"
												data-widget_type="metform.default">
												<div class="elementor-widget-container">
													<div id="mf-response-props-id-667" data-previous-steps-style=""
														data-editswitchopen="" data-response_type="alert"
														data-erroricon="fas fa-exclamation-triangle"
														data-successicon="fas fa-check" data-messageposition="top"
														class="   mf-scroll-top-no">
														<div class="formpicker_warper formpicker_warper_editable"
															data-metform-formpicker-key="667">

															<div class="elementor-widget-container">

																<div id="metform-wrap-709bcbf4-667"
																	class="mf-form-wrapper" data-form-id="667"
																	data-action="https://kit.baliniz.com/valuent/wp-json/metform/v1/entries/insert/667"
																	data-wp-nonce="004e8e9ba2"
																	data-form-nonce="5e299541a2"
																	data-quiz-summery="false" data-save-progress="false"
																	data-form-type="contact_form"
																	data-stop-vertical-effect=""></div>


																<form class="metform-form-content">
																	<div class="mf-main-response-wrap   mf-response-msg-wrap" data-show="0">
																		<div class="mf-response-msg">
																			<i class="mf-success-icon fas fa-check"></i>
																			<p></p>
																		</div>
																	</div>
																	<div class="metform-form-main-wrapper">
																		<div data-elementor-type="wp-post" data-elementor-id="667" class="elementor elementor-667">
																			<section class="elementor-section elementor-top-section elementor-element elementor-element-5df6e07d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5df6e07d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																				<div class="elementor-container elementor-column-gap-default">
																					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8b4a600" data-id="8b4a600" data-element_type="column">
																						<div class="elementor-widget-wrap elementor-element-populated">
																							<section class="elementor-section elementor-inner-section elementor-element elementor-element-6dff78bc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6dff78bc" data-element_type="section">
																								<div class="elementor-container elementor-column-gap-default">
																									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-14e128e7" data-id="14e128e7" data-element_type="column">
																										<div class="elementor-widget-wrap elementor-element-populated">
																											<div class="elementor-element elementor-element-1893d376 elementor-widget elementor-widget-mf-text" data-id="1893d376" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
																												<div class="elementor-widget-container">
																													<div class="mf-input-wrapper">
																														<input type="text" class="mf-input " id="mf-input-text-1893d376" name="mf-text" placeholder="Company Name " aria-invalid="false">
																														<div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-34cacf89" data-id="34cacf89" data-element_type="column">
																										<div class="elementor-widget-wrap elementor-element-populated">
																											<div class="elementor-element elementor-element-70a89f18 elementor-widget elementor-widget-mf-text" data-id="70a89f18" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
																												<div class="elementor-widget-container">
																													<div class="mf-input-wrapper">
																														<input type="text" class="mf-input " id="mf-input-text-70a89f18" name="mf-text" placeholder="Subject " aria-invalid="false">
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</section>
																							<section class="elementor-section elementor-inner-section elementor-element elementor-element-d64a224 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d64a224" data-element_type="section">
																								<div class="elementor-container elementor-column-gap-default">
																									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-372103b7" data-id="372103b7" data-element_type="column">
																										<div class="elementor-widget-wrap elementor-element-populated">
																											<div class="elementor-element elementor-element-4d9b3edb elementor-widget elementor-widget-mf-email" data-id="4d9b3edb" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
																												<div class="elementor-widget-container">
																													<div class="mf-input-wrapper">
																														<input type="email" class="mf-input " id="mf-input-email-4d9b3edb" name="mf-email" placeholder="Company Email " aria-invalid="false" value="">
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-789b5b17" data-id="789b5b17" data-element_type="column">
																										<div class="elementor-widget-wrap elementor-element-populated">
																											<div class="elementor-element elementor-element-366fc69f elementor-widget elementor-widget-mf-telephone" data-id="366fc69f" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-telephone&quot;}" data-widget_type="mf-telephone.default">
																												<div class="elementor-widget-container">
																													<div class="mf-input-wrapper">
																														<input type="tel" class="mf-input " id="mf-input-telephone-366fc69f" name="mf-telephone" placeholder="Company Phone " aria-invalid="false">
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</section>
																							<div class="elementor-element elementor-element-75110290 elementor-widget elementor-widget-mf-textarea" data-id="75110290" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-textarea&quot;}" data-widget_type="mf-textarea.default">
																								<div class="elementor-widget-container">
																									<div class="mf-input-wrapper">
																										<textarea class="mf-input mf-textarea " id="mf-input-text-area-75110290" name="mf-textarea" placeholder="Your Comment " cols="30" rows="10" aria-invalid="false">

																										</textarea>
																									</div>
																								</div>
																							</div>
																							<div class="elementor-element elementor-element-5b72f54 mf-btn--justify mf-btn--tablet-justify mf-btn--mobile-justify elementor-widget elementor-widget-mf-button" data-id="5b72f54" data-element_type="widget" data-widget_type="mf-button.default">
																								<div class="elementor-widget-container">
																									<div class="mf-btn-wraper " data-mf-form-conditional-logic-requirement=""><button type="submit" class="metform-btn metform-submit-btn " id="">
																										<span>Send Message </span>
																									</button>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</section>
																	</div>
																</div>
															</form>																

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-17fe922b"
										data-id="17fe922b" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-4dcfb4dd elementor-widget elementor-widget-heading"
												data-id="4dcfb4dd" data-element_type="widget"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Get In
														TOuch</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-2342b08a elementor-widget elementor-widget-heading"
												data-id="2342b08a" data-element_type="widget"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Let's
														get in touch</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-6d66e413 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
												data-id="6d66e413" data-element_type="widget"
												data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit utelit
														tellus, luctus nec ullamcorper mattis.</p>
												</div>
											</div>
											<div class="elementor-element elementor-element-609f8c04 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
												data-id="609f8c04" data-element_type="widget"
												data-widget_type="divider.default">
												<div class="elementor-widget-container">
													<div class="elementor-divider">
														<span class="elementor-divider-separator">
														</span>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-73b67e83 elementor-view-stacked elementor-position-left elementor-widget__width-auto elementor-vertical-align-bottom elementor-mobile-position-left elementor-shape-circle elementor-widget elementor-widget-icon-box"
												data-id="73b67e83" data-element_type="widget"
												data-widget_type="icon-box.default">
												<div class="elementor-widget-container">
													<link rel="stylesheet"
														href="https://kit.baliniz.com/valuent/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">
													<div class="elementor-icon-box-wrapper">
														<div class="elementor-icon-box-icon">
															<span class="elementor-icon elementor-animation-">
																<i aria-hidden="true" class="fa fa-envelope"></i>
															</span>
														</div>
														<div class="elementor-icon-box-content">
															<h3 class="elementor-icon-box-title">
																<span>
																	Our Email </span>
															</h3>
															<p class="elementor-icon-box-description">
																<a href="/cdn-cgi/l/email-protection"
																	class="__cf_email__" style="color:white"
																	data-cfemail="8eebe3efe7e2cefdfbfefee1fcfaa0ede1e3">info@bolstart.com</a>
															</p>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-53d05ab1 elementor-view-stacked elementor-position-left elementor-widget__width-auto elementor-vertical-align-bottom elementor-mobile-position-left elementor-widget-mobile__width-inherit elementor-shape-circle elementor-widget elementor-widget-icon-box"
												data-id="53d05ab1" data-element_type="widget"
												data-widget_type="icon-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-icon-box-wrapper">
														<div class="elementor-icon-box-icon">
															<span class="elementor-icon elementor-animation-">
																<i aria-hidden="true"
																	class="fa fa-phone"></i> </span>
														</div>
														<div class="elementor-icon-box-content">
															<h3 class="elementor-icon-box-title">
																<span>
																	Our Phone </span>
															</h3>
															<p class="elementor-icon-box-description">
																(+62) 8896-2220 </p>
														</div>
													</div>
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
				class="elementor-section elementor-top-section elementor-element elementor-element-1163fbc2 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="1163fbc2" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4e89c201"
						data-id="4e89c201" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-4f2cb2a5 elementor-widget elementor-widget-heading"
								data-id="4f2cb2a5" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">
										{{$homePageContents['cta_section_small_heading']}}
									</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-bfc4bc2 elementor-widget elementor-widget-jkit_animated_text"
								data-id="bfc4bc2" data-element_type="widget"
								data-widget_type="jkit_animated_text.default">
								<div class="elementor-widget-container">
									<div class="jeg-elementor-kit jkit-animated-text jeg_module_908_27_64fad1ab8d5a0"
										data-style="highlighted" data-text=" Grow your business" data-shape="underline">
										<p class="animated-text"><span class="normal-text style-color join-today-text">
										{{$homePageContents['cta_section_heading_part_1']}}
											</span><span class="dynamic-wrapper style-color join-today-text"><span class="dynamic-text join-today-text">
											{{$homePageContents['cta_section_heading_part_2']}}</span><svg xmlns="http://www.w3.org/2000/svg"
													viewBox="0 0 500 150" preserveAspectRatio="none">
													<path class="style-color" d="M3,77.5s200.54-11,493,0"
														transform="translate(-2.75 -68.11)" />
												</svg></span><span class="normal-text style-color"> </span></p>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-4e742831 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
								data-id="4e742831" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">

									{{$homePageContents['cta_section_paragraph']}}
									
								</div>
							</div>
							<div class="elementor-element elementor-element-66a87460 elementor-widget-mobile__width-auto elementor-widget elementor-widget-jkit_dual_button"
								data-id="66a87460" data-element_type="widget"
								data-widget_type="jkit_dual_button.default">
								<div class="elementor-widget-container">
									<div class="jeg-elementor-kit jkit-dual-button jeg_module_908_28_64fad1ab93dc0">
										<div class="jkit-dual-button-wrapper"><a href="{{$homePageContents['cta_section_button_1_link']}}"
												class="jkit-dual-btn jkit-dual-button-one icon-position-">
												{{$homePageContents['cta_section_button_1_text']}}</a><span class="jkit-dual-button-middle-text">Or</span><a
												href="{{$homePageContents['cta_section_button_2_link']}}"
												class="jkit-dual-btn jkit-dual-button-two icon-position-">
												{{$homePageContents['cta_section_button_2_text']}}</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


		</div>



		<script>
    					function changeContent(divNumber) {

							    if(divNumber === 1){

									document.getElementById("what-we-do").innerText = "{{ $homePageContents['about_section_card_1_right_side_text_1'] }}";
									document.getElementById("about-bolstart").innerText = "{{ $homePageContents['about_section_card_1_right_side_text_2'] }}";
									
									document.getElementById("right-side-paragraph").innerText = "{{ $homePageContents['about_section_card_1_right_side_paragraph'] }}";
									document.getElementById("right-side-small-heading").innerText = "{{ $homePageContents['about_section_card_1_right_small_heading'] }}";


									document.getElementById("about-point-1").innerText = "{{ $homePageContents['about_section_card_1_right_side_text_3'] }}";
									document.getElementById("about-point-2").innerText = "{{ $homePageContents['about_section_card_1_right_side_text_4'] }}";
									document.getElementById("about-point-3").innerText = "{{ $homePageContents['about_section_card_1_right_side_text_5'] }}";
									document.getElementById("about-point-4").innerText = "{{ $homePageContents['about_section_card_1_right_side_text_6'] }}";
									document.getElementById("about-point-5").innerText = "{{ $homePageContents['about_section_card_1_right_side_text_7'] }}";


								}else if(divNumber === 2){

									document.getElementById("what-we-do").innerText = "{{ $homePageContents['about_section_card_2_right_side_text_1'] }}";
									document.getElementById("about-bolstart").innerText = "{{ $homePageContents['about_section_card_2_right_side_text_2'] }}";
									
									document.getElementById("right-side-paragraph").innerText = "{{ $homePageContents['about_section_card_2_right_side_paragraph'] }}";
									document.getElementById("right-side-small-heading").innerText = "{{ $homePageContents['about_section_card_2_right_small_heading'] }}";


									document.getElementById("about-point-1").innerText = "{{ $homePageContents['about_section_card_2_right_side_text_3'] }}";
									document.getElementById("about-point-2").innerText = "{{ $homePageContents['about_section_card_2_right_side_text_4'] }}";
									document.getElementById("about-point-3").innerText = "{{ $homePageContents['about_section_card_2_right_side_text_5'] }}";
									document.getElementById("about-point-4").innerText = "{{ $homePageContents['about_section_card_2_right_side_text_6'] }}";
									document.getElementById("about-point-5").innerText = "{{ $homePageContents['about_section_card_2_right_side_text_7'] }}";


								}else if(divNumber === 3){

									document.getElementById("what-we-do").innerText = "{{ $homePageContents['about_section_card_3_right_side_text_1'] }}";
									document.getElementById("about-bolstart").innerText = "{{ $homePageContents['about_section_card_3_right_side_text_2'] }}";
									
									document.getElementById("right-side-paragraph").innerText = "{{ $homePageContents['about_section_card_3_right_side_paragraph'] }}";
									document.getElementById("right-side-small-heading").innerText = "{{ $homePageContents['about_section_card_3_right_small_heading'] }}";


									document.getElementById("about-point-1").innerText = "{{ $homePageContents['about_section_card_3_right_side_text_3'] }}";
									document.getElementById("about-point-2").innerText = "{{ $homePageContents['about_section_card_3_right_side_text_4'] }}";
									document.getElementById("about-point-3").innerText = "{{ $homePageContents['about_section_card_3_right_side_text_5'] }}";
									document.getElementById("about-point-4").innerText = "{{ $homePageContents['about_section_card_3_right_side_text_6'] }}";
									document.getElementById("about-point-5").innerText = "{{ $homePageContents['about_section_card_3_right_side_text_7'] }}";


								}else if(divNumber === 4){

									document.getElementById("what-we-do").innerText = "{{ $homePageContents['about_section_card_4_right_side_text_1'] }}";
									document.getElementById("about-bolstart").innerText = "{{ $homePageContents['about_section_card_4_right_side_text_2'] }}";
									
									document.getElementById("right-side-paragraph").innerText = "{{ $homePageContents['about_section_card_4_right_side_paragraph'] }}";
									document.getElementById("right-side-small-heading").innerText = "{{ $homePageContents['about_section_card_4_right_small_heading'] }}";


									document.getElementById("about-point-1").innerText = "{{ $homePageContents['about_section_card_4_right_side_text_3'] }}";
									document.getElementById("about-point-2").innerText = "{{ $homePageContents['about_section_card_4_right_side_text_4'] }}";
									document.getElementById("about-point-3").innerText = "{{ $homePageContents['about_section_card_4_right_side_text_5'] }}";
									document.getElementById("about-point-4").innerText = "{{ $homePageContents['about_section_card_4_right_side_text_6'] }}";
									document.getElementById("about-point-5").innerText = "{{ $homePageContents['about_section_card_4_right_side_text_7'] }}";
								}
								

								if (divNumber === 1) {
    								document.getElementById('about-div-1-box').style.boxShadow = '0px 5px 25px 0px rgba(107, 137.00000000000006, 180, 0.15)';
  								} else {
    								// Reset the background color for other divs
    								document.getElementById('about-div-1-box').style.boxShadow = '';
  								}

								if (divNumber === 2) {
    								document.getElementById('about-div-2-box').style.boxShadow = '0px 5px 25px 0px rgba(107, 137.00000000000006, 180, 0.15)';
  								} else {
    								// Reset the background color for other divs
    								document.getElementById('about-div-2-box').style.boxShadow = '';
  								}

								if (divNumber === 3) {
    								document.getElementById('about-div-3-box').style.boxShadow = '0px 5px 25px 0px rgba(107, 137.00000000000006, 180, 0.15)';
  								} else {
    								// Reset the background color for other divs
    								document.getElementById('about-div-3-box').style.boxShadow = '';
  								}

								if (divNumber === 4) {
    								document.getElementById('about-div-4-box').style.boxShadow = '0px 5px 25px 0px rgba(107, 137.00000000000006, 180, 0.15)';
  								} else {
    								// Reset the background color for other divs
    								document.getElementById('about-div-4-box').style.boxShadow = '';
  								}
								
    					}						

						
  					</script>



<script>
        const firstCard = document.getElementById("first-card");
		const secondCard = document.getElementById("second-card");
		const thirdCard = document.getElementById("third-card");		

        const cardSectionText1 = document.getElementById("cards-section-text-1");
		const cardSectionText2 = document.getElementById("cards-section-text-2");
		const cardSectionText3 = document.getElementById("cards-section-text-3");

        // Function to check if the element is fully in the viewport
        function isElementInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Function to update the text when the div is fully visible
        function updateTextVisibility() {

            if (isElementInViewport(firstCard)) {
                cardSectionText1.textContent = "{{ $homePageContents['big_card_1_right_side_text_1'] }}";
				cardSectionText2.textContent = "{{ $homePageContents['big_card_1_right_side_text_2'] }}";
				cardSectionText3.textContent = "{{ $homePageContents['big_card_1_right_side_text_3'] }}";
            }

			if (isElementInViewport(secondCard)) {
                cardSectionText1.textContent = "{{ $homePageContents['big_card_2_right_side_text_1'] }}";
				cardSectionText2.textContent = "{{ $homePageContents['big_card_2_right_side_text_2'] }}";
				cardSectionText3.textContent = "{{ $homePageContents['big_card_2_right_side_text_3'] }}";
            }

			if (isElementInViewport(thirdCard)) {
                cardSectionText1.textContent = "{{ $homePageContents['big_card_3_right_side_text_1'] }}";
				cardSectionText2.textContent = "{{ $homePageContents['big_card_3_right_side_text_2'] }}";
				cardSectionText3.textContent = "{{ $homePageContents['big_card_3_right_side_text_3'] }}";
            }
        }

        // Attach an event listener to the scroll event
        window.addEventListener("scroll", updateTextVisibility);

        // Call the function on page load to handle initial state
        updateTextVisibility();
    </script>


@endsection