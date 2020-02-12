<html>
    <h1>Calculator</h1>
    <form method="get">
        <input type="number" name="getal1" placeholder="Getal 1" required></input><br>
        <input type="number" name="getal2" placeholder="Getal 2" required></input><br>
        <input type="submit" name="operator" value="add"></input>
        <input type="submit" name="operator" value="subtract"></input>
        <input type="submit" name="operator" value="multiply"></input>
        <input type="submit" name="operator" value="divide"></input>
        <input type="submit" name="operator" value="modulo"></input>
    </form>
</html>

<?php

if(isset($_GET["getal2"]) && isset($_GET["getal2"])){
    switch($_GET["operator"]){
        case "add":
            $antwoord = $_GET["getal1"] + $_GET["getal2"];
            echo($antwoord);
        break;
        case "subtract":
            $antwoord = $_GET["getal1"] - $_GET["getal2"];
            echo($antwoord);
        break;
        case "multiply":
            $antwoord = $_GET["getal1"] * $_GET["getal2"];
            echo($antwoord);
        break;
        case "divide":
            $antwoord = $_GET["getal1"] / $_GET["getal2"];
            echo($antwoord);
        break;
        case "modulo":
            $antwoord = $_GET["getal1"] % $_GET["getal2"];
            echo($antwoord);
        break;
    }

}