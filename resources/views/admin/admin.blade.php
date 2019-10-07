@extends('admin.panel')
@section('pane')
<div class="lsa-card">
    <div class="lsa-card-header">
        Admin Panel
    </div>
    <div class="lsa-card-body">
        Последние просмотры
        (<small class="cyphers">{{ Visitors::todayVisits()->date }}</small>)
        кол-во: <span class="cyphers">{{ Visitors::todayVisits()->amount }}</span>
        <hr/>
        <table class="table table-responsive p-0 m-0" width="100%" cellspacing="0" style="padding:0;margin:0">
        @foreach(Visitors::pageVisits() as $pageVisit)
            <tr>
                <td>{{ $pageVisit->page }}</td>
                <td>
                    <span class="cyphers">{{ $pageVisit->amount }}</span>
                </td>
                <td><small class="label">{{ date('d/m/y | H:i', strtotime($pageVisit->updated_at)) }}</small></td>
            </tr>
        @endforeach
        </table>
    </div>
    <div class="lsa-card-footer">
        Lsd Admin
    </div>
</div>
@endsection