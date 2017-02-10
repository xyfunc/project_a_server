<html>
<head>
    <script src="js/app.js"></script>
    <script type="application/javascript">
        function a() {
            var host = $("input[name=host]").val();
            var port = $("input[name=port]").val();
            var database = $("input[name=database]").val();
            var user = $("input[name=user]").val();
            var password = $("input[name=password]").val();
            window.location.href = "/?init_database=10&host="+host+"&port="+port+"&database="+database+"&user="+user+"&password="+password;
        }
    </script>

</head>
<body>
<h2>MySQL</h2>
主机地址:<input name="host"><br>
端口:<input name="port"><br>
数据库:<input name="database"><br>
账号:<input name="user"><br>
密码:<input name="password"><br>
<button onclick="a()">提交按钮</button>
</body>
</html>