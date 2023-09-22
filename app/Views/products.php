<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file for styling -->
</head>
<body>
    <header>
        <h1>Product Management</h1>
    </header>
    <main>
        <section class="product-form">
            <h2>Add/Edit Product</h2>
            <form action="/save" method="post">
                <label for="ProductName">Product Name</label>
                <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                <input type="text" name="ProductName" id="ProductName" placeholder="Product Name" value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>">
                
                <label for="ProductDescription">Product Description</label>
                <input type="text" name="ProductDescription" id="ProductDescription" placeholder="Product Description" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>">
                
                <label for="ProductCategory">Product Category</label>
                <select name="ProductCategory" id="ProductCategory">
                    <option value="Electronics"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Electronics' ? ' selected' : '' ?>>Electronics</option>
                    <option value="Clothing"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Clothing' ? ' selected' : '' ?>>Clothing</option>
                    <option value="Drinks"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Drinks' ? ' selected' : '' ?>>Drinks</option>
                    <option value="Foods"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Foods' ? ' selected' : '' ?>>Foods</option>
                    <option value="Accessories"<?= isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Accessories' ? ' selected' : '' ?>>Accessories</option>
                </select>
                
                <label for="ProductQuantity">Product Quantity</label>
                <input type="text" name="ProductQuantity" id="ProductQuantity" placeholder="Product Quantity" value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>">
                
                <label for="ProductPrice">Product Price</label>
                <input type="text" name="ProductPrice" id="ProductPrice" placeholder="Product Price" value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>">
                
                <input type="submit" value="Save">
            </form>
        </section>
        
        <section class="product-list">
            <h2>Product Listing</h2>
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Product Category</th>
                        <th>Product Quantity</th>
                        <th>Product Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($product as $pr): ?>
                        <tr>
                            <td><?= $pr['ProductName'] ?></td>
                            <td><?= $pr['ProductDescription'] ?></td>
                            <td><?= $pr['ProductCategory'] ?></td>
                            <td><?= $pr['ProductQuantity'] ?></td>
                            <td><?= $pr['ProductPrice'] ?></td>
                            <td>
                                <a href="/delete/<?= $pr['id'] ?>">Delete</a> || <a href="/edit/<?= $pr['id'] ?>">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
        
        <section class="product-list">
            <h2>List of Products</h2>
            <ul>
                <?php foreach ($product as $pr): ?>
                    <li>
                        <strong>Product Name:</strong> <?= $pr['ProductName'] ?><br>
                        <strong>Product Description:</strong> <?= $pr['ProductDescription'] ?><br>
                        <strong>Product Category:</strong> <?= $pr['ProductCategory'] ?><br>
                        <strong>Product Quantity:</strong> <?= $pr['ProductQuantity'] ?><br>
                        <strong>Product Price:</strong> <?= $pr['ProductPrice'] ?>
                    </li>
                    <br>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
    
    <footer>
        <p>&copy; <?= date('Y') ?> KENZAKI_1973</p>
    </footer>
</body>
</html>
