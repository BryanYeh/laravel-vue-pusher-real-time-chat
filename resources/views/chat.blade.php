@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Welcome to Vue Chat
                    <span class="badge pull-right">@{{ usersInRoom.length }}</span>
                </div>

                <div class="panel-body">
                    <div>
                      <chat-log :messages="messages"></chat-log>
                      <chat-composer v-on:messagesent="addMessage"></chat-composer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    @if(Auth::check())
        <script>
            var username = '{{ Auth::user()->name }}';
        </script>
    @endif
@endsection('content')