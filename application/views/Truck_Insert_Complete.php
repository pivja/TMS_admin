﻿<!--alert-->
<script>
	window.setTimeout(function () {
		$(".alert").fadeTo(500, 0).slideUp(500, function () {
			$(this).remove();
		});
	}, 4000);
</script>

<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>สำเร็จ! </strong>ข้อมูลรถ ได้บันทึกลงฐานข้อมูลสำเร็จแล้ว
</div>
<!--alert end-->
<h2>ข้อมูลของรถ //ทะเบียน</h2>
<div ng-app="myApp" ng-controller="GETMessenger">
	<div class="container">
		<br>
		<div class="media" style="border: 1px solid black;padding:10px;border-radius:5px;">
			<div class="col-sm-3">
				<img srcset="http://www.isuzu-truck.com/wp-content/uploads/2017/09/ISUZU-FVZ.jpg" sizes="min-width: 400px;" style="max-width:80%;max-height:40%;box-sizing:border-box;padding: 1em;">
			</div>
			<div class="col-sm-9">
				<div class="row">
					<div class="col-sm-2" style="">
					</div>
					<div class="col-sm-5" style="">

						<h4>
							ทะเบียนรถ :<i>ทบ 1302</i><br /><br />
							จังหวัด :<i>ชลบุรี</i>
						</h4>
					</div>
					<div style="margin-top:20px;">
						<button type="button" class="btn btn-default" style="margin-top:5px;">@Html.ActionLink("แก้ไขข้อมูลรถ", "Truck_Edit", "Admin_manage")</button>
					</div>
				</div>
				<hr />

				<div class="row">
					<div class="col-sm-2" style="">
					</div>
					<div class="col-sm-5" style="">
						น้ำหนักตัวรถ (ตัน) : 5270 KG.
					</div>
					<div class="col-sm-5" style="">
						<p>ลักษณะยานพาหนะ : สีขาว</p>
					</div>
				</div>
			</div>
		</div>

		<br />

	</div>
</div>

<div class="row">
	<div class="container">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" align="center">
			<button type="submit" class="btn btn-success" style="margin:5px;"> @Html.ActionLink("กลับไปยังหน้า รถบรรทุกทั้งหมด", "Truck_information", "Admin_manage", new { @style = "color:white;" })</button>
		</div>
		<div class="col-sm-4">
		</div>
	</div>
</div>
