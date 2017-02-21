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
        <p>连接数据库成功！现在简单填写用户信息，准备安装 StorePress。</p>
        <form action="<?php echo $data['register_url']; ?>" method="post">
            <table class="baseinfo-config">
                <tr>
                    <td class="label"><label for="name">公司名</label></td>
                    <td class="input"><input name="name" type="text"></td>
                </tr>
                <tr>
                    <td class="label"><label for="email">邮箱</label></td>
                    <td class="input"><input name="email" type="text"></td>
                </tr>
                <tr>
                    <td class="label"><label for="password">密码</label></td>
                    <td class="input"><input name="password" type="password"></td>
                </tr>
                <tr>
                    <td class="label"><label for="password_confirmation">确认密码</label></td>
                    <td class="input"><input name="password_confirmation" type="password"></td>
                </tr>
            </table>
            <div style="text-align: center; margin-top: 15px;"><button class="next-btn" >下一步</button></div>
        </form>
    </div>
</div>
</body>
</html>