<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Pickers</title>

    <?php include_once VIEWPATH."include/common/common-css.php"?>

    <?php include_once VIEWPATH."include/ie9.php"?>
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <?php include_once VIEWPATH."module/left-side.php"?>

    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <?php include_once VIEWPATH."/module/header.php"?>

        </div>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <?php include_once VIEWPATH."/module/page-heading.php"?>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Brand / Upload
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal adminex-form" id="brandCreateForm" method="post">
                                    <div class="form-group ">
                                        <label for="cat_name" class="control-label col-lg-3 col-sm-3">brand_name</label>
                                        <div class="col-lg-4 col-sm-4">
                                            <input class=" form-control" id="brand_name" name="brand_name" type="text" value="<?=$row['brand_name']?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-9">
                                            <input type="hidden" name="id" value="<?=$row['id']?>">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-default" type="button" onclick="window.history.back()">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            <?php include_once VIEWPATH."module/footer.php"?>
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<?php include_once VIEWPATH."include/frame/frame-js.php"?>

<?php include_once VIEWPATH."include/validate/validate-js.php"?>

<!--common scripts for all pages-->
<?php include_once VIEWPATH."include/common/common-js.php"?>

</body>
</html>
