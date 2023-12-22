<?php
    require_once "database/database.php";
    $foods = getAllFoods();

    if (isset($_POST["deleteBtn"])){
        deleteFood($_POST);
        header("Location: index.php");
    }
    // echo "<pre>";
    // print_r($foods);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paradise Kitchen | Home</title>
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
    <div class="app bg-dark position-relative">
        <div id="liveAlertPlaceholder" class="position-absolute top-0 end-0 translate-middle-0 w-25"></div>
        <div class="container d-flex justify-content-center align-items-center vh-100 flex-row gap-5">
            <!-- User Info -->
            <div class="card p-4 d-flex w-25">
                <h3 class="fs-5">Hello,
                    <span class="fs-3 fw-bold">Username</span>
                </h3>
                <hr>
                <div class="profile-detail d-flex justify-content-center align-items-center flex-column"
                    style="background-color: #D2E6B5;">
                    <p style="margin-top: 5px; margin-bottom: 2px;">Dummy User</p>
                    <p style="margin-bottom: 5px;">user@gmail.com</p>
                </div>
                <div class="my-3">
                    <a class="btn btn-danger w-100" href="Logout.php">
                        Logout
                    </a>
                </div>
            </div>
            <div
                class="card p-4 shadow-sm p-3 mb-5 bg-body-tertiary rounded w-75 d-flex flex-column justify-content-center">
                <h3 class="fw-semibold mb-4">Food Menu</h3>
                <!-- Food Table -->
                <div class="table-responsive" style="max-height: 50vh;">
                    <table class="table table-hover text-center">
                        <!-- Header -->
                        <thead style="position: sticky; top: 0;">
                            <tr class="table-warning">
                                <th scope="col">No</th>
                                <th scope="col">Photo</th>
                                <th class="w-25" scope="col">Name</th>
                                <th class="w-25" scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <!-- Body -->
                        <tbody>
                            <!-- Data 1 -->
                            <?php $num = 1; ?>
                            <?php foreach($foods as $food): ?>
                            <tr style="height: 100%; vertical-align: middle;">
                                <th scope="row"><?= $num++; ?></th>
                                <td class="col" style="height: 100px; width: 75px;">
                                    <img src="<?= 'img/' . $food['photo'] ?>" alt="food-cover"
                                        style="width: 100%; height: 100%;">
                                </td>
                                <td><?= $food["food_name"] ?></td>
                                <td><?= $food["category_name"] ?></td>
                                <td>Rp <?= number_format($food["price"], 2) ?></td>
                                <td class="d-flex flex-row flex-wrap gap-2">
                                    <!-- Edit Button -->
                                    <a class="btn btn-warning" href="food/update.php?id=<?= $food["id"] ?>">
                                        Edit
                                    </a>
                                    <form action="" method="POST">
                                        <!-- Hidden Input -->
                                        <input type="hidden" name="id" value="">
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 fw-semibold"
                                                            id="staticBackdropLabel">Warning 😪
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-start fs-6">Are you sure want to <span
                                                                class="text-danger fw-bold">DELETE</span> this
                                                            food? 😥</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="yesBtn btn btn-danger">Yes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Delete Button -->
                                        <input type="hidden" name="id" value="<?= $food["id"] ?>">
                                        <button class="btn btn-danger" id="liveAlertBtn" type="submit"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="my-3 d-flex justify-content-center">
                    <a class="btn btn-primary" href="food/create.php">
                        <span class="fw-bold font">+</span> New Food
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Area -->
    <script>
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
    const appendAlert = (message, type) => {
        const wrapper = document.createElement('div')
        wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible" role="alert">`,
            `   <div>${message}</div>`,
            '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
            '</div>'
        ].join('')
        alertPlaceholder.append(wrapper)
    }

    const forms = document.querySelectorAll("form");
    forms.forEach((form) => {
        form.addEventListener("submit", (e) => {
            e.preventDefault();
            const yesBtns = document.querySelectorAll(".yesBtn");
            yesBtns.forEach(yesBtn => {
                yesBtn.addEventListener("click", () => {
                    $('#staticBackdrop').modal("hide");
                    $("form").append(
                        "<input type='hidden' value='' name='deleteBtn'>")
                    appendAlert('Successfully Delete a Food!', 'success');
                    setTimeout(() => {
                        e.target.submit();
                    }, 1500);
                })
            })
        })
    });
    </script>
</body>

</html>