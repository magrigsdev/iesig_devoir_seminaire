<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>

    <!--Main Navigation-->
    <header>
        <style>
            #intro {
                /* background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg); */
                background-image: url("https://images.unsplash.com/photo-1596522354195-e84ae3c98731?q=80&w=1787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
                height: 100vh;
            }

            /* Height for devices larger than 576px */
            @media (min-width: 992px) {
                #intro {
                    margin-top: -58.59px;
                }
            }

            .navbar .nav-link {
                color: #fff !important;
            }
        </style>

        <!-- Background image -->
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-md-8">
                            <h2 class="mb-3 text-white col d-flex justify-content-center"> <span class="text-primary">- </span>elian event<span class="text-primary">-</span></h2>
                            <form class="bg-white rounded shadow-5-strong p-5">
                                <!-- Email input -->
                                <div class="form-outline mb-4" data-mdb-input-init>
                                    <input type="email" id="form1Example1" class="form-control" />
                                    <label class="form-label" for="form1Example1">Email </label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4" data-mdb-input-init>
                                    <input type="password" id="form1Example2" class="form-control" />
                                    <label class="form-label" for="form1Example2">Password</label>
                                </div>

                                <!-- 2 column grid layout for inline styling -->
                                <!-- <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                       
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form1Example3"
                                                checked />
                                            <label class="form-check-label" for="form1Example3">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col text-center">
                                       
                                        <a href="#!">Forgot password?</a>
                                    </div>
                                </div> -->

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block" data-mdb-ripple-init>Connection</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <!--Main Navigation-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">
        
        <hr class="m-0" />

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">Frid Banzouzi</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->

    <!-- MDB -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

</html>