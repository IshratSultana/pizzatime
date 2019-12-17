<?php
session_start();
include_once "db.php";
include_once "header.php";
?>
<style>
    .food-img img {
        height: 250px !important;
        width: 350px;
    }

    h4 {
        color: black !important;
    }

    label.error {
        float: none;
        color: red;
        padding-left: .5em;
        vertical-align: top;
        display: block;
    }
</style>
<?php
$edit_pizza = "";
if(isset($_GET['operation']) && isset($_GET['id'])) {
    if($_GET['operation'] == 'edit') {
        $id = $_GET['id'];
        $sql = "SELECT * FROM pizza WHERE id='$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $edit_pizza = $result->fetch_assoc();
        }
    }
}
?>
<section class="m-5">
    <div class="container">
        <h4 class="mb-4">ADD NEW PIZZA</h4>
        <div class="row">
            <form id="frmAddPizza" action="backend.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Pizza Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?php echo $edit_pizza != "" ? $edit_pizza['name'] : '';?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description"
                           placeholder="Description" value="<?php echo $edit_pizza != "" ? $edit_pizza['description'] : '';?>">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Price" value="<?php echo $edit_pizza != "" ? $edit_pizza['price'] : '';?>">
                </div>
                <div class="form-group">
                    <img id="preview" style="height: 250px; width: 350px;" src="<?php echo $edit_pizza != "" ?  'uploads/'.$edit_pizza['image'] : 'images/pizza.jpg'; ?>" alt="<?php echo $edit_pizza != "" ? $edit_pizza['name'] : ''; ?>" />
                    <input type="file" class="form-control" name="fileToUpload"
                           accept="image/gif, image/jpeg, image/jpg, image/png" id="fileToUpload">
                </div>
                <input type="hidden" name="editId" value="<?php  echo $edit_pizza != '' ? $edit_pizza['id']: '';?>">
                <input type="hidden" name="oldImg" value="<?php  echo $edit_pizza != '' ? $edit_pizza['image']: '';?>">
                <a class="btn-primary">
                    <input type="submit" name="<?php echo $edit_pizza == '' ? 'btnAddPizza': 'btnEditPizza'; ?>"
                           value="<?php echo $edit_pizza == '' ? 'Add Pizza': 'Edit Pizza'; ?>">
                </a>
            </form>
        </div>
    </div>
</section>
<section class="food-area mb-5">
    <div class="container">
        <div class="row">
            <?php
            $sql = "SELECT * FROM pizza";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-food mt-5">
                            <div class="food-img">
                                <img src="uploads/<?php echo $row['image'] ?>" class="img-fluid"
                                     alt="<?php echo $row['image'] ?>">
                            </div>
                            <div class="food-content">
                                <div class="d-flex justify-content-between mb-2">
                                    <h5><?php echo $row['name']?></h5>
                                    <span class="style-change" style="font-size: 14px !important">$<?php echo $row['price']?></span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <a href="dashboard.php?operation=edit&id=<?php echo $row['id'];?>" style="color: dimgrey" title="Edit" data-toggle="tooltip"><i class="fa fa-edit fa-2x"></i></a>
                                    <a href="delete.php?operation=delete&id=<?php echo $row['id'];?>" style="color: dimgrey" title="Delete" data-toggle="tooltip"><i class="fa fa-trash fa-2x"></i></a>
                                </div>
                                <small class="pt-3"><?php echo $row['description']?></small>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $('#frmAddPizza').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 4
                },
                description: {
                    required: true,
                    minlength: 4,
                    maxlength: 40
                },
                price: {
                    required: true,
                    minlength: 1
                },
                image: {
                    required: true
                }
            }
        });
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#fileToUpload").change(function() {
        readURL(this);
    });
</script>
<?php
include_once "footer.php";
?>
