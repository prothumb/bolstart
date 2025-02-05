@extends('frontend.layouts.article')

@section('title') Bolstart - News - {{$article->name}} @endsection

@section('content')


<style>

	.comment-form-comment, .comment-form-author, .comment-form-email, .comment-form-url, .comment-form-cookies-consent   {
		display:flex;
		flex-direction:column;
		
	}

	input{
		height:50px;
		padding:.5rem 1rem;
	}

	.elementor-kit-3 button, .elementor-kit-3 input[type="button"], .elementor-kit-3 input[type="submit"], .elementor-kit-3 .elementor-button{
		padding:17px 30px 20px 30px;
	}


											.elementor-heading-title{
												padding:0;
												margin:0;
												line-height:1
											}
											.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{
												color:inherit;
												font-size:inherit;
												line-height:inherit}
											.elementor-widget-heading .elementor-heading-title.elementor-size-small{
												font-size:15px
											}
											.elementor-widget-heading .elementor-heading-title.elementor-size-medium{
												font-size:19px
											}
											.elementor-widget-heading .elementor-heading-title.elementor-size-large{
												font-size:29px
											}
											.elementor-widget-heading .elementor-heading-title.elementor-size-xl{
												font-size:39px
											}
											.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{
												font-size:59px
											}								
			

		
														.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{
															background-color:#69727d;color:#fff
														}
														.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{
															color:#69727d;
															border:3px solid;
															background-color:transparent
														}
														.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{
															margin-top:8px
														}
														.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{
															width:1em;height:1em
														}
														.elementor-widget-text-editor .elementor-drop-cap{
															float:left;
															text-align:center;
															line-height:1;
															font-size:50px
														}
														.elementor-widget-text-editor .elementor-drop-cap-letter{
															display:inline-block
														}													
			
				.elementor-widget-divider{
					--divider-border-style:none;
					--divider-border-width:1px;
					--divider-color:#0c0d0e;
					--divider-icon-size:20px;
					--divider-element-spacing:10px;
					--divider-pattern-height:24px;
					--divider-pattern-size:20px;
					--divider-pattern-url:none;
					--divider-pattern-repeat:repeat-x
				}
				.elementor-widget-divider .elementor-divider{
					display:flex
				}
				.elementor-widget-divider .elementor-divider__text{
					font-size:15px;
					line-height:1;
					max-width:95%
				}
				.elementor-widget-divider .elementor-divider__element{
					margin:0 var(--divider-element-spacing);
					flex-shrink:0
				}
				.elementor-widget-divider .elementor-icon{
					font-size:var(--divider-icon-size)
				}
				.elementor-widget-divider .elementor-divider-separator{
					display:flex;
					margin:0;
					direction:ltr
				}
				.elementor-widget-divider--view-line_icon .elementor-divider-separator,.elementor-widget-divider--view-line_text .elementor-divider-separator{
					align-items:center
				}
				.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,.elementor-widget-divider--view-line_text .elementor-divider-separator:after,.elementor-widget-divider--view-line_text .elementor-divider-separator:before{
					display:block;
					content:"";
					border-bottom:0;
					flex-grow:1;
					border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)
				}
				.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type{
					flex-grow:0;
					flex-shrink:100
				}
				.elementor-widget-divider--element-align-left .elementor-divider-separator:before{
					content:none
				}
				.elementor-widget-divider--element-align-left .elementor-divider__element{
					margin-left:0
				}
				.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type{
					flex-grow:0;
					flex-shrink:100
				}
				.elementor-widget-divider--element-align-right .elementor-divider-separator:after{
					content:none
				}
				.elementor-widget-divider--element-align-right .elementor-divider__element{
					margin-right:0
				}
				.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator{
					border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)
				}
				.elementor-widget-divider--separator-type-pattern{
					--divider-border-style:none
				}
				.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator{
					width:100%;
					min-height:var(--divider-pattern-height);
					-webkit-mask-size:var(--divider-pattern-size) 100%;
					mask-size:var(--divider-pattern-size) 100%;
					-webkit-mask-repeat:var(--divider-pattern-repeat);
					mask-repeat:var(--divider-pattern-repeat);
					background-color:var(--divider-color);
					-webkit-mask-image:var(--divider-pattern-url);
					mask-image:var(--divider-pattern-url)
				}
				.elementor-widget-divider--no-spacing{
					--divider-pattern-size:auto
				}
				.elementor-widget-divider--bg-round{
					--divider-pattern-repeat:round
				}
				.rtl .elementor-widget-divider .elementor-divider__text{
					direction:rtl
				}
				.e-con-inner>.elementor-widget-divider,.e-con>.elementor-widget-divider{
					width:var(--container-widget-width,100%);
					--flex-grow:var(--container-widget-flex-grow)
				}

		</style>		




<div data-elementor-type="wp-post" data-elementor-id="715" class="elementor elementor-715 elementor-kit-3">

			<section class="elementor-section elementor-top-section 
							elementor-element elementor-element-68540f1 elementor-section-boxed elementor-section-height-default 
							elementor-section-height-default" 
							data-id="68540f1" 
							data-element_type="section" 
							style="padding:150px 0px 60px 0px"
							data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-96e7b65" 
									data-id="96e7b65" data-element_type="column">

						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-457ca663 elementor-widget elementor-widget-jkit_post_title" data-id="457ca663" data-element_type="widget" data-widget_type="jkit_post_title.default">
								<div class="elementor-widget-container">

									<div class="jeg-elementor-kit jkit-post-title jeg_module_715_2_654f64e45065b" >
										<h2 class="post-title style-color ">
											{{$article->name}}
										</h2>
									</div>		
								</div>
							</div>

							<div class="elementor-element elementor-element-28d25ee9 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" data-id="28d25ee9" data-element_type="widget" data-widget_type="icon.default">
										<div class="elementor-widget-container">
											<div class="elementor-icon-wrapper">
												<div class="elementor-icon">
													<i aria-hidden="true" class="jki jki-user-light"></i>			
												</div>
											</div>
										</div>
							</div>

							<div class="elementor-element elementor-element-c0e35cc 
												      elementor-widget__width-auto elementor-widget elementor-widget-jkit_post_author" 
													  data-id="c0e35cc" data-element_type="widget" data-widget_type="jkit_post_author.default">

										<div class="elementor-widget-container">
											<div class="jeg-elementor-kit jkit-post-author jeg_module_715_3_654f64e45209e" >
												<p class="post-author ">
													{{ $article->created_by_alias ?: $article->created_by_name }}
												</p>
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
												<p class="post-date ">
													{{ \Carbon\Carbon::parse($article->published_at)->format('F j, Y') }}
												</p>
											</div>		
										</div>
									</div>
								</div>
							</div>
						</div>
			</section>



			<section class="elementor-section elementor-top-section elementor-element elementor-element-3a3c9759 
							elementor-section-boxed elementor-section-height-default elementor-section-height-default" 
							data-id="3a3c9759" data-element_type="section" 
							data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							
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
										 src="{{ $article->featured_image }}" 
										 class="attachment-full size-full wp-post-image" 
										 alt="selective focus of investors in suits talking with advisor on background at workspace" 
										 decoding="async" 										
										sizes="(max-width: 1440px) 100vw, 1440px" />
								</div>
							</div>		
						</div>
				</div>
								
				
				<div class="elementor-element elementor-element-594e33c8 elementor-widget elementor-widget-heading" 
										data-id="594e33c8" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">
												{{$article->intro}}
											</h2>		
									</div>
				</div>

				<div class="elementor-element elementor-element-594e33c8 elementor-widget elementor-widget-heading" 
										data-id="594e33c8" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										{!! $article->content !!}
									</div>
				</div>								
				

				<div class="elementor-element elementor-element-4ded036c elementor-widget elementor-widget-text-editor" 
						data-id="4ded036c" data-element_type="widget" data-widget_type="text-editor.default">	
				
				
						<div class="elementor-element elementor-element-1a92214b elementor-widget__width-auto elementor-widget-mobile__width-auto 
							elementor-widget-tablet__width-auto elementor-widget elementor-widget-text-editor" style="text-align:left;width:100%"
							data-id="1a92214b" data-element_type="widget" data-widget_type="text-editor.default">
				
							<div class="elementor-widget-container">
								@if(sizeof($tags)>0)	Tags : 	@endif
									<span class="post-terms" style="font-weight:normal">
									    @foreach($tags as $tag)
											<span class="term-list" 
												  style="background-color:#808080;color:white;padding:5px;text-align:center;border-radius:5px;font-size:14px">
											{{$tag->name}}</span>
										@endforeach
									</span>					
							</div>							
						</div>					

				
				<div class="elementor-element elementor-element-14b6d655 elementor-widget elementor-widget-jkit_post_comment" 
						data-id="14b6d655" data-element_type="widget" data-widget_type="jkit_post_comment.default">

						<div class="elementor-widget-container">
							<div  class="jeg-elementor-kit jkit-post-comment jeg_module_715_9_654f64e465945" >
				
								<section id="comments" class="comments-area">

	
										<div id="respond" class="comment-respond">
		<h2 id="reply-title" class="comment-reply-title">Leave a Reply 
		<small>
			<a rel="nofollow" id="cancel-comment-reply-link" 
					href="#" style="display:none;">Cancel reply
			</a>
		</small>
		</h2>
					
		<form action="#" method="post" id="commentform" class="comment-form" novalidate>
			<p class="comment-notes">
				<span id="email-notes">Your email address will not be published.</span> 
				<span class="required-field-message">Required fields are marked <span class="required">*</span></span>
			</p>
			<p class="comment-form-comment">
				<label for="comment">Comment <span class="required">*</span></label> 
				<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required>					
				</textarea>
			</p>
			<p class="comment-form-author">
				<label for="author">Name <span class="required">*</span></label> 
				<input id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name" required />
			</p>
			<p class="comment-form-email">
				<label for="email">Email <span class="required">*</span></label> 
				<input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" autocomplete="email" required />
			</p>

			<p class="comment-form-email">
				<label for="email">Phone <span class="required">*</span></label> 
				<input id="phone" name="phone" type="phone" value="" size="30" maxlength="100" aria-describedby="email-notes" autocomplete="email" required />
			</p>
			
			<p class="form-submit">
				<input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /> 
				<input type='hidden' name='comment_post_ID' value='715' id='comment_post_ID' />
				<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
			</p>
		</form>	
	</div><!-- #respond -->
	
</section><!-- .comments-area -->
</div>		</div>
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