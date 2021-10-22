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
?>
    <div class="container">
        <div class="form-group">
            <label>ID: </label>
            <?php echo $id?>
        </div>
        <div class="form-group">
            <label>Number: </label>
            <?php echo $no?>
        </div>
        <div class="form-group">
            <label>Model: </label>
            <?php echo $model?>
        </div>
        <div class="form-group">
            <label>Year: </label>
            <?php echo $year?>
        </div>
        <div class="form-group">
            <label>Ctype: </label>
            <?php echo $ctype?>
        </div>
        <div class="form-group">
            <label>Drate: </label>
            <?php echo $drate?>
        </div>
        <div class="form-group">
            <label>Wrate: </label>
            <?php echo $wrate?>
        </div>
        <div class="form-group">
            <label>Status: </label>
            <?php echo $status?>
        </div>
        <form method="POST" action="index.php">
        <button type="submit" class="btn btn-primary">Back</button>
    </form>
</div>

<?php
    include('footer.php');
?>