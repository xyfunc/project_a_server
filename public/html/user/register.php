<html>
<head>
    <script src="js/app.js"></script>

</head>
<body>
<h2>MySQL</h2>
<form name="register_form" action="" method="post">
    name:<input name="name"><br>
    email:<input name="email"><br>
    password:<input type="password" name="password"><br>
    password_confirmation:<input type="password" name="password_confirmation"><br>
    <button >提交按钮</button>
</form>
<script type="application/javascript">
    var data = <?php echo json_encode($data); ?> ;
    console.log(data);
    $("form[name=register_form]").attr('action',data['register_url']);
</script>
</body>
</html>