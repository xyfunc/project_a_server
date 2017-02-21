<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<header class="header">
    <p class="float-left">StorePress</p>
    <div class="float-right user-info">
        <p class="float-left user-name"><?php echo $data['user']->name;?></p>
        <a class="next-btn" href="<?php echo url('/user/logout');?>">注销</a>
    </div>
</header>
<div class="menu">
    <a class="menu-item active">进货</a><a class="menu-item ">销售</a><a class="menu-item ">库存</a>
</div>
<div class="submenu">
    <button class="submenu-btn">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <p>新建</p>
    </button>
    <button class="submenu-btn">
        <i class="fa fa-search" aria-hidden="true"></i>
        <p>查询</p>
    </button>
    <button class="submenu-btn">
        <i class="fa fa-download" aria-hidden="true"></i>
        <p>导出</p>
    </button>
</div>
<div class="content">
    <table class="stock-table">
        <tr class="th">
            <td  style="width: 2%"></td>
            <td style="width: 15%">商品名</td>
            <td style="width: 15%">进货时间</td>
            <td style="width: 15%">货源</td>
            <td style="width: 10%">单位</td>
            <td style="width: 10%">数量</td>
            <td style="width: 10%">单价</td>
            <td style="width: 10%">总价</td>
            <td style="width: 13%">备注</td>
        </tr>
        <tr class="tr">
            <td><input type="checkbox"></td>
            <td>冰红茶</td>
            <td>2017-2-10 17:00</td>
            <td>广州发达经销商</td>
            <td>箱</td>
            <td>10</td>
            <td>79.0</td>
            <td>790.0</td>
            <td></td>
        </tr>
        <tr class="tr">
            <td><input type="checkbox"></td>
            <td>维他奶</td>
            <td>2017-2-11 17:00</td>
            <td>广州发达经销商</td>
            <td>箱</td>
            <td>10</td>
            <td>89.0</td>
            <td>890.0</td>
            <td></td>
        </tr>
    </table>
</div>
</body>
</html>