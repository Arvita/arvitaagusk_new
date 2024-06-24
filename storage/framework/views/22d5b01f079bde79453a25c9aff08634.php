<!-- Navbar section Start-->
<header class="saas1 header-fixed loding-header position-absolute  custom-scroll nav-lg">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav>
                    <a class="d-inline-block m-r-auto" href="<?php echo e(url('home')); ?>">
                        <img alt="" class="img-fluid" src="<?php echo e(asset ('frontend/assets/images/logo/3.png')); ?>">
                    </a>
                    <div class="responsive-btn">
                        <a class="toggle-nav" href="#">
                            <i aria-hidden="true" class="fa fa-bars text-white"></i>
                        </a>
                    </div>
                    <div class="navbar m-l-auto " id="togglebtn">
                        <div class="responsive-btn">
                            <h5 class="btn-back">back</h5>
                        </div>
                        <ul class="main-menu">
                            <li><a href="#research">Research</a>                                
                            </li>
                            <li><a href="#publication">Publication</a>
                            </li>
                            <li><a href="#portofolio">Portfolio</a>
                            </li>
                            <li>
                                <a class="dropdown" href="#course">Course</a>
                                <ul>
                                    <li><a href="#">Android</a></li>
                                    <li><a href="#">Laravel</a></li>
                                    <li><a href="#">GIS</a></li>
                                    <li><a href="#">Codegniter</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="login-modal">
    <div aria-hidden="true" class="modal fade" id="login-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-pills mb-5" id="pills-tab-login" role="tablist">
                        <li class="nav-item">
                            <a aria-controls="pills-home" aria-selected="true" class="nav-link active" data-toggle="pill"
                               href="#pills-home" id="pills-home-tab" role="tab">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a aria-controls="pills-profile" aria-selected="false" class="nav-link" data-toggle="pill"
                               href="#pills-profile" id="pills-profile-tab" role="tab">Sign Up</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tab-Content">
                        <div aria-labelledby="pills-home-tab" class="tab-pane fade show active" id="pills-home"
                             role="tabpanel">
                            <!-- login-form -->
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail">Email</label>
                                        <input class="form-control" id="inputEmail" placeholder="Email" type="email">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword05">Password</label>
                                        <input class="form-control" id="inputPassword05" placeholder="Password"
                                               type="password">
                                    </div>
                                </div>
                                <button class="btn primary-btn btn-default">Sign in</button>
                            </form>
                            <!-- end login form -->
                        </div>
                        <div aria-labelledby="pills-profile-tab" class="tab-pane fade" id="pills-profile"
                             role="tabpanel">
                            <!-- sign up form -->
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail05">Email</label>
                                        <input class="form-control" id="inputEmail05" placeholder="Email" type="email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword04">Password</label>
                                        <input class="form-control" id="inputPassword04" placeholder="Password"
                                               type="password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Confirm Password</label>
                                        <input class="form-control" id="inputPassword4" placeholder="Password"
                                               type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input class="form-control" id="inputAddress" placeholder="1234 Main St"
                                           type="text">
                                </div>

                                <button class="btn btn-default primary-btn text-capitalize">Terms And Condition</button>
                            </form>
                            <!-- end sign up form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar section end--><?php /**PATH C:\laragon\www\arvitaagusk\resources\views\frontend\layouts\navbar.blade.php ENDPATH**/ ?>