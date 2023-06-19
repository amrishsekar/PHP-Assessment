<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
<?php foreach ($editData as $editDatum): ?>
<form action="/update" method="post" enctype="multipart/form-data">
    <input type="text" name="updateId" hidden value="<?= $editDatum->id ?>">

    <label>Name</label>
    <input type="text" value="<?= $editDatum->name ?>" name="editName" placeholder="Enter name..."><br><br>

    <label>Product-Image</label>
    <input type="file" value="<?= $editDatum->product_img ?>" name="editProductImg" placeholder="Place image..."><br><br>

    <label>Price</label>
    <input type="number" value="<?= $editDatum->price ?>" name="editPrice" placeholder="Enter price..."><br><br>

    <label>Brand</label>
    <input type="text" value="<?= $editDatum->brand ?>" name="editBrand" placeholder="Enter brand..."><br><br>

    <label>Stock</label>
    <input type="number"value="<?= $editDatum->stock ?>" name="editStock" placeholder="Enter stock..."><br><br>

    <label>SKU</label>
    <input type="text" value="<?= $editDatum->sku ?>" name="editSku" placeholder="Enter SKU..."><br><br>

    <label>Manufacture date</label>
    <input type="date" value="<?= $editDatum->manufacture_date ?>" name="editDate" placeholder="Enter date..."><br><br>

    <button type="submit" name="update">Update</button>
</form>
<?php endforeach; ?>

<form action="/" method="post">
    <button type="submit">Back</button>
</form>
</body>
</html>