@extends('layouts.app')
@section('head')
    {{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
@endsection
@section('content')
    <div id="app1">
        <div class="static" :class="{ 'active': isActive, 'error': isError }"></div>
        <div :class="classes"></div>
        <div :class="[activeCls, errorCls]"></div>
        <div :class="[isActive? activeCls: '', errorCls]"></div>
        <div :class="[{ 'active': isActive }, errorCls]"></div>
        <div :class="classes1"></div>
        <my-component :class="{'active': isActive}"></my-component>
        <div :style="{'color': color, 'fontSize': fontSize+'px'}">文本</div>
        <div :style="styles">ABC</div>
    </div>
@endsection
@section('js')
    <script>
        Vue.component('my-component',{
            template: '<p class="article">一些文本</p>'
        });
        Vue.config.productionTip = true;
        let app = new Vue({
            el: '#app1',
            data: {
                isActive: true,
                isError: false,
                error: null,
                activeCls: 'active',
                errorCls: 'error',
                size: 'large',
                disabled: true,
                color:'red',
                fontSize:14,
                styles:{
                    color:'red',
                    fontSize:14+'px',
                }
            },
            computed: {
                classes: function () {
                    return {
                        active: this.isActive && !this.error,
                        'test-fail': this.error && this.error.type === 'fail',
                    }
                },
                classes1: function () {
                    return [
                        'btn',
                        {
                            ['btn-'+this.size]: this.size !=='',
                            ['btn-disabled']: this.disabled,
                        }
                    ]
                }
            },
        });
    </script>
@endsection
