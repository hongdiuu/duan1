<?php
function loadall_admin(){
    $sql="select * from admin order by admin_id asc";
    $listadmin=pdo_query($sql);
    return  $listadmin;
}
function loadone_admin($id){
    $sql="select * from admin where admin_id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function insert_admin($fullname,$email,$phone,$password,$hinh,$role,$status){
    $sql="INSERT INTO `admin` ( `admin_full_name`, `admin_email`, `admin_phone`,`admin_password`,`admin_photo`,`admin_role`,`admin_status`) VALUES ( '$fullname', '$email','$phone','$password','$hinh','$role','$status'); ";
    pdo_execute($sql);
    
}
function delete_admin($id){
    $sql="delete from admin where admin_id=".$id;
    pdo_execute($sql);
}
function update_admin($id,$fullname,$email,$phone,$password,$hinh,$role,$status){
   if($hinh!=""){
    $sql="update admin set admin_full_name ='".$fullname."', admin_email='".$email."',admin_phone='".$phone."',admin_password='".$password."',admin_photo='".$hinh."',admin_role='".$role."',admin_status='".$status."' where admin_id=".$id;
   }else{
    $sql="update admin set admin_full_name ='".$fullname."', admin_email='".$email."',admin_phone='".$phone."',admin_password='".$password."',admin_role='".$role."',admin_status='".$status."' where admin_id=".$id;
   }
   pdo_execute($sql);
}
?>