@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/css/ls.css" />
<script src="/js/ls.js"></script>

<div id="pane_block_adm">
    <div onclick="paneToggle()" id="pane-btn" style="background:#0074D9;"><i id="pane-btn-symbol" class="fa fa-times fa-2x"></i></div>
    <nav id="pane_tools">
        <a href="/admin"><div><i class="fa fa-cog fa-2x"></i></div></a>
        <a href="/admin/feedback">
            <div style="padding:5px;background:{{Feedback::newMessages() ? '#cc0000' : ''}}">
                <i class="fa fa-envelope fa-2x"></i><br/>
                <strong>({{ Feedback::newMessages() ? Feedback::newMessages() : 0 }})</strong>
            </div>
        </a>
        <a href="/admin/calendar">
            <div style="padding:5px">
                <i class="fa fa-eye fa-2x"></i><br/>
                <strong>({{ Visitors::todayVisits()->amount}})</strong>
            </div>
        </a>
    </nav>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-12 p-0">
            <div class="lsa-pages">
                <a style="background: lightpink" href="/admin">Админка</a>
                <a href="/admin/feedback">Сообщения</a>
                <a href="/admin/calendar">Просмотры</a>
            </div>
          @yield('pane')
        </div>
    </div>
</div>
@endsection