<?php
    require_once "../database/database.php";
    $categories = getAllCategories();
    if (isset($_POST["addBtn"])){
        createFood($_POST);
        header("Location: ../index.php");
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paradise Kitchen | Create Food</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- JQuery Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="app bg-dark">
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div
                class="card p-4 shadow-sm p-3 mb-5 bg-body-tertiary rounded w-100 d-flex flex-row justify-content-evenly">
                <!-- Add Food Title -->
                <div class="title d-flex align-items-center">
                    <h1 class="fw-medium lh-base">Add <br><span class="fst-italic fw-semibold text-primary">Food</span>
                    </h1>
                </div>

                <div class="w-75">
                    <!-- Add Food Form -->
                    <form action="" method="POST">
                        <!-- Name -->
                        <div class="form-floating my-3">
                            <input type="text" class="form-control" id="name" placeholder="Name ..." name="name">
                            <label for="name">Name</label>
                        </div>

                        <!-- Category -->
                        <div class="form-floating my-3">
                            <select class="form-select" id="category" aria-label="Floating label select example" name="category">
                                <?php foreach($categories as $category): ?>
                                <option value="<?= $category["id"] ?>">
                                    <?= $category["category_name"] ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <label for="category">Category</label>
                        </div>

                        <!-- Price -->
                        <div class="form-floating my-3">
                            <input type="number" class="form-control" id="price" placeholder="Password ..." name="price">
                            <label for="password">Price</label>
                        </div>

                        <!-- Description -->
                        <div class="form-floating my-3">
                            <textarea class="form-control" placeholder="Description ..." id="description"
                                style="height: 250px" name="description"></textarea>
                            <label for="description">Description</label>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 fw-semibold" id="staticBackdropLabel">Congrats 😀
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-start fs-6">You have successfully <span
                                                class="text-success fw-bold">MADE</span> a bew
                                            food! 👍</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="yesBtn btn btn-success">Sounds Great!</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add Food Button -->
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary my-3 w-100" data-bs-toggle="modal" type="submit"
                                data-bs-target="#staticBackdrop">
                                Add Food
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Area -->
    <script>
    $("form").on("submit", (e) => {
        e.preventDefault();
        $(".yesBtn").on("click", () => {
            $("#staticBackdrop").modal("hide");
            $("button[type=submit]").after("<input type='hidden' value='' name='addBtn'>")
            e.target.submit();
        })
    })
    </script>
</body>

</html>