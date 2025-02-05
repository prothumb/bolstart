@extends('backend.layouts.app')

@section('title') Content Manager @endsection



<style>

    .container-lg{
        max-width:95% !important
    }

   
       
</style>

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card mb-4" style="width:100%">

   <div style="display:flex;flex-direction:row;width:100%;justify-content:space-between;padding:20px">

      <h3>FAQs</h3>

      <button 
        data-toggle="modal" data-target="#addFaqModal"
        style="background-color:#303c54;border:0px solid white;color:#fff;padding:10px 20px;border-radius:5px">Add an FAQ</button>

   </div>

    <div class="card-body">


    <table id="faqTable">
    <thead>
        <tr>
            <th>Question</th>
            <th>Answer</th>
            <th>Show on Home Page</th>
            <th>Show on Investors Page</th>
            <th>Show on Startups Page</th>
            <th>Show on FAQs page</th>
            <th>Created</th>
            <th>Updated</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($faqs as $faq)
            <tr>
                <td>{{ $faq->question }}</td>
                <td>{{ $faq->answer }}</td>
                <td>{{ $faq->show_on_home_page ? 'Yes' : 'No' }}</td>
                <td>{{ $faq->show_on_investors_page ? 'Yes' : 'No' }}</td>
                <td>{{ $faq->show_on_startups_page ? 'Yes' : 'No' }}</td>
                <td>{{ $faq->show_on_faq_page ? 'Yes' : 'No' }}</td>
                <td>{{ $faq->created_at }}</td>
                <td>{{ $faq->updated_at }}</td>
                <td style="display:flex;flex-direction:row;align-items:center">
                <div style="display:flex;flex-direction:row;align-items:center;height:50px">
                <button class="editFaqButton"
                    data-toggle="modal" data-target="#editFaqModal"
                    data-faq-id="{{ $faq->id }}"
                    data-faq-question="{{ $faq->question }}"
                    data-faq-answer="{{ $faq->answer }}"
                    data-faq-show-on-home-page="{{ $faq->show_on_home_page == 1 ? 'true' : 'false' }}"
                    data-faq-show-on-investors-page="{{ $faq->show_on_investors_page == 1 ? 'true' : 'false' }}"
                    data-faq-show-on-startups-page="{{ $faq->show_on_startups_page == 1 ? 'true' : 'false' }}"
                    data-faq-show-on-faq-page="{{ $faq->show_on_faq_page == 1 ? 'true' : 'false' }}"
                        style="background-color:blue;border:0px solid white;color:#fff;padding:5px;border-radius:5px;display:flex">
                            <i class="fa fa-pencil"></i>&nbsp;
                </button>
                     &nbsp;&nbsp;
                     <button class="deleteFaqButton"
                        data-faq-id="{{ $faq->id }}"
                        style="background-color:red;border:0px solid white;color:#fff;padding:5px;border-radius:5px;display:flex">
                            <i class="fa fa-trash"></i>&nbsp;
                     </button>
                </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



    </div>
</div>


<!-- Add FAQ modal-->
<div class="modal fade" id="addFaqModal">

    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add an FAQ</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

            <form id="addFaqForm" action="{{ route('backend.submit-faq') }}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="question">Question:</label>
                        <input type="text" class="form-control" id="question" name="question" required>
                    </div>
                    <div class="form-group">
                        <label for="answer">Answer:</label>
                        <textarea class="form-control" id="answer" name="answer" required></textarea>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="showOnHomePage" name="showOnHomePage">
                        <label class="form-check-label" for="showOnHomePage">Show on Home Page</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="showOnInvestorsPage" name="showOnInvestorsPage">
                        <label class="form-check-label" for="showOnInvestorsPage">Show on Investors Page</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="showOnStartupsPage" name="showOnStartupsPage">
                        <label class="form-check-label" for="showOnStartupsPage">Show on Startups Page</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="showOnFAQPage" name="showOnFAQPage">
                        <label class="form-check-label" for="showOnFAQPage">Show on FAQ Page</label>
                    </div>

                    <button type="submit" class="btn btn-primary" style="margin-top:30px">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add FAQ modal-->


<!--Edit FAQ modal-->
<div class="modal fade" id="editFaqModal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit FAQ</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="editFaqForm" action="{{ route('backend.update-faq') }}" method="POST">
                    @csrf
                    <input type="hidden" id="faqId" name="faq_id">
                    <div class="form-group">
                        <label for="editQuestion">Question:</label>
                        <input type="text" class="form-control" id="editQuestion" name="question" required>
                    </div>
                    <div class="form-group">
                        <label for="editAnswer">Answer:</label>
                        <textarea class="form-control" id="editAnswer" name="answer" required></textarea>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="showOnHomePage1" name="showOnHomePage">
                        <label class="form-check-label" for="showOnHomePage1">Show on Home Page</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="showOnInvestorsPage1" name="showOnInvestorsPage">
                        <label class="form-check-label" for="showOnInvestorsPage2">Show on Investors Page</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="showOnStartupsPage1" name="showOnStartupsPage">
                        <label class="form-check-label" for="showOnStartupsPage1">Show on Startups Page</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="showOnFAQPage1" name="showOnFAQPage">
                        <label class="form-check-label" for="showOnFAQPage1">Show on FAQ Page</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Edit FAQ modal-->


<script>
    $(document).ready(function() {

        $('.editFaqButton').click(function() {
            var faqId = $(this).data('faq-id');
            var faqQuestion = $(this).data('faq-question');
            var faqAnswer = $(this).data('faq-answer');
            var showOnHomePage = $(this).data('faq-show-on-home-page');
            var showOnInvestorsPage = $(this).data('faq-show-on-investors-page');
            var showOnStartupsPage = $(this).data('faq-show-on-startups-page');
            var showOnFAQPage = $(this).data('faq-show-on-faq-page');

            console.log('showOnHomePage',showOnHomePage)
            console.log('showOnInvestorsPage',showOnInvestorsPage)
            console.log('showOnStartupsPage',showOnStartupsPage)
            console.log('showOnFAQPage',showOnFAQPage)

            $('#editQuestion').val(faqQuestion);
            $('#editAnswer').val(faqAnswer);
            $('#faqId').val(faqId);

            // Set the checkboxes based on the FAQ data
            $('#showOnHomePage1').prop('checked', showOnHomePage);
            $('#showOnInvestorsPage1').prop('checked', showOnInvestorsPage);
            $('#showOnStartupsPage1').prop('checked', showOnStartupsPage);
            $('#showOnFAQPage1').prop('checked', showOnFAQPage);
        });
    });
</script>


<script>
    $(document).ready( function () {
        $('#faqTable').DataTable();
    } );
</script>


<script>
    $(document).ready(function() {
        $('.deleteFaqButton').click(function() {
            var faqId = $(this).data('faq-id');
            // Ask for confirmation before proceeding
            if (confirm('Are you sure you want to delete this FAQ?')) {
                // Proceed with the deletion if confirmed
                $.ajax({
                    url: '{{ route("backend.delete-faq") }}',
                    type: 'POST',
                    data: { _token: '{{ csrf_token() }}', faq_id: faqId },
                    success: function(response) {
                        // Reload the page or update the FAQ list as needed
                        window.location.reload(); // Example: Reload the page
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                        alert('Failed to delete FAQ. Please try again.');
                    }
                });
            }
        });
    });
</script>



@include("backend.includes.dashboard_demo_data")

@endsection