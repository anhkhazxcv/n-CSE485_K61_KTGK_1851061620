<?php
    include('header.php');
    $result = mysqli_query($conn,"SELECT * FROM cars");
    if(mysqli_num_rows($result) > 0){
        $car = mysqli_fetch_all($result);
    }else echo 'Không đổ ra dữ liệu';
?> 
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>license_no</th>
                <th>Model</th>
                <th>Year</th>
                <th>Ctype</th>
                <th>Drate</th>
                <th>Wrate</th>
                <th>Status</th>
                <th>Details</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($car as $i){
            ?>
            <tr>
                <th><?php echo $i[0]; ?></th>
                <th><?php echo $i[1]; ?></th>
                <th><?php echo $i[2]; ?></th>
                <th><?php echo $i[3]; ?></th>
                <th><?php echo $i[4]; ?></th>
                <th><?php echo $i[5]; ?></th>
                <th><?php echo $i[6]; ?></th>
                <th><?php echo $i[7]; ?></th>
                <th><a href="details.php?id=<?php echo $i[0];?>"><i class="fas fa-eye"></i></a></th>
                <th><a href="edit.php?id=<?php echo $i[0];?>"><i class="far fa-edit"></i></a></th>
                <th><a href="delete.php?id=<?php echo $i[0];?>"><i class="far fa-trash-alt"></i></a></th>
                
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <form method="POST" action="create.php">
        <button type="submit" class="btn btn-primary">New</button>
    </form>

<?php
    include('footer.php');
?>