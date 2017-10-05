<?php 
require_once('../class/Item.php'); 
require_once('../class/Employee.php'); 

$employees = $employee->get_employees();
$categories = $item->item_categories();
$conditions = $item->item_conditions();

?>
<div class="modal fade" id="modal-add-item">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Agregar Articulo</h4>
			</div>
			<div class="modal-body">
				<!-- main form -->
					<form class="form-horizontal" role="form" id="add-item-form">
					<div class="form-group">
					    <label class="control-label col-sm-3" for="catID">Categoria:</label>
					    <div class="col-sm-3"> 
					    	<select name="" class="btn btn-default" id="catID">
					    		<?php 
					    			foreach ($categories as $category) {
					    				# code...
					    			$catID = $category['cat_id'];
					    			$catDesc = ucwords($category['cat_desc']);
					    		?>
					    			<option value="<?php echo $catID; ?>"><?php echo $catDesc; ?></option>}
					    		<?php
					    			}//end foreach of category
					    		 ?>
					    	</select>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-3" for="itemname">Nombre:</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="itemname" placeholder="Enter Item Name" autofocus>
					    </div>
					  </div>

					  <div class="form-group" id="sr">
					    <label class="control-label col-sm-3" for="serialNumber">No. de Serial:</label>
					    <div class="col-sm-9"> 
					      <input type="text" class="form-control" id="serialNumber" placeholder="Enter Serial No">
					    </div>
					  </div>

					   <div class="form-group" id="mn">
					    <label class="control-label col-sm-3" for="modelNumber">Modelo:</label>
					    <div class="col-sm-9"> 
					      <input type="text" class="form-control" id="modelNumber" placeholder="Enter Model No">
					    </div>
					  </div>
					
					  <div class="form-group" id="b">
					    <label class="control-label col-sm-3" for="brand">Marca:</label>
					    <div class="col-sm-9"> 
					      <input type="text" class="form-control" id="brand" placeholder="Marca">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-3" for="amount">Cantidad:</label>
					    <div class="col-sm-9"> 
					      <input type="number" step="any"  class="form-control" id="amount" placeholder="Enter Amount">
					    </div>
					  </div>		

					   <div class="form-group">
					    <label class="control-label col-sm-3" for="purDate">Fecha de compra:</label>
					    <div class="col-sm-9"> 
					      <input type="date" class="form-control" id="purDate" >
					    </div>
					  </div>	

					
				    <div class="form-group">
					    <label class="control-label col-sm-3" for="empID">Empleado:</label>
					    <div class="col-sm-9"> 
					    	<select class="btn btn-default" id="empID">
					    		
								<?php 
									foreach ($employees as $empployee) {
										# code..
									$fN = $empployee['emp_fname'];
									$mN = $empployee['emp_mname'];
									$lN = $empployee['emp_lname'];
									$fullName = "$fN $mN $lN";
									$fullName = ucwords($fullName);
									$emp_id = $empployee['emp_id'];
								?>	
									<option value="<?php echo $emp_id; ?>"><?php echo $fullName; ?></option>}
								<?php
									}//end foreach
								 ?>					    		
					    	</select>
					    </div>
					  </div>	

					 <!-- old cat pos -->

					  <div class="form-group">
					    <label class="control-label col-sm-3" for="conID">Condicion:</label>
					    <div class="col-sm-3"> 
					    	<select name="" class="btn btn-default" id="conID" disabled>
					    		<option value="4">Operativo</option>}
					    	</select>
					    </div>
					  </div>

					  <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" id="btn-submit" value="add" class="btn btn-primary">guardar
					      <span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
					      </button>
					    </div>
					  </div>
					</form>
				<!-- /main form -->
			</div>
		</div>
	</div>
</div>
