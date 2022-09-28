<div class="container top-margin text-white bg-dark">
  
  <?php echo validation_errors(); ?>

  <?php echo form_open('blogs/update'); ?>
  <input type="hidden" name="id" value="<?php echo $blog['id']; ?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $blog['title']; ?>">
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
<input type="text" placeholder="add link here" id="v_url" class="form-control" name="v_url" value="https://youtube.com/watch?v=<?php echo $blog['v_url']; ?> <?php set_value('v_url') ?>">
</div>
<!-- video start end -->

	
  <div class="form-group">
    <label>Description</label>
    <textarea id="editor1" class="form-control" name="description" placeholder="Add description"><?php echo $blog['description']; ?></textarea>
  </div>

  <!-- <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['title']; ?></option>
      <?php endforeach?>
    </select>
  </div> -->

  <input type="submit" class="btn btn-primary mb-3" value="Update" class="btn btn-default btn-lg">
  <?php echo form_close(); ?>

</div>
<script type="text/javascript">
  CKEDITOR.replace( 'editor1' );
</script>
