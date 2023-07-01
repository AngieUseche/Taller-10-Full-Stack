<?php include "./controller/validationController.php" ?>

<form method ="post">
<h2>Ingreso de Datos</h2>
<div class="form__row">
    <div>
        <label for="birth--date">Fecha de Nacimiento</label>
        <input 
            id="birth--date" 
            type="date"
            name= "birth_date"
        >
    </div>
</div>
<button>VALIDAR</button>
</form>