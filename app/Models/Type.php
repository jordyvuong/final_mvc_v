<?php
namespace App\Models;

use App\Utils\Database;
use PDO;

class Type
{
    private $id;
    private $name;
    private $created_at;
    private $updated_at;

    public function findAll()
    {
        $sql = "SELECT * FROM type";

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Type::class);

        return $types;
    }

    public function find($id)
    {
        $sql = "SELECT * FROM type WHERE id = " . $id;

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $type = $pdoStatement->fetchObject(Type::class);

        return $type;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }
}
