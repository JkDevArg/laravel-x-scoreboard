<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SCOREBOARD - {{ $scoreboard->teamA }} VS {{ $scoreboard->teamB }}</title>
    @livewireStyles
</head>
<style>
    @font-face {
        font-family: 'Digital Display';
        src: url('https://praxeds.github.io/scrimba-basketball-scoreboard/Assets/Digital-Display.woff2') format('woff2'),
        url('https://praxeds.github.io/basketball-scoreboard/Assets/Digital-Display.woff2') format('woff');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }
    :root {
        --background-color: rgb(5,5,5);
        --background-color1: rgb(6,42,139);
        --text-color1: rgb(255,217,0);
        --text-color2: rgb(255,255,255);
    }
    body {
        margin: 0;
        box-sizing: border-box;
        background-color: var(--background-color);
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .container {
        position: absolute;
        top: 44%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 800px;
        height: 600px;
    }
    .text {
        text-transform: uppercase;
        color: var(--text-color2);
    }
    h1 {
        margin-bottom: 1em;
    }
    .scoreboard {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        height: 100%;
        border-radius: 8px;
        background-color: var(--background-color1);
        border: 7px solid white;
        outline: 10px solid var(--background-color1);
    }
    .team-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    h2 {
        font-size: 5em;
        margin-top: 0;
        margin-bottom: 10px;
    }
    .one {
        position: relative;
        width: 18em;
        height: 10em;
        margin-bottom: 30px;
        background-color: #0c0c0c;
    }
    .pts-shadow {
        font-family: "Digital Display", monospace;
        font-size: 11em;
        text-align: center;
        position: absolute;
        z-index: 1;
        top: 50%;
        left: 52.5%;
        transform: translate(-50%, -50%);
        margin: 0;
        opacity: 35%;
        color: black;
    }
    .pts {
        font-family: "Digital Display", monospace;
        font-size: 11em;
        text-align: end;
        position: relative;
        z-index: 2;
        top: 50%;
        left: 52.5%;
        transform: translate(-50%, -50%);
        margin: 0;
        margin-right: 37.2px;
        color: var(--text-color1);
    }
    .two {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        flex: 1;
        width: 18em;
    }
    button {
        cursor: pointer;
        width: 80px;
        height: 80px;
        font-size: 2em;
        border: 3px solid white;
        border-radius: 10px;
        color: var(--text-color2);
        background-color: transparent;
    }
    button:hover {
        background-color: rgb(0,7,100);
    }
    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 10px 0 10px 0;
        background-color: #090909;
    }
    .footer {
        font-size: small;
        margin: 5px 0 5px 20px;
        color: var(--text-color2);
    }
    a {
        color: var(--text-color2);
    }
</style>
<body>
    @livewire('score-view', ['scoreboard' => $scoreboard], key($scoreboard->id))
    @livewireScripts
</body>
</html>
