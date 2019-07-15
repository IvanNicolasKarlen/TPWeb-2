<?php
 require_once("verificacionSesion.php"); 
 
 include_once("header.php");
 
 if(isset($_POST["ComprarTodo"]))
		{
			$total = $_POST['total'];
				
			
		}
 
?>
<!DOCTYPE html>
<html lang="en">

<body>

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form id="checkout-form" class="clearfix" action="CompraExitosa.php">

					<div class="col-md-6">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">REVISIÓN DEL PEDIDO</h3>
							</div>
							<table class="shopping-cart-table table">
								
								
								<tfoot>
									
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total"><?php echo $total?></th>
									</tr>
								</tfoot>
							</table>
							<div class="pull-right">
								<button type="submit" name="pagar" class="primary-btn" >Pagar Todo</button>	
							</div>
						</div>

					</div>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<?php include_once("footer.php"); ?>


</body>

</html>
