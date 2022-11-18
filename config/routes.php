<?php
if (isset ($_GET ['page'])) {
    $page = $_GET ['page'];
    $menu = $page;
} else {
    $menu = "";
}
switch ($menu) {
    case 'beranda':
    case '':
        require ("content/home.php");
        break;
    case 'pulsa' : 
        require("content/pulsa.php");
        break;
    case 'member' :
        require("content/member.php");
        break;
    case 'form-pulsa' :
        require("content/form-pulsa.php");
        break;
    case 'save-pulsa' :
        require("content/save-pulsa.php");
        break;
    case 'del-pulsa' :
        require("content/del-pulsa.php");
        break;
    case 'edit-pulsa' :
        require("content/edit-pulsa.php");
        break;
    case 'update-pulsa' :
        require("content/update-pulsa.php");
        break;
    require("content/del-pulsa.php");
        break;
    case 'del-member' :
    require("content/del-member.php");
        break;
    case 'form-member' :
    require("content/form-member.php");
        break;
    case 'save-member' :
    require("content/save-member.php");
        break;
    case 'edit-member' :
    require("content/edit-member.php");
        break;
    case 'update-member' :
    require("content/update-member.php");
        break;
    case 'j_member' :
    require("content/j_member.php");
        break;
    case 'del-jmember' :
    require("content/del-jmember.php");
        break;
    case 'save-j-member' :
    require("content/save-j-member.php");
        break;
    case 'form-j-member' :
    require("content/form-j-member.php");
        break;
    case 'edit-j-member' :
    require("content/edit-j-member.php");
        break;
    case 'update-j-member' :
    require("content/update-j-member.php");
        break;
    case 'transaksi' :
    require("content/transaksi.php");
        break;
    case 'detail-transaksi' :
    require("content/detail.php");
        break;
    case 'save-transaksi' :
    require("content/save-transaksi.php");
        break;
    case 'del-transaksi' :
    require("content/del-transaksi.php");
        break;
    default:
        require("content/404.php");
        break;
}