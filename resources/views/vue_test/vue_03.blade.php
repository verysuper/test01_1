@extends('layouts.app')

@section('content')
    <div id="app1">
        <h1>@{{ date }}</h1>
    </div>
@endsection
@section('js')
    <script>
        Vue.config.productionTip = true;
        let app = new Vue({
            el: '#app1',
            data: {
                date: new Date(),
            },
            mounted:function () {
                let _this = this;
                this.timer = setInterval(function () {
                    _this.date = new Date();
                },1000);
            },
            beforeDestroy: function () {
                if(this.timer){
                    clearInterval(this.timer);
                }
            }
        });
    </script>
@endsection
