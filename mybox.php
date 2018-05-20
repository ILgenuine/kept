<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>
  <body>
    <?php include_once('inc/navbar.php'); ?>



    <div class="wrapper">

      <div style="position: relative;">
        <div class="nav flex-column nav-pills mybox-tab-position" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link mybox-tab-style text-center">ข้อมูลส่วนตัว</a>
          <a class="nav-link mybox-tab-style text-center navs-active">กล่องของฉัน</a>
        </div>
      </div>


      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mybox-position">
            <div class="row">
              <div class="col-md-12">
                <div class="text-right">
                  <button class="button plus-btn mybox-bnt-size"><i class="fa fa-plus"></i></button>
                </div>
              </div>


              <div class="col-lg-2 col-12 responsive-display-none">

              </div>


              <div class="col-lg-10 col-12 my-5">

                <div class="table-responsive mybox-table-position-rps" style="border: 1px solid #dee2e6;">
                   <table class="table">
                      <thead>
                        <tr>
                          <th class="text-grey">No.</th>
                          <th class="text-grey">รูปภาพ</th>
                          <th class="text-grey">ประเภทกล่อง</th>
                          <th class="text-grey">ชื่อกล่อง</th>
                          <th class="text-grey">สถานะ</th>
                          <th class=""></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-lightblue">1.</td>
                          <td class="text-blue">
                            <div class="mybox-image-frame">
                              <img class="mybox-img-test" src="assets/images/avatar.png" alt="">
                            </div>
                          </td>
                          <td class="text-lightblue">Standart</td>
                          <td class="text-lightblue">กล่องหนังสือ</td>
                          <td class="text-lightblue">Confirm Order</td>
                          <td class=""><a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg"><u class="text-lightblue">ดูรายละเอียด</u></a></td>
                        </tr>

                        <tr>
                          <td class="text-lightblue">2.</td>
                          <td class="text-blue">
                            <div class="mybox-image-frame">
                              <img class="mybox-img-test" src="http://via.placeholder.com/100x100" alt="">
                            </div>
                          </td>
                          <td class="text-lightblue">Standart</td>
                          <td class="text-lightblue">กล่องหนังสือ</td>
                          <td class="text-lightblue">Confirm Order</td>
                          <td class=""><a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg"><u class="text-lightblue">ดูรายละเอียด</u></a></td>
                        </tr>

                        <tr>
                          <td class="text-lightblue">3.</td>
                          <td class="text-blue">
                            <div class="mybox-image-frame">
                              <img class="mybox-img-test" src="http://via.placeholder.com/100x100" alt="">
                            </div>
                          </td>
                          <td class="text-blue">KEPT</td>
                          <td class="text-lightblue">กล่องหนังสือ</td>
                          <td class="text-lightblue">Confirm Order</td>
                          <td class=""><a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg"><u class="text-lightblue">ดูรายละเอียด</u></a></td>
                        </tr>


                        <tr>
                          <td class="text-lightblue">4.</td>
                          <td class="text-blue">
                            <div class="mybox-image-frame">
                              <img class="mybox-img-test" src="http://via.placeholder.com/100x100" alt="">
                            </div>
                          </td>
                          <td class="text-lightblue">Standart</td>
                          <td class="text-lightblue">กล่องหนังสือ</td>
                          <td class="text-lightblue">Confirm Order</td>
                          <td class=""><a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg"><u class="text-lightblue">ดูรายละเอียด</u></a></td>
                        </tr>


                        <tr>
                          <td class="text-lightblue">5.</td>
                          <td class="text-blue">
                            <div class="mybox-image-frame">
                              <img class="mybox-img-test" src="http://via.placeholder.com/100x100" alt="">
                            </div>
                          </td>
                          <td class="text-blue">KEPT</td>
                          <td class="text-lightblue">กล่องหนังสือ</td>
                          <td class="text-lightblue">Confirm Order</td>
                          <td class=""><a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg"><u class="text-lightblue">ดูรายละเอียด</u></a></td>

                      </tbody>
                    </table>
                </div>
              </div>

            </div>
          </div>
        </div>



        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog mybox-modal-lg">

            <div class="modal-content mybox-content">

              <div class="mybox-modal-header">
                  <div class="col-md-6 text-right">
                    <div class="text-left text-blue mybox-head-font-responsive">
                      <p class="mybox-font-responsive">รายละเอียดกล่อง</p>
                    </div>
                  </div>
                  <div class="col-md-6 text-right">
                    <button type="button" class="btn mybox-bnt-close" data-dismiss="modal" aria-hidden="true">
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                  </div>
              </div>



              <div class="mybox-modal-body">
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-10 px-3 py-3">
                    <div class="mybox-table-model-rps" style="border: 1px solid #dee2e6;">
                       <table class="table mybox-header">
                          <thead>

                            <tr>
                              <th width="17.5%" class="text-center px-2 mybox-head-font-responsive">กล่องหนังสือ</th>
                              <th width="17.5%" class="text-center px-2 mybox-head-font-responsive">ประเภท Standart</th>
                              <th width="17.5%" class="text-center px-2 mybox-head-font-responsive">กล่อง กกXยยXสส</th>
                              <th width="17.5%" class="text-center px-2 mybox-head-font-responsive">2018/03/03</th>
                              <th width="30%" class="text-right pr-4">
                                <a href="#"><i class="fa fa-cog text-lightblue" aria-hidden="true" style="font-size: 30px;"></i></a>
                              </th>
                            </tr>

                            <tr>
                              <th class="text-left px-4 mybox-head-font-responsive" colspan="5" style="background-color: #fff;">รายละเอียด</th>
                            </tr>

                          </thead>


                          <tbody>
                            <tr>
                              <td class="text-left" colspan="5">
                                <!-- mybox-model-px-bod -->
                                <div class="row mybox-model-px-body">
                                  <div class="col-lg-4 col-6 pt-4 pb-4">
                                    <div class="mybox-image-frame-model">
                                      <img class="mybox-img-test w100" src="http://via.placeholder.com/300x300" alt="">
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-6 pt-4 pb-4">
                                    <div class="mybox-image-frame-model">
                                      <img class="mybox-img-test w100" src="assets/images/box1.jpg" alt="">
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-6 pt-4 pb-4">
                                    <div class="mybox-image-frame-model">
                                      <img class="mybox-img-test w100" src="http://via.placeholder.com/300x300" alt="">
                                    </div>
                                  </div>

                                  <div class="col-lg-4 col-6 pt-4 pb-4">
                                    <div class="mybox-image-frame-model">
                                      <img class="mybox-img-test w100" src="http://via.placeholder.com/300x300" alt="">
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-6 pt-4 pb-4">
                                    <div class="mybox-image-frame-model">
                                      <img class="mybox-img-test w100" src="http://via.placeholder.com/300x300" alt="">
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-6 pt-4 pb-4">
                                    <div class="mybox-image-frame-model">
                                      <img class="mybox-img-test w100" src="http://via.placeholder.com/300x300" alt="">
                                    </div>
                                  </div>
                                </div>


                              </td>

                            </tr>
                          </tbody>

                        </table>

                      </div>

                  <div class="col-1"></div>
                </div>
              </div>
            </div>



              <div class="modal-footer mb-4" style="border-top: none;">
                <div class="col-1"></div>
                <div class="col-10 mybox-modal-footer">

                  <div class="text-right mybox-modal-footer-responsive">
                    <button type="button" class="btn btn-lightblue mybox-btn-model">ตกลง</button>
                  </div>
                </div>
                <div class="col-1"></div>
              </div>


            </div>
          </div>
        </div>


            <div class="row mybox-navigation">
              <div class="col-12">
                <nav aria-label="Page navigation example">
                  <ul class="pagination  justify-content-center">
                    <li class="page-item"><a class="webboard-page-link webboard-bordernone responsive-display-none" href="#">Previous</a></li>
                    <li class="page-item"><a class="webboard-page-link webboard-bordernone mr-3" href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>
                    <li class="page-item"><a class="webboard-page-link" href="#">1</a></li>
                    <li class="page-item"><a class="webboard-page-link" href="#">2</a></li>
                    <li class="page-item"><a class="webboard-page-link" href="#">3</a></li>
                    <li class="page-item"><a class="webboard-page-link" href="#">4</a></li>
                    <li class="page-item"><a class="webboard-page-link webboard-bordernone ml-3" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                    <li class="page-item"><a class="webboard-page-link webboard-bordernone responsive-display-none" href="#">Next</a></li>
                  </ul>
                </nav>
              </div>
            </div>


      </div>






      </div>


    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
