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
        <p>请在下方填写您的数据库连接信息。</p>
        <form name="init_form" action="<?php echo $data['init_url']; ?>" method="post">
            <table class="db-config">
                <tr>
                    <td><label for="database">数据库名</label></td>
                    <td><input id="database" name="database" type="text"></td>
                    <td><span class="explanation">将 StorePress 安装到哪个数据库？</span></td>
                </tr>
                <tr>
                    <td><label for="user">用户名</label></td>
                    <td><input id="user" name="user" type="text"></td>
                    <td><span class="explanation">您的数据库用户名。</span></td>
                </tr>
                <tr>
                    <td><label for="password">密码</label></td>
                    <td><input id="password" name="password" type="text"></td>
                    <td><span class="explanation">您的数据库密码。</span></td>
                </tr>
                <tr>
                    <td><label for="host">数据库主机</label></td>
                    <td><input id="host" name="host" type="text"></td>
                    <td><span class="explanation">数据库主机地址。</span></td>
                </tr>
<!--                <tr>-->
<!--                    <td><label for="record-prefix">表前缀</label></td>-->
<!--                    <td><input id="record-prefix" type="text"></td>-->
<!--                    <td><span class="explanation">数据表的前缀。</span></td>-->
<!--                </tr>-->
            </table>
            <div style="text-align: center; margin-top: 15px;"><button class="next-btn" href="#">下一步</button></div>
        </form>
    </div>
</div>
</body>
</html>