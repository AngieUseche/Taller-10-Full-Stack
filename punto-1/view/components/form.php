<?php include "./controller/calculationController.php" ?>

<form method ="post">
<h2>Operación de Números</h2>
<div class="form__row">
    <div>
        <label for="first--number">Primer Número</label>
        <input 
            id="first--number" 
            type="text"
            name= "first_number"
            placeholder="2"
        >
    </div>
    <div>
        <label for="second--number">Segundo Número</label>
        <input 
            id="second--number" 
            type="text"
            name= "second_number"
            placeholder="5"
        >
    </div>
</div>
<div>
        <label for="operation--type">Operación Matemática</label>
        <select id="operation--type" name= "operation_type">
            <option value="A">SUMA</option>
            <option value="B">RESTA</option>
            <option value="C">MULTIPLICACIÓN</option>
            <option value="D">DIVISIÓN</option>
            <option value="">Ninguna</option>
        </select>
    </div>
<button>CALCULAR</button>
</form>