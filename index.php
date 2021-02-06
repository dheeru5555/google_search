

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
     <style>
     .form-control-borderless {
            border: none;
        }

        .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
            border: none;
            outline: none;
            box-shadow: none;
        }
     </style>
   </head>
   <body>
      <div class="container">
         <div class="img d-flex justify-content-center mt-5">
           <img src="./images/google.png" alt="" style="height:92px;width:250px;margin-top:80px;">
         </div>
         <br/>
         <div class="row justify-content-center" >
            <div class="col-12 col-md-10 col-lg-8">
               <form action="google_search.php" method="POST" class="card card-sm" style="border-radius:4.25rem;height:74px;">
                  <div class="card-body row no-gutters align-items-center">
                     <div class="col-auto">

                     </div>
                     <!--end of col-->
                     <div class="col">
                        <input name="search" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                     </div>
                     <!--end of col-->
                     <div class="col-auto">
                        <a>
                          <img src="./images/1.png" alt="" style="height:30px;width:22px;cursor:pointer;">
                        </a>
                    </div>
                  </div>
               
               <div class="img d-flex justify-content-center mt-5">
                 <button class="btn btn-lg btn-light" type="submit">Google Search</button>   
                 <button class="btn btn-lg btn-light ml-3" type="submit">I am feeling Lucky</button>   
               </div>
              </form>
            </div>
            <!--end of col-->
         </div>
      </div>
   </body>
</html>