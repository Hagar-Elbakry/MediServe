<?php require base_path("views/partials/header.php");?>
<?php
if(!isset($_SESSION['admin_name'])){
    header("Location: /login");
    die();
}
?>

    <div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All Admins</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>


                </tr>
            </thead>
            <tbody>
                <?php foreach($admins as $admin):   ?>
                <tr class="text-center">
                    <td class="text-center"> <?php echo $admin['admin_name'] ?>  </td>
                    <td class="text-center"> <?php echo $admin['admin_email'] ?>  </td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>










<?php require base_path("views/partials/footer.php");?>