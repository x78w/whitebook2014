<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx6297fadc6a85e805", "5ed3ef2a7097d33e580b2384ac6e016c");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="mobileoptimized" content="0">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="screen-orientation" content="portrait">
    <meta name="browsermode" content="application">
    <meta http-equiv="Expires" CONTENT="0">
    <meta http-equiv="Cache-Control" CONTENT="no-cache">
    <meta http-equiv="Pragma" CONTENT="no-cache"/>
    
    <title>2014中国网民健康白皮书</title>
    <link rel="stylesheet" href="css/jquery.fullPage.css">
    <style>
        /*reset style*****/
        @charset "utf-8";
        *{margin:0; padding:0; word-wrap:break-word;font-size: .625em;}
        html{min-height: 100%;-webkit-user-select: none;-webkit-text-size-adjust: auto;}
        body{margin: 0 auto;-webkit-user-select: none;-webkit-text-size-adjust: auto;min-height: 100%;width: 100%; min-width:100%; max-width:480px;}
        h1,h2,h3,h4,h5,h6,p{margin:.5em auto .25em;padding: 0;}
        /*common style*****/
        .section { text-align: center; font: 50px "Microsoft Yahei"; color: #fff;}
        .section .outtop-ofscreen{position: relative;text-align: center;width: 100%;top: -100%;}
        .section .outbottom-ofscreen{position: relative;text-align: center;width: 100%;top: 100%;}
        .section .outleft-ofscreen{position: relative;left: -100%;text-align: center;width: 100%;}
        .section .outright-ofscreen{position: relative;left: 100%;text-align: center;width: 100%;}
        .hori-box{padding:0 20px;}
        .hori-percentdiv{min-height: 10px;background: lime;position: relative;width: 0;font-size: .7em;line-height: 1.4em; text-align: right;margin-right: -20px;}
        .rotated-phone{
            margin-bottom: -100%;
            transform:rotate(90deg);
            -ms-transform:rotate(90deg); /* Internet Explorer */
            -moz-transform:rotate(90deg); /* Firefox */
            -webkit-transform:rotate(90deg); /* Safari 和 Chrome */
            -o-transform:rotate(90deg); /* Opera */
        }
      @keyframes rotatePhone{
          0%{transform:rotate(90deg);}
          100%{transform:rotate(0deg);}
      }
      @-moz-keyframes rotatePhone{
          0%{transform:rotate(90deg);}
          100%{transform:rotate(0deg);}
      }
      @-webkit-keyframes rotatePhone{
          0%{transform:rotate(90deg);}
          100%{transform:rotate(0deg);}
      }
      @-o-keyframes rotatePhone{
          0%{transform:rotate(90deg);}
          100%{transform:rotate(0deg);}
      }
        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12{float: left;padding: 0px;min-height: 1px;}
        .col-1{width: 8.3%}
        .col-2{width: 16.6%}
        .col-4{width: 33.3%;}
        .col-6{width: 50%;}
        .col-10{width: 83.3%;}
        .col-12{width: 100%;}
        .pull-left{float: left;}
        .pull-right{float: right;}
        .text-left{text-align: left;}
        .text-right{text-align: right;}
        .text-center{text-align: center;}
        .text-black{color: black;}
        .text-white{color: white;}
        .text-gray{color: gray;}
        /*section1 style*****/
        .section1 .sec1-bgbox{background: url(images/sec1_bg_img.png) no-repeat ;background-size: 100% ;background-position: top; padding: 50% 0;height: 100%;top: 0;}
        .sec1-bgbox h1{color: #ffc887;position: relative;top: 15%;font-size: 100px;}
        .sec1-bgbox h1>span{font-size: .7em;}
        .sec1-bgbox h5.text-white{position: relative;top: 10%;}
        .sec1-bgbox *{margin:10% auto;font-size: 2em;}
        /*section2 style*****/
        .section2 .sec2-bgbox{/*background: url(images/sec2_bg_img.png) no-repeat ;background-size: 100% ;background-position: top;*/ padding: 5% 0 5%;height: 100%;top: 0;line-height: 1em;}
        .sec2-bgbox h1, .sec2-bgbox h2{position: relative;top: -100%;opacity: 0;}
        .sec2-bgbox h1>span, .sec2-bgbox h2>span{color: #236db5;font-weight: bold;font-size: 3em;position: relative;top: -100%;}
        .sec2-bgbox img{width: 100%;opacity: 0;height: 50%;}
        .sec2-bgbox p{font-size: .75em;left: -100%;}
        .sec2-bgbox .pis{opacity: 0;}
        .sec2-bgbox .tip{position: absolute;bottom: 3%;text-align: left;font-size: .75em;}
        /*section3 style*****/
        .section3 .sec3-bgbox{padding: 25.5% 0 5%;height: 100%;top: 0;font-size: 1.1em;}
        .sec3-bgbox .col-6{float: left;vertical-align: middle;display: table-cell;position: relative;left: -110%;}
        .sec3-bgbox .col-6:after{clear: both;}
        .sec3-bgbox .col-6:last-child{text-align: left;padding-top: 24%;left: 110%;font-size: .8em;}
        .sec3-bgbox .col-6 img{width: 80%;padding:0 3.3% 0 5.6%;}
        /*section4 style*****/
        .section4 .sec4-bgbox{padding: 0% 0 5%;height: 100%;top: 0;color: black;}
        .sec4-bgbox .sec4-top{padding: 1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;position: absolute;top:0;}
        .sec4-bgbox .sec4-popbox{top: 37%;height: 100%; position: relative;}
        .sec4-popbox img{width: 85%;min-height: 50%;max-height: 60%;}
        .sec4-bgbox .sec4-popbox>p{border: 2px solid gray;min-height: 1em;border-radius: 500px;margin: 0em auto;vertical-align: middle;padding: 0;width: 65%;height: 40%;vertical-align: middle;line-height: 20rem;}
        .sec4-pop{top: 0%;}
        .sec4-pop i{position: absolute;width: 0%;opacity: 0; font-size: 1.1rem;line-height: 15rem; vertical-align: middle;padding:0;background-size:99% auto;}
        /*section5 style*****/
        .section5 .sec5-bgbox{padding: 0% 0 5%;height: 100%;top: 0;color: black;}
        .sec5-bgbox .sec5-top{padding: 1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;position: absolute;top:0;}
        .sec5-bgbox .sec5-popbox{top: 0%;position: absolute;/*background: url(images/sec5_popmap_bg.png) no-repeat center;background-size: 100%;*/height: 95%;}
        .sec5-popimg{margin:35% auto 0;display: none;position: absolute;top: 0;width: 100%; height: 50%;}
        .sec5-popimg, .sec5-popimg:focus, .sec5-popimg:active, .sec5-popimg:hover, .sec5-popimg:visited{outline: none!important;border: none!important;}
/*        .sec5-popimg:first-child{display: block;}*/
        .sec5-popbox .controlArrow.prev{display: block;border-color: transparent transparent transparent rgb(25, 25, 225)!important;}
        .sec5-popbox .controlArrow.next{display: block;border-color: transparent rgb(25, 25, 225) transparent transparent!important;}
        /*section6 style*****/
        .section6 .sec6-bgbox{padding: 0;height: 100%;/*top: 0;*/color: black;}
        .sec6-bgbox .sec6-top{padding: 1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;position: absolute;top:0;}
        .sec6-bgbox .sec6-popbox{bottom: 10%;position: absolute;height: 90%;padding:0% 0 5%;}
        .sec6-bgbox .sec6-popbox div.dot-11{width: 9%;float: left;min-height: 1px;position: relative;/*top: 100%;*/}
        .sec6-bgbox .sec6-popbox div.dot-11.sec6-data{border-radius:50px;width: 9%;margin: 0;background: gray;font-size: .75em;height: 15%;/*top: 85%;*/position:absolute;bottom: 5%;color:white;}
        .sec6-dot{background: rgba(255,255,255,0.55);width: 80%; margin:10% auto;padding:1rem 0;border: 1px solid white;border-radius: 500px;color: white;text-shadow:0px 0px 5px black;top: 0;position: relative;line-height: 0em;}
        .sec6-data .data-city{width: 1px;height: 50%;background: #c2e3f6;position:absolute;bottom: 90%; left: 50%;opacity: 0;font-size: .85em;}
        .sec6-data .data-city:before{content: attr(data-detail);width: 4em;margin:-5em -2em 0; position: absolute;color:gray;}
        /*section7 style*****/
        .section7 .sec7-bgbox{padding: 0% 0 5%;height: 100%;top: 0;color: black;text-align: left;}
        .sec7-bgbox .sec7-top{padding:1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;}
        .sec7-bgbox .sec7-popbox{bottom: 0%;position: absolute;height: 85%;padding: 5%;}
        .sec7-bgbox .sec7-pop{margin: 0;left:110%;position: relative;height: 20%;}
        .sec7-pop p.text-center{width:12.5%;height:42.5%;border-radius:50rem;padding:0;margin:0;text-align:center;vertical-align:middle;font-size:1.5rem;font-weight:bold;line-height:1em;}
        .sec7-pop p.text-left{border-radius:1em;margin:0 ;font-size:1.25rem;padding:.5em;display:inline-block;}
        .sec7-popbox .sec7-pop>div{width:0;height: 0;border-left:10px solid transparent;border-right:10px solid transparent;margin:-10px 0 0 3%;}
        /*section8 style*****/
        @keyframes sec8Wheeling{
          from{transform:rotate(0deg);}
          to{transform:rotate(360deg);}
        }
        @-moz-keyframes sec8Wheeling{
          from{transform:rotate(0deg);}
          to{transform:rotate(360deg);}
        }
        @-webkit-keyframes sec8Wheeling{
          from{transform:rotate(0deg);}
          to{transform:rotate(360deg);}
        }
        @-o-keyframes sec8Wheeling{
          from{transform:rotate(0deg);}
          to{transform:rotate(360deg);}
        }
        /* 
        .sec8-bgbox .sec8-wheelbox{top: 0%;position: relative;}
        .sec8-bgbox .sec8-wheelbox>img{top: 0%;position: relative;animation: sec8Wheeling 5s infinite;-webkit-animation: sec8Wheeling 5s linear infinite;-moz-animation: sec8Wheeling 5s linear infinite;-o-animation: sec8Wheeling 5s linear infinite;}
        .sec8-bgbox .sec8-wheelbox div{font-size: .55em;margin:auto 5px;text-align: left;padding:0 5px;line-height: 1.5em;left: 110%;}
        */
        .section8 .sec8-bgbox{padding: 0% 0 5%;height: 100%;top: 0;color: black;background: url(images/sec8_popbox_bg.png) no-repeat center;background-size: 100%;}
        .sec8-bgbox .sec8-top{padding:1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;}
        .sec8-bgbox .sec8-popbox{bottom: 0%;height: 100%; position: absolute;color: white;}
        .sec8-popbox .sec8-popper{padding: 5px;border-radius: 10px;background: #df4b3f;width: 33%;text-align: left;position: absolute;}
        .sec8-popbox .sec8-popper h3{font-size: .75em;}
        .sec8-popbox .sec8-popper p{font-size: .55em;}
        /*section9 style*****/
        .section9 .sec9-bgbox{padding: 0% 0 5%;height: 100%;top: 0;color: white;background: url(images/sec9_popbox_bg.png) no-repeat center;background-size: 100%;}
        .sec9-bgbox .sec9-top{padding:1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;color: #f36595;position: absolute;top:0;}
        .sec9-bgbox .sec9-popbox{top: 0%;height: 100%; position: relative;color: white;}
        .sec9-popbox .sec9-popper{padding: 5px;border-radius: 10px;background: #78cae8;width: 33%;text-align: left;position: absolute;}
        .sec9-popbox .sec9-popper h3{font-size: .75em;}
        .sec9-popbox .sec9-popper p{font-size: .55em;}
        /*section10 style*****/
        .sec10-bgbox .sec10-top{padding:1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;color: #000;position: absolute;top:0;}
        .section10 .sec10-bgbox{padding: 0% 0 5%;height: 100%;top: 0;color: white;}
        .sec10-bgbox .sec10-popbox{top: 30%;position: relative;padding:0% 5%;width: 90%;height: 90%;}
        .sec10-popbox>div{min-height: 4.5em;background-size:auto 100%;background-position: center;background-repeat: no-repeat; padding-top: 5%;margin:100% auto 1em;position: relative;opacity: 0;font-size: 2.5em;}
        .sec10-popbox>div *{padding: 0;margin:5% auto 0;}
        /*section11 style*****/
        .sec11-bgbox .sec11-top{padding:1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;color: #000;position: absolute;top:0;}
        .section11 .sec11-bgbox{height: 100%;}
        .section11 .sec11-popbox{height: 80%;background: url(images/sec11_popbg.png) no-repeat center;background-size:45%;padding: 20% 0;}
        .sec11-popbox h5{position: relative;top: 42.5%;color: black;}
        .sec11-popbox div{position: absolute;color: black;width: 25%;font-size: .7em;padding: 2% 2%;}
        .sec11-popper{opacity: 0;}
        /*section12 style*****/
        .sec12-bgbox .sec12-top{padding:1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 100%;color: #000;position: absolute;top:0;}
        .section12 .sec12-bgbox{height: 100%;}
        .section12 .sec12-popbox{height: 70%;padding: 30% 0 0;width: 100%;}
        .sec12-popper{width: 90%;padding:0 5%;margin:0 auto -5% auto;height: 20%;position: relative;}
        .sec12-popper:nth-child(odd){left: 110%;}
        .sec12-popper:nth-child(even){left: -110%;}
        .sec12-popper .sec12-item{height: 100%;width: 45%;}
        .sec12-popper img{width: 30%;z-index: -1;}
        .sec12-popper:nth-child(odd)>*{float: left;text-align: left;padding-left: 35%;}
        .sec12-popper:nth-child(even)>*{float: right;text-align: right;padding-right: 35%;}
        .sec12-item h3{font-size: 1.5rem;width: 5em;border-radius: 15px;padding:0 5px;float: none;}
        .sec12-item h3.pull-left{margin:1em 0 0 -5rem;text-align: right;}
        .sec12-item h3.pull-right{margin:1em -5rem 0 85%;text-align: left;}
        .sec12-item p{padding:1%;font-size: .55em;}
        /*section13 style*****/
        .sec13-bgbox .sec13-top{padding:1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;color: #000;position: absolute;top:0;}
        .section13 .sec13-bgbox{height: 100%;}
        .section13 .sec13-popbox{height: 80%;padding:20% 0 0;width: 100%;}
        .sec13-popper{width: 90%;padding:0 5%;margin:0 auto -5% auto;height: 20%;position: relative;}
        .sec13-popper:nth-child(odd){left: 110%;}
        .sec13-popper:nth-child(even){left: -110%;}
        .sec13-popper .sec13-item{height: 100%;width: 45%;}
        .sec13-popper img{width: 30%;z-index: -1;}
        .sec13-popper:nth-child(odd)>*{float: left;text-align: left;padding-left: 35%;}
        .sec13-popper:nth-child(even)>*{float: right;text-align: right;padding-right: 35%;}
        .sec13-item h3{font-size: 1.5rem;width: 5em;border-radius: 15px;padding:0 5px;float: none;}
        .sec13-item h3.pull-left{margin:1em 0 0 -5rem;text-align: right;}
        .sec13-item h3.pull-right{margin:1em -5rem 0 85%;text-align: left;}
        .sec13-item p{padding:1%;font-size: .55em;}
        /*section14 style*****/
        .sec14-bgbox .sec14-top{padding:1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;color: #000;position: absolute;top:0;}
        .section14 .sec14-bgbox{height: 100%;}
        .section14 .sec14-popbox{height: 80%;padding: 20% 0 0;width: 100%;}
        .sec14-popper{width: 90%;padding:0 5%;margin:0 auto -5% auto;height: 20%;position: relative;}
        .sec14-popper:nth-child(odd){left: 110%;}
        .sec14-popper:nth-child(even){left: -110%;}
        .sec14-popper .sec14-item{height: 100%;width: 45%;}
        .sec14-popper img{width: 30%;z-index: -1;}
        .sec14-popper:nth-child(odd)>*{float: left;text-align: left;padding-left: 35%;}
        .sec14-popper:nth-child(even)>*{float: right;text-align: right;padding-right: 35%;}
        .sec14-item h3{font-size: 1.5rem;width: 65%;border-radius: 15px;padding:0 5px;float: none;}
        .sec14-item h3.pull-left{margin:1em 0 0 -5rem;text-align: right;}
        .sec14-item h3.pull-right{margin:1em -5rem 0 70%;text-align: left;}
        .sec14-item p{padding:1%;font-size: .55em;}
        /*section15 style*****/
        .sec15-bgbox .sec15-top{padding: 1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;color: #000;position: absolute;top:0;}
        .section15 .sec15-bgbox{height: 100%;}
        .section15 .sec15-popbox{height: 80%;padding:15% 0;width: 100%;}
        .sec15-popper{padding:0;margin: 15% 0 -10%; height: 30%;background-repeat: no-repeat;background-size: auto 100%;float: left;position: relative;width: 35%;}
        .sec15-popper:nth-child(odd){left: 110%;margin:5% 0 0;padding:0 5% 0 10%;}
        .sec15-popper:nth-child(even){left: -110%;margin:5% 0 0;padding:0 10% 0 5%;}
        /*section16 style*****/
        .sec16-bgbox .sec16-top{padding: 1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;color: #000;position: absolute;top:0;}
        .section16 .sec16-bgbox{height: 100%;}
        .section16 .sec16-popbox{height: 80%;padding: 15% 0;width: 100%;}
        .sec16-popper{padding: 0; height: 30%;background-repeat: no-repeat;background-size: auto 100%;float: left;position: relative;z-index: 1;width: 35%;}
        .sec16-popper:nth-child(odd){left: 110%;margin:5% 0 0;padding:0 5% 0 10%;}
        .sec16-popper:nth-child(even){left: -110%;margin:5% 0 0;padding:0 10% 0 5%;}
        /*section17 style*****/
        .sec17-bgbox .sec17-top{padding:1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;color: #000;position: relative;top:0;}
        .section17 .sec17-bgbox{height: 50%;}
        .section17 .sec17-popbox{height: 50%;padding:1% 0 0 5%;width: 100%;}
        .sec17-popper{text-align: left;height: 20%;}
        .sec17-popper>p{margin:5px 0;padding: 10px; height: 20%;display: inline-block;text-align: left;position: relative;font-size: .75em;line-height: 1em;white-space: nowrap;text-overflow: ellipsis;width: 20%;}
        .sec17-popper>span{margin:5px 0 5px 5px;padding: 10px 5px; height: 20%;display: inline-block;text-align: left;position: relative;font-size: .75em;line-height: 1em;white-space: nowrap;text-overflow: ellipsis;width: 12.5%;}
        .sec17-popper>span:before{width: 0;height: 0;border-color:transparent transparent rgb(0, 0, 255) transparent ;border-width: 15px 20px;}
        /*section18 style*****/
        .sec18-bgbox .sec18-top{padding: 1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;color: #000;position: relative;top:0;}
        .section18 .sec18-bgbox{height: 50%;}
        .section18 .sec18-popbox{height: 50%;padding: 5% 0 0 0%;width: 100%;}
/*        .sec18-bgbox:nth-child(1){position: relative;top: 110%;}*/
        .sec18-popper{padding: 0;margin:0 0 ; height: 60%;min-height: 1px; background-repeat: no-repeat;background-size: auto 80%;position: relative;opacity: 0;}
        .sec18-popper:nth-child(1){margin: 0;width:25%;padding:0 5% 0 20%;}
        .sec18-popper:nth-child(2){margin: 0;width:25%;padding:0 20% 0 5%;}
        .sec18-popper.col-4{margin: 0;width:23%;padding:0 5%;}
        .sec18-data{text-align: left;margin-left: 5%;height: 20%;}
        .sec18-data>p{margin:5px 0;padding: 10px; height: 20%;display: inline-block;text-align: left;position: relative;font-size: .75em;line-height: 1em;white-space: nowrap;text-overflow: ellipsis;width: 20%;}
        .sec18-data>span{margin:5px 0 5px 5px;padding: 10px; height: 20%;display: inline-block;text-align: left;position: relative;font-size: .75em;line-height: 1em;white-space: nowrap;text-overflow: ellipsis;width: 12.5%;}
        .sec18-data>span:before{width: 0;height: 0;border-color:transparent transparent rgb(0, 0, 255) transparent ;border-width: 15px 20px;}
        /*section19 style*****/
        .sec19-bgbox .sec19-top{padding: 1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;font-size: 1.1em;width: 90%;color: #000;position: absolute;top:0;}
        .section19 .sec19-bgbox{height: 100%;}
        .section19 .sec19-popbox{height: 50%;padding: 5% 0 0 0%;width: 100%;position: relative;top: 25%;}
        .sec19-popbox img{width: 80%;margin: 0 auto;opacity: 0;}
        /*section20 style*****/
        .section20 .sec20-bgbox{height: 100%;background: url(images/sec20_bgimg.png) no-repeat;background-size: 100% 100%;}
        .sec20-bgbox .sec20-top{padding: 0;text-align: center;font-size: 1.1em;width: 100%;color: #fff;position: absolute;top:5%;}
        .sec20-bgbox .sec20-top p{font-size: .45em;}
        .section20 .sec20-popbox{height: 75%;padding: 5% 0 0 0%;width: 100%;position: absolute;bottom: 5%;}
        .sec20-popbox img{width: 500%;opacity: 0;}
        /*section21 style*****/
        .sec21-bgbox .sec21-top{text-align: center;position: absolute;top:30%;margin:8% auto 2%;padding: 0;height: 30%;}
        .sec21-top img{width: 90%;}
        .section21 .sec21-bgbox{height: 100%;}
        .section21 .sec21-popbox{height: 30%;padding: 5% 5%;margin: 0 auto; width: 90%;margin-top: 55%;position: relative;text-align: left;font-size: .65em;color: black;}
        .sec21-popbox img.col-6{position: relative; left: -110%;}
        .sec21-popbox div.col-6{position: relative; left: 110%;}
        .sec21-footer{position: absolute;bottom: 0;width:90%;padding: 5%;margin:0 auto;opacity: 0;height: 25%;}
        .sec21-footer button{background:url(images/sec21_btn_download.png);background-size:100% 100%;width:90%;margin:5% auto;min-height: 3rem;outline: none;border: none;}
        .sec21-footer img{margin-left: 10%;margin-right: 2%;box-shadow:0px 0px 3px 3px gray;}
        .sec21-footer p{text-align: left;font-size: .75em;font-weight: lighter;margin:1% auto;}
        /*rewrite of some common style*/
        .sec-top{font-size: 1.1em;padding: 1% 0 0% 8%;background: url(images/topper_red.png) no-repeat 5% top;background-size: 2% 100%;text-align: left;}
        .sec-top>p{width: 100%;font-size: .9em!important}
    </style>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.min.js"></script>
    <script src="js/jquery.fullPage.min.js"></script>
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?877339b6256464df8b7ad48b6dd6e7e0";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>

    <script>
    $(document).ready(function() {
        win_w= window.innerWidth  || document.documentElement.clientWidth  || document.body.scrollWidth ;
        console.log(win_w);
        document.body.style.width= win_w+ 'px';
//        function suck(){
//            var now= parseInt($('.section1').find('i').text());
//            var ran= Math.ceil(Math.random()*10);
//            if(now+ran<=100){
////                console.log(ran);
//                $('.section1').find('i').delay(50).text(now+ ran);
//            }
//        }
//        window.setInterval(suck,100);
//        function gettingDoc(v){
//            if(document.readyState == 'complete'){
//                console.log(document.readyState);
////                var gottenDoc= el.children[1];
////                $('.section1').find('i').text(v);
//            }
//        }
        /*first loading*/
        $('.section2 .sec2-bgbox').find('h1').css('opacity','1').delay(500).animate({top:'0'},1500,'easeOutExpo');
        $('.section2 .sec2-bgbox').find('h2').css('opacity','1').delay(500).animate({top:'0'},1500,'easeOutExpo');
        $('.section2').find('p').eq(0).delay(1000).animate({opacity: '1'}, 500, 'easeOutExpo');
        $('.section2').find('p').eq(1).delay(1500).animate({left: '0'}, 500, 'easeOutExpo');
        $('.sec2-bgbox').find('img').delay(1000).animate({opacity: 1},500,'easeOutExpo');
        /**/
        console.log(ua= navigator.userAgent);
        if(ua.indexOf('Android')>-1){
//            dev= 'android_dev';
            $('.sec21-footer>a').attr('href','http://a.app.qq.com/o/simple.jsp?pkgname=com.manle.phone.android.yaodian');
        }else if(ua.indexOf('iPhone')>-1){
//            dev= 'iphone_dev';
            $('.sec21-footer>a').attr('href','http://itunes.apple.com/us/app/id465049131?ls=1&mt=8');
        }else if(ua.indexOf('iPad')>-1){
//            dev= 'ipad_dev';
            $('.sec21-footer>a').attr('href','http://itunes.apple.com/us/app/id465049131?ls=1&mt=8');
        }

        $.fn.fullpage({
            slidesColor: [//'rgba(0,0,0,.95)',//'url("images/sec1_bg_img.png")',
                          '#ffaf00',
                          '#ffaf00',
                          '#f1f6f8',
                          '#ffffff',
                          '#fff3f1',
                          '#f2fee4',
                          '#ffffff',
                          '#f6f6f6',
                          '#f7ffd1',
                          '#ffffff',
                          '#ffffff',
                          '#ffffff',
                          '#ffffff',
                          '#ffffff',
                          '#ffffff',
                          '#ffffff',
                          '#ffffff',
                          '#ffffff',
                          '#ffffff',
                          '#ffaf00',
                          '#ffffff'
                         ],
            anchors: [//'page0',
//                      'page1',
//                      'page2',
//                      'page3',
//                      'page4',
//                      'page5',
//                      'page6',
//                      'page7',
//                      'page8',
//                      'page9',
//                      'page10',
//                      'page11',
//                      'page12',
//                      'page13',
//                      'page14',
//                      'page15',
//                      'page16',
//                      'page17',
//                      'page18',
//                      'page19',
//                      'page20'
                     ],
            loopBottom: false,
            afterLoad: function(anchorLink, index){
                if(index == 0){
                    console.log(document.readyState);
//                    fakeProgress(0);
//                        console.log(now);
//                    for(; now< 100;){
//                        $('.section1').find('i').text(++now);
//                    }
                }
                if(index == 1){
//                    var sec1= document.getElementsByClassName('section1')[0];
//                    document.getElementsByTagName('div')[0].emoveChild(sec1);
                    $('.section2 .sec2-bgbox').find('h1').css('opacity','1').delay(500).animate({top:'0'},1500,'easeOutExpo');
                    $('.section2 .sec2-bgbox').find('h2').css('opacity','1').delay(500).animate({top:'0'},1500,'easeOutExpo');
                    $('.section2').find('p').eq(0).delay(1000).animate({opacity: '1'}, 500, 'easeOutExpo');
                    $('.section2').find('p').eq(1).delay(1500).animate({left: '0'}, 500, 'easeOutExpo');
                    $('.sec2-bgbox').find('img').delay(1000).animate({opacity: 1},500,'easeOutExpo');
                }
                if(index == 2){
                        $('.section3').find('.col-6').eq(0).delay(500).animate({left: '0'}, 500,'easeOutExpo');
                        $('.section3').find('.col-6').eq(1).delay(500).animate({'left': '0'},500,'easeOutExpo');
                }
                if(index == 3){
                    for(i in $('.section4').find('i')){
                        var data_width= $('.section4').find('i').eq(i).attr('data-width');
                        $('.section4').find('i').eq(i).delay(0).animate({'width': data_width}, 0);
                        $('.section4').find('i').eq(i).delay(100*i).animate({
                            opacity: 1
                        }, 500, 'easeOutExpo');
                    }
                }
                if(index == 4){
//                    $('.section5').find('.slide').fadeIn(1000);
                    $('.sec5-popimg').eq(0).delay(100).fadeIn();
                    $('.sec5-popimg').click(function(){
                        var i= $(this).index();
                        var len= $('.sec5-popimg').length; 
//                        console.log(i%len);
                        $('.sec5-popimg').eq(i%len).delay(250).fadeOut();
                        $('.sec5-popimg').eq((i+1)%len).delay(500).fadeIn();
                    });
//                    for(var i= 0,len= $('.sec5-popimg').length; ;i++){
//                        $('.sec5-popimg').eq(i%len).delay(500).fadeOut();
//                        $('.sec5-popimg').eq(i%len).next().delay(500*i).fadeIn();
////                        $('.sec5-popimg.active').toggleClass('.active');
////                        $('.sec5-popimg.active').next().toggleClass('.active');
//                    }
                }
                if(index== 5){
                    for(i in $('.section6').find('.sec6-data')){
                        var data= $('.section6').find('.sec6-data').eq(i).attr('data-height');
                        suck_data= 100-parseFloat(data)+'%';
                        $('.section6').find('.sec6-data').eq(i).delay(500*i-300).animate({
                            'height': data,//'top': suck_data,
                        }, 500, 'easeOutExpo');
                        $('.sec6-data').find('.data-city').eq(i).animate({opacity: 1},500);
                    }
                }
                if(index == 6){
                    for(i in $('.section7 .sec7-pop')){
                        $('.section7 .sec7-pop').eq(i).delay(500*i).animate({
                            left: '0'
                        }, 500, 'easeOutExpo');
                    }
                }
                if(index == 7){
                    for(var i=0,l= $('.sec8-popbox').length;i;i++){
                        l= $('.sec8-popbox').length;
                        console.log(i);
                        $('.sec8-popper').eq(i).delay(100*i).fadeIn();
                        $('.sec8-popper').eq((i+1)%l).delay(150*i).fadeOut();
                    }
                }
                
                if(index== 9){
                    $('.sec10-popbox').find('.col-6').delay(500).animate({'margin':'.1em auto .1em','opacity':1}, 500, 'easeOutExpo');
                    $('.sec10-popbox').find('.col-4').delay(800).animate({'margin':'.1em auto .1em','opacity':1}, 500, 'easeOutExpo');
                }
                if(index== 10){
                    for(i in $('.sec11-popbox').find('.sec11-popper'))
                        $('.sec11-popbox').find('.sec11-popper').eq(i).delay(100* i).animate({opacity: 1},500);
                }
                if(index== 11){
                    for(i in $('.sec12-popper')){
                        $('.sec12-popper').eq(i).delay(500).animate({left: 0},500);
                    }
                }
                if(index== 12){
                    for(i in $('.sec13-popper')){
                        $('.sec13-popper').eq(i).delay(500).animate({left: 0},500);
                    }
                }
                if(index== 13){
                    for(i in $('.sec14-popper')){
                        $('.sec14-popper').eq(i).delay(500).animate({left: 0},500);
                    }
                }
                if(index== 14){
                    for(i in $('.sec15-popper')){
                        $('.sec15-popper').eq(i).delay(500).animate({left: 0},500);
                    }
                }
                if(index== 15){
                    for(i in $('.sec16-popper')){
                        $('.sec16-popper').eq(i).delay(500).animate({left: 0},500);
                    }
                }
                if(index== 16){
                    for(i in $('.sec17-popper p')){
                        var data_w= $('.sec17-popper').find('p').eq(i).attr('data-width');
                        $('.sec17-popper').find('p').eq(i).delay(100+100*(i%5)).animate({width: data_w+ '%'},500);
                    }
                }
                if(index== 17){
                    $('.sec18-popper').delay(200).animate({'opacity': 1},500);
                    for(i in $('.sec18-data p')){
                        var data_w= $('.sec18-data').find('p').eq(i).attr('data-width');
                        $('.sec18-data').find('p').eq(i).delay(100*i).animate({width: data_w+ '%'},500);
                    }
                }
                if(index== 18){
                    $('.sec19-popbox').find('img').delay(250).animate({'opacity':1},500);
                }
                if(index== 19){
                    for(i in $('.sec20-popbox').find('img')){
                        var data_w= $('.sec20-popbox').find('img').eq(i).attr('data-width');
                        $('.sec20-popbox').find('img').eq(i).delay(50*i).animate({width: data_w,opacity: 1},200);
                    }
                }
                if(index== 20){
                    $('.sec21-top').delay(500).animate({top:0},400);
                    $('.sec21-popbox .col-6').delay(1000).animate({left:'0'},400);
                    $('.sec21-footer').delay(1500).animate({opacity:1},500);
                }
            },
            onLeave: function(index, direction){
                if(index == 0){
//                    $('.section1').css({
//                        'display':'none'
//                    }, 0, 'easeOutExpo');
                }
                if(index == 1){
                    $('.section2 .sec2-bgbox').find('h2').delay(400).animate({top:'-100%'},500,'easeOutExpo').css('opacity',0);
                    $('.section2 .sec2-bgbox').find('h1').delay(300).animate({top:'-100%'},500,'easeOutExpo').css('opacity',0);
                    $('.section2').find('p').eq(0).delay(200).animate({opacity: '0'}, 500, 'easeOutExpo');
                    $('.section2').find('p').eq(1).delay(100).animate({left: '-120%'}, 500, 'easeOutExpo');
                    $('.sec2-bgbox').find('img').delay(100).animate({opacity: 0},500,'easeOutExpo');
                }
                if(index == 2){
                    $('.section3').find('.col-6').eq(0).delay(300).animate({left: '-110%'}, 500,'easeOutExpo');
                    $('.section3').find('.col-6').eq(1).delay(300).animate({'left': '110%'}, 500,'easeOutExpo');
                }
                if(index == 3){
                    $('.section4').find('i').delay(100).animate({
                        opacity: 0,
                    }, 500, 'easeOutExpo').animate({width: '0%'},500);
                }
                if(index == 4){
                    $('.sec5-popimg').delay(100).fadeOut(500);
                }
                if(index== 5){
                        $('.section6').find('.sec6-data').delay(100).animate({
                            'height': '15%',//'top': '85%',
                        }, 500, 'easeOutExpo');
                }
                if(index == 6){
                    for(i in $('.section7 .sec7-pop')){
                        $('.section7 .sec7-pop').eq(i).delay(300).animate({
                            'left':'110%'
                        }, 500, 'easeOutExpo');
                    }
                }
                if(index == 7){
                    $('.sec8-popper').delay(300).fadeIn();
                }
                if(index== 9){
                    $('.sec10-popbox').find('.col-6').delay(200).animate({'opacity': 0}, 500, 'easeOutExpo');
                    $('.sec10-popbox').find('.col-4').delay(100).animate({'opacity': 0}, 500, 'easeOutExpo');
                }
                if(index== 10){
                    $('.sec11-popbox').find('.sec11-popper').delay(200).animate({opacity: 0},500);
                }
                if(index== 11){
                    for(i in $('.sec12-popper')){
                        $('.sec12-popper').eq(i).delay(100+100*i).animate({left: Math.pow(-1,i)+ '10%' },500);
                    }
                }
                if(index== 12){
                    for(i in $('.sec13-popper')){
                        $('.sec13-popper').eq(i).delay(100+100*i).animate({left: Math.pow(-1,i)+ '10%' },500);
                    }
                }
                if(index== 13){
                    for(i in $('.sec14-popper')){
                        $('.sec14-popper').eq(i).delay(100+100*i).animate({left: Math.pow(-1,i)+ '10%' },500);
                    }
                }
                if(index== 14){
                    for(i in $('.sec15-popper')){
                        $('.sec15-popper').eq(i).delay(100).animate({left: Math.pow(-1,i)+ '10%' },500);
                    }
                }
                if(index== 15){
                    for(i in $('.sec16-popper')){
                        $('.sec16-popper').eq(i).delay(100).animate({left: Math.pow(-1,i)+ '10%' },500);
                    }
                }
                if(index== 16){
                    $('.sec17-popper').find('p').delay(100).animate({width: '20%'},500);
                }
                if(index== 17){
                    $('.sec18-popper').delay(0).animate({'opacity': 0},500);
                    $('.sec18-data').find('p').delay(100).animate({width: '20%'},500);
                }
                if(index== 18){
                    $('.sec19-popbox').find('img').delay(250).animate({'opacity':0},500);
                }
                if(index== 19){
                    $('.sec20-popbox').find('img').delay(10).animate({'width': '500%','opacity': 0},500).stop();
//                    $('.sec20-popbox').find('img').delay(100).css({'width':'200%'});
                }
                if(index== 20){
                    $('.sec21-popbox img.col-6').delay(200).animate({left:'-110%'},500);
                    $('.sec21-popbox div.col-6').delay(200).animate({left:'110%'},500);
                }
            }
        });
    });
    </script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
var imgUrl = "http://phone.lkhealth.net/ydzx/business/whitebook2014/images/sec21_logoimg.png";
var lineLink = "http://phone.lkhealth.net/ydzx/business/whitebook2014/";
var descContent = '分享用药数据盛宴，你躺枪了吗？';
var shareTitle = '掌上药店.2014白皮书';
var appid = 'wx6297fadc6a85e805';
alert("<?php echo $signPackage['url'];?>");
  wx.config({
    appId: "<?php echo $signPackage[appId];?>",
    timestamp: "<?php echo $signPackage[timestamp];?>",
    nonceStr: "<?php echo $signPackage[nonceStr];?>",
    signature: "<?php echo $signPackage[signature];?>",
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
	   'checkJsApi',
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onRecordEnd',
        'playVoice',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'
    ]
  });
  wx.ready(function () {
    // 在这里调用 API
	   // 在这里调用 API
	// 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
  document.querySelector('#onMenuShareTimeline').onclick = function () {
    wx.onMenuShareTimeline({
      title: shareTitle,
      link: lineLink,
      imgUrl: imgUrl,
      trigger: function (res) {
        alert('用户点击分享到朋友圈');
      },
      success: function (res) {
        alert('已分享');
      },
      cancel: function (res) {
        alert('已取消');
      },
      fail: function (res) {
        alert(JSON.stringify(res));
      }
    });
    alert('已注册获取“分享到朋友圈”状态事件');
  };
  });
  
  wx.error(function (res) {
  alert(res.errMsg+'702');
});


    </script>
</head>

<body >

<!--
    <div class="section section1">
        <div class="sec1-bgbox">
            <h1><i>0</i><span> %</span></h1>
            <h5 class="text-white">请在有网络覆盖情况下使用</h5>
        </div>
    </div>
-->
    <div class="section section2">
        <div class="sec2-bgbox">
            <h1><span>2014掌上药店</span></h1>
            <h2><span>健康白皮书</span></h2>
            <p class="pis">享受健康生活，来掌上药店！</p>
            <img class="" src="images/sec2_popimg.png"/>
            <p class="tip">*掌上药店App2014年用户行为数据</p>
        </div>
    </div>
    <div class="section section3">
        <div class="sec3-bgbox">
            <div class="col-6 ">
                <img class="" src="images/sec3_leftimg_yellow.png"/>
            </div>
            <div class="col-6 ">
                <p>2014</p>
                <p>掌药的小伙伴们</p>
                <p>都在关注啥...</p>
            </div>
        </div>
    </div>
    <div class="section section4">
        <div class="sec4-bgbox">
            <div class="col-12 sec4-top sec-top">
                <p>2014掌上药店用户关注热词排行榜</p>
            </div>
            <div class="col-12 sec4-popbox">
                <img class="" src='images/sec4_popimg.png'/>
<!--                <p class="text-black">2014年度热门词</p>-->
            </div>
            <div class="sec4-pop">
<!--
                <i class="sec4-pop" data-width='25.6%' style='width:26%;top:28.7%;min-height:184px;left:15.3%;background: url(images/sec4_pop1.png) no-repeat center;'>希爱力</i>
                <i class="sec4-pop" data-width='21.5%' style='width:22%;top:22.6%;min-height:162px;left:39.7%;background: url(images/sec4_pop2.png) no-repeat center;'>阳痿</i> 
                <i class="sec4-pop" data-width='14.0%' style='width:15%;top:28.7%;min-height:106px;left:61.9%;background: url(images/sec4_pop3.png) no-repeat center;'>思密达</i>
                <i class="sec4-pop" data-width='23.1%' style='width:24%;top:39.0%;min-height:148px;left:67.4%;background: url(images/sec4_pop4.png) no-repeat center;'>避孕</i>
                <i class="sec4-pop" data-width='18.5%' style='width:19%;top:55.1%;min-height:122px;left:72.5%;background: url(images/sec4_pop5.png) no-repeat center;'>咽炎</i>
                <i class="sec4-pop" data-width='20.3%' style='width:21%;top:62.5%;min-height:156px;left:59.2%;background: url(images/sec4_pop6.png) no-repeat center;'>慢严舒柠</i>
                <i class="sec4-pop" data-width='13.8%' style='width:14%;top:69.8%;min-height:108px;left:45.4%;background: url(images/sec4_pop7.png) no-repeat center;'>肥胖</i>
                <i class="sec4-pop" data-width='19.0%' style='width:20%;top:64.5%;min-height:150px;left:26.4%;background: url(images/sec4_pop8.png) no-repeat center;'>失眠</i>
                <i class="sec4-pop" data-width='13.6%' style='width:14%;top:60.5%;min-height:98px;left:16.0%;background: url(images/sec4_pop9.png) no-repeat center;'>皮炎平</i>
                <i class="sec4-pop" data-width='18.5%' style='width:19%;top:47.4%;min-height:122px;left:6.8%;background: url(images/sec4_pop10.png) no-repeat center;'>便秘</i>
-->
            </div>
        </div>
    </div>
    <div class="section section5">
        <div class="sec5-bgbox">
            <div class="col-12 sec5-top sec-top">
                <p>2014区域人群搜索热门词</p>
            </div>
            <div class="col-12 sec5-popbox">
                <div class="sec5-popimg" style="background:url(images/map_bg1.png) no-repeat center;background-size:100% ">
                    </br>
                </div>
                <div class="sec5-popimg"style="background:url(images/map_bg2.png) no-repeat center;background-size:100% ">
                    </br>
                </div>
                <div class="sec5-popimg"style="background:url(images/map_bg3.png) no-repeat center;background-size:100% ">
                    </br>
                </div>
                <div class="sec5-popimg"style="background:url(images/map_bg4.png) no-repeat center;background-size:100% ">
                    </br>
                </div>
                <div class="sec5-popimg"style="background:url(images/map_bg5.png) no-repeat center;background-size:100% ">
                    </br>
                </div>
                <div class="sec5-popimg"style="background:url(images/map_bg6.png) no-repeat center;background-size:100% ">
                    </br>
                </div>
                <div class="sec5-popimg"style="background:url(images/map_bg7.png) no-repeat center;background-size:100% ">
                    </br>
                </div>
            </div>
            <p class="text-gray" style="position:absolute;top:20%;font-size:.5em;text-align:center;margin:0 auto;width:100%;">(点击地图切换地区)</p>
        </div>
    </div>
    <div class="section section6">
        <div class="sec6-bgbox">
            <div class="col-12 sec6-top sec-top">
                <p>2014区域人群搜索热门词</p>
            </div>
            <div class="col-12 sec6-popbox">
                <div class="dot-11"></div>
                <div class="dot-11 sec6-data" data-height='32.5%' style='background:#79c3e0;left:9%;'>
                    <div class="data-city" data-detail='脱发、ED、高血压、糖尿病、高血脂' style='background: #c2e3f6;margin: -490% auto 0;'></div>
                    <div class="sec6-dot">.</div>
                    上</br>海
                </div>
                <div class="dot-11"></div>
                <div class="dot-11 sec6-data" data-height='30.7%' style='background:#ec5b4a;left:27%;'>
                    <div class="data-city" data-detail='咽炎、ED、希爱力、上呼道感染、(支)气管炎' style='margin: -460% auto 0;'></div>
                    <div class="sec6-dot">.</div>
                    北</br>京
                </div>
                <div class="dot-11"></div>
                <div class="dot-11 sec6-data" data-height='19.0%' style='background:#f5b764;left:45%;'>
                    <div class="data-city" data-detail='胃炎、鼻炎、ED、脱发、过度肥胖' style='margin: -460% auto 0;'></div>
                    <div class="sec6-dot">.</div>
                    南</br>京
                </div>
                <div class="dot-11"></div>
                <div class="dot-11 sec6-data" data-height='19.0%' style='background:#ece9be;left:63%;'>
                    <div class="data-city" data-detail='脱发、ED、高血压、高血脂、糖尿病' style='margin: -460% auto 0;'></div>
                    <div class="sec6-dot">.</div>
                    杭</br>州
                </div>
                <div class="dot-11"></div>
                <div class="dot-11 sec6-data" data-height='19.0%' style='background:#1a9793;left:81%;'>
                    <div class="data-city" data-detail='阳痿、ED、早泄、减肥、甲亢' style='margin: -460% auto 0;'></div>
                    <div class="sec6-dot">.</div>
                    成</br>都
                </div>
                <div class="dot-11"></div>
            </div>
            
        </div>
    </div>
    <div class="section section7">
        <div class="sec7-bgbox">
            <div class="col-12 sec7-top sec-top">
                <p>各年代人群关注</p>
            </div>
            <div class="col-12 text-white sec7-popbox">
                <div class="sec7-pop">
                    <p class="text-center" style="background:#c5b4d6;"></br>60后</p>
                    <div style="border-top:20px solid #c5b4d6;"></div>
                    <p class="text-left" style="background:url(images/sec7_popbg_fix.png) center #c5b4d6;">骨质增生、神经衰弱、糖尿病、肺癌、前列腺炎</p>
                </div>
                <div class="sec7-pop">
                    <p class="text-center" style="background:#ff7b4b;"></br>70后</p>
                    <div style="border-top:20px solid #ff7b4b;"></div>
                    <p class="text-left" style="background:url(images/sec7_popbg_fix.png) center #ff7b4b;">失眠、心脏病、高血压、减肥、早泄</p>
                </div>
                <div class="sec7-pop">
                    <p class="text-center" style="background:#f6da00;"></br>80后</p>
                    <div style="border-top:20px solid #f6da00;"></div>
                    <p class="text-left" style="background:url(images/sec7_popbg_fix.png) center #f6da00;">便秘、肥胖、眼疲痨、咽炎、避孕</p>
                </div>
                <div class="sec7-pop">
                    <p class="text-center" style="background:#a6dde2;"></br>90后</p>
                    <div style="border-top:20px solid #a6dde2;"></div>
                    <p class="text-left" style="background:url(images/sec7_popbg_fix.png) center #a6dde2;">感冒、痔疮、避孕、减肥、痤疮</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section section8">
        <div class="sec8-bgbox">
            <div class="col-12 sec8-top sec-top">
                <p>"高富帅"们最关注</p>
            </div>
            <div class="col-12 sec8-popbox">
<!--                <img class="" src="images/sec8_wheel.png"/>-->
                
                <div class="sec8-popper" style="top:22.6%;left:30.3%;">
                    <h3 class="text-white">阳痿早泄类3%</h3>
                    <p class="text-white">早泄、PE、必利劲、金水宝、阳痿、伟哥、ED、希爱力、三鞭丸</p>
                </div>
                <div class="sec8-popper" style="top:43.8%;left:61.4%;">
                    <h3 class="text-white">补肾益精类1.8%</h3>
                    <p class="text-white">海狗丸、五子衍宗丸、六味地黄丸三鞭酒</p>
                </div>
                <div class="sec8-popper" style="top:69.2%;left:6.3%;">
                    <h3 class="text-white">营养保健类1.6%</h3>
                    <p class="text-white">21金维他、金施尔康、力保健、鹰牌花旗参、同仁堂西洋参片</p>
                </div>
                <div class="sec8-popper" style="top:69.5%;left:52.9%;">
                    <h3 class="text-white">亚健康类1.45%</h3>
                    <p class="text-white">自然之宝褪黑素、汤臣倍健维生素E软胶囊、袋鼠精胶囊、海王金樽</p>
                </div>
                <div class="sec8-popper" style="top:50.3%;left:3.6%;">
                    <h3 class="text-white">其它92%</h3>
                    <p class="text-white">养血生发胶囊 、蛋白质粉(力菲牌)杜蕾斯 超薄</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="section section9">
        <div class="sec9-bgbox">
            <div class="col-12 sec9-top sec-top">
                <p>"白富美"们最关注</p>
            </div>
            <div class="col-12 sec9-popbox">
                <div class="sec9-popper" style="left:30.3%;top:15.3%;">
                    <h3 class="text-white">其它类56%</h3>
                    <p class="text-white">养血生发胶囊、芦荟凝胶、丰胸、太太口服液</p>
                </div>
                <div class="sec9-popper" style="left:61.4%;top:51.4%;">
                    <h3 class="text-white">保健护理类12%</h3>
                    <p class="text-white">阿胶、膳食纤维、妇炎洁、科千金片、复合益生菌</p>
                </div>
                <div class="sec9-popper" style="left:52.9%;top:71.0%;">
                    <h3 class="text-white">儿童用品类8%</h3>
                    <p class="text-white">小儿退热贴、思密达、合生元儿童益生菌冲剂 、善存片、复合维生素</p>
                </div>
                <div class="sec9-popper" style="left:6.0%;top:70.5%;">
                    <h3 class="text-white">怀孕避孕类4%</h3>
                    <p class="text-white">安全套、杜蕾斯、情趣用品、口服避孕药、优思明、妈富隆、怀孕检测</p>
                </div>
                <div class="sec9-popper" style="left:3.2%;top:51.7%;">
                    <h3 class="text-white">美容减肥类 20%</h3>
                    <p class="text-white">左旋肉碱、胶原蛋白粉、汤臣倍健羊胎素、碧生源减肥茶</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="section section10">
        <div class="sec10-bgbox">
            <div class="col-12 sec10-top sec-top">
                <p>掌药用户最关注谁的健康</p>
                <h6>使用掌上药店中关注了哪些家人</h6>
            </div>
            <div class="col-12 sec10-popbox">
                <div class="col-6" style='background-image: url(images/sec10_pop1_bg.png) ;min-height:20%;'>
                    <h3>子女</h3>
                    <p>32%</p>
                </div>
                <div class="col-6" style='background-image: url(images/sec10_pop2_bg.png) ;min-height:20%;'>
                    <h3>父亲</h3>
                    <p>32%</p>
                </div>
                
                <div class="col-4" style='background-image: url(images/sec10_pop3_bg.png) ;min-height:15%;'>
                    <h3>母亲</h3>
                    <p>10%</p>
                </div>
                <div class="col-4" style='background-image: url(images/sec10_pop4_bg.png) ;min-height:15%;'>
                    <h3>丈夫</h3>
                    <p>8%</p>
                </div>
                <div class="col-4" style='background-image: url(images/sec10_pop5_bg.png) ;min-height:15%;'>
                    <h3>妻子</h3>
                    <p>6%</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section section11">
        <div class="sec11-bgbox">
            <div class="col-12 sec11-top sec-top">
                <p>2014掌药用户</p>
                <p>自诊发病率最高的疾病</p>
            </div>
            <div class="col-12 sec11-popbox">
                <h5 class='text-black'>用户自诊</h5>
                <h5 class='text-black'>最多的疾病</h5>
                <div class="sec11-popper" style='left:2.0%;top:58.1%;background:#eb1d78;'>男子性功能障碍</div>
                <div class="sec11-popper" style='left:9.6%;top:30.4%;background:#ffaf00;'>糖尿病</div>
                <div class="sec11-popper" style='left:61.5%;top:30.4%;background:#20a0f6;'>肠炎</div>
                <div class="sec11-popper" style='left:67.7%;top:57.7%;background:#01cc05;'>结肠炎</div>
                <div class="sec11-popper" style='left:39.2%;top:70.4%;background:#f36595;'>前列腺炎</div>
            </div>
        </div>
    </div>
    <div class="section section12">
        <div class="sec12-bgbox">
            <div class="col-12 sec12-top sec-top">
                <p>掌药最“大众”的药品</p>
            </div>
            <div class="col-12 sec12-popbox">
                <div class="sec12-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper1.png"/>-->
                    <div class="sec12-item" style="background:url(images/sec12_popper1.png) no-repeat left;background-size: auto 100%;">
                        <h3 class="text-white pull-left" style='background:#dc3000;'>希爱力</h3>
                        <p class="text-gray">LillydelCaribe,Inc.(波多黎各)生产</p>
                    </div>
                </div>
                <div class="sec12-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper2.png"/>-->
                    <div class="sec12-item" style="background:url(images/sec12_popper2.png) no-repeat right;background-size: auto 100%;">
                        <h3 class="text-white pull-right" style='background:#0ab8b6;'>希刻劳</h3>
                        <p class="text-gray">礼来苏州制药有限公司</p>
                    </div>
                </div>
                <div class="sec12-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper3.png"/>-->
                    <div class="sec12-item" style="background:url(images/sec12_popper3.png) no-repeat left;background-size: auto 100%;">
                        <h3 class="text-white pull-left" style='background:#bf6ae3;'>思密达</h3>
                        <p class="text-gray">博福-益普生(天津)制药有限公司</p>
                    </div>
                </div>
                <div class="sec12-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper4.png"/>-->
                    <div class="sec12-item" style="background:url(images/sec12_popper4.png) no-repeat right;background-size: auto 100%;">
                        <h3 class="text-white pull-right" style='background:#0ab8b6;'>优思明</h3>
                        <p class="text-gray">拜耳医药保健有限公司</p>
                    </div>
                </div>
                <div class="sec12-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper5.png"/>-->
                    <div class="sec12-item" style="background:url(images/sec12_popper5.png) no-repeat left;background-size: auto 100%;">
                        <h3 class="text-white pull-left" style='background:#bf6ae3;'>必利劲</h3>
                        <p class="text-gray">德国Janssen Ortho L.L.C</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section13">
        <div class="sec13-bgbox">
            <div class="col-12 sec13-top sec-top">
                <p>掌药男性用户最关注的药品</p>
            </div>
            <div class="col-12 sec13-popbox">
                <div class="sec13-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper1.png"/>-->
                    <div class="sec13-item" style="background:url(images/sec13_popper1.png) no-repeat left;background-size: auto 100%;">
                        <h3 class="text-white pull-left" style='background:#dc3000;'>希爱力</h3>
                        <p class="text-gray">LillydelCaribe,Inc.(波多黎各)生产</p>
                    </div>
                </div>
                <div class="sec13-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper2.png"/>-->
                    <div class="sec13-item" style="background:url(images/sec13_popper2.png) no-repeat right;background-size: auto 100%;">
                        <h3 class="text-white pull-right" style='background:#0ab8b6;'>万艾可</h3>
                        <p class="text-gray">辉瑞制药有限公司</p>
                    </div>
                </div>
                <div class="sec13-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper3.png"/>-->
                    <div class="sec13-item" style="background:url(images/sec13_popper3.png) no-repeat left;background-size: auto 100%;">
                        <h3 class="text-white pull-left" style='background:#bf6ae3;'>必利劲</h3>
                        <p class="text-gray">德国Janssen Ortho L.L.C</p>
                    </div>
                </div>
                <div class="sec13-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper4.png"/>-->
                    <div class="sec13-item" style="background:url(images/sec13_popper4.png) no-repeat right;background-size: auto 100%;">
                        <h3 class="text-white pull-right" style='background:#0ab8b6;'>前列康</h3>
                        <p class="text-gray">浙江康恩贝制药股份有限公司</p>
                    </div>
                </div>
                <div class="sec13-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper5.png"/>-->
                    <div class="sec13-item" style="background:url(images/sec13_popper5.png) no-repeat left;background-size: auto 100%;">
                        <h3 class="text-white pull-left" style='background:#bf6ae3;'>保法止</h3>
                        <p class="text-gray">杭州默沙东制药有限公司</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section14">
        <div class="sec14-bgbox">
            <div class="col-12 sec14-top sec-top">
                <p>掌药女性用户最关注的药品</p>
            </div>
            <div class="col-12 sec14-popbox">
                <div class="sec14-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper1.png"/>-->
                    <div class="sec14-item" style="background:url(images/sec14_popper1.png) no-repeat left;background-size: auto 100%;">
                        <h3 class="text-white pull-left" style='background:#dc3000;'>优思明</h3>
                        <p class="text-gray">拜耳医药保健有限公司</p>
                    </div>
                </div>
                <div class="sec14-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper2.png"/>-->
                    <div class="sec14-item" style="background:url(images/sec14_popper2.png) no-repeat right;background-size: auto 100%;">
                        <h3 class="text-white pull-right" style='background:#0ab8b6;'>妈富隆</h3>
                        <p class="text-gray">荷兰欧加农制药有限公司</p>
                    </div>
                </div>
                <div class="sec14-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper3.png"/>-->
                    <div class="sec14-item" style="background:url(images/sec14_popper3.png) no-repeat left;background-size: auto 100%;">
                        <h3 class="text-white pull-left" style='background:#bf6ae3;'>美欣乐</h3>
                        <p class="text-gray">爱尔兰欧加农公司</p>
                    </div>
                </div>
                <div class="sec14-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper4.png"/>-->
                    <div class="sec14-item" style="background:url(images/sec14_popper4.png) no-repeat right;background-size: auto 100%;">
                        <h3 class="text-white pull-right" style='background:#0ab8b6;'>碧生源减肥茶</h3>
                        <p class="text-gray">北京瑞德梦科贸有限公司</p>
                    </div>
                </div>
                <div class="sec14-popper">
<!--                    <img class="sec12-popimg" src="images/sec12_popper5.png"/>-->
                    <div class="sec14-item" style="background:url(images/sec14_popper5.png) no-repeat left;background-size: auto 100%;">
                        <h3 class="text-white pull-left" style='background:#bf6ae3;'>乌鸡白凤丸</h3>
                        <p class="text-gray">北京同仁堂股份有限公司同仁堂制药厂</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section15">
        <div class="sec15-bgbox">
            <div class="col-12 sec15-top sec-top">
                <p>最受欢迎的连锁药店品牌</p>
            </div>
            <div class="col-12 sec15-popbox">
                <div class="col-6 sec15-popper" >
                    <img class="col-12" src='images/sec15_popper1.png'/>
                </div>
                <div class="col-6 sec15-popper" >
                    <img class="col-12" src='images/sec15_popper2.png'/>
                </div>
                <div class="col-6 sec15-popper" >
                    <img class="col-12" src='images/sec15_popper3.png'/>
                </div>
                <div class="col-6 sec15-popper" >
                    <img class="col-12" src='images/sec15_popper4.png'/>
                </div>
                <div class="col-6 sec15-popper" >
                    <img class="col-12" src='images/sec15_popper5.png'/>
                </div>
                <div class="col-6 sec15-popper" >
                    <img class="col-12" src='images/sec15_popper6.png'/>
                </div>
            </div>
        </div>
    </div>
    <div class="section section16">
        <div class="sec16-bgbox">
            <div class="col-12 sec16-top sec-top">
                <p>最具潜力的连锁药店品牌</p>
            </div>
            <div class="col-12 sec16-popbox">
                <div class="col-6 sec16-popper" >
                    <img class="col-12" src='images/sec16_popper1.png'/>
                </div>
                <div class="col-6 sec16-popper" >
                    <img class="col-12" src='images/sec16_popper2.png'/>
                </div>
                <div class="col-6 sec16-popper" >
                    <img class="col-12" src='images/sec16_popper3.png'/>
                </div>
                <div class="col-6 sec16-popper" >
                    <img class="col-12" src='images/sec16_popper4.png'/>
                </div>
                <div class="col-6 sec16-popper" >
                    <img class="col-12" src='images/sec16_popper5.png'/>
                </div>
            </div>
        </div>
    </div>
    <div class="section section17">
        <div class="sec17-bgbox">
            <div class="col-12 sec17-top sec-top">
                <p>订阅最多的资讯频道</p>
            </div>
            <div class="col-12 sec17-popbox">
                <div class="sec17-popper"><p data-width='73.5' style='background:#7fbb3b;'>运动饮食</p><span style='background:#7fbb3b;'>154000</span></div>
                <div class="sec17-popper"><p data-width='67.6' style='background:#ffaf00;'>养生保健</p><span style='background:#ffaf00;'>149000</span></div>
                <div class="sec17-popper"><p data-width='61.9' style='background:#2871b8;'>用药指南</p><span style='background:#2871b8;'>134000</span></div>
                <div class="sec17-popper"><p data-width='52.8' style='background:#e4422c;'>常见病</p><span style='background:#e4422c;'>121000</span></div>
                <div class="sec17-popper"><p data-width='38.1' style='background:#f36595;'>两性知识</p><span style='background:#f36595;'>116000</span></div>
            </div>
        </div>
        <div class="sec17-bgbox">
            <div class="col-12 sec17-top sec-top">
                <p>最具潜力的资讯频道</p>
            </div>
            <div class="col-12 sec17-popbox">
                <div class="sec17-popper"><p data-width='67.9' style='background:#7fbb3b;'>男性健康(97000)</p><span style='background:#7fbb3b;'>前进16位</span></div>
                <div class="sec17-popper"><p data-width='67.6' style='background:#ffaf00;'>心理健康(125000)</p><span style='background:#ffaf00;'>前进13位</span></div>
                <div class="sec17-popper"><p data-width='61.9' style='background:#2871b8;'>曝光台(112000)</p><span style='background:#2871b8;'>前进9位</span></div>
                <div class="sec17-popper"><p data-width='52.5' style='background:#e4422c;'>留言粉碎机(78000)</p><span style='background:#e4422c;'>前进8位</span></div>
                <div class="sec17-popper"><p data-width='37.6' style='background:#f36595;'>美容减肥(111000)</p><span style='background:#f36595;'>前进7位</span></div>
            </div>
        </div>
    </div>
    <div class="section section18">
        <div class="sec18-bgbox">
            <div class="col-12 sec18-top sec-top">
                <p>用户最爱阅读的资讯频道</p>
            </div>
            <div class="col-12 sec18-popbox">
                <div class="col-6 sec18-popper" >
                    <img class="col-12" src='images/sec18_popper1.png'/>
                </div>
                <div class="col-6 sec18-popper" >
                    <img class="col-12" src='images/sec18_popper2.png'/>
                </div>
                <div class="col-4 sec18-popper" >
                    <img class="col-12" src='images/sec18_popper3.png'/>
                </div>
                <div class="col-4 sec18-popper" >
                    <img class="col-12" src='images/sec18_popper4.png'/>
                </div>
                <div class="col-4 sec18-popper" >
                    <img class="col-12" src='images/sec18_popper5.png'/>
                </div>
            </div>
        </div>
        <div class="sec18-bgbox">
            <div class="col-12 sec18-top sec-top">
                <p>用户阅读量</br>增长最快的资讯频道</p>
            </div>
            <div class="col-12 sec18-popbox">
                <div class="sec18-data"><p data-width='67.9' style='background:#7fbb3b;'>男性健康(97000)</p><span style='background:#7fbb3b;'>前进15位</span></div>
                <div class="sec18-data"><p data-width='67.6' style='background:#ffaf00;'>心理健康(125000)</p><span style='background:#ffaf00;'>前进9位</span></div>
                <div class="sec18-data"><p data-width='61.9' style='background:#2871b8;'>曝光台(112000)</p><span style='background:#2871b8;'>前进7位</span></div>
                <div class="sec18-data"><p data-width='52.5' style='background:#e4422c;'>留言粉碎机(78000)</p><span style='background:#e4422c;'>前进4位</span></div>
                <div class="sec18-data"><p data-width='37.6' style='background:#f36595;'>美容减肥(111000)</p><span style='background:#f36595;'>前进3位</span></div>
            </div>
        </div>
    </div>
    <div class="section section19">
        <div class="sec19-bgbox">
            <div class="col-12 sec19-top sec-top">
                <p>截至2014年12月31日，</br>掌上药店已有</p>
            </div>
            <div class="col-12 sec19-popbox">
                <img class="" src="images/sec19_popimg0.png"/>
            </div>
        </div>
    </div>
    <div class="section section20">
        <div class="sec20-bgbox">
            <div class="col-12 sec20-top">
                <h6>2014年掌药组织和参与发起了7次活动</h6>
                <p>活动海报覆盖 28个城市</p>
                <p>79个连锁品牌，近4000家药店</p>
            </div>
            <div class="col-12 sec20-popbox">
                <img class="" src="images/sec20_popimg1.png" data-width='36.7%' style='position:absolute;top:28.9%;left:5.3%;'/>
                <img class="" src="images/sec20_popimg2.png" data-width='31.2%' style='position:absolute;top:24.9%;left:64.0%;'/>
                <img class="" src="images/sec20_popimg3.png" data-width='44.5%' style='position:absolute;top:64.8%;left:6.1%;'/>
                <img class="" src="images/sec20_popimg4.png" data-width='30.5%' style='position:absolute;top:10.0%;left:16.8%;'/>
                <img class="" src="images/sec20_popimg5.png" data-width='25.9%' style='position:absolute;top:56.2%;left:69.4%;'/>
                <img class="" src="images/sec20_popimg6.png" data-width='26.6%' style='position:absolute;top:76.9%;left:35.0%;'/>
                <img class="" src="images/sec20_popimg7.png" data-width='30.9%' style='position:absolute;top:27.5%;left:34.5%;'/>
                <img class="" src="images/sec20_popimg8.png" data-width='30.9%' style='position:absolute;top:66.6%;left:62.2%;'/>
                <img class="" src="images/sec20_popimg9.png" data-width='32.0%' style='position:absolute;top:54.9%;left:40.1%;'/>
            </div>
        </div>
    </div>
    <div class="section section21">
        <div class="sec21-bgbox">
            <div class="col-12 sec21-top">
                <img class="" src="images/sec21_top.png"/>
            </div>
            <div class="col-12 sec21-popbox">
                <img class="col-6" src="images/sec21_center_left.png"/>
                <div class="col-6">
                    <p>
                        分享该页面至朋友圈
                        </br>
                        或微博，
                        </br>
                        <b class="text-white" style="padding:1px 5px;background:#df4b3f;">截图</b>给掌上药店微信
                        </br>
                        或微博账号，
                        </br>
                        将有机会获得iPad Mini3
                    </p>
                    </br>
                    <p>
                        <a>微博账号：@掌上药店</a>
                        </br>
                        <a>微信账号：@掌上药店</a>
                    </p>
                </div>
            </div>
            <div class='sec21-footer'>
                <a href=''><button class='btn-download'></button></a>
                <img class="col-2" src="images/sec21_logoimg.png"/>
                <div class="col-8">
                    <p class='text-black'>商务合作：<a href="tel:4000318766" style="color:black;text-decoration:none;"><b style="font-size:5em;font-weight:500;">4000-318-766</b></a></p>
                    <p class='text-black'>官方QQ群：292835063</p>
                </div>
            </div>
        </div>
    </div>

    <img class="pager" src='images/paging_indicator.png' style='position:fixed;bottom:9.5%;right:10.5%;width:5.5%;'/>
</body>
</html>