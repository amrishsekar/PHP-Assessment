<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="views/style.css">
</head>
<body>

<div class="header">
<h1>Products</h1>

<form action="/create" method="post">
    <button type="submit">Add New</button>
</form>
</div>

<div class="allProducts">
<?php foreach ($getAllData as $key=>$datum): ?>
    <div class="details-div">
        <h2 class="title"><?= $datum->name; ?></h2>
        <img src="<?php echo $datum->product_img; ?>">
        <div class="detail">
            <label>Price:</label>
            <p><?= $datum->price; ?></p>
        </div>

        <div class="detail">
            <label>Brand:</label>
            <p><?= $datum->brand; ?></p>
        </div>

        <div class="detail">
            <label>Stock:</label>
            <p><?= $datum->stock; ?></p>
        </div>

        <div class="detail">
            <label>SKU:</label>
            <p><?= $datum->sku; ?></p>
        </div>

        <div class="detail">
            <label>Ma.date:</label>
            <p><?= $datum->manufactur_date; ?></p>
        </div>        
        
        <div class="btns">
            <form action="/edit" method="post">
                <button type="submit" name="targetId" value="<?= $datum->id; ?>">Edit</button>
            </form>
            <form action="/delete" method="post">
                <button type="submit" name="targetId" value="<?= $datum->id; ?>">Delete</button>
            </form>
        </div>
    </div>
<?php endforeach; ?>
</div>

</body>
</html>


