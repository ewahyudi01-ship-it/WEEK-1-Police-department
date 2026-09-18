<?php require('controller_member.php');?>

<!DOCTYPE html>
<html lang="">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DEPARTEMENT POLICE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Week 1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view_member.php">- View member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_member.php">+ Add new member</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  </head>
  <body>

    <header>
      <h1>DEPARTMENT POLICE</h1>
    </header>

    <main>

      <div class="container">
        <h1>Member</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No </th>
      <th scope="col">Name </th>
      <th scope="col">Rank </th>
      <th scope="col">Office </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $count = 0;
    $allmembers = getAllMember();
    foreach ($allmembers as $index => $member) {
      $count++;
    ?>
  
     <tr>
      <th scope="row"><?=$count?></th>
      <td><?=$member->name?></td>
      <td><?=$member->rank?></td>
      <td><?=$member->office?></td>
      <td>
      <button class ="btn btn-warning">Update</button>
      <button class ="btn btn-danger">Delete</button>
      </td>
    </tr>

  <?php
  }
  ?>
    
  </tbody>
</table>

      </div>

    </main>

    <footer></footer>

  </body>
</html>
