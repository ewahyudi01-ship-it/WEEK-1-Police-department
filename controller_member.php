<?php
include ("model_member.php");
session_start();

if (!isset($_SESSION['memberlist'])) {
    $_SESSION['memberlist'] = array();
}

function createMember(){
    $member = new model_member();
    $member->name = $_POST["inputName"];
    $member->rank = $_POST["inputrank"];
    $member->office = $_POST["inputoffice"];
    array_push($_SESSION['memberlist'], $member);

}

    function updateMember($memberID){
        $member = $_SESSION['memberlist'][$memberID];
        $member->name = $_POST["inputName"];
        $member->rank = $_POST["inputrank"];
        $member->office = $_POST["inputoffice"];
    }
    function getAllMember(){
        return $_SESSION['memberlist'];
    }

    function deleteMember($memberIndex){
        unset($_SESSION['memberlist'][$memberIndex]);
    }

    function getMemberWithID($memberID){
        return $_SESSION['memberlist'][$memberID];
    }

    if (isset($_POST['btn_register'])){
        createMember();
        header("Location:view_member.php"); // ke menu view
        }

    if (isset($_GET['deleteID'])){
        deleteMember($_GET['deleteID']);
        header("Location:view_member.php"); // ke menu view
        }

    if (isset($_POST['btn_update'])){
        updateMember($_POST['input_id']);
        header("Location:view_member.php"); // ke menu view
        }
?>