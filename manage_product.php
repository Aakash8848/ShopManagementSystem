
<?php
	include "./header_top.php";
?>
	
	<div class="row">
		<div class="col-lg-12">




			<div class="container">
							<a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#form_products">Add</a>
				<table class="table table-hover table-striped mt-2">
					<thead>
						<tr>
							<th>SN</th>
							<th>Product Name</th>
							<th>Categories</th>
							<th>Brand</th>
							<th>Supplier</th>
							<th>Product Price</th>
							<th>Product Stock</th>
							<th>Date</th>
							<!-- <th></th> -->
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="get_product">
						<!--  <tr>
								<td>1</td>
								<td>ABGVDS</td>
								<td><a href="#" class="btn btn-success btn-sm">Active</a></td>
								<td><a href="#" class="btn btn-danger btn-sm">Delete</a>
								<a href="#" class="btn btn-info btn-sm">Edit</a></td>
							</tr> -->
					</tbody>
				</table>
			</div>
			<?php

			include_once("./templates/update_product.php");

			?>
			<?php
			//category form
			include_once("./templates/product.php");
			?>
				</div>
	</div>


</div>
</div>

<script type="text/javascript" src="./js/main.js"></script>
		<script type="text/javascript" src="./js/manage1.js"></script>

	</body>
	</html>