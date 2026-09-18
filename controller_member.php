<?php
include ("model_member.php");
session_start();

if (!isset($_SESSION['memberlist'])) {
    $_SESSION['memberlist'] = array();
}

function create_member(){
    $member = new model_member();
    $member->name = $_POST["inputName"];
    $member->rank = $_POST["inputrank"];
    $member->office = $_POST["inputoffice"];
    array_push($_SESSION['memberList'], $member);

}

    function getAllMember(){
        return $_SESSION['memberList'];
    }


    if (isset($_POST['btn_register'])){
        create_member();
        header("Location:view_member.php"); // ke menu view
        }

?>