<header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">

			
    <div data-elementor-type="page" data-elementor-id="958" class="elementor elementor-958">
        
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-23384fe elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="23384fe" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-44615f9"
                    data-id="44615f9" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-6d90481 elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-image"
                            data-id="6d90481" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <a href="{{ route('frontend.index') }}">
                                    <img width="800" height="179" src="{{asset('img/bolstart_white_logo.png')}}"
                                         class="attachment-full size-full wp-image-346" alt="" decoding="async"
                                         loading="lazy" sizes="(max-width: 800px) 100vw, 800px" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-475b6ed"
                    data-id="475b6ed" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-bd1ab72 elementor-widget elementor-widget-jkit_nav_menu"
                            data-id="bd1ab72" data-element_type="widget"
                            data-widget_type="jkit_nav_menu.default">
                            <div class="elementor-widget-container">
                                <div class="jeg-elementor-kit jkit-nav-menu break-point-tablet submenu-click-title jeg_module_908__64fad1aa9aba9"
                                    data-item-indicator="&lt;i aria-hidden=&quot;true&quot; class=&quot;fa fa-plus&quot;&gt;&lt;/i&gt;">
                                    <button class="jkit-hamburger-menu">
                                        <i aria-hidden="true"
                                            class="jki jki-grip-lines-solid"></i>
                                    </button>

                                    <div class="jkit-menu-wrapper">

                                        <div class="jkit-nav-identity-panel">
                                            <div class="jkit-nav-site-title">
                                                <a
                                                    href="{{ route('frontend.index') }}"
                                                    class="jkit-nav-logo">
                                                    <img
                                                        src="{{asset('img/bolstart_white_logo.png')}}">
                                                    </a>
                                            </div>
                                            <button class="jkit-close-menu"><i aria-hidden="true"
                                                    class="jki jki-times-solid"></i>
                                            </button>
                                        </div>


                                        <div class="jkit-menu-container">
                                            
                                            <ul id="menu-menu"
                                                class="jkit-menu jkit-menu-direction-flex jkit-submenu-position-top">
                                                <li id="menu-item-990"
                                                    class="menu-item menu-item-type-post_type 
                                                    menu-item-object-page menu-item-home page_item page-item-908 current_page_item menu-item-990 {{ Request::is('/') ? 'current-menu-item' : '' }}">
                                                    <a href="{{ route('frontend.index') }}"
                                                        aria-current="page">Home</a></li>

                                                <li id="menu-item-8"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom 
                                                        menu-item-has-children menu-item-8 {{ (Request::is('about-investors') || Request::is('about-startups'))  ? 'current-menu-item' : '' }}">
                                                        <a href="#">Capabilities</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-988"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-988">
                                                                <a
                                                                    href="{{ route('frontend.about-investors') }}">Investors</a>
                                                            </li>
                                                            <li id="menu-item-987"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-987">
                                                                <a
                                                                    href="{{ route('frontend.about-startups') }}">Startups</a>
                                                            </li>																	
                                                        </ul>
                                                </li>

                                                <li id="menu-item-8"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom
                                                         menu-item-has-children menu-item-8 {{ (Request::is('blog') || Request::is('news') || Request::is('news-category/*') || Request::is('blog-category/*') || Request::is('blog/*') || Request::is('news/*'))  ? 'current-menu-item' : '' }}">
                                                        <a href="#">Insights</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-988"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-988">
                                                                <a
                                                                    href="{{ route('frontend.news') }}">News</a>
                                                            </li>
                                                            <li id="menu-item-987"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-987">
                                                                <a
                                                                    href="{{ route('frontend.blog') }}">Blog</a>
                                                            </li>																	
                                                        </ul>
                                                </li>

                                                <li id="menu-item-984"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-984 {{ Request::is('events') || Request::is('event/*')  ? 'current-menu-item' : '' }}">

                                                    <a
                                                        href="{{route('frontend.events')}}">Discover</a>

                                                </li>

                                                <li id="menu-item-8"
                                                        class="menu-item menu-item-type-custom 
                                                        menu-item-object-custom
                                                        menu-item-has-children menu-item-8 {{ (Request::is('about-us') || Request::is('faq') || Request::is('contact-us'))  ? 'current-menu-item' : '' }}">
                                                        <a href="#">About</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-988"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-988">
                                                                <a
                                                                    href="{{ route('frontend.about-us') }}">Overview</a>
                                                            </li>
                                                            <li id="menu-item-987"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-987">
                                                                <a
                                                                    href="{{ route('frontend.faq') }}">FAQs</a>
                                                            </li>		
                                                            <li id="menu-item-987"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-987">
                                                                <a
                                                                    href="{{ route('frontend.contact-us') }}">Contact</a>
                                                            </li>															
                                                        </ul>
                                                </li>                        

                                                <li id="menu-item-984"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-984">

                                                    <a class="login-button"
                                                        href="{{$headerAndFooterContents['header_login_button_link']}}">Login</a> 

                                                </li>              
                                                
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    <div class="jkit-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-cbaf646 elementor-hidden-tablet elementor-hidden-mobile"
                    data-id="cbaf646" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-a85a89b elementor-widget elementor-widget-jkit_search"
                            data-id="a85a89b" data-element_type="widget" data-widget_type="jkit_search.default">
                            <div class="elementor-widget-container">
                                <div class="jeg-elementor-kit jkit-search jeg_module_908_1_64fad1aaa97a6"><a
                                        href="#" class="jkit-search-modal"><i aria-hidden="true"
                                            class="fa fa-search"></i></a>
                                    <div class="jkit-modal-search-panel-wrapper">
                                        <div class="jkit-modal-search-panel">
                                            <div class="jkit-search-panel">
                                                <form role="search" method="get" class="jkit-search-group"
                                                    action="{{route('search-results')}}">
                                                    <input type="search" class="jkit-search-field"
                                                        placeholder="Search..." value="" name="s" />
                                                    <button type="submit" class="jkit-search-button"><i
                                                            aria-hidden="true"
                                                            class="fa fa-search"></i></button>
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
</header>



