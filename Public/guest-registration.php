<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">
    <title>Gastspieler-Anmeldung</title>
    <style>
        /* Video Explanation - https://youtu.be/3AK3vspZvvM */
        body {
            background-color: #34495e;
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
            font-size: 16px;

        }

        *, *::before, *::after {
            box-sizing: border-box;
        }

        .custom-field {
            position: relative;
            font-size: 14px;
            padding-top: 20px;
            margin-bottom: 5px;

        }

        .custom-field input {
            border: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: #f2f2f2;
            padding: 12px;
            border-radius: 3px;
            width: 250px;
            height: 50px;
            outline: none;
            font-size: 14px;
            color: #aaa;
        }


        .custom-field .placeholder {
            position: absolute;
            left: 2px;
            top: calc(50% + 10px);
            transform: translateY(-50%);
            color: #aaa;
            transition:
                    top 0.3s ease,
                    color 0.3s ease,
                    font-size 0.3s ease;
        }

        .custom-field input.dirty + .placeholder,
        .custom-field input:valid + .placeholder,
        .custom-field input:focus + .placeholder {
            top: 5px;
            font-size: 10px;
            color: #ddd;
        }

        /* ONE */

        .custom-field.one input {
            background: none;
            border: 2px solid #ddd;
            transition: border-color 0.3s ease;
        }

        .custom-field.one input + .placeholder {
            left: 8px;
            padding: 0 5px;
        }

        .custom-field.one input.dirty,
        .custom-field.one input:valid,
        .custom-field.one input:focus {
            border-color: #222;
            transition-delay: 0.1s
        }

        .custom-field.one input.dirty + .placeholder,
        .custom-field.one input:valid + .placeholder,
        .custom-field.one input:focus + .placeholder {
            top: 10px;
            font-size: 10px;
            color: #000000;
            background: transparent;
        }
        /* DATE */
        .custom-field-data input {
            border: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: #f2f2f2;
            padding: 12px;
            border-radius: 3px;
            width: 180px;
            height: 50px;
            outline: none;
            font-size: 14px;
        }
        .custom-field-data.one input {
            background: none;
            border: 2px solid #ddd;
            transition: border-color 0.3s ease;
        }

        .custom-field-data.one input + .placeholder {
            left: 8px;
            padding: 0 5px;
        }

        .custom-field-data.one input.dirty,
        .custom-field-data.one input:valid,
        .custom-field-data.one input:focus {
            border-color: #222;
            transition-delay: 0.1s
        }

        .custom-field-data.one input.dirty + .placeholder,
        .custom-field-data.one input:valid + .placeholder,
        .custom-field-data.one input:focus + .placeholder {
            top: 10px;
            font-size: 10px;
            color: #00000;
            background: transparent;
        }
        input{
            background-color: #34495e;
            border-radius: 12px !important;
        }
        .box{
            border-radius: 25px;
            border: 2px;
            border-color: white;
            background: #191919;
        }


        #email{
            background-color: transparent;
        }
        #date{
            color: white;
        }
        input[type=”date”]:before {
            color: white;
            background: none;
            display: block;
            font-family: ‘FontAwesome’;
            content: ‘\f073’;
            /* This is the calendar icon in FontAwesome */
            width: 15px;
            height: 20px;
            position: absolute;
            top: 12px;
            right: 6px;
            color: #999;
        }
        div{
            margin: 10px;

        }
        label{
            margin-left: 5px;
        }
        .head{
            text-align: center;
            color: lightblue;
            padding-bottom: 10px;
        }
        .container{
            padding-bottom: 20px;
            padding-right: 5px ;
        }
        .btn{
            background-color: transparent;
            border: none;
            color: #ffffff;
            padding: 12px 16px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn:hover{
            background-color: green;
        }
        .button {
            background: #2B2D2F;
            height: 80px;
            width: 200px;
            text-align: center;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 0;
            right: 0;
            margin: 0 auto;
            cursor: pointer;
            border-radius: 4px;
        }

        .text {
            font: bold 1.25rem/1 poppins;
            color: #71DFBE;
            position: absolute;
            top: 50%;
            transform: translateY(-52%);
            left: 0;
            right: 0;
        }

        .progress-bar {
            position: absolute;
            height: 10px;
            width: 0;
            right: 0;
            top: 50%;
            left: 50%;
            border-radius: 200px;
            transform: translateY(-50%) translateX(-50%);
            background: lighten(#2B2D2F, 15%);
        }

        svg {
            width: 30px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%) translateX(-50%);
            left: 50%;
            right: 0;
        }

        .check {
            fill: none;
            stroke: #FFFFFF;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
        }
    </style>
</head>
<body>
    <div class="box container">
        <h1 class="head">Gastspieler-Anmeldung</h1>
        <div>
            <label  class="custom-field one">
                <input  type="text" required/>
                <span class="placeholder">Name</span>
            </label>
            <label class="custom-field one">
                <input type="text" id="email" required/>
                <span class="placeholder">Email</span>
            </label>
            <label class="custom-field-data one">
                <input type="date" id="date" required>
            </label>
        </div>
        <div>
         <label class="custom-field one">
             <input type="text" required/>
             <span class="placeholder">Name</span>
         </label>
        <label class="custom-field one">
            <input type="text" id="email" required/>
            <span class="placeholder">Email</span>
        </label>
        </div>
        <div>
            <label class="custom-field one">
                <input type="text" required/>
                <span class="placeholder">Name</span>
            </label>
            <label class="custom-field one">
                <input type="text" id="email" required/>
                <span class="placeholder">Email</span>
            </label>
        </div>
        <div>
            <label class="custom-field one">
                <input type="text" required/>
                <span class="placeholder">Name</span>
            </label>
            <label class="custom-field one">
                <input type="text" id="email" required/>
                <span class="placeholder">Email</span>
            </label>
        </div>
        <div>
            <button class="bubbly-button"><i class="fa fa-hook">Speichern</i></button>
        </div>
    </div>
    <div>
        <div class="button">
            <div class="text">Submit</div>
        </div>
        <div class="progress-bar"></div>
        <svg x="0px" y="0px"
            viewBox="0 0 25 30" style="enable-background:new 0 0 25 30;">
            <path class="check" class="st0" d="M2,19.2C5.9,23.6,9.4,28,9.4,28L23,2"/>
        </svg>
    </div>
    <script>
        var basicTimeline = anime.timeline({
            autoplay: false
        });

        var pathEls = $(".check");
        for (var i = 0; i < pathEls.length; i++) {
            var pathEl = pathEls[i];
            var offset = anime.setDashoffset(pathEl);
            pathEl.setAttribute("stroke-dashoffset", offset);
        }

        basicTimeline
            .add({
                targets: ".text",
                duration: 1,
                opacity: "0"
            })
            .add({
                targets: ".button",
                duration: 1300,
                height: 10,
                width: 300,
                backgroundColor: "#2B2D2F",
                border: "0",
                borderRadius: 100
            })
            .add({
                targets: ".progress-bar",
                duration: 2000,
                width: 300,
                easing: "linear"
            })
            .add({
                targets: ".button",
                width: 0,
                duration: 1
            })
            .add({
                targets: ".progress-bar",
                width: 80,
                height: 80,
                delay: 500,
                duration: 750,
                borderRadius: 80,
                backgroundColor: "#71DFBE"
            })
            .add({
                targets: pathEl,
                strokeDashoffset: [offset, 0],
                duration: 200,
                easing: "easeInOutSine"
            });

        $(".button").click(function() {
            basicTimeline.play();
        });

        $(".text").click(function() {
            basicTimeline.play();
        });
    </script>
</body>
</html>