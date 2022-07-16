<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>

    <form class="post-form" action="savedata.php" method="post">
  
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">

            <?php
    $conn= mysqli_connect("localhost", "root","", "crud") or die("connection failed.");
    $sql = "SELECT * FROM class";
    $result=mysqli_query($conn,$sql) or die ("Queary failed");
  
    ?>
                <option value="" selected disabled>Select Class</option>
                <?php
                  if(mysqli_num_rows($result)>0){  
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                <option value="<?php echo $row['c_id'];?>"> <?php echo $row['class'];?> </option>

                <?php
                    }
                }
                ?>
                
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
    <?php
  
 mysqli_close($conn);
 ?>
</div>
</div>
</body>
</html>
