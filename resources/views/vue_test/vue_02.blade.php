<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="app1">
        <h1>@{{ message }}</h1>
    </div>
</body>
</html>
<script>
    Vue.config.productionTip = false;
    new Vue({
        el: '#app1',
        data: {
            message: 'hello world',
        }
    });
</script>
