<?php require base_path("views/partials/header.php")?>

<div class="col-sm-12">
    <h3 class="text-center p-3 bg-primary text-white">View All Cities</h3>
    <table class="table table-dark table-bordered">
        <thead>
        <tr class="text-center">
            <th scope="col">Name</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach($cities as $city):   ?>
            <tr class="text-center">
                <td class="text-center"> <?php echo $city['city_name'] ?> </td>

                <td class="text-center">
                    <a href="/edit?id=<?php echo $city['city_id']?>" class="btn btn-info">Edit</a>
                    <a href="#" class="btn btn-danger delete" data-field="city_id" data-id="" data-table="cities" >Delete</a>
                </td>
            </tr>
            <?php endforeach;?>

        </tbody>
    </table>
</div>


<?php require base_path("views/partials/footer.php")?>






