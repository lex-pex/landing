@extends('admin.panel')
@section('pane')
<div class="lsa-card">
    <div class="lsa-card-header">
        Message
    </div>
    <table class="table table-responsive-md">
        <tr>
            <td class="lsa-path">
                <a href="/admin">Admin</a> |
                <a href="/admin/feedback">Feedback List</a> | Message
            </td>
        </tr>
        <tr>
            <td>
                <small class="cyphers">{{ date('d/m/y | H:i', strtotime($item->created_at)) }}</small>
            </td>
        </tr>
        <tr>
            <td>
                <small class="label">Имя:</small><br/>
                {{ $item->name }}
            </td>
        </tr>
        <tr>
            <td>
                <small class="label">Почта:</small><br/>
                {{ $item->email }}
            </td>
        </tr>
        <tr>
            <td>
                <small class="label">Сообщение:</small><br/>
                {{ $item->text }}
            </td>
        </tr>
    </table>
    <div class="lsa-card-footer text-right">
        <button class="btn btn-sm btn-outline-danger" onclick="event.preventDefault();document.getElementById('item-del-form').submit()">Delete</button>
        <form id="item-del-form" action="{{ route('messageDel', ['item' => $item]) }}" method="post" style="display:none;">
            @csrf
        </form>
    </div>
</div>
@endsection
