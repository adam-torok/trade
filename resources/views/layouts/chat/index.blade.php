@extends('layouts.app')

@section('content')
<div class="chats">
    <chat-app :user="{{Auth::user()}}" />
</div>

<x-navs.consoles/>

@endsection
