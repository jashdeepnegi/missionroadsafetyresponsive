
<?php
// if ( $_REQUEST["year"] == 2016)
{ ?>
<!doctype html>
<html lang="en">
    <head>
      
       <meta charset="utf-8"> 
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>State Wise Data - IRSC</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="shortcut icon" href="assets/img/logo.png">
        <link rel="stylesheet" href="animate.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="tooltipster.bundle.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="tooltipster.bundle.min.css"/>
        <link rel="stylesheet" type="text/css" href="tooltipster-sideTip-shadow.min.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="missionroadsafety.css">

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> -->
        <!-- <script src="mapdata.js"></script>
        <script src="countrymap.js"></script>
        <script src="2017/mapdata.js"></script>
        <script src="2017/countrymap.js"></script>
        <script src="2015/mapdata.js"></script>
        <script src="2015/countrymap.js"></script>
        <script src="2007/mapdata.js"></script>
        <script src="2007/countrymap.js"></script> -->

        <!--For 2018 map -->
        <!-- <script src="2018/mapdata.js"></script>
        <script src="2018/countrymap.js"></script> -->

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.0.min.js"></script>
        <script type="text/javascript" src="tooltipster.bundle.min.js"></script>
        <script type="text/javascript" src="jquery-csv.js"></script>
        <!-- <script src="d3.js"></script>
        <script src="d3pie.min.js"></script>
        <script src="canvasjs.min.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- <link rel="stylesheet" type="text/css" media ="only screen and (min-width: 800px)"  href="style1.css"/>
        <link rel="stylesheet" type="text/css" media ="only screen and (max-width: 800px)"  href="stylemobile.css"/> -->
  <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
  <!-- <style>
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
  </style> -->
  
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
        click: true
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

    <body>

      
    <nav class="navbar navbar-expand-sm" style="padding:6px 16px;">
            <ul class="navbar-nav">
                <li class="nav-item">
                <p id="first-para">STATE WISE CRASH DATA</p>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <p id="second-para">Every minute a road accident happens in India!</p>
                </li>
            </ul>
        </nav>
        <!-- Start  -->

        <div class="container-fluid" style="margin-top:15px;">
          
          <div class="row">

              <div class="col-2" style="padding:0px">
                  <nav class="navbar sideone" style="float:left;margin-right:0px;top:0;color:white;display:flex;align-items:baseline;width:100%;height:100%;">
                    <ul class="navbar-nav">
                      <li class="nav-item" id="dropbutton2007">
                        <a class="nav-link year" data="2007" id="years2007" onclick="dropfunction2007()"><p style="font-size:13px;" class="text-center">2007</p></a>
                      </li>
                      <li class="nav-item" id="dropbutton2015">
                        <a class="nav-link year" id="years2015" data="2015" onclick="dropfunction2015()"><p style="font-size:13px;" class="text-center">2015</p></a>
                      </li>
                      <li class="nav-item" id="dropbutton2016">
                        <a class="nav-link year" id="years2016" data="2016" onclick="dropfunction2016()"><p style="font-size:13px;" class="text-center">2016</p></a>
                      </li>
                      <li class="nav-item" id="dropbutton2017">
                        <a class="nav-link year" id="years2017" data="2017" onclick="dropfunction2017()"><p style="font-size:13px;" class="text-center">2017</p></a>
                      </li>
                      <li class="nav-item bg-dark" id="dropbutton2018">
                        <a class="nav-link year" id="years2018" data="2018" onclick="dropfunction2018()"><p style="font-size:13px;" class="text-center">2018</p></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link year" data="compare" id="compare" href="./totaldemo.html">
                          <p style="font-size:12px;">Compare</p>
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
                </div>

            <div class="col-10" style="background-color:white;">
              <!-- <h5 style="text-align:center;color:#43425D;">Hover over any state to get details of the road crashes.</h5> -->
              <div class="container">
                <img src="./imagesvg.svg" alt="map" style="width:100%;height:auto;position:relative;">
                <!-- <button type="button" class="btn btn-outline-primary" style="position:absolute;top:0%;left:70%;">hello</button> -->
                <div style="position:absolute;top:2%;left:50%;">
                    <!-- <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Select State
                        </a>
                      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else</a>
                        </div>
                      </div> -->


                      <!-- 2007 dropdown button -->
                      <div class="btn-group" id="drop2007" style="display:none;"> 
                          <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown">Select State<span class="caret"></span></button>
                          <ul class="dropdown-menu scrollable-menu" role="menu">


                              
                              <li><a href="#" id="india" class="dropdown-item" style="padding:0px;"><small>India</small></a></li>
                              <li><a href="#" id="andhrapradesh" class="dropdown-item" style="padding:0px;"><small>Andhra Pradesh</small></a></li>
                              <li><a href="#" id="arunachalpradesh" class="dropdown-item" style="padding:0px;"><small>Arunachal Pradesh</small></a></li>
                              <li><a href="#" id="assam" class="dropdown-item" style="padding:0px;"><small>Assam</small></a></li>
                              <li><a href="#" id="bihar" class="dropdown-item" style="padding:0px;"><small>Bihar</small></a></li>
                              <li><a href="#" id="chattisgarh" class="dropdown-item" style="padding:0px;"><small>Chhatisgarh</small></a></li>
                              <li><a href="#" id="delhi" class="dropdown-item" style="padding:0px;"><small>Delhi</small></a></li>
                              <li><a href="#" id="goa" class="dropdown-item" style="padding:0px;"><small>Goa</small></a></li>
                              <li><a href="#" id="gujarat" class="dropdown-item" style="padding:0px;"><small>Gujarat</small></a></li>
                              <li><a href="#" id="haryana" class="dropdown-item" style="padding:0px;"><small>Haryana</small></a></li>
                              <li><a href="#" id="himachalpradesh" class="dropdown-item" style="padding:0px;"><small>Himachal Pradesh</small></a></li>
                              <li><a href="#" id="jammukashmir" class="dropdown-item" style="padding:0px;"><small>Jammu and Kashmir</small></a></li>
                              <li><a href="#" id="jharkhand" class="dropdown-item" style="padding:0px;"><small>Jharkhand</small></a></li>
                              <li><a href="#" id="karnataka" class="dropdown-item" style="padding:0px;"><small>Karnataka</small></a></li>
                              <li><a href="#" id="kerala" class="dropdown-item" style="padding:0px;"><small>Kerala</small></a></li>
                              <li><a href="#" id="madhyapradesh" class="dropdown-item" style="padding:0px;"><small>Madhya Pradesh</small></a></li>
                              <li><a href="#" id="maharashtra" class="dropdown-item" style="padding:0px;"><small>Maharashtra</small></a></li>
                              <li><a href="#" id="manipur" class="dropdown-item" style="padding:0px;"><small>Manipur</small></a></li>
                              <li><a href="#" id="meghalaya" class="dropdown-item" style="padding:0px;"><small>Meghalaya</small></a></li>
                              <li><a href="#" id="mizoram" class="dropdown-item" style="padding:0px;"><small>Mizoram</small></a></li>
                              <li><a href="#" id="nagaland" class="dropdown-item" style="padding:0px;"><small>Nagaland</small></a></li>
                              <li><a href="#" id="odisha" class="dropdown-item" style="padding:0px;"><small>Odisha</small></a></li>
                              <li><a href="#" id="punjab" class="dropdown-item" style="padding:0px;"><small>Punjab</small></a></li>
                              <li><a href="#" id="rajasthan" class="dropdown-item" style="padding:0px;"><small>Rajasthan</small></a></li>
                              <li><a href="#" id="sikkim" class="dropdown-item" style="padding:0px;"><small>Sikkim</small></a></li>
                              <li><a href="#" id="tamilnadu" class="dropdown-item" style="padding:0px;"><small>Tamil Nadu</small></a></li>
                              <li><a href="#" id="telangana" class="dropdown-item" style="padding:0px;"><small>Telangana</small></a></li>
                              <li><a href="#" id="tripura" class="dropdown-item" style="padding:0px;"><small>Tripura</small></a></li>
                              <li><a href="#" id="uttarpradesh" class="dropdown-item" style="padding:0px;"><small>Uttar Pradesh</small></a></li>
                              <li><a href="#" id="uttarakhand" class="dropdown-item" style="padding:0px;"><small>Uttrakhand</small></a></li>
                              <li><a href="#" id="westbengal" class="dropdown-item" style="padding:0px;"><small>West Bengal</small></a></li>
                              
                          </ul>
                      </div>
                  

                      <!-- 2015 dropdown button -->

                      <div class="btn-group" id="drop2015" style="display:none;">
                        <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown">Select State<span class="caret"></span></button>
                        <ul class="dropdown-menu scrollable-menu" role="menu">

                            <li><a href="#" id="india" class="dropdown-item" style="padding:0px;"><small>India</small></a></li>
                            
                            <li><a href="#" id="andhrapradesh" class="dropdown-item" style="padding:0px;"><small>Andhra Pradesh</small></a></li>
                            <li><a href="#" id="arunachalpradesh" class="dropdown-item" style="padding:0px;"><small>Arunachal Pradesh</small></a></li>
                            <li><a href="#" id="assam" class="dropdown-item" style="padding:0px;"><small>Assam</small></a></li>
                            <li><a href="#" id="bihar" class="dropdown-item" style="padding:0px;"><small>Bihar</small></a></li>
                            <li><a href="#" id="chattisgarh" class="dropdown-item" style="padding:0px;"><small>Chhatisgarh</small></a></li>
                            <li><a href="#" id="delhi" class="dropdown-item" style="padding:0px;"><small>Delhi</small></a></li>
                            <li><a href="#" id="goa" class="dropdown-item" style="padding:0px;"><small>Goa</small></a></li>
                            <li><a href="#" id="gujarat" class="dropdown-item" style="padding:0px;"><small>Gujarat</small></a></li>
                            <li><a href="#" id="haryana" class="dropdown-item" style="padding:0px;"><small>Haryana</small></a></li>
                            <li><a href="#" id="himachalpradesh" class="dropdown-item" style="padding:0px;"><small>Himachal Pradesh</small></a></li>
                            <li><a href="#" id="jammukashmir" class="dropdown-item" style="padding:0px;"><small>Jammu and Kashmir</small></a></li>
                            <li><a href="#" id="jharkhand" class="dropdown-item" style="padding:0px;"><small>Jharkhand</small></a></li>
                            <li><a href="#" id="karnataka" class="dropdown-item" style="padding:0px;"><small>Karnataka</small></a></li>
                            <li><a href="#" id="kerala" class="dropdown-item" style="padding:0px;"><small>Kerala</small></a></li>
                            <li><a href="#" id="madhyapradesh" class="dropdown-item" style="padding:0px;"><small>Madhya Pradesh</small></a></li>
                            <li><a href="#" id="maharashtra" class="dropdown-item" style="padding:0px;"><small>Maharashtra</small></a></li>
                            <li><a href="#" id="manipur" class="dropdown-item" style="padding:0px;"><small>Manipur</small></a></li>
                            <li><a href="#" id="meghalaya" class="dropdown-item" style="padding:0px;"><small>Meghalaya</small></a></li>
                            <li><a href="#" id="mizoram" class="dropdown-item" style="padding:0px;"><small>Mizoram</small></a></li>
                            <li><a href="#" id="nagaland" class="dropdown-item" style="padding:0px;"><small>Nagaland</small></a></li>
                            <li><a href="#" id="odisha" class="dropdown-item" style="padding:0px;"><small>Odisha</small></a></li>
                            <li><a href="#" id="punjab" class="dropdown-item" style="padding:0px;"><small>Punjab</small></a></li>
                            <li><a href="#" id="rajasthan" class="dropdown-item" style="padding:0px;"><small>Rajasthan</small></a></li>
                            <li><a href="#" id="sikkim" class="dropdown-item" style="padding:0px;"><small>Sikkim</small></a></li>
                            <li><a href="#" id="tamilnadu" class="dropdown-item" style="padding:0px;"><small>Tamil Nadu</small></a></li>
                            <li><a href="#" id="telangana" class="dropdown-item" style="padding:0px;"><small>Telangana</small></a></li>
                            <li><a href="#" id="tripura" class="dropdown-item" style="padding:0px;"><small>Tripura</small></a></li>
                            <li><a href="#" id="uttarpradesh" class="dropdown-item" style="padding:0px;"><small>Uttar Pradesh</small></a></li>
                            <li><a href="#" id="uttarakhand" class="dropdown-item" style="padding:0px;"><small>Uttrakhand</small></a></li>
                            <li><a href="#" id="westbengal" class="dropdown-item" style="padding:0px;"><small>West Bengal</small></a></li>
                            
                        </ul>
                      </div>

                    <!-- 2016 dropdown button -->

                      <div class="btn-group" id="drop2016" style="display:none;">
                        <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown">Select State<span class="caret"></span></button>
                        <ul class="dropdown-menu scrollable-menu" role="menu">
                            
                            <li><a href="#" id="india" class="dropdown-item" style="padding:0px;"><small>India</small></a></li>
                            <li><a href="#" id="andhrapradesh" class="dropdown-item" style="padding:0px;"><small>Andhra Pradesh</small></a></li>
                            <li><a href="#" id="arunachalpradesh" class="dropdown-item" style="padding:0px;"><small>Arunachal Pradesh</small></a></li>
                            <li><a href="#" id="assam" class="dropdown-item" style="padding:0px;"><small>Assam</small></a></li>
                            <li><a href="#" id="bihar" class="dropdown-item" style="padding:0px;"><small>Bihar</small></a></li>
                            <li><a href="#" id="chattisgarh" class="dropdown-item" style="padding:0px;"><small>Chhatisgarh</small></a></li>
                            <li><a href="#" id="delhi" class="dropdown-item" style="padding:0px;"><small>Delhi</small></a></li>
                            <li><a href="#" id="goa" class="dropdown-item" style="padding:0px;"><small>Goa</small></a></li>
                            <li><a href="#" id="gujarat" class="dropdown-item" style="padding:0px;"><small>Gujarat</small></a></li>
                            <li><a href="#" id="haryana" class="dropdown-item" style="padding:0px;"><small>Haryana</small></a></li>
                            <li><a href="#" id="himachalpradesh" class="dropdown-item" style="padding:0px;"><small>Himachal Pradesh</small></a></li>
                            <li><a href="#" id="jammukashmir" class="dropdown-item" style="padding:0px;"><small>Jammu and Kashmir</small></a></li>
                            <li><a href="#" id="jharkhand" class="dropdown-item" style="padding:0px;"><small>Jharkhand</small></a></li>
                            <li><a href="#" id="karnataka" class="dropdown-item" style="padding:0px;"><small>Karnataka</small></a></li>
                            <li><a href="#" id="kerala" class="dropdown-item" style="padding:0px;"><small>Kerala</small></a></li>
                            <li><a href="#" id="madhyapradesh" class="dropdown-item" style="padding:0px;"><small>Madhya Pradesh</small></a></li>
                            <li><a href="#" id="maharashtra" class="dropdown-item" style="padding:0px;"><small>Maharashtra</small></a></li>
                            <li><a href="#" id="manipur" class="dropdown-item" style="padding:0px;"><small>Manipur</small></a></li>
                            <li><a href="#" id="meghalaya" class="dropdown-item" style="padding:0px;"><small>Meghalaya</small></a></li>
                            <li><a href="#" id="mizoram" class="dropdown-item" style="padding:0px;"><small>Mizoram</small></a></li>
                            <li><a href="#" id="nagaland" class="dropdown-item" style="padding:0px;"><small>Nagaland</small></a></li>
                            <li><a href="#" id="odisha" class="dropdown-item" style="padding:0px;"><small>Odisha</small></a></li>
                            <li><a href="#" id="punjab" class="dropdown-item" style="padding:0px;"><small>Punjab</small></a></li>
                            <li><a href="#" id="rajasthan" class="dropdown-item" style="padding:0px;"><small>Rajasthan</small></a></li>
                            <li><a href="#" id="sikkim" class="dropdown-item" style="padding:0px;"><small>Sikkim</small></a></li>
                            <li><a href="#" id="tamilnadu" class="dropdown-item" style="padding:0px;"><small>Tamil Nadu</small></a></li>
                            <li><a href="#" id="telangana" class="dropdown-item" style="padding:0px;"><small>Telangana</small></a></li>
                            <li><a href="#" id="tripura" class="dropdown-item" style="padding:0px;"><small>Tripura</small></a></li>
                            <li><a href="#" id="uttarpradesh" class="dropdown-item" style="padding:0px;"><small>Uttar Pradesh</small></a></li>
                            <li><a href="#" id="uttarakhand" class="dropdown-item" style="padding:0px;"><small>Uttrakhand</small></a></li>
                            <li><a href="#" id="westbengal" class="dropdown-item" style="padding:0px;"><small>West Bengal</small></a></li>
                            
                        </ul>
                      </div>


                  <!-- 2017 dropdown button -->
                      <div class="btn-group" id="drop2017" style="display:none">
                        <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown">Select State<span class="caret"></span></button>
                        <ul class="dropdown-menu scrollable-menu" role="menu">
                            
                            <li><a href="#" id="india" class="dropdown-item" style="padding:0px;"><small>India</small></a></li>
                            <li><a href="#" id="andhrapradesh" class="dropdown-item" style="padding:0px;"><small>Andhra Pradesh</small></a></li>
                            <li><a href="#" id="arunachalpradesh" class="dropdown-item" style="padding:0px;"><small>Arunachal Pradesh</small></a></li>
                            <li><a href="#" id="assam" class="dropdown-item" style="padding:0px;"><small>Assam</small></a></li>
                            <li><a href="#" id="bihar" class="dropdown-item" style="padding:0px;"><small>Bihar</small></a></li>
                            <li><a href="#" id="chattisgarh" class="dropdown-item" style="padding:0px;"><small>Chhatisgarh</small></a></li>
                            <li><a href="#" id="delhi" class="dropdown-item" style="padding:0px;"><small>Delhi</small></a></li>
                            <li><a href="#" id="goa" class="dropdown-item" style="padding:0px;"><small>Goa</small></a></li>
                            <li><a href="#" id="gujarat" class="dropdown-item" style="padding:0px;"><small>Gujarat</small></a></li>
                            <li><a href="#" id="haryana" class="dropdown-item" style="padding:0px;"><small>Haryana</small></a></li>
                            <li><a href="#" id="himachalpradesh" class="dropdown-item" style="padding:0px;"><small>Himachal Pradesh</small></a></li>
                            <li><a href="#" id="jammukashmir" class="dropdown-item" style="padding:0px;"><small>Jammu and Kashmir</small></a></li>
                            <li><a href="#" id="jharkhand" class="dropdown-item" style="padding:0px;"><small>Jharkhand</small></a></li>
                            <li><a href="#" id="karnataka" class="dropdown-item" style="padding:0px;"><small>Karnataka</small></a></li>
                            <li><a href="#" id="kerala" class="dropdown-item" style="padding:0px;"><small>Kerala</small></a></li>
                            <li><a href="#" id="madhyapradesh" class="dropdown-item" style="padding:0px;"><small>Madhya Pradesh</small></a></li>
                            <li><a href="#" id="maharashtra" class="dropdown-item" style="padding:0px;"><small>Maharashtra</small></a></li>
                            <li><a href="#" id="manipur" class="dropdown-item" style="padding:0px;"><small>Manipur</small></a></li>
                            <li><a href="#" id="meghalaya" class="dropdown-item" style="padding:0px;"><small>Meghalaya</small></a></li>
                            <li><a href="#" id="mizoram" class="dropdown-item" style="padding:0px;"><small>Mizoram</small></a></li>
                            <li><a href="#" id="nagaland" class="dropdown-item" style="padding:0px;"><small>Nagaland</small></a></li>
                            <li><a href="#" id="odisha" class="dropdown-item" style="padding:0px;"><small>Odisha</small></a></li>
                            <li><a href="#" id="punjab" class="dropdown-item" style="padding:0px;"><small>Punjab</small></a></li>
                            <li><a href="#" id="rajasthan" class="dropdown-item" style="padding:0px;"><small>Rajasthan</small></a></li>
                            <li><a href="#" id="sikkim" class="dropdown-item" style="padding:0px;"><small>Sikkim</small></a></li>
                            <li><a href="#" id="tamilnadu" class="dropdown-item" style="padding:0px;"><small>Tamil Nadu</small></a></li>
                            <li><a href="#" id="telangana" class="dropdown-item" style="padding:0px;"><small>Telangana</small></a></li>
                            <li><a href="#" id="tripura" class="dropdown-item" style="padding:0px;"><small>Tripura</small></a></li>
                            <li><a href="#" id="uttarpradesh" class="dropdown-item" style="padding:0px;"><small>Uttar Pradesh</small></a></li>
                            <li><a href="#" id="uttarakhand" class="dropdown-item" style="padding:0px;"><small>Uttrakhand</small></a></li>
                            <li><a href="#" id="westbengal" class="dropdown-item" style="padding:0px;"><small>West Bengal</small></a></li>
                            
                        </ul>
                      </div>

                <!-- 2018 dropdown button -->
                      <div class="btn-group" id="drop2018">
                        <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown">Select State<span class="caret"></span></button>
                        <ul class="dropdown-menu scrollable-menu" role="menu">
                            
                            <li><a href="#" id="india" class="dropdown-item" style="padding:0px;"><small>India</small></a></li>
                            <li><a href="#" id="andhrapradesh" class="dropdown-item" style="padding:0px;"><small>Andhra Pradesh</small></a></li>
                            <li><a href="#" id="arunachalpradesh" class="dropdown-item" style="padding:0px;"><small>Arunachal Pradesh</small></a></li>
                            <li><a href="#" id="assam" class="dropdown-item" style="padding:0px;"><small>Assam</small></a></li>
                            <li><a href="#" id="bihar" class="dropdown-item" style="padding:0px;"><small>Bihar</small></a></li>
                            <li><a href="#" id="chattisgarh" class="dropdown-item" style="padding:0px;"><small>Chhatisgarh</small></a></li>
                            <li><a href="#" id="delhi" class="dropdown-item" style="padding:0px;"><small>Delhi</small></a></li>
                            <li><a href="#" id="goa" class="dropdown-item" style="padding:0px;"><small>Goa</small></a></li>
                            <li><a href="#" id="gujarat" class="dropdown-item" style="padding:0px;"><small>Gujarat</small></a></li>
                            <li><a href="#" id="haryana" class="dropdown-item" style="padding:0px;"><small>Haryana</small></a></li>
                            <li><a href="#" id="himachalpradesh" class="dropdown-item" style="padding:0px;"><small>Himachal Pradesh</small></a></li>
                            <li><a href="#" id="jammukashmir" class="dropdown-item" style="padding:0px;"><small>Jammu and Kashmir</small></a></li>
                            <li><a href="#" id="jharkhand" class="dropdown-item" style="padding:0px;"><small>Jharkhand</small></a></li>
                            <li><a href="#" id="karnataka" class="dropdown-item" style="padding:0px;"><small>Karnataka</small></a></li>
                            <li><a href="#" id="kerala" class="dropdown-item" style="padding:0px;"><small>Kerala</small></a></li>
                            <li><a href="#" id="madhyapradesh" class="dropdown-item" style="padding:0px;"><small>Madhya Pradesh</small></a></li>
                            <li><a href="#" id="maharashtra" class="dropdown-item" style="padding:0px;"><small>Maharashtra</small></a></li>
                            <li><a href="#" id="manipur" class="dropdown-item" style="padding:0px;"><small>Manipur</small></a></li>
                            <li><a href="#" id="meghalaya" class="dropdown-item" style="padding:0px;"><small>Meghalaya</small></a></li>
                            <li><a href="#" id="mizoram" class="dropdown-item" style="padding:0px;"><small>Mizoram</small></a></li>
                            <li><a href="#" id="nagaland" class="dropdown-item" style="padding:0px;"><small>Nagaland</small></a></li>
                            <li><a href="#" id="odisha" class="dropdown-item" style="padding:0px;"><small>Odisha</small></a></li>
                            <li><a href="#" id="punjab" class="dropdown-item" style="padding:0px;"><small>Punjab</small></a></li>
                            <li><a href="#" id="rajasthan" class="dropdown-item" style="padding:0px;"><small>Rajasthan</small></a></li>
                            <li><a href="#" id="sikkim" class="dropdown-item" style="padding:0px;"><small>Sikkim</small></a></li>
                            <li><a href="#" id="tamilnadu" class="dropdown-item" style="padding:0px;"><small>Tamil Nadu</small></a></li>
                            <li><a href="#" id="telangana" class="dropdown-item" style="padding:0px;"><small>Telangana</small></a></li>
                            <li><a href="#" id="tripura" class="dropdown-item" style="padding:0px;"><small>Tripura</small></a></li>
                            <li><a href="#" id="uttarpradesh" class="dropdown-item" style="padding:0px;"><small>Uttar Pradesh</small></a></li>
                            <li><a href="#" id="uttarakhand" class="dropdown-item" style="padding:0px;"><small>Uttrakhand</small></a></li>
                            <li><a href="#" id="westbengal" class="dropdown-item" style="padding:0px;"><small>West Bengal</small></a></li>
                            
                        </ul>
                      </div>



                </div>

              </div>
             
                
                <h5>Cause of Accidents</h5>
                <p style="margin-bottom:0.5rem;"><span style="border-left:5px solid #A3A0FB;" id="l-overspeeding">&nbsp;OverSpeeding &nbsp;&nbsp;</span>
                  <span style="border-left:5px solid #55D8FE;" id="l-wrongside">&nbsp;Driving on Wrong Side &nbsp;&nbsp;</span>
                  <span style="border-left:5px solid #FF8373;" id="l-overtaking">&nbsp;Overtaking &nbsp;&nbsp;</span>
                  <span style="border-left:5px solid #FFDA83;" id="l-mobile">&nbsp;Use of Mobile/Driver Fatigue etc &nbsp;&nbsp;</span>
                  <span style="border-left:5px solid #34435E;" id="l-noviolation">&nbsp;No Violation &nbsp;&nbsp;</span>
                  <span style="border-left:5px solid #55D8FE;display:none" id="l-drunkdriving">&nbsp;Drunk & Drive &nbsp;&nbsp;</span>
                  <span style="border-left:5px solid #FF8373;display:none" id="l-improperpassing">&nbsp;Improper Passing &nbsp;&nbsp;</span>
                  <span style="border-left:5px solid #FFDA83;display:none" id="l-improperdirection">&nbsp;Improper Direction &nbsp;&nbsp;</span>
                  <span style="border-left:5px solid #A3A0FB;display:none" id="l-overloading">&nbsp;OverLoading &nbsp;&nbsp;</span>
                  <span style="border-left:5px solid #FF8373;display:none" id="l-defect">&nbsp;Defect in Road Condition &nbsp;&nbsp;</span>
                  <span style="border-left:5px solid #AFD35D;" id="l-unknown">&nbsp;Other Causes/Unknown &nbsp;&nbsp;</span>
                <br />
                  
       
          <p style="display:flex;margin-bottom:0.5rem;">
            <span id="overspeeding" style="background-color: rgb(163, 160, 251); color: rgb(163, 160, 251); width: 70%;">.</span>
            <span id="wrongside" style="background-color: rgb(85, 216, 254); color: rgb(85, 216, 254); width: 6%;">.</span>
            <span id="overtaking" style="background-color: rgb(255, 131, 115); color: rgb(255, 131, 115); width: 2%;">.</span>
            <span id="useofmobile" style="background-color: rgb(255, 218, 131); color: rgb(255, 218, 131); width: 1%;">.</span>
            <span id="noviolation" style="background-color: rgb(52, 67, 94); color: rgb(52, 67, 94); width: 3%;">.</span>
            <span id="drunkdriving" style="background-color:#55D8FE;color:#55D8FE;width:0%">.</span>
            <span id="improperpassing" style="background-color:#FF8373;color:#FF8373;width:0%">.</span>
            <span id="improperdirection" style="background-color:#FFDA83;color:#FFDA83;width:0%">.</span>
            <span id="overloading" style="background-color:#A3A0FB;color:#A3A0FB;width:0%">.</span>
            <span id="defect" style="background-color:#FF8373;color:#FF8373;width:0%">.</span>
            <span id="othercauses" style="background-color: rgb(175, 211, 93); color: rgb(175, 211, 93); width: 18%;">.</span>

          </p>






                <!-- </p> -->
                  <!-- color paragraph -->
                <!-- </p> -->
              </div>
          </div>


            <!-- After image -->
            <!-- <div class="row">
              <div class="col-5" style="background: white;">
                <h4 style="text-align:center;font-weight:800;font-family:'Source Sans Pro',sans-serif;font-size:21px;" id="state">India</h4>
                <span style="color:#43425D;font-size:11.5px;">
                  No. of Deaths(Road Users)
                </span>


            
              
              <div class="container">

                <div class="row">
                  <div class="col-7" style="padding:0px;">
                    <span style="font-size:13px;">Pedestrian</span>
                  </div>
                  <div class="col-5" style="padding:0px;">
                    <span id="pedestrian" style="font-size:13px;">22656</span>
                  </div>
                </div>

                <div class="row">
                  <div class="col-7" style="padding:0px;">
                    <span style="font-size:13px;">2 Wheelers</span>
                  </div>
                  <div class="col-5" style="padding:0px;">
                    <span id="two-wheelers" style="font-size:13px;">55336</span>
                  </div>
                </div>`

                <div class="row">
                  <div class="col-7" style="padding:0px;">
                    <span style="font-size:13px;">4 Wheelers</span>
                  </div>
                  <div class="col-5" style="padding:0px;">
                    <span id="four-wheelers" style="font-size:13px;">25115</span>
                  </div>
                </div>

                <div class="row">
                  <div class="col-7" style="padding:0px;">
                    <span style="font-size:13px;">Heavy Vehicle</span>
                  </div>
                  <div class="col-5" style="padding:0px;">
                    <span id="heavy-vehicle" style="font-size:13px;">23314</span>
                  </div>
                </div>
              </div>

                

              </div>



              <div class="col-4" style="background:white;">
                <h5 style="font-size:11.8px;">Fatality Age Group Data (No. of person)</h5>
              <div class="row">
                <div class="col-7" style="padding:0px;">
                  <span style="font-size:13px;">&lt;18 year</span>
                </div>
                <div class="col-5"  style="padding:0px;">
                  <span id="lt18" style="font-size:13px;">9977</span>
                </div>
              </div>
                
                <div class="row">
                  <div class="col-7" style="padding:0px;">
                    <span style="font-size:13px;">18-35 years</span>
                  </div>
                  <div class="col-5" id="lt18" style="padding:0px;">
                    <span id="18-35" style="font-size:13px;">66004</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-7" style="padding:0px;">
                    <span style="font-size:13px;">35-60 years</span>
                  </div>
                  <div class="col-5" id="lt18" style="padding:0px;">
                    <span id="35-60" style="font-size:13px;">34603</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-7" style="padding:0px;">
                    <span style="font-size:13px;">&gt;60 year</span>
                  </div>
                  <div class="col-5" id="lt18" style="padding:0px;">
                    <span id="gt60" style="font-size:13px;">5385</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-7" style="padding:0px;">
                    <span style="font-size:13px;">Unknown age</span>
                  </div>
                  <div class="col-5" id="lt18" style="padding:0px;">
                    <span id="unknown-age" style="font-size:13px;">4158</span>
                  </div>
                </div>

              </div>

              <div class="col-3" style="background: white;">
                <div class="row">
                  <div class="col-12" style="padding:0px;">
                    <span style="font-size:13px;">Total accidents</span>
                  </div>
                  <div class="col-12" style="padding:0px;">
                    <span id="total_a" style="font-weight:bold;">467044</span>
                  </div>
                </div>
                <div class="row">
                    <div class="col-12" style="padding:0px;">
                    <span style="font-size:13px;">Total injured</span>
                    </div>
                    <div class="col-12" style="padding:0px;">
                      <span id="total_i" style="font-weight:bold;">469418</span>
                    </div>
                </div>
                  <div class="row">
                      <div class="col-12" style="padding:0px;">
                        <span style="font-size:13px;">Total Deaths</span>
                      </div>
                      <div class="col-12" style="padding:0px;">
                        <span id="total_d" style="font-weight:bold;">151417</span>
                      </div>
                  </div>
              </div>
            </div> -->

            <!-- 2nd part  -->
            <div class="row">
              <div class="col" style="background:white;padding:0px;margin-left:2px;margin-right:2px;">
                <h4 style="text-align:center;font-weight:800;font-family:'Source Sans Pro',sans-serif;font-size:21px;" id="state">India</h4>
                <div style="color:#43425D;font-size:11.5px;" class="text-center">
                  No. of Deaths(Road Users)
                </div>
                <div class="d-flex justify-content-between">
                  <div style="font-size:13px;">Pedestrian</div>
                  <div id="pedestrian" style="font-size:13px;">22656</div>
                  
                </div>
                <div class="d-flex justify-content-between">
                  <div style="font-size:13px;">2 Wheelers</div>
                  <div id="two-wheelers" style="font-size:13px;">55336</div>
                  
                </div>
                <div class="d-flex justify-content-between">
                  <div style="font-size:13px;">4 Wheelers</div>
                  <div id="four-wheelers" style="font-size:13px;">25115</div>
                  
                </div>
                <div class="d-flex justify-content-between">
                  <div style="font-size:13px;">Heavy Vehicle</div>
                  <div id="heavy-vehicle" style="font-size:13px;">23314</div>
                  
                </div>


                
              </div>

              <div class="col" style="background:white;padding:0px;margin-left:2px;margin-right:2px;">
                  <h5 style="font-size:11.8px;" class="text-center">Fatality Age Group Data (No. of person)</h5>
                  <div class="d-flex justify-content-between">
                      <div style="font-size:13px;">&lt;18 year</div>
                      <div id="lt18" style="font-size:13px;">9977</div>
                  </div>
                  <div class="d-flex justify-content-between">
                      <div style="font-size:13px;">18-35 years</div>
                      <div id="18-35" style="font-size:13px;">66004</div>
                  </div>
                  <div class="d-flex justify-content-between">
                      <div style="font-size:13px;">35-60 years</div>
                      <div id="35-60" style="font-size:13px;">34603</div>
                  </div>
                  <div class="d-flex justify-content-between">
                      <div style="font-size:13px;">&gt;60 year</div>
                      <div id="gt60" style="font-size:13px;">5385</div>
                  </div>
                  <div class="d-flex justify-content-between">
                      <div style="font-size:13px;">Unknown age</div>
                      <div id="unknown-age" style="font-size:13px;">4158</div>
                  </div>
              </div>
              <div class="col" style="background:white;padding:0px;margin-left:2px;margin-right:2px;">
                  <!-- <h4>Total accidents</h4> -->
                  <div style="font-size:18px;" class="text-center">Total accidents</div>
                  <div id="total_a" style="font-weight:bold;" class="text-center">467044</div>
                  <div style="font-size:18px;" class="text-center">Total injured</div>
                  <div id="total_i" style="font-weight:bold;" class="text-center">469418</div>
                  <div style="font-size:18px;" class="text-center">Total Deaths</div>
                  <div id="total_d" style="font-weight:bold;" class="text-center">151417</div>
              </div>
              
            </div>


            <!-- 2nd part end -->

            <!-- Before refresh in -->

            
            <!-- <div class="col-6" style="padding-top:0px"> -->
              <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body" style="padding: 10px;">
                  <h6 class="card-title" style="text-align:center;">Refresh in : <span class="refresh" style="font-weight:600"></span></h6>
                  <div class="row refreshrow" style="height:120px;padding:0px 10px 10px;margin-bottom:7px;">
                    <div class="col-4" class="mx-auto" style="padding-left:5px;padding-right:5px;text-align:center;">
                      <!-- <div style="background-color:#A3A0FB;color:white;height:-webkit-fill-available;" class="accident-number1">
      
                      </div> -->
                      <div style="background-color:#A3A0FB;color:white;width: 90px; height: 34px; border-radius: 23px;" class="accident-number1">
                        <div  style="position:relative; top: 32px; width: 90px; height: 90px; color: white; text-align:center;" class="mx-auto">204423</div>
                        
                      </div>
                      <span style="font-weight:600;">Accidents</span>
                    </div>


                    <div class="col-4" class="mx-auto" style="padding-left:5px;padding-right:5px;text-align:center;">
                      <div style="background-color:#FFDA83;color:white;width: 90px; height: 34px; border-radius: 23px;" class="injury-number1">
                        <!-- <span id="injured"></span> -->
                        <div  style="position:relative; top: 32px; width: 90px; height: 90px; color: white; text-align:center;" class="mx-auto">206906</div>
                        
                      </div><span style="font-weight:600;">Injured</span>
                    </div>
                    <div class="col-4" class="mx-auto" style="padding-left:5px;padding-right:5px;text-align:center;">
                      <div style="background-color:#FF8373;color:white;width: 90px; height: 34px; border-radius: 23px;" class="kill-number1">
                        <!-- <span id="died"></span> -->
                        <div  style="position:relative; top: 32px; width: 90px; height: 90px; color: white; text-align:center;" class="mx-auto">62101</div>
                      </div>
                      <span style="font-weight:600;">Died</span>
                    </div>
                  </div>
                  <p style="margin-bottom:0px; text-align:center;font-size:0.8em;">As per last year trend till date this year</p>
                </div>
              </div>
            </div>
            <div class="col-12" style="margin-top:10px">
              <div class="card">
                <div class="card-body" style="padding:8px;">
                  <h5 class="card-title" style="font-weight:600">Resources</h5>
                  <div>
                    <p class="card-text" style="color:#4D4F5C;background-color:#FAFAFA;font-size:14px;margin-bottom:0.2rem;border-bottom:0px solid #4D4F5C;font-weight:600;">Aug 2017: <a target="_blank" style = "color: #4D4F5C;" href="https://www.road-safety.co.in/isafe/">iSAFE launched by IRSC</a></p>
                    <p class="card-text" style="color:#4D4F5C;background-color:#FAFAFA;font-size:14px;margin-bottom:0.2rem;border-bottom:0px solid #4D4F5C;font-weight:600;">Aug 2017: <a target="_blank" style = "color: #4D4F5C;" href="https://www.unece.org/fileadmin/DAM/trans/publications/WP29/United_Nations_Motorcycle_Helmet_Study.pdf">The United Nations Motorcycle Helmet Study</a></p>
                    <p class="card-text" style="color:#4D4F5C;background-color:#FAFAFA;font-size:14px;margin-bottom:0.2rem;border-bottom:0px solid #4D4F5C;font-weight:600;">Aug 2017: <a target="_blank" style = "color: #4D4F5C;" href = "http://www.searo.who.int/publications/journals/seajph/issues/thevalidityofselfreportedhelmethelmetuseamongmotocyclistinindia.pdf">The validity of self-reported helmet in India</a></p>
                    <p class="card-text" style="color:#4D4F5C;background-color:#FAFAFA;font-size:14px;margin-bottom:0.2rem;border-bottom:0px solid #4D4F5C;font-weight:600;">Aug 2017: <a target="_blank" style = "color: #4D4F5C;" href="http://www.who.int/violence_injury_prevention/publications/road_traffic/media-campaigns/en/">Violence and Injury Prevention</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12" style="margin-top:10px">
              <div class="card">
                <div class="card-body">
                  <iframe id="nitingatkari" src="https://www.youtube.com/embed/D6hHJmqdsH8?list=UUC9OIqNPYnqsGQkG-JJLvxw" frameborder="0" allowfullscreen="" width="100%"></iframe>
                  <p style="color:#43425D;margin-top:10px;">Contribute some similar impactful material or ideas to our resource bank</p>
                </div>
              </div>
            </div>
          </div>


      


          </div>


          

        
          </div>
              

              <div class="container-fluid">
                <div class="bg-white">
                  <p style="text-align:center;">Developed and Maintained by IRSC</p>
                  <p style="font-size:14px;">Credits: Dipak K. Dash, WHO and Johns Hopkins Bloomberg Fellow</p>

                </div>
                
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
      //India dropdown
      $("#drop2016").on('click','#india',function(){
         let stats = <?php echo calcCasuality('India'); ?>;
          $('#total_a').text(stats.total);
          $('#total_i').text(stats.injured);
          $('#total_d').text(stats.deaths);
      });
      $("#drop2016").on('click','#india',function(){
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
      $("#drop2016").on('click','#india',function(){
         let stats = <?php echo reasons('India'); ?>;
          $('#overspeeding').css('width',stats.overspeeding+"%");
          $('#wrongside').css('width',stats.wrongside+"%");
          $('#overtaking').css('width',stats.overtaking+"%");
          $('#useofmobile').css('width',stats.useofmobile+"%");
          $('#othercauses').css('width',stats.othercauses+"%");
      });

        //India year button
      
      $("#dropbutton2016").click(function(){
         let stats = <?php echo calcCasuality('India'); ?>;
          $('#total_a').text(stats.total);
          $('#total_i').text(stats.injured);
          $('#total_d').text(stats.deaths);
      });

      $("#dropbutton2016").click(function(){
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
      $("#dropbutton2016").click(function(){
         let stats = <?php echo reasons('India'); ?>;
          $('#overspeeding').css('width',stats.overspeeding+"%");
          $('#wrongside').css('width',stats.wrongside+"%");
          $('#overtaking').css('width',stats.overtaking+"%");
          $('#useofmobile').css('width',stats.useofmobile+"%");
          $('#othercauses').css('width',stats.othercauses+"%");
      });

        //Jammu and Kashmir
        $("#drop2016").on('click','#jammukashmir',function(){
          let stats = <?php echo calcCasuality('Jammu & Kashmir'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#jammukashmir',function(){
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
        $("#drop2016").on('click','#jammukashmir',function(){
           let stats = <?php echo reasons('Jammu & Kashmir'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Himachal Pradesh
        $("#drop2016").on('click','#himachalpradesh',function(){
          let stats = <?php echo calcCasuality('Himachal Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#himachalpradesh',function(){
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
        $("#drop2016").on('click','#himachalpradesh',function(){
           let stats = <?php echo reasons('Himachal Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Punjab
        $("#drop2016").on('click','#punjab',function(){
          let stats = <?php echo calcCasuality('Punjab'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#punjab',function(){
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
        $("#drop2016").on('click','#punjab',function(){
           let stats = <?php echo reasons('Punjab'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Punjab
        $("#drop2016").on('click','#uttarakhand',function(){
          let stats = <?php echo calcCasuality('Uttarakhand'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#uttarakhand',function(){
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
        $("#drop2016").on('click','#uttarakhand',function(){
           let stats = <?php echo reasons('Uttarakhand'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Haryana
        $("#drop2016").on('click','#haryana',function(){
          let stats = <?php echo calcCasuality('Haryana'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#haryana',function(){
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
        $("#drop2016").on('click','#haryana',function(){
           let stats = <?php echo reasons('Haryana'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Uttar Pradesh
        $("#drop2016").on('click','#uttarpradesh',function(){
          let stats = <?php echo calcCasuality('Uttar Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#uttarpradesh',function(){
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
        $("#drop2016").on('click','#uttarpradesh',function(){
           let stats = <?php echo reasons('Uttar Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });


        //Rajasthan
        $("#drop2016").on('click','#rajasthan',function(){
          let stats = <?php echo calcCasuality('Rajasthan'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#rajasthan',function(){
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
        $("#drop2016").on('click','#rajasthan',function(){
           let stats = <?php echo reasons('Rajasthan'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Delhi
        $("#drop2016").on('click','#delhi',function(){
          let stats = <?php echo calcCasuality('Delhi'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#delhi',function(){
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
        $("#drop2016").on('click','#delhi',function(){
           let stats = <?php echo reasons('Delhi'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Bihar
        $("#drop2016").on('click','#bihar',function(){
          let stats = <?php echo calcCasuality('Bihar'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#bihar',function(){
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
        $("#drop2016").on('click','#bihar',function(){
           let stats = <?php echo reasons('Bihar'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Sikkim
        $("#drop2016").on('click','#sikkim',function(){
          let stats = <?php echo calcCasuality('Sikkim'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#sikkim',function(){
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
        $("#drop2016").on('click','#sikkim',function(){
           let stats = <?php echo reasons('Sikkim'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //West Bengal
        $("#drop2016").on('click','#westbengal',function(){
          let stats = <?php echo calcCasuality('West Bengal'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#westbengal',function(){
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
        $("#drop2016").on('click','#westbengal',function(){
           let stats = <?php echo reasons('West Bengal'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });


        //Assam
        $("#drop2016").on('click','#assam',function(){
          let stats = <?php echo calcCasuality('Assam'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#assam',function(){
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
        $("#drop2016").on('click','#assam',function(){
           let stats = <?php echo reasons('Assam'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Tripura
        $("#drop2016").on('click','#tripura',function(){
          let stats = <?php echo calcCasuality('Tripura'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#tripura',function(){
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
        $("#drop2016").on('click','#tripura',function(){
           let stats = <?php echo reasons('Tripura'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Meghalaya
        $("#drop2016").on('click','#meghalaya',function(){
          let stats = <?php echo calcCasuality('Meghalaya'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#meghalaya',function(){
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
        $("#drop2016").on('click','#meghalaya',function(){
           let stats = <?php echo reasons('Meghalaya'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Mizoram
        $("#drop2016").on('click','#mizoram',function(){
          let stats = <?php echo calcCasuality('Mizoram'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#mizoram',function(){
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
        $("#drop2016").on('click','#mizoram',function(){
           let stats = <?php echo reasons('Mizoram'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Manipur
        $("#drop2016").on('click','#manipur',function(){
          let stats = <?php echo calcCasuality('Manipur'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#manipur',function(){
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
        $("#drop2016").on('click','#manipur',function(){
           let stats = <?php echo reasons('Manipur'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Nagaland
        $("#drop2016").on('click','#nagaland',function(){
          let stats = <?php echo calcCasuality('Nagaland'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#nagaland',function(){
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
        $("#drop2016").on('click','#nagaland',function(){
           let stats = <?php echo reasons('Nagaland'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Arunachal Pradesh
        $("#drop2016").on('click','#arunachalpradesh',function(){
          let stats = <?php echo calcCasuality('Arunachal Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#arunachalpradesh',function(){
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
        $("#drop2016").on('click','#arunachalpradesh',function(){
           let stats = <?php echo reasons('Arunachal Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Jharkhand
        $("#drop2016").on('click','#jharkhand',function(){
          let stats = <?php echo calcCasuality('Jharkhand'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#jharkhand',function(){
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
        $("#drop2016").on('click','#jharkhand',function(){
           let stats = <?php echo reasons('Jharkhand'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Chhattisgarh
        $("#drop2016").on('click','#chattisgarh',function(){
          let stats = <?php echo calcCasuality('Chhattisgarh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#chattisgarh',function(){
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
        $("#drop2016").on('click','#chattisgarh',function(){
           let stats = <?php echo reasons('Chhattisgarh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Madhya Pradesh
        $("#drop2016").on('click','#madhyapradesh',function(){
          let stats = <?php echo calcCasuality('Madhya Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#madhyapradesh',function(){
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
        $("#drop2016").on('click','#madhyapradesh',function(){
           let stats = <?php echo reasons('Madhya Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Gujarat
        $("#drop2016").on('click','#gujarat',function(){
          let stats = <?php echo calcCasuality('Gujarat'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#gujarat',function(){
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
        $("#drop2016").on('click','#gujarat',function(){
           let stats = <?php echo reasons('Gujarat'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Orissa
        $("#drop2016").on('click','#odisha',function(){
          let stats = <?php echo calcCasuality('Odisha'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#odisha',function(){
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
        $("#drop2016").on('click','#odisha',function(){
           let stats = <?php echo reasons('Odisha'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Maharashtra
        $("#drop2016").on('click','#maharashtra',function(){
          let stats = <?php echo calcCasuality('Maharashtra'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#maharashtra',function(){
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
        $("#drop2016").on('click','#maharashtra',function(){
           let stats = <?php echo reasons('Maharashtra'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Telangana
        $("#drop2016").on('click','#telangana',function(){
          let stats = <?php echo calcCasuality('Telangana'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#telangana',function(){
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
        $("#drop2016").on('click','#telangana',function(){
           let stats = <?php echo reasons('Telangana'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Andhra Pradesh
        $("#drop2016").on('click','#andhrapradesh',function(){
          let stats = <?php echo calcCasuality('Andhra Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#andhrapradesh',function(){
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
        $("#drop2016").on('click','#andhrapradesh',function(){
           let stats = <?php echo reasons('Andhra Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Goa
        $("#drop2016").on('click','#goa',function(){
          let stats = <?php echo calcCasuality('Goa'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#goa',function(){
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
        $("#drop2016").on('click','#goa',function(){
           let stats = <?php echo reasons('Goa'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Karnataka
        $("#drop2016").on('click','#karnataka',function(){
          let stats = <?php echo calcCasuality('Karnataka'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#karnataka',function(){
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
        $("#drop2016").on('click','#karnataka',function(){
           let stats = <?php echo reasons('Karnataka'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Tamil Nadu
        $("#drop2016").on('click','#tamilnadu',function(){
          let stats = <?php echo calcCasuality('Tamil Nadu'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#tamilnadu',function(){
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
        $("#drop2016").on('click','#tamilnadu',function(){
           let stats = <?php echo reasons('Tamil Nadu'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Kerala
        $("#drop2016").on('click','#kerala',function(){
          let stats = <?php echo calcCasuality('Kerala'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2016").on('click','#kerala',function(){
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
        $("#drop2016").on('click','#kerala',function(){
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
      //India dropdown
      $("#drop2017").on('click','#india',function(){
         let stats = <?php echo calcCasuality2017('India'); ?>;
          $('#total_a').text(stats.total);
          $('#total_i').text(stats.injured);
          $('#total_d').text(stats.deaths);
      });
      $("#drop2017").on('click','#india',function(){
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
      $("#drop2017").on('click','#india',function(){
         let stats = <?php echo reasons2017('India'); ?>;
          $('#overspeeding').css('width',stats.overspeeding+"%");
          $('#wrongside').css('width',stats.wrongside+"%");
          $('#noviolation').css('width',stats.noviolation+"%");
          $('#overtaking').css('width',stats.overtaking+"%");
          $('#useofmobile').css('width',stats.useofmobile+"%");
          $('#othercauses').css('width',stats.othercauses+"%");
      });

      //India year button
      $("#dropbutton2017").click(function(){
         let stats = <?php echo calcCasuality2017('India'); ?>;
          $('#total_a').text(stats.total);
          $('#total_i').text(stats.injured);
          $('#total_d').text(stats.deaths);
      });
      $("#dropbutton2017").click(function(){
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
      $("#dropbutton2017").click(function(){
         let stats = <?php echo reasons2017('India'); ?>;
          $('#overspeeding').css('width',stats.overspeeding+"%");
          $('#wrongside').css('width',stats.wrongside+"%");
          $('#noviolation').css('width',stats.noviolation+"%");
          $('#overtaking').css('width',stats.overtaking+"%");
          $('#useofmobile').css('width',stats.useofmobile+"%");
          $('#othercauses').css('width',stats.othercauses+"%");
      });

        //Jammu and Kashmir
        $("#drop2017").on('click','#jammukashmir',function(){
          let stats = <?php echo calcCasuality2017('Jammu & Kashmir'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
            console.log('hello world');
        });
        $("#drop2017").on('click','#jammukashmir',function(){
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
        $("#drop2017").on('click','#jammukashmir',function(){
           let stats = <?php echo reasons2017('Jammu & Kashmir'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Himachal Pradesh
        $("#drop2017").on('click','#himachalpradesh',function(){
          let stats = <?php echo calcCasuality2017('Himachal Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#himachalpradesh',function(){
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
        $("#drop2017").on('click','#himachalpradesh',function(){
           let stats = <?php echo reasons2017('Himachal Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Punjab
        $("#drop2017").on('click','#punjab',function(){
          let stats = <?php echo calcCasuality2017('Punjab'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#punjab',function(){
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
        $("#drop2017").on('click','#punjab',function(){
           let stats = <?php echo reasons2017('Punjab'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Uttarakhand
        $("#drop2017").on('click','#uttarakhand',function(){
          let stats = <?php echo calcCasuality2017('Uttarakhand'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#uttarakhand',function(){
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
        $("#drop2017").on('click','#uttarakhand',function(){
           let stats = <?php echo reasons2017('Uttarakhand'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Haryana
        $("#drop2017").on('click','#haryana',function(){
          let stats = <?php echo calcCasuality2017('Haryana'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#haryana',function(){
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
        $("#drop2017").on('click','#haryana',function(){
           let stats = <?php echo reasons2017('Haryana'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Uttar Pradesh
        $("#drop2017").on('click','#uttarpradesh',function(){
          let stats = <?php echo calcCasuality2017('Uttar Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#uttarpradesh',function(){
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
        $("#drop2017").on('click','#uttarpradesh',function(){
           let stats = <?php echo reasons2017('Uttar Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });


        //Rajasthan
        $("#drop2017").on('click','#rajasthan',function(){
          let stats = <?php echo calcCasuality2017('Rajasthan'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#rajasthan',function(){
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
        $("#drop2017").on('click','#rajasthan',function(){
           let stats = <?php echo reasons2017('Rajasthan'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Delhi
        $("#drop2017").on('click','#delhi',function(){
          let stats = <?php echo calcCasuality2017('Delhi'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#delhi',function(){
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
        $("#drop2017").on('click','#delhi',function(){
           let stats = <?php echo reasons2017('Delhi'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Bihar
        $("#drop2017").on('click','#bihar',function(){
          let stats = <?php echo calcCasuality2017('Bihar'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#bihar',function(){
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
        $("#drop2017").on('click','#bihar',function(){
           let stats = <?php echo reasons2017('Bihar'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Sikkim
        $("#drop2017").on('click','#sikkim',function(){
          let stats = <?php echo calcCasuality2017('Sikkim'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#sikkim',function(){
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
        $("#drop2017").on('click','#sikkim',function(){
           let stats = <?php echo reasons2017('Sikkim'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //West Bengal
        $("#drop2017").on('click','#westbengal',function(){
          let stats = <?php echo calcCasuality2017('West Bengal'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#westbengal',function(){
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
        $("#drop2017").on('click','#westbengal',function(){
           let stats = <?php echo reasons2017('West Bengal'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });


        //Assam
        $("#drop2017").on('click','#assam',function(){
          let stats = <?php echo calcCasuality2017('Assam'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#assam',function(){
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
        $("#drop2017").on('click','#assam',function(){
           let stats = <?php echo reasons2017('Assam'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Tripura
        $("#drop2017").on('click','#tripura',function(){
          let stats = <?php echo calcCasuality2017('Tripura'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#tripura',function(){
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
        $("#drop2017").on('click','#tripura',function(){
           let stats = <?php echo reasons2017('Tripura'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Meghalaya
        $("#drop2017").on('click','#meghalaya',function(){
          let stats = <?php echo calcCasuality2017('Meghalaya'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#meghalaya',function(){
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
        $("#drop2017").on('click','#meghalaya',function(){
           let stats = <?php echo reasons2017('Meghalaya'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Mizoram
        $("#drop2017").on('click','#mizoram',function(){
          let stats = <?php echo calcCasuality2017('Mizoram'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#mizoram',function(){
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
        $("#drop2017").on('click','#mizoram',function(){
           let stats = <?php echo reasons2017('Mizoram'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Manipur
        $("#drop2017").on('click','#manipur',function(){
          let stats = <?php echo calcCasuality2017('Manipur'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#manipur',function(){
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
        $("#drop2017").on('click','#manipur',function(){
           let stats = <?php echo reasons2017('Manipur'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Nagaland
        $("#drop2017").on('click','#nagaland',function(){
          let stats = <?php echo calcCasuality2017('Nagaland'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#nagaland',function(){
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
        $("#drop2017").on('click','#nagaland',function(){
           let stats = <?php echo reasons2017('Nagaland'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Arunachal Pradesh
        $("#drop2017").on('click','#arunachalpradesh',function(){
          let stats = <?php echo calcCasuality2017('Arunachal Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#arunachalpradesh',function(){
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
        $("#drop2017").on('click','#arunachalpradesh',function(){
           let stats = <?php echo reasons2017('Arunachal Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Jharkhand
        $("#drop2017").on('click','#jharkhand',function(){
          let stats = <?php echo calcCasuality2017('Jharkhand'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#jharkhand',function(){
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
        $("#drop2017").on('click','#jharkhand',function(){
           let stats = <?php echo reasons2017('Jharkhand'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Chhattisgarh
        $("#drop2017").on('click','#chattisgarh',function(){
          let stats = <?php echo calcCasuality2017('Chhattisgarh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#chattisgarh',function(){
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
        $("#drop2017").on('click','#chattisgarh',function(){
           let stats = <?php echo reasons2017('Chhattisgarh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Madhya Pradesh
        $("#drop2017").on('click','#madhyapradesh',function(){
          let stats = <?php echo calcCasuality2017('Madhya Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#madhyapradesh',function(){
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
        $("#drop2017").on('click','#madhyapradesh',function(){
           let stats = <?php echo reasons2017('Madhya Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Gujarat
        $("#drop2017").on('click','#gujarat',function(){
          let stats = <?php echo calcCasuality2017('Gujarat'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#gujarat',function(){
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
        $("#drop2017").on('click','#gujarat',function(){
           let stats = <?php echo reasons2017('Gujarat'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Orissa
        $("#drop2017").on('click','#odisha',function(){
          let stats = <?php echo calcCasuality2017('Odisha'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#odisha',function(){
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
        $("#drop2017").on('click','#odisha',function(){
           let stats = <?php echo reasons2017('Orissa'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Maharashtra
        $("#drop2017").on('click','#maharashtra',function(){
          let stats = <?php echo calcCasuality2017('Maharashtra'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#maharashtra',function(){
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
        $("#drop2017").on('click','#maharashtra',function(){
           let stats = <?php echo reasons2017('Maharashtra'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Telangana
        $("#drop2017").on('click','#telangana',function(){
          let stats = <?php echo calcCasuality2017('Telangana'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#telangana',function(){
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
        $("#drop2017").on('click','#telangana',function(){
           let stats = <?php echo reasons2017('Telangana'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Andhra Pradesh
        $("#drop2017").on('click','#andhrapradesh',function(){
          let stats = <?php echo calcCasuality2017('Andhra Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#andhrapradesh',function(){
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
        $("#drop2017").on('click','#andhrapradesh',function(){
           let stats = <?php echo reasons2017('Andhra Pradesh'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Goa
        $("#drop2017").on('click','#goa',function(){
          let stats = <?php echo calcCasuality2017('Goa'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#goa',function(){
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
        $("#drop2017").on('click','#goa',function(){
           let stats = <?php echo reasons2017('Goa'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Karnataka
        $("#drop2017").on('click','#karnataka',function(){
          let stats = <?php echo calcCasuality2017('Karnataka'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#karnataka',function(){
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
        $("#drop2017").on('click','#karnataka',function(){
           let stats = <?php echo reasons2017('Karnataka'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Tamil Nadu
        $("#drop2017").on('click','#tamilnadu',function(){
          let stats = <?php echo calcCasuality2017('Tamil Nadu'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#tamilnadu',function(){
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
        $("#drop2017").on('click','#tamilnadu',function(){
           let stats = <?php echo reasons2017('Tamil Nadu'); ?>;
            $('#overspeeding').css('width',stats.overspeeding+"%");
            $('#wrongside').css('width',stats.wrongside+"%");
            $('#noviolation').css('width',stats.noviolation+"%");
            $('#overtaking').css('width',stats.overtaking+"%");
            $('#useofmobile').css('width',stats.useofmobile+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Kerala
        $("#drop2017").on('click','#kerala',function(){
          let stats = <?php echo calcCasuality2017('Kerala'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2017").on('click','#kerala',function(){
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
        $("#drop2017").on('click','#kerala',function(){
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
//India dropdown
$("#drop2018").on('click','#india',function(){
   let stats = <?php echo calcCasuality2018('India'); ?>;
    $('#total_a').text(stats.total);
    $('#total_i').text(stats.injured);
    $('#total_d').text(stats.deaths);
});
$("#drop2018").on('click','#india',function(){
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
$("#drop2018").on('click','#india',function(){
   let stats = <?php echo reasons2018('India'); ?>;
    $('#overspeeding').css('width',stats.overspeeding+"%");
    $('#wrongside').css('width',stats.wrongside+"%");
    $('#noviolation').css('width',stats.noviolation+"%");
    $('#overtaking').css('width',stats.overtaking+"%");
    $('#useofmobile').css('width',stats.useofmobile+"%");
    $('#othercauses').css('width',stats.othercauses+"%");
});

//India year button
$("#dropbutton2018").click(function(){
   let stats = <?php echo calcCasuality2018('India'); ?>;
    $('#total_a').text(stats.total);
    $('#total_i').text(stats.injured);
    $('#total_d').text(stats.deaths);
});
$("#dropbutton2018").click(function(){
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
$("#dropbutton2018").click(function(){
   let stats = <?php echo reasons2018('India'); ?>;
    $('#overspeeding').css('width',stats.overspeeding+"%");
    $('#wrongside').css('width',stats.wrongside+"%");
    $('#noviolation').css('width',stats.noviolation+"%");
    $('#overtaking').css('width',stats.overtaking+"%");
    $('#useofmobile').css('width',stats.useofmobile+"%");
    $('#othercauses').css('width',stats.othercauses+"%");
});

  //Jammu and Kashmir
  $("#drop2018").on('click','#jammukashmir',function(){
    let stats = <?php echo calcCasuality2018('Jammu & Kashmir'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
      console.log('hello1');
  });
  $("#drop2018").on('click','#jammukashmir',function(){
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
    console.log('hello2');
  });
  $("#drop2018").on('click','#jammukashmir',function(){
     let stats = <?php echo reasons2018('Jammu & Kashmir'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
      console.log('hello3');
  });

  //Himachal Pradesh
  $("#drop2018").on('click','#himachalpradesh',function(){
    let stats = <?php echo calcCasuality2018('Himachal Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
      console.log('hp1');
  });
  $("#drop2018").on('click','#himachalpradesh',function(){
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
    console.log('hp2');
  });
  $("#drop2018").on('click','#himachalpradesh',function(){
     let stats = <?php echo reasons2018('Himachal Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
      console.log('hp3');
  });

  //Punjab
  $("#drop2018").on('click','#punjab',function(){
    let stats = <?php echo calcCasuality2018('Punjab'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
      
  });
  $("#drop2018").on('click','#punjab',function(){
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
  $("#drop2018").on('click','#punjab',function(){
     let stats = <?php echo reasons2018('Punjab'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Uttarakhand
  $("#drop2018").on('click','#uttarakhand',function(){
    let stats = <?php echo calcCasuality2018('Uttarakhand'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#uttarakhand',function(){
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
  $("#drop2018").on('click','#uttarakhand',function(){
     let stats = <?php echo reasons2018('Uttarakhand'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Haryana
  $("#drop2018").on('click','#haryana',function(){
    let stats = <?php echo calcCasuality2018('Haryana'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#haryana',function(){
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
  $("#drop2018").on('click','#haryana',function(){
     let stats = <?php echo reasons2018('Haryana'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Uttar Pradesh
  $("#drop2018").on('click','#uttarpradesh',function(){
    let stats = <?php echo calcCasuality2018('Uttar Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#uttarpradesh',function(){
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
  $("#drop2018").on('click','#uttarpradesh',function(){
     let stats = <?php echo reasons2018('Uttar Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });


  //Rajasthan
  $("#drop2018").on('click','#rajasthan',function(){
    let stats = <?php echo calcCasuality2018('Rajasthan'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#rajasthan',function(){
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
  $("#drop2018").on('click','#rajasthan',function(){
     let stats = <?php echo reasons2018('Rajasthan'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Delhi
  $("#drop2018").on('click','#delhi',function(){
    let stats = <?php echo calcCasuality2018('Delhi'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#delhi',function(){
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
  $("#drop2018").on('click','#delhi',function(){
     let stats = <?php echo reasons2018('Delhi'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Bihar
  $("#drop2018").on('click','#bihar',function(){
    let stats = <?php echo calcCasuality2018('Bihar'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#bihar',function(){
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
  $("#drop2018").on('click','#bihar',function(){
     let stats = <?php echo reasons2018('Bihar'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Sikkim
  $("#drop2018").on('click','#sikkim',function(){
    let stats = <?php echo calcCasuality2018('Sikkim'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#sikkim',function(){
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
  $("#drop2018").on('click','#sikkim',function(){
     let stats = <?php echo reasons2018('Sikkim'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //West Bengal
  $("#drop2018").on('click','#westbengal',function(){
    let stats = <?php echo calcCasuality2018('West Bengal'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#westbengal',function(){
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
  $("#drop2018").on('click','#westbengal',function(){
     let stats = <?php echo reasons2018('West Bengal'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });


  //Assam
  $("#drop2018").on('click','#assam',function(){
    let stats = <?php echo calcCasuality2018('Assam'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#assam',function(){
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
  $("#drop2018").on('click','#assam',function(){
     let stats = <?php echo reasons2018('Assam'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Tripura
  $("#drop2018").on('click','#tripura',function(){
    let stats = <?php echo calcCasuality2018('Tripura'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#tripura',function(){
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
  $("#drop2018").on('click','#tripura',function(){
     let stats = <?php echo reasons2018('Tripura'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Meghalaya
  $("#drop2018").on('click','#meghalaya',function(){
    let stats = <?php echo calcCasuality2018('Meghalaya'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#meghalaya',function(){
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
  $("#drop2018").on('click','#meghalaya',function(){
     let stats = <?php echo reasons2018('Meghalaya'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Mizoram
  $("#drop2018").on('click','#mizoram',function(){
    let stats = <?php echo calcCasuality2018('Mizoram'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#mizoram',function(){
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
  $("#drop2018").on('click','#mizoram',function(){
     let stats = <?php echo reasons2018('Mizoram'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Manipur
  $("#drop2018").on('click','#manipur',function(){
    let stats = <?php echo calcCasuality2018('Manipur'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#manipur',function(){
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
  $("#drop2018").on('click','#manipur',function(){
     let stats = <?php echo reasons2018('Manipur'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Nagaland
  $("#drop2018").on('click','#nagaland',function(){
    let stats = <?php echo calcCasuality2018('Nagaland'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#nagaland',function(){
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
  $("#drop2018").on('click','#nagaland',function(){
     let stats = <?php echo reasons2018('Nagaland'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Arunachal Pradesh
  $("#drop2018").on('click','#arunachalpradesh',function(){
    let stats = <?php echo calcCasuality2018('Arunachal Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#arunachalpradesh',function(){
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
  $("#drop2018").on('click','#arunachalpradesh',function(){
     let stats = <?php echo reasons2018('Arunachal Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Jharkhand
  $("#drop2018").on('click','#jharkhand',function(){
    let stats = <?php echo calcCasuality2018('Jharkhand'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#jharkhand',function(){
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
  $("#drop2018").on('click','#jharkhand',function(){
     let stats = <?php echo reasons2018('Jharkhand'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Chhattisgarh
  $("#drop2018").on('click','#chattisgarh',function(){
    let stats = <?php echo calcCasuality2018('Chhattisgarh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#chattisgarh',function(){
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
  $("#drop2018").on('click','#chattisgarh',function(){
     let stats = <?php echo reasons2018('Chhattisgarh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Madhya Pradesh
  $("#drop2018").on('click','#madhyapradesh',function(){
    let stats = <?php echo calcCasuality2018('Madhya Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#madhyapradesh',function(){
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
  $("#drop2018").on('click','#madhyapradesh',function(){
     let stats = <?php echo reasons2018('Madhya Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Gujarat
  $("#drop2018").on('click','#gujarat',function(){
    let stats = <?php echo calcCasuality2018('Gujarat'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#gujarat',function(){
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
  $("#drop2018").on('click','#gujarat',function(){
     let stats = <?php echo reasons2018('Gujarat'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Orissa
  $("#drop2018").on('click','#odisha',function(){
    let stats = <?php echo calcCasuality2018('Odisha'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#odisha',function(){
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
  $("#drop2018").on('click','#odisha',function(){
     let stats = <?php echo reasons2018('Orissa'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Maharashtra
  $("#drop2018").on('click','#maharashtra',function(){
    let stats = <?php echo calcCasuality2018('Maharashtra'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#maharashtra',function(){
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
  $("#drop2018").on('click','#maharashtra',function(){
     let stats = <?php echo reasons2018('Maharashtra'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Telangana
  $("#drop2018").on('click','#telangana',function(){
    let stats = <?php echo calcCasuality2018('Telangana'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#telangana',function(){
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
  $("#drop2018").on('click','#telangana',function(){
     let stats = <?php echo reasons2018('Telangana'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Andhra Pradesh
  $("#drop2018").on('click','#andhrapradesh',function(){
    let stats = <?php echo calcCasuality2018('Andhra Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#andhrapradesh',function(){
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
  $("#drop2018").on('click','#andhrapradesh',function(){
     let stats = <?php echo reasons2018('Andhra Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Goa
  $("#drop2018").on('click','#goa',function(){
    let stats = <?php echo calcCasuality2018('Goa'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#goa',function(){
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
  $("#drop2018").on('click','#goa',function(){
     let stats = <?php echo reasons2018('Goa'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Karnataka
  $("#drop2018").on('click','#karnataka',function(){
    let stats = <?php echo calcCasuality2018('Karnataka'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#karnataka',function(){
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
  $("#drop2018").on('click','#karnataka',function(){
     let stats = <?php echo reasons2018('Karnataka'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Tamil Nadu
  $("#drop2018").on('click','#tamilnadu',function(){
    let stats = <?php echo calcCasuality2018('Tamil Nadu'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#tamilnadu',function(){
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
  $("#drop2018").on('click','#tamilnadu',function(){
     let stats = <?php echo reasons2018('Tamil Nadu'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#wrongside').css('width',stats.wrongside+"%");
      $('#noviolation').css('width',stats.noviolation+"%");
      $('#overtaking').css('width',stats.overtaking+"%");
      $('#useofmobile').css('width',stats.useofmobile+"%");
      $('#othercauses').css('width',stats.othercauses+"%");
  });

  //Kerala
  $("#drop2018").on('click','#kerala',function(){
    let stats = <?php echo calcCasuality2018('Kerala'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2018").on('click','#kerala',function(){
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
  $("#drop2018").on('click','#kerala',function(){
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

//India dropdown

$("#dropbutton2015").click(function(){
   let stats = <?php echo calcCasuality2015('India'); ?>;
    $('#total_a').text(stats.total);
    $('#total_i').text(stats.injured);
    $('#total_d').text(stats.deaths);
});
$("#dropbutton2015").click(function(){
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
$("#dropbutton2015").click(function(){
   let stats = <?php echo reasons2015('India'); ?>;
    $('#overspeeding').css('width',stats.overspeeding+"%");
    $('#drunkdriving').css('width',stats.drunkdriving+"%");
    $('#improperpassing').css('width',stats.improperpassing+"%");
    $('#improperdirection').css('width',stats.improperdirection+"%");
});

//India year button
$("#dropbutton2015").click(function(){
   let stats = <?php echo calcCasuality2015('India'); ?>;
    $('#total_a').text(stats.total);
    $('#total_i').text(stats.injured);
    $('#total_d').text(stats.deaths);
});
$("#dropbutton2015").click(function(){
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
$("#dropbutton2015").click(function(){
   let stats = <?php echo reasons2015('India'); ?>;
    $('#overspeeding').css('width',stats.overspeeding+"%");
    $('#drunkdriving').css('width',stats.drunkdriving+"%");
    $('#improperpassing').css('width',stats.improperpassing+"%");
    $('#improperdirection').css('width',stats.improperdirection+"%");
});

  //Jammu and Kashmir
  $("#drop2015").on('click','#jammukashmir',function(){
    let stats = <?php echo calcCasuality2015('Jammu and Kashmir'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#jammukashmir',function(){
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
  $("#drop2015").on('click','#jammukashmir',function(){
     let stats = <?php echo reasons2015('Jammu & Kashmir'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Himachal Pradesh
  $("#drop2015").on('click','#himachalpradesh',function(){
    let stats = <?php echo calcCasuality2015('Himachal Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#himachalpradesh',function(){
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
  $("#drop2015").on('click','#himachalpradesh',function(){
     let stats = <?php echo reasons2015('Himachal Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Punjab
  $("#drop2015").on('click','#punjab',function(){
    let stats = <?php echo calcCasuality2015('Punjab'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#punjab',function(){
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
  $("#drop2015").on('click','#punjab',function(){
     let stats = <?php echo reasons2015('Punjab'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Uttarakhand
  $("#drop2015").on('click','#uttarakhand',function(){
    let stats = <?php echo calcCasuality2015('Uttrakhand'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#uttarakhand',function(){
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
  $("#drop2015").on('click','#uttarakhand',function(){
     let stats = <?php echo reasons2015('Uttarakhand'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

   //Haryana
  $("#drop2015").on('click','#haryana',function(){
    let stats = <?php echo calcCasuality2015('Haryana'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#haryana',function(){
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
  $("#drop2015").on('click','#haryana',function(){
     let stats = <?php echo reasons2015('Haryana'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Uttar Pradesh
  $("#drop2015").on('click','#uttarpradesh',function(){
    let stats = <?php echo calcCasuality2015('Uttar Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#uttarpradesh',function(){
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
  $("#drop2015").on('click','#uttarpradesh',function(){
     let stats = <?php echo reasons2015('Uttar Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Rajasthan
  $("#drop2015").on('click','#rajasthan',function(){
    let stats = <?php echo calcCasuality2015('Rajasthan'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#rajasthan',function(){
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
  $("#drop2015").on('click','#rajasthan',function(){
     let stats = <?php echo reasons2015('Rajasthan'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Delhi
  $("#drop2015").on('click','#delhi',function(){
    let stats = <?php echo calcCasuality2015('Delhi'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#delhi',function(){
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
  $("#drop2015").on('click','#delhi',function(){
     let stats = <?php echo reasons2015('Delhi'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Bihar
  $("#drop2015").on('click','#bihar',function(){
    let stats = <?php echo calcCasuality2015('Bihar'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#bihar',function(){
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
  $("#drop2015").on('click','#bihar',function(){
     let stats = <?php echo reasons2015('Bihar'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Sikkim
  $("#drop2015").on('click','#sikkim',function(){
    let stats = <?php echo calcCasuality2015('Sikkim'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#sikkim',function(){
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
  $("#drop2015").on('click','#sikkim',function(){
     let stats = <?php echo reasons2015('Sikkim'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //West Bengal
  $("#drop2015").on('click','#westbengal',function(){
    let stats = <?php echo calcCasuality2015('West Bengal'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#westbengal',function(){
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
  $("#drop2015").on('click','#westbengal',function(){
     let stats = <?php echo reasons2015('West Bengal'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });


  //Assam
  $("#drop2015").on('click','#assam',function(){
    let stats = <?php echo calcCasuality2015('Assam'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#assam',function(){
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
  $("#drop2015").on('click','#assam',function(){
     let stats = <?php echo reasons2015('Assam'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Tripura
  $("#drop2015").on('click','#tripura',function(){
    let stats = <?php echo calcCasuality2015('Tripura'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#tripura',function(){
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
  $("#drop2015").on('click','#tripura',function(){
     let stats = <?php echo reasons2015('Tripura'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Meghalaya
  $("#drop2015").on('click','#meghalaya',function(){
    let stats = <?php echo calcCasuality2015('Meghalaya'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#meghalaya',function(){
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
  $("#drop2015").on('click','#meghalaya',function(){
     let stats = <?php echo reasons2015('Meghalaya'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Mizoram
  $("#drop2015").on('click','#mizoram',function(){
    let stats = <?php echo calcCasuality2015('Mizoram'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#mizoram',function(){
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
  $("#drop2015").on('click','#mizoram',function(){
     let stats = <?php echo reasons2015('Mizoram'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Manipur
  $("#drop2015").on('click','#manipur',function(){
    let stats = <?php echo calcCasuality2015('Manipur'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#manipur',function(){
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
  $("#drop2015").on('click','#manipur',function(){
     let stats = <?php echo reasons2015('Manipur'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });



  //Nagaland
  $("#drop2015").on('click','#nagaland',function(){
    let stats = <?php echo calcCasuality2015('Nagaland'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#nagaland',function(){
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
  $("#drop2015").on('click','#nagaland',function(){
     let stats = <?php echo reasons2015('Nagaland'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Arunachal Pradesh
  $("#drop2015").on('click','#arunachalpradesh',function(){
    let stats = <?php echo calcCasuality2015('Arunachal Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#arunachalpradesh',function(){
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
  $("#drop2015").on('click','#arunachalpradesh',function(){
     let stats = <?php echo reasons2015('Arunachal Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Jharkhand
  $("#drop2015").on('click','#jharkhand',function(){
    let stats = <?php echo calcCasuality2015('Jharkhand'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#jharkhand',function(){
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
  $("#drop2015").on('click','#jharkhand',function(){
     let stats = <?php echo reasons2015('Jharkhand'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Chhattisgarh
  $("#drop2015").on('click','#chattisgarh',function(){
    let stats = <?php echo calcCasuality2015('Chhatisgarh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#chattisgarh',function(){
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
  $("#drop2015").on('click','#chattisgarh',function(){
     let stats = <?php echo reasons2015('Chhattisgarh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Madhya Pradesh
  $("#drop2015").on('click','#madhyapradesh',function(){
    let stats = <?php echo calcCasuality2015('Madhya Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#madhyapradesh',function(){
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
  $("#drop2015").on('click','#madhyapradesh',function(){
     let stats = <?php echo reasons2015('Madhya Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Gujarat
  $("#drop2015").on('click','#gujarat',function(){
    let stats = <?php echo calcCasuality2015('Gujarat'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#gujarat',function(){
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
  $("#drop2015").on('click','#gujarat',function(){
     let stats = <?php echo reasons2015('Gujarat'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Orissa
  $("#drop2015").on('click','#odisha',function(){
    let stats = <?php echo calcCasuality2015('Odisha'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#odisha',function(){
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
  $("#drop2015").on('click','#odisha',function(){
     let stats = <?php echo reasons2015('Odisha'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Maharashtra
  $("#drop2015").on('click','#maharashtra',function(){
    let stats = <?php echo calcCasuality2015('Maharashtra'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#maharashtra',function(){
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
  $("#drop2015").on('click','#maharashtra',function(){
     let stats = <?php echo reasons2015('Maharashtra'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Telangana
  $("#drop2015").on('click','#telangana',function(){
    let stats = <?php echo calcCasuality2015('Telangana'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#telangana',function(){
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
  $("#drop2015").on('click','#telangana',function(){
     let stats = <?php echo reasons2015('Telangana'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Andhra Pradesh
  $("#drop2015").on('click','#andhrapradesh',function(){
    let stats = <?php echo calcCasuality2015('Andhra Pradesh'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#andhrapradesh',function(){
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
  $("#drop2015").on('click','#andhrapradesh',function(){
     let stats = <?php echo reasons2015('Andhra Pradesh'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Goa
  $("#drop2015").on('click','#goa',function(){
    let stats = <?php echo calcCasuality2015('Goa'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#goa',function(){
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
  $("#drop2015").on('click','#goa',function(){
     let stats = <?php echo reasons2015('Goa'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Karnataka
  $("#drop2015").on('click','#karnataka',function(){
    let stats = <?php echo calcCasuality2015('Karnataka'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#karnataka',function(){
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
  $("#drop2015").on('click','#karnataka',function(){
     let stats = <?php echo reasons2015('Karnataka'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Tamil Nadu
  $("#drop2015").on('click','#tamilnadu',function(){
    let stats = <?php echo calcCasuality2015('Tamil Nadu'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#tamilnadu',function(){
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
  $("#drop2015").on('click','#tamilnadu',function(){
     let stats = <?php echo reasons2015('Tamil Nadu'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

  //Kerala
  $("#drop2015").on('click','#kerala',function(){
    let stats = <?php echo calcCasuality2015('Kerala'); ?>;
      $('#total_a').text(stats.total);
      $('#total_i').text(stats.injured);
      $('#total_d').text(stats.deaths);
  });
  $("#drop2015").on('click','#kerala',function(){
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
  $("#drop2015").on('click','#kerala',function(){
     let stats = <?php echo reasons2015('Kerala'); ?>;
      $('#overspeeding').css('width',stats.overspeeding+"%");
      $('#drunkdriving').css('width',stats.drunkdriving+"%");
      $('#improperpassing').css('width',stats.improperpassing+"%");
      $('#improperdirection').css('width',stats.improperdirection+"%");
  });

      </script>


      <!--For year 2007 -->
      <script type="text/javascript">
      //India dropdown
      $("#drop2007").on('click','#india',function(){
         let stats = <?php echo calcCasuality2007('India'); ?>;
          $('#total_a').text(stats.total);
          $('#total_i').text(stats.injured);
          $('#total_d').text(stats.deaths);
      });
      $("#drop2007").on('click','#india',function(){
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
      $("#drop2007").on('click','#india',function(){
         let stats = <?php echo reasons2007('India'); ?>;
          $('#overloading').css('width',stats.overloading+"%");
          $('#drunkdriving').css('width',stats.drunkdriving+"%");
          $('#defect').css('width',stats.defect+"%");
          $('#othercauses').css('width',stats.othercauses+"%");
      });

      //India year button
      $("#dropbutton2007").click(function(){
         let stats = <?php echo calcCasuality2007('India'); ?>;
          $('#total_a').text(stats.total);
          $('#total_i').text(stats.injured);
          $('#total_d').text(stats.deaths);
      });
      $("#dropbutton2007").click(function(){
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
      $("#dropbutton2007").click(function(){
         let stats = <?php echo reasons2007('India'); ?>;
          $('#overloading').css('width',stats.overloading+"%");
          $('#drunkdriving').css('width',stats.drunkdriving+"%");
          $('#defect').css('width',stats.defect+"%");
          $('#othercauses').css('width',stats.othercauses+"%");
      });

        //Jammu and Kashmir
        $("#drop2007").on('click','#jammukashmir',function(){
          let stats = <?php echo calcCasuality2007('Jammu and Kashmir'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#jammukashmir',function(){
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
        $("#drop2007").on('click','#jammukashmir',function(){
           let stats = <?php echo reasons2007('Jammu & Kashmir'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Himachal Pradesh
        $("#drop2007").on('click','#himachalpradesh',function(){
          let stats = <?php echo calcCasuality2007('Himachal Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#himachalpradesh',function(){
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
        $("#drop2007").on('click','#himachalpradesh',function(){
           let stats = <?php echo reasons2007('Himachal Pradesh'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Punjab
        $("#drop2007").on('click','#punjab',function(){
          let stats = <?php echo calcCasuality2007('Punjab'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#punjab',function(){
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
        $("#drop2007").on('click','#punjab',function(){
           let stats = <?php echo reasons2007('Punjab'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Uttarakhand
        $("#drop2007").on('click','#uttarakhand',function(){
          let stats = <?php echo calcCasuality2007('Uttrakhand'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#uttarakhand',function(){
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
        $("#drop2007").on('click','#uttarakhand',function(){
           let stats = <?php echo reasons2007('Uttarakhand'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

         //Haryana
        $("#drop2007").on('click','#haryana',function(){
          let stats = <?php echo calcCasuality2007('Haryana'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#haryana',function(){
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
        $("#drop2007").on('click','#haryana',function(){
           let stats = <?php echo reasons2007('Haryana'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Uttar Pradesh
        $("#drop2007").on('click','#uttarpradesh',function(){
          let stats = <?php echo calcCasuality2007('Uttar Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#uttarpradesh',function(){
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
        $("#drop2007").on('click','#uttarpradesh',function(){
           let stats = <?php echo reasons2007('Uttar Pradesh'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Rajasthan
        $("#drop2007").on('click','#rajasthan',function(){
          let stats = <?php echo calcCasuality2007('Rajasthan'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#rajasthan',function(){
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
        $("#drop2007").on('click','#rajasthan',function(){
           let stats = <?php echo reasons2007('Rajasthan'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Delhi
        $("#drop2007").on('click','#delhi',function(){
          let stats = <?php echo calcCasuality2007('Delhi'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#delhi',function(){
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
        $("#drop2007").on('click','#delhi',function(){
           let stats = <?php echo reasons2007('Delhi'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Bihar
        $("#drop2007").on('click','#bihar',function(){
          let stats = <?php echo calcCasuality2007('Bihar'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#bihar',function(){
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
        $("#drop2007").on('click','#bihar',function(){
           let stats = <?php echo reasons2007('Bihar'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Sikkim
        $("#drop2007").on('click','#sikkim',function(){
          let stats = <?php echo calcCasuality2007('Sikkim'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#sikkim',function(){
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
        $("#drop2007").on('click','#sikkim',function(){
           let stats = <?php echo reasons2007('Sikkim'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //West Bengal
        $("#drop2007").on('click','#westbengal',function(){
          let stats = <?php echo calcCasuality2007('West Bengal'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#westbengal',function(){
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
        $("#drop2007").on('click','#westbengal',function(){
           let stats = <?php echo reasons2007('West Bengal'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });


        //Assam
        $("#drop2007").on('click','#assam',function(){
          let stats = <?php echo calcCasuality2007('Assam'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#assam',function(){
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
        $("#drop2007").on('click','#assam',function(){
           let stats = <?php echo reasons2007('Assam'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Tripura
        $("#drop2007").on('click','#tripura',function(){
          let stats = <?php echo calcCasuality2007('Tripura'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#tripura',function(){
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
        $("#drop2007").on('click','#tripura',function(){
           let stats = <?php echo reasons2007('Tripura'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Meghalaya
        $("#drop2007").on('click','#meghalaya',function(){
          let stats = <?php echo calcCasuality2007('Meghalaya'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#meghalaya',function(){
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
        $("#drop2007").on('click','#meghalaya',function(){
           let stats = <?php echo reasons2007('Meghalaya'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Mizoram
        $("#drop2007").on('click','#mizoram',function(){
          let stats = <?php echo calcCasuality2007('Mizoram'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#mizoram',function(){
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
        $("#drop2007").on('click','#mizoram',function(){
           let stats = <?php echo reasons2007('Mizoram'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Manipur
        $("#drop2007").on('click','#manipur',function(){
          let stats = <?php echo calcCasuality2007('Manipur'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#manipur',function(){
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
        $("#drop2007").on('click','#manipur',function(){
           let stats = <?php echo reasons2007('Manipur'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Nagaland
        $("#drop2007").on('click','#nagaland',function(){
          let stats = <?php echo calcCasuality2007('Nagaland'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#nagaland',function(){
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
        $("#drop2007").on('click','#nagaland',function(){
           let stats = <?php echo reasons2007('Nagaland'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Arunachal Pradesh
        $("#drop2007").on('click','#arunachalpradesh',function(){
          let stats = <?php echo calcCasuality2007('Arunachal Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#arunachalpradesh',function(){
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
        $("#drop2007").on('click','#arunachalpradesh',function(){
           let stats = <?php echo reasons2007('Arunachal Pradesh'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Jharkhand
        $("#drop2007").on('click','#jharkhand',function(){
          let stats = <?php echo calcCasuality2007('Jharkhand'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#jharkhand',function(){
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
        $("#drop2007").on('click','#jharkhand',function(){
           let stats = <?php echo reasons2007('Jharkhand'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Chhattisgarh
        $("#drop2007").on('click','#chattisgarh',function(){
          let stats = <?php echo calcCasuality2007('Chhatisgarh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#chattisgarh',function(){
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
        $("#drop2007").on('click','#chattisgarh',function(){
           let stats = <?php echo reasons2007('Chhattisgarh'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Madhya Pradesh
        $("#drop2007").on('click','#madhyapradesh',function(){
          let stats = <?php echo calcCasuality2007('Madhya Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#madhyapradesh',function(){
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
        $("#drop2007").on('click','#madhyapradesh',function(){
           let stats = <?php echo reasons2007('Madhya Pradesh'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Gujarat
        $("#drop2007").on('click','#gujarat',function(){
          let stats = <?php echo calcCasuality2007('Gujarat'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#gujarat',function(){
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
        $("#drop2007").on('click','#gujarat',function(){
           let stats = <?php echo reasons2007('Gujarat'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Orissa
        $("#drop2007").on('click','#odisha',function(){
          let stats = <?php echo calcCasuality2007('Odisha'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#odisha',function(){
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
        $("#drop2007").on('click','#odisha',function(){
           let stats = <?php echo reasons2007('Odisha'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Maharashtra
        $("#drop2007").on('click','#maharashtra',function(){
          let stats = <?php echo calcCasuality2007('Maharashtra'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#maharashtra',function(){
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
        $("#drop2007").on('click','#maharashtra',function(){
           let stats = <?php echo reasons2007('Maharashtra'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Telangana
        $("#drop2007").on('click','#telangana',function(){
          let stats = <?php echo calcCasuality2007('Telangana'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#telangana',function(){
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
        $("#drop2007").on('click','#telangana',function(){
           let stats = <?php echo reasons2007('Telangana'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Andhra Pradesh
        $("#drop2007").on('click','#andhrapradesh',function(){
          let stats = <?php echo calcCasuality2007('Andhra Pradesh'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#andhrapradesh',function(){
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
        $("#drop2007").on('click','#andhrapradesh',function(){
           let stats = <?php echo reasons2007('Andhra Pradesh'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Goa
        $("#drop2007").on('click','#goa',function(){
          let stats = <?php echo calcCasuality2007('Goa'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#goa',function(){
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
        $("#drop2007").on('click','#goa',function(){
           let stats = <?php echo reasons2007('Goa'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Karnataka
        $("#drop2007").on('click','#karnataka',function(){
          let stats = <?php echo calcCasuality2007('Karnataka'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#karnataka',function(){
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
        $("#drop2007").on('click','#karnataka',function(){
           let stats = <?php echo reasons2007('Karnataka'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Tamil Nadu
        $("#drop2007").on('click','#tamilnadu',function(){
          let stats = <?php echo calcCasuality2007('Tamil Nadu'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#tamilnadu',function(){
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
        $("#drop2007").on('click','#tamilnadu',function(){
           let stats = <?php echo reasons2007('Tamil Nadu'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

        //Kerala
        $("#drop2007").on('click','#kerala',function(){
          let stats = <?php echo calcCasuality2007('Kerala'); ?>;
            $('#total_a').text(stats.total);
            $('#total_i').text(stats.injured);
            $('#total_d').text(stats.deaths);
        });
        $("#drop2007").on('click','#kerala',function(){
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
        $("#drop2007").on('click','#kerala',function(){
           let stats = <?php echo reasons2007('Kerala'); ?>;
            $('#overloading').css('width',stats.overloading+"%");
            $('#drunkdriving').css('width',stats.drunkdriving+"%");
            $('#defect').css('width',stats.defect+"%");
            $('#othercauses').css('width',stats.othercauses+"%");
        });

            </script>
      <!-- <script type="text/javascript">
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
      </script> -->

        <!-- Dropdown Script display -->
        <script>
          function dropfunction2007(){
            document.getElementById('drop2015').style.display = 'none';
            document.getElementById('drop2016').style.display = 'none';
            document.getElementById('drop2017').style.display = 'none';
            document.getElementById('drop2018').style.display = 'none';
            document.getElementById('drop2007').style.display = 'block';
            document.getElementById('dropbutton2007').classList.add("bg-dark");
            document.getElementById('dropbutton2015').classList.remove("bg-dark");
            document.getElementById('dropbutton2016').classList.remove("bg-dark");
            document.getElementById('dropbutton2017').classList.remove("bg-dark");
            document.getElementById('dropbutton2018').classList.remove("bg-dark");

            console.log(2007);
          }
          function dropfunction2015(){
            document.getElementById('drop2007').style.display = 'none';
            document.getElementById('drop2016').style.display = 'none';
            document.getElementById('drop2017').style.display = 'none';
            document.getElementById('drop2018').style.display = 'none';
            document.getElementById('drop2015').style.display = 'block';
            document.getElementById('dropbutton2015').classList.add("bg-dark");
            document.getElementById('dropbutton2007').classList.remove("bg-dark");
            document.getElementById('dropbutton2016').classList.remove("bg-dark");
            document.getElementById('dropbutton2017').classList.remove("bg-dark");
            document.getElementById('dropbutton2018').classList.remove("bg-dark");

            console.log(2015);
          }
          function dropfunction2016(){
            document.getElementById('drop2015').style.display = 'none';
            document.getElementById('drop2007').style.display = 'none';
            document.getElementById('drop2017').style.display = 'none';
            document.getElementById('drop2018').style.display = 'none';
            document.getElementById('drop2016').style.display = 'block';
            document.getElementById('dropbutton2016').classList.add("bg-dark");
            document.getElementById('dropbutton2007').classList.remove("bg-dark");
            document.getElementById('dropbutton2015').classList.remove("bg-dark");
            document.getElementById('dropbutton2017').classList.remove("bg-dark");
            document.getElementById('dropbutton2018').classList.remove("bg-dark");
            console.log(2016);
          }
          function dropfunction2017(){
            document.getElementById('drop2015').style.display = 'none';
            document.getElementById('drop2016').style.display = 'none';
            document.getElementById('drop2007').style.display = 'none';
            document.getElementById('drop2018').style.display = 'none';
            document.getElementById('drop2017').style.display = 'block';
            document.getElementById('dropbutton2017').classList.add("bg-dark");
            document.getElementById('dropbutton2015').classList.remove("bg-dark");
            document.getElementById('dropbutton2016').classList.remove("bg-dark");
            document.getElementById('dropbutton2007').classList.remove("bg-dark");
            document.getElementById('dropbutton2018').classList.remove("bg-dark");
            console.log(2017);
          }
          function dropfunction2018(){
            document.getElementById('drop2015').style.display = 'none';
            document.getElementById('drop2016').style.display = 'none';
            document.getElementById('drop2017').style.display = 'none';
            document.getElementById('drop2007').style.display = 'none';
            document.getElementById('drop2018').style.display = 'block';
            document.getElementById('dropbutton2018').classList.add("bg-dark");
            document.getElementById('dropbutton2015').classList.remove("bg-dark");
            document.getElementById('dropbutton2016').classList.remove("bg-dark");
            document.getElementById('dropbutton2017').classList.remove("bg-dark");
            document.getElementById('dropbutton2007').classList.remove("bg-dark");
            console.log(2018);
          }

            
          
        </script>





          </body>
      </html>
      <?php
      }
