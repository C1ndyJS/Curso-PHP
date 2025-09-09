<h1>Aprendizaje de PHP</h1>
<?php
    // echo "Hola PHP"; 
    // $name = "Cindy";
    // echo "<br> Bienvenida \"$name\" <br>";
    // var_dump("La variable es de tipo " . gettype($name));
    // echo "<br>";
    // var_dump($name);    
    // echo "Confirmar si una variable es de un tipo se puede decir como sigue: <br>" . is_bool($name) . "<br>";
    $age = 23;
    // echo "Mi edad es $age <br>";
    // var_dump($age);
    // gettype($age);

    // settype($age, "float");
    // gettype($age);

    // $isDeveloper = false;
    // $isOld = $isDeveloper > 40;

    // echo "<br>Primera forma de condicional <br>";
    // if ($isOld) {
    //     echo "<h2>Eres viejo</h2>";
    // } else {
    //     echo "<h2>Eres joven</h2>";
    // }
    // ?>
    <!-- <br> Segunda forma de condicional <br>
    <?php if($isOld)   { ?>
        <h2>Eres viejo</h2>
    <?php } else { ?>
        <h2>Eres joven</h2>
        <p>El ifelse debe ir siempre junto<?php if($isOld) { echo " a la condición"; } ?></p>
    <?php } ?>
    <br> Tercera forma de condicional <br>
    <?php if($isOld): ?>
        <h2>Eres viejo</h2>
    <?php else: ?>
        <h2>Eres joven</h2>
    <?php endif; ?>
    <br> Cuarta forma de condicional (MI FAVORITA)<br>
    <?php echo ($isOld) 
        ? "<h2>Eres viejo</h2>"
        : "<h2>Eres joven</h2>"; 
        
     ?>   -->

<?php 

    // Match expression

    $role = "admin";
    echo "<br> Match expression <br>";
    $message = match($role) {
        "admin" => "Eres administrador",
        "editor" => "Eres editor",
        "user" => "Eres usuario",
        "age" < 10 => "Eres un niño",
        default => "No tienes rol",
    };
    
    echo $message;
    echo "<br><br>";

    echo "<b> Arrays </b><br>";

    // Array
    $bestLanguages = array("PHP", "JavaScript", "Python");
    // Lista
    $bestLanguages2 = ["PHP", "JavaScript", "Python"];
    // Diccionario
    $bestLanguages3 = [
        "backend" => "PHP",
        "frontend" => "JavaScript",
        "dataScience" => "Python"
    ];
    ?>
    <br> RECORRER lista, el Array y el Diccionario <br>
    <ul>
        <?php echo " Primera forma de recorrer una lista<br>";
         foreach ($bestLanguages2 as $lang ) :
            echo "<li>$lang</li>";
        endforeach; ?>
        <br>
    </ul>
    <ul>
    <?php echo " Segunda forma de recorrer un Array<br>";
    foreach($bestLanguages as $language) {
        echo "<li>$language</li>";
    } ?>
    </ul>
    <ul>
    <?php foreach($bestLanguages3 as $key  => $value) {
        echo "<li>$key: $value</li>";
    } ?>
    </ul>   
