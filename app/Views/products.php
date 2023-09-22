<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="/save" method="post">
            <label>Product Name</label>
            <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
            <input type="text" name="ProductName" placeholder="ProductName" value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>">
            <br>
            <label>Product Description</label>
            <input type="text" name="ProductDescription" placeholder="ProductDescription" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>">
            <br>
            <label>Product Category</label>
            <select name="ProductCategory" value="<?= isset($pro['ProductCategory']) ? $pro['ProductCategory'] : '' ?>">

            <option value="Electronics"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Electronics' ? 'selected' : '' ?>>Electronics</option>
            <option value="Clothing"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Clothing' ? 'selected' : '' ?>>Clothing</option>
            <option value="Drinks"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Drinks' ? 'selected' : '' ?>>Drinks</option>
            <option value="Foods"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Foods' ? 'selected' : '' ?>>Foods</option>
            <option value="Accessories"<?= isset($pro['ProductCategory']) && $prod['ProductCategory'] === 'Accessories' ? 'selected' : '' ?>>Accessories</option>
            
            </select>
            <br>
            <label>Product Quantity</label>
            <input type="text" name="ProductQuantity" placeholder="ProductQuantity" value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>">
            <br>
            <label>Product Price</label>
            <input type="text" name="ProductPrice" placeholder="ProductPrice" value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>">
            <br>
            <input type="submit" value="save">
    </form>
    <h1>Product Listing</h1>
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Category</th>
            <th>Product Quantity</th>
            <th>Product Price</th>
            <th>action</th>
        </tr>
        <?php foreach ($product as $pr): ?>
            <tr>
                <td><?= $pr['ProductName'] ?></td>
                <td><?= $pr['ProductDescription'] ?></td>
                <td><?= $pr['ProductCategory'] ?></td>
                <td><?= $pr['ProductQuantity'] ?></td>
                <td><?= $pr['ProductPrice'] ?></td>
                <td><a href="/delete/ <?= $pr['id'] ?>">delete</a> || <a href="/edit/ <?= $pr['id'] ?>">edit</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h1>Name of the List</h1>
    <ul>
        <?php foreach($product as $pr): ?>
            <li>
                <strong>Product Name:</strong> <?= $pr ['ProductName'] ?>
                <br>
                <strong>Product Description:</strong> <?= $pr ['ProductDescription'] ?>
                <br>
                <strong>Product Category:</strong> <?= $pr ['ProductCategory'] ?>
                <br>
                <strong>Product Quantity:</strong> <?= $pr ['ProductQuantity'] ?>
                <br>
                <strong>Product Price: </strong> <?= $pr ['ProductPrice'] ?>
            </li>
            <br>
            <?php endforeach; ?>
    </ul>
</body>
</html>