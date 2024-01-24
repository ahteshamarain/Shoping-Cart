<?php 
include("include/header.php");
include("include/navbar.php");
include("include/sidebar.php");
include("config.php");




?>

  <main id="main" class="main">
<br>
    <div class="pagetitle">
      <h1>View Subscriber</h1>

    </div><!-- End Page Title -->
    <br><br>

    <!-- <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <br><br>
              <h3 class="card-title">User data</h3>
              <br><br>
             

           
              <table class="table">
                <thead>
                  <tr>
                  <th>Id</th>
                    <th><b>first</b>Name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Update</th>
                    <th>Delete</th>


                    
                  </tr>
                </thead>
                <tbody id="utab">
            
                   
                </tbody>
              </table>

            </div>
          </div>

        </div>
      </div>
    </section> -->
    <!-- modaal -->
    <!-- Button trigger modal -->



 
 

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <br><br>
              <h3 class="card-title">Subscriber Data</h3>
              <br>
     <!-- table -->
     <div class="table-responsive">
     <br><br>
     <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  


                    </tr>
                </thead>
<?php 
$fetch = "SELECT * from `subscriber`";
$res = mysqli_query($connection,$fetch);
if($res){
    if(mysqli_num_rows($res)>0){
        while($row = mysqli_fetch_assoc($res)){

   
?>
                
                <tbody>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><a href="subdel.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a></td>
                    
                </tr>
                
                </tbody>
                <?php 
                     }
                    }
                }
                ?>
            </table>

                </div>

                </div>
          </div>

        </div>
      </div>
    </section>




  </main><!-- End #main -->
  <?php 

include("include/footer.php");


?>


<script src="ajax/adduser.js"></script>