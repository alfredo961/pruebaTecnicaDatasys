<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="calculadora">
            <div class="display">
                <div id="valor-anterior"></div>
                <div id="valor-actual"></div>
            </div>
            <button class="col-2" onclick="{{'display.borrarTodo()'}}">C</button>
            <button onclick="{{'display.borrar()'}}">&larr;</button>
            <button class="operador" value="dividir">/</button>
            <button class="numero">7</button>
            <button class="numero">8</button>
            <button class="numero">9</button>
            <button class="operador" value="multiplicar">*</button>
            <button class="numero">4</button>
            <button class="numero">5</button>
            <button class="numero">6</button>
            <button class="operador" value="restar">-</button>
            <button class="numero">1</button>
            <button class="numero">2</button>
            <button class="numero">3</button>
            <button class="operador" value="sumar">+</button>
            <button class="col-2 numero">0</button>
            <button class="numero">.</button>
            <button class="operador" value="igual">=</button>
        </div>
    </div>


    <script type="text/javascript" src="{{ asset('js/display.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/calculadora.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/action_buttons.js') }}"></script>
</body>
</html>