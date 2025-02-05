@extends('frontend.layouts.contact')

@section('title') {{app_name()}} @endsection

@section('content')

<div data-elementor-type="wp-page" data-elementor-id="982" class="elementor elementor-982">
		
        <section class="elementor-section elementor-top-section elementor-element 
                    		elementor-element-7edb806 elementor-section-boxed elementor-section-height-default elementor-section-height-default" 
                    data-id="7edb806" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" 
                    style="padding:100px 0px 30px 0px">

						 <div class="elementor-background-overlay">

						 </div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-245ef02" data-id="245ef02" data-element_type="column">
									<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-0a2ca4a elementor-widget elementor-widget-heading" data-id="0a2ca4a" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container" style="height:150px;padding-top:50px">		

														<h2 class="elementor-heading-title elementor-size-default">
														{{$contactPageContents['header_heading']}}</h2>		
												</div>
											</div>
				
									</div>
							</div>
						</div>
		</section>

		<section class="elementor-section elementor-top-section elementor-element elementor-element-807d3b3 
						elementor-section-boxed elementor-section-height-default elementor-section-height-default" 
						style="padding:0px 0px 120px 0px !important;margin-top:30px"
							data-id="807d3b3" data-element_type="section">

				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cdd745c" data-id="cdd745c" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-67505b87 elementor-widget elementor-widget-heading" data-id="67505b87" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
												</div>
										</div>
								<div class="elementor-element elementor-element-57f88577 elementor-widget elementor-widget-heading" data-id="57f88577" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">{{$contactPageContents['subheading']}}</h2>		
										</div>
								</div>
								<div class="elementor-element elementor-element-eeb2286 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor" data-id="eeb2286" data-element_type="widget" data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											{{$contactPageContents['subheading_paragraph']}}				
										</div>
										</div>

										<section class="elementor-section elementor-inner-section elementor-element 
										elementor-element-10db814e elementor-section-boxed elementor-section-height-default 
										elementor-section-height-default" data-id="10db814e" data-element_type="section">
										
												<div class="elementor-container elementor-column-gap-default">

												<div class="elementor-column elementor-col-33 elementor-inner-column 
												elementor-element elementor-element-5d94d74d" data-id="5d94d74d" data-element_type="column" >
													<div class="elementor-widget-wrap elementor-element-populated">
														<div class="elementor-element elementor-element-5412df6 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" data-id="5412df6" data-element_type="widget" data-widget_type="jkit_icon_box.default">
															<div class="elementor-widget-container">
																<div  class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation-float jeg_module_982_4_653f689394770" >
																	<div class="jkit-icon-box-wrapper hover-from-bottom" style="height:230px">
																		<div class="icon-box icon-box-header elementor-animation-float">
																			<div class="icon style-color">
																				<i aria-hidden="true" class="jki jki-map-pin-line"></i>
																			</div>
																		</div>
																	<div class="icon-box icon-box-body">
                														<h2 class="title">{{$contactPageContents['card_1_text_1']}}</h2>
																		<p class="icon-box-description">
																		{{$contactPageContents['card_1_text_2']}} 
																		</p>
            														</div>
            
            													</div>
															</div>		
														</div>
													</div>
												</div>
									</div>													
													

										<div class="elementor-column elementor-col-33 elementor-inner-column 
												elementor-element elementor-element-5d94d74d" data-id="5d94d74d" data-element_type="column">
													<div class="elementor-widget-wrap elementor-element-populated">
														<div class="elementor-element elementor-element-5412df6 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" data-id="5412df6" data-element_type="widget" data-widget_type="jkit_icon_box.default">
															<div class="elementor-widget-container">
																<div  class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation-float jeg_module_982_4_653f689394770" >
																	<div class="jkit-icon-box-wrapper hover-from-bottom" style="height:230px">
																		<div class="icon-box icon-box-header elementor-animation-float">
																			<div class="icon style-color">
																				<i aria-hidden="true" class="jki jki-email-light"></i>
																			</div>
																		</div>
																	<div class="icon-box icon-box-body">
                														<h2 class="title">{{$contactPageContents['card_3_text_1']}}</h2>
																		<a class="icon-box-description"
																		href="mailto:{{$contactPageContents['card_3_text_2']}}">{{$contactPageContents['card_3_text_2']}}</a>

            														</div>
            
            													</div>
															</div>		
														</div>
													</div>
												</div>
									</div>

									<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-794c66ef" 
										data-id="794c66ef" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-3fdbaed0 
											jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box" data-id="3fdbaed0" data-element_type="widget" data-widget_type="jkit_icon_box.default">
												<div class="elementor-widget-container">
													<div  class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation-float jeg_module_982_5_653f689395f0d" >
														<div class="jkit-icon-box-wrapper hover-from-bottom" style="height:230px">
															<div class="icon-box icon-box-header elementor-animation-float">
																<div class="icon style-color">
																	<i aria-hidden="true" class="jki jki-phone-forwarded-line"></i>
																</div>
															</div>
														<div class="icon-box icon-box-body">
                											<h2 class="title">{{$contactPageContents['card_4_text_1']}}</h2>
															<a class="icon-box-description" href="tel:{{$contactPageContents['card_4_text_2']}}">{{$contactPageContents['card_4_text_2']}}</a>

            											</div>
            
           											</div>
												</div>		
											</div>
										</div>
									</div>
							</div>
						</div>
					</section>

				<section class="elementor-section elementor-inner-section elementor-element elementor-element-4afa3d41 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4afa3d41" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-683645fc" data-id="683645fc" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-76a5cb42 elementor-widget elementor-widget-google_maps" data-id="76a5cb42" data-element_type="widget" data-widget_type="google_maps.default">
											<div class="elementor-widget-container">
												<div class="elementor-custom-embed">
														<iframe loading="lazy"
																src="{{$contactPageContents['google_map_url']}}"
																title="{{$contactPageContents['map_title']}}"
																aria-label="{{$contactPageContents['map_title']}}">
														</iframe>
												</div>
											</div>
									</div>
							</div>
						</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a1f657a" data-id="a1f657a" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-67495350 elementor-widget elementor-widget-heading" data-id="67495350" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
										<h2 class="elementor-heading-title elementor-size-default">{{$contactPageContents['form_heading']}}</h2>		
								</div>
							</div>
							<div class="elementor-element elementor-element-0afb62c elementor-widget elementor-widget-metform" data-id="0afb62c" data-element_type="widget" data-widget_type="metform.default">
								<div class="elementor-widget-container">
									<div id="mf-response-props-id-1228" data-previous-steps-style="" data-editswitchopen="" data-response_type="alert" data-erroricon="fas fa-exclamation-triangle" data-successicon="fas fa-check" data-messageposition="top" class="   mf-scroll-top-no">
										<div class="formpicker_warper formpicker_warper_editable" data-metform-formpicker-key="1228" >
				
											<div class="elementor-widget-container">
				
													
											<div id="metform-wrap-0afb62c-1228" 
											     class="mf-form-wrapper" 
												 data-form-id="1228" 
												 data-action="" 
												 data-wp-nonce="2b28141b1d" 
												 data-form-nonce="daffe11720" 
												 data-quiz-summery="false" 
												 data-save-progress="false" 
												 data-form-type="contact_form" 
												 data-stop-vertical-effect="">

												 	<form class="metform-form-content">
														
														<div class="mf-main-response-wrap  mf-response-msg-wrap" data-show="0">
															<div class="mf-response-msg">
																<i class="mf-success-icon fas fa-check"></i>
																<p></p>
															</div>
														</div>
														<div class="metform-form-main-wrapper">
															<div data-elementor-type="wp-post" data-elementor-id="1228" class="elementor elementor-1228">
																<section class="elementor-section elementor-top-section elementor-element elementor-element-fd07e8e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fd07e8e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
																	<div class="elementor-container elementor-column-gap-default">
																		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-08ff1d7" data-id="08ff1d7" data-element_type="column">
																			<div class="elementor-widget-wrap elementor-element-populated">
																				<section class="elementor-section elementor-inner-section elementor-element elementor-element-3984e39 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3984e39" data-element_type="section">
																					<div class="elementor-container elementor-column-gap-default">
																						<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7de04a9" data-id="7de04a9" data-element_type="column">
																							<div class="elementor-widget-wrap elementor-element-populated">
																								<div class="elementor-element elementor-element-fc43897 elementor-widget elementor-widget-mf-text" data-id="fc43897" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-text&quot;}" data-widget_type="mf-text.default">
																									<div class="elementor-widget-container">
																										<div class="mf-input-wrapper">
																											<input type="text" class="mf-input " id="mf-input-text-fc43897" name="mf-text" placeholder="Name " aria-invalid="false">
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2d249d5" data-id="2d249d5" data-element_type="column">
																							<div class="elementor-widget-wrap elementor-element-populated email-field">
																								<div class="elementor-element elementor-element-09b5aea elementor-widget elementor-widget-mf-email" data-id="09b5aea" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;}" data-widget_type="mf-email.default">
																									<div class="elementor-widget-container">
																										<div class="mf-input-wrapper">
																											<input type="email" class="mf-input " id="mf-input-email-09b5aea" name="mf-email" placeholder="Email " aria-invalid="false" value="">
																											<div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</section>
																				<div class="elementor-element elementor-element-92b02c4 elementor-widget elementor-widget-mf-telephone" data-id="92b02c4" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-telephone&quot;}" data-widget_type="mf-telephone.default">
																					<div class="elementor-widget-container">
																						<div class="mf-input-wrapper">
																							<input type="tel" class="mf-input " id="mf-input-telephone-92b02c4" name="mf-telephone" placeholder="Phone " aria-invalid="false">
																						</div>
																					</div>
																				</div>
																				<div class="elementor-element elementor-element-e988cd8 elementor-widget elementor-widget-mf-textarea" data-id="e988cd8" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;mf-textarea&quot;}" data-widget_type="mf-textarea.default">
																					<div class="elementor-widget-container">
																						<div class="mf-input-wrapper">
																							<textarea class="mf-input mf-textarea " id="mf-input-text-area-e988cd8" name="mf-textarea" placeholder="Message " cols="30" rows="10" aria-invalid="false">

																							</textarea>
																						</div>
																					</div>
																				</div>
																				<div class="elementor-element elementor-element-ad5cf0b elementor-widget elementor-widget-mf-radio" data-id="ad5cf0b" data-element_type="widget" 
																					data-settings="{&quot;mf_input_name&quot;:&quot;mf-radio&quot;,&quot;mf_input_list&quot;:[{&quot;mf_input_option_text&quot;:&quot;I agree to the Bolstart privacy policy*&quot;,&quot;mf_input_option_value&quot;:&quot;value-1&quot;,&quot;_id&quot;:&quot;b606fc8&quot;,&quot;mf_input_option_status&quot;:&quot;&quot;,&quot;mf_input_option_selected&quot;:&quot;&quot;}]}" data-widget_type="mf-radio.default">
																					<div class="elementor-widget-container">
																						<div class="mf-input-wrapper">
																							<div class="mf-radio multi-option-input-type" id="mf-input-radio-ad5cf0b">
																								<div class="mf-radio-option ">
																									<label>
																										<input type="radio" class="mf-input mf-radio-input " name="mf-radio" data-checked="" aria-invalid="false" value="value-1">
																										<span>
																											{{$contactPageContents['form_policy_sentence']}} <a target="_blank" href="{{route('frontend.privacy-policy')}}">Privacy Policy</a>
																										</span>
																									</label>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="elementor-element elementor-element-0eaab2e mf-btn--justify mf-btn--tablet-justify mf-btn--mobile-justify elementor-widget elementor-widget-mf-button" data-id="0eaab2e" data-element_type="widget" data-widget_type="mf-button.default">
																					<div class="elementor-widget-container">
																						<div class="mf-btn-wraper " data-mf-form-conditional-logic-requirement="">
																							<button type="submit" class="metform-btn metform-submit-btn " id="">
																								<span>{{$contactPageContents['form_button_text']}} </span>
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
				</div>
			</div>
		</section>
	</div>
</div>
</div>
</section>
</div>					
</div><!-- #page -->

@endsection