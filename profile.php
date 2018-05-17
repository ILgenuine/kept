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
  <a class="nav-link mybox-tab-style text-center">ข้อมูลการติดต่อ</a>
  <a class="nav-link mybox-tab-style text-center navs-active">เสียงตอบรับ / ข้อเสนอแนะ</a>
</div>
</div>

<div class="row profile-position">



	<div class="col-lg-2 col-md-0 col-sm-1 col-12"></div>


	<div class="col-lg-6 order-md-1 order-2 col-sm-7 col-12 pt-4">
			<div class="col-12 pt-2">
				<div class="form-group row p-2" >
					<label class="col-lg-4 col-form-label text-11 text-lightblue  text-mail11">คำนำหน้า</label>
					<div class="col-lg-8 ">
							<select  class="custom-select" id="inputGroupSelect01" style="width: 200px; ">
					           <option selected></option>
					           <option value="1">One</option>
					           <option value="2">Two</option>
					           <option value="3">Three</option>
					        </select>
					</div>
	
				</div>
			</div>




			<div class="col-12 pt-2">
				<div class="form-group row p-2">
					<label class="col-lg-4 col-form-label text-11 text-lightblue  text-mail11">ชื่อ</label>
					<div class="col-lg-8 ">
						<input type="text"  class="form-control">
					</div>
	
				</div>
			</div>



			<div class="col-12 pt-2">
				<div class="form-group row  p-2">
					<label class="col-lg-4 col-form-label text-11 text-lightblue  text-mail11">นามสกุล</label>
					<div class="col-lg-8 ">
						<input type="text" class="form-control">
					</div>
	
				</div>
			</div>




			<div class="col-12 pt-2">
				<div class="form-group row  p-2">
					<label class="col-lg-4 col-form-label text-11 text-lightblue  text-mail11">เบอร์โทร</label>
					<div class="col-lg-8 ">
						<input type="text" class="form-control">
					</div>
	
				</div>
			</div>



			<div class="col-12 pt-2">
				<div class="form-group row  p-2">
					<label class="col-lg-4 col-form-label text-11 text-lightblue  text-mail11">อีเมล์</label>
					<div class="col-lg-8 ">
						<input type="text"  class="form-control">
					</div>
	
				</div>
			</div>




			<div class="col-12 pt-2">
				<div class="form-group row  p-2">
					<label class="col-lg-4 col-form-label text-11 text-lightblue  text-mail11">ที่อยุ่ 1</label>
					<div class="col-lg-8 ">
						<textarea type="text" class="form-control" rows="6"></textarea>
					</div>
	
				</div> 
			</div>


					
			<div class="col-12 pt-2">
				<form>
				  <div class="form-group row pt-3">
				    <label for="colFormLabelSm" class="col-lg-4 col-form-label col-form-label-sm"></label>
				    <div class="col-lg-8 text-right">
				    	<div class="">
				      		<button class="button plus-btn mr-2" style="background-color: #21a4c0;"><i class="fa fa-plus"></i></button>
				      	</div>
				    </div>
				    	
				
				  </div>
				</form>
			</div>

			<div class="col-12 pt-1">
				  <div class="form-group row">
				  	<div class="col-lg-4">
				    	<label for="colFormLabelSm" class="col-form-label col-form-label-sm"></label>
					</div>
				    <div class="col-lg-8 text-right">
						<div class="profile-hr-size">
							<hr class="blue-hr">
						</div>				   
				    </div>
				  </div>
			</div>


			<div class="col-12 pt-2">
				<div class="form-group row  p-2">
					<div class="col-lg-4 text-11">
						<label class="col-form-label text-lightblue  text-mail11 profile-text-1366">ชื่อผู้ใช้งาน</label>
					</div>
					<div class="col-lg-8 ">
						<input type="text"  class="form-control ">
					</div>
				</div>
			</div>



			<div class="col-12 pt-2">
				<div class="form-group row  p-2" >
					<label class="col-lg-4 col-form-label text-11 text-lightblue  text-mail11">รหัสผ่าน</label>
					<div class="col-lg-8 ">
						<input type="text"  class="form-control">
					</div>
				</div>
			</div>
		

					








			<div class="col-12 pt-4">
				<div class="form-s row px-2 pb-5">
					<div class="col-lg-4 col-md-12">
					</div>  


					<div class="col-lg-4 col-md-6 col-6 profile-set-bnt-320">
						<button type="button" class="btn btn-ghost" style="width: 100%;">ยกเลิก</button>
					</div>
					<div class="col-lg-4 col-md-6 col-6 profile-set-bnt-320">
						<button type="button" class="btn btn-blue" style="width: 100%;">แก้ไขข้อมุล</button>
					</div>
					
				</div>
			</div>








	</div>

	<div class="col-lg-4  order-md-2 order-1 col-sm-4 col-12 pt-4">	
			<div class="profile-img-frame " style="margin: auto;">
				<div class="profile-img-frame">

				<div class="profile-image-frame">
		                <img src="assets/images/profile-picture.png" alt="" width="100%">
		        </div>		
	                <div class="edit">
	                  <span class="btn btn-file">
	                  <i class="fas fa-pencil-alt profile-icon-color"></i>
	                  <!--   <span class="flaticon-create-new-pencil-button " aria-hidden="true"></span> -->
	                    <input type="file">
	                  </span>
	                </div>
	              </div>
			</div>
	</div>	



			


	</div>

</div>
			






















    <?php include_once('inc/footer.php'); ?>

  </body>

</html>

<?php include_once('inc/footer-script.php'); ?>
