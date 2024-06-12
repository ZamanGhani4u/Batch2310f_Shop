<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <h1 class="text-center text-danger">Category Index</h1>

<!-- Modal trigger button -->
<button type="button"class="btn btn-primary btn-lg"data-bs-toggle="modal"data-bs-target="#modalId">
  Add Category
</button>

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
  role="dialog" aria-labelledby="modalTitleId" aria-hidden="true" >

  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
    
  <div class="modal-content">
     
  <div class="modal-header">
        
  <h5 class="modal-title" id="modalTitleId">
          Add Category Form
       
 </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="add_category.php" method="post">
          <div class="mb-3">
            
          <label for="" class="form-label">Add Category</label>
            
          <input type="text"class="form-control" name="categoryname" id="" />
            
           
          </div>
        
          <button type="submit" class="btn btn-primary" name="btn_cat">Save</button>
        </form>


      </div>
      <div class="modal-footer">
      
       
      </div>
    </div>
  </div>
</div>


<div
  class="table-responsive"
>
  <table
    class="table table-primary"
  >
    <thead>
      <tr>
        <th scope="col">Category ID</th>
        <th scope="col">Category Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

<?php

include('db.php');
$query="SELECT * FROM `categories`";
$result = $conn->query($query);
while($row = $result->fetch_assoc())
{
?>
<tr>
  <td><?php echo $row['cat_id']?></td>
  <td><?php echo $row['cat_Name']?></td>
  <td>
    <a class="btn btn-danger" href="delete_category.php?id=<?php echo $row['cat_id']; ?>">Delete</a>
    <a class="btn btn-primary">Edit</a>

</tr>
<?php
}
?>
    </tbody>
  </table>
</div>



<!-- Optional: Place to the bottom of scripts -->
<script>
  const myModal = new bootstrap.Modal(
    document.getElementById("modalId"),
    options,
  );
</script>

    <header>
      <!-- place navbar here -->
    </header>
    <main></main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
