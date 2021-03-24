<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Larvuent</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    
    <div id="app">
        测试测试！！！！
        <el-button @click="changeName()">按钮</el-button>
        <el-dialog :visible.sync="showPreview">
            <p>欢迎使用 ElementUI</p>
        </el-dialog>
        <!-- <div>@{{ name }}</div> -->

        @yield('content')   
    </div>

    <script>
        var admin_data = {

        };

        var admin_method = {

        };

        var admin_components = {};

        /* VUE 加载完毕后的执行事件 */
        var admin_mounted = function () {
            console.log("vue created");
        };
        
        // admin_data.visible = false;

        admin_data.showPreview = false;

        admin_method.changeName = function() {
            admin_data.showPreview = true;
        };

    </script>
    @yield('set_admin_data')
    <script>
         const app = new Vue({
            el: '#app',
            components : admin_components,
            data : admin_data,
            methods : admin_method,
            mounted : admin_mounted
        });
    </script>

</body>
</html>