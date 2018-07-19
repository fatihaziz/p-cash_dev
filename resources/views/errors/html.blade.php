<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Portofolio Indonesia Blog</title>
    <meta name="description" content="We are currently under maintenance.">
    <meta name="author" content="Portofolio Indonesia" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116835401-4"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-116835401-4');
	</script>

	<style>
        html,
        body,
        div,
        span,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        abbr,
        address,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        samp,
        small,
        strong,
        sub,
        sup,
        var,
        b,
        i,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: transparent
        }
        
        body {
            line-height: 1
        }
        
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block
        }
        
        nav ul {
            list-style: none
        }
        
        blockquote,
        q {
            quotes: none
        }
        
        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: none
        }
        
        a {
            margin: 0;
            padding: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: transparent;
            text-decoration: none
        }
        
        mark {
            background-color: #ff9;
            color: #000;
            font-style: italic;
            font-weight: bold
        }
        
        del {
            text-decoration: line-through
        }
        
        abbr[title],
        dfn[title] {
            border-bottom: 1px dotted;
            cursor: help
        }
        
        table {
            border-collapse: collapse;
            border-spacing: 0
        }
        
        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 1em 0;
            padding: 0
        }
        
        input,
        select {
            vertical-align: middle
        }
        
        li {
            list-style: none
        }
        
        html,
        body {
            width: 100%;
            height: 100%;
            background: #111;
        }
        
        html {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
        
        body {
            font: normal 75% Arial, Helvetica, sans-serif;
        }
        
        canvas {
            display: block;
            vertical-align: bottom;
        }
        /* ---- stats.js ---- */
        
        .count-particles {
            background: #000022;
            position: absolute;
            top: 48px;
            left: 0;
            width: 80px;
            color: #13E8E9;
            font-size: .8em;
            text-align: left;
            text-indent: 4px;
            line-height: 14px;
            padding-bottom: 2px;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
        }
        
        .js-count-particles {
            font-size: 1.1em;
        }
        
        #stats,
        .count-particles {
            -webkit-user-select: none;
            margin-top: 5px;
            margin-left: 5px;
        }
        
        #stats {
            border-radius: 3px 3px 0 0;
            overflow: hidden;
        }
        
        .count-particles {
            border-radius: 0 0 3px 3px;
        }
        /* ---- particles.js container ---- */
        
        #particles-js {
            width: 100%;
            height: 100%;
            background-color: #b61924;
            background-image: url('');
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: no-repeat;
        }
        
        body {
            overflow: hidden;
        }
        
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        canvas#gears {
            width: 100px !important;
            height: auto !important;
            margin: auto
        }
        
        #modal {
            position: absolute;
            display: flex;
            align-items: center;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100%;
        }
        
        #overlay {
            display: flex;
            height: fit-content;
            width: fit-content;
            margin: auto;
            padding: 4em 5em;
            display: flex;
            flex-direction: column;
            justify-content: center;
            max-width: 700px;
        }
        
        .text>* {
            display: block;
            justify-content: center;
            font-family: 'Open Sans', sans-serif;
            color: #fff;
            margin: auto;
            margin-top: 1.3em;
            text-align: center;
        }
        
        .text>*:nth-child(1) {
            margin-top: 0;
        }
        
        h2,
        h3 {
            font-family: 'Lato', sans-serif !important;
        }
        
        h3 {
            font-size: 3em;
            width: fit-content;
            margin-top: 0em !important;
            font-weight: 200;
        }
        
        p {
            font-size: 1.2em;
            margin-top: 1em !important;
        }
        
        .subscribe-form {
            margin-top: 2.5em;
        }
        
        .subscribe-form p {
            margin: auto;
            text-align: center;
            margin: 1em auto;
            font-size: 1.5em;
            display: block;
        }
        
        h2.entry-head {
            font-size: 4em;
            color: #fff;
            padding: 0em 0.5em
        }
        
        .btn:hover,
        .btn:focus,
        .btn:active {
            opacity: 0.9;
            cursor: pointer;
        }
        
        .mc4wp-form {
            width: 100%;
        }
        
        .input {
            padding: 1em 2em;
            width: 100%;
            max-width: 300px;
            font-size: 1.2em;
            border: none;
        }
        
        .btn {
            display: block;
            padding: 1em 3em;
            outline: none;
            background: #1abc9c;
            margin: auto;
            margin-top: 1em;
            color: #fff;
            font-size: 1.5em;
            border: none;
            width: fit-content;
            box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
        }
        
        @-webkit-keyframes Gradient {
            0% {
                background-position: 0% 50%
            }
            50% {
                background-position: 100% 50%
            }
            100% {
                background-position: 0% 50%
            }
        }
        
        @-moz-keyframes Gradient {
            0% {
                background-position: 0% 50%
            }
            50% {
                background-position: 100% 50%
            }
            100% {
                background-position: 0% 50%
            }
        }
        
        @keyframes Gradient {
            0% {
                background-position: 0% 50%
            }
            50% {
                background-position: 100% 50%
            }
            100% {
                background-position: 0% 50%
            }
        }
        
        h1,
        h6 {
            font-family: 'Open Sans';
            font-weight: 300;
            text-align: center;
            position: absolute;
            top: 45%;
            right: 0;
            left: 0;
        }
        
        .btn-float:hover {
            cursor: pointer;
            opacity: 1;
        }
        
        .btn-float {
            z-index: 99;
            opacity: 0.6;
            position: absolute;
            width: fit-content;
            padding: 0.5em 1em;
            font-size: 10px;
            background: #fff;
            color: #34495e;
            font-family: "Open Sans", sans-serif;
            -webkit-animation: Mblayang 15s infinite;
            -moz-animation: Mblayang 15s infinite;
            animation: Mblayang 15s linear infinite;
        }
        
        @keyframes Mblayang {
            0% {
                left: 0;
                top: 100%;
            }
            34% {
                left: 50%;
                top: 0%;
            }
            67% {
                left: 75%;
                top: 75%;
            }
            100% {
                left: 110%;
                top: 0%;
            }
        }
    </style>

</head>

<body>
    <div class="header">
        <div class="navbar" style="
                    position: fixed;
                    padding: 2em 4em;
                ">
            <a class="navbar-brand" href="http://localhost/wordpress/" title="Blog Portofolio" style="
                    color: #fff;
                    width: fit-content;
                    height: fit-content;
                "><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 974.1 115.1" style="enable-background:new 0 0 974.1 115.1;height: 26px;margin-top: 7px;width: fit-content;fill: currentColor;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:#1F4385;}
                                    </style>
                                    <g>
                                        <g>
                                            <polygon class="st0" points="50.4,0 50.4,50.4 0,50.4 0,100.9 50.4,100.9 100.8,100.9 100.8,50.4 100.8,0   "></polygon>
                                        </g>
                                        <g>
                                            <path d="M140.3,38.9h25.2c3.7,0,7,0.5,9.9,1.5s5.4,2.5,7.4,4.4s3.6,4.1,4.7,6.8c1.1,2.6,1.6,5.5,1.6,8.7v0.2    c0,3.6-0.6,6.7-1.9,9.4c-1.3,2.7-3.1,5-5.3,6.8c-2.3,1.8-4.9,3.2-7.9,4.1c-3,0.9-6.3,1.4-9.8,1.4h-10.3v18.5h-13.6L140.3,38.9    L140.3,38.9z M164.7,70.1c3.4,0,6.1-0.9,7.9-2.7c1.9-1.8,2.8-4,2.8-6.7v-0.2c0-3.1-1-5.4-3-7s-4.7-2.4-8.1-2.4h-10.5V70    L164.7,70.1L164.7,70.1z"></path>
                                            <path d="M229.3,101.7c-4.8,0-9.2-0.8-13.2-2.5s-7.5-3.9-10.4-6.8c-2.9-2.9-5.2-6.2-6.8-10.1c-1.6-3.9-2.4-8-2.4-12.4v-0.2    c0-4.4,0.8-8.5,2.5-12.4c1.6-3.9,3.9-7.2,6.8-10.2c2.9-2.9,6.4-5.2,10.4-6.9s8.4-2.5,13.2-2.5c4.8,0,9.2,0.8,13.2,2.5    s7.5,3.9,10.4,6.8c2.9,2.9,5.2,6.2,6.8,10.1c1.6,3.9,2.4,8,2.4,12.4v0.2c0,4.4-0.8,8.5-2.5,12.4c-1.6,3.9-3.9,7.2-6.8,10.2    c-2.9,2.9-6.4,5.2-10.4,6.9S234.1,101.7,229.3,101.7z M229.5,89.2c2.7,0,5.2-0.5,7.5-1.5s4.3-2.4,5.9-4.2s2.9-3.8,3.8-6.1    s1.4-4.8,1.4-7.5v-0.2c0-2.6-0.5-5.1-1.4-7.5s-2.2-4.4-3.9-6.2c-1.7-1.8-3.7-3.2-6-4.2s-4.8-1.5-7.5-1.5c-2.8,0-5.3,0.5-7.5,1.5    c-2.3,1-4.2,2.4-5.8,4.1c-1.6,1.8-2.9,3.8-3.8,6.1s-1.4,4.8-1.4,7.5v0.2c0,2.6,0.5,5.2,1.4,7.5c0.9,2.4,2.2,4.4,3.9,6.2    c1.7,1.8,3.6,3.2,5.9,4.2C224.2,88.7,226.7,89.2,229.5,89.2z"></path>
                                            <path d="M274.3,38.9h28.2c7.8,0,13.8,2.1,18,6.3c3.5,3.5,5.3,8.2,5.3,14.1v0.2c0,5-1.2,9.1-3.7,12.2c-2.4,3.1-5.6,5.5-9.6,6.9    l15.1,22.1h-15.9l-13.2-19.8h-0.2h-10.5v19.8h-13.6V38.9H274.3z M301.7,68.9c3.4,0,5.9-0.8,7.7-2.4c1.8-1.6,2.7-3.7,2.7-6.4v-0.2    c0-2.9-0.9-5.1-2.8-6.6s-4.5-2.2-7.9-2.2h-13.5v17.7h13.8V68.9z"></path>
                                            <path d="M352.5,51.4h-18.8V38.9h51.2v12.5h-18.8v49.3h-13.6L352.5,51.4L352.5,51.4z"></path>
                                            <path d="M425.4,101.7c-4.8,0-9.2-0.8-13.2-2.5s-7.5-3.9-10.4-6.8c-2.9-2.9-5.2-6.2-6.8-10.1c-1.6-3.9-2.4-8-2.4-12.4v-0.2    c0-4.4,0.8-8.5,2.5-12.4c1.6-3.9,3.9-7.2,6.8-10.2c2.9-2.9,6.4-5.2,10.4-6.9s8.4-2.5,13.2-2.5c4.8,0,9.2,0.8,13.2,2.5    s7.5,3.9,10.4,6.8c2.9,2.9,5.2,6.2,6.8,10.1c1.6,3.9,2.4,8,2.4,12.4v0.2c0,4.4-0.8,8.5-2.5,12.4c-1.6,3.9-3.9,7.2-6.8,10.2    c-2.9,2.9-6.4,5.2-10.4,6.9C434.5,100.9,430.1,101.7,425.4,101.7z M425.5,89.2c2.7,0,5.2-0.5,7.5-1.5s4.3-2.4,5.9-4.2    s2.9-3.8,3.8-6.1s1.4-4.8,1.4-7.5v-0.2c0-2.6-0.5-5.1-1.4-7.5s-2.2-4.4-3.9-6.2c-1.7-1.8-3.7-3.2-6-4.2s-4.8-1.5-7.5-1.5    c-2.8,0-5.3,0.5-7.5,1.5c-2.3,1-4.2,2.4-5.8,4.1c-1.6,1.8-2.9,3.8-3.8,6.1s-1.4,4.8-1.4,7.5v0.2c0,2.6,0.5,5.2,1.4,7.5    c0.9,2.4,2.2,4.4,3.9,6.2c1.7,1.8,3.6,3.2,5.9,4.2C420.2,88.7,422.8,89.2,425.5,89.2z"></path>
                                            <path d="M470.4,38.9h47.1v12.3H484v13.3h29.5v12.3H484v23.9h-13.6V38.9z"></path>
                                            <path d="M558.3,101.7c-4.8,0-9.2-0.8-13.2-2.5s-7.5-3.9-10.4-6.8c-2.9-2.9-5.2-6.2-6.8-10.1c-1.6-3.9-2.4-8-2.4-12.4v-0.2    c0-4.4,0.8-8.5,2.5-12.4c1.6-3.9,3.9-7.2,6.8-10.2c2.9-2.9,6.4-5.2,10.4-6.9s8.4-2.5,13.2-2.5s9.2,0.8,13.2,2.5s7.5,3.9,10.4,6.8    c2.9,2.9,5.2,6.2,6.8,10.1c1.6,3.9,2.4,8,2.4,12.4v0.2c0,4.4-0.8,8.5-2.5,12.4c-1.6,3.9-3.9,7.2-6.8,10.2    c-2.9,2.9-6.4,5.2-10.4,6.9S563.1,101.7,558.3,101.7z M558.5,89.2c2.7,0,5.2-0.5,7.5-1.5s4.3-2.4,5.9-4.2c1.6-1.8,2.9-3.8,3.8-6.1    c0.9-2.3,1.4-4.8,1.4-7.5v-0.2c0-2.6-0.5-5.1-1.4-7.5s-2.2-4.4-3.9-6.2s-3.7-3.2-6-4.2s-4.8-1.5-7.5-1.5c-2.8,0-5.3,0.5-7.5,1.5    c-2.3,1-4.2,2.4-5.8,4.1c-1.6,1.8-2.9,3.8-3.8,6.1c-0.9,2.3-1.4,4.8-1.4,7.5v0.2c0,2.6,0.5,5.2,1.4,7.5c0.9,2.4,2.2,4.4,3.9,6.2    s3.6,3.2,5.9,4.2C553.2,88.7,555.7,89.2,558.5,89.2z"></path>
                                            <path d="M603.3,38.9h13.6v49.5h30.8v12.3h-44.4L603.3,38.9L603.3,38.9z"></path>
                                            <path d="M658.6,38.9h13.6v61.8h-13.6V38.9z"></path>
                                            <path d="M717.6,101.7c-4.8,0-9.2-0.8-13.2-2.5s-7.5-3.9-10.4-6.8c-2.9-2.9-5.2-6.2-6.8-10.1c-1.6-3.9-2.4-8-2.4-12.4v-0.2    c0-4.4,0.8-8.5,2.5-12.4c1.6-3.9,3.9-7.2,6.8-10.2c2.9-2.9,6.4-5.2,10.4-6.9s8.4-2.5,13.2-2.5s9.2,0.8,13.2,2.5s7.5,3.9,10.4,6.8    c2.9,2.9,5.2,6.2,6.8,10.1c1.6,3.9,2.4,8,2.4,12.4v0.2c0,4.4-0.8,8.5-2.5,12.4c-1.6,3.9-3.9,7.2-6.8,10.2    c-2.9,2.9-6.4,5.2-10.4,6.9S722.4,101.7,717.6,101.7z M717.8,89.2c2.7,0,5.2-0.5,7.5-1.5s4.3-2.4,5.9-4.2c1.6-1.8,2.9-3.8,3.8-6.1    c0.9-2.3,1.4-4.8,1.4-7.5v-0.2c0-2.6-0.5-5.1-1.4-7.5s-2.2-4.4-3.9-6.2s-3.7-3.2-6-4.2s-4.8-1.5-7.5-1.5c-2.8,0-5.3,0.5-7.5,1.5    c-2.3,1-4.2,2.4-5.8,4.1c-1.6,1.8-2.9,3.8-3.8,6.1c-0.9,2.3-1.4,4.8-1.4,7.5v0.2c0,2.6,0.5,5.2,1.4,7.5c0.9,2.4,2.2,4.4,3.9,6.2    s3.6,3.2,5.9,4.2C712.5,88.7,715,89.2,717.8,89.2z"></path>
                                            <path d="M790.9,38.9h25.5c7,0,12.6,2,16.1,5.5c2.6,2.6,4,5.8,4,9.7v0.2c0,8.4-5.5,12.6-10.5,14.7c7.4,1.9,13.9,6.2,13.9,14.7v0.2    c0,10.3-8.8,16.9-22.2,16.9h-26.8V38.9z M831.8,54.5c0-6.8-5.6-11.4-15.4-11.4h-20.8v24.3H816c9.3,0,15.9-4.5,15.9-12.7v-0.2    H831.8z M816.4,71.6h-20.9v24.8h22.4c10.6,0,17.3-4.9,17.3-12.6v-0.2C835.2,76.1,828.6,71.6,816.4,71.6z"></path>
                                            <path d="M854.3,36.2h4.3v64.4h-4.3V36.2z"></path>
                                            <path d="M872.6,78.3v-0.2c0-12.6,9.8-23.6,23.2-23.6c13.3,0,23,10.8,23,23.4v0.2c0,12.6-9.8,23.6-23.2,23.6    C882.3,101.7,872.6,91,872.6,78.3z M914.1,78.3v-0.2c0-10.9-8.1-19.5-18.5-19.5c-10.7,0-18.4,8.7-18.4,19.3v0.2    c0,10.9,8.1,19.5,18.5,19.5C906.5,97.7,914.1,88.9,914.1,78.3z"></path>
                                            <path d="M931.3,108.1l2.6-3.5c5.4,4.1,11.6,6.4,18.2,6.4c10.3,0,17.7-5.9,17.7-17.5V87c-3.9,5.6-9.9,10.4-18.8,10.4    c-10.9,0-21.6-8.3-21.6-21.2V76c0-13,10.8-21.4,21.6-21.4c9,0,15.1,4.8,18.8,10.1v-9h4.3v38.1c0,6.5-2.1,11.7-5.7,15.3    c-3.9,3.9-9.7,6-16.3,6C944.4,115,937.4,112.7,931.3,108.1z M969.9,76.1v-0.2c0-10.4-9.3-17.1-18.6-17.1c-9.4,0-17.4,6.5-17.4,17    V76c0,10.2,8.1,17.2,17.4,17.2C960.7,93.2,969.9,86.3,969.9,76.1z"></path>
                                        </g>
                                    </g>
                                    </svg></a>
        </div>
    </div>
    <div id="particles-js" style="background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
    background-size: 400% 400%;
    -webkit-animation: Gradient 15s ease infinite;
    -moz-animation: Gradient 15s ease infinite;
    animation: Gradient 15s ease infinite; "></div>
    <div id="modal">
        <div id="overlay">
            <div class="text">
                <h2 class="entry-head">We've got something new for you!</h2>
                <h3>And we can't wait to show it to you</h3>
                <div class="subscribe-form">
                    <p>If you cant wait any longer, tell our <i><strong>lazy</strong></i>&nbsp;&nbsp;developers to speed up!
                    </p>
                    <script>
                        (function() {
                            if (!window.mc4wp) {
                                window.mc4wp = {
                                    listeners: [],
                                    forms: {
                                        on: function(event, callback) {
                                            window.mc4wp.listeners.push({
                                                event: event,
                                                callback: callback
                                            });
                                        }
                                    }
                                }
                            }
                        })();
                    </script>
                    <!-- MailChimp for WordPress v4.2.1 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-30" method="post" data-id="30" data-name="">
                        <div class="mc4wp-form-fields">
                            <div class="group">
                                <input type="email" class="input" name="EMAIL" placeholder="Write Your Email Here..." required="">
                                <input type="submit" class="btn" value="Speed Up!">
                            </div>
                        </div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label><input type="hidden" name="_mc4wp_timestamp" value="1527641878">
                        <input type="hidden" name="_mc4wp_form_id" value="30"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                        <div class="mc4wp-response"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var pJS = function(tag_id, params) {

            var canvas_el = document.querySelector('#' + tag_id + ' > .particles-js-canvas-el');

            /* particles.js variables with default values */
            this.pJS = {
                canvas: {
                    el: canvas_el,
                    w: canvas_el.offsetWidth,
                    h: canvas_el.offsetHeight
                },
                particles: {
                    number: {
                        value: 400,
                        density: {
                            enable: true,
                            value_area: 800
                        }
                    },
                    color: {
                        value: '#fff'
                    },
                    shape: {
                        type: 'circle',
                        stroke: {
                            width: 0,
                            color: '#ff0000'
                        },
                        polygon: {
                            nb_sides: 5
                        },
                        image: {
                            src: '',
                            width: 100,
                            height: 100
                        }
                    },
                    opacity: {
                        value: 1,
                        random: false,
                        anim: {
                            enable: false,
                            speed: 2,
                            opacity_min: 0,
                            sync: false
                        }
                    },
                    size: {
                        value: 20,
                        random: false,
                        anim: {
                            enable: false,
                            speed: 20,
                            size_min: 0,
                            sync: false
                        }
                    },
                    line_linked: {
                        enable: true,
                        distance: 100,
                        color: '#fff',
                        opacity: 1,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 2,
                        direction: 'none',
                        random: false,
                        straight: false,
                        out_mode: 'out',
                        bounce: false,
                        attract: {
                            enable: false,
                            rotateX: 3000,
                            rotateY: 3000
                        }
                    },
                    array: []
                },
                interactivity: {
                    detect_on: 'canvas',
                    events: {
                        onhover: {
                            enable: true,
                            mode: 'grab'
                        },
                        onclick: {
                            enable: true,
                            mode: 'push'
                        },
                        resize: true
                    },
                    modes: {
                        grab: {
                            distance: 100,
                            line_linked: {
                                opacity: 1
                            }
                        },
                        bubble: {
                            distance: 200,
                            size: 80,
                            duration: 0.4
                        },
                        repulse: {
                            distance: 200,
                            duration: 0.4
                        },
                        push: {
                            particles_nb: 4
                        },
                        remove: {
                            particles_nb: 2
                        }
                    },
                    mouse: {}
                },
                retina_detect: false,
                fn: {
                    interact: {},
                    modes: {},
                    vendors: {}
                },
                tmp: {}
            };

            var pJS = this.pJS;

            /* params settings */
            if (params) {
                Object.deepExtend(pJS, params);
            }

            pJS.tmp.obj = {
                size_value: pJS.particles.size.value,
                size_anim_speed: pJS.particles.size.anim.speed,
                move_speed: pJS.particles.move.speed,
                line_linked_distance: pJS.particles.line_linked.distance,
                line_linked_width: pJS.particles.line_linked.width,
                mode_grab_distance: pJS.interactivity.modes.grab.distance,
                mode_bubble_distance: pJS.interactivity.modes.bubble.distance,
                mode_bubble_size: pJS.interactivity.modes.bubble.size,
                mode_repulse_distance: pJS.interactivity.modes.repulse.distance
            };


            pJS.fn.retinaInit = function() {

                if (pJS.retina_detect && window.devicePixelRatio > 1) {
                    pJS.canvas.pxratio = window.devicePixelRatio;
                    pJS.tmp.retina = true;
                } else {
                    pJS.canvas.pxratio = 1;
                    pJS.tmp.retina = false;
                }

                pJS.canvas.w = pJS.canvas.el.offsetWidth * pJS.canvas.pxratio;
                pJS.canvas.h = pJS.canvas.el.offsetHeight * pJS.canvas.pxratio;

                pJS.particles.size.value = pJS.tmp.obj.size_value * pJS.canvas.pxratio;
                pJS.particles.size.anim.speed = pJS.tmp.obj.size_anim_speed * pJS.canvas.pxratio;
                pJS.particles.move.speed = pJS.tmp.obj.move_speed * pJS.canvas.pxratio;
                pJS.particles.line_linked.distance = pJS.tmp.obj.line_linked_distance * pJS.canvas.pxratio;
                pJS.interactivity.modes.grab.distance = pJS.tmp.obj.mode_grab_distance * pJS.canvas.pxratio;
                pJS.interactivity.modes.bubble.distance = pJS.tmp.obj.mode_bubble_distance * pJS.canvas.pxratio;
                pJS.particles.line_linked.width = pJS.tmp.obj.line_linked_width * pJS.canvas.pxratio;
                pJS.interactivity.modes.bubble.size = pJS.tmp.obj.mode_bubble_size * pJS.canvas.pxratio;
                pJS.interactivity.modes.repulse.distance = pJS.tmp.obj.mode_repulse_distance * pJS.canvas.pxratio;

            };



            /* ---------- pJS functions - canvas ------------ */

            pJS.fn.canvasInit = function() {
                pJS.canvas.ctx = pJS.canvas.el.getContext('2d');
            };

            pJS.fn.canvasSize = function() {

                pJS.canvas.el.width = pJS.canvas.w;
                pJS.canvas.el.height = pJS.canvas.h;

                if (pJS && pJS.interactivity.events.resize) {

                    window.addEventListener('resize', function() {

                        pJS.canvas.w = pJS.canvas.el.offsetWidth;
                        pJS.canvas.h = pJS.canvas.el.offsetHeight;

                        /* resize canvas */
                        if (pJS.tmp.retina) {
                            pJS.canvas.w *= pJS.canvas.pxratio;
                            pJS.canvas.h *= pJS.canvas.pxratio;
                        }

                        pJS.canvas.el.width = pJS.canvas.w;
                        pJS.canvas.el.height = pJS.canvas.h;

                        /* repaint canvas on anim disabled */
                        if (!pJS.particles.move.enable) {
                            pJS.fn.particlesEmpty();
                            pJS.fn.particlesCreate();
                            pJS.fn.particlesDraw();
                            pJS.fn.vendors.densityAutoParticles();
                        }

                        /* density particles enabled */
                        pJS.fn.vendors.densityAutoParticles();

                    });

                }

            };


            pJS.fn.canvasPaint = function() {
                pJS.canvas.ctx.fillRect(0, 0, pJS.canvas.w, pJS.canvas.h);
            };

            pJS.fn.canvasClear = function() {
                pJS.canvas.ctx.clearRect(0, 0, pJS.canvas.w, pJS.canvas.h);
            };


            /* --------- pJS functions - particles ----------- */

            pJS.fn.particle = function(color, opacity, position) {

                /* size */
                this.radius = (pJS.particles.size.random ? Math.random() : 1) * pJS.particles.size.value;
                if (pJS.particles.size.anim.enable) {
                    this.size_status = false;
                    this.vs = pJS.particles.size.anim.speed / 100;
                    if (!pJS.particles.size.anim.sync) {
                        this.vs = this.vs * Math.random();
                    }
                }

                /* position */
                this.x = position ? position.x : Math.random() * pJS.canvas.w;
                this.y = position ? position.y : Math.random() * pJS.canvas.h;

                /* check position  - into the canvas */
                if (this.x > pJS.canvas.w - this.radius * 2) this.x = this.x - this.radius;
                else if (this.x < this.radius * 2) this.x = this.x + this.radius;
                if (this.y > pJS.canvas.h - this.radius * 2) this.y = this.y - this.radius;
                else if (this.y < this.radius * 2) this.y = this.y + this.radius;

                /* check position - avoid overlap */
                if (pJS.particles.move.bounce) {
                    pJS.fn.vendors.checkOverlap(this, position);
                }

                /* color */
                this.color = {};
                if (typeof(color.value) == 'object') {

                    if (color.value instanceof Array) {
                        var color_selected = color.value[Math.floor(Math.random() * pJS.particles.color.value.length)];
                        this.color.rgb = hexToRgb(color_selected);
                    } else {
                        if (color.value.r != undefined && color.value.g != undefined && color.value.b != undefined) {
                            this.color.rgb = {
                                r: color.value.r,
                                g: color.value.g,
                                b: color.value.b
                            }
                        }
                        if (color.value.h != undefined && color.value.s != undefined && color.value.l != undefined) {
                            this.color.hsl = {
                                h: color.value.h,
                                s: color.value.s,
                                l: color.value.l
                            }
                        }
                    }

                } else if (color.value == 'random') {
                    this.color.rgb = {
                        r: (Math.floor(Math.random() * (255 - 0 + 1)) + 0),
                        g: (Math.floor(Math.random() * (255 - 0 + 1)) + 0),
                        b: (Math.floor(Math.random() * (255 - 0 + 1)) + 0)
                    }
                } else if (typeof(color.value) == 'string') {
                    this.color = color;
                    this.color.rgb = hexToRgb(this.color.value);
                }

                /* opacity */
                this.opacity = (pJS.particles.opacity.random ? Math.random() : 1) * pJS.particles.opacity.value;
                if (pJS.particles.opacity.anim.enable) {
                    this.opacity_status = false;
                    this.vo = pJS.particles.opacity.anim.speed / 100;
                    if (!pJS.particles.opacity.anim.sync) {
                        this.vo = this.vo * Math.random();
                    }
                }

                /* animation - velocity for speed */
                var velbase = {}
                switch (pJS.particles.move.direction) {
                    case 'top':
                        velbase = {
                            x: 0,
                            y: -1
                        };
                        break;
                    case 'top-right':
                        velbase = {
                            x: 0.5,
                            y: -0.5
                        };
                        break;
                    case 'right':
                        velbase = {
                            x: 1,
                            y: -0
                        };
                        break;
                    case 'bottom-right':
                        velbase = {
                            x: 0.5,
                            y: 0.5
                        };
                        break;
                    case 'bottom':
                        velbase = {
                            x: 0,
                            y: 1
                        };
                        break;
                    case 'bottom-left':
                        velbase = {
                            x: -0.5,
                            y: 1
                        };
                        break;
                    case 'left':
                        velbase = {
                            x: -1,
                            y: 0
                        };
                        break;
                    case 'top-left':
                        velbase = {
                            x: -0.5,
                            y: -0.5
                        };
                        break;
                    default:
                        velbase = {
                            x: 0,
                            y: 0
                        };
                        break;
                }

                if (pJS.particles.move.straight) {
                    this.vx = velbase.x;
                    this.vy = velbase.y;
                    if (pJS.particles.move.random) {
                        this.vx = this.vx * (Math.random());
                        this.vy = this.vy * (Math.random());
                    }
                } else {
                    this.vx = velbase.x + Math.random() - 0.5;
                    this.vy = velbase.y + Math.random() - 0.5;
                }

                // var theta = 2.0 * Math.PI * Math.random();
                // this.vx = Math.cos(theta);
                // this.vy = Math.sin(theta);

                this.vx_i = this.vx;
                this.vy_i = this.vy;



                /* if shape is image */

                var shape_type = pJS.particles.shape.type;
                if (typeof(shape_type) == 'object') {
                    if (shape_type instanceof Array) {
                        var shape_selected = shape_type[Math.floor(Math.random() * shape_type.length)];
                        this.shape = shape_selected;
                    }
                } else {
                    this.shape = shape_type;
                }

                if (this.shape == 'image') {
                    var sh = pJS.particles.shape;
                    this.img = {
                        src: sh.image.src,
                        ratio: sh.image.width / sh.image.height
                    }
                    if (!this.img.ratio) this.img.ratio = 1;
                    if (pJS.tmp.img_type == 'svg' && pJS.tmp.source_svg != undefined) {
                        pJS.fn.vendors.createSvgImg(this);
                        if (pJS.tmp.pushing) {
                            this.img.loaded = false;
                        }
                    }
                }



            };


            pJS.fn.particle.prototype.draw = function() {

                var p = this;

                if (p.radius_bubble != undefined) {
                    var radius = p.radius_bubble;
                } else {
                    var radius = p.radius;
                }

                if (p.opacity_bubble != undefined) {
                    var opacity = p.opacity_bubble;
                } else {
                    var opacity = p.opacity;
                }

                if (p.color.rgb) {
                    var color_value = 'rgba(' + p.color.rgb.r + ',' + p.color.rgb.g + ',' + p.color.rgb.b + ',' + opacity + ')';
                } else {
                    var color_value = 'hsla(' + p.color.hsl.h + ',' + p.color.hsl.s + '%,' + p.color.hsl.l + '%,' + opacity + ')';
                }

                pJS.canvas.ctx.fillStyle = color_value;
                pJS.canvas.ctx.beginPath();

                switch (p.shape) {

                    case 'circle':
                        pJS.canvas.ctx.arc(p.x, p.y, radius, 0, Math.PI * 2, false);
                        break;

                    case 'edge':
                        pJS.canvas.ctx.rect(p.x - radius, p.y - radius, radius * 2, radius * 2);
                        break;

                    case 'triangle':
                        pJS.fn.vendors.drawShape(pJS.canvas.ctx, p.x - radius, p.y + radius / 1.66, radius * 2, 3, 2);
                        break;

                    case 'polygon':
                        pJS.fn.vendors.drawShape(
                            pJS.canvas.ctx,
                            p.x - radius / (pJS.particles.shape.polygon.nb_sides / 3.5), // startX
                            p.y - radius / (2.66 / 3.5), // startY
                            radius * 2.66 / (pJS.particles.shape.polygon.nb_sides / 3), // sideLength
                            pJS.particles.shape.polygon.nb_sides, // sideCountNumerator
                            1 // sideCountDenominator
                        );
                        break;

                    case 'star':
                        pJS.fn.vendors.drawShape(
                            pJS.canvas.ctx,
                            p.x - radius * 2 / (pJS.particles.shape.polygon.nb_sides / 4), // startX
                            p.y - radius / (2 * 2.66 / 3.5), // startY
                            radius * 2 * 2.66 / (pJS.particles.shape.polygon.nb_sides / 3), // sideLength
                            pJS.particles.shape.polygon.nb_sides, // sideCountNumerator
                            2 // sideCountDenominator
                        );
                        break;

                    case 'image':

                        function draw() {
                            pJS.canvas.ctx.drawImage(
                                img_obj,
                                p.x - radius,
                                p.y - radius,
                                radius * 2,
                                radius * 2 / p.img.ratio
                            );
                        }

                        if (pJS.tmp.img_type == 'svg') {
                            var img_obj = p.img.obj;
                        } else {
                            var img_obj = pJS.tmp.img_obj;
                        }

                        if (img_obj) {
                            draw();
                        }

                        break;

                }

                pJS.canvas.ctx.closePath();

                if (pJS.particles.shape.stroke.width > 0) {
                    pJS.canvas.ctx.strokeStyle = pJS.particles.shape.stroke.color;
                    pJS.canvas.ctx.lineWidth = pJS.particles.shape.stroke.width;
                    pJS.canvas.ctx.stroke();
                }

                pJS.canvas.ctx.fill();

            };


            pJS.fn.particlesCreate = function() {
                for (var i = 0; i < pJS.particles.number.value; i++) {
                    pJS.particles.array.push(new pJS.fn.particle(pJS.particles.color, pJS.particles.opacity.value));
                }
            };

            pJS.fn.particlesUpdate = function() {

                for (var i = 0; i < pJS.particles.array.length; i++) {

                    /* the particle */
                    var p = pJS.particles.array[i];

                    // var d = ( dx = pJS.interactivity.mouse.click_pos_x - p.x ) * dx + ( dy = pJS.interactivity.mouse.click_pos_y - p.y ) * dy;
                    // var f = -BANG_SIZE / d;
                    // if ( d < BANG_SIZE ) {
                    //     var t = Math.atan2( dy, dx );
                    //     p.vx = f * Math.cos(t);
                    //     p.vy = f * Math.sin(t);
                    // }

                    /* move the particle */
                    if (pJS.particles.move.enable) {
                        var ms = pJS.particles.move.speed / 2;
                        p.x += p.vx * ms;
                        p.y += p.vy * ms;
                    }

                    /* change opacity status */
                    if (pJS.particles.opacity.anim.enable) {
                        if (p.opacity_status == true) {
                            if (p.opacity >= pJS.particles.opacity.value) p.opacity_status = false;
                            p.opacity += p.vo;
                        } else {
                            if (p.opacity <= pJS.particles.opacity.anim.opacity_min) p.opacity_status = true;
                            p.opacity -= p.vo;
                        }
                        if (p.opacity < 0) p.opacity = 0;
                    }

                    /* change size */
                    if (pJS.particles.size.anim.enable) {
                        if (p.size_status == true) {
                            if (p.radius >= pJS.particles.size.value) p.size_status = false;
                            p.radius += p.vs;
                        } else {
                            if (p.radius <= pJS.particles.size.anim.size_min) p.size_status = true;
                            p.radius -= p.vs;
                        }
                        if (p.radius < 0) p.radius = 0;
                    }

                    /* change particle position if it is out of canvas */
                    if (pJS.particles.move.out_mode == 'bounce') {
                        var new_pos = {
                            x_left: p.radius,
                            x_right: pJS.canvas.w,
                            y_top: p.radius,
                            y_bottom: pJS.canvas.h
                        }
                    } else {
                        var new_pos = {
                            x_left: -p.radius,
                            x_right: pJS.canvas.w + p.radius,
                            y_top: -p.radius,
                            y_bottom: pJS.canvas.h + p.radius
                        }
                    }

                    if (p.x - p.radius > pJS.canvas.w) {
                        p.x = new_pos.x_left;
                        p.y = Math.random() * pJS.canvas.h;
                    } else if (p.x + p.radius < 0) {
                        p.x = new_pos.x_right;
                        p.y = Math.random() * pJS.canvas.h;
                    }
                    if (p.y - p.radius > pJS.canvas.h) {
                        p.y = new_pos.y_top;
                        p.x = Math.random() * pJS.canvas.w;
                    } else if (p.y + p.radius < 0) {
                        p.y = new_pos.y_bottom;
                        p.x = Math.random() * pJS.canvas.w;
                    }

                    /* out of canvas modes */
                    switch (pJS.particles.move.out_mode) {
                        case 'bounce':
                            if (p.x + p.radius > pJS.canvas.w) p.vx = -p.vx;
                            else if (p.x - p.radius < 0) p.vx = -p.vx;
                            if (p.y + p.radius > pJS.canvas.h) p.vy = -p.vy;
                            else if (p.y - p.radius < 0) p.vy = -p.vy;
                            break;
                    }

                    /* events */
                    if (isInArray('grab', pJS.interactivity.events.onhover.mode)) {
                        pJS.fn.modes.grabParticle(p);
                    }

                    if (isInArray('bubble', pJS.interactivity.events.onhover.mode) || isInArray('bubble', pJS.interactivity.events.onclick.mode)) {
                        pJS.fn.modes.bubbleParticle(p);
                    }

                    if (isInArray('repulse', pJS.interactivity.events.onhover.mode) || isInArray('repulse', pJS.interactivity.events.onclick.mode)) {
                        pJS.fn.modes.repulseParticle(p);
                    }

                    /* interaction auto between particles */
                    if (pJS.particles.line_linked.enable || pJS.particles.move.attract.enable) {
                        for (var j = i + 1; j < pJS.particles.array.length; j++) {
                            var p2 = pJS.particles.array[j];

                            /* link particles */
                            if (pJS.particles.line_linked.enable) {
                                pJS.fn.interact.linkParticles(p, p2);
                            }

                            /* attract particles */
                            if (pJS.particles.move.attract.enable) {
                                pJS.fn.interact.attractParticles(p, p2);
                            }

                            /* bounce particles */
                            if (pJS.particles.move.bounce) {
                                pJS.fn.interact.bounceParticles(p, p2);
                            }

                        }
                    }


                }

            };

            pJS.fn.particlesDraw = function() {

                /* clear canvas */
                pJS.canvas.ctx.clearRect(0, 0, pJS.canvas.w, pJS.canvas.h);

                /* update each particles param */
                pJS.fn.particlesUpdate();

                /* draw each particle */
                for (var i = 0; i < pJS.particles.array.length; i++) {
                    var p = pJS.particles.array[i];
                    p.draw();
                }

            };

            pJS.fn.particlesEmpty = function() {
                pJS.particles.array = [];
            };

            pJS.fn.particlesRefresh = function() {

                /* init all */
                cancelRequestAnimFrame(pJS.fn.checkAnimFrame);
                cancelRequestAnimFrame(pJS.fn.drawAnimFrame);
                pJS.tmp.source_svg = undefined;
                pJS.tmp.img_obj = undefined;
                pJS.tmp.count_svg = 0;
                pJS.fn.particlesEmpty();
                pJS.fn.canvasClear();

                /* restart */
                pJS.fn.vendors.start();

            };


            /* ---------- pJS functions - particles interaction ------------ */

            pJS.fn.interact.linkParticles = function(p1, p2) {

                var dx = p1.x - p2.x,
                    dy = p1.y - p2.y,
                    dist = Math.sqrt(dx * dx + dy * dy);

                /* draw a line between p1 and p2 if the distance between them is under the config distance */
                if (dist <= pJS.particles.line_linked.distance) {

                    var opacity_line = pJS.particles.line_linked.opacity - (dist / (1 / pJS.particles.line_linked.opacity)) / pJS.particles.line_linked.distance;

                    if (opacity_line > 0) {

                        /* style */
                        var color_line = pJS.particles.line_linked.color_rgb_line;
                        pJS.canvas.ctx.strokeStyle = 'rgba(' + color_line.r + ',' + color_line.g + ',' + color_line.b + ',' + opacity_line + ')';
                        pJS.canvas.ctx.lineWidth = pJS.particles.line_linked.width;
                        //pJS.canvas.ctx.lineCap = 'round'; /* performance issue */

                        /* path */
                        pJS.canvas.ctx.beginPath();
                        pJS.canvas.ctx.moveTo(p1.x, p1.y);
                        pJS.canvas.ctx.lineTo(p2.x, p2.y);
                        pJS.canvas.ctx.stroke();
                        pJS.canvas.ctx.closePath();

                    }

                }

            };


            pJS.fn.interact.attractParticles = function(p1, p2) {

                /* condensed particles */
                var dx = p1.x - p2.x,
                    dy = p1.y - p2.y,
                    dist = Math.sqrt(dx * dx + dy * dy);

                if (dist <= pJS.particles.line_linked.distance) {

                    var ax = dx / (pJS.particles.move.attract.rotateX * 1000),
                        ay = dy / (pJS.particles.move.attract.rotateY * 1000);

                    p1.vx -= ax;
                    p1.vy -= ay;

                    p2.vx += ax;
                    p2.vy += ay;

                }


            }


            pJS.fn.interact.bounceParticles = function(p1, p2) {

                var dx = p1.x - p2.x,
                    dy = p1.y - p2.y,
                    dist = Math.sqrt(dx * dx + dy * dy),
                    dist_p = p1.radius + p2.radius;

                if (dist <= dist_p) {
                    p1.vx = -p1.vx;
                    p1.vy = -p1.vy;

                    p2.vx = -p2.vx;
                    p2.vy = -p2.vy;
                }

            }


            /* ---------- pJS functions - modes events ------------ */

            pJS.fn.modes.pushParticles = function(nb, pos) {

                pJS.tmp.pushing = true;

                for (var i = 0; i < nb; i++) {
                    pJS.particles.array.push(
                        new pJS.fn.particle(
                            pJS.particles.color,
                            pJS.particles.opacity.value, {
                                'x': pos ? pos.pos_x : Math.random() * pJS.canvas.w,
                                'y': pos ? pos.pos_y : Math.random() * pJS.canvas.h
                            }
                        )
                    )
                    if (i == nb - 1) {
                        if (!pJS.particles.move.enable) {
                            pJS.fn.particlesDraw();
                        }
                        pJS.tmp.pushing = false;
                    }
                }

            };


            pJS.fn.modes.removeParticles = function(nb) {

                pJS.particles.array.splice(0, nb);
                if (!pJS.particles.move.enable) {
                    pJS.fn.particlesDraw();
                }

            };


            pJS.fn.modes.bubbleParticle = function(p) {

                /* on hover event */
                if (pJS.interactivity.events.onhover.enable && isInArray('bubble', pJS.interactivity.events.onhover.mode)) {

                    var dx_mouse = p.x - pJS.interactivity.mouse.pos_x,
                        dy_mouse = p.y - pJS.interactivity.mouse.pos_y,
                        dist_mouse = Math.sqrt(dx_mouse * dx_mouse + dy_mouse * dy_mouse),
                        ratio = 1 - dist_mouse / pJS.interactivity.modes.bubble.distance;

                    function init() {
                        p.opacity_bubble = p.opacity;
                        p.radius_bubble = p.radius;
                    }

                    /* mousemove - check ratio */
                    if (dist_mouse <= pJS.interactivity.modes.bubble.distance) {

                        if (ratio >= 0 && pJS.interactivity.status == 'mousemove') {

                            /* size */
                            if (pJS.interactivity.modes.bubble.size != pJS.particles.size.value) {

                                if (pJS.interactivity.modes.bubble.size > pJS.particles.size.value) {
                                    var size = p.radius + (pJS.interactivity.modes.bubble.size * ratio);
                                    if (size >= 0) {
                                        p.radius_bubble = size;
                                    }
                                } else {
                                    var dif = p.radius - pJS.interactivity.modes.bubble.size,
                                        size = p.radius - (dif * ratio);
                                    if (size > 0) {
                                        p.radius_bubble = size;
                                    } else {
                                        p.radius_bubble = 0;
                                    }
                                }

                            }

                            /* opacity */
                            if (pJS.interactivity.modes.bubble.opacity != pJS.particles.opacity.value) {

                                if (pJS.interactivity.modes.bubble.opacity > pJS.particles.opacity.value) {
                                    var opacity = pJS.interactivity.modes.bubble.opacity * ratio;
                                    if (opacity > p.opacity && opacity <= pJS.interactivity.modes.bubble.opacity) {
                                        p.opacity_bubble = opacity;
                                    }
                                } else {
                                    var opacity = p.opacity - (pJS.particles.opacity.value - pJS.interactivity.modes.bubble.opacity) * ratio;
                                    if (opacity < p.opacity && opacity >= pJS.interactivity.modes.bubble.opacity) {
                                        p.opacity_bubble = opacity;
                                    }
                                }

                            }

                        }

                    } else {
                        init();
                    }


                    /* mouseleave */
                    if (pJS.interactivity.status == 'mouseleave') {
                        init();
                    }

                }

                /* on click event */
                else if (pJS.interactivity.events.onclick.enable && isInArray('bubble', pJS.interactivity.events.onclick.mode)) {


                    if (pJS.tmp.bubble_clicking) {
                        var dx_mouse = p.x - pJS.interactivity.mouse.click_pos_x,
                            dy_mouse = p.y - pJS.interactivity.mouse.click_pos_y,
                            dist_mouse = Math.sqrt(dx_mouse * dx_mouse + dy_mouse * dy_mouse),
                            time_spent = (new Date().getTime() - pJS.interactivity.mouse.click_time) / 1000;

                        if (time_spent > pJS.interactivity.modes.bubble.duration) {
                            pJS.tmp.bubble_duration_end = true;
                        }

                        if (time_spent > pJS.interactivity.modes.bubble.duration * 2) {
                            pJS.tmp.bubble_clicking = false;
                            pJS.tmp.bubble_duration_end = false;
                        }
                    }


                    function process(bubble_param, particles_param, p_obj_bubble, p_obj, id) {

                        if (bubble_param != particles_param) {

                            if (!pJS.tmp.bubble_duration_end) {
                                if (dist_mouse <= pJS.interactivity.modes.bubble.distance) {
                                    if (p_obj_bubble != undefined) var obj = p_obj_bubble;
                                    else var obj = p_obj;
                                    if (obj != bubble_param) {
                                        var value = p_obj - (time_spent * (p_obj - bubble_param) / pJS.interactivity.modes.bubble.duration);
                                        if (id == 'size') p.radius_bubble = value;
                                        if (id == 'opacity') p.opacity_bubble = value;
                                    }
                                } else {
                                    if (id == 'size') p.radius_bubble = undefined;
                                    if (id == 'opacity') p.opacity_bubble = undefined;
                                }
                            } else {
                                if (p_obj_bubble != undefined) {
                                    var value_tmp = p_obj - (time_spent * (p_obj - bubble_param) / pJS.interactivity.modes.bubble.duration),
                                        dif = bubble_param - value_tmp;
                                    value = bubble_param + dif;
                                    if (id == 'size') p.radius_bubble = value;
                                    if (id == 'opacity') p.opacity_bubble = value;
                                }
                            }

                        }

                    }

                    if (pJS.tmp.bubble_clicking) {
                        /* size */
                        process(pJS.interactivity.modes.bubble.size, pJS.particles.size.value, p.radius_bubble, p.radius, 'size');
                        /* opacity */
                        process(pJS.interactivity.modes.bubble.opacity, pJS.particles.opacity.value, p.opacity_bubble, p.opacity, 'opacity');
                    }

                }

            };


            pJS.fn.modes.repulseParticle = function(p) {

                if (pJS.interactivity.events.onhover.enable && isInArray('repulse', pJS.interactivity.events.onhover.mode) && pJS.interactivity.status == 'mousemove') {

                    var dx_mouse = p.x - pJS.interactivity.mouse.pos_x,
                        dy_mouse = p.y - pJS.interactivity.mouse.pos_y,
                        dist_mouse = Math.sqrt(dx_mouse * dx_mouse + dy_mouse * dy_mouse);

                    var normVec = {
                            x: dx_mouse / dist_mouse,
                            y: dy_mouse / dist_mouse
                        },
                        repulseRadius = pJS.interactivity.modes.repulse.distance,
                        velocity = 100,
                        repulseFactor = clamp((1 / repulseRadius) * (-1 * Math.pow(dist_mouse / repulseRadius, 2) + 1) * repulseRadius * velocity, 0, 50);

                    var pos = {
                        x: p.x + normVec.x * repulseFactor,
                        y: p.y + normVec.y * repulseFactor
                    }

                    if (pJS.particles.move.out_mode == 'bounce') {
                        if (pos.x - p.radius > 0 && pos.x + p.radius < pJS.canvas.w) p.x = pos.x;
                        if (pos.y - p.radius > 0 && pos.y + p.radius < pJS.canvas.h) p.y = pos.y;
                    } else {
                        p.x = pos.x;
                        p.y = pos.y;
                    }

                } else if (pJS.interactivity.events.onclick.enable && isInArray('repulse', pJS.interactivity.events.onclick.mode)) {

                    if (!pJS.tmp.repulse_finish) {
                        pJS.tmp.repulse_count++;
                        if (pJS.tmp.repulse_count == pJS.particles.array.length) {
                            pJS.tmp.repulse_finish = true;
                        }
                    }

                    if (pJS.tmp.repulse_clicking) {

                        var repulseRadius = Math.pow(pJS.interactivity.modes.repulse.distance / 6, 3);

                        var dx = pJS.interactivity.mouse.click_pos_x - p.x,
                            dy = pJS.interactivity.mouse.click_pos_y - p.y,
                            d = dx * dx + dy * dy;

                        var force = -repulseRadius / d * 1;

                        function process() {

                            var f = Math.atan2(dy, dx);
                            p.vx = force * Math.cos(f);
                            p.vy = force * Math.sin(f);

                            if (pJS.particles.move.out_mode == 'bounce') {
                                var pos = {
                                    x: p.x + p.vx,
                                    y: p.y + p.vy
                                }
                                if (pos.x + p.radius > pJS.canvas.w) p.vx = -p.vx;
                                else if (pos.x - p.radius < 0) p.vx = -p.vx;
                                if (pos.y + p.radius > pJS.canvas.h) p.vy = -p.vy;
                                else if (pos.y - p.radius < 0) p.vy = -p.vy;
                            }

                        }

                        // default
                        if (d <= repulseRadius) {
                            process();
                        }

                        // bang - slow motion mode
                        // if(!pJS.tmp.repulse_finish){
                        //   if(d <= repulseRadius){
                        //     process();
                        //   }
                        // }else{
                        //   process();
                        // }


                    } else {

                        if (pJS.tmp.repulse_clicking == false) {

                            p.vx = p.vx_i;
                            p.vy = p.vy_i;

                        }

                    }

                }

            }


            pJS.fn.modes.grabParticle = function(p) {

                if (pJS.interactivity.events.onhover.enable && pJS.interactivity.status == 'mousemove') {

                    var dx_mouse = p.x - pJS.interactivity.mouse.pos_x,
                        dy_mouse = p.y - pJS.interactivity.mouse.pos_y,
                        dist_mouse = Math.sqrt(dx_mouse * dx_mouse + dy_mouse * dy_mouse);

                    /* draw a line between the cursor and the particle if the distance between them is under the config distance */
                    if (dist_mouse <= pJS.interactivity.modes.grab.distance) {

                        var opacity_line = pJS.interactivity.modes.grab.line_linked.opacity - (dist_mouse / (1 / pJS.interactivity.modes.grab.line_linked.opacity)) / pJS.interactivity.modes.grab.distance;

                        if (opacity_line > 0) {

                            /* style */
                            var color_line = pJS.particles.line_linked.color_rgb_line;
                            pJS.canvas.ctx.strokeStyle = 'rgba(' + color_line.r + ',' + color_line.g + ',' + color_line.b + ',' + opacity_line + ')';
                            pJS.canvas.ctx.lineWidth = pJS.particles.line_linked.width;
                            //pJS.canvas.ctx.lineCap = 'round'; /* performance issue */

                            /* path */
                            pJS.canvas.ctx.beginPath();
                            pJS.canvas.ctx.moveTo(p.x, p.y);
                            pJS.canvas.ctx.lineTo(pJS.interactivity.mouse.pos_x, pJS.interactivity.mouse.pos_y);
                            pJS.canvas.ctx.stroke();
                            pJS.canvas.ctx.closePath();

                        }

                    }

                }

            };



            /* ---------- pJS functions - vendors ------------ */

            pJS.fn.vendors.eventsListeners = function() {

                /* events target element */
                if (pJS.interactivity.detect_on == 'window') {
                    pJS.interactivity.el = window;
                } else {
                    pJS.interactivity.el = pJS.canvas.el;
                }


                /* detect mouse pos - on hover / click event */
                if (pJS.interactivity.events.onhover.enable || pJS.interactivity.events.onclick.enable) {

                    /* el on mousemove */
                    pJS.interactivity.el.addEventListener('mousemove', function(e) {

                        if (pJS.interactivity.el == window) {
                            var pos_x = e.clientX,
                                pos_y = e.clientY;
                        } else {
                            var pos_x = e.offsetX || e.clientX,
                                pos_y = e.offsetY || e.clientY;
                        }

                        pJS.interactivity.mouse.pos_x = pos_x;
                        pJS.interactivity.mouse.pos_y = pos_y;

                        if (pJS.tmp.retina) {
                            pJS.interactivity.mouse.pos_x *= pJS.canvas.pxratio;
                            pJS.interactivity.mouse.pos_y *= pJS.canvas.pxratio;
                        }

                        pJS.interactivity.status = 'mousemove';

                    });

                    /* el on onmouseleave */
                    pJS.interactivity.el.addEventListener('mouseleave', function(e) {

                        pJS.interactivity.mouse.pos_x = null;
                        pJS.interactivity.mouse.pos_y = null;
                        pJS.interactivity.status = 'mouseleave';

                    });

                }

                /* on click event */
                if (pJS.interactivity.events.onclick.enable) {

                    pJS.interactivity.el.addEventListener('click', function() {

                        pJS.interactivity.mouse.click_pos_x = pJS.interactivity.mouse.pos_x;
                        pJS.interactivity.mouse.click_pos_y = pJS.interactivity.mouse.pos_y;
                        pJS.interactivity.mouse.click_time = new Date().getTime();

                        if (pJS.interactivity.events.onclick.enable) {

                            switch (pJS.interactivity.events.onclick.mode) {

                                case 'push':
                                    if (pJS.particles.move.enable) {
                                        pJS.fn.modes.pushParticles(pJS.interactivity.modes.push.particles_nb, pJS.interactivity.mouse);
                                    } else {
                                        if (pJS.interactivity.modes.push.particles_nb == 1) {
                                            pJS.fn.modes.pushParticles(pJS.interactivity.modes.push.particles_nb, pJS.interactivity.mouse);
                                        } else if (pJS.interactivity.modes.push.particles_nb > 1) {
                                            pJS.fn.modes.pushParticles(pJS.interactivity.modes.push.particles_nb);
                                        }
                                    }
                                    break;

                                case 'remove':
                                    pJS.fn.modes.removeParticles(pJS.interactivity.modes.remove.particles_nb);
                                    break;

                                case 'bubble':
                                    pJS.tmp.bubble_clicking = true;
                                    break;

                                case 'repulse':
                                    pJS.tmp.repulse_clicking = true;
                                    pJS.tmp.repulse_count = 0;
                                    pJS.tmp.repulse_finish = false;
                                    setTimeout(function() {
                                        pJS.tmp.repulse_clicking = false;
                                    }, pJS.interactivity.modes.repulse.duration * 1000)
                                    break;

                            }

                        }

                    });

                }


            };

            pJS.fn.vendors.densityAutoParticles = function() {

                if (pJS.particles.number.density.enable) {

                    /* calc area */
                    var area = pJS.canvas.el.width * pJS.canvas.el.height / 1000;
                    if (pJS.tmp.retina) {
                        area = area / (pJS.canvas.pxratio * 2);
                    }

                    /* calc number of particles based on density area */
                    var nb_particles = area * pJS.particles.number.value / pJS.particles.number.density.value_area;

                    /* add or remove X particles */
                    var missing_particles = pJS.particles.array.length - nb_particles;
                    if (missing_particles < 0) pJS.fn.modes.pushParticles(Math.abs(missing_particles));
                    else pJS.fn.modes.removeParticles(missing_particles);

                }

            };


            pJS.fn.vendors.checkOverlap = function(p1, position) {
                for (var i = 0; i < pJS.particles.array.length; i++) {
                    var p2 = pJS.particles.array[i];

                    var dx = p1.x - p2.x,
                        dy = p1.y - p2.y,
                        dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist <= p1.radius + p2.radius) {
                        p1.x = position ? position.x : Math.random() * pJS.canvas.w;
                        p1.y = position ? position.y : Math.random() * pJS.canvas.h;
                        pJS.fn.vendors.checkOverlap(p1);
                    }
                }
            };


            pJS.fn.vendors.createSvgImg = function(p) {

                /* set color to svg element */
                var svgXml = pJS.tmp.source_svg,
                    rgbHex = /#([0-9A-F]{3,6})/gi,
                    coloredSvgXml = svgXml.replace(rgbHex, function(m, r, g, b) {
                        if (p.color.rgb) {
                            var color_value = 'rgba(' + p.color.rgb.r + ',' + p.color.rgb.g + ',' + p.color.rgb.b + ',' + p.opacity + ')';
                        } else {
                            var color_value = 'hsla(' + p.color.hsl.h + ',' + p.color.hsl.s + '%,' + p.color.hsl.l + '%,' + p.opacity + ')';
                        }
                        return color_value;
                    });

                /* prepare to create img with colored svg */
                var svg = new Blob([coloredSvgXml], {
                        type: 'image/svg+xml;charset=utf-8'
                    }),
                    DOMURL = window.URL || window.webkitURL || window,
                    url = DOMURL.createObjectURL(svg);

                /* create particle img obj */
                var img = new Image();
                img.addEventListener('load', function() {
                    p.img.obj = img;
                    p.img.loaded = true;
                    DOMURL.revokeObjectURL(url);
                    pJS.tmp.count_svg++;
                });
                img.src = url;

            };


            pJS.fn.vendors.destroypJS = function() {
                cancelAnimationFrame(pJS.fn.drawAnimFrame);
                canvas_el.remove();
                pJSDom = null;
            };


            pJS.fn.vendors.drawShape = function(c, startX, startY, sideLength, sideCountNumerator, sideCountDenominator) {

                // By Programming Thomas - https://programmingthomas.wordpress.com/2013/04/03/n-sided-shapes/
                var sideCount = sideCountNumerator * sideCountDenominator;
                var decimalSides = sideCountNumerator / sideCountDenominator;
                var interiorAngleDegrees = (180 * (decimalSides - 2)) / decimalSides;
                var interiorAngle = Math.PI - Math.PI * interiorAngleDegrees / 180; // convert to radians
                c.save();
                c.beginPath();
                c.translate(startX, startY);
                c.moveTo(0, 0);
                for (var i = 0; i < sideCount; i++) {
                    c.lineTo(sideLength, 0);
                    c.translate(sideLength, 0);
                    c.rotate(interiorAngle);
                }
                //c.stroke();
                c.fill();
                c.restore();

            };

            pJS.fn.vendors.exportImg = function() {
                window.open(pJS.canvas.el.toDataURL('image/png'), '_blank');
            };


            pJS.fn.vendors.loadImg = function(type) {

                pJS.tmp.img_error = undefined;

                if (pJS.particles.shape.image.src != '') {

                    if (type == 'svg') {

                        var xhr = new XMLHttpRequest();
                        xhr.open('GET', pJS.particles.shape.image.src);
                        xhr.onreadystatechange = function(data) {
                            if (xhr.readyState == 4) {
                                if (xhr.status == 200) {
                                    pJS.tmp.source_svg = data.currentTarget.response;
                                    pJS.fn.vendors.checkBeforeDraw();
                                } else {
                                    console.log('Error pJS - Image not found');
                                    pJS.tmp.img_error = true;
                                }
                            }
                        }
                        xhr.send();

                    } else {

                        var img = new Image();
                        img.addEventListener('load', function() {
                            pJS.tmp.img_obj = img;
                            pJS.fn.vendors.checkBeforeDraw();
                        });
                        img.src = pJS.particles.shape.image.src;

                    }

                } else {
                    console.log('Error pJS - No image.src');
                    pJS.tmp.img_error = true;
                }

            };


            pJS.fn.vendors.draw = function() {

                if (pJS.particles.shape.type == 'image') {

                    if (pJS.tmp.img_type == 'svg') {

                        if (pJS.tmp.count_svg >= pJS.particles.number.value) {
                            pJS.fn.particlesDraw();
                            if (!pJS.particles.move.enable) cancelRequestAnimFrame(pJS.fn.drawAnimFrame);
                            else pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw);
                        } else {
                            //console.log('still loading...');
                            if (!pJS.tmp.img_error) pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw);
                        }

                    } else {

                        if (pJS.tmp.img_obj != undefined) {
                            pJS.fn.particlesDraw();
                            if (!pJS.particles.move.enable) cancelRequestAnimFrame(pJS.fn.drawAnimFrame);
                            else pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw);
                        } else {
                            if (!pJS.tmp.img_error) pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw);
                        }

                    }

                } else {
                    pJS.fn.particlesDraw();
                    if (!pJS.particles.move.enable) cancelRequestAnimFrame(pJS.fn.drawAnimFrame);
                    else pJS.fn.drawAnimFrame = requestAnimFrame(pJS.fn.vendors.draw);
                }

            };


            pJS.fn.vendors.checkBeforeDraw = function() {

                // if shape is image
                if (pJS.particles.shape.type == 'image') {

                    if (pJS.tmp.img_type == 'svg' && pJS.tmp.source_svg == undefined) {
                        pJS.tmp.checkAnimFrame = requestAnimFrame(check);
                    } else {
                        //console.log('images loaded! cancel check');
                        cancelRequestAnimFrame(pJS.tmp.checkAnimFrame);
                        if (!pJS.tmp.img_error) {
                            pJS.fn.vendors.init();
                            pJS.fn.vendors.draw();
                        }

                    }

                } else {
                    pJS.fn.vendors.init();
                    pJS.fn.vendors.draw();
                }

            };


            pJS.fn.vendors.init = function() {

                /* init canvas + particles */
                pJS.fn.retinaInit();
                pJS.fn.canvasInit();
                pJS.fn.canvasSize();
                pJS.fn.canvasPaint();
                pJS.fn.particlesCreate();
                pJS.fn.vendors.densityAutoParticles();

                /* particles.line_linked - convert hex colors to rgb */
                pJS.particles.line_linked.color_rgb_line = hexToRgb(pJS.particles.line_linked.color);

            };


            pJS.fn.vendors.start = function() {

                if (isInArray('image', pJS.particles.shape.type)) {
                    pJS.tmp.img_type = pJS.particles.shape.image.src.substr(pJS.particles.shape.image.src.length - 3);
                    pJS.fn.vendors.loadImg(pJS.tmp.img_type);
                } else {
                    pJS.fn.vendors.checkBeforeDraw();
                }

            };




            /* ---------- pJS - start ------------ */


            pJS.fn.vendors.eventsListeners();

            pJS.fn.vendors.start();



        };

        /* ---------- global functions - vendors ------------ */

        Object.deepExtend = function(destination, source) {
            for (var property in source) {
                if (source[property] && source[property].constructor &&
                    source[property].constructor === Object) {
                    destination[property] = destination[property] || {};
                    arguments.callee(destination[property], source[property]);
                } else {
                    destination[property] = source[property];
                }
            }
            return destination;
        };

        window.requestAnimFrame = (function() {
            return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                window.oRequestAnimationFrame ||
                window.msRequestAnimationFrame ||
                function(callback) {
                    window.setTimeout(callback, 1000 / 60);
                };
        })();

        window.cancelRequestAnimFrame = (function() {
            return window.cancelAnimationFrame ||
                window.webkitCancelRequestAnimationFrame ||
                window.mozCancelRequestAnimationFrame ||
                window.oCancelRequestAnimationFrame ||
                window.msCancelRequestAnimationFrame ||
                clearTimeout
        })();

        function hexToRgb(hex) {
            // By Tim Down - http://stackoverflow.com/a/5624139/3493650
            // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
            var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
            hex = hex.replace(shorthandRegex, function(m, r, g, b) {
                return r + r + g + g + b + b;
            });
            var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
            return result ? {
                r: parseInt(result[1], 16),
                g: parseInt(result[2], 16),
                b: parseInt(result[3], 16)
            } : null;
        };

        function clamp(number, min, max) {
            return Math.min(Math.max(number, min), max);
        };

        function isInArray(value, array) {
            return array.indexOf(value) > -1;
        }


        /* ---------- particles.js functions - start ------------ */

        window.pJSDom = [];

        window.particlesJS = function(tag_id, params) {

            //console.log(params);

            /* no string id? so it's object params, and set the id with default id */
            if (typeof(tag_id) != 'string') {
                params = tag_id;
                tag_id = 'particles-js';
            }

            /* no id? set the id to default id */
            if (!tag_id) {
                tag_id = 'particles-js';
            }

            /* pJS elements */
            var pJS_tag = document.getElementById(tag_id),
                pJS_canvas_class = 'particles-js-canvas-el',
                exist_canvas = pJS_tag.getElementsByClassName(pJS_canvas_class);

            /* remove canvas if exists into the pJS target tag */
            if (exist_canvas.length) {
                while (exist_canvas.length > 0) {
                    pJS_tag.removeChild(exist_canvas[0]);
                }
            }

            /* create canvas element */
            var canvas_el = document.createElement('canvas');
            canvas_el.className = pJS_canvas_class;

            /* set size canvas */
            canvas_el.style.width = "100%";
            canvas_el.style.height = "100%";

            /* append canvas */
            var canvas = document.getElementById(tag_id).appendChild(canvas_el);

            /* launch particle.js */
            if (canvas != null) {
                pJSDom.push(new pJS(tag_id, params));
            }

        };

        window.particlesJS.load = function(tag_id, path_config_json, callback) {

            /* load json config */
            var xhr = new XMLHttpRequest();
            xhr.open('GET', path_config_json);
            xhr.onreadystatechange = function(data) {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        var params = JSON.parse(data.currentTarget.response);
                        window.particlesJS(tag_id, params);
                        if (callback) callback();
                    } else {
                        console.log('Error pJS - XMLHttpRequest status: ' + xhr.status);
                        console.log('Error pJS - File config not found');
                    }
                }
            };
            xhr.send();

        };
    </script>
    <script>
        particlesJS('particles-js',


            {
                "particles": {
                    "number": {
                        "value": 150,
                        "density": {
                            "enable": true,
                            "value_area": 600
                        }
                    },
                    "color": {
                        "value": "#ecf0f1"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 1,
                            "color": "#ecf0f1"
                        },
                        "polygon": {
                            "nb_sides": 20
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": true,
                        "anim": {
                            "enable": true,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": true
                        }
                    },
                    "size": {
                        "value": 1,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ecf0f1",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "top-right",
                        "random": true,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": true,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "window",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "bubble"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 200,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 150,
                            "size": 10,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 75,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 2
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            }

        );
    </script>
</body>

</html>