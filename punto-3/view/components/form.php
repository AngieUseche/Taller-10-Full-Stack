

<form action="./view/pages/user-info-pages.php" method ="get">
<h2>Registro de Usuarios</h2>
<div class="form__row">
    <div>
        <label for="first--name">Nombres del usuario: </label>
        <input 
            id="first--name" 
            type="text"
            name= "first_name"
            placeholder="David"
        >
    </div>
    <div>
        <label for="last--name">Apellidos del usuario: </label>
        <input 
            id="last--name" 
            type="text"
            name= "last_name"
            placeholder="Morales"
        >
    </div>
    <div>
        <label for="id--number">Identificación del usuario: </label>
        <input 
            id="id--number" 
            type="text"
            name= "id_number"
            placeholder="52345678"
        >
    </div>
</div>
<button>REGISTRAR</button>
</form>