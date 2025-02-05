@extends('frontend.layouts.blognews')

@section('title') Bolstart - Blog @endsection

@section('content')

<style>
	.thumbnail-container.small-thumbnail{
		height:200px !important;
	}


	.jkit-post-meta{
		margin-top:-10px !important;
	}
	.post-author{
		font-family:Mulish;
		font-size:17px !important;
	}

	</style>


<div data-elementor-type="wp-page" data-elementor-id="980" class="elementor elementor-980">
					
    <section class="elementor-section elementor-top-section elementor-element 
                    elementor-element-3959029 elementor-section-boxed elementor-section-height-default elementor-section-height-default" 
                    data-id="3959029" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" 
					style="padding:150px 0px 80px 0px">
		<div class="elementor-background-overlay">			
		</div>
		<div class="elementor-container elementor-column-gap-default">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-508d85d" data-id="508d85d" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-element elementor-element-d01d4f7 elementor-widget elementor-widget-heading" data-id="d01d4f7" data-element_type="widget" data-widget_type="heading.default">
						<div class="elementor-widget-container">			
                    		<h2 class="elementor-heading-title elementor-size-default">Blog</h2>
							<p style="font-size:18px;color:white;font-family:Mulish">
								Explore insightful articles and expert perspectives on the latest trends, strategies, and success stories shaping the dynamic landscape of investments and startups.
							</p>
						</div>
					</div>				
				</div>
			</div>
		</div>

	</section>
        
	
	@if($latestFeaturedPost)


	<section class="elementor-section elementor-inner-section elementor-element elementor-element-5d34261 blog-featured-post-section 
			elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5d34261" 
				data-element_type="section" style="margin-top:50px;margin-bottom:50px;">
		
		<div class="elementor-container elementor-column-gap-no">
		
			<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-abc6796" data-id="abc6796" data-element_type="column">
				
				<div class="elementor-widget-wrap elementor-element-populated">

					<div class="elementor-element elementor-element-b2db7c8 elementor-widget elementor-widget-jkit_post_block" 
							data-id="b2db7c8" data-element_type="widget" data-widget_type="jkit_post_block.default">
						
						<div class="elementor-widget-container">

							<div class="jeg-elementor-kit jkit-postblock postblock-type-2 jkit-pagination-disable post-element jeg_module_980_3_653f6d2534f01"  data-id="jeg_module_980_3_653f6d2534f01" data-settings="{&quot;post_type&quot;:&quot;post&quot;,&quot;number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;post_offset&quot;:1,&quot;unique_content&quot;:&quot;disable&quot;,&quot;include_post&quot;:&quot;&quot;,&quot;exclude_post&quot;:&quot;&quot;,&quot;include_category&quot;:&quot;&quot;,&quot;exclude_category&quot;:&quot;&quot;,&quot;include_author&quot;:&quot;&quot;,&quot;include_tag&quot;:&quot;&quot;,&quot;exclude_tag&quot;:&quot;&quot;,&quot;sort_by&quot;:&quot;latest&quot;,&quot;pagination_mode&quot;:&quot;disable&quot;,&quot;pagination_loadmore_text&quot;:&quot;Load More&quot;,&quot;pagination_loading_text&quot;:&quot;Loading...&quot;,&quot;pagination_number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;pagination_scroll_limit&quot;:0,&quot;pagination_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;pagination_icon_position&quot;:&quot;before&quot;,&quot;st_category_position&quot;:&quot;left&quot;,&quot;sg_content_postblock_type&quot;:&quot;type-2&quot;,&quot;sg_content_element_order&quot;:&quot;title,meta,excerpt,read&quot;,&quot;sg_content_breakpoint&quot;:&quot;tablet&quot;,&quot;sg_content_title_html_tag&quot;:&quot;h3&quot;,&quot;sg_content_category_enable&quot;:&quot;&quot;,&quot;sg_content_excerpt_enable&quot;:&quot;&quot;,&quot;sg_content_excerpt_length&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:24,&quot;sizes&quot;:[]},&quot;sg_content_excerpt_more&quot;:&quot;...&quot;,&quot;sg_content_readmore_enable&quot;:&quot;&quot;,&quot;sg_content_readmore_icon&quot;:{&quot;value&quot;:&quot;fas fa-arrow-right&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_readmore_icon_position&quot;:&quot;after&quot;,&quot;sg_content_readmore_text&quot;:&quot;Read More&quot;,&quot;sg_content_comment_enable&quot;:&quot;&quot;,&quot;sg_content_comment_icon&quot;:{&quot;value&quot;:&quot;fas fa-comment&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_comment_icon_position&quot;:&quot;before&quot;,&quot;sg_content_meta_enable&quot;:&quot;yes&quot;,&quot;sg_content_meta_author_enable&quot;:&quot;&quot;,&quot;sg_content_meta_author_by_text&quot;:&quot;By &quot;,&quot;sg_content_meta_author_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;sg_content_meta_author_icon_position&quot;:&quot;before&quot;,&quot;sg_content_meta_date_enable&quot;:&quot;yes&quot;,&quot;sg_content_meta_date_type&quot;:&quot;published&quot;,&quot;sg_content_meta_date_format&quot;:&quot;default&quot;,&quot;sg_content_meta_date_format_custom&quot;:&quot;F j, Y&quot;,&quot;sg_content_meta_date_icon&quot;:{&quot;value&quot;:&quot;fas fa-calendar-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_meta_date_icon_position&quot;:&quot;before&quot;,&quot;sg_content_image_size_imagesize_size&quot;:&quot;full&quot;,&quot;paged&quot;:1,&quot;class&quot;:&quot;jkit_post_block&quot;}">
									
								<div class="jkit-block-container">
									<div class="jkit-posts jkit-ajax-flag">
            						
										<article class="jkit-post post-716 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-business">
                    
											<div class="jkit-thumb">
												<a href="{{ route('frontend.single.blog', ['id' => $latestFeaturedPost->slug]) }}">
													<div class="thumbnail-container ">
            											<img loading="lazy" width="1440" height="961" 
																		src="{{ $latestFeaturedPost->featured_image }}" 
			 															class="attachment-full size-full wp-post-image" 
			 															alt="Article Image" 
			 															decoding="async" 																		 
																		sizes="(max-width: 1440px) 100vw, 1440px" />
        											</div>
												</a>
											</div>
                							<div class="jkit-postblock-content">
												<h3 class="jkit-post-title">
															<a href="{{ route('frontend.single.blog', ['id' => $latestFeaturedPost->slug ]) }}">
																{{$latestFeaturedPost->name}}</a>
												</h3>
												<div class="elementor-widget-container">
													<div class="elementor-icon-wrapper" style="display:flex;flex-direction:row;align-items:center">
														<div class="elementor-icon">
															<i aria-hidden="true" class="jki jki-user-light" 
																style="font-size:18px;font-weight:400;color:#11ee84"></i>			
														</div>
														<div class="jeg-elementor-kit jkit-post-author jeg_module_715_3_654f64e45209e">
																<p class="post-author" style="font-size:19px;font-weight:400;color:#000;margin-left:20px">
																	{{ $latestFeaturedPost->created_by_alias ?: $latestFeaturedPost->created_by_name }}
																</p>
														</div>
													</div>
												</div>	
					
												<div class="jkit-post-meta">
													<div class="jkit-meta-date icon-position-before">
														<i aria-hidden="true" class="fas fa-calendar-alt"></i>
														{{ \Carbon\Carbon::parse($latestFeaturedPost->published_at)->format('F j, Y') }}
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

			<!-- Categories start -->
			<div class="categories-section">

					<div style="background-color:#222631;box-shadow:0px 0px 0px 0px rgba(107, 137.00000000000006, 180, 0.15);
						border-style:solid;
						padding:15px;
						border-width:1px;
						border-color:#222631;
						border-radius:16px;height:70%">		
						
						<h3 style="margin:5px;font-family:Mulish;font-size:24px;font-weight:600;color:white">Categories</h3>					


						@php
    						$backgroundColors = [
        						'#11EE84',
        						'#50F3A5',
        						'#70F5B5',
        						'#90F7C6',
        						'#A0F8CE',
        						'#B0F9D6',
        						'#CFFCE6',
								'#EFFEF7'
    						];
						@endphp

						<div style="display:flex;flex-direction:row;flex-wrap:wrap;margin-top:35px">

						@foreach($blogCategories as $index => $category)
    						@php
        						$colorIndex = $index % count($backgroundColors);
        						$backgroundColor = $backgroundColors[$colorIndex];
    						@endphp

    							<a href="{{ route('frontend.blog-category', ['slug' => $category->slug]) }}" 
        							style="padding: 10px; background-color: {{ $backgroundColor }}; border-radius: 8px; margin: 5px; font-size: 16px; font-weight: 600; color: #000; font-family: Mulish;">
        								{{ $category->name }}
    							</a>
							@endforeach

						</div>

					</div>

					<div class="blog-get-in-touch-box"> 						

						<h4 style="font-family:Mulish;font-size:16px;font-weight:400">
							Unlock limitless possibilities for your startup or 
							investment journey - Join Bolstart today and connect with the right partners to fuel your success!
						</h4>

						<a 
						  style="font-family:Mulish;font-weight:600;color:#000" href="{{route('frontend.contact-us')}}">Contact Us &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>

					</div>


			</div>
			<!-- Categories end -->
		</div>

	</section>	
	
	@endif


	<section class="recent-news-section elementor-section elementor-inner-section elementor-element elementor-element-5d34261 
			elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5d34261" 
				data-element_type="section">
				
			@if(sizeof($latestArticles) > 0)
				<div class="elementor-container elementor-column-gap-no" >
					<h1 style="font-family:Mulish;font-size:30px">Recent Blogs</h1>
				</div>
			@endif


	    
		<div class="elementor-container elementor-column-gap-no latest-posts" >		

			@foreach($latestArticles as $article)			


		
			<div class="elementor-column elementor-col-25 blogs-grid-col elementor-inner-column elementor-element elementor-element-abc6796" 
					data-id="abc6796" data-element_type="column" style="margin:1.5%">
				
				<div class="elementor-widget-wrap elementor-element-populated">

					<div class="elementor-element elementor-element-b2db7c8 elementor-widget elementor-widget-jkit_post_block" 
							data-id="b2db7c8" data-element_type="widget" data-widget_type="jkit_post_block.default">
						
						<div class="elementor-widget-container">

							<div class="jeg-elementor-kit jkit-postblock postblock-type-2 jkit-pagination-disable post-element jeg_module_980_3_653f6d2534f01"  
									data-id="jeg_module_980_3_653f6d2534f01" data-settings="{&quot;post_type&quot;:&quot;post&quot;,&quot;number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;post_offset&quot;:1,&quot;unique_content&quot;:&quot;disable&quot;,&quot;include_post&quot;:&quot;&quot;,&quot;exclude_post&quot;:&quot;&quot;,&quot;include_category&quot;:&quot;&quot;,&quot;exclude_category&quot;:&quot;&quot;,&quot;include_author&quot;:&quot;&quot;,&quot;include_tag&quot;:&quot;&quot;,&quot;exclude_tag&quot;:&quot;&quot;,&quot;sort_by&quot;:&quot;latest&quot;,&quot;pagination_mode&quot;:&quot;disable&quot;,&quot;pagination_loadmore_text&quot;:&quot;Load More&quot;,&quot;pagination_loading_text&quot;:&quot;Loading...&quot;,&quot;pagination_number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;pagination_scroll_limit&quot;:0,&quot;pagination_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;pagination_icon_position&quot;:&quot;before&quot;,&quot;st_category_position&quot;:&quot;left&quot;,&quot;sg_content_postblock_type&quot;:&quot;type-2&quot;,&quot;sg_content_element_order&quot;:&quot;title,meta,excerpt,read&quot;,&quot;sg_content_breakpoint&quot;:&quot;tablet&quot;,&quot;sg_content_title_html_tag&quot;:&quot;h3&quot;,&quot;sg_content_category_enable&quot;:&quot;&quot;,&quot;sg_content_excerpt_enable&quot;:&quot;&quot;,&quot;sg_content_excerpt_length&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:24,&quot;sizes&quot;:[]},&quot;sg_content_excerpt_more&quot;:&quot;...&quot;,&quot;sg_content_readmore_enable&quot;:&quot;&quot;,&quot;sg_content_readmore_icon&quot;:{&quot;value&quot;:&quot;fas fa-arrow-right&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_readmore_icon_position&quot;:&quot;after&quot;,&quot;sg_content_readmore_text&quot;:&quot;Read More&quot;,&quot;sg_content_comment_enable&quot;:&quot;&quot;,&quot;sg_content_comment_icon&quot;:{&quot;value&quot;:&quot;fas fa-comment&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_comment_icon_position&quot;:&quot;before&quot;,&quot;sg_content_meta_enable&quot;:&quot;yes&quot;,&quot;sg_content_meta_author_enable&quot;:&quot;&quot;,&quot;sg_content_meta_author_by_text&quot;:&quot;By &quot;,&quot;sg_content_meta_author_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;sg_content_meta_author_icon_position&quot;:&quot;before&quot;,&quot;sg_content_meta_date_enable&quot;:&quot;yes&quot;,&quot;sg_content_meta_date_type&quot;:&quot;published&quot;,&quot;sg_content_meta_date_format&quot;:&quot;default&quot;,&quot;sg_content_meta_date_format_custom&quot;:&quot;F j, Y&quot;,&quot;sg_content_meta_date_icon&quot;:{&quot;value&quot;:&quot;fas fa-calendar-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_meta_date_icon_position&quot;:&quot;before&quot;,&quot;sg_content_image_size_imagesize_size&quot;:&quot;full&quot;,&quot;paged&quot;:1,&quot;class&quot;:&quot;jkit_post_block&quot;}">
									
								<div class="jkit-block-container">
									<div class="jkit-posts jkit-ajax-flag">
            						
										<article class="jkit-post post-716 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-business">
                    
											<div class="jkit-thumb">
												<a href="{{ route('frontend.single.blog', ['id' => $article->slug]) }}">
													<div class="thumbnail-container small-thumbnail">
            											<img loading="lazy" width="1440" height="961" 
																		src="{{ $article->featured_image }}" 
			 															class="attachment-full size-full wp-post-image" 
			 															alt="Article Image" 
			 															decoding="async" 
																		 
														sizes="(max-width: 1440px) 100vw, 1440px" />
        											</div>
												</a>
											</div>
                							<div class="jkit-postblock-content">
												<h3 class="jkit-post-title">
															<a href="{{ route('frontend.single.blog', ['id' => $article->slug]) }}">
																{{$article->name}}
															</a>
												</h3>
												<div class="elementor-widget-container">
													<div class="elementor-icon-wrapper" style="display:flex;flex-direction:row;align-items:center">
														<div class="elementor-icon">
															<i aria-hidden="true" class="jki jki-user-light" style="font-size:18px;font-weight:400;color:#11ee84"></i>			
														</div>
														<div class="jeg-elementor-kit jkit-post-author jeg_module_715_3_654f64e45209e">
																<p class="post-author" style="font-size:19px;font-weight:400;color:#000;margin-left:20px">
																	{{ $article->created_by_alias ?: $article->created_by_name }}
																</p>
														</div>
													</div>
												</div>	
					
												<div class="jkit-post-meta">
													<div class="jkit-meta-date icon-position-before">
														<i aria-hidden="true" class="fas fa-calendar-alt"></i>
														{{ \Carbon\Carbon::parse($article->published_at)->format('F j, Y') }}
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


			@endforeach	
			
		</div>		

	</section>	



</div><!-- #page -->


@endsection