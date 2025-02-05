@extends('backend.layouts.app')

@section('title') Content Manager @endsection

<style>
        /* Style the tabs */
        .tab {
            display: none;
            margin-top:30px;
        }

        /* Style the button that is used to open the tab content */
        .tab-button {
            cursor: pointer;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            text-align: center;
        }

        /* Style the active tab button */
        .active-tab {
            background-color: #444;
            color:white;
        }
    </style>

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card mb-4" style="width:95%">

    <div class="card-body">


<!-- Tab buttons -->
<button class="tab-button" onclick="openTab('tab1')">Home Page</button>
<button class="tab-button" onclick="openTab('tab2')">Investors Page</button>
<button class="tab-button" onclick="openTab('tab3')">Startups Page</button>
<button class="tab-button" onclick="openTab('tab4')">About Page</button>
<button class="tab-button" onclick="openTab('tab5')">Contact Page</button>
<button class="tab-button" onclick="openTab('tab6')">Header and Footer</button>


<!-- Tab 1 starts -->
<div id="tab1" class="tab">

    <h2>Home and Contact Page Content</h2>
    <hr>
    <form method="post" action="{{ route('backend.home-page-content-submit') }}" enctype="multipart/form-data">

            @csrf 
                       
            @foreach ($homePageContent as $fieldName => $fieldValue)
                <label for="{{ $fieldName }}">{{ ucfirst(str_replace('_', ' ', $fieldName)) }}</label><br/>
                <textarea class="form-control" name="{{ $fieldName }}" id="{{ $fieldName }}" rows="4">{{ $fieldValue }}</textarea><br/>
            @endforeach

            <input class="form-control" type="submit" value="Save Changes" style="background-color:#444444;color:white"/>
            
    </form>

</div>
<!-- ENDS - tab 1-->


<!-- Tab 2 starts -->
<div id="tab2" class="tab">

    <h2>Investors Page Content</h2>
    <hr>
    <form method="post" action="{{ route('backend.investors-page-content-submit') }}" enctype="multipart/form-data">

            @csrf 
                       
            @foreach ($investorsPageContent as $fieldName => $fieldValue)
                <label for="{{ $fieldName }}">{{ ucfirst(str_replace('_', ' ', $fieldName)) }}</label><br/>
                <textarea class="form-control" name="{{ $fieldName }}" id="{{ $fieldName }}" rows="4">{{ $fieldValue }}</textarea><br/>
            @endforeach

            <input class="form-control" type="submit" value="Save Changes" style="background-color:#444444;color:white"/>
            
    </form>

</div>
<!-- ENDS - tab 2-->



<!-- Tab 3 starts -->
<div id="tab3" class="tab">

    <h2>Startups Page Content</h2>
    <hr>
    <form method="post" action="{{ route('backend.startups-page-content-submit') }}" enctype="multipart/form-data">

            @csrf 
                       
            @foreach ($startupsPageContent as $fieldName => $fieldValue)
                <label for="{{ $fieldName }}">{{ ucfirst(str_replace('_', ' ', $fieldName)) }}</label><br/>
                <textarea class="form-control" name="{{ $fieldName }}" id="{{ $fieldName }}" rows="4">{{ $fieldValue }}</textarea><br/>
            @endforeach

            <input class="form-control" type="submit" value="Save Changes" style="background-color:#444444;color:white"/>
            
    </form>

</div>
<!-- ENDS - tab 3-->



<!-- Tab 4 starts -->
<div id="tab4" class="tab">

    <h2>About Page Content</h2>
    <hr>
    <form method="post" action="{{ route('backend.about-page-content-submit') }}" enctype="multipart/form-data">

            @csrf 
                       
            @foreach ($aboutPageContent as $fieldName => $fieldValue)
                <label for="{{ $fieldName }}">{{ ucfirst(str_replace('_', ' ', $fieldName)) }}</label><br/>
                <textarea class="form-control" name="{{ $fieldName }}" id="{{ $fieldName }}" rows="4">{{ $fieldValue }}</textarea><br/>
            @endforeach

            <input class="form-control" type="submit" value="Save Changes" style="background-color:#444444;color:white"/>
            
    </form>

</div>
<!-- ENDS - tab 4-->



<!-- Tab 5 starts -->
<div id="tab5" class="tab">

    <h2>Contact Page Content</h2>
    <hr>
    <form method="post" action="{{ route('backend.contact-page-content-submit') }}" enctype="multipart/form-data">

            @csrf 
                       
            @foreach ($contactPageContent as $fieldName => $fieldValue)
                <label for="{{ $fieldName }}">{{ ucfirst(str_replace('_', ' ', $fieldName)) }}</label><br/>
                <textarea class="form-control" name="{{ $fieldName }}" id="{{ $fieldName }}" rows="4">{{ $fieldValue }}</textarea><br/>
            @endforeach

            <input class="form-control" type="submit" value="Save Changes" style="background-color:#444444;color:white"/>
            
    </form>

</div>
<!-- ENDS - tab 5-->


<!-- Tab 6 starts -->
<div id="tab6" class="tab">

    <h2>Header and Footer Content</h2>
    <hr>
    <form method="post" action="{{ route('backend.header-and-footer-content-submit') }}" enctype="multipart/form-data">

            @csrf 
                       
            @foreach ($headerAndFooterContent as $fieldName => $fieldValue)
                <label for="{{ $fieldName }}">{{ ucfirst(str_replace('_', ' ', $fieldName)) }}</label><br/>
                <textarea class="form-control" name="{{ $fieldName }}" id="{{ $fieldName }}" rows="4">{{ $fieldValue }}</textarea><br/>
            @endforeach
            
            <input class="form-control" type="submit" value="Save Changes" style="background-color:#444444;color:white"/>
    </form>

</div>
<!-- ENDS - tab 6-->


</div>

<script>
    // Open the first tab and mark it as active by default
    var defaultTab = document.getElementById('tab1');
    defaultTab.style.display = 'block';
    document.querySelector('button[onclick="openTab(\'tab1\')"]').classList.add('active-tab');

    function openTab(tabName) {
        // Hide all tabs
        var tabs = document.getElementsByClassName('tab');
        for (var i = 0; i < tabs.length; i++) {
            tabs[i].style.display = 'none';
        }

        // Remove the 'active-tab' class from all buttons
        var buttons = document.getElementsByClassName('tab-button');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove('active-tab');
        }

        // Show the selected tab
        document.getElementById(tabName).style.display = 'block';

        // Add the 'active-tab' class to the button
        var activeButton = document.querySelector('button[onclick="openTab(\'' + tabName + '\')"]');
        activeButton.classList.add('active-tab');
    }
</script>

@include("backend.includes.dashboard_demo_data")

@endsection