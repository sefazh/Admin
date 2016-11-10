<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Dynamic Table</title>

    <?php include_once VIEWPATH."include/dynamic-table/dynamic-table-css.php"?>

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
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            Dynamic Table
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th class="hidden-phone">Engine version</th>
            <th class="hidden-phone">CSS grade</th>
        </tr>
        </thead>
        <tbody>
        <tr class="gradeX">
            <td>Trident</td>
            <td>Internet
                Explorer 4.0</td>
            <td>Win 95+</td>
            <td class="center hidden-phone">4</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>Trident</td>
            <td>Internet
                Explorer 5.0</td>
            <td>Win 95+</td>
            <td class="center hidden-phone">5</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet
                Explorer 5.5</td>
            <td>Win 95+</td>
            <td class="center hidden-phone">5.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet
                Explorer 6</td>
            <td>Win 98+</td>
            <td class="center hidden-phone">6</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet Explorer 7</td>
            <td>Win XP SP2+</td>
            <td class="center hidden-phone">7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>AOL browser (AOL desktop)</td>
            <td>Win XP</td>
            <td class="center hidden-phone">6</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 1.5</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 2.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 3.0</td>
            <td>Win 2k+ / OSX.3+</td>
            <td class="center hidden-phone">1.9</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Camino 1.0</td>
            <td>OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Camino 1.5</td>
            <td>OSX.3+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape 7.2</td>
            <td>Win 95+ / Mac OS 8.6-9.2</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape Browser 8</td>
            <td>Win 98SE+</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape Navigator 9</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.0</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.1</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.2</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.2</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.3</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.3</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.4</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.4</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.5</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.6</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.6</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.7</td>
            <td>Win 98+ / OSX.1+</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.8</td>
            <td>Win 98+ / OSX.1+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Seamonkey 1.1</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Epiphany 2.20</td>
            <td>Gnome</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 1.2</td>
            <td>OSX.3</td>
            <td class="center hidden-phone">125.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 1.3</td>
            <td>OSX.3</td>
            <td class="center hidden-phone">312.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 2.0</td>
            <td>OSX.4+</td>
            <td class="center hidden-phone">419.3</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 3.0</td>
            <td>OSX.4+</td>
            <td class="center hidden-phone">522.1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>OmniWeb 5.5</td>
            <td>OSX.4+</td>
            <td class="center hidden-phone">420</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>iPod Touch / iPhone</td>
            <td>iPod</td>
            <td class="center hidden-phone">420.1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>S60</td>
            <td>S60</td>
            <td class="center hidden-phone">413</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 7.0</td>
            <td>Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 7.5</td>
            <td>Win 95+ / OSX.2+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 8.0</td>
            <td>Win 95+ / OSX.2+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 8.5</td>
            <td>Win 95+ / OSX.2+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.0</td>
            <td>Win 95+ / OSX.3+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.2</td>
            <td>Win 88+ / OSX.3+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.5</td>
            <td>Win 88+ / OSX.3+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera for Wii</td>
            <td>Wii</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Nokia N800</td>
            <td>N800</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Nintendo DS browser</td>
            <td>Nintendo DS</td>
            <td class="center hidden-phone">8.5</td>
            <td class="center hidden-phone">C/A<sup>1</sup></td>
        </tr>
        <tr class="gradeC">
            <td>KHTML</td>
            <td>Konqureror 3.1</td>
            <td>KDE 3.1</td>
            <td class="center hidden-phone">3.1</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>KHTML</td>
            <td>Konqureror 3.3</td>
            <td>KDE 3.3</td>
            <td class="center hidden-phone">3.3</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>KHTML</td>
            <td>Konqureror 3.5</td>
            <td>KDE 3.5</td>
            <td class="center hidden-phone">3.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeX">
            <td>Tasman</td>
            <td>Internet Explorer 4.5</td>
            <td>Mac OS 8-9</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>Tasman</td>
            <td>Internet Explorer 5.1</td>
            <td>Mac OS 7.6-9</td>
            <td class="center hidden-phone">1</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeC">
            <td>Tasman</td>
            <td>Internet Explorer 5.2</td>
            <td>Mac OS 8-X</td>
            <td class="center hidden-phone">1</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>Misc</td>
            <td>NetFront 3.1</td>
            <td>Embedded devices</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>Misc</td>
            <td>NetFront 3.4</td>
            <td>Embedded devices</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeX">
            <td>Misc</td>
            <td>Dillo 0.8</td>
            <td>Embedded devices</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeX">
            <td>Misc</td>
            <td>Links</td>
            <td>Text only</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeX">
            <td>Misc</td>
            <td>Lynx</td>
            <td>Text only</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>Misc</td>
            <td>IE Mobile</td>
            <td>Windows Mobile 6</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeC">
            <td>Misc</td>
            <td>PSP browser</td>
            <td>PSP</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeU">
            <td>Other browsers</td>
            <td>All others</td>
            <td>-</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">U</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th class="hidden-phone">Engine version</th>
            <th class="hidden-phone">CSS grade</th>
        </tr>
        </tfoot>
        </table>
        </div>
        </div>
        </section>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            DataTables hidden row details example
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table class="display table table-bordered" id="hidden-table-info">
        <thead>
        <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th class="hidden-phone">Platform(s)</th>
            <th class="hidden-phone">Engine version</th>
            <th class="hidden-phone">CSS grade</th>
        </tr>
        </thead>
        <tbody>
        <tr class="gradeX">
            <td>Trident</td>
            <td>Internet
                Explorer 4.0</td>
            <td class="hidden-phone">Win 95+</td>
            <td class="center hidden-phone">4</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>Trident</td>
            <td>Internet
                Explorer 5.0</td>
            <td class="hidden-phone">Win 95+</td>
            <td class="center hidden-phone">5</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet
                Explorer 5.5</td>
            <td class="hidden-phone">Win 95+</td>
            <td class="center hidden-phone">5.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet
                Explorer 6</td>
            <td class="hidden-phone">Win 98+</td>
            <td class="center hidden-phone">6</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet Explorer 7</td>
            <td class="hidden-phone">Win XP SP2+</td>
            <td class="center hidden-phone">7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>AOL browser (AOL desktop)</td>
            <td class="hidden-phone">Win XP</td>
            <td class="center hidden-phone">6</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 1.0</td>
            <td class="hidden-phone">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 1.5</td>
            <td class="hidden-phone">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 2.0</td>
            <td class="hidden-phone">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 3.0</td>
            <td class="hidden-phone">Win 2k+ / OSX.3+</td>
            <td class="center hidden-phone">1.9</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Camino 1.0</td>
            <td class="hidden-phone">OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Camino 1.5</td>
            <td class="hidden-phone">OSX.3+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape 7.2</td>
            <td class="hidden-phone">Win 95+ / Mac OS 8.6-9.2</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape Browser 8</td>
            <td class="hidden-phone">Win 98SE+</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Netscape Navigator 9</td>
            <td class="hidden-phone">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.0</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.1</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.2</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.2</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.3</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.3</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.4</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.4</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.5</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.6</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">1.6</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.7</td>
            <td class="hidden-phone">Win 98+ / OSX.1+</td>
            <td class="center hidden-phone">1.7</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Mozilla 1.8</td>
            <td class="hidden-phone">Win 98+ / OSX.1+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Seamonkey 1.1</td>
            <td class="hidden-phone">Win 98+ / OSX.2+</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Gecko</td>
            <td>Epiphany 2.20</td>
            <td class="hidden-phone">Gnome</td>
            <td class="center hidden-phone">1.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 1.2</td>
            <td class="hidden-phone">OSX.3</td>
            <td class="center hidden-phone">125.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 1.3</td>
            <td class="hidden-phone">OSX.3</td>
            <td class="center hidden-phone">312.8</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 2.0</td>
            <td class="hidden-phone">OSX.4+</td>
            <td class="center hidden-phone">419.3</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>Safari 3.0</td>
            <td class="hidden-phone">OSX.4+</td>
            <td class="center hidden-phone">522.1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>OmniWeb 5.5</td>
            <td class="hidden-phone">OSX.4+</td>
            <td class="center hidden-phone">420</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>iPod Touch / iPhone</td>
            <td class="hidden-phone">iPod</td>
            <td class="center hidden-phone">420.1</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Webkit</td>
            <td>S60</td>
            <td class="hidden-phone">S60</td>
            <td class="center hidden-phone">413</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 7.0</td>
            <td class="hidden-phone">Win 95+ / OSX.1+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 7.5</td>
            <td class="hidden-phone">Win 95+ / OSX.2+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 8.0</td>
            <td class="hidden-phone">Win 95+ / OSX.2+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 8.5</td>
            <td class="hidden-phone">Win 95+ / OSX.2+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.0</td>
            <td class="hidden-phone">Win 95+ / OSX.3+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.2</td>
            <td class="hidden-phone">Win 88+ / OSX.3+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera 9.5</td>
            <td class="hidden-phone">Win 88+ / OSX.3+</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Opera for Wii</td>
            <td class="hidden-phone">Wii</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Nokia N800</td>
            <td class="hidden-phone">N800</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>Presto</td>
            <td>Nintendo DS browser</td>
            <td class="hidden-phone">Nintendo DS</td>
            <td class="center hidden-phone">8.5</td>
            <td class="center hidden-phone">C/A<sup>1</sup></td>
        </tr>
        <tr class="gradeC">
            <td>KHTML</td>
            <td>Konqureror 3.1</td>
            <td class="hidden-phone">KDE 3.1</td>
            <td class="center hidden-phone">3.1</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>KHTML</td>
            <td>Konqureror 3.3</td>
            <td class="hidden-phone">KDE 3.3</td>
            <td class="center hidden-phone">3.3</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeA">
            <td>KHTML</td>
            <td>Konqureror 3.5</td>
            <td class="hidden-phone">KDE 3.5</td>
            <td class="center hidden-phone">3.5</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeX">
            <td>Tasman</td>
            <td>Internet Explorer 4.5</td>
            <td class="hidden-phone">Mac OS 8-9</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>Tasman</td>
            <td>Internet Explorer 5.1</td>
            <td class="hidden-phone">Mac OS 7.6-9</td>
            <td class="center hidden-phone">1</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeC">
            <td>Tasman</td>
            <td>Internet Explorer 5.2</td>
            <td class="hidden-phone">Mac OS 8-X</td>
            <td class="center hidden-phone">1</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeA">
            <td>Misc</td>
            <td>NetFront 3.1</td>
            <td>Embedded devices</td>
            <td class="center">-</td>
            <td class="center">C</td>
        </tr>
        <tr class="gradeA">
            <td>Misc</td>
            <td>NetFront 3.4</td>
            <td class="hidden-phone">Embedded devices</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">A</td>
        </tr>
        <tr class="gradeX">
            <td>Misc</td>
            <td>Dillo 0.8</td>
            <td class="hidden-phone">Embedded devices</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeX">
            <td>Misc</td>
            <td>Links</td>
            <td class="hidden-phone">Text only</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeX">
            <td>Misc</td>
            <td>Lynx</td>
            <td class="hidden-phone">Text only</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>Misc</td>
            <td>IE Mobile</td>
            <td class="hidden-phone">Windows Mobile 6</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeC">
            <td>Misc</td>
            <td>PSP browser</td>
            <td class="hidden-phone">PSP</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">C</td>
        </tr>
        <tr class="gradeU">
            <td>Other browsers</td>
            <td>All others</td>
            <td class="hidden-phone">-</td>
            <td class="center hidden-phone">-</td>
            <td class="center hidden-phone">U</td>
        </tr>
        </tbody>
        </table>

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

<?php include_once VIEWPATH."include/dynamic-table/dynamic-table-js.php"?>

<!--common scripts for all pages-->
<?php include_once VIEWPATH."include/common/common-js.php"?>

</body>
</html>