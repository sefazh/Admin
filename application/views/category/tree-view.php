<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Tree View</title>


  <?php include_once VIEWPATH."include/tree-view/tree-view-css.php"?>

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

                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            Tree Style #1
                           <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div id="FlatTree" class="tree tree-plus-minus">
                                <div class = "tree-folder" style="display:none;">
                                    <div class="tree-folder-header">
                                        <i class="fa fa-folder"></i>
                                        <div class="tree-folder-name"></div>
                                    </div>
                                    <div class="tree-folder-content"></div>
                                    <div class="tree-loader" style="display:none"></div>
                                </div>
                                <div class="tree-item" style="display:none;">
                                    <i class="tree-dot"></i>
                                    <div class="tree-item-name"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer class="sticky-footer">
            <?php include_once VIEWPATH."module/footer.php"?>
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<?php include_once VIEWPATH."include/frame/frame-js.php"?>

<?php include_once VIEWPATH."include/tree-view/tree-view-js.php"?>

<!--common scripts for all pages-->
<?php include_once VIEWPATH."include/common/common-js.php"?>

<script>
    jQuery(document).ready(function() {
        $.getScript('/json/get', function() {
            TreeView.init();
        })
    });
</script>

</body>
</html>
