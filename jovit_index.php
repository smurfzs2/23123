<?php
include "jovit_connection.php";
?>

<!doctype html>
<html lang="en">

<head>

    <title>EXERCISE 8 QUICK TABLE</title>
    <link rel="stylesheet" href="jovit_style.css">

    <!-- links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="...">
</head>

<body>

    <div class="container">
        <div class="mt-3">
            <h3 class="text-center">QUICK TABLE</h3>
            <h3 class="text-center">EXERCISE 8</h3>

        </div>



        <!-- TABLES -->
        <div class="card">
            <div class="card-header bg-dark text-white">
                Table Data
            </div>
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add
                </button>
                <table class="table table-bordered table-striped table hover">
                    <tr>
                        <th>ID</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>GENDER</th>
                        <th>BIRTH DATE</th>
                        <th>ADDRESS</th>
                        <th>DEPARTMENT</th>
                        <th>ACTIONS</th>
                    </tr>

                    <?php
                    $idnumber = 1;
                    $query = mysqli_query($conn, "SELECT * FROM tbl_jovit2");
                    while ($data = mysqli_fetch_array($query)) :

                    ?>
                        <tr>

                            <td><?= $idnumber++ ?></td>
                            <td><?= $data['firstName'] ?> </td>
                            <td><?= $data['lastName'] ?> </td>
                            <td><?= $data['gender'] ?> </td>
                            <td><?= $data['birthDate'] ?> </td>
                            <td><?= $data['address'] ?> </td>
                            <td><?= $data['departmentId'] ?> </td>
                            <td>
                                <a href="#" class="btn btn-warning"><i class="fas fa-trash"></i> </a>
                                <a href="#" class="btn btn-warning"></a><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>




                <!-- Modal insert -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Enter Details Here!</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>


                            <!-- Input Details Here -->
                            <form action="jovit_insertData.php" method="POST">
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="firstName" placeholder="First Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="lastName" placeholder="Last Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender">Gender:</label>
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" name="birthDate" required>
                                    </div>
                                    <div class="mb-3">
                                        <textarea type="text" class="form-control" name="address" placeholder="Address" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="departmentId" placeholder="Department ID" required>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-dark" name="saveData">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- modal update -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Enter Details Here!</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>


                            <!-- Input Details Here -->
                            <form action="jovit_insertData.php" method="POST">
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="firstName" placeholder="First Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="lastName" placeholder="Last Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender">Gender:</label>
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" name="birthDate" required>
                                    </div>
                                    <div class="mb-3">
                                        <textarea type="text" class="form-control" name="address" placeholder="Address" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="departmentId" placeholder="Department ID" required>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-dark" name="saveData">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>













            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>