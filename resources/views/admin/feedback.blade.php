@extends('admin.panel')

@section('pane')

<div class="lsa-card">
    <div class="lsa-card-header">
        Messages List
    </div>
    <table class="table table-responsive p-0 m-0" width="100%" cellspacing="0" style="padding:0;margin:0">
        <tr>
            <td colspan="3" class="lsa-path">
                <a href="/admin">Admin Pane</a> |
                <b><span style="text-transform:capitalize">{{$type}}</span> List</b>
            </td>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td width="10px">
                    <a href="/admin/{{$type}}/read/{{$item->id}}">
                        <i style="color:{{$item->status ? 'silver' : 'tomato' }}; text-shadow: 0 0 2px black" class="fa fa-circle fa-2x"></i>
                    </a>
                </td>
                <td class="text-center"><small class="cyphers">{{ date('d/m/y | H:i', strtotime($item->created_at)) }}</small></td>
            </tr>
        @endforeach
    </table>
    <div class="lsa-card-footer">
        Messages
    </div>
</div>
@endsection