
 <?php
include_once 'include/header.php';
?>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <form action="fun/insert_user.php" method="POST" enctype="multipart/form-data">
                            <div class="group-input">
                                <label for="username">Username  *</label>
                        	<input class="form-control" type="text" name="name" placeholder="Enter Name"><br>
                             </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
	                     <input class="form-control" type="password" name="password" placeholder="Enter Password"><br>
                            </div>
                            <div class="group-input">
                                <label for="con-pass">email*</label>
	                        <input class="form-control" type="email" name="email" placeholder="Enter email"><br>
                                 </div>
                            <div class="group-input">
                                <label for="con-pass">Phonenumber*</label>
	                         <input class="form-control" type="text" name="phone" placeholder="Enter phone"><br>
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Gender*</label>
                                <select name="gendar" class="form-control">
                             	<option selected="" disabled="">Choose</option>
                             		<option value="male">male</option>
                          		<option value="female">female</option>
                                    	</select><br>
                            </div>
	                            <input type="submit" class="btn btn-primary" name="submit" value="ADD">
                        </form>
                        <div class="switch-login">
                            <a href="./login.php" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
    
    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

   
    <?php
include_once 'include/footer.php';
?>