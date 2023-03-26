<?php
$insert = false;
$update = false;
$delete = false;
//INSERT INTO `notes` (`sno`, `Title`, `description`, `tstamp`) VALUES (NULL, 'buy books', 'buy books from nearby dictionary', '2022-10-17 16:24:54.000000');
$servername = "localhost";
$username = "root";
$password = "9090";
$database = "notes";
//create a connection

$conn = mysqli_connect($servername, $username, $password, $database);

//die if connection was successful


if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());

}

    if(isset($_GET['delete'])){
       $sno = $_GET['delete'];
       $delete = true;
       $sql = "DELETE FROM `notes` WHERE `sno` =$sno";
       $result = mysqli_query($conn, $sql);
    }
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (isset($_POST['snoEdit'])) {
          $sno = $_POST['snoEdit'];
          $title = $_POST['titleEdit'];
          $description = $_POST['descriptionEdit'];


          $sql = "UPDATE `notes` SET `title` = '$title' , `description` ='$description' WHERE `notes`.`sno` =$sno";
          $result = mysqli_query($conn, $sql);
          if ($result) {
              $update = true;

          }
          else {
              echo "We could not update the record successfully";
          }
      }

  else {
        $title = $_POST['title'];
        $description = $_POST['description'];


        $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $insert = true;
        } else {
            echo "the record was not inserted successfully " . mysqli_error($conn);
        }

}
  }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iNotes</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>


<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">-->
<!--    Edit modal-->
<!--</button>-->

<!-- edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel">Edit this note</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/crud/index.php" method="post">
                    <input type="hidden" name="snoEdit" id="snoEdit">
                    <div class="form-group">
                        <label for="text" class="form-label">Note Title</label>
                        <input type="text" class="form-control" name="titleEdit" id="titleEdit" aria-describedby="text" required>

                    </div>
                    <div class="form-group">
                        <label for="text" class="form-label">Note Description</label>
                        <input type="text" class="form-control" name="descriptionEdit" id="descriptionEdit" aria-describedby="text" required>

                    </div>



                    <button type="submit" class="btn btn-primary my-4">Update Note</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">iNotes.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">About</a>
                </li>  <li class="nav-item">
                    <a class="nav-link text-light" href="#">Contact Us</a>
                </li>


            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success text-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>


<?php
if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your note has been inserted successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your note has been deleted successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your note has been updated successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
?>

<div class="container my-4">
    <h2>Add a note</h2>
    <form action="/crud/index.php" method="post">
        <div class="form-group">

        <div class="mb-3">
            <label for="text" class="form-label">Note Title</label>
            <input type="text" class="form-control" name="title" id="text" aria-describedby="text" required>

        </div>

        <div class="mb-3">
            <label for="desc" class="form-label">Note description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Note</button>
    </form>


</div>

</div>

<div class="container">

    <table class="table" id="myTable">
        <thead>
        <tr>
            <th scope="col">S.No</th>
            <th scope="col">Title</th>
            <th scope="col">description</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>

        <?php

        $sql = "SELECT * FROM `notes`";

        $result = mysqli_query($conn, $sql);
        $sno =0;

        while($row = mysqli_fetch_assoc($result)){

        $sno = $sno+1;
            echo "<tr>
            <th scope='row'>".$sno."</th>
            <td>".$row['Title']."</td>
            <td>".$row['description']."</td>
            <td><button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> 
            <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button> </td></tr>";

        }
        ?>
        </tbody>
    </table>

</div>
<script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous">
</script>
<script src = "//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );

</script>
<script>
   edits =  document.getElementsByClassName('edit');
    Array.from(edits).forEach((element)=>{
        element.addEventListener("click",(e)=>{
            console.log("edit");
            tr = e.target.parentNode.parentNode;
            title = tr.getElementsByTagName("td")[0].innerText;
            description = tr.getElementsByTagName("td")[1].innerText;
            console.log(title, description);
            titleEdit.value = title;
            descriptionEdit.value = description;
            snoEdit.value = e.target.id;
            console.log(e.target.id);
            $('#editModal').modal('toggle');

        })
    })



   deletes =  document.getElementsByClassName('delete');
   Array.from(deletes).forEach((element)=>{
       element.addEventListener("click",(e)=>{
           console.log("edit");

            sno = e.target.id.substr(1,);
           if(confirm("Are you sure you want to delete ")){
               console.log("yes");
               window.location = `/crud/index.php?delete=${sno}`;
           }
           else{
               console.log("no");
           }

       })
   })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>