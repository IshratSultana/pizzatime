<!-- Footer Area Starts -->
<footer class="footer-area">
    <div class="footer-widget section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-widget single-widget1">
                        <a href="index.html"><img src="images/logo/logo.png" alt=""></a>
                        <p class="mt-3">Which morning fourth great won't is to fly bearing man. Called unto shall seed, deep, herb set seed land divide after over first creeping. First creature set upon stars deep male gathered said she'd an image spirit our</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-widget single-widget2 my-5 my-md-0">
                        <h5 class="mb-4">contact us</h5>
                        <div class="d-flex">
                            <div class="into-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="info-text">
                                <p>1234 Some St San Francisco, CA 94102, US 1.800.123.4567 </p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="into-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="info-text">
                                <p>(123) 456 78 90</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="into-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="info-text">
                                <p>support@axiomthemes.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-widget single-widget3">
                        <h5 class="mb-4">opening hours</h5>
                        <p>Monday ...................... Closed</p>
                        <p>Tue-Fri .............. 10 am - 12 pm</p>
                        <p>Sat-Sun ............... 8 am - 11 pm</p>
                        <p>Holidays ............. 10 am - 12 pm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
<?php
if (isset($_GET['registration-success'])) {
    if($_GET['registration-success'] == 'true') {
        echo '<script type="text/javascript">$.growl.notice({ title: "Registration", message: "Registration Successful" });</script>';
    } else {
        echo '<script type="text/javascript">$.growl.error({ title: "Registration", message: "Registration Failed" });</script>';
    }
} elseif (isset($_GET['login'])) {
    if($_GET['login'] == 'success') {
        echo '<script type="text/javascript">$.growl.notice({ title: "Login", message: "Login Successful" });</script>';
    } else {
        echo '<script type="text/javascript">$.growl.error({ title: "Login", message: "Login Failed" });</script>';
    }
} elseif ($_GET['logged-out']) {
    if($_GET['logged-out'] == 'true') {
        echo '<script type="text/javascript">$.growl.notice({ title: "Login", message: "Successfully Logged out." });</script>';
    }
} elseif ($_GET['add-success']) {
    if($_GET['add-success'] == 'true') {
        echo '<script type="text/javascript">$.growl.notice({ title: "Login", message: "Pizza Added Successfully" });</script>';
    } elseif ($_GET['upload'] == 'failed') {
        echo '<script type="text/javascript">$.growl.error({ title: "Login", message: "Image Upload Failed" });</script>';
    } else {
        echo '<script type="text/javascript">$.growl.error({ title: "Login", message: "Add Operation Failed" });</script>';
    }
} elseif ($_GET['edit-success']) {
    if($_GET['edit-success'] == 'true') {
        echo '<script type="text/javascript">$.growl.notice({ title: "Login", message: "Pizza Updated Successfully" });</script>';
    } elseif ($_GET['upload'] == 'failed') {
        echo '<script type="text/javascript">$.growl.error({ title: "Login", message: "Image Upload Failed while Updating" });</script>';
    } else {
        echo '<script type="text/javascript">$.growl.error({ title: "Login", message: "Edit Operation Failed" });</script>';
    }
} elseif ($_GET['delete-success']) {
    if($_GET['delete-success'] == 'true') {
        echo '<script type="text/javascript">$.growl.notice({ title: "Login", message: "Pizza deleted Successfully" });</script>';
    } else {
        echo '<script type="text/javascript">$.growl.error({ title: "Login", message: "Delete Operation Failed" });</script>';
    }
}
?>

</body>
</html>
