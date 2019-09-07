@extends('layouts.app')

@section('content')
    <div id="app1">
        <h1>@{{ message.a }}</h1>
    </div>
@endsection
@section('js')
    <script>
        Vue.config.productionTip = true;
        var mydata = {
            a: 'hello world',
        };

        let app = new Vue({
            el: '#app1',
            data: {
                message: mydata,
            }
        });
    </script>
@endsection
