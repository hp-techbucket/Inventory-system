<?php 
require_once('../class/Item.php'); 
require_once('../class/Employee.php'); 

$employees = $employee->get_employees();
$categories = $item->item_categories();
$conditions = $item->item_conditions();

?>
<div class="modal fade" id="modal-update-item">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Actualizar Articulo</h4>
			</div>
			<div class="modal-body">
				<!-- main form -->
					<form class="form-horizontal" role="form" id="update-item-form">
					<input type="hidden" id="iID">
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="itemName-update">Nombre del articulo:</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="itemName-update" placeholder="Enter Item Name" autofocus>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-3" for="serialNumber-update">No. de Serial:</label>
					    <div class="col-sm-9"> 
					      <input type="text" class="form-control" id="serialNumber-update" placeholder="Enter Serial No">
					    </div>
					  </div>

					   <div class="form-group">
					    <label class="control-label col-sm-3" for="modelNumber-update">Modelo:</label>
					    <div class="col-sm-9"> 
					      <input type="text" class="form-control" id="modelNumber-update" placeholder="Enter Model No">
					    </div>
					  </div>
					
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="brand-update">Marca:</label>
					    <div class="col-sm-9"> 
					      <input type="text" class="form-control" id="brand-update" placeholder="Enter Brand">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-3" for="amount-update">Cantidad:</label>
					    <div class="col-sm-9"> 
					      <input type="number" step="any"  class="form-control" id="amount-update" placeholder="Enter Amount">
					    </div>
					  </div>		

					   <div class="form-group">
					    <label class="control-label col-sm-3" for="purDate-update">Fecha de Compra:</label>
					    <div class="col-sm-9"> 
					      <input type="date" class="form-control" id="purDate-update">
					    </div>
					  </div>	

					
				    <div class="form-group">
					    <label class="control-label col-sm-3" for="empID-update">Empleado:</label>
					    <div class="col-sm-9"> 
					    	<select class="btn btn-default" id="empID-update">
					    		
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

					  <div class="form-group">
					    <label class="control-label col-sm-3" for="catID-update">Categoria:</label>
					    <div class="col-sm-3"> 
					    	<select name="" class="btn btn-default" id="catID-update">
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
					    <label class="control-label col-sm-3" for="conID-update">Condicion:</label>
					    <div class="col-sm-3"> 
					    	<select name="" class="btn btn-default" id="conID-update" disabled>
					    		<?php 
					    			foreach ($conditions as $condition) {
					    				# code...
					    				$conID = $condition['con_id'];
					    				$conDesc = ucwords($condition['con_desc']);
					    		?>
					    			<option value="<?php echo $conID; ?>"
					    			<?php echo $conDesc == 'Working' ? 'selected':''?>
					    			><?php echo $conDesc; ?></option>}
					    		<?php
					    			}//end foreach cond
					    		 ?>
					    	</select>
					    </div>
					  </div>

					  <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" id="btn-update-submit" class="btn btn-primary">Guardar
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
