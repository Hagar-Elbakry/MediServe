<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" >

    <title>Home Page</title>
</head>
<body>



<div class="cont-main" style="background:url('assets/images/bg-1.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">


                <form class="row" method="POST" action="" class="mt-5" >

                    <div class="col-sm-6 ">
                        <div class="form-group mt-3">

                            <label for="serv" class="font-1">Choose Service</label>
                            <select name="service" id="serv" class="form-control font-1">
                                <?php //$data = getRows('services');  $x=1; ?>
                                <?php //foreach($data as $row){   ?>
                                    <option value="<?php //echo $row['serv_id']; ?>">
                                        <?php //echo $row['serv_name']; ?>
                                    </option>
                                <?php //} ?>
                            </select>

                        </div>
                    </div>


                    <div class="col-sm-6 ">
                        <div class="form-group mt-3">

                            <label for="serv" class="font-1">Choose City</label>
                            <select name="city" id="serv" class="form-control font-1">
                                <?php foreach($cities as $city):?>
                                    <option value="<?php echo $city['city_id']; ?>">
                                        <?php echo $city['city_name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                    </div>


                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">

                            <label for="serv" class="font-1">Type Your Name *</label>
                            <input type="text" name="name"  class="form-control font-1 bg-base">

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group ">

                            <label for="serv" class="font-1">Type Your Email</label>
                            <input type="email" name="email"  class="form-control font-1 bg-base">

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group ">

                            <label for="serv" class="font-1">Type Your Mobile *</label>
                            <input type="text" name="mobile"  class="form-control font-1 bg-base">

                        </div>
                    </div>




                    <div class="col-sm-12">
                        <div class="form-group">

                            <label for="serv" class="font-1">Type Notes</label>
                            <textarea name="notes"  class="form-control font-1 bg-base"  rows="5"></textarea>

                        </div>
                    </div>




                    <div class="col-sm-12">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-success form-control">Send</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.4.1.min.js" ></script>
<script src="assets/js/popper.min.js" ></script>
<script src="assets/js/bootstrap.min.js" ></script>
</body>
</html>