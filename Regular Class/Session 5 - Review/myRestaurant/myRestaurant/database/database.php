<?php
session_start();
$conn = "";
$stmt = "";

function connectToDB()
{
    $servername = "localhost";
    $username = "root";
    $passowrd = "";
    $dbName = "myrestaurant";
    $dataSourceName = "mysql:host=" . $servername . ";dbname=" . $dbName;
    try{
        $conn = new PDO($dataSourceName, $username, $passowrd);
        return $conn;
    }
    catch(PDOException $e){
        echo $e->getMessage();
        return null;
    }
}

function closeConnection()
{
    $conn = null;
    $stmt = null;
}

connectToDB();

function login($data)
{
    $conn = connectToDB();
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([
        $data["email"]
    ]);
    $user = $stmt->fetch();
    $validated = password_verify($data["password"], $user["password"]);
    if ($validated){
        if (isset($data["checkbox"])){
            setcookie("email", $data["email"], time() + 3600);
        }
        $_SESSION["login"] = true;
        header("Location: index.php");
    }
    else{
        echo "<script>alert('not validated')</script>";
    }
    closeConnection();
}

function register($data)
{
    $conn = connectToDB();
    $stmt = $conn->prepare("INSERT INTO users (username, fullname, email, password) VALUES (?, ?, ?, ?)");
    $stmt->execute([
        $data["username"],
        $data["name"],
        $data["email"],
        password_hash($data["password"], PASSWORD_DEFAULT)
    ]);
    closeConnection();
}

function getAllFoods()
{
    $conn = connectToDB();
    // $stmt = $conn->query("SELECT * FROM foods");
    $stmt = $conn->query("SELECT foods.photo, foods.id, foods.food_name, foods.price, foods.description, categories.category_name FROM foods INNER JOIN categories ON foods.category_id = categories.id");
    $foods = [];
    while($food = $stmt->fetch(PDO::FETCH_ASSOC)){
        array_push($foods, $food);
    }
    return $foods;
    closeConnection();
}

function getAllCategories()
{
    $conn = connectToDB();
    $stmt = $conn->query("SELECT * FROM categories");
    $categories = [];
    while($category = $stmt->fetch(PDO::FETCH_ASSOC)){
        array_push($categories, $category);
    }
    return $categories;
    closeConnection();
}

function getFoodById($data) 
{
    $conn = connectToDB();
    $stmt = $conn->prepare("SELECT * FROM foods WHERE id = ?");
    $stmt->execute([
        $data["id"]
    ]);
    $food = $stmt->fetch();
    return $food;
    closeConnection();
}

function createFood($data)
{
    $conn = connectToDB();
    $stmt = $conn->prepare("INSERT INTO foods (category_id, food_name, price, description) VALUES (?, ?, ?, ?)");
    $stmt->execute([
        $data["category"],
        $data["name"],
        $data["price"],
        $data["description"]
    ]);
    closeConnection();
}

function updateFood($data)
{
    $conn = connectToDB();
    $stmt = $conn->prepare("UPDATE foods SET food_name = ?, category_id = ?, price = ?, description = ? WHERE id = ?");
    $stmt->execute([
        $data["name"],
        $data["category"],
        $data["price"],
        $data["description"],
        $data["id"]
    ]);
    closeConnection();
}

function deleteFood($data)
{
    $conn = connectToDB();
    $stmt = $conn->prepare("DELETE FROM foods WHERE id = ?");
    $stmt->execute([
        $data["id"]
    ]);
    closeConnection();
}