<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <title>Book My Makeup</title>
    <?php include 'include/head.php' ?>
</head>

<body>
    <?php include 'include/header.php' ?>

    <section class="user-manage-profile">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php include 'include/user_menu.php' ?>
                </div>
                <div class="col-md-9">
                    <div class="manage-user-icon">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="h2-heading">Manage Profile</h2>
                                </div>
                                <div class="col-md-3">
                                    <span class="user"><i class="fas fa-user icon icon"></i></span>
                                </div>
                                <div class="col-md-9">
                                    <form action="" id="profileForm">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" name="username" value="" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email_id" readonly />
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" name="landline_no" readonly />
                                                </div>
                                                <button type="submit" class="btn btn-pink">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- <div class="user-text">
                                        <h5>Raj Verma</h5>
                                        <p>Email: example@gmail.com</p>
                                        <p>Mobile</p>
                                        <p>Date of Birth: mm/dd/yyyy</p>
                                        <a href="#"><i class="fas fa-lock icon"></i> CHANGE PASSWORD</a>
                                        <a href="user-edit-form.php" class="user-edit"><i class="far fa-edit icon"></i> EDIT</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php' ?>
    
</body>

</html>