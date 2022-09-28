<div class="container top-margin text-white bg-dark">

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('blogs/create'); ?>
<div class="form-group">
<label>Title</label>
<input type="text" class="form-control" name="title" placeholder="Add Title">
</div>

<div class="form-group">
<label>Image</label>
<div class="input-group mb-3">
<div class="custom-file">
<input type="file" accept="image/png, image/jpeg, image/jpg" name="userfile" class="custom-file-input" id="inputGroupFile02">
<label class="custom-file-label" for="inputGroupFile02">Upload Image</label>
</div>
</div>
</div>


<!-- video start 1 -->


<label>Video</label>
<div class="form-group">
<label class="custom-file-label" for="v_url">Paste Url</label>
<input type="text" placeholder="add link here" id="v_url" class="form-control" name="v_url" value="<?php set_value('v_url') ?>">
</div>
<!-- video start end -->


<!-- video new start -->



<!-- video new end -->
<?php $i = 1; ?>
<div class="form-group" id="addanother">
<label>Description</label>

<input type="hidden" name="count_items" id="count_items" value="<?= $i ?>" />
<textarea id="editor<?= $i ?>" class="ck_editor_txt" name="description<?= $i ?>" placeholder="Add Description"></textarea>
</div>

<!-- <div class="form-group">
<label>Category</label>
<select name="category_id" class="form-control">
<?php foreach($categories as $category): ?>
<option value="<?php echo $category['id']; ?>"><?php echo $category['title']; ?></option>
<?php endforeach?>
</select>
</div> -->



<button type="submit" class="btn btn-primary mb-3" id="add_data">Submit</button>
<button class="btn btn-info addfields mb-3" id="addrow" >+ Add Fields</button>
<button class="btn btn-info hide mb-3" type="button" id="deletebtn">Delete Fields</button>
<?php echo form_close(); ?>

</div>

<!-- ck editor start -->


<!-- ck editor end -->
<script type="text/javascript">


$(function(){




document.querySelector('.hide').style.display = 'none'; 
var editor = CKEDITOR.replace( 'editor1' );
CKFinder.setupCKEditor(editor);

var count = $("#count_items").val();
var counter = parseInt(count);




$("#addrow").on("click", function(e) {
e.preventDefault();
var newRow = $("<div>");
var cols = "";
var oneplus=counter+1;
cols += '<textarea id="editor' + oneplus + '" class="ck_editor_txt" name="description'+oneplus+'" placeholder="Add Description"></textarea>';
newRow.append(cols);
$("#addanother").append(newRow);
CKEDITOR.replace('editor'+oneplus+'');
counter++; 
showBtn();
document.getElementById("count_items").value = counter;
// alert(document.getElementById("count_items").value);
// var count_lens =  $("#count_items").val(counter);
// var count_lens = $('#count_items').val(JSON.stringify(counter));
// var total =  JSON.parse(count_lens);
	
});


function showBtn(e) { 
document.querySelector('.hide').style.display = 'inline-block'; 

}

$("#deletebtn").on("click", function(e) {
var gfg_down =
document.getElementById('cke_editor'+counter+'');
gfg_down.remove();
counter -= 1;
document.getElementById("count_items").value = counter;
// $("#count_items").val(counter);

});

















// var set_number = function(){
// var count_len = document.getElementById("count_items").value;	
// }

// set_number();




});
</script>
