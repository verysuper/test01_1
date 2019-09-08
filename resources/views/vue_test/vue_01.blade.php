@extends('layouts.app')
@section('head')
        <script src="{{ asset('js/app.js') }}" defer></script>
{{--    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>--}}
@endsection
@section('content')
    <div id="app">
        <example-component></example-component>
    </div>
@endsection
