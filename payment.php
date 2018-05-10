<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>
<!-- ============== Navbar ================== -->
<div class="wrapper">

    <div class="container">
<!-- ====================== TABLE ======================= -->
      <div class="row px-5 payment-position-responsive">
        <div class="col-md-12 pt-5 pb-4">
            <p class="text-lightblue ">รายการชำระเงินทั้งหมด</p>
        </div>

        <div class="col-md-12">
          <div class="table-responsive">
             <table class="table">
                <thead>
                  <tr>
                    <th class="text-grey">No.</th>
                    <th class="text-grey">ประเภทกล่อง</th>
                    <th class="text-grey">ชื่อกล่อง</th>
                    <th class="text-grey">ราคา</th>
                    <th class="text-grey">สถานะ</th>
                    <th class=""></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-lightblue">1.</td>
                    <td class="text-blue">KEPT</td>
                    <td class="text-lightblue">กล่องหนังสือ</td>
                    <td class="text-lightblue">100</td>
                    <td class="text-lightblue">Confirm Orser</td>
                    <td class=""><a href="#"><u class="text-lightblue">ดูรายละเอียด</u></a></td>
                  </tr>

                  <tr>
                    <td class="text-lightblue">2.</td>
                    <td class="text-lightblue">KEPT</td>
                    <td class="text-lightblue">กล่องหนังสือ</td>
                    <td class="text-lightblue">100</td>
                    <td class="text-lightblue">Confirm Orser</td>
                    <td class=""><a href="#"><u class="text-lightblue">ดูรายละเอียด</u></a></td>
                  </tr>

                  <tr>
                    <td class="text-lightblue">3.</td>
                    <td class="text-lightblue">KEPT</td>
                    <td class="text-lightblue">กล่องหนังสือ</td>
                    <td class="text-lightblue">100</td>
                    <td class="text-lightblue">Confirm Orser</td>
                    <td class=""><a href="#"><u class="text-lightblue">ดูรายละเอียด</u></a></td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>
<!-- ====================== END-TABLE ======================= -->

      <div class="row px-5 my-5 payment-position-responsive">
        <div class="col-md-12 pb-3">
          <h5 class="text-lightblue">ข้อมูลการชำระเงิน</h5>
        </div>


<!-- ========================= paypal ======================================= -->
        <div class="col-lg-6 pb-4">
          <div class="payment-card">
            <div class="payment-card-header">
              <div class="row">
                <div class="col-sm-1 col-2">
                  <div class="payment-radio-top-5">
                    <label class="payment-radio">
                      <input type="radio" checked="checked" name="radio">
                      <span class="payment-checkmark"></span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-11 col-10">
                  <div><img src="assets/images/paypallogo.png" class="payment-logosize"></div>
                </div>
              </div>
            </div>
            <div class="payment-card-body">
              <div>
                <form class="pr-4 mb-3 payment-from-responsive">
                    <div class="form-group row mb-3">
                      <label class="col-sm-4 col-form-label text-right payment-crad-responsive-sm"></label>
                      <div class="col-sm-8 payment-crad-responsive-sm">
                        <div class="text-grey text-center mb-3">
                          <h5>Login wiht Paypal</h5>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <label class="col-lg-4 col-3 payment-crad-responsive-sm col-form-label text-right text-lightblue">Email</label>
                      <div class="col-lg-8 col-9 payment-crad-responsive-sm">
                        <input type="email" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <label class="col-lg-4 col-3 payment-crad-responsive-sm col-form-label text-right text-lightblue">Password</label>
                      <div class="col-lg-8 col-9 payment-crad-responsive-sm">
                        <input type="password" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row mb-3">
                      <label class="col-lg-4 col-3 payment-crad-responsive-sm col-form-label text-right"></label>
                      <div class="col-lg-8 col-9 payment-crad-responsive-sm">
                        <div class="text-center"><button type="button" class="btn btn-blue width100">LOGIN</button></div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-lg-4 col-3 payment-crad-responsive-sm col-form-label text-right"></label>
                      <div class="col-lg-8 col-9 payment-crad-responsive-sm">
                        <div class="text-center payment-loginsize">
                          <a href="#" style="color: grey;;">Forget your Password?</a>
                        </div>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>



<!-- ========================= mastercard ======================================= -->

        <div class="col-lg-6 pb-4">
          <div class="payment-card">
            <div class="payment-card-header">
              <div class="row">
                <div class="col-sm-1 col-2">
                  <div class="payment-radio-top-5">
                    <label class="payment-radio">
                      <input type="radio" name="radio">
                      <span class="payment-checkmark"></span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-11 col-10">
                  <div><img src="assets/images/visa-and-mastercard-logo-26.png" class="payment-logosize"></div>
                </div>
              </div>
            </div>
            <div class="payment-card-body">
              <div>
                <form class="pr-4 mb-3 payment-from-responsive">
                    <div class="form-group row mb-4">
                      <label class="col-lg-5 col-3 payment-crad-responsive-sm col-form-label text-right text-lightblue">card number</label>
                      <div class="col-lg-7 col-9 payment-crad-responsive-sm">
                        <input type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-lg-5 col-3 payment-crad-responsive-sm col-form-label text-right text-lightblue">card name</label>
                      <div class="col-lg-7 col-9 payment-crad-responsive-sm">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-lg-5 col-3 payment-crad-responsive-sm col-form-label text-right text-lightblue">expired Date</label>
                      <div class="col-lg-7 col-9 payment-crad-responsive-sm">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-lg-5 col-3 payment-crad-responsive-sm col-form-label text-right text-lightblue">CVV</label>
                      <div class="col-lg-7 col-9 payment-crad-responsive-sm">
                        <input type="text" class="form-control" style="width: 50%;">
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-md-12">
          <div class="text-center payment-my-5">
            <button type="button" class="btn btn-ghost mx-2 my-2 payment-bnt-size ">ยกเลิก</button>
            <button type="button" class="btn btn-blue mx-2 my-2 payment-bnt-size ">ยืนยันการขำระเงิน</button>
          </div>
        </div>
      </div>


    </div>

</div>

<!-- ============== Footet ================== -->
    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
