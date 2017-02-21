<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>欢迎使用 StorePress</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/init.css">
</head>
<body>
<div class="container">
    <div class="content-box">
        <h2>感谢使用 StorePress</h2>
        <p>在开始前，我们需要您数据库的一些信息。请准备好如下信息：</p>
        <ol class="info">
            <li>数据库名</li>
            <li>数据库用户名</li>
            <li>数据库密码</li>
            <li>数据库主机</li>
            <li>数据表前缀（table prefix）</li>
        </ol>
        <p>我们会使用这些信息来创建一个 sp-config.php 文件。<b>如果自动创建未能成功，不用担心，您要做的只是将数据库信息填入配置文件。您也可以在文本编辑器中打开 sp-config-sample.php，填入您的信息，并将其另存为 sp-config.php。</b></p>
        <div style="text-align: center"><a class="next-btn" href="<?php echo $data['init_url']; ?>">下一步</a></div>
    </div>
</div>
</body>
</html>