<?php
include "db.php";
include_once "header.php";
?>

    <!-- Banner Area Starts -->
    <section class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>the most interesting food in the world</h6>
                    <h1>Discover the <span class="prime-color">flavors</span><br>
                        <span class="style-change">of <span class="prime-color">food</span>Time</span></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img">
                        <img src="images/welcome-bg1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h3><span class="style-change">welcome</span> <br>to Pizza Time</h3>
                        <p class="pt-3">Created god gathered don't you yielding herb you had. And isn't, god was saw.
                            Dominion. Great sixth for in unto was. Open can't tree am waters brought. Divide after
                            there. Was.</p>
                        <p>Created god gathered don't you yielding herb you had. And isn't, god was saw. Dominion. Great
                            sixth for in unto was. Open can't tree waters brought. Divide after there. Was. Created god
                            gathered don't you yielding herb you had. And isn't god.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Food Area starts -->
    <section class="food-area section-padding" style="margin-left: 5rem; margin-right: 5rem">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="section-top">
                        <h3><span class="style-change">we serve</span> <br>delicious food</h3>
                        <small class="pt-3">They're fill divide i their yielding our after have him fish on there for
                            greater man moveth, moved Won't together isn't for fly divide mids fish firmament on
                            net.</small>
                    </div>
                </div>
            </div>
            <div class="row">
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
                                                    <h5><?php echo $row['name'] ?></h5>
                                                    <span class="style-change"
                                                          style="font-size: 14px !important">$<?php echo $row['price'] ?></span>
                                                </div>
                                                <small class="pt-3"><?php echo $row['description'] ?></small>
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
            </div>
        </div>
    </section>
    <!-- Food Area End -->

<?php
include_once "footer.php";
?>