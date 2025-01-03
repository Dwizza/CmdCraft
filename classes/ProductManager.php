<?php
require_once '../database.php';


class ProductManager
{
    public function displayAll()
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM products");
        $stmt->execute();
        $products = $stmt->fetchAll();
        foreach ($products as $product) {
            $p = new Product( $product['name'], $product['description'], $product['price'], $product['quantity'],$product['photo']);
        $p->setId($product['id']);
        
        echo "<tr>
                    <td>".$p->getName()."</td>
                    <td>".$p->getPhoto()."</td>
                    <td>".$p->getDescription()."</td>
                    <td>".$p->getPrice()."</td>
                    <td>".$p->getQuantity()."</td>
                    <td>
                        <a href='../products/edit.php?id=".$p->getId()."'>Edit</a>
                    </td>
                    <td>
                        <a href='../products/delete.php?id=".$p->getId()."'>Delete</a>
                    </td>
                </tr>";
        }
    }

    public function delete($id)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("DELETE FROM products WHERE id = :id");
        $stmt->execute([
            ':id' => $id
        ]);
    }    

    public function getProduct($id)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute([
            ':id' => $id
        ]);
        $product = $stmt->fetch();
        $p = new Product( $product['name'], $product['description'], $product['price'], $product['quantity'],$product['photo']);
        $p->setId($product['id']);
    return $p;
    }

    public function update(Product $product)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("UPDATE products SET name = :name,photo = :photo, description = :description, price = :price, quantity = :quantity WHERE id = :id");
        $stmt->execute([
            ':name' => $product->getName(),
            ':photo' => $product->getPhoto(),
            ':description' => $product->getDescription(),
            ':price' => $product->getPrice(),
            ':quantity' => $product->getQuantity(),
            ':id' => $product->getId()
        ]);
    }
    public function addProduct(Product $product)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO products(name,description,price,quantity,photo) VALUES (:name, :description, :price, :quantity,:photo)");
        $stmt->execute([
            ':name' => $product->getName(),
            ':photo' => $product->getPhoto(),
            ':description' => $product->getDescription(),
            ':price' => $product->getPrice(),
            ':quantity' => $product->getQuantity()
        ]);
    }
}
