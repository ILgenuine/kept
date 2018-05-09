<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>




    <img  width='100%' height='auto' src="assets/images/all.jpg" alt="">



    <div class="container p-5">


      <div class="mb-4">
        <select class="custom-select" id="inputGroupSelect01">
           <option selected>Choose...</option>
           <option value="1">One</option>
           <option value="2">Two</option>
           <option value="3">Three</option>
         </select>
       </div>

       <div class="mb-4">
         <input type="text" class="form-control">
       </div>

       <div class="mb-4">
         <textarea type="text" class="form-control" rows="10"></textarea>
       </div>

       <div class="mb-4">
         <button type="button" class="btn btn-lightblue">Primary</button>
         <button type="button" class="btn btn-blue">Primary</button>
         <button type="button" class="btn btn-ghost">Primary</button>
         <button class="button plus-btn"><i class="fa fa-plus"></i></button>

       </div>


      <div class="mb-4">
        <hr class="blue-hr">
      </div>

      <div class="mb-4">
        <label class="container-1">
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>

        <label class="container-1">
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </div>



    </div>



    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
