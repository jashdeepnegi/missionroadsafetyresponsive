
<?php
// if ( $_REQUEST["year"] == 2016)
{ ?>

<html>
    <head>
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/> -->
	<meta name="viewport" content="width=1024">
        <title>State Wise Data - IRSC</title>
        <link rel="shortcut icon" href="assets/img/logo.png">
        <link rel="stylesheet" href="animate.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="tooltipster.bundle.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="tooltipster.bundle.min.css"/>
        <link rel="stylesheet" type="text/css" href="tooltipster-sideTip-shadow.min.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <script type="text/javascript">

          if (screen.width <= 768) {
          document.location = "./mission-road-safety-mobile/index.php";
          }

      </script>


        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> -->
        <script src="mapdata.js"></script>
        <script src="countrymap.js"></script>
        <script src="2017/mapdata.js"></script>
        <script src="2017/countrymap.js"></script>
        <script src="2015/mapdata.js"></script>
        <script src="2015/countrymap.js"></script>
        <script src="2007/mapdata.js"></script>
        <script src="2007/countrymap.js"></script>

        <!--For 2018 map -->
        <script src="2018/mapdata.js"></script>
        <script src="2018/countrymap.js"></script>

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.0.min.js"></script>
        <script type="text/javascript" src="tooltipster.bundle.min.js"></script>
        <script type="text/javascript" src="jquery-csv.js"></script>
        <script src="d3.js"></script>
        <script src="d3pie.min.js"></script>
        <script src="canvasjs.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" type="text/css" media ="only screen and (min-width: 800px)"  href="style1.css"/>
        <link rel="stylesheet" type="text/css" media ="only screen and (max-width: 800px)"  href="stylemobile.css"/>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
        .mgh, .uk, .tr, .mani, .ar { fill:#fdaaaa;}
            .mz, .ng, .pj, .am, .bh, .od{ fill:#fc8b8b;}
            #g4249, .jh, .wb, .ct, .ap, .ch, .hy{fill:#f96c6c;}
            .sk, .gj, .mp, .up, .kl, .go{fill:#f32f2f;}
            .tn, .rj, .dl, .hp, .jk, .mh, .kr, .tl{fill:#ff1111;}
            .bh, .ct, .mh, .mani, .mgh, .mz, .rj, .dl{fill:rgb(89, 242, 34);}
          body{
            display: none;
            font-family: 'Source Sans Pro', sans-serif;
          }
          tspan[dy="15"]{
            display:none;
          }
          .col-lg-3{
            margin-left:25px;
          }
          .card-title{
            text-align:center;
          }
          .hide{
            display:none;
          }
          .active{
            background-color:#030000;
            border-left:5px solid #A3A0FB;
          }
  </style>
  <style media="screen">
    body {
      font-family: 'Source Sans Pro', sans-serif;
    }

    nav,navbar {
      background-color: #43425D;
    }
    .sideone{
      padding-left:0;
      padding-right:0;
      height:101%;
    }
    .nav-item{
      padding-left:16px;
      padding-right:16px;
    }
    nav a {
      color: #FFFFFF;
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: bold;
      font-size: 1.2em;
      text-decoration:none;
      cursor:pointer;
    }
    .container-fluid{
      margin-top:20px;
    }
    .col-lg-6,.col-lg-3{
      padding:5px;
    }
    .sideone a{
      font-size:1em;
    }
    hr{
      margin-top:0.5rem;
      margin-bottom:0.5rem;
    }

    @media screen and (min-width:1400px){
      .sideone{
        height:91%;
      }
    }
    @media screen and (min-width:1600px){
      .sideone{
        height:81%;
      }
    }
    @media screen and (min-width:1800px){
      .sideone{
        height:76%;
      }
    }
  </style>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106130907-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-106130907-3');
</script>
  <script>
  $(document).ready(function(){
      $("html").show();
      $("body").show();
      if($(window).width()>800)
      {
      $(".indian_stat").mouseover(function(){
        $("#indian_stat_box").show();
      }).mouseout(function(){
        $("#indian_stat_box").hide();
      });
      }
      var aspect_ratio = ($(window).width()/$(window).height())*100;
        var topdetails = 16 + $(window).width()/$(window).height()*(483.0/412)*100 ;
        if($(window).width() < 800)
        {
         $("#information1").appendTo("body");
         $("#information1").css("top",$(window).height()*5.5/100 -12.8 + "px");
         $(".details").css("top",$(window).height()*16/100 + $(window).width()*1.172 + "px");
         $("#staticinidapie").css("top",$(window).height()*16/100 + $(window).width()*1.172 + (0.1*($(window).height()))  + 168 +  "px" );
         $(".latestrules").css("top",topdetails + aspect_ratio*(231.1/412)+ aspect_ratio*(264/412) + 7.5 + "vh");
         $(".rightcredit").css("top", topdetails + aspect_ratio*(231.1/412)+ aspect_ratio*(264/412) + 7.5 +41 + "vh");
         $("#videoicon, #blog").appendTo("body");
         $("#videoicon").css("right","3px");
         $("#blog").css("right","46px").css("top","10px");
         $("#videoicon, #blog, #misc").css("top",($(window).height()/100.0)*18 + 3 + "px");
         $("#misc").appendTo("body").css("right","86px");
         $(".legend").css("top", $(window).height()*16/100 + $(window).width()*1.1699029127 - 80 + "px");
          $("#nitingatkari").css("display","none");

        }
   });
  var vardata1 = "./data4.csv";
  var vardata2 = "./data5.csv";
  var vardata3 = "./data3new.csv";
  function data2(file){
                    $.ajax(file).done(function(result) {
                        $('#disapp').hide();
                        var data = result;
                        var arr = $.csv.toArrays(data);
                        console.log(arr[33][4]);
                        document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        $('.sk').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Sikkim</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[6][1] + "<br /><br/>" + arr[0][2] + ": " + arr[6][2] + "<br/><br />" + arr[0][3] + ": " + arr[6][3] + "<br /><br/>" + arr[0][4] + ": " + arr[6][4] + "<br /><br/>" + arr[0][5] + ": " + arr[6][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[6][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[6][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[6][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[6][9] + "</p></td></tr></table>";

                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.ng').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Nagaland</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[3][1] + "<br /><br/>" + arr[0][2] + ": " + arr[3][2] + "<br /><br/>" + arr[0][3] + ": " + arr[3][3] + "<br /><br/>" + arr[0][4] + ": " + arr[3][4] + "<br /><br/>" + arr[0][5] + ": " + arr[3][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[3][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[3][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[3][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[3][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.mz').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Mizorum</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[7][1] + "<br /><br/>" + arr[0][2] + ": " + arr[7][2] + "<br/><br />" + arr[0][3] + ": " + arr[7][3] + "<br /><br/>" + arr[0][4] + ": " + arr[7][4] + "<br/><br />" + arr[0][5] + ": " + arr[7][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[7][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[7][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[7][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[7][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.ch').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Chandigarh</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[8][1] + "<br /><br/>" + arr[0][2] + ": " + arr[8][2] + "<br/><br />" + arr[0][3] + ": " + arr[8][3] + "<br /><br/>" + arr[0][4] + ": " + arr[8][4] + "<br /><br/>" + arr[0][5] + ": " + arr[8][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[8][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[8][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[8][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[8][9] + "</p></td></tr></table>";
                        }, function(){
                           document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.ar').hover(function() {
                           document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Arunachal Pradesh</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[9][1] + "<br /><br/>" + arr[0][2] + ": " + arr[9][2] + "<br /><br/>" + arr[0][3] + ": " + arr[9][3] + "<br /><br/>" + arr[0][4] + ": " + arr[9][4] + "<br /><br/>" + arr[0][5] + ": " + arr[9][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[9][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[9][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[9][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[9][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.mani').hover(function() {
                           document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Manipur</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[10][1] + "<br /><br/>" + arr[0][2] + ": " + arr[10][2] + "<br /><br/>" + arr[0][3] + ": " + arr[10][3] + "<br /><br/>" + arr[0][4] + ": " + arr[10][4] + "<br /><br/>" + arr[0][5] + ": " + arr[10][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[10][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[10][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[10][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[10][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.tr').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Tripura</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[11][1] + "<br /><br/>" + arr[0][2] + ": " + arr[11][2] + "<br/><br />" + arr[0][3] + ": " + arr[11][3] + "<br /><br/>" + arr[0][4] + ": " + arr[11][4] + "<br /><br/>" + arr[0][5] + ": " + arr[11][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[11][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[11][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[11][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[11][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.mgh').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Meghalaya</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[12][1] + "<br /><br/>" + arr[0][2] + ": " + arr[12][2] + "<br /><br/>" + arr[0][3] + ": " + arr[12][3] + "<br /><br/>" + arr[0][4] + ": " + arr[12][4] + "<br /><br/>" + arr[0][5] + ": " + arr[12][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[12][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[12][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[12][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[12][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.go').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Goa</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[14][1] + "<br /><br/>" + arr[0][2] + ": " + arr[14][2] + "<br/><br />" + arr[0][3] + ": " + arr[14][3] + "<br /><br/>" + arr[0][4] + ": " + arr[14][4] + "<br /><br/>" + arr[0][5] + ": " + arr[14][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[14][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[14][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[14][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[14][9] + "</p></td></tr></table>";
                            }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.uk').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Uttarakhand</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[15][1] + "<br /><br/>" + arr[0][2] + ": " + arr[15][2] + "<br/><br />" + arr[0][3] + ": " + arr[15][3] + "<br /><br/>" + arr[0][4] + ": " + arr[15][4] + "<br /><br/>" + arr[0][5] + ": " + arr[15][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[15][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[15][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[15][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[15][9] + "</p></td></tr></table>";
                                         }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.jk').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Jammu & Kashmir</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[16][1] + "<br /><br/>" + arr[0][2] + ": " + arr[16][2] + "<br /><br/>" + arr[0][3] + ": " + arr[16][3] + "<br /><br/>" + arr[0][4] + ": " + arr[16][4] + "<br /><br/>" + arr[0][5] + ": " + arr[16][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[16][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[16][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[16][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[16][9] + "</p></td></tr></table>";                 }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.hp').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Himachal Pradesh</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[17][1] + "<br /><br/>" + arr[0][2] + ": " + arr[17][2] + "<br /><br/>" + arr[0][3] + ": " + arr[17][3] + "<br /><br/>" + arr[0][4] + ": " + arr[17][4] + "<br/><br />" + arr[0][5] + ": " + arr[17][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[17][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[17][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[17][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[17][9] + "</p></td></tr></table>";
                                 }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.dl').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Delhi</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[17][1] + "<br /><br/>" + arr[0][2] + ": " + arr[17][2] + "<br/><br />" + arr[0][3] + ": " + arr[17][3] + "<br /><br/>" + arr[0][4] + ": " + arr[18][4] + "<br /><br/>" + arr[0][5] + ": " + arr[18][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[18][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[18][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[18][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[18][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.am').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Assam</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[19][1] + "<br /><br/>" + arr[0][2] + ": " + arr[19][2] + "<br /><br/>" + arr[0][3] + ": " + arr[19][3] + "<br/><br />" + arr[0][4] + ": " + arr[19][4] + "<br/><br />" + arr[0][5] + ": " + arr[19][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[19][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[19][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[19][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[19][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.jh').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Jharkhand</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[20][1] + "<br/><br />" + arr[0][2] + ": " + arr[20][2] + "<br /><br/>" + arr[0][3] + ": " + arr[20][3] + "<br/><br />" + arr[0][4] + ": " + arr[20][4] + "<br/><br />" + arr[0][5] + ": " + arr[20][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[20][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[20][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[20][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[20][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.ct').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Chhattisgarh</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[21][1] + "<br /><br/>" + arr[0][2] + ": " + arr[21][2] + "<br /><br/>" + arr[0][3] + ": " + arr[21][3] + "<br /><br/>" + arr[0][4] + ": " + arr[21][4] + "<br/><br />" + arr[0][5] + ": " + arr[21][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[21][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[21][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[21][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[21][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.kl').hover(function() {
                            document.getElementById("info").innerHTML = "<p style='font-size: 1.5em;background-color: #000; color: #f6f5f7'; padding: 10px;'>Kerala</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[22][1] + "<br /><br/>" + arr[0][2] + ": " + arr[22][2] + "<br/><br />" + arr[0][3] + ": " + arr[22][3] + "<br /><br/>" + arr[0][4] + ": " + arr[22][4] + "<br /><br/>" + arr[0][5] + ": " + arr[22][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[22][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[22][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[22][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[22][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.od').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Odisha</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[23][1] + "<br /><br/>" + arr[0][2] + ": " + arr[23][2] + "<br /><br/>" + arr[0][3] + ": " + arr[23][3] + "<br /><br/>" + arr[0][4] + ": " + arr[23][4] + "<br /><br/>" + arr[0][5] + ": " + arr[23][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[23][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[23][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[23][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[23][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.hy').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Haryana</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[24][1] + "<br /><br/>" + arr[0][2] + ": " + arr[24][2] + "<br /><br/>" + arr[0][3] + ": " + arr[24][3] + "<br /><br/>" + arr[0][4] + ": " + arr[24][4] + "<br /><br/>" + arr[0][5] + ": " + arr[24][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[24][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[24][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[24][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[24][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.pj').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Punjab</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[25][1] + "<br /><br/>" + arr[0][2] + ": " + arr[25][2] + "<br /><br/>" + arr[0][3] + ": " + arr[25][3] + "<br /><br/>" + arr[0][4] + ": " + arr[25][4] + "<br /><br/>" + arr[0][5] + ": " + arr[25][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[25][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[25][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[25][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[25][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.bh').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Bihar</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[26][1] + "<br /><br/>" + arr[0][2] + ": " + arr[26][2] + "<br /><br/>" + arr[0][3] + ": " + arr[26][3] + "<br /><br/>" + arr[0][4] + ": " + arr[26][4] + "<br /><br/>" + arr[0][5] + ": " + arr[26][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[26][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[26][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[26][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[26][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.wb').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>West Bengal</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[27][1] + "<br /><br/>" + arr[0][2] + ": " + arr[27][2] + "<br/><br />" + arr[0][3] + ": " + arr[27][3] + "<br /><br/>" + arr[0][4] + ": " + arr[27][4] + "<br /><br/>" + arr[0][5] + ": " + arr[27][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[27][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[27][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[27][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[27][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.tl').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Telangana</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[28][1] + "<br /><br/>" + arr[0][2] + ": " + arr[28][2] + "<br/><br />" + arr[0][3] + ": " + arr[28][3] + "<br /><br/>" + arr[0][4] + ": " + arr[28][4] + "<br /><br/>" + arr[0][5] + ": " + arr[28][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[28][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[28][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[28][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[28][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });

                        $('.gj').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Gujarat</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[29][1] + "<br/><br />" + arr[0][2] + ": " + arr[29][2] + "<br/><br />" + arr[0][3] + ": " + arr[29][3] + "<br /><br/>" + arr[0][4] + ": " + arr[29][4] + "<br /><br/>" + arr[0][5] + ": " + arr[29][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[29][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[29][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[29][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[29][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.ap').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Andhra Pradesh</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[30][1] + "<br/><br />" + arr[0][2] + ": " + arr[30][2] + "<br /><br/>" + arr[0][3] + ": " + arr[30][3] + "<br /><br/>" + arr[0][4] + ": " + arr[30][4] + "<br/><br />" + arr[0][5] + ": " + arr[30][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[30][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[30][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[30][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[30][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.mp').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Madhya Pradesh</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[31][1] + "<br/><br />" + arr[0][2] + ": " + arr[31][2] + "<br /><br/>" + arr[0][3] + ": " + arr[31][3] + "<br /><br/>" + arr[0][4] + ": " + arr[31][4] + "<br/><br />" + arr[0][5] + ": " + arr[31][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[31][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[31][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[31][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[31][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.rj').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Rajasthan</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[32][1] + "<br/><br/>" + arr[0][2] + ": " + arr[32][2] + "<br/><br/>" + arr[0][3] + ": " + arr[32][3] + "<br/><br/>" + arr[0][4] + ": " + arr[32][4] + "<br/><br/>" + arr[0][5] + ": " + arr[32][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[32][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[32][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[32][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[32][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.kk').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Karnataka</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[33][1] + "<br/><br />" + arr[0][2] + ": " + arr[33][2] + "<br/><br />" + arr[0][3] + ": " + arr[33][3] + "<br/><br/>" + arr[0][4] + ": " + arr[33][4] + "<br/><br />" + arr[0][5] + ": " + arr[33][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[33][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[33][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[33][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[33][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.mh').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Maharashtra</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[34][1] + "<br/><br/>" + arr[0][2] + ": " + arr[34][2] + "<br/><br/>" + arr[0][3] + ": " + arr[34][3] + "<br /><br/>" + arr[0][4] + ": " + arr[34][4] + "<br /><br/>" + arr[0][5] + ": " + arr[34][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[34][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[34][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[34][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[34][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.tn').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Tamil Nadu</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[35][1] + "<br/><br />" + arr[0][2] + ": " + arr[35][2] + "<br/><br />" + arr[0][3] + ": " + arr[35][3] + "<br/><br />" + arr[0][4] + ": " + arr[35][4] + "<br /><br/>" + arr[0][5] + ": " + arr[35][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[35][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[35][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[35][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[35][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                        $('.up').hover(function() {
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>Uttar Pradesh</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[36][1] + "<br/><br />" + arr[0][2] + ": " + arr[36][2] + "<br /><br/>" + arr[0][3] + ": " + arr[36][3] + "<br/><br />" + arr[0][4] + ": " + arr[36][4] + "<br /><br/>" + arr[0][5] + ": " + arr[36][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[36][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[36][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[36][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[36][9] + "</p></td></tr></table>";
                        }, function(){
                            document.getElementById("info").innerHTML = "<p id = 'mobheading' style='font-size: 1.5vw;background-color: #000; color: #f6f5f7'; padding: 10px;'>India</p><div style='width: 50%;float: left;text-align: left; padding-left: 30px;'><span style = 'margin-left: -10px;'>Fatality Age Group Data<br/>&nbsp;&nbsp;(No. of person)<br/><br/></span>" + arr[0][1] + ": " + arr[37][1] + "<br /><br/>" + arr[0][2] + ": " + arr[37][2] + "<br/><br />" + arr[0][3] + ": " + arr[37][3] + "<br/><br />" + arr[0][4] + ": " + arr[37][4] + "<br/><br />" + arr[0][5] + ": " + arr[37][5] + "</div><div style='width:50%;float:left;border-left: 1px solid #000;'>No. of Deaths(Road Users)<br /><table style='width: 60%; margin:auto;'><tr><td><img src='./icon/png/walk.png' style='width:40px;height:40px;float:left'></td><td><p style='float:left;'>" + arr[37][6] + "</p></td></tr><tr><td><img src='./icon/png/twowh.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][7] + "</p></td></tr><tr><td><img src='./icon/png/car.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][8] + "</p></td></tr><tr><td><img src='./icon/png/truck.png' style='width:40px;height:40px;float:left;'></td><td><p style='float:left;'>" + arr[37][9] + "</p></td></tr></table>";
                        });
                    });
            }
  function data1(file){
      console.log("yo bro in function");
      console.log(file);
      $.ajax(file).done(function(result) {
          var data = result;
          var arr = $.csv.toArrays(data);
          console.log(arr[23][1]);
          document.getElementById('ng').innerHTML = "<p style='text-align:center; font-size: 20px;'>Nagaland</p><hr>Total Accidents: " + arr[1][0] + "<br/>Total Injured: " + arr[1][1] + "<br />Total Deaths: " + arr[1][2];
          document.getElementById('tr').innerHTML = "<p style='text-align:center; font-size: 20px;'>Tripura</p><hr>Total Accidents: " + arr[2][0] + "<br/>Total Injured: " + arr[2][1] + "<br />Total Deaths: " + arr[2][2];
          document.getElementById('mani').innerHTML = "<p style='text-align:center; font-size: 20px;'>Manipur</p><hr>Total Accidents: " + arr[3][0] + "<br/>Total Injured: " + arr[3][1] + "<br />Total Deaths: " + arr[3][2];;
          document.getElementById('bh').innerHTML = "<p style='text-align:center; font-size: 20px;'>Bihar</p><hr>Total Accidents: " + arr[4][0] + "<br/>Total Injured: " + arr[4][1] + "<br />Total Deaths: " + arr[4][2];
          document.getElementById('mgh').innerHTML = "<p style='text-align:center; font-size: 20px;'>Meghalaya</p><hr>Total Accidents: " + arr[6][0] + "<br/>Total Injured: " + arr[6][1] + "<br />Total Deaths: " + arr[6][2];
          document.getElementById('mz').innerHTML = "<p style='text-align:center; font-size: 20px;'>Mizorum</p><hr>Total Accidents: " + arr[7][0] + "<br/>Total Injured: " + arr[7][1] + "<br />Total Deaths: " + arr[7][2];
          document.getElementById('wb').innerHTML = "<p style='text-align:center; font-size: 20px;'>West Bengal</p><hr>Total Accidents: " + arr[8][0] + "<br/>Total Injured: " + arr[8][1] + "<br />Total Deaths: " + arr[8][2];
          document.getElementById('jk').innerHTML = "<p style='text-align:center; font-size: 20px;'>Jammu & Kashmir</p><hr>Total Accidents: " + arr[9][0] + "<br/>Total Injured: " + arr[9][1] + "<br />Total Deaths: " + arr[9][2];
          document.getElementById('am').innerHTML = "<p style='text-align:center; font-size: 20px;'>Assam</p><hr>Total Accidents: " + arr[10][0] + "<br/>Total Injured: " + arr[10][1] + "<br />Total Deaths: " + arr[10][2];
          document.getElementById('jh').innerHTML = "<p style='text-align:center; font-size: 20px;'>Jharkhand</p><hr>Total Accidents: " + arr[11][0] + "<br/>Total Injured: " + arr[11][1] + "<br />Total Deaths: " + arr[11][2];
          document.getElementById('up').innerHTML = "<p style='text-align:center; font-size: 20px;'>Uttar Pradesh</p><hr>Total Accidents: " + arr[12][0] + "<br/>Total Injured: " + arr[12][1] + "<br />Total Deaths: " + arr[12][2];
//$('#go').css("fill",colori(arr[15][2],largest,min));
document.getElementById('uk').innerHTML = "<p style='text-align:center; font-size: 20px;'>Uttarakhand</p><hr>Total Accidents: " + arr[13][0] + "<br/>Total Injured: " + arr[13][1] + "<br />Total Deaths: " + arr[13][2];
//$('#jh').css("fill",colori(arr[16][2],largest,min));
document.getElementById('ar').innerHTML = "<p style='text-align:center; font-size: 20px;'>Arunachal Pradesh</p><hr>Total Accidents: " + arr[14][0] + "<br/>Total Injured: " + arr[14][1] + "<br />Total Deaths: " + arr[14][2];
//$('#jk').css("fill",colori(arr[17][2],largest,min));
document.getElementById('dl').innerHTML = "<p style='text-align:center; font-size: 20px;'>New Delhi</p><hr>Total Accidents: " + arr[15][0] + "<br/>Total Injured: " + arr[15][1] + "<br />Total Deaths: " + arr[15][2];
//$('#pj').css("fill",colori(arr[18][2],largest,min));
document.getElementById('ap').innerHTML = "<p style='text-align:center; font-size: 20px;'>Andhra Pradesh</p><hr>Total Accidents: " + arr[16][0] + "<br/>Total Injured: " + arr[16][1] + "<br />Total Deaths: " + arr[16][2];
//$('#am').css("fill",colori(arr[19][2],largest,min));
document.getElementById('od').innerHTML = "<p style='text-align:center; font-size: 20px;'>Odisha</p><hr>Total Accidents: " + arr[17][0] + "<br/>Total Injured: " + arr[17][1] + "<br />Total Deaths: " + arr[17][2];
//$('#dl').css("fill",colori(arr[20][2],largest,min));
document.getElementById('sk').innerHTML = "<p style='text-align:center; font-size: 20px;'>Sikkim</p><hr>Total Accidents: " + arr[18][0] + "<br/>Total Injured: " + arr[18][1] + "<br />Total Deaths: " + arr[18][2];
//$('#bh').css("fill",colori(arr[21][2],largest,min));
document.getElementById('mh').innerHTML = "<p style='text-align:center; font-size: 20px;'>Maharashtra</p><hr>Total Accidents: " + arr[19][0] + "<br/>Total Injured: " + arr[19][1] + "<br />Total Deaths: " + arr[19][2];
//$('#od').css("fill",colori(arr[23][2],largest,min));
document.getElementById('ch').innerHTML = "<p style='text-align:center; font-size: 20px;'>Chandigarh</p><hr>Total Accidents: " + arr[20][0] + "<br/>Total Injured: " + arr[20][1] + "<br />Total Deaths: " + arr[20][2];
//$('#hy').css("fill",colori(arr[22][2],largest,min));
document.getElementById('kl').innerHTML = "<p style='text-align:center; font-size: 20px;'>Kerala</p><hr>Total Accidents: " + arr[22][0] + "<br/>Total Injured: " + arr[22][1] + "<br />Total Deaths: " + arr[22][2];
//$('#wb').css("fill",colori(arr[24][2],largest,min));
document.getElementById('mp').innerHTML = "<p style='text-align:center; font-size: 20px;'>Madhya Pradesh</p><hr>Total Accidents: " + arr[23][0] + "<br/>Total Injured: " + arr[23][1] + "<br />Total Deaths: " + arr[23][2];
//$('#ct').css("fill",colori(arr[25][2],largest,min));
document.getElementById('gj').innerHTML = "<p style='text-align:center; font-size: 20px;'>Gujarat</p><hr>Total Accidents: " + arr[24][0] + "<br/>Total Injured: " + arr[24][1] + "<br />Total Deaths: " + arr[24][2];
//$('#gj').css("fill",colori(arr[27][2],largest,min));
document.getElementById('rj').innerHTML = "<p style='text-align:center; font-size: 20px;'>Rajasthan</p><hr>Total Accidents: " + arr[25][0] + "<br/>Total Injured: " + arr[25][1] + "<br />Total Deaths: " + arr[25][2];
//$('#rj').css("fill",colori(arr[28][2],largest,min));
document.getElementById('ct').innerHTML = "<p style='text-align:center; font-size: 20px;'>Chhattisgarh</p><hr>Total Accidents: " + arr[26][0] + "<br/>Total Injured: " + arr[26][1] + "<br />Total Deaths: " + arr[26][2];
//$('#ap').css("fill",colori(arr[29][2],largest,min));
document.getElementById('hp').innerHTML = "<p style='text-align:center; font-size: 20px;'>Himachal Pradesh</p><hr>Total Accidents: " + arr[27][0] + "<br/>Total Injured: " + arr[27][1] + "<br />Total Deaths: " + arr[27][2];
//$('#up').css("fill",colori(arr[30][2],largest,min));
document.getElementById('tl').innerHTML = "<p style='text-align:center; font-size: 20px;'>Telangana</p><hr>Total Accidents: " + arr[35][0] + "<br/>Total Injured: " + arr[35][1] + "<br />Total Deaths: " + arr[35][2];
document.getElementById('pj').innerHTML = "<p style='text-align:center; font-size: 20px;'>Punjab</p><hr>Total Accidents: " + arr[29][0] + "<br/>Total Injured: " + arr[29][1] + "<br />Total Deaths: " + arr[29][2];
//$('#kl').css("fill",colori(arr[31][2],largest,min));
document.getElementById('kk').innerHTML = "<p style='text-align:center; font-size: 20px;'>Karnataka</p><hr>Total Accidents: " + arr[30][0] + "<br/>Total Injured: " + arr[30][1] + "<br />Total Deaths: " + arr[30][2];
//$('#kk').css("fill",colori(arr[32][2],largest,min));
document.getElementById('g4249').innerHTML = "<p style='text-align:center; font-size: 20px;'>Puducherry</p><hr>Total Accidents: " + arr[31][0] + "<br/>Total Injured: " + arr[31][1] + "<br />Total Deaths: " + arr[31][2];
//$('#mp').css("fill",colori(arr[33][2],largest,min));
document.getElementById('hy').innerHTML = "<p style='text-align:center; font-size: 20px;'>Haryana</p><hr>Total Accidents: " + arr[32][0] + "<br/>Total Injured: " + arr[32][1] + "<br />Total Deaths: " + arr[32][2];
//$('#mh').css("fill",colori(arr[34][2],largest,min));
document.getElementById('tn').innerHTML = "<p style='text-align:center; font-size: 20px;'>Tamil Nadu</p><hr>Total Accidents: " + arr[34][0] + "<br/>Total Injured: " + arr[34][1] + "<br />Total Deaths: " + arr[34][2];
//$('#tn').css("fill",colori(arr[35][2],largest,min));
document.getElementById('go').innerHTML = "<p style='text-align:center; font-size: 20px;'>Goa</p><hr>Total Accidents: " + arr[33][0] + "<br/>Total Injured: " + arr[33][1] + "<br />Total Deaths: " + arr[33][2];

document.getElementById('indian_stat_box').innerHTML = "<p style='text-align:center; font-size: 20px;'>India</p><hr>Total Accidents: " + arr[36][0] + "<br/>Total Injured: " + arr[36][1] + "<br />Total Deaths: " + arr[36][2];
document.getElementById('wr').innerHTML = "<p style='text-align:center; font-size: 20px;'>Goa</p><hr>Total Accidents: " + arr[36][0] + "<br/>Total Injured: " + arr[34][1] + "<br />Total Deaths: " + arr[34][2];

                    });
                }
  function colori(value, largest ,min)
  {
    b = (largest - min) * 48;
    c = (22 + ((value - min)/b)) + "%";
    return 'hsla(360,80%,50%,1)';
  }
  function polarToCartesian(centerX, centerY, radius, angleInDegrees) {
    var angleInRadians = (angleInDegrees-90) * Math.PI / 180.0;
    return {
      x: centerX + (radius * Math.cos(angleInRadians)),
      y: centerY + (radius * Math.sin(angleInRadians))
    };
  }
  function describeArc(x, y, radius, startAngle, endAngle){

    var start = polarToCartesian(x, y, radius, endAngle);
    var end = polarToCartesian(x, y, radius, startAngle);
    var largeArcFlag = endAngle - startAngle <= 180 ? "0" : "1";
    var d = [
        "M", start.x, start.y,
        "A", radius, radius, 0, largeArcFlag, 0, end.x, end.y
    ].join(" ");
    return d;
  }
  $('html, body').css({
    overflow: 'auto',
    height: '100%'
  });
  $(document).ready(function(){
    data1(vardata1);
    data2(vardata2);
  })
  $( function() {
      var convfact = parseFloat(($(window).width())/100);
      var convfacth = parseFloat(($(window).height())/100);
      var top = convfact*3.0;
      var width = convfact*31.0;
      var height = convfacth*30.0;
      $( "#dialog123" ).dialog({
        autoOpen: false,
        show: {
            effect: 'fade',
            duration: 1000
        }
      });
      $( "#opener123" ).on( "click", function() {
        if ( $(window).height()*0.3 < 200.0)
        {
          return;
        }
        else{
          $( "#dialog123" ).dialog( "open" );
          $("#headofpage").addClass("yellowhead");
        }
      });
  });
  $( function() {
      $( "#dialog223" ).dialog({
        autoOpen: false,
        show: {
            effect: 'fade',
            duration: 1000
        }
      });

      $( "#opener223" ).on( "click", function() {
        if ( $(window).height()*0.3 < 200.0)
        {
          return;
        }
        else{
          $( "#dialog223" ).dialog( "open" );
          $("#headofpage").addClass("yellowhead");
        }
      });
  });

  $( function() {
      $( "#dialog323" ).dialog({
        autoOpen: false,
        show: {
            effect: 'fade',
            duration: 1000
        }
      });

      $( "#opener323" ).on( "click", function() {
        if ( $(window).height()*0.3 < 200.0)
        {
          return;
        }
        else{
          $( "#dialog323" ).dialog( "open" );
          $("#headofpage").addClass("yellowhead");
        }
      });
  });
  $( function() {
      $( "#dialog423" ).dialog({
        autoOpen: false,
        show: {
            effect: 'fade',
            duration: 1000
        }
      });
      $( "#opener423" ).on( "click", function() {
        if ( $(window).height()*0.3 < 200.0)
        {
          return;
        }
        else{
          $( "#dialog423" ).dialog( "open" );
          $("#headofpage").addClass("yellowhead");
        }
      });
  });
  $(".ui-dialog-titlebar-close").click(function(){
    $("#headofpage").removeClass("yellowhead");
  });
  $(document).ready(function() {
    $('.tooltip').tooltipster({
      theme: 'tooltipster-shadow',
      animation: 'grow',
       'maxWidth': 270,
                    // set max width of tooltip box
      //contentCloning: true,
      minIntersection: 8,
      trigger: 'custom',
                    // add custom trigger
      triggerOpen: {
                        // open tooltip when element is clicked, tapped (mobile) or hovered
        click: true,
        tap: true,
        mouseenter: true
      },
      triggerClose: {
                        // close tooltip when element is clicked again, tapped or when the mouse leaves it
        click: true,
        scroll: false,
                        // ensuring that scrolling mobile is not tapping!
        tap: true,
        mouseleave: true
      }
    });
  });

         </script>
    </head>

    <body style="background-color:#F0F0F7">

      <nav class="navbar navbar-expand-sm" style="padding:6px 16px;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <p style="color:white;font-size:1.5em;margin-bottom:0px;font-weight:600;">STATE WISE CRASH DATA</p>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <p style="color:white;font-size:1.2em;margin-bottom:0px;">Every minute a road accident happens in India!</p>
          </li>
        </ul>
      </nav>

      <div class="container-fluid" style="margin-top:15px;">
        <nav class="navbar sideone" style="float:left;margin-right:0px;top:0; color:white;display:flex; align-items:baseline;">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link year" data="2007" >2007</a>
        </li>
        <li class="nav-item">
          <a class="nav-link year" data="2015" >2015</a>
        </li>
        <li class="nav-item">
          <a class="nav-link year" data="2016">2016</a>
        </li>
        <li class="nav-item">
          <a class="nav-link year" data="2017">2017</a>
        </li>
        <!--For year 2018 -->
        <li class="nav-item active">
          <a class="nav-link year" data="2018">2018</a>
        </li>

        <li class="nav-item">
          <a class="nav-link year dropdown-btn" data="compare" id="compare">
            Compare <br /> 2007 <br /> vs <br />2017
              <!-- <i class="fa fa-caret-down"></i>
            <div class="dropdown-container" style="display:none;"> -->
              <!-- <select name="year1">
                <option value="2007">2007</option>
              </select><br />
              vs<br />
              <select name="year2">
                <option value="2017">2017</option>
              </select><br /> -->
              <!-- <select><option value="2007">2007</option></select><br />
              <a>vs</a> <br />
              <select><option value="2017">2017</option></select><br />
              <button style="background-color:#43425D;color:white;border:1px solid #43425D;margin-top:10px;margin-bottom:10px" id="compare">Compare</button> -->
              <!-- <a style="color:white" id="compare"><span></span></a>
            </div> -->
          </a>
        </li>
      </ul>
    </nav>

    <div class="row">
      <div class="col-lg-5" style="background-color:white;">
        <h5 style="text-align:center;color:#43425D;">Hover over any state to get details of the road crashes.</h5>
          <div id="map2016" class="map hide w3-animate-opacity" style="height:431px"></div>
          <div id="map2017" class="map hide w3-animate-opacity" style="height:431px;"></div>
          <div id="map2015" class="map hide w3-animate-opacity" style="height:431px;"></div>
          <div id="map2007" class="map hide w3-animate-opacity" style="height:431px;"></div>

          <!--For year 2018 -->
          <div id="map2018" class="map w3-animate-opacity" style="height:431px;"></div>

          <h5>Cause of Accidents</h5>
          <p style="margin-bottom:0.5rem;"><span style="border-left:5px solid #A3A0FB;" id="l-overspeeding">&nbsp;OverSpeeding &nbsp;&nbsp;</span>
            <span style="border-left:5px solid #55D8FE;" id="l-wrongside">&nbsp;Driving on Wrong Side &nbsp;&nbsp;</span>
            <span style="border-left:5px solid #FF8373;" id="l-overtaking">&nbsp;Overtaking &nbsp;&nbsp;</span>
            <span style="border-left:5px solid #FFDA83;" id="l-mobile">&nbsp;Use of Mobile/Driver Fatigue etc &nbsp;&nbsp;</span>
            <span style="border-left:5px solid #34435E;e" id="l-noviolation">&nbsp;No Violation &nbsp;&nbsp;</span>
            <span style="border-left:5px solid #55D8FE;display:none" id="l-drunkdriving">&nbsp;Drunk & Drive &nbsp;&nbsp;</span>
            <span style="border-left:5px solid #FF8373;display:none" id="l-improperpassing">&nbsp;Improper Passing &nbsp;&nbsp;</span>
            <span style="border-left:5px solid #FFDA83;display:none" id="l-improperdirection">&nbsp;Improper Direction &nbsp;&nbsp;</span>
            <span style="border-left:5px solid #A3A0FB;display:none" id="l-overloading">&nbsp;OverLoading &nbsp;&nbsp;</span>
            <span style="border-left:5px solid #FF8373;display:none" id="l-defect">&nbsp;Defect in Road Condition &nbsp;&nbsp;</span>
            <span style="border-left:5px solid #AFD35D;" id="l-unknown">&nbsp;Other Causes/Unknown &nbsp;&nbsp;</span>
          <br /><p style="display:flex;margin-bottom:0.5rem;">
            <span id="overspeeding" style="background-color:#A3A0FB;color:#A3A0FB;width:0%">.</span>
            <span id="wrongside" style="background-color:#55D8FE;color:#55D8FE;width:0%">.</span>
            <span id="overtaking" style="background-color:#FF8373;color:#FF8373;width:0%">.</span>
            <span id="useofmobile" style="background-color:#FFDA83;color:#FFDA83;width:0%">.</span>
            <span id="noviolation" style="background-color:#34435E;color:#34435E;width:0%">.</span>
            <span id="drunkdriving" style="background-color:#55D8FE;color:#55D8FE;width:0%">.</span>
            <span id="improperpassing" style="background-color:#FF8373;color:#FF8373;width:0%">.</span>
            <span id="improperdirection" style="background-color:#FFDA83;color:#FFDA83;width:0%">.</span>
            <span id="overloading" style="background-color:#A3A0FB;color:#A3A0FB;width:0%">.</span>
            <span id="defect" style="background-color:#FF8373;color:#FF8373;width:0%">.</span>
            <span id="othercauses" style="background-color:#AFD35D;color:#AFD35D;width:0%">.</span>

          </p>
            <!-- color paragraph -->
          </p>
      </div>
      <div class="col-lg-3" style="padding:10px;background-color:white;" >
        <div>
          <h4 style="text-align:center;font-weight:800;font-family:'Source Sans Pro',sans-serif;" id="state"></h4>
          <p style="color:#43425D;margin-bottom:4px;">
            No. of Deaths(Road Users)
          </p>
          <div>
          <span><img src="icon/png/man.png" alt="Pedestrian" style="width:35px;">&nbsp;Pedestrian </span><span style="float:right;" id="pedestrian">
            </span><br />
          <span ><img src="icon/png/Scooter.png" alt="Scooter" style="margin-top:5px;width:35px;">&nbsp;2 Wheelers </span><span style="float:right;" id="two-wheelers">
          </span><br />
          <span ><img src="icon/png/Car 3.png" alt="4 wheelers" style="margin-top:5px;width:35px;">&nbsp;4 Wheelers </span><span style="float:right;" id="four-wheelers">
          </span><br/>
          <span ><img src="icon/png/Truck1.png" alt="Heavy Vehicle" style="margin-top:5px;width:35px;">&nbsp;Heavy Vehicle </span><span style="float:right;" id="heavy-vehicle">
          </span> <br />
          <span id="othericon" ><img src="icon/png/wheel.png" alt="other" style="margin-top:5px;width:35px;">&nbsp;Others </span><span style="float:right;" id="others">
          </span> <br />
          </div>
        </div>
        <hr>
        <h5 style="text-align:center;font-weight:600;">Fatality Age Group Data (No. of person)</h5>
        <div class="row" style="padding-left:20px;padding-right:10px;">
          <div class="col-lg-6">
            < 18 year
          </div>
          <div class="col-lg-6" id="lt18" style="text-align:right">

          </div>
          </div>
          <div class="row" style="padding-left:20px;padding-right:10px;">
            <div class="col-lg-6">
              18-35 years
            </div>
            <div class="col-lg-6" id="18-35" style="text-align:right">

            </div>
            </div>
            <div class="row " style="padding-left:20px;padding-right:10px;">
              <div class="col-lg-6" >
                35-60 years
              </div>
              <div class="col-lg-6" id="35-60" style="text-align:right">

              </div>
              </div>
              <div class="row" style="padding-left:20px;padding-right:10px;">
                <div class="col-lg-6" >
                  >60 year
                </div>
                <div class="col-lg-6" id="gt60" style="text-align:right">

                </div>
                </div>
                <div class="row" style="padding-left:20px;padding-right:10px;">
                  <div class="col-lg-6">
                    Unknown age
                  </div>
                  <div class="col-lg-6" id="unknown-age" style="text-align:right">

                  </div>
              </div>
              <hr>
              <div class="row" style="padding-left:20px;padding-right:10px;">
                <div class="col-lg-6" >
                  <b>Total accidents</b>
                </div>
                <div class="col-lg-6" id="total_a" style="text-align:right">
                </div>
                </div>
                <div class="row" style="padding-left:20px;padding-right:10px;">
                  <div class="col-lg-6">
                  <b>Total injured</b>
                  </div>
                  <div class="col-lg-6" id="total_i" style="text-align:right">
                  </div>
                  </div>
                  <div class="row" style="padding-left:20px;padding-right:10px;">
                    <div class="col-lg-6">
                    <b>Total Deaths</b>
                    </div>
                    <div class="col-lg-6" id="total_d" style="text-align:right">
                    </div>
                    </div>

      </div>
      <div class="col-lg-3" style="padding-top:0px">
        <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body" style="padding: 10px;">
            <h6 class="card-title">Refresh in : <span class="refresh" style="font-weight:600"></span></h6>
            <div class="row refreshrow" style="height:120px;padding:0px 10px 10px;margin-bottom:7px;">
              <div class="col-lg-4" style="padding-left:5px;padding-right:5px;text-align:center;">
                <!-- <div style="background-color:#A3A0FB;color:white;height:-webkit-fill-available;" class="accident-number1">

                </div> -->
                <div style="background-color:#A3A0FB;color:white;width: 90px; height: 90px; border-radius: 45px;" class="accident-number1">
                  <!-- <div  style="position:relative; left: 19px; top: 19px; width: 90px; height: 90px; color: white; text-align:center;"></div> -->
                </div><span style="font-weight:600;">Accidents</span>
              </div>
              <div class="col-lg-4" style="padding-left:5px;padding-right:5px;text-align:center;">
                <div style="background-color:#FFDA83;color:white;width: 90px; height: 90px; border-radius: 45px;" class="injury-number1">
                  <!-- <span id="injured"></span> -->
                </div><span style="font-weight:600;">Injured</span>
              </div>
              <div class="col-lg-4" style="padding-left:5px;padding-right:5px;text-align:center;">
                <div style="background-color:#FF8373;color:white;width: 90px; height: 90px; border-radius: 45px;" class="kill-number1">
                  <!-- <span id="died"></span> -->
                </div><span style="font-weight:600;">Died</span>
              </div>
            </div>
            <p style="margin-bottom:0px; text-align:center;font-size:0.8em;">As per last year trend till date this year</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12" style="margin-top:10px">
        <div class="card">
          <div class="card-body" style="padding:8px;">
            <h5 class="card-title" style="font-weight:600">Resources</h5>
            <div style="height: 114px;overflow-y: scroll;overflow-x:hidden;">
              <p class="card-text" style="color:#4D4F5C;background-color:#FAFAFA;font-size:1em;margin-bottom:0.2rem;border-bottom:0px solid #4D4F5C;font-weight:600;">Nov 2019: <a target="_blank" style = "color: #4D4F5C;" href="https://fly-wheel.com/paris-peace-forum-2019-presents-indias-road-safety-solutions/amp/">IRSC at Paris Peace Forum 2019</a></p>
               <p class="card-text" style="color:#4D4F5C;background-color:#FAFAFA;font-size:1em;margin-bottom:0.2rem;border-bottom:0px solid #4D4F5C;font-weight:600;">Nov 2019: <a target="_blank" style = "color: #4D4F5C;" href="https://www.motoroids.com/news/second-edition-of-toyota-hackathon-for-road-safety-to-be-held-in-bangalore/">Toyota Hackathon 2019</a></p>
              <p class="card-text" style="color:#4D4F5C;background-color:#FAFAFA;font-size:1em;margin-bottom:0.2rem;border-bottom:0px solid #4D4F5C;font-weight:600;">Aug 2017: <a target="_blank" style = "color: #4D4F5C;" href="https://www.road-safety.co.in/isafe/">iSAFE launched by IRSC</a></p>
              <p class="card-text" style="color:#4D4F5C;background-color:#FAFAFA;font-size:1em;margin-bottom:0.2rem;border-bottom:0px solid #4D4F5C;font-weight:600;">Aug 2017: <a target="_blank" style = "color: #4D4F5C;" href="https://www.unece.org/fileadmin/DAM/trans/publications/WP29/United_Nations_Motorcycle_Helmet_Study.pdf">The United Nations Motorcycle Helmet Study</a></p>
              <p class="card-text" style="color:#4D4F5C;background-color:#FAFAFA;font-size:1em;margin-bottom:0.2rem;border-bottom:0px solid #4D4F5C;font-weight:600;">Aug 2017: <a target="_blank" style = "color: #4D4F5C;" href = "http://www.searo.who.int/publications/journals/seajph/issues/thevalidityofselfreportedhelmethelmetuseamongmotocyclistinindia.pdf">The validity of self-reported helmet in India</a></p>
              <p class="card-text" style="color:#4D4F5C;background-color:#FAFAFA;font-size:1em;margin-bottom:0.2rem;border-bottom:0px solid #4D4F5C;font-weight:600;">Aug 2017: <a target="_blank" style = "color: #4D4F5C;" href="http://www.who.int/violence_injury_prevention/publications/road_traffic/media-campaigns/en/">Violence and Injury Prevention</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12" style="margin-top:10px">
        <div class="card">
          <div class="card-body">
            <iframe id="nitingatkari" src="https://www.youtube.com/embed/D6hHJmqdsH8?list=UUC9OIqNPYnqsGQkG-JJLvxw" frameborder="0" allowfullscreen="" width="260"></iframe>
            <p style="color:#43425D;margin-top:10px;font-weight:600">Contribute some similar impactful material or ideas to our resource bank</p>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>

      </div>
    <div class="container-fluid" >
      <nav class="navbar navbar-expand-sm" style="background-color:white; margin-bottom:5px;padding-top:10px; padding-bottom:10px;" >
        <ul class="navbar-nav">
          <li class="nav-item">
            <p style="color: #43425D;font-size:1em;margin-bottom:0px;font-weight:600;">Developed and Maintained by IRSC</p>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <p style="color:#43425D;font-size:1em;margin-bottom:0px;font-weight:600;">Credits: Dipak K. Dash, WHO and Johns Hopkins Bloomberg Fellow</p>
          </li>
        </ul>
      </nav>
    </div>
    <?php
      //casualities-2016
       function calcCasuality($stateName) {
        $filename = './data4.csv';
        $handle = fopen($filename,'r');
        while($data = fgetcsv($handle)) {
          if($data[3] == $stateName) {
            // print_r($data);
            return json_encode(array(
              'total' => $data[0],
              'injured' => $data[1],
              'deaths' => $data[2],
            ));
          }
        }
        fclose($handle);
      }

      //fatality age group data-2016
      function fatalityage($stateName) {
       $filename = './data5.csv';
       $handle = fopen($filename,'r');
       while($data = fgetcsv($handle)) {
         if($data[0] == $stateName) {
           // print_r($data);
           return json_encode(array(
             'lt18' => $data[1],
             'thirtyfive' => $data[2],
             'sixty' => $data[3],
             'gt60' => $data[4],
             'unknown' => $data[5],
             'pedestrian' => $data[6],
             'twowheelers' => $data[7],
             'fourwheelers' => $data[8],
             'trucks' => $data[9],
           ));
         }
       }
       fclose($handle);
     }

     //Reasons-2016
     function reasons($stateName) {
      $filename = './data3new.csv';
      $handle = fopen($filename,'r');
      while($data = fgetcsv($handle)) {
        if($data[0] == $stateName) {
          // print_r($data);
          return json_encode(array(
            'overspeeding' => $data[1],
            'wrongside' => $data[2],
            'overtaking' => $data[3],
            'useofmobile' => $data[4],
            'othercauses' => $data[5],
          ));
        }
      }
      fclose($handle);
    }


    //casualities-2017
     function calcCasuality2017($stateName) {
      $filename = './data6.csv';
      $handle = fopen($filename,'r');
      while($data = fgetcsv($handle)) {
        if($data[3] == $stateName) {
          // print_r($data);
          return json_encode(array(
            'total' => $data[0],
            'injured' => $data[1],
            'deaths' => $data[2],
          ));
        }
      }
      fclose($handle);
    }

    //fatality age group data-2017
    function fatalityage2017($stateName) {
     $filename = './data7.csv';
     $handle = fopen($filename,'r');
     while($data = fgetcsv($handle)) {
       if($data[0] == $stateName) {
         // print_r($data);
         return json_encode(array(
           'lt18' => $data[1],
           'thirtyfive' => $data[2],
           'sixty' => $data[3],
           'gt60' => $data[4],
           'unknown' => $data[5],
           'pedestrian' => $data[6],
           'twowheelers' => $data[7],
           'fourwheelers' => $data[8],
           'trucks' => $data[9],
         ));
       }
     }
     fclose($handle);
   }

   //Reasons-2017
   function reasons2017($stateName) {
    $filename = './data8.csv';
    $handle = fopen($filename,'r');
    while($data = fgetcsv($handle)) {
      if($data[0] == $stateName) {
        // print_r($data);
        return json_encode(array(
          'overspeeding' => $data[7],
          'wrongside' => $data[8],
          'noviolation' => $data[9],
          'overtaking' => $data[10],
          'useofmobile' => $data[11],
          'othercauses' => $data[12],
        ));
      }
    }
    fclose($handle);
  }

  //casualities-2015
   function calcCasuality2015($stateName) {
    $filename = './data1.csv';
    $handle = fopen($filename,'r');
    while($data = fgetcsv($handle)) {
      if($data[4] == $stateName) {
         // print_r($data);
        return json_encode(array(
          'total' => $data[0],
          'injured' => $data[1],
          'deaths' => $data[2],
        ));
      }
    }
    fclose($handle);
  }

  //fatality age group data-2015
  function fatalityage2015($stateName) {
   $filename = './data2.csv';
   $handle = fopen($filename,'r');
   while($data = fgetcsv($handle)) {
     if($data[0] == $stateName) {
       // print_r($data);
       return json_encode(array(
         'lt18' => $data[1],
         'thirtyfive' => $data[2],
         'sixty' => $data[3],
         'gt60' => $data[4],
         'unknown' => $data[5],
         'pedestrian' => $data[6],
         'twowheelers' => $data[7],
         'fourwheelers' => $data[8],
         'trucks' => $data[9],
       ));
     }
   }
   fclose($handle);
 }

 //Reasons-2015
 function reasons2015($stateName) {
  $filename = './data3old.csv';
  $handle = fopen($filename,'r');
  while($data = fgetcsv($handle)) {
    if($data[0] == $stateName) {
      // print_r($data);
      return json_encode(array(
        'overspeeding' => $data[1],
        'drunkdriving' => $data[2],
        'improperpassing' => $data[3],
        'improperdirection' => $data[4],
      ));
    }
  }
  fclose($handle);
}

//casualities-2007
 function calcCasuality2007($stateName) {
  $filename = './data12007.csv';
  $handle = fopen($filename,'r');
  while($data = fgetcsv($handle)) {
    if($data[3] == $stateName) {
       // print_r($data);
      return json_encode(array(
        'total' => $data[0],
        'injured' => $data[1],
        'deaths' => $data[2],
      ));
    }
  }
  fclose($handle);
}

//fatality age group data-2007
function fatalityage2007($stateName) {
 $filename = './data22007.csv';
 $handle = fopen($filename,'r');
 while($data = fgetcsv($handle)) {
   if($data[1] == $stateName) {
     // print_r($data);
     return json_encode(array(
       // 'lt18' => $data[1],
       // 'thirtyfive' => $data[2],
       // 'sixty' => $data[3],
       // 'gt60' => $data[4],
       'unknown' => $data[5],
       'pedestrian' => $data[6],
       'twowheelers' => $data[7],
       'fourwheelers' => $data[8],
       'trucks' => $data[9],
     ));
   }
 }
 fclose($handle);
}

//Reasons-2007
function reasons2007($stateName) {
$filename = './data3old2007.csv';
$handle = fopen($filename,'r');
while($data = fgetcsv($handle)) {
  if($data[6] == $stateName) {
    // print_r($data);
    return json_encode(array(
      'overloading' => $data[2],
      'drunkdriving' => $data[1],
      'defect' => $data[3],
      'othercauses' => $data[4],
    ));
  }
}
fclose($handle);
}


//For year 2018
//casualities-2018
 function calcCasuality2018($stateName) {
  $filename = './data6copy.csv';
  $handle = fopen($filename,'r');
  while($data = fgetcsv($handle)) {
    if($data[3] == $stateName) {
      // print_r($data);
      return json_encode(array(
        'total' => $data[0],
        'injured' => $data[1],
        'deaths' => $data[2],
      ));
    }
  }
  fclose($handle);
}

//fatality age group data-2018
function fatalityage2018($stateName) {
 $filename = './data7copy.csv';
 $handle = fopen($filename,'r');
 while($data = fgetcsv($handle)) {
   if($data[0] == $stateName) {
     // print_r($data);
     return json_encode(array(
       'lt18' => $data[1],
       'thirtyfive' => $data[2],
       'sixty' => $data[3],
       'gt60' => $data[4],
       'unknown' => $data[5],
       'pedestrian' => $data[6],
       'twowheelers' => $data[7],
       'fourwheelers' => $data[8],
       'trucks' => $data[9],
       'other' => $data[10],
     ));
   }
 }
 fclose($handle);
}

//Reasons-2018
function reasons2018($stateName) {
$filename = './data8copy.csv';
$handle = fopen($filename,'r');
while($data = fgetcsv($handle)) {
  if($data[0] == $stateName) {
    // print_r($data);
    return json_encode(array(
      'overspeeding' => $data[7],
      'wrongside' => $data[8],
      'noviolation' => $data[9],
      'overtaking' => $data[10],
      'useofmobile' => $data[11],
      'othercauses' => $data[12],
    ));
  }
}
fclose($handle);
}

    ?>
      <script type="text/javascript">
      //India
      $("#map2016").on('mouseenter','rect',function(){
         let stats = <?php echo calcCasuality('India'); ?>;
          $('#total_a').text(stats.total);
          $('#total_i').text(stats.injured);
          $('#total_d').text(stats.deaths);
      });
      $("#map2016").on('mouseenter','rect',function(){
        let stats = <?php echo fatalityage('India'); ?>;
        $('#lt18').text(stats.lt18);
        $('#18-35').text(stats.thirtyfive);
        $('#35-60').text(stats.sixty);
        $('#gt60').text(stats.gt60);
        $('#unknown-age').text(stats.unknown);
        $('#pedestrian').text(stats.pedestrian);
        $('#two-wheelers').text(stats.twowheelers);
        $('#four-wheelers').text(stats.fourwheelers);
        $('#heavy-vehicle').text(stats.trucks);
         $('#state').text("INDIA");
      });
      $("#map2016").on('mouseenter','rect',function(){
         let stats = <?php echo reasons('India'); ?>;
          $('#overspeeding').css('width',stats.overspeeding+"%");
          $('#wrongside').css('width',stats.wrongside+"%");
          $('#overtaking').css('width',stats.overtaking+"%");
          $('#useofmobile').css('width',stats.useofmobile+"%");
          $('#othercauses').css('width',stats.othercauses+"%");
      });

        //Jammu and Kashmir
        $("#map2016").on('mouseenter','.sm_state_36',function(){
          let stats = <?php echo calcCasuality('Jammu & Kashmir'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_36',function(){
          let stats = <?php echo fatalityage('Jammu & Kashmir'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("JAMMU AND KASHMIR");
        });
        $("#map2016").on('mouseenter','.sm_state_36',function(){
           let stats = <?php echo reasons('Jammu & Kashmir'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Himachal Pradesh
        $("#map2016").on('mouseenter','.sm_state_14',function(){
          let stats = <?php echo calcCasuality('Himachal Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_14',function(){
          let stats = <?php echo fatalityage('Himachal Pradesh'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("HIMACHAL PRADESH");
        });
        $("#map2016").on('mouseenter','.sm_state_14',function(){
           let stats = <?php echo reasons('Himachal Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Punjab
        $("#map2016").on('mouseenter','.sm_state_28',function(){
          let stats = <?php echo calcCasuality('Punjab'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_28',function(){
          let stats = <?php echo fatalityage('Punjab'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("PUNJAB");
        });
        $("#map2016").on('mouseenter','.sm_state_28',function(){
           let stats = <?php echo reasons('Punjab'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Punjab
        $("#map2016").on('mouseenter','.sm_state_34',function(){
          let stats = <?php echo calcCasuality('Uttarakhand'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_34',function(){
          let stats = <?php echo fatalityage('Uttarakhand'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("UTTARANCHAL");
        });
        $("#map2016").on('mouseenter','.sm_state_34',function(){
           let stats = <?php echo reasons('Uttarakhand'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Haryana
        $("#map2016").on('mouseenter','.sm_state_13',function(){
          let stats = <?php echo calcCasuality('Haryana'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_13',function(){
          let stats = <?php echo fatalityage('Haryana'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("HARYANA");
        });
        $("#map2016").on('mouseenter','.sm_state_13',function(){
           let stats = <?php echo reasons('Haryana'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Uttar Pradesh
        $("#map2016").on('mouseenter','.sm_state_33',function(){
          let stats = <?php echo calcCasuality('Uttar Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_33',function(){
          let stats = <?php echo fatalityage('Uttar Pradesh'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("UTTAR PRADESH");
        });
        $("#map2016").on('mouseenter','.sm_state_33',function(){
           let stats = <?php echo reasons('Uttar Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });


        //Rajasthan
        $("#map2016").on('mouseenter','.sm_state_29',function(){
          let stats = <?php echo calcCasuality('Rajasthan'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_29',function(){
          let stats = <?php echo fatalityage('Rajasthan'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("RAJASTHAN");
        });
        $("#map2016").on('mouseenter','.sm_state_29',function(){
           let stats = <?php echo reasons('Rajasthan'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Delhi
        $("#map2016").on('mouseenter','.sm_state_10',function(){
          let stats = <?php echo calcCasuality('Delhi'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_10',function(){
          let stats = <?php echo fatalityage('Delhi'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("DELHI");
        });
        $("#map2016").on('mouseenter','.sm_state_10',function(){
           let stats = <?php echo reasons('Delhi'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Bihar
        $("#map2016").on('mouseenter','.sm_state_5',function(){
          let stats = <?php echo calcCasuality('Bihar'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_5',function(){
          let stats = <?php echo fatalityage('Bihar'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("BIHAR");
        });
        $("#map2016").on('mouseenter','.sm_state_5',function(){
           let stats = <?php echo reasons('Bihar'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Sikkim
        $("#map2016").on('mouseenter','.sm_state_30',function(){
          let stats = <?php echo calcCasuality('Sikkim'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_30',function(){
          let stats = <?php echo fatalityage('Sikkim'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("SIKKIM");
        });
        $("#map2016").on('mouseenter','.sm_state_30',function(){
           let stats = <?php echo reasons('Sikkim'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //West Bengal
        $("#map2016").on('mouseenter','.sm_state_35',function(){
          let stats = <?php echo calcCasuality('West Bengal'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_35',function(){
          let stats = <?php echo fatalityage('West Bengal'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("WEST BENGAL");
        });
        $("#map2016").on('mouseenter','.sm_state_35',function(){
           let stats = <?php echo reasons('West Bengal'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });


        //Assam
        $("#map2016").on('mouseenter','.sm_state_4',function(){
          let stats = <?php echo calcCasuality('Assam'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_4',function(){
          let stats = <?php echo fatalityage('Assam'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("ASSAM");
        });
        $("#map2016").on('mouseenter','.sm_state_4',function(){
           let stats = <?php echo reasons('Assam'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Tripura
        $("#map2016").on('mouseenter','.sm_state_32',function(){
          let stats = <?php echo calcCasuality('Tripura'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_32',function(){
          let stats = <?php echo fatalityage('Tripura'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("TRIPURA");
        });
        $("#map2016").on('mouseenter','.sm_state_32',function(){
           let stats = <?php echo reasons('Tripura'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Meghalaya
        $("#map2016").on('mouseenter','.sm_state_23',function(){
          let stats = <?php echo calcCasuality('Meghalaya'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_23',function(){
          let stats = <?php echo fatalityage('Meghalaya'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MEGHALAYA");
        });
        $("#map2016").on('mouseenter','.sm_state_23',function(){
           let stats = <?php echo reasons('Meghalaya'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Mizoram
        $("#map2016").on('mouseenter','.sm_state_24',function(){
          let stats = <?php echo calcCasuality('Mizoram'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_24',function(){
          let stats = <?php echo fatalityage('Mizoram'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MIZORAM");
        });
        $("#map2016").on('mouseenter','.sm_state_24',function(){
           let stats = <?php echo reasons('Mizoram'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Manipur
        $("#map2016").on('mouseenter','.sm_state_22',function(){
          let stats = <?php echo calcCasuality('Manipur'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_22',function(){
          let stats = <?php echo fatalityage('Manipur'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MANIPUR");
        });
        $("#map2016").on('mouseenter','.sm_state_22',function(){
           let stats = <?php echo reasons('Manipur'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Nagaland
        $("#map2016").on('mouseenter','.sm_state_25',function(){
          let stats = <?php echo calcCasuality('Nagaland'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_25',function(){
          let stats = <?php echo fatalityage('Nagaland'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("NAGALAND");
        });
        $("#map2016").on('mouseenter','.sm_state_25',function(){
           let stats = <?php echo reasons('Nagaland'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Arunachal Pradesh
        $("#map2016").on('mouseenter','.sm_state_3',function(){
          let stats = <?php echo calcCasuality('Arunachal Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_3',function(){
          let stats = <?php echo fatalityage('Arunachal Pradesh'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("ARUNACHAL PRADESH");
        });
        $("#map2016").on('mouseenter','.sm_state_3',function(){
           let stats = <?php echo reasons('Arunachal Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Jharkhand
        $("#map2016").on('mouseenter','.sm_state_16',function(){
          let stats = <?php echo calcCasuality('Jharkhand'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_16',function(){
          let stats = <?php echo fatalityage('Jharkhand'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("JHARKHAND");
        });
        $("#map2016").on('mouseenter','.sm_state_16',function(){
           let stats = <?php echo reasons('Jharkhand'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Chhattisgarh
        $("#map2016").on('mouseenter','.sm_state_7',function(){
          let stats = <?php echo calcCasuality('Chhattisgarh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_7',function(){
          let stats = <?php echo fatalityage('Chhattisgarh'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("CHHATTISGARH");
        });
        $("#map2016").on('mouseenter','.sm_state_7',function(){
           let stats = <?php echo reasons('Chhattisgarh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Madhya Pradesh
        $("#map2016").on('mouseenter','.sm_state_20',function(){
          let stats = <?php echo calcCasuality('Madhya Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_20',function(){
          let stats = <?php echo fatalityage('Madhya Pradesh'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MADHYA PRADESH");
        });
        $("#map2016").on('mouseenter','.sm_state_20',function(){
           let stats = <?php echo reasons('Madhya Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Gujarat
        $("#map2016").on('mouseenter','.sm_state_12',function(){
          let stats = <?php echo calcCasuality('Gujarat'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_12',function(){
          let stats = <?php echo fatalityage('Gujarat'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("GUJARAT");
        });
        $("#map2016").on('mouseenter','.sm_state_12',function(){
           let stats = <?php echo reasons('Gujarat'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Orissa
        $("#map2016").on('mouseenter','.sm_state_26',function(){
          let stats = <?php echo calcCasuality('Odisha'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_26',function(){
          let stats = <?php echo fatalityage('Orissa'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("ORISSA");
        });
        $("#map2016").on('mouseenter','.sm_state_26',function(){
           let stats = <?php echo reasons('Odisha'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Maharashtra
        $("#map2016").on('mouseenter','.sm_state_21',function(){
          let stats = <?php echo calcCasuality('Maharashtra'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_21',function(){
          let stats = <?php echo fatalityage('Maharashtra'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MAHARASHTRA");
        });
        $("#map2016").on('mouseenter','.sm_state_21',function(){
           let stats = <?php echo reasons('Maharashtra'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Telangana
        $("#map2016").on('mouseenter','.sm_state_37',function(){
          let stats = <?php echo calcCasuality('Telangana'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_37',function(){
          let stats = <?php echo fatalityage('Telangana'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("TELANGANA");
        });
        $("#map2016").on('mouseenter','.sm_state_37',function(){
           let stats = <?php echo reasons('Telangana'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Andhra Pradesh
        $("#map2016").on('mouseenter','.sm_state_2',function(){
          let stats = <?php echo calcCasuality('Andhra Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_2',function(){
          let stats = <?php echo fatalityage('Andhra Pradesh'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("ANDHRA PRADESH");
        });
        $("#map2016").on('mouseenter','.sm_state_2',function(){
           let stats = <?php echo reasons('Andhra Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Goa
        $("#map2016").on('mouseenter','.sm_state_11',function(){
          let stats = <?php echo calcCasuality('Goa'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_11',function(){
          let stats = <?php echo fatalityage('Goa'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("GOA");
        });
        $("#map2016").on('mouseenter','.sm_state_11',function(){
           let stats = <?php echo reasons('Goa'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Karnataka
        $("#map2016").on('mouseenter','.sm_state_17',function(){
          let stats = <?php echo calcCasuality('Karnataka'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_17',function(){
          let stats = <?php echo fatalityage('Karnataka'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("KARNATAKA");
        });
        $("#map2016").on('mouseenter','.sm_state_17',function(){
           let stats = <?php echo reasons('Karnataka'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Tamil Nadu
        $("#map2016").on('mouseenter','.sm_state_31',function(){
          let stats = <?php echo calcCasuality('Tamil Nadu'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_31',function(){
          let stats = <?php echo fatalityage('Tamil Nadu'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("TAMIL NADU");
        });
        $("#map2016").on('mouseenter','.sm_state_31',function(){
           let stats = <?php echo reasons('Tamil Nadu'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Kerala
        $("#map2016").on('mouseenter','.sm_state_18',function(){
          let stats = <?php echo calcCasuality('Kerala'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2016").on('mouseenter','.sm_state_18',function(){
          let stats = <?php echo fatalityage('Kerala'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("KERALA");
        });
        $("#map2016").on('mouseenter','.sm_state_18',function(){
           let stats = <?php echo reasons('Kerala'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        var countdown1 = 210;
        var countdownNumberEl1 = document.getElementsByClassName('refresh')[0];
        countdownNumberEl1.text = countdown1;
        var today = new Date();
        var dstring = today.toDateString();
        var date = parseInt(dstring.substring(8,10));
        var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        var month = parseInt(months.indexOf(dstring.substring(4,7)));
        var accinum1 = document.getElementsByClassName('accident-number1')[0];
        var innum1 = document.getElementsByClassName('injury-number1')[0];
        var killnum1 = document.getElementsByClassName('kill-number1')[0];
        var innumber1 = parseInt((month*30 + date)/370*500000);
        var accinumber1 = parseInt((month*30 + date)/370*494000);
        var killnumber1 = parseInt((month*30 + date)/370*150000);

        // accinum1.innerHTML = "<p style='color: #fff;font-size: 20px;position: absolute;left: 22px;top: 35;'>" + accinumber1 + "</p>";
        accinum1.innerHTML = "<div  style='position:relative; left: 19px; top: 18px; width: 90px; height: 90px; color: white; text-align:center;'>" + accinumber1 + "</div>";
        // innum1.innerHTML = "<p style='color: #fff;font-size: 20px;position: absolute;left: 22px;top: 35;'>" + innumber1 + "</p>";
        innum1.innerHTML = "<div  style='position:relative; left: 19px; top: 18px; width: 90px; height: 90px; color: white; text-align:center;'" + innumber1 + "</div>";
        // killnum1.innerHTML = "<p style='color: #fff;font-size: 20px;position: absolute;left: 22px;top: 35;'>" + killnumber1 + "</p>";
        killnum1.innerHTML = "<p style='position:relative; left: 19px; top: 18px; width: 90px; height: 90px; color: white; text-align:center;'>" + killnumber1 + "</div>";

        setInterval(function() {
          countdown1 = --countdown1 < 0 ? 240 : countdown1;

        if(countdown1%69 == 0) {
          innumber1++;
        }
        if(countdown1%71 == 0) {
          accinumber1++;
        }
        if(countdown1%210 == 0) {
          killnumber1++;
        }

        accinum1.innerHTML = "<p style='color: #fff;font-size: 20px;position: absolute;left: 22px;top: 35;'>" + accinumber1 + "</p>";
        innum1.innerHTML = "<p style='color: #fff;font-size: 20px;position: absolute;left: 22px;top: 35;'>" + innumber1 + "</p>";
        killnum1.innerHTML = "<p style='color: #fff;font-size: 20px;position: absolute;left: 22px;top: 35;'>" + killnumber1 + "</p>";
        var seconds = parseInt(countdown1%60)>9?parseInt(countdown1%60):("0"+parseInt(countdown1%60));
        countdownNumberEl1.textContent = "0" + parseInt(countdown1/60)  + "\:" + seconds;//// +":"+
        }, 1000);

      </script>
      <script type="text/javascript">
        <!-- click -->
         $('.year').click(function(){
          var y=$(this).attr('data');
          console.log(y);
          $('.map').addClass('hide');
          $('#map'+y).removeClass('hide');
          if(y=='2016'){
            $('#l-overspeeding').css('display','inline');
            $('#l-wrongside').css('display','inline');
            $('#l-overtaking').css('display','inline');
            $('#l-mobile').css('display','inline');
            $('#l-unknown').css('display','inline');
            $('#l-noviolation').css('display','none');
            $('#l-drunkdriving').css('display','none');
            $('#l-improperpassing').css('display','none');
            $('#l-improperdirection').css('display','none');
            $('#l-overloading').css('display','none');
            $('#l-defect').css('display','none');
            $('#noviolation').css('width','0%');
            $('#drunkdriving').css('width','0%');
            $('#improperpassing').css('width','0%');
            $('#improperdirection').css('width','0%');
            $('#overloading').css('width','0%');
            $('#defect').css('width','0%');
            $('#others').css('display','none')
            $('#othericon').css('display','none')
          }
          if(y=='2017'){
            $('#l-overspeeding').css('display','inline');
            $('#l-wrongside').css('display','inline');
            $('#l-overtaking').css('display','inline');
            $('#l-mobile').css('display','inline');
            $('#l-unknown').css('display','inline');
            $('#l-noviolation').css('display','inline');
            $('#l-drunkdriving').css('display','none');
            $('#l-improperpassing').css('display','none');
            $('#l-improperdirection').css('display','none');
            $('#l-overloading').css('display','none');
            $('#l-defect').css('display','none');
            $('#drunkdriving').css('width','0%');
            $('#improperpassing').css('width','0%');
            $('#improperdirection').css('width','0%');
            $('#overloading').css('width','0%');
            $('#defect').css('width','0%');
            $('#others').css('display','none')
            $('#othericon').css('display','none')
          }

          //For year 2018
          if(y=='2018'){
            $('#l-overspeeding').css('display','inline');
            $('#l-wrongside').css('display','inline');
            $('#l-overtaking').css('display','inline');
            $('#l-mobile').css('display','inline');
            $('#l-unknown').css('display','inline');
            $('#l-noviolation').css('display','inline');
            $('#l-drunkdriving').css('display','none');
            $('#l-improperpassing').css('display','none');
            $('#l-improperdirection').css('display','none');
            $('#l-overloading').css('display','none');
            $('#l-defect').css('display','none');
            $('#drunkdriving').css('width','0%');
            $('#improperpassing').css('width','0%');
            $('#improperdirection').css('width','0%');
            $('#overloading').css('width','0%');
            $('#defect').css('width','0%');
            $('#others').css('display','inline')
            $('#othericon').css('display','inline')
           
          }

          if(y=='2015'){
            $('#l-overspeeding').css('display','inline');
            $('#l-wrongside').css('display','none');
            $('#l-overtaking').css('display','none');
            $('#l-mobile').css('display','none');
            $('#l-unknown').css('display','none');
            $('#l-noviolation').css('display','none');
            $('#l-overloading').css('display','none');
            $('#l-defect').css('display','none');
            $('#l-drunkdriving').css('display','inline');
            $('#l-improperpassing').css('display','inline');
            $('#l-improperdirection').css('display','inline');
            $('#wrongside').css('width','0%');
            $('#overtaking').css('width','0%');
            $('#useofmobile').css('width','0%');
            $('#noviolation').css('width','0%');
            $('#othercauses').css('width','0%');
            $('#overloading').css('width','0%');
            $('#defect').css('width','0%');
            $('#others').css('display','none')
            $('#othericon').css('display','none')
          }
          if(y=='2007'){
            $('#l-overspeeding').css('display','none');
            $('#l-wrongside').css('display','none');
            $('#l-overtaking').css('display','none');
            $('#l-mobile').css('display','none');
            $('#l-unknown').css('display','inline');
            $('#l-noviolation').css('display','none');
            $('#l-overloading').css('display','inline');
            $('#l-defect').css('display','inline');
            $('#l-drunkdriving').css('display','inline');
            $('#l-improperpassing').css('display','none');
            $('#l-improperdirection').css('display','none');
            $('#overspeeding').css('width','0%');
            $('#wrongside').css('width','0%');
            $('#overtaking').css('width','0%');
            $('#useofmobile').css('width','0%');
            $('#noviolation').css('width','0%');
            $('#noviolation').css('width','0%');
            $('#improperpassing').css('width','0%');
            $('#improperdirection').css('width','0%');
            $('#others').css('display','none')
            $('#othericon').css('display','none')

            $('#lt18').text('');
            $('#18-35').text('');
            $('#35-60').text('');
            $('#gt60').text('');
            $('#unknown-age').text('');
          }
        });
        $('li > a').click(function() {
          $('li').removeClass('active');
          $(this).parent().addClass('active');
        });
      </script>

      <!--For year 2017 -->
      <script type="text/javascript">
      //India
      $("#map2017").on('mouseenter','rect',function(){
         let stats = <?php echo calcCasuality2017('India'); ?>;
          $('#total_a').text(stats.total);
          $('#total_i').text(stats.injured);
          $('#total_d').text(stats.deaths);
      });
      $("#map2017").on('mouseenter','rect',function(){
        let stats = <?php echo fatalityage2017('India'); ?>;
        $('#lt18').text(stats.lt18);
        $('#18-35').text(stats.thirtyfive);
        $('#35-60').text(stats.sixty);
        $('#gt60').text(stats.gt60);
        $('#unknown-age').text(stats.unknown);
        $('#pedestrian').text(stats.pedestrian);
        $('#two-wheelers').text(stats.twowheelers);
        $('#four-wheelers').text(stats.fourwheelers);
        $('#heavy-vehicle').text(stats.trucks);
        $('#state').text("INDIA");
      });
      $("#map2017").on('mouseenter','rect',function(){
         let stats = <?php echo reasons2017('India'); ?>;
          $('#overspeeding').css('width',stats.overspeeding+"%");
          $('#wrongside').css('width',stats.wrongside+"%");
          $('#noviolation').css('width',stats.noviolation+"%");
          $('#overtaking').css('width',stats.overtaking+"%");
          $('#useofmobile').css('width',stats.useofmobile+"%");
          $('#othercauses').css('width',stats.othercauses+"%");
      });

        //Jammu and Kashmir
        $("#map2017").on('mouseenter','.sm_state_36',function(){
          let stats = <?php echo calcCasuality2017('Jammu & Kashmir'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_36',function(){
          let stats = <?php echo fatalityage2017('Jammu & Kashmir'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("JAMMU AND KASHMIR");
        });
        $("#map2017").on('mouseenter','.sm_state_36',function(){
           let stats = <?php echo reasons2017('Jammu & Kashmir'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Himachal Pradesh
        $("#map2017").on('mouseenter','.sm_state_14',function(){
          let stats = <?php echo calcCasuality2017('Himachal Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_14',function(){
          let stats = <?php echo fatalityage2017('Himachal Pradesh'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("HIMACHAL PRADESH");
        });
        $("#map2017").on('mouseenter','.sm_state_14',function(){
           let stats = <?php echo reasons2017('Himachal Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Punjab
        $("#map2017").on('mouseenter','.sm_state_28',function(){
          let stats = <?php echo calcCasuality2017('Punjab'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_28',function(){
          let stats = <?php echo fatalityage2017('Punjab'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("PUNJAB");
        });
        $("#map2017").on('mouseenter','.sm_state_28',function(){
           let stats = <?php echo reasons2017('Punjab'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Uttarakhand
        $("#map2017").on('mouseenter','.sm_state_34',function(){
          let stats = <?php echo calcCasuality2017('Uttarakhand'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_34',function(){
          let stats = <?php echo fatalityage2017('Uttarakhand'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("UTTARANCHAL");
        });
        $("#map2017").on('mouseenter','.sm_state_34',function(){
           let stats = <?php echo reasons2017('Uttarakhand'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Haryana
        $("#map2017").on('mouseenter','.sm_state_13',function(){
          let stats = <?php echo calcCasuality2017('Haryana'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_13',function(){
          let stats = <?php echo fatalityage2017('Haryana'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("HARYANA");
        });
        $("#map2017").on('mouseenter','.sm_state_13',function(){
           let stats = <?php echo reasons2017('Haryana'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Uttar Pradesh
        $("#map2017").on('mouseenter','.sm_state_33',function(){
          let stats = <?php echo calcCasuality2017('Uttar Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_33',function(){
          let stats = <?php echo fatalityage2017('Uttar Pradesh'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("UTTAR PRADESH");
        });
        $("#map2017").on('mouseenter','.sm_state_33',function(){
           let stats = <?php echo reasons2017('Uttar Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });


        //Rajasthan
        $("#map2017").on('mouseenter','.sm_state_29',function(){
          let stats = <?php echo calcCasuality2017('Rajasthan'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_29',function(){
          let stats = <?php echo fatalityage2017('Rajasthan'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("RAJASTHAN");
        });
        $("#map2017").on('mouseenter','.sm_state_29',function(){
           let stats = <?php echo reasons2017('Rajasthan'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Delhi
        $("#map2017").on('mouseenter','.sm_state_10',function(){
          let stats = <?php echo calcCasuality2017('Delhi'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_10',function(){
          let stats = <?php echo fatalityage2017('Delhi'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("DELHI");
        });
        $("#map2017").on('mouseenter','.sm_state_10',function(){
           let stats = <?php echo reasons2017('Delhi'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Bihar
        $("#map2017").on('mouseenter','.sm_state_5',function(){
          let stats = <?php echo calcCasuality2017('Bihar'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_5',function(){
          let stats = <?php echo fatalityage2017('Bihar'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("BIHAR");
        });
        $("#map2017").on('mouseenter','.sm_state_5',function(){
           let stats = <?php echo reasons2017('Bihar'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Sikkim
        $("#map2017").on('mouseenter','.sm_state_30',function(){
          let stats = <?php echo calcCasuality2017('Sikkim'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_30',function(){
          let stats = <?php echo fatalityage2017('Sikkim'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("SIKKIM");
        });
        $("#map2017").on('mouseenter','.sm_state_30',function(){
           let stats = <?php echo reasons2017('Sikkim'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //West Bengal
        $("#map2017").on('mouseenter','.sm_state_35',function(){
          let stats = <?php echo calcCasuality2017('West Bengal'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_35',function(){
          let stats = <?php echo fatalityage2017('West Bengal'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("WEST BENGAL");
        });
        $("#map2017").on('mouseenter','.sm_state_35',function(){
           let stats = <?php echo reasons2017('West Bengal'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });


        //Assam
        $("#map2017").on('mouseenter','.sm_state_4',function(){
          let stats = <?php echo calcCasuality2017('Assam'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_4',function(){
          let stats = <?php echo fatalityage2017('Assam'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("ASSAM");
        });
        $("#map2017").on('mouseenter','.sm_state_4',function(){
           let stats = <?php echo reasons2017('Assam'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Tripura
        $("#map2017").on('mouseenter','.sm_state_32',function(){
          let stats = <?php echo calcCasuality2017('Tripura'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_32',function(){
          let stats = <?php echo fatalityage2017('Tripura'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("TRIPURA");
        });
        $("#map2017").on('mouseenter','.sm_state_32',function(){
           let stats = <?php echo reasons2017('Tripura'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Meghalaya
        $("#map2017").on('mouseenter','.sm_state_23',function(){
          let stats = <?php echo calcCasuality2017('Meghalaya'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_23',function(){
          let stats = <?php echo fatalityage2017('Meghalaya'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MEGHALAYA");
        });
        $("#map2017").on('mouseenter','.sm_state_23',function(){
           let stats = <?php echo reasons2017('Meghalaya'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Mizoram
        $("#map2017").on('mouseenter','.sm_state_24',function(){
          let stats = <?php echo calcCasuality2017('Mizoram'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_24',function(){
          let stats = <?php echo fatalityage2017('Mizoram'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MIZORAM");
        });
        $("#map2017").on('mouseenter','.sm_state_24',function(){
           let stats = <?php echo reasons2017('Mizoram'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Manipur
        $("#map2017").on('mouseenter','.sm_state_22',function(){
          let stats = <?php echo calcCasuality2017('Manipur'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_22',function(){
          let stats = <?php echo fatalityage2017('Manipur'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MANIPUR");
        });
        $("#map2017").on('mouseenter','.sm_state_22',function(){
           let stats = <?php echo reasons2017('Manipur'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Nagaland
        $("#map2017").on('mouseenter','.sm_state_25',function(){
          let stats = <?php echo calcCasuality2017('Nagaland'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_25',function(){
          let stats = <?php echo fatalityage2017('Nagaland'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("NAGALAND");
        });
        $("#map2017").on('mouseenter','.sm_state_25',function(){
           let stats = <?php echo reasons2017('Nagaland'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Arunachal Pradesh
        $("#map2017").on('mouseenter','.sm_state_3',function(){
          let stats = <?php echo calcCasuality2017('Arunachal Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_3',function(){
          let stats = <?php echo fatalityage2017('Arunachal Pradesh'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("ARUNACHAL PRADESH");
        });
        $("#map2017").on('mouseenter','.sm_state_3',function(){
           let stats = <?php echo reasons2017('Arunachal Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Jharkhand
        $("#map2017").on('mouseenter','.sm_state_16',function(){
          let stats = <?php echo calcCasuality2017('Jharkhand'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_16',function(){
          let stats = <?php echo fatalityage2017('Jharkhand'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("JHARKHAND");
        });
        $("#map2017").on('mouseenter','.sm_state_16',function(){
           let stats = <?php echo reasons2017('Jharkhand'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Chhattisgarh
        $("#map2017").on('mouseenter','.sm_state_7',function(){
          let stats = <?php echo calcCasuality2017('Chhattisgarh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_7',function(){
          let stats = <?php echo fatalityage2017('Chhattisgarh'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("CHHATTISGARH");
        });
        $("#map2017").on('mouseenter','.sm_state_7',function(){
           let stats = <?php echo reasons2017('Chhattisgarh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Madhya Pradesh
        $("#map2017").on('mouseenter','.sm_state_20',function(){
          let stats = <?php echo calcCasuality2017('Madhya Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_20',function(){
          let stats = <?php echo fatalityage2017('Madhya Pradesh'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MADHYA PRADESH");
        });
        $("#map2017").on('mouseenter','.sm_state_20',function(){
           let stats = <?php echo reasons2017('Madhya Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Gujarat
        $("#map2017").on('mouseenter','.sm_state_12',function(){
          let stats = <?php echo calcCasuality2017('Gujarat'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_12',function(){
          let stats = <?php echo fatalityage2017('Gujarat'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("GUJARAT");
        });
        $("#map2017").on('mouseenter','.sm_state_12',function(){
           let stats = <?php echo reasons2017('Gujarat'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Orissa
        $("#map2017").on('mouseenter','.sm_state_26',function(){
          let stats = <?php echo calcCasuality2017('Odisha'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_26',function(){
          let stats = <?php echo fatalityage2017('Orissa'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("ORISSA");
        });
        $("#map2017").on('mouseenter','.sm_state_26',function(){
           let stats = <?php echo reasons2017('Orissa'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Maharashtra
        $("#map2017").on('mouseenter','.sm_state_21',function(){
          let stats = <?php echo calcCasuality2017('Maharashtra'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_21',function(){
          let stats = <?php echo fatalityage2017('Maharashtra'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MAHARASHTRA");
        });
        $("#map2017").on('mouseenter','.sm_state_21',function(){
           let stats = <?php echo reasons2017('Maharashtra'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Telangana
        $("#map2017").on('mouseenter','.sm_state_37',function(){
          let stats = <?php echo calcCasuality2017('Telangana'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_37',function(){
          let stats = <?php echo fatalityage2017('Telangana'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("TELANGANA");
        });
        $("#map2017").on('mouseenter','.sm_state_37',function(){
           let stats = <?php echo reasons2017('Telangana'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Andhra Pradesh
        $("#map2017").on('mouseenter','.sm_state_2',function(){
          let stats = <?php echo calcCasuality2017('Andhra Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_2',function(){
          let stats = <?php echo fatalityage2017('Andhra Pradesh'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("ANDHRA PRADESH");
        });
        $("#map2017").on('mouseenter','.sm_state_2',function(){
           let stats = <?php echo reasons2017('Andhra Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Goa
        $("#map2017").on('mouseenter','.sm_state_11',function(){
          let stats = <?php echo calcCasuality2017('Goa'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_11',function(){
          let stats = <?php echo fatalityage2017('Goa'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("GOA");
        });
        $("#map2017").on('mouseenter','.sm_state_11',function(){
           let stats = <?php echo reasons2017('Goa'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Karnataka
        $("#map2017").on('mouseenter','.sm_state_17',function(){
          let stats = <?php echo calcCasuality2017('Karnataka'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_17',function(){
          let stats = <?php echo fatalityage2017('Karnataka'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("KARNATAKA");
        });
        $("#map2017").on('mouseenter','.sm_state_17',function(){
           let stats = <?php echo reasons2017('Karnataka'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Tamil Nadu
        $("#map2017").on('mouseenter','.sm_state_31',function(){
          let stats = <?php echo calcCasuality2017('Tamil Nadu'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_31',function(){
          let stats = <?php echo fatalityage2017('Tamil Nadu'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("TAMIL NADU");
        });
        $("#map2017").on('mouseenter','.sm_state_31',function(){
           let stats = <?php echo reasons2017('Tamil Nadu'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Kerala
        $("#map2017").on('mouseenter','.sm_state_18',function(){
          let stats = <?php echo calcCasuality2017('Kerala'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2017").on('mouseenter','.sm_state_18',function(){
          let stats = <?php echo fatalityage2017('Kerala'); ?>;
          $('#lt18').text(stats.lt18);
          $('#18-35').text(stats.thirtyfive);
          $('#35-60').text(stats.sixty);
          $('#gt60').text(stats.gt60);
          $('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("KERALA");
        });
        $("#map2017").on('mouseenter','.sm_state_18',function(){
           let stats = <?php echo reasons2017('Kerala'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

</script>

<!--For year 2018 -->
<script type="text/javascript">
//India
$("#map2018").on('mouseenter','rect',function(){
   let stats = <?php echo calcCasuality2018('India'); ?>;
    $('#total_a').text(stats.total);
    $('#total_i').text(stats.injured);
    $('#total_d').text(stats.deaths);
});
$("#map2018").on('mouseenter','rect',function(){
  let stats = <?php echo fatalityage2018('India'); ?>;
  $('#lt18').text(stats.lt18);
  $('#18-35').text(stats.thirtyfive);
  $('#35-60').text(stats.sixty);
  $('#gt60').text(stats.gt60);
  $('#unknown-age').text(stats.unknown);
  $('#pedestrian').text(stats.pedestrian);
  $('#two-wheelers').text(stats.twowheelers);
  $('#four-wheelers').text(stats.fourwheelers);
  $('#heavy-vehicle').text(stats.trucks);
  $('#others').text(stats.other);
  $('#state').text("INDIA");
});
$("#map2018").on('mouseenter','rect',function(){
   let stats = <?php echo reasons2018('India'); ?>;
    $('#overspeeding').css('width',stats.overspeeding+"%");
    $('#wrongside').css('width',stats.wrongside+"%");
    $('#noviolation').css('width',stats.noviolation+"%");
    $('#overtaking').css('width',stats.overtaking+"%");
    $('#useofmobile').css('width',stats.useofmobile+"%");
    $('#othercauses').css('width',stats.othercauses+"%");
});

  //Jammu and Kashmir
  $("#map2018").on('mouseenter','.sm_state_36',function(){
    let stats = <?php echo calcCasuality2018('Jammu & Kashmir'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_36',function(){
    let stats = <?php echo fatalityage2018('Jammu & Kashmir'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("JAMMU AND KASHMIR");
  });
  $("#map2018").on('mouseenter','.sm_state_36',function(){
     let stats = <?php echo reasons2018('Jammu & Kashmir'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Himachal Pradesh
  $("#map2018").on('mouseenter','.sm_state_14',function(){
    let stats = <?php echo calcCasuality2018('Himachal Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_14',function(){
    let stats = <?php echo fatalityage2018('Himachal Pradesh'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("HIMACHAL PRADESH");
  });
  $("#map2018").on('mouseenter','.sm_state_14',function(){
     let stats = <?php echo reasons2018('Himachal Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Punjab
  $("#map2018").on('mouseenter','.sm_state_28',function(){
    let stats = <?php echo calcCasuality2018('Punjab'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_28',function(){
    let stats = <?php echo fatalityage2018('Punjab'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("PUNJAB");
  });
  $("#map2018").on('mouseenter','.sm_state_28',function(){
     let stats = <?php echo reasons2018('Punjab'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Uttarakhand
  $("#map2018").on('mouseenter','.sm_state_34',function(){
    let stats = <?php echo calcCasuality2018('Uttarakhand'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_34',function(){
    let stats = <?php echo fatalityage2018('Uttarakhand'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("UTTARANCHAL");
  });
  $("#map2018").on('mouseenter','.sm_state_34',function(){
     let stats = <?php echo reasons2018('Uttarakhand'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Haryana
  $("#map2018").on('mouseenter','.sm_state_13',function(){
    let stats = <?php echo calcCasuality2018('Haryana'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_13',function(){
    let stats = <?php echo fatalityage2018('Haryana'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("HARYANA");
  });
  $("#map2018").on('mouseenter','.sm_state_13',function(){
     let stats = <?php echo reasons2018('Haryana'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Uttar Pradesh
  $("#map2018").on('mouseenter','.sm_state_33',function(){
    let stats = <?php echo calcCasuality2018('Uttar Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_33',function(){
    let stats = <?php echo fatalityage2018('Uttar Pradesh'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("UTTAR PRADESH");
  });
  $("#map2018").on('mouseenter','.sm_state_33',function(){
     let stats = <?php echo reasons2018('Uttar Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });


  //Rajasthan
  $("#map2018").on('mouseenter','.sm_state_29',function(){
    let stats = <?php echo calcCasuality2018('Rajasthan'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_29',function(){
    let stats = <?php echo fatalityage2018('Rajasthan'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("RAJASTHAN");
  });
  $("#map2018").on('mouseenter','.sm_state_29',function(){
     let stats = <?php echo reasons2018('Rajasthan'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Delhi
  $("#map2018").on('mouseenter','.sm_state_10',function(){
    let stats = <?php echo calcCasuality2018('Delhi'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_10',function(){
    let stats = <?php echo fatalityage2018('Delhi'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("DELHI");
  });
  $("#map2018").on('mouseenter','.sm_state_10',function(){
     let stats = <?php echo reasons2018('Delhi'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Bihar
  $("#map2018").on('mouseenter','.sm_state_5',function(){
    let stats = <?php echo calcCasuality2018('Bihar'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_5',function(){
    let stats = <?php echo fatalityage2018('Bihar'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("BIHAR");
  });
  $("#map2018").on('mouseenter','.sm_state_5',function(){
     let stats = <?php echo reasons2018('Bihar'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Sikkim
  $("#map2018").on('mouseenter','.sm_state_30',function(){
    let stats = <?php echo calcCasuality2018('Sikkim'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_30',function(){
    let stats = <?php echo fatalityage2018('Sikkim'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("SIKKIM");
  });
  $("#map2018").on('mouseenter','.sm_state_30',function(){
     let stats = <?php echo reasons2018('Sikkim'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //West Bengal
  $("#map2018").on('mouseenter','.sm_state_35',function(){
    let stats = <?php echo calcCasuality2018('West Bengal'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_35',function(){
    let stats = <?php echo fatalityage2018('West Bengal'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("WEST BENGAL");
  });
  $("#map2018").on('mouseenter','.sm_state_35',function(){
     let stats = <?php echo reasons2018('West Bengal'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });


  //Assam
  $("#map2018").on('mouseenter','.sm_state_4',function(){
    let stats = <?php echo calcCasuality2018('Assam'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_4',function(){
    let stats = <?php echo fatalityage2018('Assam'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("ASSAM");
  });
  $("#map2018").on('mouseenter','.sm_state_4',function(){
     let stats = <?php echo reasons2018('Assam'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Tripura
  $("#map2018").on('mouseenter','.sm_state_32',function(){
    let stats = <?php echo calcCasuality2018('Tripura'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_32',function(){
    let stats = <?php echo fatalityage2018('Tripura'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("TRIPURA");
  });
  $("#map2018").on('mouseenter','.sm_state_32',function(){
     let stats = <?php echo reasons2018('Tripura'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Meghalaya
  $("#map2018").on('mouseenter','.sm_state_23',function(){
    let stats = <?php echo calcCasuality2018('Meghalaya'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_23',function(){
    let stats = <?php echo fatalityage2018('Meghalaya'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("MEGHALAYA");
  });
  $("#map2018").on('mouseenter','.sm_state_23',function(){
     let stats = <?php echo reasons2018('Meghalaya'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Mizoram
  $("#map2018").on('mouseenter','.sm_state_24',function(){
    let stats = <?php echo calcCasuality2018('Mizoram'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_24',function(){
    let stats = <?php echo fatalityage2018('Mizoram'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("MIZORAM");
  });
  $("#map2018").on('mouseenter','.sm_state_24',function(){
     let stats = <?php echo reasons2018('Mizoram'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Manipur
  $("#map2018").on('mouseenter','.sm_state_22',function(){
    let stats = <?php echo calcCasuality2018('Manipur'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_22',function(){
    let stats = <?php echo fatalityage2018('Manipur'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("MANIPUR");
  });
  $("#map2018").on('mouseenter','.sm_state_22',function(){
     let stats = <?php echo reasons2018('Manipur'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Nagaland
  $("#map2018").on('mouseenter','.sm_state_25',function(){
    let stats = <?php echo calcCasuality2018('Nagaland'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_25',function(){
    let stats = <?php echo fatalityage2018('Nagaland'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("NAGALAND");
  });
  $("#map2018").on('mouseenter','.sm_state_25',function(){
     let stats = <?php echo reasons2018('Nagaland'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Arunachal Pradesh
  $("#map2018").on('mouseenter','.sm_state_3',function(){
    let stats = <?php echo calcCasuality2018('Arunachal Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_3',function(){
    let stats = <?php echo fatalityage2018('Arunachal Pradesh'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("ARUNACHAL PRADESH");
  });
  $("#map2018").on('mouseenter','.sm_state_3',function(){
     let stats = <?php echo reasons2018('Arunachal Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Jharkhand
  $("#map2018").on('mouseenter','.sm_state_16',function(){
    let stats = <?php echo calcCasuality2018('Jharkhand'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_16',function(){
    let stats = <?php echo fatalityage2018('Jharkhand'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("JHARKHAND");
  });
  $("#map2018").on('mouseenter','.sm_state_16',function(){
     let stats = <?php echo reasons2018('Jharkhand'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Chhattisgarh
  $("#map2018").on('mouseenter','.sm_state_7',function(){
    let stats = <?php echo calcCasuality2018('Chhattisgarh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_7',function(){
    let stats = <?php echo fatalityage2018('Chhattisgarh'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("CHHATTISGARH");
  });
  $("#map2018").on('mouseenter','.sm_state_7',function(){
     let stats = <?php echo reasons2018('Chhattisgarh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Madhya Pradesh
  $("#map2018").on('mouseenter','.sm_state_20',function(){
    let stats = <?php echo calcCasuality2018('Madhya Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_20',function(){
    let stats = <?php echo fatalityage2018('Madhya Pradesh'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("MADHYA PRADESH");
  });
  $("#map2018").on('mouseenter','.sm_state_20',function(){
     let stats = <?php echo reasons2018('Madhya Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Gujarat
  $("#map2018").on('mouseenter','.sm_state_12',function(){
    let stats = <?php echo calcCasuality2018('Gujarat'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_12',function(){
    let stats = <?php echo fatalityage2018('Gujarat'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("GUJARAT");
  });
  $("#map2018").on('mouseenter','.sm_state_12',function(){
     let stats = <?php echo reasons2018('Gujarat'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Orissa
  $("#map2018").on('mouseenter','.sm_state_26',function(){
    let stats = <?php echo calcCasuality2018('Odisha'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_26',function(){
    let stats = <?php echo fatalityage2018('Orissa'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("ORISSA");
  });
  $("#map2018").on('mouseenter','.sm_state_26',function(){
     let stats = <?php echo reasons2018('Orissa'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Maharashtra
  $("#map2018").on('mouseenter','.sm_state_21',function(){
    let stats = <?php echo calcCasuality2018('Maharashtra'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_21',function(){
    let stats = <?php echo fatalityage2018('Maharashtra'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("MAHARASHTRA");
  });
  $("#map2018").on('mouseenter','.sm_state_21',function(){
     let stats = <?php echo reasons2018('Maharashtra'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Telangana
  $("#map2018").on('mouseenter','.sm_state_37',function(){
    let stats = <?php echo calcCasuality2018('Telangana'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_37',function(){
    let stats = <?php echo fatalityage2018('Telangana'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("TELANGANA");
  });
  $("#map2018").on('mouseenter','.sm_state_37',function(){
     let stats = <?php echo reasons2018('Telangana'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Andhra Pradesh
  $("#map2018").on('mouseenter','.sm_state_2',function(){
    let stats = <?php echo calcCasuality2018('Andhra Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_2',function(){
    let stats = <?php echo fatalityage2018('Andhra Pradesh'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("ANDHRA PRADESH");
  });
  $("#map2018").on('mouseenter','.sm_state_2',function(){
     let stats = <?php echo reasons2018('Andhra Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Goa
  $("#map2018").on('mouseenter','.sm_state_11',function(){
    let stats = <?php echo calcCasuality2018('Goa'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_11',function(){
    let stats = <?php echo fatalityage2018('Goa'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("GOA");
  });
  $("#map2018").on('mouseenter','.sm_state_11',function(){
     let stats = <?php echo reasons2018('Goa'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Karnataka
  $("#map2018").on('mouseenter','.sm_state_17',function(){
    let stats = <?php echo calcCasuality2018('Karnataka'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_17',function(){
    let stats = <?php echo fatalityage2018('Karnataka'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("KARNATAKA");
  });
  $("#map2018").on('mouseenter','.sm_state_17',function(){
     let stats = <?php echo reasons2018('Karnataka'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Tamil Nadu
  $("#map2018").on('mouseenter','.sm_state_31',function(){
    let stats = <?php echo calcCasuality2018('Tamil Nadu'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_31',function(){
    let stats = <?php echo fatalityage2018('Tamil Nadu'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("TAMIL NADU");
  });
  $("#map2018").on('mouseenter','.sm_state_31',function(){
     let stats = <?php echo reasons2018('Tamil Nadu'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Kerala
  $("#map2018").on('mouseenter','.sm_state_18',function(){
    let stats = <?php echo calcCasuality2018('Kerala'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2018").on('mouseenter','.sm_state_18',function(){
    let stats = <?php echo fatalityage2018('Kerala'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#others').text(stats.other);
    $('#state').text("KERALA");
  });
  $("#map2018").on('mouseenter','.sm_state_18',function(){
     let stats = <?php echo reasons2018('Kerala'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

</script>

<!--For year 2015 -->
<script type="text/javascript">
//India
$("#map2015").on('mouseenter','rect',function(){
   let stats = <?php echo calcCasuality2015('India'); ?>;
    $('#total_a').text(stats.total);
    $('#total_i').text(stats.injured);
    $('#total_d').text(stats.deaths);
});
$("#map2015").on('mouseenter','rect',function(){
  let stats = <?php echo fatalityage2015('India'); ?>;
  $('#lt18').text(stats.lt18);
  $('#18-35').text(stats.thirtyfive);
  $('#35-60').text(stats.sixty);
  $('#gt60').text(stats.gt60);
  $('#unknown-age').text(stats.unknown);
  $('#pedestrian').text(stats.pedestrian);
  $('#two-wheelers').text(stats.twowheelers);
  $('#four-wheelers').text(stats.fourwheelers);
  $('#heavy-vehicle').text(stats.trucks);
  $('#state').text("INDIA");
});
$("#map2015").on('mouseenter','rect',function(){
   let stats = <?php echo reasons2015('India'); ?>;
    $('#overspeeding').css('width',stats.overspeeding+"%");
    $('#drunkdriving').css('width',stats.drunkdriving+"%");
    $('#improperpassing').css('width',stats.improperpassing+"%");
    $('#improperdirection').css('width',stats.improperdirection+"%");
});

  //Jammu and Kashmir
  $("#map2015").on('mouseenter','.sm_state_36',function(){
    let stats = <?php echo calcCasuality2015('Jammu and Kashmir'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_36',function(){
    let stats = <?php echo fatalityage2015('Jammu & Kashmir'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("JAMMU AND KASHMIR");
  });
  $("#map2015").on('mouseenter','.sm_state_36',function(){
     let stats = <?php echo reasons2015('Jammu & Kashmir'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Himachal Pradesh
  $("#map2015").on('mouseenter','.sm_state_14',function(){
    let stats = <?php echo calcCasuality2015('Himachal Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_14',function(){
    let stats = <?php echo fatalityage2015('Himachal Pradesh'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("HIMACHAL PRADESH");
  });
  $("#map2015").on('mouseenter','.sm_state_14',function(){
     let stats = <?php echo reasons2015('Himachal Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Punjab
  $("#map2015").on('mouseenter','.sm_state_28',function(){
    let stats = <?php echo calcCasuality2015('Punjab'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_28',function(){
    let stats = <?php echo fatalityage2015('Punjab'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("PUNJAB");
  });
  $("#map2015").on('mouseenter','.sm_state_28',function(){
     let stats = <?php echo reasons2015('Punjab'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Uttarakhand
  $("#map2015").on('mouseenter','.sm_state_34',function(){
    let stats = <?php echo calcCasuality2015('Uttrakhand'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_34',function(){
    let stats = <?php echo fatalityage2015('Uttarakhand'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("UTTARANCHAL");
  });
  $("#map2015").on('mouseenter','.sm_state_34',function(){
     let stats = <?php echo reasons2015('Uttarakhand'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

   //Haryana
  $("#map2015").on('mouseenter','.sm_state_13',function(){
    let stats = <?php echo calcCasuality2015('Haryana'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_13',function(){
    let stats = <?php echo fatalityage2015('Haryana'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("HARYANA");
  });
  $("#map2015").on('mouseenter','.sm_state_13',function(){
     let stats = <?php echo reasons2015('Haryana'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Uttar Pradesh
  $("#map2015").on('mouseenter','.sm_state_33',function(){
    let stats = <?php echo calcCasuality2015('Uttar Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_33',function(){
    let stats = <?php echo fatalityage2015('Uttar Pradesh'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("UTTAR PRADESH");
  });
  $("#map2015").on('mouseenter','.sm_state_33',function(){
     let stats = <?php echo reasons2015('Uttar Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Rajasthan
  $("#map2015").on('mouseenter','.sm_state_29',function(){
    let stats = <?php echo calcCasuality2015('Rajasthan'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_29',function(){
    let stats = <?php echo fatalityage2015('Rajasthan'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("RAJASTHAN");
  });
  $("#map2015").on('mouseenter','.sm_state_29',function(){
     let stats = <?php echo reasons2015('Rajasthan'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Delhi
  $("#map2015").on('mouseenter','.sm_state_10',function(){
    let stats = <?php echo calcCasuality2015('Delhi'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_10',function(){
    let stats = <?php echo fatalityage2015('Delhi'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("DELHI");
  });
  $("#map2015").on('mouseenter','.sm_state_10',function(){
     let stats = <?php echo reasons2015('Delhi'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Bihar
  $("#map2015").on('mouseenter','.sm_state_5',function(){
    let stats = <?php echo calcCasuality2015('Bihar'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_5',function(){
    let stats = <?php echo fatalityage2015('Bihar'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("BIHAR");
  });
  $("#map2015").on('mouseenter','.sm_state_5',function(){
     let stats = <?php echo reasons2015('Bihar'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Sikkim
  $("#map2015").on('mouseenter','.sm_state_30',function(){
    let stats = <?php echo calcCasuality2015('Sikkim'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_30',function(){
    let stats = <?php echo fatalityage2015('Sikkim'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("SIKKIM");
  });
  $("#map2015").on('mouseenter','.sm_state_30',function(){
     let stats = <?php echo reasons2015('Sikkim'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //West Bengal
  $("#map2015").on('mouseenter','.sm_state_35',function(){
    let stats = <?php echo calcCasuality2015('West Bengal'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_35',function(){
    let stats = <?php echo fatalityage2015('West Bengal'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("WEST BENGAL");
  });
  $("#map2015").on('mouseenter','.sm_state_35',function(){
     let stats = <?php echo reasons2015('West Bengal'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });


  //Assam
  $("#map2015").on('mouseenter','.sm_state_4',function(){
    let stats = <?php echo calcCasuality2015('Assam'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_4',function(){
    let stats = <?php echo fatalityage2015('Assam'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("ASSAM");
  });
  $("#map2015").on('mouseenter','.sm_state_4',function(){
     let stats = <?php echo reasons2015('Assam'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Tripura
  $("#map2015").on('mouseenter','.sm_state_32',function(){
    let stats = <?php echo calcCasuality2015('Tripura'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_32',function(){
    let stats = <?php echo fatalityage2015('Tripura'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("TRIPURA");
  });
  $("#map2015").on('mouseenter','.sm_state_32',function(){
     let stats = <?php echo reasons2015('Tripura'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Meghalaya
  $("#map2015").on('mouseenter','.sm_state_23',function(){
    let stats = <?php echo calcCasuality2015('Meghalaya'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_23',function(){
    let stats = <?php echo fatalityage2015('Meghalaya'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("MEGHALAYA");
  });
  $("#map2015").on('mouseenter','.sm_state_23',function(){
     let stats = <?php echo reasons2015('Meghalaya'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Mizoram
  $("#map2015").on('mouseenter','.sm_state_24',function(){
    let stats = <?php echo calcCasuality2015('Mizoram'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_24',function(){
    let stats = <?php echo fatalityage2015('Mizoram'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("MIZORAM");
  });
  $("#map2015").on('mouseenter','.sm_state_24',function(){
     let stats = <?php echo reasons2015('Mizoram'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Manipur
  $("#map2015").on('mouseenter','.sm_state_22',function(){
    let stats = <?php echo calcCasuality2015('Manipur'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_22',function(){
    let stats = <?php echo fatalityage2015('Manipur'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("MANIPUR");
  });
  $("#map2015").on('mouseenter','.sm_state_22',function(){
     let stats = <?php echo reasons2015('Manipur'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Nagaland
  $("#map2015").on('mouseenter','.sm_state_25',function(){
    let stats = <?php echo calcCasuality2015('Nagaland'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_25',function(){
    let stats = <?php echo fatalityage2015('Nagaland'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("NAGALAND");
  });
  $("#map2015").on('mouseenter','.sm_state_25',function(){
     let stats = <?php echo reasons2015('Nagaland'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Arunachal Pradesh
  $("#map2015").on('mouseenter','.sm_state_3',function(){
    let stats = <?php echo calcCasuality2015('Arunachal Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_3',function(){
    let stats = <?php echo fatalityage2015('Arunachal Pradesh'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("ARUNACHAL PRADESH");
  });
  $("#map2015").on('mouseenter','.sm_state_3',function(){
     let stats = <?php echo reasons2015('Arunachal Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Jharkhand
  $("#map2015").on('mouseenter','.sm_state_16',function(){
    let stats = <?php echo calcCasuality2015('Jharkhand'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_16',function(){
    let stats = <?php echo fatalityage2015('Jharkhand'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("JHARKHAND");
  });
  $("#map2015").on('mouseenter','.sm_state_16',function(){
     let stats = <?php echo reasons2015('Jharkhand'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Chhattisgarh
  $("#map2015").on('mouseenter','.sm_state_7',function(){
    let stats = <?php echo calcCasuality2015('Chhatisgarh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_7',function(){
    let stats = <?php echo fatalityage2015('Chhattisgarh'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("CHHATTISGARH");
  });
  $("#map2015").on('mouseenter','.sm_state_7',function(){
     let stats = <?php echo reasons2015('Chhattisgarh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Madhya Pradesh
  $("#map2015").on('mouseenter','.sm_state_20',function(){
    let stats = <?php echo calcCasuality2015('Madhya Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_20',function(){
    let stats = <?php echo fatalityage2015('Madhya Pradesh'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("MADHYA PRADESH");
  });
  $("#map2015").on('mouseenter','.sm_state_20',function(){
     let stats = <?php echo reasons2015('Madhya Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Gujarat
  $("#map2015").on('mouseenter','.sm_state_12',function(){
    let stats = <?php echo calcCasuality2015('Gujarat'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_12',function(){
    let stats = <?php echo fatalityage2015('Gujarat'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("GUJARAT");
  });
  $("#map2015").on('mouseenter','.sm_state_12',function(){
     let stats = <?php echo reasons2015('Gujarat'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Orissa
  $("#map2015").on('mouseenter','.sm_state_26',function(){
    let stats = <?php echo calcCasuality2015('Odisha'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_26',function(){
    let stats = <?php echo fatalityage2015('Orissa'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("ORISSA");
  });
  $("#map2015").on('mouseenter','.sm_state_26',function(){
     let stats = <?php echo reasons2015('Odisha'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Maharashtra
  $("#map2015").on('mouseenter','.sm_state_21',function(){
    let stats = <?php echo calcCasuality2015('Maharashtra'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_21',function(){
    let stats = <?php echo fatalityage2015('Maharashtra'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("MAHARASHTRA");
  });
  $("#map2015").on('mouseenter','.sm_state_21',function(){
     let stats = <?php echo reasons2015('Maharashtra'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Telangana
  $("#map2015").on('mouseenter','.sm_state_37',function(){
    let stats = <?php echo calcCasuality2015('Telangana'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_37',function(){
    let stats = <?php echo fatalityage2015('Telangana'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("TELANGANA");
  });
  $("#map2015").on('mouseenter','.sm_state_37',function(){
     let stats = <?php echo reasons2015('Telangana'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Andhra Pradesh
  $("#map2015").on('mouseenter','.sm_state_2',function(){
    let stats = <?php echo calcCasuality2015('Andhra Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_2',function(){
    let stats = <?php echo fatalityage2015('Andhra Pradesh'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("ANDHRA PRADESH");
  });
  $("#map2015").on('mouseenter','.sm_state_2',function(){
     let stats = <?php echo reasons2015('Andhra Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Goa
  $("#map2015").on('mouseenter','.sm_state_11',function(){
    let stats = <?php echo calcCasuality2015('Goa'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_11',function(){
    let stats = <?php echo fatalityage2015('Goa'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("GOA");
  });
  $("#map2015").on('mouseenter','.sm_state_11',function(){
     let stats = <?php echo reasons2015('Goa'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Karnataka
  $("#map2015").on('mouseenter','.sm_state_17',function(){
    let stats = <?php echo calcCasuality2015('Karnataka'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_17',function(){
    let stats = <?php echo fatalityage2015('Karnataka'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("KARNATAKA");
  });
  $("#map2015").on('mouseenter','.sm_state_17',function(){
     let stats = <?php echo reasons2015('Karnataka'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Tamil Nadu
  $("#map2015").on('mouseenter','.sm_state_31',function(){
    let stats = <?php echo calcCasuality2015('Tamil Nadu'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_31',function(){
    let stats = <?php echo fatalityage2015('Tamil Nadu'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("TAMIL NADU");
  });
  $("#map2015").on('mouseenter','.sm_state_31',function(){
     let stats = <?php echo reasons2015('Tamil Nadu'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Kerala
  $("#map2015").on('mouseenter','.sm_state_18',function(){
    let stats = <?php echo calcCasuality2015('Kerala'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#map2015").on('mouseenter','.sm_state_18',function(){
    let stats = <?php echo fatalityage2015('Kerala'); ?>;
    $('#lt18').text(stats.lt18);
    $('#18-35').text(stats.thirtyfive);
    $('#35-60').text(stats.sixty);
    $('#gt60').text(stats.gt60);
    $('#unknown-age').text(stats.unknown);
    $('#pedestrian').text(stats.pedestrian);
    $('#two-wheelers').text(stats.twowheelers);
    $('#four-wheelers').text(stats.fourwheelers);
    $('#heavy-vehicle').text(stats.trucks);
    $('#state').text("KERALA");
  });
  $("#map2015").on('mouseenter','.sm_state_18',function(){
     let stats = <?php echo reasons2015('Kerala'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

      </script>


      <!--For year 2007 -->
      <script type="text/javascript">
      //India
      $("#map2007").on('mouseenter','rect',function(){
         let stats = <?php echo calcCasuality2007('India'); ?>;
          $('#total_a').text(stats.total);
          $('#total_i').text(stats.injured);
          $('#total_d').text(stats.deaths);
      });
      $("#map2007").on('mouseenter','rect',function(){
        let stats = <?php echo fatalityage2007('India'); ?>;
        //$('#lt18').text(stats.lt18);
        //$('#18-35').text(stats.thirtyfive);
        //$('#35-60').text(stats.sixty);
        //$('#gt60').text(stats.gt60);
        //$('#unknown-age').text(stats.unknown);
        $('#pedestrian').text(stats.pedestrian);
        $('#two-wheelers').text(stats.twowheelers);
        $('#four-wheelers').text(stats.fourwheelers);
        $('#heavy-vehicle').text(stats.trucks);
        $('#state').text("INDIA");
      });
      $("#map2007").on('mouseenter','rect',function(){
         let stats = <?php echo reasons2007('India'); ?>;
          $('#overloading').css('width',stats.overloading+"%");
          $('#drunkdriving').css('width',stats.drunkdriving+"%");
          $('#defect').css('width',stats.defect+"%");
          $('#othercauses').css('width',stats.othercauses+"%");
      });

        //Jammu and Kashmir
        $("#map2007").on('mouseenter','.sm_state_36',function(){
          let stats = <?php echo calcCasuality2007('Jammu and Kashmir'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_36',function(){
          let stats = <?php echo fatalityage2007('Jammu & Kashmir'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("JAMMU AND KASHMIR");
        });
        $("#map2007").on('mouseenter','.sm_state_36',function(){
           let stats = <?php echo reasons2007('Jammu & Kashmir'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Himachal Pradesh
        $("#map2007").on('mouseenter','.sm_state_14',function(){
          let stats = <?php echo calcCasuality2007('Himachal Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_14',function(){
          let stats = <?php echo fatalityage2007('Himachal Pradesh'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("HIMACHAL PRADESH");
        });
        $("#map2007").on('mouseenter','.sm_state_14',function(){
           let stats = <?php echo reasons2007('Himachal Pradesh'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Punjab
        $("#map2007").on('mouseenter','.sm_state_28',function(){
          let stats = <?php echo calcCasuality2007('Punjab'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_28',function(){
          let stats = <?php echo fatalityage2007('Punjab'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("PUNJAB");
        });
        $("#map2007").on('mouseenter','.sm_state_28',function(){
           let stats = <?php echo reasons2007('Punjab'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Uttarakhand
        $("#map2007").on('mouseenter','.sm_state_34',function(){
          let stats = <?php echo calcCasuality2007('Uttrakhand'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_34',function(){
          let stats = <?php echo fatalityage2007('Uttarakhand'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("UTTARANCHAL");
        });
        $("#map2007").on('mouseenter','.sm_state_34',function(){
           let stats = <?php echo reasons2007('Uttarakhand'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

         //Haryana
        $("#map2007").on('mouseenter','.sm_state_13',function(){
          let stats = <?php echo calcCasuality2007('Haryana'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_13',function(){
          let stats = <?php echo fatalityage2007('Haryana'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("HARYANA");
        });
        $("#map2007").on('mouseenter','.sm_state_13',function(){
           let stats = <?php echo reasons2007('Haryana'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Uttar Pradesh
        $("#map2007").on('mouseenter','.sm_state_33',function(){
          let stats = <?php echo calcCasuality2007('Uttar Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_33',function(){
          let stats = <?php echo fatalityage2007('Uttar Pradesh'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("UTTAR PRADESH");
        });
        $("#map2007").on('mouseenter','.sm_state_33',function(){
           let stats = <?php echo reasons2007('Uttar Pradesh'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Rajasthan
        $("#map2007").on('mouseenter','.sm_state_29',function(){
          let stats = <?php echo calcCasuality2007('Rajasthan'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_29',function(){
          let stats = <?php echo fatalityage2007('Rajasthan'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("RAJASTHAN");
        });
        $("#map2007").on('mouseenter','.sm_state_29',function(){
           let stats = <?php echo reasons2007('Rajasthan'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Delhi
        $("#map2007").on('mouseenter','.sm_state_10',function(){
          let stats = <?php echo calcCasuality2007('Delhi'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_10',function(){
          let stats = <?php echo fatalityage2007('Delhi'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("DELHI");
        });
        $("#map2007").on('mouseenter','.sm_state_10',function(){
           let stats = <?php echo reasons2007('Delhi'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Bihar
        $("#map2007").on('mouseenter','.sm_state_5',function(){
          let stats = <?php echo calcCasuality2007('Bihar'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_5',function(){
          let stats = <?php echo fatalityage2007('Bihar'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("BIHAR");
        });
        $("#map2007").on('mouseenter','.sm_state_5',function(){
           let stats = <?php echo reasons2007('Bihar'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Sikkim
        $("#map2007").on('mouseenter','.sm_state_30',function(){
          let stats = <?php echo calcCasuality2007('Sikkim'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_30',function(){
          let stats = <?php echo fatalityage2007('Sikkim'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("SIKKIM");
        });
        $("#map2007").on('mouseenter','.sm_state_30',function(){
           let stats = <?php echo reasons2007('Sikkim'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //West Bengal
        $("#map2007").on('mouseenter','.sm_state_35',function(){
          let stats = <?php echo calcCasuality2007('West Bengal'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_35',function(){
          let stats = <?php echo fatalityage2007('West Bengal'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("WEST BENGAL");
        });
        $("#map2007").on('mouseenter','.sm_state_35',function(){
           let stats = <?php echo reasons2007('West Bengal'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });


        //Assam
        $("#map2007").on('mouseenter','.sm_state_4',function(){
          let stats = <?php echo calcCasuality2007('Assam'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_4',function(){
          let stats = <?php echo fatalityage2007('Assam'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("ASSAM");
        });
        $("#map2007").on('mouseenter','.sm_state_4',function(){
           let stats = <?php echo reasons2007('Assam'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Tripura
        $("#map2007").on('mouseenter','.sm_state_32',function(){
          let stats = <?php echo calcCasuality2007('Tripura'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_32',function(){
          let stats = <?php echo fatalityage2007('Tripura'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("TRIPURA");
        });
        $("#map2007").on('mouseenter','.sm_state_32',function(){
           let stats = <?php echo reasons2007('Tripura'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Meghalaya
        $("#map2007").on('mouseenter','.sm_state_23',function(){
          let stats = <?php echo calcCasuality2007('Meghalaya'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_23',function(){
          let stats = <?php echo fatalityage2007('Meghalaya'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MEGHALAYA");
        });
        $("#map2007").on('mouseenter','.sm_state_23',function(){
           let stats = <?php echo reasons2007('Meghalaya'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Mizoram
        $("#map2007").on('mouseenter','.sm_state_24',function(){
          let stats = <?php echo calcCasuality2007('Mizoram'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_24',function(){
          let stats = <?php echo fatalityage2007('Mizoram'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MIZORAM");
        });
        $("#map2007").on('mouseenter','.sm_state_24',function(){
           let stats = <?php echo reasons2007('Mizoram'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Manipur
        $("#map2007").on('mouseenter','.sm_state_22',function(){
          let stats = <?php echo calcCasuality2007('Manipur'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_22',function(){
          let stats = <?php echo fatalityage2007('Manipur'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MANIPUR");
        });
        $("#map2007").on('mouseenter','.sm_state_22',function(){
           let stats = <?php echo reasons2007('Manipur'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Nagaland
        $("#map2007").on('mouseenter','.sm_state_25',function(){
          let stats = <?php echo calcCasuality2007('Nagaland'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_25',function(){
          let stats = <?php echo fatalityage2007('Nagaland'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("NAGALAND");
        });
        $("#map2007").on('mouseenter','.sm_state_25',function(){
           let stats = <?php echo reasons2007('Nagaland'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Arunachal Pradesh
        $("#map2007").on('mouseenter','.sm_state_3',function(){
          let stats = <?php echo calcCasuality2007('Arunachal Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_3',function(){
          let stats = <?php echo fatalityage2007('Arunachal Pradesh'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("ARUNACHAL PRADESH");
        });
        $("#map2007").on('mouseenter','.sm_state_3',function(){
           let stats = <?php echo reasons2007('Arunachal Pradesh'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Jharkhand
        $("#map2007").on('mouseenter','.sm_state_16',function(){
          let stats = <?php echo calcCasuality2007('Jharkhand'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_16',function(){
          let stats = <?php echo fatalityage2007('Jharkhand'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("JHARKHAND");
        });
        $("#map2007").on('mouseenter','.sm_state_16',function(){
           let stats = <?php echo reasons2007('Jharkhand'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Chhattisgarh
        $("#map2007").on('mouseenter','.sm_state_7',function(){
          let stats = <?php echo calcCasuality2007('Chhatisgarh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_7',function(){
          let stats = <?php echo fatalityage2007('Chhattisgarh'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("CHHATTISGARH");
        });
        $("#map2007").on('mouseenter','.sm_state_7',function(){
           let stats = <?php echo reasons2007('Chhattisgarh'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Madhya Pradesh
        $("#map2007").on('mouseenter','.sm_state_20',function(){
          let stats = <?php echo calcCasuality2007('Madhya Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_20',function(){
          let stats = <?php echo fatalityage2007('Madhya Pradesh'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MADHYA PRADESH");
        });
        $("#map2007").on('mouseenter','.sm_state_20',function(){
           let stats = <?php echo reasons2007('Madhya Pradesh'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Gujarat
        $("#map2007").on('mouseenter','.sm_state_12',function(){
          let stats = <?php echo calcCasuality2007('Gujarat'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_12',function(){
          let stats = <?php echo fatalityage2007('Gujarat'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("GUJARAT");
        });
        $("#map2007").on('mouseenter','.sm_state_12',function(){
           let stats = <?php echo reasons2007('Gujarat'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Orissa
        $("#map2007").on('mouseenter','.sm_state_26',function(){
          let stats = <?php echo calcCasuality2007('Odisha'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_26',function(){
          let stats = <?php echo fatalityage2007('Orissa'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("ORISSA");
        });
        $("#map2007").on('mouseenter','.sm_state_26',function(){
           let stats = <?php echo reasons2007('Odisha'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Maharashtra
        $("#map2007").on('mouseenter','.sm_state_21',function(){
          let stats = <?php echo calcCasuality2007('Maharashtra'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_21',function(){
          let stats = <?php echo fatalityage2007('Maharashtra'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("MAHARASHTRA");
        });
        $("#map2007").on('mouseenter','.sm_state_21',function(){
           let stats = <?php echo reasons2007('Maharashtra'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Telangana
        $("#map2007").on('mouseenter','.sm_state_37',function(){
          let stats = <?php echo calcCasuality2007('Telangana'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_37',function(){
          let stats = <?php echo fatalityage2007('Telangana'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("TELANGANA");
        });
        $("#map2007").on('mouseenter','.sm_state_37',function(){
           let stats = <?php echo reasons2007('Telangana'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Andhra Pradesh
        $("#map2007").on('mouseenter','.sm_state_2',function(){
          let stats = <?php echo calcCasuality2007('Andhra Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_2',function(){
          let stats = <?php echo fatalityage2007('Andhra Pradesh'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("ANDHRA PRADESH");
        });
        $("#map2007").on('mouseenter','.sm_state_2',function(){
           let stats = <?php echo reasons2007('Andhra Pradesh'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Goa
        $("#map2007").on('mouseenter','.sm_state_11',function(){
          let stats = <?php echo calcCasuality2007('Goa'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_11',function(){
          let stats = <?php echo fatalityage2007('Goa'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("GOA");
        });
        $("#map2007").on('mouseenter','.sm_state_11',function(){
           let stats = <?php echo reasons2007('Goa'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Karnataka
        $("#map2007").on('mouseenter','.sm_state_17',function(){
          let stats = <?php echo calcCasuality2007('Karnataka'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_17',function(){
          let stats = <?php echo fatalityage2007('Karnataka'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("KARNATAKA");
        });
        $("#map2007").on('mouseenter','.sm_state_17',function(){
           let stats = <?php echo reasons2007('Karnataka'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Tamil Nadu
        $("#map2007").on('mouseenter','.sm_state_31',function(){
          let stats = <?php echo calcCasuality2007('Tamil Nadu'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_31',function(){
          let stats = <?php echo fatalityage2007('Tamil Nadu'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("TAMIL NADU");
        });
        $("#map2007").on('mouseenter','.sm_state_31',function(){
           let stats = <?php echo reasons2007('Tamil Nadu'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Kerala
        $("#map2007").on('mouseenter','.sm_state_18',function(){
          let stats = <?php echo calcCasuality2007('Kerala'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#map2007").on('mouseenter','.sm_state_18',function(){
          let stats = <?php echo fatalityage2007('Kerala'); ?>;
          //$('#lt18').text(stats.lt18);
          //$('#18-35').text(stats.thirtyfive);
          //$('#35-60').text(stats.sixty);
          //$('#gt60').text(stats.gt60);
          //$('#unknown-age').text(stats.unknown);
          $('#pedestrian').text(stats.pedestrian);
          $('#two-wheelers').text(stats.twowheelers);
          $('#four-wheelers').text(stats.fourwheelers);
          $('#heavy-vehicle').text(stats.trucks);
          $('#state').text("KERALA");
        });
        $("#map2007").on('mouseenter','.sm_state_18',function(){
           let stats = <?php echo reasons2007('Kerala'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

            </script>
      <script type="text/javascript">
      var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

$('#compare').click(function(){
   window.location.href='total.html';
})
      </script>
          </body>
      </html>
      <?php
      }
