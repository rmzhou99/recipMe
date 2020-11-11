<?php
require("connectdb.php");

//insert recipe
function addRecipe($username, $recipeName, $instructions, $instructionCount, $country, $cookingTime, $recipePinCount)
{
    global $db;
    // add recipe into db
    $stamt = $db->prepare("INSERT INTO recipes(username, recipeName, instructions, instructionCount, country, cookingTime, recipePinCount) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stamt->bind_param("sssisii", $username, $recipeName, $instructions, $instructionCount, $country, $cookingTime, $recipePinCount);
    $stamt->execute();
    $stamt->close();
}
