<?php
require '../Controller/connection.php';
if (isset($_POST['submit'])){
    $products = getSpecificProducts($_POST['keyword']);
}
else
    $products = getAllProducts();
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
    <div class="container mt-5 mb-5">
        <div class="titleBox">
            <h1 class="text-center">Product Management</h1>
            <p class="text-center fs-6">A Simple CRUD Product Management App</p>
            <hr>
        </div>
        <div class="instructionBox d-flex justify-content-evenly mt-5 mb-5">
            <a href="index.php" type="button" style="width: 350px;" class="btn btn-primary fw-bold border border-dark">Show All Products</a>
            <a href="create.php" type="button" style="width: 350px;" class="btn btn-light fw-bold border border-dark">Add New Products</a>
        </div>
        <div class="d-flex justify-content-center mb-5 container-fluid rounded">
            <div class="w-75">
                <form action="" method="POST" class="d-flex" role="search">
                    <input class="form-control me-3 border border-2 border-primary" type="search" placeholder="Search a Product ..." aria-label="Search a Product ..." autofocus name="keyword">
                    <button class="btn btn-primary" type="submit" name="submit">Search</button>
                </form>
            </div>
        </div>
        <main>
            <table class="table table-striped table-hover text-center border border-2 border-primary">
                <thead class="border fs-5">
                    <tr class="table-primary border border-primary">
                        <th class="border border-2 border-primary" style="width: 50px;" scope="col">No.</th>
                        <th class="border border-2 border-primary" scope="col">Image</th>
                        <th class="border border-2 border-primary" scope="col">Name</th>
                        <th class="border border-2 border-primary" scope="col">Category</th>
                        <th class="border border-2 border-primary" scope="col">Stock</th>
                        <th class="border border-2 border-primary" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $num = 1; ?>
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <td style="vertical-align: middle;" class="border border-2 border-primary" scope="row"><?= $num++; ?></td>
                            <td class="d-flex justify-content-center align-items-center border border-2 border-primary">
                                <img style="display: block; width: 100px; height: 100px;" src="../../source/img/product/<?= $product["image"]; ?>" alt="img">
                            </td>
                            <td style="vertical-align: middle;" class="border border-2 border-primary"><?= $product["name"]; ?></td>
                            <td style="vertical-align: middle;" class="border border-2 border-primary"><?= $product["category"]; ?></td>
                            <td style="vertical-align: middle;" class="border border-2 border-primary"><?= $product["stock"]; ?></td>
                            <td style="vertical-align: middle;" class="border border-2 border-primary">
                                <a href="edit.php?id=<?= $product['id'] ?>" class="btn btn-primary fw-bold">Edit</a>
                                <input type="hidden" value="<?= $product['id'] ?>">
                                <button type="submit" class="btn btn-danger fw-bold">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tBody = document.querySelector('tbody')
            tBody.addEventListener('click', (e) => {
                if (e.target.tagName == 'BUTTON') {
                    event.preventDefault();
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: 'btn btn-success',
                            cancelButton: 'btn btn-danger me-3'
                        },
                        buttonsStyling: false
                    })
                    swalWithBootstrapButtons.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'No, cancel!',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            swalWithBootstrapButtons.fire(
                                'Deleted!',
                                'The product has been deleted.',
                                'success'
                            )
                            setTimeout(() => {
                                const getProductId = e.target.parentElement.children[1].value
                                window.location.href = `../Controller/delete.php?id=${getProductId}`
                            }, 2000);
                        } else if (
                            result.dismiss === Swal.DismissReason.cancel
                        ) {
                            swalWithBootstrapButtons.fire(
                                'Cancelled',
                                'The product is canceled to delete',
                                'error'
                            )
                        }
                    })
                }
            })
        });
    </script>

</body>

</html>