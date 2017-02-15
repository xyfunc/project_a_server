<html>
<head>
    <script src="js/app.js"></script>
</head>
<body>
<h2>MySQL</h2>
<form name="init_form" method="post" action="">
主机地址:<input name="host"><br>
端口:<input name="port"><br>
数据库:<input name="database"><br>
账号:<input name="user"><br>
密码:<input type="password" name="password"><br>
<input type="hidden" name="init_database" value="1"><br>
<button >提交按钮</button>
</form>
<script type="application/javascript">
    var data = <?php echo json_encode($data); ?> ;
    console.log(data);
    $("form[name=init_form]").attr('action',data['init_url']);
</script>
</body>
</html>