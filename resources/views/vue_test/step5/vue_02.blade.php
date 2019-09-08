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
        <template v-if="type==='name'">
            <label for="">用戶名</label>
            <input type="text" placeholder="輸入用戶名" key="name-input">
        </template>
        <template v-else>
            <label for="">郵箱</label>
            <input type="text" placeholder="輸入郵箱" key="mail-input">
        </template>
        <button @click="handleToggleClick">切換輸入類型</button>

        <p v-show="status === 1">當status為1時顯示該行</p>
    </div>
@endsection
@section('js')
    <script>
        Vue.config.productionTip = true;
        let app = new Vue({
            el: '#app1',
            data: {
                type: 'name',
                status: 2,
            },
            computed: {
            },
            methods: {
                handleToggleClick: function () {
                    this.type = this.type === 'name'? 'mail': 'name';
                }
            }
        });
    </script>
@endsection
