﻿<link href="~/Content/Search.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php require('template/menu.php') ?>
<br />
<div ng-app="myApp">
	<div ng-controller="TruckInfo">
		<div class="row">
			<div class="container">
				<div class="col-lg-6" align="left">
					<h2>รถบรรทุกทั้งหมด</h2><br />
					<button type="button" class="btn btn-info" text color="white" ng-click="openData()" ng-if="action === 'open'">+&nbsp;เพิ่มข้อมูลรถ</button>
					<button type="button" class="btn btn-danger" text color="white" ng-click="closeData()" ng-if="action === 'close'">ปิด</button>
				</div>
				<div class="col-lg-6" align="right" style="padding:25px;">
					<form>
						<input type="text" name="search" placeholder="Search" align="right">
					</form>
				</div>
			</div>
		</div>
		<div ng-show="truckinsert">
			<h3>เพิ่มข้อมูลรถ</h3>
			<div class="row ws-content">
				<div class="container">

					<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
						<label for="sel1">ทะเบียนรถ : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></span>
							<input type="text" class="form-control" placeholder="เลขที่" aria-describedby="basic-addon1">
						</div>
						<br />
						<label for="sel1">จังหวัด : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></span>
							<input type="text" class="form-control" placeholder="จังหวัด" aria-describedby="basic-addon1">
						</div>
						<br />
						<label for="sel1">น้ำหนักตัวรถ (ตัน) : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span></span>
							<input type="text" class="form-control" placeholder="น้ำหนักตัวรถ (ตัน)" aria-describedby="basic-addon1">
						</div>
						<br />
						<label for="sel1">ประเภทรถ : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span></span>
							<input type="text" class="form-control" placeholder="ประเภทรถ" aria-describedby="basic-addon1">
						</div>
						<br />
					</div>
					<div class="col-md-6 col-md-push-1" style="margin-top:10px;margin-bottom:10px;">
						<label for="sel1">gpsdevice : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
							<input type="text" class="form-control" placeholder="gpsdevice" aria-describedby="basic-addon1">
						</div>
						<br />
						<label for="sel1">ลักษณะยานพาหนะ : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span></span>
							<textarea type="text" class="form-control" placeholder="ลักษณะยานพาหนะ" aria-describedby="basic-addon1" rows="3"></textarea>
						</div>
						<br />
						<label for="sel1">คนขับรถ : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span></span>
							<textarea type="text" class="form-control" placeholder="คนขับรถ" aria-describedby="basic-addon1" rows="3"></textarea>
						</div>
						<br />
						<label for="sel1">รูปภาพ : </label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></span>
							<input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple />
						</div><br />
						<div class="row" id="image_preview"></div>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="container">
					<div class="col-sm-4"></div>
					<div class="col-sm-4" align="center">
						<button type="submit" class="btn btn-success" style="margin:5px;">ตกลง</button>
						<button type="reset" class="btn btn-warning" style="margin:5px;" font color="white">เคลียร์ข้อมูล</button>
					</div>
					<div class="col-sm-4">
					</div>
				</div>
			</div>

			<script>
				function preview_images() {
					var total_file = document.getElementById("images").files.length;
					for (var i = 0; i < total_file; i++) {
						$('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
					}
				}
			</script>
		</div>

		<br />
		<div class="row">
			<div class="container">
				<div class="col-lg-6">
					<h3>DB:gpsdata > Table:devices</h3><br />
					<table class="table">
						<!--method get-->
						<thead>
							<tr>
								<th>id</th>
								<th>description</th>
								<th>iconType</th>
								<th>name</th>
								<th>uniqueId</th>
							</tr>
						</thead>
						<tbody ฝng-repeat="item in Messenger" style="padding-top:5px;">
							<tr>
								<td>1</td>
								<td>6887</td>
								<td>SEDAN</td>
								<td>6887</td>
								<td>131566</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-lg-6">
					<h3>DB:tms > Table:truck_mas</h3><br />
					<table class="table">
						<!--method post-->
						<thead>
							<tr>
								<th>id</th>
								<th>truckno</th>
								<th>trucktype</th>

								<th>gpsdevice</th>
								<th>command</th>
							</tr>
						</thead>
						<tbody ฝng-repeat="item in Messenger" style="padding-top:5px;">
							<tr>
								<td>1</td>
								<td>7221</td>
								<td></td>

								<td>3</td>
								<td>
									<button type="button" class="btn btn-warning" text color="white" ng-click="EditRowOftruckmas()">แก้ไข</button>
									<button type="button" class="close" aria-label="Close" ng-click="DelRowOftruckmas()" style="margin:5px;">
										<span aria-hidden="true">&times;</span>
									</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@section Scripts {
	@Scripts.Render("~/bundles/jqueryval")
}