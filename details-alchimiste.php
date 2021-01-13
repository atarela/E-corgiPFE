<div class="modal fade details-1" id="details-1"  tableindex ="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div calss="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>

				<h4 class="modal-title text-center">L'alchimiste</h4>
			</div>
		<div calss="modal-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="center-block">
							<img src="images/book1.jpg" alt="alchimiste" class="details img-responsive">
						</div>
					</div>
				<div class="col-sm-6">
						<h4>Details</h4>
						<p>L'Alchimiste est un conte philosophique de Paulo Coelho paru en 1988. La traduction française, signée Jean Orecchioni, a été publiée en 1994.</p>
						<hr/>
						<p>Prix : 15.00€</p>
						<form action="add_cart.php" method="post">
							<div class="form-group">
								<div class="col-xs-3">
									<label for="quantity" id="quantity-label">Quantity : </label>
									<input type="text" class="form-control" id="quantity" name="quantity">
									
								</div><br>
								
								
							</div>
							
						</form>

				</div>
			</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-default" data-dismiss='modal'>Close</button>
			<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button>
		</div>
		</div>
	</div>
</div>