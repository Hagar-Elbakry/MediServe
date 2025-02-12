<?php require base_path("views/partials/header.php")?>
<?php
if(!isset($_SESSION['admin_name'])){
    header("Location: /login");
    die();
}
?>

<?php if(isset($errors['add_service'])): ?>
    <div class="col-sm-6 offset-sm-3 border p-3 mt-3">
        <h3 class="alert alert-danger text-center"> <?php foreach ($errors as $error):echo $error; endforeach; ?>  </h3>
    </div>
<?php endif;?>


<?php if(isset($success_message) && $success_message !=''):  ?>
    <div class="col-sm-6 offset-sm-3 border p-3 mt-3">
        <h3 class="alert alert-success text-center"> <?php echo $success_message; ?>  </h3>
    </div>
<?php endif;?>


<div class="col-sm-6 offset-sm-3 border p-3">
    <h3 class="text-center p-3 bg-primary text-white">Add New Service</h3>
    <form method="post" action="/add-service">
        <div class="form-group">
            <label >Name Of Service</label>
            <input type="text" name="name" class="form-control" >
        </div>

        <button type="submit" name="submit" class="btn btn-success">Save</button>
    </form>

</div>


<?php  require base_path("views/partials/footer.php")?>






