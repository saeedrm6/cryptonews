<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>Crypto</title>
    <link rel="stylesheet" href="assets/dist/frontend.min.css">
    <link rel="stylesheet" href="assets/js/owl-carousel2/assets/owl.carousel.min.css">
    <!--<link rel="stylesheet" href="assets/css/main.css">-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/dist/custom.css">
    <link href="https://cdn.anychart.com/releases/8.2.1/css/anychart-ui.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.anychart.com/releases/8.2.1/fonts/css/anychart-font.min.css" rel="stylesheet" type="text/css">
    <style>
        #chartdiv {
            width	: 100%;
            height	: 500px;
        }
    </style>
</head>
<body class="categoryinner">
<header>
    <div class="jeg_topbar jeg_container dark sazemanibg">
        <div class="container">
            <div class="jeg_nav_row">
                <div class="jeg_nav_col jeg_nav_left jeg_nav_grow">
                    <div class="item_wrap jeg_nav_alignleft">
                        <div class="jeg_nav_item">
                            <ul class="jeg_menu jeg_top_menu " style="touch-action: pan-y;">
                                <li><a href="#">درباره ما</a></li>
                                <li><a href="https://jnews.io/cryptonews/faq/">مبدل قیمت</a></li>
                                <li><a href="https://jnews.io/landing">قیمت لحظه ای</a></li>
                                <li><a href="#">رویداد ها</a></li>
                                <li><a href="#">سوالات متداول</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="jeg_nav_col jeg_nav_center jeg_nav_normal">
                    <div class="item_wrap jeg_nav_aligncenter"></div>
                </div>
                <div class="jeg_nav_col jeg_nav_right jeg_nav_normal">
                    <div class="item_wrap jeg_nav_alignright">
                        <div class="jeg_nav_item socials_widget jeg_social_icon_block nobg">
                            <a href="" target="_blank"><i class="fa fa-facebook"></i> </a>
                            <a href="" target="_blank"><i class="fa fa-twitter"></i> </a>
                            <a href="" target="_blank"><i class="fa fa-google-plus"></i> </a>
                            <a href="" target="_blank"><i class="fa fa-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jeg_midbar jeg_container dark saeedheader">
        <div class="container">
            <div class="jeg_nav_row">
                <div class="col-md-9 col-xs-0 hidden-xs">
                    <div class="col-md-3">
                        <span class="gold">BTC</span><br>
                        <span>
                            <span id="BTCprice"></span><span class="pull-left">$</span>
                        </span><br>
                        <strong class="uptextt" id="BTCchanges">+1.77%</strong>
                    </div>
                    <div class="col-md-3">
                        <span class="gold">ETH</span><br>
                        <span>
                            <span id="ETHprice"></span><span class="pull-left">$</span>
                        </span><br>
                        <strong class="uptextt" id="ETHchanges">+1.77%</strong>
                    </div>
                    <div class="col-md-3">
                        <span class="gold">LTC</span><br>
                        <span>
                            <span id="LTCprice"></span><span class="pull-left">$</span>
                        </span><br>
                        <strong class="uptextt" id="LTCchanges">+1.77%</strong>
                    </div>
                    <div class="col-md-3">
                        <span class="gold">XRP</span><br>
                        <span>
                            <span id="XRPprice"></span><span class="pull-left">$</span>
                        </span><br>
                        <strong class="uptextt" id="XRPchanges">+1.77%</strong>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="item_wrap jeg_nav_alignleft">
                        <div class="jeg_nav_item jeg_saeed_logo jeg_desktop_logo">
                            <a href="https://jnews.io/cryptonews/" style="padding: 0px 0px 0px 5px;">
                                <img src="assets/dist/image/logo.png" alt="CryptoNews" data-pin-no-hover="true">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand visible-xs" href="#">Menu</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse rtl" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right rtl">
                    <li class="active"><a href="#">صفحه اصلی <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">اخبار</a></li>
                    <li><a href="#">آموزش</a></li>
                    <li><a href="#">قوانین</a></li>
                    <li><a href="#">سرمایه گذاری</a></li>
                    <li><a href="#">استخراج</a></li>
                    <li><a href="#">قیمت روز ارز ها</a></li>
                    <li><a href="#">امنیت</a></li>

                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</header>
<div class="clearfix"></div>
<section class="showdetail">
    <script>


        function timeConverter(UNIX_timestamp){
            var a = new Date(UNIX_timestamp);
            var year = a.getFullYear();
            var month = a.getMonth();
            var date = a.getDate();
            var hour = a.getHours();
            var min = a.getMinutes();
            var sec = a.getSeconds();
            var time = year + '-'+ date + '-' + month;
            return time;
        }

//        console.log(timeConverter(1367174841000));
    </script>
    <div class="container">
        <div class="jeg_author_wrap vcard">
            <div class="jeg_author_content rtl innersymbdetail">
                <?php
                $info = json_decode(file_get_contents("https://api.coinmarketcap.com/v2/ticker/".$_GET["id"]))->data;
                ?>
                <div class="col-md-12 rtl">
                    <div class="col-md-4">
                        <h4>حجم معاملات 24 ساعت اخیر : <?php echo number_format($info->quotes->USD->volume_24h)." $ ";?></h4>
                    </div>
                    <div class="col-md-3">
                        <h4>	عرضه شده : <?php echo $info->symbol." ".number_format($info->circulating_supply);?></h4>
                    </div>
                    <div class="col-md-2">
                        <h4>قیمت : <?php echo number_format($info->quotes->USD->price)." $ ";?></h4>
                    </div>
                    <div class="col-md-3">
                        <h4>ارزش بازار : <?php echo number_format($info->quotes->USD->market_cap)." $ ";?></h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div id="chartdiv"></div>
</section>
<footer class="saeedfooter">
    <div class="footer-holder" id="footer" data-id="footer">
        <div class="jeg_footer jeg_footer_1 dark">
            <div class="jeg_footer_container jeg_container">
                <div class="jeg_footer_content">
                    <div class="container">
                        <div class="row">
                            <div class="jeg_footer_primary clearfix">

                                <div class="col-md-4 footer_column">
                                    <div class="footer_widget widget_mc4wp_form_widget" id="mc4wp_form_widget-2">
                                        <div class="jeg_footer_heading jeg_footer_heading_1">
                                            <h3 class="jeg_footer_title text-right">
                                                <span class="sazemanicolor">خبرنامه</span>
                                            </h3>
                                        </div>

                                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-275" method="post"
                                              data-id="275" data-name="Newsletter">
                                            <div class="mc4wp-form-fields">
                                                <p class="text-right">با ثبت ایمیل خود در سامانه ما ، به آخرین اخبار وب
                                                    سایت از طریق ایمیل دسترسی خواهید داشت</p>
                                                <p>
                                                    <input type="email" name="EMAIL" placeholder="آدرس ایمیل شما"
                                                           required="">
                                                    <input type="submit" value="ثبت نام" class="sazemanibg">
                                                </p>
                                                <label style="display: none !important;">Leave this field empty if
                                                    you're human:
                                                    <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1"
                                                           autocomplete="off">
                                                </label>
                                                <input type="hidden" name="_mc4wp_timestamp" value="1523703753">
                                                <input type="hidden" name="_mc4wp_form_id" value="275">
                                                <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                                            </div>
                                            <div class="mc4wp-response"></div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-4 footer_column">
                                    <div class="footer_widget widget_categories" id="categories-2">
                                        <div class="jeg_footer_heading jeg_footer_heading_1">
                                            <h3 class="jeg_footer_title text-right sazemanicolor">
                                                <span class="sazemanicolor">پیوند های سریع</span>
                                            </h3>
                                        </div>
                                        <ul dir="rtl">
                                            <li class="cat-item cat-item-18">
                                                <a href="https://jnews.io/metro/category/tech/apps/"
                                                   title="Lorem ipsum dolor amet photo booth iceland cliche, subway tile single-origin coffee live-edge poutine man braid fanny pack keffiyeh squid pabst flannel irony.">اخبار</a>
                                            </li>
                                            <li class="cat-item cat-item-18">
                                                <a href="https://jnews.io/metro/category/tech/apps/"
                                                   title="Lorem ipsum dolor amet photo booth iceland cliche, subway tile single-origin coffee live-edge poutine man braid fanny pack keffiyeh squid pabst flannel irony.">آموزش</a>
                                            </li>
                                            <li class="cat-item cat-item-18">
                                                <a href="https://jnews.io/metro/category/tech/apps/"
                                                   title="Lorem ipsum dolor amet photo booth iceland cliche, subway tile single-origin coffee live-edge poutine man braid fanny pack keffiyeh squid pabst flannel irony.">قوانین</a>
                                            </li>
                                            <li class="cat-item cat-item-18">
                                                <a href="https://jnews.io/metro/category/tech/apps/"
                                                   title="Lorem ipsum dolor amet photo booth iceland cliche, subway tile single-origin coffee live-edge poutine man braid fanny pack keffiyeh squid pabst flannel irony.">سرمایه
                                                    گذاری</a>
                                            </li>
                                            <li class="cat-item cat-item-18">
                                                <a href="https://jnews.io/metro/category/tech/apps/"
                                                   title="Lorem ipsum dolor amet photo booth iceland cliche, subway tile single-origin coffee live-edge poutine man braid fanny pack keffiyeh squid pabst flannel irony.">استخراج</a>
                                            </li>
                                            <li class="cat-item cat-item-18">
                                                <a href="https://jnews.io/metro/category/tech/apps/"
                                                   title="Lorem ipsum dolor amet photo booth iceland cliche, subway tile single-origin coffee live-edge poutine man braid fanny pack keffiyeh squid pabst flannel irony.">قیمت
                                                    روز ارز ها</a>
                                            </li>

                                            <li class="cat-item cat-item-18">
                                                <a href="https://jnews.io/metro/category/tech/apps/"
                                                   title="Lorem ipsum dolor amet photo booth iceland cliche, subway tile single-origin coffee live-edge poutine man braid fanny pack keffiyeh squid pabst flannel irony.">امنیت
                                                    اطلاعات</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4 footer_column">
                                    <div class="footer_widget widget_jnews_about" id="jnews_about-2">
                                        <div class="jeg_about ">
                                            <a class="footer_logo" href="https://jnews.io/metro/">
                                                <img src="assets/dist/image/logo.png" alt="JNews Metro"
                                                     data-pin-no-hover="true">
                                            </a>
                                            <p class="text-justify rtl">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                                                و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                                                نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="jeg_footer_secondary clearfix">

                            <p class="copyright text-right rtl pull-right"> تمامی حقوق برای <a href="">رمزنگاری
                                دیجیتال</a> محفوظ است.
                            </p>
                            <p class="copyright text-right rtl pull-left"><a href="https://rahimimanesh.com">طراحی و
                                برنامه نویسی : سعید رحیمی منش</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script type="text/script" src="assets/dist/frontend.min.js"></script>
<script type="text/script" src="assets/js/main.js"></script>

<script>


    function format(n, currency) {
        return currency + " " + n.toFixed(1).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
    }

    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
//                console.log(data);
                console.log(data.RAW.BTC.USD.CHANGEPCT24HOUR);

//                console.log(format(data.RAW.BTC.USD.PRICE*6900,"تومان").replace(".0",""));
                document.getElementById("BTCprice").innerHTML = format(data.RAW.BTC.USD.PRICE,"").replace(".0","");
                document.getElementById("BTCchanges").innerHTML = data.RAW.BTC.USD.CHANGEPCT24HOUR;
                if (data.RAW.BTC.USD.CHANGEPCT24HOUR<0){
                    document.getElementById("BTCchanges").classList.add('text-danger');
                }else{
                    document.getElementById("BTCchanges").classList.add('uptext');
                }
            }
        };
        xhttp.open("GET", "https://api.cointrend.club/data/pricemultifull?fsyms=BTC,ETH,LTC,XRP&tsyms=USD", true);
        xhttp.send();
    }



    window.setInterval(function(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);

                document.getElementById("BTCprice").innerHTML = data.RAW.BTC.USD.PRICE.replace(".0","");
                document.getElementById("BTCchanges").innerHTML = data.RAW.BTC.USD.CHANGEPCT24HOUR;
                if (data.RAW.BTC.USD.CHANGEPCT24HOUR<0){
                    document.getElementById("BTCchanges").classList.add('downprice');
                }else{
                    document.getElementById("BTCchanges").classList.add('uptext');
                }

                document.getElementById("ETHprice").innerHTML = data.RAW.ETH.USD.PRICE.replace(".0","");
                document.getElementById("ETHchanges").innerHTML = data.RAW.ETH.USD.CHANGEPCT24HOUR;
                if (data.RAW.ETH.USD.CHANGEPCT24HOUR<0){
                    document.getElementById("ETHchanges").classList.add('downprice');
                }else{
                    document.getElementById("ETHchanges").classList.add('uptext');
                }

                document.getElementById("LTCprice").innerHTML = data.RAW.LTC.USD.PRICE.replace(".0","");
                document.getElementById("LTCchanges").innerHTML = data.RAW.LTC.USD.CHANGEPCT24HOUR;
                if (data.RAW.LTC.USD.CHANGEPCT24HOUR<0){
                    document.getElementById("LTCchanges").classList.add('downprice');
                }else{
                    document.getElementById("LTCchanges").classList.add('uptext');
                }

                document.getElementById("XRPprice").innerHTML = data.RAW.XRP.USD.PRICE.replace(".0","");
                document.getElementById("XRPchanges").innerHTML = data.RAW.XRP.USD.CHANGEPCT24HOUR;
                if (data.RAW.XRP.USD.CHANGEPCT24HOUR<0){
                    document.getElementById("XRPchanges").classList.add('downprice');
                }else{
                    document.getElementById("XRPchanges").classList.add('uptext');
                }
            }
        };
        xhttp.open("GET", "https://api.cointrend.club/data/pricemultifull?fsyms=BTC,ETH,LTC,XRP&tsyms=USD", true);
        xhttp.send();
    }, 500);


</script>

<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/dark.js"></script>

<script>
    var chartData = generateChartData();
    var chart = AmCharts.makeChart("chartdiv", {
        "type": "serial",
        "theme": "dark",
        "marginRight": 80,
        "autoMarginOffset": 20,
        "marginTop": 7,
        "dataProvider": chartData,
        "valueAxes": [{
            "axisAlpha": 0.2,
            "dashLength": 1,
            "position": "left"
        }],
        "mouseWheelZoomEnabled": true,
        "graphs": [{
            "id": "g1",
            "balloonText": "$[[value]]",
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "hideBulletsCount": 50,
            "title": "red line",
            "valueField": "visits",
            "useLineColorForBulletBorder": true,
            "balloon":{
                "drop":true
            }
        }],
        "chartScrollbar": {
            "autoGridCount": true,
            "graph": "g1",
            "scrollbarHeight": 40
        },
        "chartCursor": {
            "limitToGraph":"g1"
        },
        "categoryField": "date",
        "categoryAxis": {
            "parseDates": true,
            "axisColor": "#DADADA",
            "dashLength": 1,
            "minorGridEnabled": true
        },
        "export": {
            "enabled": false
        }
    });

    chart.addListener("rendered", zoomChart);
    zoomChart();

    // this method is called when chart is first inited as we listen for "rendered" event
    function zoomChart() {
        // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
        chart.zoomToIndexes(chartData.length - 40, chartData.length - 1);
    }

    // generate some random data, quite different range

    // generate some random data, quite different range
    function generateChartData() {
        var chartData = [];
        <?php

        $data = json_decode(file_get_contents("https://graphs2.coinmarketcap.com/currencies/".str_replace(' ','-',$_GET["symbol"])))->price_usd;
        function gettimeof($in){
            date_default_timezone_set("UTC");
            $timestamp = $in / 1000;
            $format = 'Y-m-d';
            $res = date($format,$timestamp);
            return $res;
        }
        foreach ($data as $json){
            ?>
        chartData.push({
            date: '<?php echo gettimeof($json[0]); ?>',
            visits: <?php  echo $json[1];?>
        });
        <?php
        }

        ?>



        return chartData;
    }


</script>

</body>
</html>