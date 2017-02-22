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
    <table id="purchase_view" class="stock-table">
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
    </table>
</div>
<script src="js/app.js"></script>
<script type="application/javascript">
    var purchase_view_head = '<tr class="th">' +
        '<td  style="width: 2%"></td>' +
        '<td style="width: 15%">商品名</td>' +
        '<td style="width: 15%">进货时间</td>' +
        '<td style="width: 15%">货源</td>' +
        '<td style="width: 10%">单位</td>' +
        '<td style="width: 10%">数量</td>' +
        '<td style="width: 10%">单价</td>' +
        '<td style="width: 10%">总价</td>' +
        '<td style="width: 13%">备注</td></tr>' ;
    function parsePurchaseData( purchase_list ) {
        if( !purchase_list || purchase_list.length <= 0){
            return false;
        }
        var html_array = [];
        html_array.push( purchase_view_head);
        purchase_list.forEach(function (value, index) {
            var term = '<tr class="tr">' +
                '<td><input type="checkbox"></td>' +
                '<td>' + value['product_name'] + '</td>' +
                '<td>' + value['date'] + '</td>' +
                '<td>' + value['name'] + '</td>' +
                '<td>' + value['unit_name'] + '</td>' +
                '<td>' + value['number'] + '</td>' +
                '<td>' + value['unit_price'] + '</td>' +
                '<td>' + value['total_price'] + '</td>' +
                '<td>' + value['desc'] + '</td></tr>' ;
            html_array.push(term);
        });
        console.log( html_array);
        $('#purchase_view').html(html_array.join(''));
    }
    var data = <?php echo json_encode($data); ?>;
    console.log(data);
    parsePurchaseData(data['list']);
</script>
</body>
</html>