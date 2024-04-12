<!doctype html><html lang="en"><head>    <meta charset="UTF-8">    <meta name="viewport"          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <link rel="stylesheet" href="../css/bootstrap.min.css">    <link rel="preconnect" href="https://fonts.googleapis.com">    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>    <link rel="stylesheet" href="../Main.css">    <script src="../js/bootstrap.bundle.min.js"></script>    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Averia+Serif+Libre:ital,wght@1,300&family=Concert+One&family=Exo+2:ital,wght@0,700;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Paytone+One&family=Tilt+Neon&display=swap" rel="stylesheet">    <title>barrangay portal</title></head><body style="background-color: beige"><header style="background-color: #142D55" class="container-fluid d-flex justify-content-between align-items-center p-3 sticky-top ">    <h4 class="fw-bold">BRG-SYSTEM</h4>    <nav id="NavLinks" class="gap-3 ">        <a href="#section">HOME</a>        <a href="#about_us">ABOUT US</a>        <a href="#Service">SERVICES</a>        <a href="#SearchDocuments">TRUCK MY REQUEST</a>    </nav>    <i id="MenuBar" class="fa-solid fa-bars text-light"></i></header><section id="section" class="container d-lg-flex d-md-flex justify-content-around gap-3 align-items-center p-5 mt-5"><div>    <h5 style="color: #142D55" class="fw-bold">WELCOME TO</h5>    <h3  class="fw-bold text-success">BASECO PORT AREA MANILA</h3>    <h5 class="text-muted">        Blk 14  BASECO PORT AREA MANILA, <br> Open Hours Monday To Friday at <strong> (9:00 AM - 4:00 PM)</strong>.    </h5>    <button class="btn  btn-success fw-bold">ABOUT US</button></div>    <img id="cover" class="img-fluid col-lg-7" src="./../Assets/images/freepik-export-20240501153720fG5y.png" alt="cover"></section><main style="background-color: #142D55" class="container-fluid d-flex flex-column justify-content-center align-items-center mt-5 p-5">    <h2 class="text-light fw-bold">SERVICES</h2>    <h6  class="text-light fw-bold">ONLINE DOCUMENTS OFFERED</h6>    <div id="Service" class="container row justify-content-center align-items-center mt-5 gap-2">        <div class="card col-lg-3 d-flex flex-column justify-content-center align-items-center p-3">            <img width="100" class="img-fluid" src="./../Assets/images/document_pic.svg" alt="cover">            <div class="card-body">                <h5 class="fw-bold fs-6 card-title">BARRANGAY CLEARANCE</h5>                <p class="card-text text-muted">                    View the requirement needed for                    Barrangay Clearance and acquire online                    Now                </p>                <h6 class="text-muted">Fee: <span class="text-success"> 20₱</span></h6>                <h6 class="text-muted">Gcash: <span class="text-success">09997295154</span></h6>                <button class="btn btn-success fw-bold" data-bs-toggle="modal" data-bs-target="#barrangay_clearance">PROCEED</button>            </div>        </div>        <div class="card col-lg-3 d-flex flex-column justify-content-center align-items-center p-3">            <img width="100" class="img-fluid" src="./../Assets/images/document_pic.svg" alt="cover">            <div class="card-body">                <h5 class="fw-bold fs-6 card-title">RESIDENCY CERTIFICATE</h5>                <p class="card-text text-muted">                    View the requirement needed for                    Barrangay Clearance and acquire online                    Now                </p>                <h6 class="text-muted">Fee: <span class="text-success"> 40₱</span></h6>                <h6 class="text-muted">Gcash: <span class="text-success">09997295154</span></h6>                <button class="btn btn-success fw-bold">PROCEED</button>            </div>        </div>        <div class="card col-lg-3 d-flex flex-column justify-content-center align-items-center p-3">            <img width="100" class="img-fluid" src="./../Assets/images/document_pic.svg" alt="cover">            <div class="card-body">                <h5 class="fw-bold fs-6 card-title">BARRANGAY BUSINESS PERMIT</h5>                <p class="card-text text-muted">                    View the requirement needed for                    Barrangay Clearance and acquire online                    Now                </p>                <h6 class="text-muted">Fee: <span class="text-success"> 50₱</span></h6>                <h6 class="text-muted">Gcash: <span class="text-success">09997295154</span></h6>                <button class="btn btn-success fw-bold">PROCEED</button>            </div>        </div>    </div></main><section id="about_us" class="container-fluid d-lg-flex flex-column justify-content-center align-items-center mt-5 p-5">    <h2 class="text-success fw-bold">ABOUT US</h2>     <div class="container d-lg-flex justify-content-evenly align-items-center mt-4">         <h6 class="col-lg-4 text-muted">            <strong class="text-success">Welcome</strong> to the Barrangay Information System! This digital             platform serves as a comprehensive hub for all matters concerning our barrangay.             Here, residents and stakeholders can access a wide array of information and services             aimed at enhancing community engagement, transparency, and efficiency.         </h6>         <img width="400" class="img-fluid" src="./../Assets/images/about_us.svg" alt="cover">     </div></section><section id="SearchDocuments" class="container-fluid p-5 mt-5">       <h3 class="text-success fw-bold">Track Requested Documents</h3>     <div class="col-lg-4 d-flex gap-2 ">         <label for="SearchDocs"></label>         <input  type="text" class="form-control p-3" id="SearchDocs" placeholder="Enter Reference Number">         <button id="Search_btn" class="btn btn-success">Search</button>     </div></section><!-- Modal --><div class="modal fade" id="barrangay_clearance" tabindex="-1" aria-labelledby="#barrangay_clearance" aria-hidden="true">    <div class="modal-dialog modal-lg modal-dialog-centered">        <div class="modal-content">            <div class="modal-header">                <h1 class="modal-title fs-5" id="exampleModalLabel">BARRANGAY CLEARANCE</h1>                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>            </div>            <div class="modal-body d-flex flex-column gap-2">                <div>                    <label for="DocumentType">Document Type</label>                    <input class="form-control p-3 text-success" value="Barrangay Clearance" type="text" id="DocumentType" disabled>                </div>                <div>                    <label for="FullName">Full Name</label>                    <input class="form-control p-2" type="text" id="FullName" placeholder="ENTER FULL NAME">                </div>                <div>                    <label for="Pick_Up">Pick-Up Date</label>                    <input class="form-control  p-2" type="date" id="Pick_Up" placeholder="Enter Full Name">                </div>                <select id="payment_method" class="form-select  p-2" aria-label="Default select example">                    <option selected>Select Payment Method</option>                    <option value="Cash On-Pick-Up">Cash On-Pick-Up</option>                    <option value="Gcash">Gcash</option>                </select>                <div>                    <label for="Gcash_reference">Gcash Reference Number</label>                    <input class="form-control  p-2" type="text" id="Gcash_reference" placeholder="ENTER GCASH REFERENCE NUMBER">                </div>                <div class="form-floating">                    <textarea class="form-control" placeholder="what your purpose" id="Purpose" style="height: 100px"></textarea>                    <label for="Purpose">what your purpose</label>                </div>            </div>            <div class="modal-footer">                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>                <button type="button" id="Add_Request" class="btn btn-success">Submit</button>            </div>        </div>    </div></div><div class="modal fade" id="Tracking_modal_code" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered">        <div class="modal-content">            <div class="modal-header">                <h1 class="modal-title fs-5" id="exampleModalLabel">Tracking Code</h1>                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>            </div>            <div class="modal-body">                <h5 class="text-success" id="track"></h5>                <p class="text-muted">Don't forget your tracking Code!</p>            </div>            <div class="modal-footer">                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Ok</button>            </div>        </div>    </div></div><!--modal for showing the Tracking the Request Clearance--><div id="container_for_modalTracking"></div><div id="_modalTracking"></div><footer style="background-color: #142D55" class="container-fluid p-5"><p> <strong class="text-light">BRG-SYSTEM</strong> </p></footer><script src="../Main_JS/index.js"></script></body></html>