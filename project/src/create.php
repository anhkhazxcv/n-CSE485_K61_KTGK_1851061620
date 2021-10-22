<?php
    include('header.php');
    $result = mysqli_query($conn,"SELECT * FROM cars");
    if(mysqli_num_rows($result) > 0){
        $nhanvien = mysqli_fetch_all($result);
    }else echo 'Không đổ ra dữ liệu';

    if(isset($_POST['save'])){
        $no = $_POST['no'];
        $model = $_POST['model'];
        $year = $_POST['year'];
        $ctype = $_POST['ctype'];
        $drate = $_POST['drate'];
        $wrate = $_POST['wrate'];
        $status = $_POST['status'];

        mysqli_query($conn, "INSERT INTO cars (license_no, model, year, ctype, drate, wrate, status) VALUES ('$no','$model','$year','$ctype','$drate','$wrate','$status') ");
        header("location:   index.php");
    }
    
?>
<div class="container">
    <form method="POST">
        <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control" name="id" readonly>
        </div>
        <div class="form-group">
            <label>Number</label>
            <input type="text" class="form-control" name="no" >
        </div>
        <div class="form-group">
            <label>Model</label>
            <input type="text" class="form-control" name="model" >
        </div>
        <div class="form-group">
            <label>Year</label>
            <input type="text" class="form-control" name="year" >
        </div>
        <div class="form-group">
            <label>Ctype</label>
            <input type="text" class="form-control" name="ctype" >
        </div>
        <div class="form-group">
            <label>Drate</label>
            <input type="text" class="form-control" name="drate" >
        </div>
        <div class="form-group">
            <label>Wrate</label>
            <input type="text" class="form-control" name="wrate" >
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="text" class="form-control" name="status" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Save</button>
        </div>
    </form>
</div>
<?php
    include('footer.php');
?>