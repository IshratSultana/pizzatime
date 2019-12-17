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

        ​
    </style>
    <!-- Banner Area Starts -->
    <section class="banner-area text-center banner-area-small">
        <div class="container">
            <div class="row testbox">
                <div class="col-md-12">
                    <h2>Login</h2>
                </div>
                <div class="col-lg-12">
                    <form id="frmLogin" action="backend.php" method="post">

                        <label id="icon" for="email"><i class="fa fa-envelope-open"></i></label>
                        <input type="text" name="email" id="email" placeholder="Email" required/>
                        <br>
                        <label id="icon" for="password"><i class="fa fa-shield"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" required/>
                        <br>
                        <a class="button">
                            <input type="submit" name="btnLogin" style="background: transparent;border: none;"
                                   value="Login">
                        </a>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    <script>
        $(document).ready(function () {
            $('#frmLogin').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                }
            });
        });
    </script>

<?php
include_once "footer.php";
?>