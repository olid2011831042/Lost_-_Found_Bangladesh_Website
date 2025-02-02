<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="images/logo.png" href="images/logo.png" >
    <title>Lost and Found Bangladesh|| Admin-Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
       
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
        <div class="container">
            <ul class="nav nav-underline g-5">
                <li class="pt-1  admin-home">
                    <a href="admin-dashboard.html" class="text-decoration-none text-light pe-5">Home</a>
                </li>
             
                <li>
                    <div class="dropdown d-flex align-items-center justify-content-center pt-1 pe-3">
                        <a href="#" class="dropdown-toggle text-decoration-none text-light" id="registrationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Payment Gateway
                        </a>
                        <ul class="dropdown-menu bg-secondary-subtle" aria-labelledby="registrationDropdown">
                            <li><a class="dropdown-item fw-bold" href="#">Manage financial transactions</a></li>
                            <li><a class="dropdown-item fw-bold" href="#">View transactions details</a></li>
                            
                        </ul>
                    </div>
                </li>

                <li>
                    <div class="dropdown d-flex align-items-center justify-content-center pt-1 pe-3">
                        <a href="#" class="dropdown-toggle text-decoration-none text-light" id="registrationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Lost and found Items
                        </a>
                        <ul class="dropdown-menu bg-secondary-subtle" aria-labelledby="registrationDropdown">
                            <li><a class="dropdown-item fw-bold" href="verify.html"> Verify items</a></li>
                            <li><a class="dropdown-item fw-bold" href="lostitems.html"> View verify results</a></li>
                            
                            
                        </ul>
                    </div>
                </li>

                <li>
                    <div class="dropdown d-flex align-items-center justify-content-center pt-1 pe-3">
                        <a href="#" class="dropdown-toggle text-decoration-none text-light" id="registrationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            User Profile Management
                        </a>
                        <ul class="dropdown-menu bg-secondary-subtle" aria-labelledby="registrationDropdown">
                            <li><a class="dropdown-item fw-bold" href="#">Edit and manage user profiles</a></li>
                           
                            <li><a class="dropdown-item fw-bold" href="#">Suspend user accountsy</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <div class="dropdown d-flex align-items-center justify-content-center pt-1 pe-3">
                        <a href="#" class="dropdown-toggle text-decoration-none text-light" id="registrationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Email Notifications
                        </a>
                        <ul class="dropdown-menu bg-secondary-subtle" aria-labelledby="registrationDropdown">
                            <li><a class="dropdown-item fw-bold" href="emailnoti.html">Send automated email notifications</a></li>
                            <li><a class="dropdown-item fw-bold" href="previousmail.html">View prevoius emails</a></li>
                           
                        </ul>
                    </div>
                </li>

                <li>
                    <div class="dropdown d-flex align-items-center justify-content-center pt-1 pe-3">
                        <a href="#" class="dropdown-toggle text-decoration-none text-light" id="registrationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Help and supports
                        </a>
                        <ul class="dropdown-menu bg-secondary-subtle" aria-labelledby="registrationDropdown">
                            <li><a class="dropdown-item fw-bold" href="FAQ.html">FAQ section</a></li>
                            <li><a class="dropdown-item fw-bold" href="#">Handle inqueries</a></li>
                           
                        </ul>
                    </div>
                </li>

                
               
                <li class="nav-item">
                    <a class="nav-link text-light" href="feedback.html">Feedbacks</a>
                </li>


                
                
              </ul>
        </div>
       
        

    </nav>

    <main class="container" style="margin-top: 115px;">
        <div class="container">
            <h1 class="text-center">Edit Listing Item </h1>
    
            <div class="card item-listing my-3">
                <div class="card-body">
                    <h5 class="card-title">Lost Wallet</h5>
                    
                    <a href="lostitems.html" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
    
            <div class="card item-listing my-3">
                <div class="card-body">
                    <h5 class="card-title">Phone</h5>
                    
                    <a href="founditems.html" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
    
    
        </div>
        

    </main>

    

    
    
    
</body>
</html>