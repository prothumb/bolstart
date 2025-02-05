<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>


<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.ico')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}">
	
	<title>@yield('title', 'Bolstart')</title>
    <meta name='robots' content='max-image-preview:large' />        

	<link rel='stylesheet' href="{{asset('assets/plugins/jeg-elementor-kit/assets/css/elements/main.css')}}" media='all' />
    <link rel='stylesheet' href="{{asset('css/style.min.css')}}" media='all' />
    <link rel='stylesheet' href="{{asset('css/classic-themes.min.css')}}" media='all' />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
        .login-button{
    		background-color:white;
    		height:50px !important;
    		align-self:center;
    		color:#222631 !important;
    		border-radius:5px
		}

		.jkit-nav-menu i{
    		font-size:13px;
    		align-self: center;
    		margin-top:3px;
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


    <style>		

		/* Initially hide the submenus */
	    .jkit-submenu-position-top .sub-menu {
    		display: none !important;
		}

		/* Display the submenu when the parent item is hovered */
		.jkit-submenu-position-top li.menu-item-has-children:hover > ul.sub-menu {
    			display: block !important;
		}
	</style>


<link rel='stylesheet' href="{{asset('css/template-kit-export-public.min.css')}}" media='all' />
<link rel='stylesheet' href="{{asset('css/elementor-icons.min.css')}}" media='all' />
<link rel='stylesheet' href="{{asset('css/frontend-lite.min.css')}}" media='all' />
<link rel='stylesheet' href="{{asset('css/swiper.min.css')}}" media='all' />
<link rel='stylesheet' href="{{asset('css/post-3.css')}}" media='all' />
<link rel='stylesheet' href="{{asset('css/global.css')}}" media='all' />
<link rel='stylesheet' href="{{asset('css/post-982.css')}}" media='all' />
<link rel='stylesheet' href="{{asset('css/all.min.css')}}" media='all' />
<link rel='stylesheet' href="{{asset('css/v4-shims.min.css')}}" media='all' />
<link rel='stylesheet' href="{{asset('css/text-editor.css')}}" media='all' />
<link rel='stylesheet' href="{{asset('css/style.min.css')}}" media='all' />
<link rel='stylesheet' href="{{asset('css/theme.min.css')}}" media='all' />

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Mulish%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.2.3' media='all' />

<link rel="stylesheet" href="{{asset('assets/plugins/elementor/assets/css/widget-icon-list.min.css')}}">

<link rel='stylesheet' href="{{asset('css/jkiticon.css')}}" media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate.min.js')}}"></script>
<script src="{{asset('assets/plugins/template-kit-export/public/assets/js/template-kit-export-public.min.js')}}"></script>
<script src="{{asset('js/v4-shims.min.js')}}"></script>

<meta name="generator" content="WordPress 6.2.3" />

   
</head>

<body style="margin:0px">

    @include('frontend.includes.header')

    <main>
        @yield('content')
    </main>

    @include('frontend.includes.footer')

    <!-- Scripts -->
    @livewireScripts
    @stack('after-scripts')


	
    <link rel='stylesheet'  href="{{asset('assets/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/post-958.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('assets/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/post-1228.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('assets/plugins/metform/public/assets/css/metform-ui.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('assets/plugins/metform/public/assets/css/style.css')}}" media='all' />
    <link rel='stylesheet' href="{{asset('css/style.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/post-963.css')}}" media='all' />

    <link rel='stylesheet'  href="{{asset('assets/plugins/elementor/assets/lib/animations/animations.min.css')}}" media='all' />
    <script src="{{asset('js/hello-frontend.min.js')}}"></script>
    <script src="{{asset('js/webpack.runtime.min.js')}}"></script>
    <script src="{{asset('js/frontend-modules.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/core.min.js')}}"></script>   
    <script id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.16.5","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"additional_custom_breakpoints":true,"hello-theme-header-footer":true,"landing-pages":true},"urls":{"assets":"https:\/\/kit.baliniz.com\/valuent\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":982,"title":"Contact%20%E2%80%93%20Bolstart","excerpt":"","featuredImage":false}};
    </script>


    <script src="{{asset('js/frontend.min.js')}}"></script>

    <script src="{{asset('js/sticky-element.js')}}"></script>
    <script src="{{asset('js/nav-menu.js')}}"></script>
    <script src="{{asset('js/search.js')}}"></script>
    <script src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/metform/public/assets/js/htm.js')}}"></script>
    <script src="{{asset('js/wp-polyfill-inert.min.js')}}"></script>
    <script src="{{asset('js/regenerator-runtime.min.js')}}"></script>
    <script src="{{asset('js/wp-polyfill.min.js')}}"></script>
    <script src="{{asset('js/react.min.js')}}"></script>
    <script src="{{asset('js/react-dom.min.js')}}"></script>
    <script src="{{asset('js/escape-html.min.js')}}"></script>
    <script src="{{asset('js/element.min.js')}}"></script>

    <script id='metform-app-js-extra'>

        var mf = {"postType":"page","restURI":""};
    </script>

    <script src="{{asset('assets/plugins/metform/public/assets/js/app.js')}}"></script>	

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