
<?php
$Kategori1="xxxx";
$Kategori2="yyyy";
$Kategori3="zzzz";
$Kategori4="kkkk";

$grt1="h_2.png";
$grt2="h_3.png";
?>



<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>

<body>



    <div class="container bg-primary my-5">

            <div class="row">

                <div class="col-sm-12 col-lg-3 mt-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <?php echo $Kategori1 ?>
                        </li>
                        <li class="list-group-item">
                            <?php echo $Kategori2 ?>
                        </li>
                        <li class="list-group-item">
                            <?php echo $Kategori3 ?>
                        </li>
                        <li class="list-group-item">
                            <?php echo $Kategori4 ?>
                        </li>
                    </ul>
                </div>


                <div class="col-sm-12 col-lg-9 mt-3">


                    <div class="card">
                        <div class="row">
                            <div class="col">

                                <?php echo"<img src=\"{$grt1}\" width=\"450\" height=\"450\">" ?>


                            </div>

                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title">Konu Başlığı</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, dolores
                                        eligendi! Eveniet, ab illo necessitatibus consectetur consequatur, reiciendis
                                        veniam rem ipsum expedita possimus repudiandae animi qui nam assumenda, iure
                                        harum.
                                    </p>

                                    <div>
                                        <span class="badge bg-primary">105 Yorum</span>
                                        <span class="badge bg-warning">105 Yorum</span>
                                        <span class="badge bg-primary">105 Yorum</span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>


            <div class="row">

                <div class="col-sm-12 col-lg-3 mt-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <?php echo $Kategori1 ?>
                        </li>
                        <li class="list-group-item">
                            <?php echo $Kategori2 ?>
                        </li>
                        <li class="list-group-item">
                            <?php echo $Kategori3 ?>
                        </li>
                        <li class="list-group-item">
                            <?php echo $Kategori4 ?>
                        </li>
                    </ul>
                </div>


                <div class="col-sm-12 col-lg-9 mt-3">


                    <div class="card">
                        <div class="row">
                            <div class="col">

                                <?php echo"<img src=\"{$grt2}\" width=\"450\" height=\"450\">" ?>

                            </div>

                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title">Konu Başlığı</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, dolores
                                        eligendi! Eveniet, ab illo necessitatibus consectetur consequatur, reiciendis
                                        veniam rem ipsum expedita possimus repudiandae animi qui nam assumenda, iure
                                        harum.
                                    </p>

                                    <div>
                                        <span class="badge bg-primary">105 Yorum</span>
                                        <span class="badge bg-warning">105 Yorum</span>
                                        <span class="badge bg-primary">105 Yorum</span>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
    </body>
</html>
