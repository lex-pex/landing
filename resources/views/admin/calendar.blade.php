@extends('admin.panel')
@section('pane')
    @foreach($weeksMap as $month => $weeks)
        <div class="ls-calendar-card">
            <div class="ls-calendar-month">{{ $month }}</div>
            <table class="table">
                <tr>
                    <th style="color:red">Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>
                </tr>
                @foreach($weeks as $week => $days)
                    <tr>
                        @for($i = 0; $i < 7; $i ++)
                            @if(isset($days[$i])) {!! '<td>' . date('j', strtotime($days[$i]->date)) . ' <br/><b class="cyphers">' . $days[$i]->amount . '</b></td>' !!}
                            @else {!! '<td style="background:#f2f2f2"> &nbsp; </td>' !!}
                            @endif
                        @endfor
                    </tr>
                @endforeach
            </table>
        </div>
    @endforeach
@endsection