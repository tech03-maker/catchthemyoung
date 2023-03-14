<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ctygroupofschools.com</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../assets/css/studentinfo.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    <div id="preloader">
        <div class="loader">
            <img src="../assets/images/images_-_2023-03-09T054918.428-removebg-preview.png" alt="">
        </div>
    </div>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #115280; text-align: center; justify-content: center;">
        <div class="container">
            <img src="../assets/images/images_-_2023-03-09T054918.428-removebg-preview.png" alt="">
            <!-- <a class="navbar-brand" href="#">CTY</a> -->
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="../index.php" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/studentinfo.html">Student Info</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/admission.html">Admission</a>
                    </li>
                </ul>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-light  btn-lg" data-bs-toggle="modal" data-bs-target="#modalId" style="border: none;">
                  <i class="fa fa-search" style="color: #115280"></i>
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">Search</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                            <div class="modal-body">
                                <div class="cont container-fluid">
                                    <input class="w-75" type="text" placeholder="Type here...">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn" style="background-color: #115280; color: white;">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div>
            <h2 class="login text-center">Student Sign up</h2>
            <form class="justify-content-center text-center" action="../process/user/sign_up.php" method='POST'>
                <div class="form w-50 m-auto justify-content-center">
                    <img class="m-auto" src="../assets/images/images_-_2023-03-09T054918.428-removebg-preview.png" alt="">
                    
                    <input type="text" name="name" id="input" class="mt-4 form-control w-50" value="" required="required" placeholder="Your Name">
                    <input type="email" name="email" id="input" class="mt-4 form-control w-50" value="" required="required" placeholder="Your Email">
                    <input type="password" name="password" id="input" class="mt-4 form-control w-50" value="" required="required" placeholder="Your Password">
                    
                    <button type="submit" name="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>    

    <footer class="footer-16371">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9 text-center">
              <div class="footer-site-logo mb-4">
                <a href="../index.html">C.T.Y</a>
                <p>No 1, Suara Akande, Behind FoodCo Building, Adeoyo Ibadan</p>

              </div>
              <ul class="list-unstyled nav-links mb-5">
                <li><a href="../pages/about.html">About</a></li>
                <li><a href="../index.html">Services</a></li>
                <li><a href="../pages/contact.html">Contact</a></li>
              </ul>
  
              <div class="social mb-4">
                <h3>Stay in touch</h3>
                <ul class="list-unstyled">
                  <li class="in"><a href="#"><span><i class="fab fa-instagram"></i></span></a></li>
                  <li class="fb"><a href="#"><span><i class="fab fa-facebook"></i></span></a></li>
                  <li class="tw"><a href="#"><span><i class="fab fa-twitter"></i></span></a></li>
                  <li class="pin"><a href="#"><span><i class="fab fa-whatsapp"></i></span></a></li>
                </ul>
              </div>
  
              <div class="copyright">
                <p class="mb-0"><small>&copy; I-TECH(2023). All Rights Reserved.</small></p>
              </div>
  
  
            </div>
          </div>
        </div>
</body>
<script>
    var modalId = document.getElementById('modalId');

    modalId.addEventListener('show.bs.modal', function (event) {
          // Button that triggered the modal
          let button = event.relatedTarget;
          // Extract info from data-bs-* attributes
          let recipient = button.getAttribute('data-bs-whatever');

        // Use above variables to manipulate the DOM
    });
</script>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/jquery-3.3.1.min.js  "></script>
<script src="../assets/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
</html>