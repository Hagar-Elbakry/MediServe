<?php require base_path("views/partials/header.php")?>
<?php
if(!isset($_SESSION['admin_name'])){
    header("Location: /login");
    die();
}
?>
<div class="col-sm-12">
    <h3 class="text-center p-3 bg-primary text-white">View All Cities</h3>
    <table class="table table-dark table-bordered">
        <thead>
        <tr class="text-center">
            <th scope="col" style="width: 50%">Name</th>
            <th scope="col" style="width: 50%">Action</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach($cities as $city):   ?>
            <tr class="text-center">
                <td class="text-center"> <?php echo $city['city_name'] ?> </td>

                <td class="text-center">
                    <a href="/edit-city?id=<?php echo $city['city_id']?>" class="btn btn-info">Edit</a>
                    <form method="post" action="/delete-city" class="d-inline">
                        <input type="hidden" name="city_id" value="<?php echo $city['city_id']?>">
                        <input type="hidden" name="__method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
            <?php endforeach;?>

        </tbody>
    </table>
</div>


<?php require base_path("views/partials/footer.php")?>






