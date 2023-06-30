<?php include "./controller/validationController.php" ?>

<form method ="post">
<h2>Ingreso de Datos</h2>
<div class="form__row">
    <div>
        <label for="person--age">Edad</label>
        <input 
            id="person--age" 
            type="text"
            name= "age_person"
            placeholder="18"
        >
    </div>
</div>
<button>VALIDAR</button>
</form>