
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scintific Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1 class="title">Scientific Calculator</h1>
        <div class="container">
            <div class="display">
                <input id="screen" type="text" placeholder="0">
            </div>

            <div class="btns">
                <div class="row">
                    <button id="ce" onclick="backspc()">CE</button>
                    <button onclick="fact()">x!</button>
                    <button class="btn">(</button>
                    <button class="btn">)</button>
                    <button class="btn">%</button>
                    <button id="ac" onclick="screen.value=''">AC</button>
                </div>

                <div class="row">
                    <button onclick="sin()">sin</button>
                    <button onclick="pi()">π</button>
                    <button class="btn">7</button>
                    <button class="btn">8</button>
                    <button class="btn">9</button>
                    <button class="btn">÷</button>
                </div>

                <div class="row">
                    <button onclick="cos()">cos</button>
                    <button onclick="log()">log</button>
                    <button class="btn">4</button>
                    <button class="btn">5</button>
                    <button class="btn">6</button>
                    <button class="btn">×</button>
                </div>

                <div class="row">
                    <button onclick="tan()">tan</button>
                    <button onclick="sqrt()">√</button>
                    <button class="btn">1</button>
                    <button class="btn">2</button>
                    <button class="btn">3</button>
                    <button class="btn">-</button>
                </div>

                <div class="row">
                    <button onclick="e()">e</button>
                    <button onclick="pow()">x <span style="position: relative; bottom: .4em; right: .1em;">y</span> </button>
                    <button class="btn">0</button>
                    <button class="btn">.</button>
                    <button id="eval" onclick="screen.value=eval(screen.value)">=</button>
                    <button class="btn">+</button>
                </div>
            </div>
        </div>
        <div class="logo">
            <h1 class="fline">Design and Created by @codewitharsh</h1>
        </div>
</body>
<script src="calc.js"></script>
</html>