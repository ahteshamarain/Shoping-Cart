<?php 
include("include/header.php");
include("include/navbar.php");
include("include/sidebar.php");
include("config.php");




?>

  <main id="main" class="main">
<br>
    <div class="pagetitle">
      <h1>View Orders</h1>

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
              <h3 class="card-title">Orders</h3>
              <br>
     <!-- table -->
     <div class="table-responsive">
     <br><br>
     <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">message</th>
                    <th scope="col">Shipping</th>
                    <th scope="col">Card</th>
                    <th scope="col">Action</th>
                    <th scope="col">Delete</th>


                    </tr>
                </thead>
<?php 
$fetch = "SELECT * from `checkout`";
$res = mysqli_query($connection,$fetch);
if($res){
    if(mysqli_num_rows($res)>0){
        while($row = mysqli_fetch_assoc($res)){

   
?>
                
                <tbody>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $row['city']?></td>
                    <td><?php echo $row['shipping']?></td>
                    <td><?php echo $row['card']?></td>
                    <td><button class="btn btn-primary delete">Dispatch</button></td>
                    <td><a href="delorder.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a></td>

                    
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