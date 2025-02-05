@extends('frontend.layouts.about')

@section('title') Bolstart - Frequently Asked Questions @endsection

@section('content')

<div data-elementor-type="wp-page" data-elementor-id="972" class="elementor elementor-972">

			<section
				class="elementor-section elementor-top-section elementor-element 
				       elementor-element-2cd9cb30 elementor-section-boxed elementor-section-height-default 
					   elementor-section-height-default" style="margin:0px 0px 0px 0px;padding-bottom:30px;"
				data-id="2cd9cb30" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-background-overlay"></div>


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
												<div class="elementor-widget-container" style="margin-top:-30px">
													<h2 class="elementor-heading-title elementor-size-default" style="text-align:center">
														FAQ</h2>													
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
			</section>			


			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-2744f9e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="2744f9e" data-element_type="section">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33
					   elementor-top-column elementor-element 
					   elementor-element-32f2d02 jkit-sticky-element--enabled 
					   jkit-sticky-element-on--down jkit-sticky-position--sticky" style="display:none"
						data-id="32f2d02" data-element_type="column"
						data-settings="{&quot;jkit_sticky_device&quot;:[&quot;desktop&quot;],&quot;jkit_sticky_top_position&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]}}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-446dcca elementor-widget elementor-widget-heading"
								data-id="446dcca" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h5 class="elementor-heading-title elementor-size-default">FAQ</h5>
								</div>
							</div>
							<div class="elementor-element elementor-element-83301be elementor-widget elementor-widget-heading"
								data-id="83301be" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h3 class="elementor-heading-title elementor-size-default">Got Questions ?</h3>
								</div>
							</div>
							<div class="elementor-element elementor-element-0084958 elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor"
								data-id="0084958" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									If you have any other questions &#8211; please get in touch at <span
										style="color: #222631;"><strong>support@bolstart.com</strong></span> </div>
							</div>
							<div class="elementor-element elementor-element-4a5cef4 elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-spacer"
								data-id="4a5cef4" data-element_type="widget" data-widget_type="spacer.default">
								<div class="elementor-widget-container">
									<div class="elementor-spacer">
										<div class="elementor-spacer-inner"></div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-0ad16b6 elementor-widget__width-auto elementor-widget elementor-widget-jkit_button"
								data-id="0ad16b6" data-element_type="widget" data-widget_type="jkit_button.default">
								<div class="elementor-widget-container">
									<div
										class="jeg-elementor-kit jkit-button  icon-position-after jeg_module_972_17_652f9499a3bca">
										<a href="" class="jkit-button-wrapper">Contact Us</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-297a13a"
						data-id="297a13a" data-element_type="column" style="width:100%">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-6ab42fd elementor-widget elementor-widget-jkit_accordion"
								data-id="6ab42fd" data-element_type="widget" data-widget_type="jkit_accordion.default">
								<div class="elementor-widget-container">
									<div
										class="jeg-elementor-kit jkit-accordion style-default jeg_module_972_18_652f9499a826e">

										@foreach($faqs as $key => $faq)
    <div class="card-wrapper{{ $key === 0 ? ' expand' : '' }}">
        <div class="card-header" style="padding:0px">
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
		</div>

@endsection