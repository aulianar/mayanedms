<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Login</title>
     <link rel="stylesheet" href="./css/bootstrap.css"type="text/css">
     <script src=".js/bootstrap.js"></script>
     <script src=".js/bootstrap.min.js"></script>
   </head>
   <body>
     <div class="container">
       <div class="col-md-4" style="margin-left: 337px; margin-top: 150px;" color >
         <div class="alert alert-primery">Form Login!</div>
         <form>
           <div class="form-group">
             <label for="">Username</label>
             <input type="text" name="username" class="form-control" required autocomplete="off">
           </div>
           <div class="form-group">
             <label for="">Password</label>
             <input type="password" name="password" class="form-control" placeholder="password">
           </div>
           <button type="submit" class="btn bt-sm btn-succces">Login</button>
         </form>
       </div>
     </div>
  </body>
</html>
