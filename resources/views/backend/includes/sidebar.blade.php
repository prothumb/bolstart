<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a href="{{route('backend.dashboard')}}">
            <img class="sidebar-brand-full" src="{{asset('img/bolstart_white_logo.png')}}" height="46" alt="{{ app_name() }}">
            <img class="sidebar-brand-narrow" src="{{asset('img/bolstart_white_logo.png')}}" height="46" alt="{{ app_name() }}">
        </a>
    </div>    

    {!! $admin_sidebar->asUl( ['class' => 'sidebar-nav', 'data-coreui'=>'navigation', 'data-simplebar'], ['class' => 'nav-group-items'] ) !!}

         <a class="nav-link" href="{{route('backend.content-manager')}}" style="margin:20px">
                <i class="nav-icon fa-solid fa-book"></i> Content Management
        </a>

        <a class="nav-link" href="{{route('backend.submission-manager')}}" style="margin:20px">
                <i class="nav-icon fa-solid fa-book"></i> Submissions
        </a>
               

        <a class="nav-link" href="{{route('backend.faq-manager')}}" style="margin:20px">
                <i class="nav-icon fa-solid fa-question-circle"></i> FAQ
        </a>
                             

    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>


