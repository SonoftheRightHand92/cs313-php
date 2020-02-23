<?php
session_start();
require "dbConnect.php";
$db = get_db();

$firstName = $_SESSION["firstname"];
$lastName = $_SESSION["lastname"];
$email = $_SESSION["email"];
$street = $_SESSION["homeaddress"];
$city = $_SESSION["city"];
$state = $_SESSION["state"];
$zip = $_SESSION["zip"];
$areaCode = $_SESSION["areacode"];
$next3 = $_SESSION["next3"];
$last4 = $_SESSION["last4"];
$cellAreaCode = $_SESSION["cellareacode"];
$cellNext3 = $_SESSION["cellnext3"];
$cellLast4 = $_SESSION["celllast4"];
$b_month = $_SESSION["month"];
$b_day = $_SESSION["day"];
$b_year = $_SESSION["year"];
$housing = $_SESSION["housing"];
$userName = $_POST['username'];
$password = $_POST['password'];

$string = '';
for ($i = 0; $i < sizeof($housing); $i++) {
	$string .= $housing[$i];
	if ($i < (sizeof($housing) - 1) && !empty($housing[$i])) {
		$string .= ", ";
	}
}

try
{
	$query = "INSERT INTO renters (first_name, last_name, email, street_address, city, state_name, zip, area_code_home, first_three_home, last_four_home, area_code_cell, first_three_cell, last_four_cell, b_month, b_day, b_year, housing_contract) VALUES (:firstName, :lastName, :email, :street, :city, :state, :zip, :areaCode, :next3, :last4, :cellAreaCode, :cellNext3, :cellLast4, :b_month, :b_day, :b_year, :string)";
	$statement = $db->prepare($query);
	$statement->bindValue(':firstName', $firstName);
	$statement->bindValue(':lastName', $lastName);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':street', $street);
	$statement->bindValue(':city', $city);
	$statement->bindValue(':state', $state);
	$statement->bindValue(':zip', $zip);
	$statement->bindValue(':areaCode', $areaCode);
	$statement->bindValue(':next3', $next3);
	$statement->bindValue(':last4', $last4);
	$statement->bindValue(':cellAreaCode', $cellAreaCode);
	$statement->bindValue(':cellNext3', $cellNext3);
	$statement->bindValue(':cellLast4', $cellLast4);
	$statement->bindValue(':b_month', $b_month);
	$statement->bindValue(':b_day', $b_day);
	$statement->bindValue(':b_year', $b_year);
	$statement->bindValue(':string', $string);
	$statement->execute();

	$query2 = "INSERT INTO profiles (custom_name, code, email) VALUES (:userName, :password, :email)";

	$statement2 = $db->prepare($query2);
	$statement2->bindValue(':userName', $userName);
	$statement2->bindValue(':password', $password);
	$statement2->bindValue(':email', $email);
	$statement2->execute();
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: sign_in.php");

die(); 
?>