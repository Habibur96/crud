<?php include 'header.php'; 
$s_id=$_GET['id'];
?>

<?php
    $conn= mysqli_connect("localhost", "root","", "crud") or die("connection failed.");
$sql = "SELECT * FROM student where s_id=$s_id";
$result=mysqli_query($conn,$sql) or die ("Queary failed");
if(mysqli_num_rows($result)>0){

    
    ?>
<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="updatedata.php" method="post">

    <?php while ($row=mysqli_fetch_assoc($result))
            {

            ?>
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['s_id'];?>"/>
          <input type="text" name="sname" value="<?php echo $row['name'];?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['address'];?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="sclass">
              <option value=""  disabled>Select Class</option>
              <?php
              $sql1 = "SELECT * FROM class";
              $result1=mysqli_query($conn,$sql1) or die ("Queary failed");
              if(mysqli_num_rows($result1)>0){
                while ($row1=mysqli_fetch_assoc($result1))
            {
                if($row['class']== $row1['c_id'])
                $selected="selected";
                else
                $selected="";


              ?>

              <option value="<?php echo $row1['c_id'];?>"<?php echo $selected; ?>><?php echo $row1['class'];?></option>
              
              <?php }}?>
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['phone'];?>"/>
      </div>
      <?php
            }
        }
        ?>
      <input class="submit" type="submit" value="Update"/>
    </form>
</div>
</div>
</body>
</html>
