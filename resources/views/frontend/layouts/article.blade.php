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
    
    
    <style>
        img.wp-smiley,
        img.emoji {
	        display: inline !important;
	        border: none !important;
	        box-shadow: none !important;
	        height: 1em !important;
	        width: 1em !important;
	        margin: 0 0.07em !important;
	        vertical-align: -0.1em !important;
	        background: none !important;
	        padding: 0 !important;
        }
    </style>

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
    
	<link rel='stylesheet' href="{{asset('assets/plugins/jeg-elementor-kit/assets/css/elements/main.css')}}" media='all' />
    <link rel='stylesheet' href="{{asset('css/dist/block-library/style.min.css')}}" media='all' />
    <link rel='stylesheet' href="{{asset('css/classic-themes.min.css')}}" media='all' />
    
    <style>
        body{
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }
        :where(.is-layout-flex){
            gap: 0.5em;
        }
        body .is-layout-flow > .alignleft{
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }
        body .is-layout-flow > .alignright{
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }
        body .is-layout-flow > .aligncenter{
            margin-left: auto !important;
            margin-right: auto !important;
        }
        body .is-layout-constrained > .alignleft{
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }
        body .is-layout-constrained > .alignright{
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }
        body .is-layout-constrained > .aligncenter{
            margin-left: auto !important;
            margin-right: auto !important;
        }
        body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }
        body .is-layout-constrained > .alignwide{
            max-width: var(--wp--style--global--wide-size);
        }
        body .is-layout-flex{
            display: flex;
        }
        body .is-layout-flex{
            flex-wrap: wrap;
            align-items: center;
        }
        body .is-layout-flex > *{
            margin: 0;
        }
        :where(.wp-block-columns.is-layout-flex){
            gap: 2em;
        }
        .has-black-color{
            color: var(--wp--preset--color--black) !important;
        }
        .has-cyan-bluish-gray-color{
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        .has-white-color{
            color: var(--wp--preset--color--white) !important;
        }
        .has-pale-pink-color{
            color: var(--wp--preset--color--pale-pink) !important;
        }
        .has-vivid-red-color{
            color: var(--wp--preset--color--vivid-red) !important;
        }
        .has-luminous-vivid-orange-color{
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        .has-luminous-vivid-amber-color{
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        .has-light-green-cyan-color{
            color: var(--wp--preset--color--light-green-cyan) !important;
        }
        .has-vivid-green-cyan-color{
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        .has-pale-cyan-blue-color{
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        .has-vivid-cyan-blue-color{
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        .has-vivid-purple-color{
            color: var(--wp--preset--color--vivid-purple) !important;
        }
        .has-black-background-color{
            background-color: var(--wp--preset--color--black) !important;
        }
        .has-cyan-bluish-gray-background-color{
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        .has-white-background-color{
            background-color: var(--wp--preset--color--white) !important;
        }
        .has-pale-pink-background-color{
            background-color: var(--wp--preset--color--pale-pink) !important;
        }
        .has-vivid-red-background-color{
            background-color: var(--wp--preset--color--vivid-red) !important;
        }
        .has-luminous-vivid-orange-background-color{
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        .has-luminous-vivid-amber-background-color{
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        .has-light-green-cyan-background-color{
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        .has-vivid-green-cyan-background-color{
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        .has-pale-cyan-blue-background-color{
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        .has-vivid-cyan-blue-background-color{
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        .has-vivid-purple-background-color{
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }
        .has-black-border-color{
            border-color: var(--wp--preset--color--black) !important;
        }
        .has-cyan-bluish-gray-border-color{
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        .has-white-border-color{
            border-color: var(--wp--preset--color--white) !important;
        }
        .has-pale-pink-border-color{
            border-color: var(--wp--preset--color--pale-pink) !important;
        }
        .has-vivid-red-border-color{
            border-color: var(--wp--preset--color--vivid-red) !important;
        }
        .has-luminous-vivid-orange-border-color{
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        .has-luminous-vivid-amber-border-color{
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        .has-light-green-cyan-border-color{
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        .has-vivid-green-cyan-border-color{
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        .has-pale-cyan-blue-border-color{
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        .has-vivid-cyan-blue-border-color{
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        .has-vivid-purple-border-color{
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }
        .has-vivid-cyan-blue-to-vivid-purple-gradient-background{
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }
        .has-light-green-cyan-to-vivid-green-cyan-gradient-background{
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }
        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }
        .has-luminous-vivid-orange-to-vivid-red-gradient-background{
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }
        .has-very-light-gray-to-cyan-bluish-gray-gradient-background{
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }
        .has-cool-to-warm-spectrum-gradient-background{
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }
        .has-blush-light-purple-gradient-background{
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }
        .has-blush-bordeaux-gradient-background{
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }
        .has-luminous-dusk-gradient-background{
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }
        .has-pale-ocean-gradient-background{
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }
        .has-electric-grass-gradient-background{
            background: var(--wp--preset--gradient--electric-grass) !important;
        }
        .has-midnight-gradient-background{
            background: var(--wp--preset--gradient--midnight) !important;
        }
        .has-small-font-size{
            font-size: var(--wp--preset--font-size--small) !important;
        }
        .has-medium-font-size{
            font-size: var(--wp--preset--font-size--medium) !important;
        }
        .has-large-font-size{
            font-size: var(--wp--preset--font-size--large) !important;
        }
        .has-x-large-font-size{
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
        .wp-block-navigation a:where(:not(.wp-element-button)){
            color: inherit;
        }
        :where(.wp-block-columns.is-layout-flex){
            gap: 2em;
        }
        .wp-block-pullquote{
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel='stylesheet' href="{{asset('css/style.css')}}" media='all' />

    <link rel='stylesheet'  href="{{asset('css/template-kit-export-public.min.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/elementor-icons.min.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/frontend-lite.min.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/swiper.min.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/post-3.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/global.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/post-715.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/all.min.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/v4-shims.min.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/text-editor.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/style.min.css')}}" media='all' />
    <link rel='stylesheet'  href="{{asset('css/theme.min.css')}}" media='all' />
    <link rel='stylesheet'  href='https://fonts.googleapis.com/css?family=Mulish%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.2.3' media='all' />
    <link rel="preconnect"  href="https://fonts.gstatic.com/" crossorigin>

    <link rel="stylesheet" href="{{asset('assets/plugins/elementor/assets/css/widget-icon-list.min.css')}}">
    
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate.min.js')}}"></script>
    
    <script src="{{asset('js/v4-shims.min.js')}}"></script>
   
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


	
	<link rel='stylesheet' href="{{asset('assets/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles.css')}}" media='all' />
    <link rel='stylesheet' href="{{asset('css/post-958.css')}}" media='all' />
    <link rel='stylesheet' href="{{asset('css/jkiticon.css')}}" media='all' />
    <link rel='stylesheet' href="{{asset('assets/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min.css')}}" media='all' />
    <link rel='stylesheet' href="{{asset('css/post-963.css')}}" media='all' />
    
<style>
                    .elementor-heading-title{
                        padding:0;
                        margin:0;
                        line-height:1
                    }
                    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{
                        color:inherit;
                        font-size:inherit;
                        line-height:inherit
                    }
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

</style>

<script src="{{asset('js/hello-frontend.min.js')}}"></script>
<script src="{{asset('js/webpack.runtime.min.js')}}"></script>
<script src="{{asset('js/frontend-modules.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/core.min.js')}}"></script>

<script id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.16.5","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"additional_custom_breakpoints":true,"hello-theme-header-footer":true,"landing-pages":true},"urls":{"assets":"https:\/\/kit.baliniz.com\/valuent\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":980,"title":"Blog%20%E2%80%93%20Bolstart","excerpt":"","featuredImage":false}};
</script>

<script src="{{asset('js/frontend.min.js')}}"></script>

<script src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/elements/sticky-element.js')}}"></script>
<script src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/elements/nav-menu.js')}}"></script>
<script src="{{asset('js/search.js')}}"></script>
<script src="{{asset('assets/plugins/jeg-elementor-kit/assets/js/sweetalert2/sweetalert2.min.css')}}"></script>

<script src="{{asset('js/post-pagination.js')}}"></script>


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