<?php
$page_title = "Contact Us - eCureHub - Advancing Healthcare in Bangladesh";
include_once('./include/header.php');
?>
            <!--  Banner Start -->
            <div class="page-banner-image w-100" style="background: url(assets/images/background/banner.png) no-repeat 0 0 / cover; background-position: center center;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 py-8">
                            <h1 class="text-primary page-title mb-3">Contact</h1>
                            <nav aria-label="breadcrumb" class="text-secondary">
                                <ol class="breadcrumb mb-0 bg-transparent p-0">
                                    <li class="breadcrumb-item"><a href=".">Home</a></li>
                                    <li class="breadcrumb-item active text-primary" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Banner End -->
            <!--  Depeartment Start -->
            <div class="full-row bg-light">
                <div class="container">
                <?php 
                    if(isset($_GET['message']))
                        {
                            ?>
                                <div class="alert alert-primary" role="alert">
                                <?php echo $_GET['message'] ; ?>
                                </div>
                            <?php
                        }
                ?>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="down-line w-100 my-4">Send Message</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <form action="./form/contact.php" method="post">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" class="form-control bg-transparent border">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" placeholder="Email Address" class="form-control bg-transparent border">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject" class="form-control bg-transparent border">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message" class="form-control bg-transparent border" cols="15" rows="6"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Depeartment End -->
            <?php include_once("./include/footer.php"); ?>