<?php

class Products
{
    /**
     * @var PDO
     */
    private $db;

    /**
     * Products constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getList()
    {
        $result = $this->db->query('SELECT product_id, product_name, p.create_date, c.cat_name 
                                              FROM products AS p
                                              INNER JOIN categories AS c USING (cat_id)');

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            yield $row;
        }
    }

    public function getOne(int $product_id)
    {
        $result = $this->db->prepare('SELECT product_id, product_name, p.create_date, c.cat_name, description, last_update, price, cat_id, image 
                                              FROM products AS p
                                              INNER JOIN categories AS c USING (cat_id)
                                              WHERE product_id = :product_id');

        $result->bindParam('product_id', $product_id);
        $result->execute();

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function createProduct($product_name, $price, $description, $cat_id)
    {
        $result = $this->db->prepare('INSERT INTO products (product_name, cat_id, description, price) 
                                     VALUES (:product_name, :cat_id, :description, :price)');

        $result->bindParam('product_name', $product_name);
        $result->bindParam('cat_id', $cat_id);
        $result->bindParam('description', $description);
        $result->bindParam('price', $price);

        $result->execute();
        return $this->db->lastInsertId();
    }

    public function updateProduct($product_id, $product_name, $price, $description, $cat_id)
    {
        $result = $this->db->prepare('UPDATE products 
                                                  SET product_name = :product_name, 
                                                      cat_id = :cat_id, 
                                                      description = :description,
                                                      price = :price
                                                WHERE product_id = :product_id');

        $result->bindParam('product_id', $product_id);
        $result->bindParam('product_name', $product_name);
        $result->bindParam('cat_id', $cat_id);
        $result->bindParam('description', $description);
        $result->bindParam('price', $price);

        $result->execute();
        return $this->db->lastInsertId();
    }

    public function deleteProduct(int $product_id){
        $result = $this->db->prepare("DELETE FROM products 
                            WHERE product_id = :product_id");

        $result->bindParam("product_id", $product_id);
        $result->execute();
    }

    public function uploadImage(string $image, int $product_id){
        $result = $this->db->prepare('UPDATE products 
                                                  SET image = :image
                                                WHERE product_id = :product_id');


        $result->bindParam( 'image',$image);
        $result->bindParam('product_id',$product_id);

        $result->execute();
    }
}