<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            background-color: #f0f0f0;
        }

        header {
            background-color: #007BFF;
            text-align: center;
            padding: 20px 0;
            color: white;
        }

        h1 {
            font-size: 36px;
        }

        main {
            padding: 20px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        footer {
            text-align: center;
            background-color: #007BFF;
            padding: 20px 0;
            color: white;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
        }

        i {
            margin-right: 5px;
        }

        /* Media Query for Responsive Design */
        @media screen and (max-width: 768px) {
            /* Add responsive styles here */
        }
    </style>
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
                                <a href="/delete/<?= $pr['id'] ?>"><i class="fas fa-trash"></i>Delete</a> || <a href="/edit/<?= $pr['id'] ?>"><i class="fas fa-edit"></i>Edit</a>
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
