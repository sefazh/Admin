<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Responsive Table</title>

    <?php include_once VIEWPATH."include/responsive-table/responsive-table-css.php"?>

    <?php include_once VIEWPATH."include/common/common-css.php"?>

    <?php include_once VIEWPATH."include/ie9.php"?>
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <?php include_once VIEWPATH."module/left-side.php"?>

    </div>
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
        <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Goods list
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                 </span>
            </header>
            <div class="panel-body">
                <section id="flip-scroll">
                    <table class="table table-bordered table-striped table-condensed cf">
                        <thead class="cf">
                        <tr>
                            <th>goods_sn</th>
                            <th>goods_name</th>
                            <th class="numeric">cat_id</th>
                            <th class="numeric">shop_price</th>
                            <th class="numeric">market_price</th>
                            <th class="numeric">is_sale</th>
                            <th class="numeric">status</th>
                            <th class="numeric">goods_type</th>
                            <th class="numeric">goods_number</th>
                            <th>options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($list as $key => $val)
                        {
                            ?>
                            <tr>
                                <td><?=$val['goods_sn']?></td>
                                <td><?=$val['goods_name']?></td>
                                <td class="numeric"><?=$val['cat_id']?></td>
                                <td class="numeric"><?=$val['shop_price']?></td>
                                <td class="numeric"><?=$val['market_price']?></td>
                                <td class="numeric"><?=$val['is_sale']?></td>
                                <td class="numeric"><?=$val['status']?></td>
                                <td class="numeric"><?=$val['goods_type']?></td>
                                <td class="numeric"><?=$val['goods_number']?></td>
                                <td>
                                    <a class="btn btn-primary tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="编辑"><i class="fa fa-cog"></i></a>
                                    <a class="btn btn-info tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="查看详情"><i class="fa fa-list"></i></a>
                                    <a class="btn btn-success tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="预览"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-danger tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="删除"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </section>
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

<!--common scripts for all pages-->
<?php include_once VIEWPATH."include/common/common-js.php"?>

</body>
</html>
