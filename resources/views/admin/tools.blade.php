<div id="pane_block">
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
        <div style="background:#00802b;" onclick="document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-2x"></i></div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </nav>
</div>