@extends('layouts.app')
@section('head')
    {{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
    <style>
        [v-cloak] {
            display: none;
        }
    </style>
@endsection
@section('content')
    <div id="app1" v-cloak>
        @{{ message }}
    </div>
@endsection
@section('js')
    <script>
        Vue.config.productionTip = true;
        let app = new Vue({
            el: '#app1',
            data: {
                message: '這是一段文本',
            },
            computed: {
            },
        });
    </script>
@endsection
