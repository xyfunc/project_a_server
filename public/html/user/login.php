<html>
<head>
    <script src="js/app.js"></script>
    <script type="application/javascript">

    </script>

</head>
<body>
<h2>Login</h2>
<form name="login_form" action="" method="post">
    email:<input name="email"><br>
    password:<input type="password" name="password"><br>
    <button >提交按钮</button>
</form>
<script type="application/javascript">
    var data = <?php echo json_encode($data); ?> ;
    console.log(data);
    $("form[name=login_form]").attr('action',data['login_url']);
</script>
</body>
</html>