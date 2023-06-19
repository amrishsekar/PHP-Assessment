<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
</head>
<body>
    <form action="/create" method="post" enctype="multipart/form-data">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter name..."><br><br>

        <label>Product-Image</label>
        <input type="file" name="productImg" placeholder="Place image..."><br><br>

        <label>Price</label>
        <input type="number" name="price" placeholder="Enter price..."><br><br>

        <label>Brand</label>
        <input type="text" name="brand" placeholder="Enter brand..."><br><br>

        <label>Stock</label>
        <input type="number" name="stock" placeholder="Enter stock..."><br><br>

        <label>SKU</label>
        <input type="text" name="sku" placeholder="Enter SKU..."><br><br>

        <label>Manufacture date</label>
        <input type="date" name="date" placeholder="Enter date..."><br><br>

        <button type="submit" name="create">Create</button>
    </form>

    <form action="/" method="post">
        <button type="submit">Data table</button>
    </form>
</body>
</html>