<?php
// db.php
class Database {
    private static $pdo;
    private static $conn;

    public static function connect() {
        if (!self::$pdo) {
            $host = "localhost";
            $dbname = "testdb";
            $username = "root";
            $password = "";

            try {
                self::$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("DB Connection failed: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }



   

    public static function connectMysqli() {
        if (!self::$conn) {
            $host = "localhost";
            $user = "root";
            $pass = "";
            $dbname = "testdb";

            self::$conn = new mysqli($host, $user, $pass, $dbname);

            if (self::$conn->connect_error) {
                die("Connection failed: " . self::$conn->connect_error);
            }
            self::$conn->set_charset("utf8mb4");
        }
        return self::$conn;
    }

    
}

// BaseModel.php
require_once "db.php";

class BaseModel {
    protected $table;  // টেবিলের নাম
    
    public function __construct($table) {
        $this->table = $table;
    }

    // সব রেকর্ড আনতে
    public function all() {
        $stmt = Database::connect()->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // এক রেকর্ড আনতে
    public function find($id) {
        $stmt = Database::connect()->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Create
    public function create($data) {
        $columns = implode(",", array_keys($data));
        $placeholders = implode(",", array_fill(0, count($data), "?"));
        $sql = "INSERT INTO {$this->table} ($columns) VALUES ($placeholders)";
        $stmt = Database::connect()->prepare($sql);
        $stmt->execute(array_values($data));
        return Database::connect()->lastInsertId();
    }

    // Update
    public function update($id, $data) {
        $setPart = implode(",", array_map(fn($col) => "$col=?", array_keys($data)));
        $sql = "UPDATE {$this->table} SET $setPart WHERE id=?";
        $stmt = Database::connect()->prepare($sql);
        $data['id'] = $id;
        return $stmt->execute(array_values($data));
    }

    // Delete
    public function delete($id) {
        $stmt = Database::connect()->prepare("DELETE FROM {$this->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }
}





class Student1 extends BaseModel {
    public function __construct() {
        parent::__construct("students"); // টেবিলের নাম
    }
}


// Product.php


class Product1 extends BaseModel {
    public function __construct() {
        parent::__construct("products"); // টেবিলের নাম
    }
}





// Product CRUD
$product = new Product1();

// Insert
$newId = $product->create([
    'name' => 'Laptop',
    'price' => 1200
]);
echo "New Product ID: $newId\n";

// All
print_r($product->all());

// Find
print_r($product->find($newId));

// Update
$product->update($newId, ['name' => 'Laptop Pro', 'price' => 1500]);

// Delete
$product->delete($newId);


// Student CRUD
$student = new Student1();
$studentId = $student->create(['name' => 'Rasel', 'roll' => 101, 'class' => '10']);
print_r($student->all());




class BaseModel2 {
    protected $table;
    protected $conn;

    public function __construct() {
        $this->conn = Database::connectMysqli();

        // যদি child class constructor এ table না সেট করে তবে class নাম থেকে বানাও
        if (!$this->table) {
            $class = strtolower(get_class($this));   // Product → product
            $this->table = $class . "s";            // product → products
        }
    }

    // সব রেকর্ড
    public function all() {
        $result = $this->conn->query("SELECT * FROM {$this->table}");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // একক রেকর্ড
    public function find($id) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Insert
    public function create($data) {
        $columns = implode(",", array_keys($data));
        $placeholders = implode(",", array_fill(0, count($data), "?"));
        $types = str_repeat("s", count($data));

        $sql = "INSERT INTO {$this->table} ($columns) VALUES ($placeholders)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param($types, ...array_values($data));
        $stmt->execute();

        return $this->conn->insert_id;
    }

    // Update
    public function update($id, $data) {
        $setPart = implode(",", array_map(fn($col) => "$col=?", array_keys($data)));
        $types = str_repeat("s", count($data)) . "i";

        $sql = "UPDATE {$this->table} SET $setPart WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $values = array_values($data);
        $values[] = $id;
        $stmt->bind_param($types, ...$values);

        return $stmt->execute();
    }

    // Delete
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}




class Product extends BaseModel {
    // protected $table = "my_products";
}

class Student extends BaseModel {
    // default হবে "students"
}



$product = new Product();
$newId = $product->create(['name' => 'Laptop', 'price' => 1200]);
echo "New Product ID: $newId\n";

print_r($product->all());
print_r($product->find($newId));

$product->update($newId, ['name' => 'Laptop Pro', 'price' => 1500]);
$product->delete($newId);


$student = new Student();
$studentId = $student->create(['name' => 'Rasel', 'roll' => 101, 'class' => '10']);
print_r($student->all());
