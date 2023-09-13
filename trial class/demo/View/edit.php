<?php
require '../Controller/connection.php';
$product = getProductById($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="icon" href="../../source/img/logo/logo.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="container mt-5">
        <div class="titleBox">
            <h1 class="text-center">Edit Product</h1>
            <p class="text-center fs-6">Edit Your Product Here</p>
            <hr>
        </div>
        <main>
            <form action="../Controller/update.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="image" class="form-label fw-semibold">Image</label>
                    <div style="width: 150px; height: 150px;" class="imgBox border border-2 border-dark mb-3 rounded">
                        <img class="imgPrev d-block" src="../../source/img/product/<?= $product['image'];  ?>" alt="img" onerror="hideImg()" width="100%" height="100%">
                    </div>
                    <input type="file" class="imgUp form-control" id="image" name="image" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Name</label>
                    <input type="text" class="form-control border border-primary border-2" id="name" placeholder="Product Name ..." autofocus name="name" required value="<?= $product['name']; ?>">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-semibold">Description</label>
                    <textarea style="height:150px;" class="form-control border border-primary border-2" id="description" placeholder="Product Description ..." name="description" required><?= $product['description']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label fw-semibold">Cateogry</label>
                    <select name="category" id="category" class="form-select border border-primary border-2">
                        <option <?= $product['category'] == "School Product" ? 'selected' : ''  ?> value="schoolProduct">School Product</option>
                        <option <?= $product['category'] == "Technology" ? 'selected' : ''  ?> value="technology">Technology</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label fw-semibold">Stock</label>
                    <input type="number" class="form-control border border-primary border-2" id="stock" placeholder="Product Stock ..." required name="stock" value="<?= $product['stock']; ?>">
                </div>
                <a href="index.php" class="btn btn-danger mt-2 me-3" name="submit">Cancel</a>
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                <button type="submit" class="btn btn-primary mt-2" name="submit">Update New Product</button>
            </form>
        </main>
    </div>

    <script>
        const imageUpload = document.querySelector('.imgUp')
        const imgPreview = document.querySelector('.imgPrev')
        imageUpload.addEventListener('change', () => {
            const file = imageUpload.files[0]
            if (file) imgPreview.src = URL.createObjectURL(file)
        })
    </script>

</body>


</html>