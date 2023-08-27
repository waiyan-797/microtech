<section>
    <div class="row d-flex justify-content-between align-items-center bg-dark py-1 px-4">
        <div class="col-12 col-md-4 ">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="" class="text-decoration-none text-white texthovers">Log in</a></li>
                <li class="list-inline-item"><a href="" class="text-decoration-none text-white texthovers">Register</a></li>


            </ul>

        </div>
        <div class="col-12 col-md-4 ">
            <p class="text-white text-center">Welcome to our online store !</p>
        </div>

        <div class="col-12 col-md-4 d-flex justify-content-start justify-content-md-end">
            <form action="">
                <select name="" id="" class="rounded-3 border-0 p-1 ">
                    <option value="usd">USD</option>
                    <option value="eur">EUR</option>
                    <option value="mmk">MMK</option>

                </select>
            </form>
        </div>

    </div>


    <nav class="navbar navbar-expand-lg bg-body-tertiary border ">
        <div class="container-fluid d-flex justify-content-between">
            <div class="col-6 d-flex align-items-center justify-content-center justify-content-md-start">
                <a href="" class="text-decoration-none  text-secondary brandnames"><span class="text-primary">Mi</span><span class="text-danger">cro</span><span class="text-info">tech</span></a>
            </div>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nabvars">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="nabvars" class="col-6 justify-content-center navbar-collapse collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="" class="nav-link text-primary fs-4 mx-2 texthover">Home</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-primary fs-4 mx-2 texthover">Product</a></li>
                    <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle text-primary fs-4 mx-2 texthover" data-bs-toggle="dropdown">Category</a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item border-bottom text-primary fs-4 texthover">Monitors</a></li>
                            <li><a href="" class="dropdown-item border-bottom text-primary fs-4 texthover">Hard Drives</a></li>
                            <li><a href="" class="dropdown-item border-bottom text-primary fs-4 texthover">Keyboard / mise</a></li>
                            <li><a href="" class="dropdown-item text-primary fs-4 texthover">Accessories</a></li>


                        </ul>
                    </li>
                    <li class="nav-item"><a href="" class="nav-link text-primary fs-4 mx-2 texthover">Blog</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-primary fs-4 mx-2 texthover">Contact us</a></li>

                </ul>
            </div>

        </div>

    </nav>


</section>

<!-- ASTRT BANDER SECTION  -->
<section class="">
    <div class="container-fluid d-flex justify-content-center ">
        <div class="row col-10 mt-4" style="height:500px">
            <div id="banderscrousel" class="carousel slide carousel-fade shadow-lg">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#banderscrousel" data-bs-slide-to="0" class="active bg-info"></button>
                    <button type="button" data-bs-target="#banderscrousel" data-bs-slide-to="1" class="bg-info"></button>
                    <button type="button" data-bs-target="#banderscrousel" data-bs-slide-to="2" class="bg-info"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active">
                        <img src="{{asset('image/slide1_image.webp')}}" style="height:550px" alt="...">
                        <div class="text-center banders">
                            <h3 class="fs-1 fw-bold">Mackbook Pro</h3>
                            <p class="fs-6 fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="fs-4 text-danger">$2000</p>
                            <a href="" class="text-uppercase btn btn-outline-info">shop now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('image/slide2_image.webp')}}" class="d-block w-75"  style="height:550px" alt="...">
                        <div class="text-center banders">
                            <h3 class="fs-1 fw-bold">Mackbook Pro</h3>
                            <p class="fs-6 fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="fs-4 text-danger">$2000</p>
                            <a href="" class="text-uppercase btn btn-outline-info">shop now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('image/slide3_image.webp')}}" class="d-block w-75"  style="height:550px" alt="...">
                        <div class="text-center banders">
                            <h3 class="fs-1 fw-bold">Mackbook Pro</h3>
                            <p class="fs-6 fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p class="fs-4 text-danger">$2000</p>
                            <a href="" class="text-uppercase btn btn-outline-info">shop now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>
<!-- END BANDER SECTION  -->
