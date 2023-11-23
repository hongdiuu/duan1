<?php
function loadall_size(){
    $sql="select * from size order by size_id asc";
    $listsize=pdo_query($sql);
    return  $listsize;
}
function loadone_size($id){
    $sql="select * from size where size_id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function insert_size($tensize){
    $sql="insert into size(size_name) values('$tensize')";
    pdo_execute($sql);
}
function delete_size($id){
    $sql="delete from size where size_id=".$id;
    pdo_execute($sql);
}
function update_size($id,$tensize){
    $sql="update size set size_name='".$tensize."' where size_id=".$id;
    pdo_execute($sql);
}
?>