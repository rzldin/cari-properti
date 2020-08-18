@extends('layouts.master')

@section('content')
    <div class="jarak-atas"></div>
    <div class="profile-user" id="app">
        <message :user="{{ Auth()->user() }}"></message>
    </div>
@endsection