<?php
include "db.php";
include_once "header.php";
?>
    <style>
        label.error {
            float: none;
            color: red;
            padding-left: .5em;
            vertical-align: top;
            display: block;
        }

    </style>
    <!-- Banner Area Starts -->
    <section class="banner-area text-center banner-area-small">
        <div class="container">
            <div class="row testbox">

                <div class="col-md-12">
                    <h2>SignUp</h2>
                    <form action="backend.php" id="frmRegistration" method="post">

                        <label id="icon" for="email"><i class="fa fa-envelope-open"></i></label>
                        <input type="text" name="email" id="email" placeholder="Email" required/>
                        <br>
                        <label id="icon" for="name"><i class="fa fa-user"></i></label>
                        <input type="text" name="name" id="name" placeholder="Name" required/>
                        <br>
                        <label id="icon" for="password"><i class="fa fa-shield"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" required/>
                        <br>
                        <div class="gender">
                            <input type="radio" value="male" id="gender" name="gender" required/>
                            <label for="gender" class="radio">Male</label>
                            <input type="radio" value="female" id="gender" name="gender"/>
                            <label for="gender" class="radio">Female</label>
                        </div>
                        <a class="button">
                            <input type="submit" name="btnRegister" style="background: transparent;border: none;"
                                   value="Register">
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    <script>
        $(document).ready(function () {
            $('#frmRegistration').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    name: {
                        required: true,
                        minlength: 4,
                        maxlength: 30
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    gender: {
                        required: true
                    }
                }
            });
        });
    </script>
<?php
include "footer.php";
?>