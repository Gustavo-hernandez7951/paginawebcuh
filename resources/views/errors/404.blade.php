<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página no encontrada</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans">
    <style>
        /* Variables */
        :root {
            --background_color: #353b48;
            --font: "Fira Sans", sans-serif;
            --white: #f5f6fa;
            --black: #0C0E10;
            --gray: #202425;
            --blue: #446182;
        }

        /* Mixins */
        @media (max-width: 770px) {
            .smallscreens {
                display: block;
            }
        }

        /* Extends */
        .Ycenter {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        /* Main Layout Styles */
        * {
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font);
            color: var(--white);
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(var(--black), var(--blue));
        }

        .ground {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 25vh;
            background: var(--black);
        }

        .smallscreens .ground {
            height: 0vh;
        }

        .container {
            position: relative;
            margin: 0 auto;
            width: 85%;
            height: 100vh;
            padding-bottom: 25vh;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .smallscreens .container {
            flex-direction: column;
            padding-bottom: 0vh;
        }

        .left-section, .right-section {
            position: relative;
        }

        /* Left Section Styles */
        .left-section {
            width: 40%;
        }

        .smallscreens .left-section {
            width: 100%;
            height: 40%;
            position: absolute;
            top: 0;
        }

        .smallscreens .inner-content {
            position: relative;
            padding: 1rem 0;
        }

        .heading {
            text-align: center;
            font-size: 9em;
            line-height: 1.3em;
            margin: 2rem 0 0.5rem 0;
            padding: 0;
            text-shadow: 0 0 1rem #fefefe;
        }

        .smallscreens .heading {
            font-size: 7em;
            line-height: 1.15;
            margin: 0;
        }

        .subheading {
            text-align: center;
            max-width: 480px;
            font-size: 1.5em;
            line-height: 1.15em;
            padding: 0 1rem;
            margin: 0 auto;
        }

        .smallscreens .subheading {
            font-size: 1.3em;
            line-height: 1.15;
            max-width: 100%;
        }

        /* Right Section Styles */
        .right-section {
            width: 50%;
        }

        .smallscreens .right-section {
            width: 100%;
            height: 60%;
            position: absolute;
            bottom: 0;
        }

        .svgimg {
            position: absolute;
            bottom: 0;
            padding-top: 10vh;
            padding-left: 1vh;
            max-width: 100%;
            max-height: 100%;
        }

        .smallscreens .svgimg {
            padding: 0;
        }

        .bench-legs {
            fill: var(--black);
        }

        .top-bench, .bottom-bench {
            stroke: var(--black);
            stroke-width: 1px;
            fill: #5B3E2B;
        }

        .bottom-bench path:nth-child(1) {
            fill: darken(#5B3E2B, 7%);
        }

        .lamp-details {
            fill: var(--gray);
        }

        .lamp-accent {
            fill: lighten(var(--gray), 5%);
        }

        .lamp-bottom {
            fill: linear-gradient(var(--gray), var(--black));
        }

        .lamp-light {
            fill: #EFEFEF;
        }

        @keyframes glow {
            0% {
                text-shadow: 0 0 1rem #fefefe;
            }
            50% {
                text-shadow: 0 0 1.85rem #ededed;
            }
            100% {
                text-shadow: 0 0 1rem #fefefe;
            }
        }

        .error {
            text-align: center;
        }

        .error h1 {
            font-size: 6rem;
            margin: 0;
            color: #e74c3c;
            animation: fadeIn 1s ease-in-out;
        }

        .error h2 {
            font-size: 2rem;
            margin: 0.5rem 0;
            color: #555;
        }

        .error p {
            font-size: 1.2rem;
            color: #777;
            margin-bottom: 2rem;
        }

        .fcc-btn {
            display: inline-block;
            padding: 15px 30px;
            font-size: 1rem;
            color: #fff;
            background-color: #3498db;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .fcc-btn:hover {
            background-color: #2980b9;
            transform: translateY(-5px);
        }

        .stack-container {
            position: relative;
            width: 300px;
            height: 200px;
            margin-top: 20px;
        }

        .card-container {
            position: absolute;
            width: 100%;
            height: 100%;
            animation: float 3s infinite ease-in-out alternate;
        }

        @keyframes float {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-20px);
            }
        }

        .perspec {
            perspective: 1000px;
        }

        .card {
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 1s ease, opacity 2s;
        }

        .writing {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }

        .topbar {
            display: flex;
            height: 10px;
            background-color: #ccc;
        }

        .topbar div {
            width: 15px;
            height: 100%;
        }

        .red {
            background-color: #e74c3c;
        }

        .yellow {
            background-color: #f1c40f;
        }

        .green {
            background-color: #2ecc71;
        }

        .code ul {
            list-style: none;
            padding: 0;
        }

        .code li {
            height: 15px;
            background-color: #333;
            margin: 2px 0;
            border-radius: 3px;
        }

        .explode {
            animation: explode 1s ease-out forwards;
        }

        @keyframes explode {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(0);
                opacity: 0;
            }
        }

        .pokeup:hover {
            transform: translateY(-20px);
            transition: transform 0.3s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="ground"></div>
    </div>
    <div class="container">
        <div class="left-section">
            <div class="inner-content">
                <h1 class="heading">404</h1>
                <p class="subheading">La página solicitada no se encontró en el servidor :(</p>
                <a class="fcc-btn" href="/">Regresar a CUH </a>
            </div>
        </div>
        <div class="right-section">
            <svg class="svgimg" xmlns="http://www.w3.org/2000/svg" viewBox="51.5 -15.288 385 505.565">
                <g class="bench-legs">
                    <path d="M202.778,391.666h11.111v98.611h-11.111V391.666z M370.833,390.277h11.111v100h-11.111V390.277z M183.333,456.944h11.111
                    v33.333h-11.111V456.944z M393.056,456.944h11.111v33.333h-11.111V456.944z" />
                </g>
                <g class="top-bench">
                    <path d="M396.527,397.917c0,1.534-1.243,2.777-2.777,2.777H190.972c-1.534,0-2.778-1.243-2.778-2.777v-8.333
                    c0-1.535,1.244-2.778,2.778-2.778H393.75c1.534,0,2.777,1.243,2.777,2.778V397.917z M400.694,414.583
                    c0,1.534-1.243,2.778-2.777,2.778H188.194c-1.534,0-2.778-1.244-2.778-2.778v-8.333c0-1.534,1.244-2.777,2.778-2.777h209.723
                    c1.534,0,2.777,1.243,2.777,2.777V414.583z M403.473,431.25c0,1.534-1.244,2.777-2.778,2.777H184.028
                    c-1.534,0-2.778-1.243-2.778-2.777v-8.333c0-1.534,1.244-2.778,2.778-2.778h216.667c1.534,0,2.778,1.244,2.778,2.778V431.25z"
                    />
                </g>
                <g class="bottom-bench">
                    <path d="M417.361,459.027c0,0.769-1.244,1.39-2.778,1.39H170.139c-1.533,0-2.777-0.621-2.777-1.39v-4.86
                    c0-0.769,1.244-0.694,2.777-0.694h244.444c1.534,0,2.778-0.074,2.778,0.694V459.027z" />
                    <path d="M185.417,443.75H400c0,0,18.143,9.721,17.361,10.417l-250-0.696C167.303,451.65,185.417,443.75,185.417,443.75z" />
                </g>
                <g id="lamp">
                    <path class="lamp-details" d="M125.694,421.997c0,1.257-0.73,3.697-1.633,3.697H113.44c-0.903,0-1.633-2.44-1.633-3.697V84.917
                    c0-1.257,0.73-2.278,1.633-2.278h10.621c0.903,0,1.633,1.02,1.633,2.278V421.997z"
                    />
                    <path class="lamp-accent" d="M128.472,93.75c0,1.534-1.244,2.778-2.778,2.778h-13.889c-1.534,0-2.778-1.244-2.778-2.778V79.861
                    c0-1.534,1.244-2.778,2.778-2.778h13.889c1.534,0,2.778,1.244,2.778,2.778V93.75z" />

                    <circle class="lamp-light" cx="119.676" cy="44.22" r="40.51" />
                    <path class="lamp-details" d="M149.306,71.528c0,3.242-13.37,13.889-29.861,13.889S89.583,75.232,89.583,71.528c0-4.166,13.369-13.889,29.861-13.889
                    S149.306,67.362,149.306,71.528z"/>
                    <radialGradient class="light-gradient" id="SVGID_1_" cx="119.676" cy="44.22" r="65" gradientUnits="userSpaceOnUse">
                        <stop  offset="0%" style="stop-color:#FFFFFF; stop-opacity: 1"/>
                        <stop  offset="50%" style="stop-color:#EDEDED; stop-opacity: 0.5">
                            <animate attributeName="stop-opacity" values="0.0; 0.5; 0.0" dur="5000ms" repeatCount="indefinite"></animate>
                        </stop>
                        <stop  offset="100%" style="stop-color:#EDEDED; stop-opacity: 0"/>
                    </radialGradient>
                    <circle class="lamp-light__glow" fill="url(#SVGID_1_)" cx="119.676" cy="44.22" r="65"/>
                    <path class="lamp-bottom" d="M135.417,487.781c0,1.378-1.244,2.496-2.778,2.496H106.25c-1.534,0-2.778-1.118-2.778-2.496v-74.869
                    c0-1.378,1.244-2.495,2.778-2.495h26.389c1.534,0,2.778,1.117,2.778,2.495V487.781z" />
                </g>
            </svg>
        </div>
        <div class="stack-container">
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 125px; --scaledist: .75; --vertdist: -25px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 100px; --scaledist: .8; --vertdist: -20px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist:75px; --scaledist: .85; --vertdist: -15px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 50px; --scaledist: .9; --vertdist: -10px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 25px; --scaledist: .95; --vertdist: -5px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 0px; --scaledist: 1; --vertdist: 0px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const stackContainer = document.querySelector('.stack-container');
        const cardNodes = document.querySelectorAll('.card-container');
        const perspecNodes = document.querySelectorAll('.perspec');
        const perspec = document.querySelector('.perspec');
        const card = document.querySelector('.card');

        let counter = stackContainer.children.length;

        function randomIntFromInterval(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        }

        card.addEventListener('animationend', function () {
            perspecNodes.forEach(function (elem) {
                elem.classList.add('explode');
            });
        });

        perspec.addEventListener('animationend', function (e) {
            if (e.animationName === 'explode') {
                cardNodes.forEach(function (elem) {
                    elem.classList.add('pokeup');

                    elem.addEventListener('click', function () {
                        let updown = [800, -800];
                        let randomY = updown[Math.floor(Math.random() * updown.length)];
                        let randomX = Math.floor(Math.random() * 1000) - 1000;
                        elem.style.transform = `translate(${randomX}px, ${randomY}px) rotate(-540deg)`;
                        elem.style.transition = "transform 1s ease, opacity 2s";
                        elem.style.opacity = "0";
                        counter--;
                        if (counter === 0) {
                            stackContainer.style.width = "0";
                            stackContainer.style.height = "0";
                        }
                    });

                    let numLines = randomIntFromInterval(5, 10);

                    for (let index = 0; index < numLines; index++) {
                        let lineLength = randomIntFromInterval(25, 97);
                        var node = document.createElement("li");
                        node.classList.add('node-' + index);
                        elem.querySelector('.code ul').appendChild(node).setAttribute('style', '--linelength: ' + lineLength + '%;');

                        if (index == 0) {
                            elem.querySelector('.code ul .node-' + index).classList.add('writeLine');
                        } else {
                            elem.querySelector('.code ul .node-' + (index - 1)).addEventListener('animationend', function (e) {
                                elem.querySelector('.code ul .node-' + index).classList.add('writeLine');
                            });
                        }
                    }
                });
            }
        });
    </script>
</body>
</html>
