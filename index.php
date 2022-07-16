<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php
$conn= mysqli_connect("localhost", "root","", "crud") or die("connection failed.");
$sql = "SELECT * FROM student JOIN class where student.class = class.c_id";
$result=mysqli_query($conn,$sql) or die ("Queary failed");
if(mysqli_num_rows($result)>0){
    

    
    ?>
    <table cellpadding="7px">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php while ($row=mysqli_fetch_assoc($result))
            {

            ?>
            <tr>
                <td><?php echo $row['s_id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['class'];?></td>
                <td><?php echo $row['phone'];?></td>

                <td>
                    <a href='edit.php?id=<?php echo $row['s_id'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['s_id'];?>' onclick="return checkDelete()">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php
 } 
 mysqli_close($conn);
 ?>
</div>
</div>
</body>

<script>
    function checkDelete() {
        return confirm("Are You Sure");
        
    }
    </script>

</html>