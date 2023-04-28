<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet"  href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark navbar-dark">
  <div class="container-fluid">
    <div class="a">
        <img class="navbar-brand" src="img/220px-Lathe.png" alt="logo" width="70px" height="60px">
    </div>
    <a class="navbar-brand" href="#">Turner</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link " href="index.php">Home<span class="sr-only">
              (current)</span> </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<section class="my-5">
         <div class="py-5">
             <h2 class="text-center">Contact</h2>
         </div>
        <div class="container-fluid">
            <div class="row">
              
                <div class="col-lg-6 col-md-6 col-12">
                   <h2 class="display-6">WE ARE TURNER</h2>
                   <p class="py-5"> 
                        TO contact Us fill the following form so we can under stand your requirment. YOU can also contact us using following E-mail id and Phone no. 
                         <h5>E-Mail:  turnerProbuction@gmail.com</h5>
                        <h5>Phone:   +91-789-1596-789</h5>
                   </p>
                  
              
                </div>         

              </div>
            </div> 

  <section class="my-5">
      <div class="py-5">
           <h2 class="text-center"></h2>

      </div>
        <div class="w-50 m-auto">
          <form action="userinfo.php" method="post">
              <div class="form-group">
                 <label>Username</label>
                 <input type="text" name="user" autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
                 <label>E-mail Id</label>
                 <input type="text" name="email" autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
                 <label>Mobile</label>
                 <input type="text" name="mobile" autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
                 <label>Comment</label>
                 <textarea class="form-control" type="text" name="sugest" class="form-control">
                   
                 </textarea>
              </div>
              <button type="submit" class="btn btn-outline-success"> Submit </button>
          </form>
        </div>

     </section>

 <footer>
        <p class="p-3 bg-dark text-white text-center"> @turnerProbuction  copyright &copy;2027 - All rights reserved </p>
      </footer>

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
