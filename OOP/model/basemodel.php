<?php
// BaseModel.php
require_once "Database.php";

class BaseModel
{
    protected $table;
    protected $conn;

    public function __construct()
    {
        $this->conn = Database::connect();

        // যদি child class constructor এ table না সেট করে তবে class নাম থেকে বানাও
        if (!$this->table) {
            $class = strtolower(get_class($this));   // Product → product
            $this->table = $class . "s";            // product → products
        }
    }

    // সব রেকর্ড
    public function all()
    {
        $result = $this->conn->query("SELECT * FROM {$this->table}");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // একক রেকর্ড
    public function find($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Insert
    public function create($data)
    {
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
    public function update($id, $data)
    {
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
    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
