<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">
    <title>Gastspieler-Anmeldung</title>

    <script src="main.js"></script>
    <style>
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

        *,
        *::before,
        *::after {
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
            color: #fff;
        }


        .custom-field .placeholder {
            position: absolute;
            left: 2px;
            top: calc(50% + 10px);
            transform: translateY(-50%);
            color: #fff;
            transition:
                top 0.3s ease,
                color 0.3s ease,
                font-size 0.3s ease;
        }

        .custom-field input.dirty+.placeholder,
        .custom-field input:valid+.placeholder,
        .custom-field input:focus+.placeholder {
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

        .custom-field.one input+.placeholder {
            left: 8px;
            padding: 0 5px;
        }

        .custom-field.one input.dirty,
        .custom-field.one input:valid,
        .custom-field.one input:focus {
            border-color: #fff;
            transition-delay: 0.1s
        }

        .custom-field.one input.dirty+.placeholder,
        .custom-field.one input:valid+.placeholder,
        .custom-field.one input:focus+.placeholder {
            top: 10px;
            font-size: 10px;
            color: #fff;
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
            border-color: #fff;
            width: 235px;
            height: 50px;
            outline: none;
            font-size: 14px;
        }

        .custom-field-data.one input {
            background: none;
            border: 2px solid #ddd;
            transition: border-color 0.3s ease;
        }

        .custom-field-data.one input+.placeholder {
            left: 8px;
            padding: 0 5px;
        }

        .custom-field-data.one input.dirty,
        .custom-field-data.one input:valid,
        .custom-field-data.one input:focus {
            border-color: #fff;
            transition-delay: 0.1s
        }

        .custom-field-data.one input.dirty+.placeholder,
        .custom-field-data.one input:valid+.placeholder,
        .custom-field-data.one input:focus+.placeholder {
            top: 10px;
            font-size: 10px;
            color: #000000;
            background: transparent;
        }

        input[type="date"]:before {
            content: attr(placeholder) !important;
            color: #fff;
            margin-right: 0.5em;
        }

        input[type="date"]:focus:before,
        input[type="date"]:valid:before {
            content: "";
        }

        input {
            background-color: #34495e;
            border-radius: 12px !important;
        }

        .box {
            border-radius: 25px;
            border: 2px;
            border-color: white;
            background: #191919;
        }


        #email {
            background-color: transparent;
        }

        #date {
            color: white;
        }

        input[type=”date”]:before {
            color: white;
            background: none;
            display: block;
            font-family: Verdana;
            content: ‘\f073’;
            width: 15px;
            height: 20px;
            position: absolute;
            top: 12px;
            right: 6px;
            color: #999;
        }

        div {
            margin: 10px;

        }

        label {
            margin-left: 5px;
        }

        .head {
            text-align: center;
            color: lightblue;
            padding-bottom: 10px;
        }

        .container {
            padding-bottom: 20px;
            padding-right: 5px;
        }

        .btn {
            background-color: transparent;
            border: none;
            color: #ffffff;
            padding: 12px 16px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: green;
        }

        /*Button*/
        @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro:200,900');

        :root {
            --text-color: hsla(210, 50%, 85%, 1);
            --shadow-color: hsla(210, 40%, 52%, .4);
            --btn-color: hsl(210, 80%, 42%);
            --bg-color: #141218;
        }

        button {
            position: relative;
            padding: 10px 20px;
            border: none;
            background: none;
            cursor: pointer;

            font-family: "Source Code Pro";
            font-weight: 900;
            text-transform: uppercase;
            font-size: 30px;
            color: var(--text-color);

            background-color: var(--btn-color);
            box-shadow: var(--shadow-color) 2px 2px 12px;
            border-radius: 4px;
            z-index: 0;
            overflow: hidden;
        }

        button:focus {
            outline-color: transparent;
            box-shadow: MediumSeaGreen 2px 2px 12px;
        }

        .right::after,
        button::after {
            content: var(--content);
            display: block;
            position: absolute;
            white-space: nowrap;
            padding: 40px 40px;
            pointer-events: none;
        }

        button::after {
            top: -30px;
            left: -20px;
        }

        .right,
        .left {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
        }

        .right {
            left: 66%;
        }

        .left {
            right: 66%;
        }

        .right::after {
            top: -30px;
            left: calc(-66% - 20px);

            background-color: var(--bg-color);
            color: transparent;
            transition: transform .4s ease-out;
            transform: translate(0, -90%) rotate(0deg)
        }

        button:hover .right::after {
            transform: translate(0, -47%) rotate(0deg)
        }

        button .right:hover::after {
            transform: translate(0, -50%) rotate(-7deg)
        }

        button .left:hover~.right::after {
            transform: translate(0, -50%) rotate(7deg)
        }

        /* bubbles */
        button::before {
            content: '';
            pointer-events: none;
            opacity: .6;
            background:
                radial-gradient(circle at 20% 35%, transparent 0, transparent 2px, var(--text-color) 3px, var(--text-color) 4px, transparent 4px),
                radial-gradient(circle at 75% 44%, transparent 0, transparent 2px, var(--text-color) 3px, var(--text-color) 4px, transparent 4px),
                radial-gradient(circle at 46% 52%, transparent 0, transparent 4px, var(--text-color) 5px, var(--text-color) 6px, transparent 6px);

            width: 100%;
            height: 300%;
            top: 0;
            left: 0;
            position: absolute;
            animation: bubbles 5s linear infinite both;
        }

        @keyframes bubbles {
            from {
                transform: translate();
            }

            to {
                transform: translate(0, -66.666%);
            }
        }
        
    </style>
</head>

<body>
    <div class="box container">
        <h1 class="head">Gastspieler-Anmeldung</h1>
        <div>
            <label  class="custom-field one">
                <input oninput="changeBorder()" id="Border" type="text" required />
                <span class="placeholder">Name Mitglied</span>
            </label>
            <label id="Name" class="custom-field one">
                <input type="text" id="email" required />
                <span class="placeholder">Email</span>
            </label>
            <label class="custom-field-data one">
                <input type="date" id="date" placeholder="Spieltag:" required>
            </label>
        </div>
        <div>
            <label class="custom-field one">
                <input type="text" required />
                <span class="placeholder">Name Gastspieler</span>
            </label>
            <label class="custom-field one">
                <input type="text" id="email" required />
                <span class="placeholder">Email</span>
            </label>
        </div>
        <div>
            <button onclick="myFunction(); changeBorder()" id="test" style="--content: 'Speichern';"
                >

                <div class="left"></div>
                <span onclick="changeText()" id="changeText">Speichern</span>
                <div class="right"></div>

            </button>
        </div>




</body>

</html>