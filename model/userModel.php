<?php

class database
{
    public $db;

    public function __construct()
    {
        try {
            $this->db = new PDO
            (
              'mysql:host=127.0.0.1;dbname=assessment',
              'admin',
              'welcome'
            );
        }
        catch (Exception $e) {
            die("connection error: ".$e->getMessage());
        }
    }
}

class userModel extends database
{
    public function insertData($data, $productImg)
    {
        $img = $productImg["productImg"];
        $filepath = "uploaded/".$img["name"];
        move_uploaded_file($img["tmp_name"], "$filepath");

        $name = $data['name'];
        $price = $data['price'];
        $brand = $data['brand'];
        $stock = $data['stock'];
        $sku = $data['sku'];
        $date = $data['date'];

        if ($name !== "" && $filepath !== "" && $price !== "" && $brand !== "" && $stock !== "" && $sku !== "" && $date !== "")
        {
            $this->db->query("INSERT INTO items(name, product_img, price, brand, stock, sku, manufacture_date) VALUES ('$name','$filepath', '$price', '$brand', '$stock', '$sku', '$date')");
            header('location: /create');
        }
    }

    public function fetchData()
    {
        $fetch = $this->db->query("SELECT * FROM items");
        return $fetch->fetchAll(PDO::FETCH_OBJ);
    }

    public function editData($id)
    {
        $editFetch = $this->db->query("SELECT * FROM items WHERE id = '$id'");
        return $editFetch->fetchAll(PDO::FETCH_OBJ);
    }

    public function updateData($id, $editData, $updateImage)
    {
        $editImage = $updateImage["editProductImg"];
        $filepath = "uploaded/".$editImage["name"];
        move_uploaded_file($editImage["tmp_name"], "$filepath");

        $editName = $editData['editName'];
        $editPrice = $editData['editPrice'];
        $editBrand = $editData['editBrand'];
        $editStock = $editData['editStock'];
        $editSku = $editData['editSku'];
        $editDate = $editData['editDate'];

        if ($editName !== "" && $filepath !== "" && $editPrice !== "" && $editBrand !== "" && $editStock !== "" && $editSku !== "" && $editDate !== "")
        {
            $this->db->query("UPDATE items SET name = '$editName', product_img = '$filepath', price = '$editPrice', brand = '$editBrand', stock = '$editStock', sku = '$editSku', manufacture_date = '$editDate' WHERE id = '$id'");
            header('location: /');
        }
        else
        {
            header('location: /edit');
        }
    }

    public function deleteData($id)
    {
        $this->db->query("DELETE FROM items WHERE id = '$id'");
        header('location: /');
    }
}