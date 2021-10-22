<?php
    include('header.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM cars WHERE vehicle_id = '$id'");
        if(mysqli_num_rows($result)==1){
            $cars = mysqli_fetch_array($result);
            $no = $cars['license_no'];
            $model = $cars['model'];
            $year = $cars['year'];
            $ctype = $cars['ctype'];
            $drate = $cars['drate'];
            $wrate = $cars['wrate'];
            $status = $cars['status'];
        }
    }
    if(isset($_POST['update'])){
        $no = $_POST['no'];
        $model = $_POST['model'];
        $year = $_POST['year'];
        $ctype = $_POST['ctype'];
        $drate = $_POST['drate'];
        $wrate = $_POST['wrate'];
        $status = $_POST['status'];

        mysqli_query($conn, "UPDATE cars SET license_no='$no', model='$model', year='$year', ctype='$ctype', drate='$drate', wrate='$wrate', status='$status' WHERE vehicle_id='$id'");
        header("location: index.php");
    }
?>
    <div class="container">
    <form method="POST">
        <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control" name="id" value="<?php echo $id?>" readonly>
        </div>
        <div class="form-group">
            <label>Number</label>
            <input type="text" class="form-control" name="no" value="<?php echo $no?>" >
        </div>
        <div class="form-group">
            <label>Model</label>
            <input type="text" class="form-control" name="model" value="<?php echo $model?>">
        </div>
        <div class="form-group">
            <label>Year</label>
            <input type="text" class="form-control" name="year" value="<?php echo $year?>">
        </div>
        <div class="form-group">
            <label>Ctype</label>
            <input type="text" class="form-control" name="ctype" value="<?php echo $ctype?>">
        </div>
        <div class="form-group">
            <label>Drate</label>
            <input type="text" class="form-control" name="drate" value="<?php echo $drate?>">
        </div>
        <div class="form-group">
            <label>Wrate</label>
            <input type="text" class="form-control" name="wrate" value="<?php echo $wrate?>">
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="text" class="form-control" name="status" value="<?php echo $status?>">
        </div>      
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </div>
    </form>
</div>

<?php
    include('footer.php');
?>