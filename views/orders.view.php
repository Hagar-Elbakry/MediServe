<?php require base_path("views/partials/header.php")?>
<?php
if(!isset($_SESSION['admin_name'])){
    header("Location: /login");
    die();
}
?>

<div class="col-sm-12">
    <h3 class="text-center p-3 bg-primary text-white">View All Orders</h3>
    <table class="table table-dark table-bordered">
        <thead>
        <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Service</th>
            <th scope="col">City</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        <?php $x=1; foreach($orders as $order):?>
            <tr class="text-center">
                <td scope="row"><?php echo $x; ?></td>
                <td class="text-center"><?php echo $order['order_name']; ?></td>
                <td class="text-center"><?php echo $order['order_email']; ?></td>
                <td class="text-center"><?php echo $order['order_phone']; ?></td>
                <?php
                    $cityRow = $db->query("SELECT * FROM cities WHERE city_id = :id", [":id" => $order['city_id']])->fetch();
                    $serviceRow = $db->query("SELECT * FROM services WHERE service_id = :id", [":id" => $order['service_id']])->fetch();
                ?>
                <td class="text-center"><?php echo  $serviceRow['service_name'] ?></td>
                <td class="text-center"><?php echo $cityRow['city_name'] ?></td>

                <td class="text-center">
                    <form method="post" action="/delete-order" class="d-inline">
                        <input type="hidden" name="order_id" value="<?php echo $order['order_id']?>">
                        <input type="hidden" name="__method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php $x++ ; endforeach; ?>

        </tbody>
    </table>
</div>

<?php require base_path("views/partials/footer.php") ?>






