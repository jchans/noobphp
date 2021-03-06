<?php // address book insert ?>

<?php
require __DIR__. '/is_admin.php';

$pageName = 'address book insert'
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>

<div class="container mt-3">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">新增資料</h5>

					<form name="form1" novalidate onsubmit="checkForm(); return false;">
						<div class="form-group">
							<label for="name">** name</label>
							<input type="text" class="form-control" id="name" name="name">
						</div>
						<div class="form-group">
							<label for="email">** email</label>
							<input type="email" class="form-control" id="email" name="email">
						</div>
						<div class="form-group">
							<label for="mobile">mobile</label>
							<input type="text" class="form-control" id="mobile" name="mobile">
						</div>
						<div class="form-group">
							<label for="birthday">birthday</label>
							<input type="date" class="form-control" id="birthday" name="birthday">
						</div>
						<div class="form-group">
							<label for="address">address</label>
							<textarea class="form-control" id="address" name="address" rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">新增</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include __DIR__. '/parts/scripts.php'; ?>

<script>
	

	function checkForm() {
		const fd = new FormData(document.form1);
		
		fetch('addressbook-insert-api.php', {
			method: 'POST',
			body: fd
			})
			.then(r => r.json())
            .then(obj => {
				console.log(obj);
			})
		
			window.location.href = 'addressbook-list.php';
        }

	
</script>

<?php include __DIR__. '/parts/html-foot.php'; ?>

<?php 
// 筆記
//
// Page Form Ref:
// 1. Bootstrap 4, card: https://getbootstrap.com/docs/4.0/components/card/
//
 ?>