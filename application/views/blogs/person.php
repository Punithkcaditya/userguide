<div class="container">
		
		<br><br>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
		  Add Record
		</button><br><br>


	<form id="createForm">
		<!-- Modal -->
		<div class="modal fade" id="createModal" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add Record</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">×</span>
		        </button>
		      </div>
		      <div class="modal-body">

		        
		        	<div class="form-group">
					    <label>Name</label>
					    <input type="text" class="form-control" placeholder="Name here" name="name">
					 </div>
					 <div class="form-group">
					    <label>Message</label>
					    <input type="text" class="form-control" placeholder="Message Here" name="message">
					 </div>
					 <div class="form-group">
					    <label>Age</label>
					    <input type="number" class="form-control" placeholder="Age Here" name="age">
					 </div>
		       
		        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save</button>
		      </div>
		    </div>
		  </div>
		</div>
		 </form>

		<table id="example1" class="display table">
		    <thead>
		        <tr>
		            <th>S.No</th>
		            <th>Name</th>
		            <th>Message</th>
		            <th>Age</th>
		        </tr>
		    </thead>

		</table>
	</div>
