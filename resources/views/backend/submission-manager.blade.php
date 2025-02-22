@extends('backend.layouts.app')

@section('title') Submission Manager @endsection

@section('content')
<div style="max-width: 1200px; margin: 20px auto; padding: 20px; font-family: Arial, sans-serif;">
    <h2 style="text-align: center; margin-bottom: 20px;">Form Submissions</h2>

    <div style="text-align: right; margin-bottom: 10px;">
        <a href="{{ url('/admin/submissions/exportCsv') }}" style="padding: 10px 15px; background-color: #28a745; color: #fff; text-decoration: none; border-radius: 5px;">Export to CSV</a>
    </div>

    <div id="submissions" class="tab" style="display: block;">
        @if ($submissions->count())
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd;">
                    <thead>
                        <tr style="background-color: #343a40; color: #ffffff; text-align: left;">
                            <th style="padding: 10px; border: 1px solid #ddd;">ID</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Phone</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Email</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Webinar Date</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Submitted At</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    @foreach ($submissions->sortByDesc('created_at') as $submission)

                        <tr style="background-color: #f9f9f9; transition: background 0.3s;" onmouseover="this.style.backgroundColor='#e6e6e6'" onmouseout="this.style.backgroundColor='#f9f9f9'">
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $submission->id }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $submission->name }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $submission->phone }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $submission->email }}</td>
                            <td style="padding: 10px; border: 1px solid #ddd;">
                            {{ $submission->date ? \Carbon\Carbon::parse($submission->date)->format('d-m-Y') : 'No Date Available' }}
                            </td>
                            <td style="padding: 10px; border: 1px solid #ddd;">
                    {{ $submission->created_at ? \Carbon\Carbon::parse($submission->created_at)->setTimezone('Asia/Kolkata')->format('d-m-Y H:i:s') : 'No Date Available' }}
                            </td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div style="text-align: center; margin-top: 20px;">
                {{ $submissions->links() }}
            </div>
        @else
            <p style="text-align: center; color: #888;">No submissions found.</p>
        @endif
    </div>
</div>

<script>
    function openTab(event, tabName) {
        var tabs = document.getElementsByClassName('tab');
        for (var i = 0; i < tabs.length; i++) {
            tabs[i].style.display = 'none';
        }
        document.getElementById(tabName).style.display = 'block';

        var buttons = document.getElementsByClassName('tab-button');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove('active-tab');
        }
        event.currentTarget.classList.add('active-tab');
    }
</script>

@endsection
