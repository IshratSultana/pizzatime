<?php
include_once "db.php";
session_start();
if (isset($_POST)) {
    if ($_POST['btnRegister']) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users (email, name, password, gender) VALUES ('$email', '$name', '$password', '$gender')";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php?registration-success=true");
            exit();
        } else {
//            echo "Error: " . $sql . "<br>" . $conn->error;
            header("Location: index.php?registration-success=false&error-type=technical");
            exit();
        }
    } elseif ($_POST['btnLogin']) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users where email='$email' and password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION['active'] = 'true';
            header("Location: dashboard.php?login=success");
            exit();
        } else {
            header("Location: index.php?login=false&error-type=technical");
            exit();
        }

    } elseif ($_POST['btnAddPizza']) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = "";

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $uploadOk = 0;
        }
        if ($uploadOk != 0) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//                echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
                $image = basename($_FILES["fileToUpload"]["name"]);
            }
        }
        if ($image != "") {
            $sql = "INSERT INTO pizza (name, description, price, image) VALUES ('$name', '$description', '$price', '$image')";

            if ($conn->query($sql) === TRUE) {
                header("Location: dashboard.php?add-success=true");
                exit();
            } else {
                header("Location: dashboard.php?add-success=false");
                exit();
            }
        } else {
            header("Location: dashboard.php?add-success=false&upload=failed");
            exit();
        }

    } elseif ($_POST['btnEditPizza']) {
        $editId = $_POST['editId'];
        $oldImg = $_POST['oldImg'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = "";

        if (($_FILES["fileToUpload"]['error'] == 0)) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }

            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                $uploadOk = 0;
            }
            if ($uploadOk != 0) {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $image = basename($_FILES["fileToUpload"]["name"]);
                }
            }
        } else {
            $image = $oldImg;
        }
        if ($image != "") {
            $sql = "UPDATE pizza SET name='$name',description='$description',image='$image',price='$price' WHERE id='$editId'";

            if ($conn->query($sql) === TRUE) {
                header("Location: dashboard.php?edit-success=true");
                exit();
            } else {
                header("Location: dashboard.php?edit-success=false");
                exit();
            }
        } else {
            header("Location: dashboard.php?edit-success=false&upload=failed");
            exit();
        }
    }

}