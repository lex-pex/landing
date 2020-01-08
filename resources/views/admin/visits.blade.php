@extends('admin.panel')
@section('pane')
    <div class="row pad-bot-100">
        <div class="col-12 p-1">
            <div id="markers" class="carousel slide vf-calendar" data-ride="carousel">
                <div class="carousel-inner">
                    @php $numItems = count($weeksMap);$numOfMonth = 0; @endphp
                    @foreach($weeksMap as $month => $weeks)
                        <div class="carousel-item {{ ++$numOfMonth == $numItems ? 'active' : 'past-month' }}">
                            <div class="month">{{ $month }}</div>
                            <table>
                                <tr class="week"><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>
                                @foreach($weeks as $week => $days)
                                    <tr>
                                        @for($i = 0; $i < 7; $i ++)
                                            @if(isset($days[$i])) {!! '<td>' . date('j', strtotime($days[$i]->date)) . '<br/><b class="visits">' . $days[$i]->amount . '</b></td>' !!}
                                            @else {!! '<td class="off"> &nbsp; </td>' !!}
                                            @endif
                                        @endfor
                                    </tr>
                                @endforeach
                                <tr><td colspan="7" class="off">&nbsp;</td></tr>
                            </table>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#markers" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#markers" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
@endsection

