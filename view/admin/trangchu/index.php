<?php
include "../../../models/admin/danhmuc.php";
include "../../../models/admin/pdo.php";
include '../header/header.php';
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "listdm":
            $listdanhmuc = loadall_danhmuc();
            include "../danhmuc/list.php";
            break;
        case "adddm":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name = $_POST['tendm'];
                insert_danhmuc($name);
                $thongbao = "thêm thành công";
            }
            include "../danhmuc/add.php";
            break;
        case "xoadm":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "../danhmuc/list.php";
            break;
        case "suadm":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $danhmuc = loadone_danhmuc($_GET['id']);
            }
            include "../danhmuc/update.php";
            break;
        case "updatedm":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['namedm'];
                $id = $_POST['id'];
                update_danhmuc($id, $name);
                $thongbao = "cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "../danhmuc/list.php";
            break;
        default:
            //
            break;
    }
} else {
    include "../home/home.php";
}
include '../footer/footer.php';
