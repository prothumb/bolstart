<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.ico')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title', 'Bolstart')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bolstart">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">


	<meta property="og:image" content="{{asset('img/bolstart-og-image.png')}}">
    <meta property="og:image:secure_url" content="{{asset('img/bolstart-og-image.png')}}">

	<link rel='stylesheet'  href="{{asset('css/post-3.css')}}" media='all' />

	<link rel='stylesheet'  href="{{asset('css/global.css')}}" media='all' />

    <link rel='stylesheet' href="{{asset('css/style.css')}}" media='all' />
	<link rel='stylesheet'  href="{{asset('css/post-908.css')}}" media='all' />
	<link rel='stylesheet'  href="{{asset('css/post-976.css')}}" media='all' />

	<link rel='stylesheet'  href="{{asset('css/main.css')}}" media='all' />
	<link rel='stylesheet'  href="{{asset('css/style.min.css')}}" media='all' />
	<link rel='stylesheet'  href="{{asset('css/classic-themes.min.css')}}" media='all' />
	<link rel='stylesheet'  href="{{asset('css/template-kit-export-public.min.css')}}" media='all' />
	<link rel='stylesheet'  href="{{asset('css/elementor-icons.min.css')}}" media='all' />
	<link rel='stylesheet'  href="{{asset('css/frontend-lite.min.css')}}" media='all' />
	<link rel='stylesheet'  href="{{asset('css/swiper.min.css')}}" media='all' />

	<link rel='stylesheet' href="{{asset('css/post-972.css')}}" media='all' />
	
	<link rel='stylesheet'  href="{{asset('css/all.min.css')}}" media='all' />
	<link rel='stylesheet'  href="{{asset('css/v4-shims.min.css')}}" media='all' />
	<link rel='stylesheet'  href="{{asset('css/style1.min.css')}}" media='all' />
	<link rel='stylesheet'  href="{{asset('css/theme.min.css')}}" media='all' />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />


	<link rel='stylesheet' 
		href='https://fonts.googleapis.com/css?family=Mulish%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.2.2'
		media='all' />
	<link rel='stylesheet'  href="{{asset('css/jkiticon.css')}}" media='all' />
	<link rel='stylesheet'  href="{{asset('css/fontawesome.min.css')}}" media='all' />
	<link rel='stylesheet'  href="{{asset('css/solid.min.css')}}" media='all' />

	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

	<link rel="stylesheet" href="{{asset('assets/plugins/elementor/assets/css/widget-icon-list.min.css')}}">

	<style>
		@keyframes floating {
			0%, 100% {
				transform: translateY(0);
			}
			50% {
				transform: translateY(-10px);
			}
		}

		/* Initially hide the submenus */
	    .jkit-submenu-position-top .sub-menu {
    		display: none;
		}

		/* Display the submenu when the parent item is hovered */
		.jkit-submenu-position-top li.menu-item-has-children:hover > ul.sub-menu {
    			display: block !important;
		}
	</style>
	

	

	

	<script src="{{asset('assets/js/jquery/jquery.min.js')}}"
		id='jquery-core-js'></script>

	<script src="{{asset('assets/js/jquery/jquery-migrate.min.js')}}"
		id='jquery-migrate-js'></script>

	<script
		src="{{asset('js/template-kit-export-public.min.js')}}"
		id='template-kit-export-js'></script>

	<script
		src="{{asset('js/v4-shims.min.js')}}"></script>

	<meta name="generator" content="Elementor 3.15.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints;
		   settings: css_print_method-external, google_font-enabled, font_display-auto">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    @include('frontend.includes.meta')

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <link rel="icon" type="image/ico" href="{{asset('img/favicon.ico')}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app-frontend.css'])
    @vite(['resources/js/app-frontend.js'])

    @livewireStyles
    
    @stack('after-styles')

    <x-google-analytics />
</head>

<body>

    @include('frontend.includes.header')

    <main>
        @yield('content')
    </main>

    @include('frontend.includes.footer')

    <!-- Scripts -->
    @livewireScripts
    @stack('after-scripts')


	<link rel='stylesheet' id='sweetalert2-css'
		href="{{asset('assets/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min.css')}}"
		media='all' />

	<link rel='stylesheet' id='tiny-slider-css'
		href="{{asset('assets/plugins/jeg-elementor-kit/assets/js/tiny-slider/tiny-slider.css')}}"
		media='all' />

	<link rel='stylesheet' id='elementor-post-667-css'
		href="{{asset('assets/elementor/css/post-667.css')}}"
		media='all' />



	<link rel='stylesheet' id='metform-ui-css'
		href="{{asset('assets/plugins/metform/public/assets/css/metform-ui.css')}}"
		media='all' />

	<link rel='stylesheet' id='metform-style-css'
		href="{{asset('assets/plugins/metform/public/assets/css/style.css')}}"
		media='all' />

	<link rel='stylesheet' id='elementor-post-963-css'
		href="{{asset('assets/elementor/css/post-963.css')}}"
		media='all' />

	<link rel='stylesheet' id='elementor-icons-fa-brands-css'
		href="{{asset('assets/elementor/assets/lib/font-awesome/css/brands.min.css')}}"
		media='all' />

	<link rel='stylesheet' id='e-animations-css'
		href="{{asset('assets/elementor/assets/lib/animations/animations.min.css')}}"
		media='all' />


	<script
		src="{{asset('assets/themes/hello-elementor/assets/js/hello-frontend.min.js')}}"
		id='hello-theme-frontend-js'></script>

	<script
		src="{{asset('assets/elementor/assets/js/webpack.runtime.min.js')}}"
		id='elementor-webpack-runtime-js'></script>

	<script
		src="{{asset('assets/elementor/assets/js/frontend-modules.min.js')}}"
		id='elementor-frontend-modules-js'></script>

	<script
		src="{{asset('assets/waypoints/waypoints.min.js')}}"
		id='elementor-waypoints-js'></script>

	<script src="{{asset('js/jquery/ui/core.min.js')}}"
		id='jquery-ui-core-js'></script>

	
		<script id='elementor-frontend-js-before'>
		var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, 
		"i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it",
		 "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", 
		 "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close",
		  "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right", "a11yCarouselPrevSlideMessage": "Previous slide",
		   "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide",
		    "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" },
			 "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 },
			  "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", 
			  "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, 
			  "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, 
			  "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, 
			  "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false },
			   "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, 
			   "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, 
			   "version": "3.15.3", "is_static": false, "experimentalFeatures": { "e_dom_optimization": true, "e_optimized_assets_loading": true,
			    "e_optimized_css_loading": true, "additional_custom_breakpoints": true, "hello-theme-header-footer": true, "landing-pages": true },
				 "urls": { "assets": "" }, "swiperClass": "swiper-container",
				  "settings": { "page": [], "editorPreferences": [] }, "kit": { "body_background_background": "classic", 
				  "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes",
				   "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes",
				    "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description", 
					"hello_header_logo_type": "title", "hello_header_menu_layout": "horizontal", "hello_footer_logo_type": "logo" },
					 "post": { "id": 908, "title": "Bolstart",
					  "excerpt": "", "featuredImage": false } };
	</script>


	<script src="{{asset('assets/elementor/assets/js/frontend.min.js')}}"
		></script>
	

	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/elements/sticky-element.js')}}"
		></script>

	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/elements/nav-menu.js')}}"
		></script>

	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/elements/search.js')}}"
		></script>

	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min.js')}}"
		></script>

	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/elements/video-button.js')}}"
		></script>

	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/elements/pie-chart.js')}}"
		></script>


	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/chartjs/chart.min.js')}}"
		></script>

	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/elements/client-logo.js')}}"
		></script>

	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/tiny-slider/tiny-slider.js')}}"
		></script>

	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/elements/animated-text.js')}}"
		></script>

	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/elements/progress-bar.js')}}"
		></script>

	<script src="{{asset('assets/plugins/metform/public/assets/js/htm.js')}}"
		></script>

	<script src="{{asset('assets/js/vendor/wp-polyfill-inert.min.js')}}"
		></script>

	<script src="{{asset('assets/js/vendor/regenerator-runtime.min.js')}}"
		></script>

	<script src="{{asset('assets/js/vendor/wp-polyfill.min.js')}}"
		></script>

	<script src="{{asset('assets/js/vendor/react.min.js')}}"
		></script>

	<script src="{{asset('assets/js/vendor/react-dom.min.js')}}"
		></script>

	<script src="{{asset('assets/js/vendor/escape-html.min.js')}}"
		></script>

	<script src="{{asset('assets/js/vendor/element.min.js')}}"
		></script>

	<script >
		var mf = { "postType": "page", "restURI": "https://google.com" };
	</script>

	<script src="{{asset('assets/plugins/metform/public/assets/js/app.js')}}"
		></script>

	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/elements/testimonials.js')}}"
		></script>

	<script >
		var jkit_element_pagination_option = { "element_prefix": "jkit_element_ajax_" };
	</script>

	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/elements/post-pagination.js')}}"
		></script>

	<script
		src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/elements/accordion.js')}}"
		></script>

	

<script>

jQuery(document).ready(function() {

    jQuery('.owl-carousel').owlCarousel({
        items: 4, // Display 4 items
        stagePadding: 300, // Add padding to the stage (partially visible item)
        rtl: true, // Enable Right-to-Left mode (useful for languages like Arabic)
        loop: true, // Loop the carousel
        margin: 10, // Spacing between items
        nav: true, // Show navigation buttons
        navText: ['<button class="prev"><i class="fa fa-angle-left"></i></button>', '<button class="next"><i class="fa fa-angle-right"></i></button>'], // Custom navigation buttons
        autoplay: false, // Enable autoplay
        autoplayTimeout: 3000, // Autoplay interval in milliseconds (3 seconds in this example)
        responsive: {
            0: {
                items: 1 // Display 1 item on smaller screens
            },
            600: {
                items: 2 // Display 2 items on medium screens
            },
            1000: {
                items: 3 // Display 4 items on larger screens
            }
        }
    });
});


</script>

<script>

jQuery(document).ready(function() {
    // Attach the click event to a parent element (e.g., 'body')
    jQuery('body').on('click', '.jkit-hamburger-menu', function() {
        
        // Toggle the visibility of the mobile menu
        jQuery('.jkit-menu-wrapper').toggleClass('show-menu');
    });
});

</script>

<script>
	jQuery(document).ready(function() {
		// Add a click event handler to the parent menu items with sub-menus
		
			jQuery('body').on('click', '.menu-item-has-children > a', function(e) {

			
				e.preventDefault(); // Prevent the default link behavior
				jQuery(this).siblings('.sub-menu').toggleClass('show-sub-menu'); // Toggle the CSS class
			});

			
	});
</script>


<script>
    jQuery(document).ready(function () {
        // Add a click event listener to the button
        jQuery('.jkit-close-menu').click(function () {
            console.log('prabasi');
            // Remove the show-menu class from the jkit-menu-wrapper
            jQuery('.jkit-menu-wrapper').removeClass('show-menu');
        });
    });
</script>

<script>
    const currentYearElement = document.getElementById('currentYear');
    const currentYear = new Date().getFullYear();
    currentYearElement.textContent = currentYear;
</script>




</body>

</html>