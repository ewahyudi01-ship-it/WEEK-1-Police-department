<?php 
require("controller_member.php"); // untuk membuat perintah2 di file ini bisa menyambung program ke file lain, in this case file nya: controller_member.php
if (isset($_GET["updateID"])) {
  $member_id = $_GET["updateID"];
  $member = getMemberWithID($member_id);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update member-Department Police</title>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Week 1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="view_member.php">- View member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewadd_member.php">+ Add new member</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


</head>
<body>
    
<form method="POST" action="controller_member.php">
  <div class="mb-3">
    <label for="inputNama" class="form-label">Member name</label>
    <input class="form-control" name="inputName" value="<?=$member->name?>">
  </div>

  <select class="form-select-rank" aria-label="Large select example" name="inputrank">
        <option selected><?=$member->rank?></option>
        <option value="Captain">Captain</option>
        <option value="Liutenant">Liutenant</option>
        <option value="Corporal">Corporal</option>
        <option value="Officer">Officer</option>
    </select>
  

    <select class="form-select-office" aria-label="Large select example" name="inputoffice">
        <option selected><?=$member->office?></option>
        <option value="Office A">Office A</option>
        <option value="Office B">Office B</option>
        <option value="Office C">Office C</option>
    </select>

  <input type ="hidden" name="input_id" value="<?=$member_id?>">  <!-- hidden supaya user tidak bisa melihat, melainkan cuman back end saja -->
  <button name="btn_update" type="submit" class="btn btn-primary">Update</button>

</form>

</body>
</html>