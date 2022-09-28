

<div class="container top-margin text-white bg-dark">

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('blogs/update/'.$blog->id); ?>
<input type="hidden" name="id" value="<?php echo $blog->id; ?>">



<div class="form-group">
	<label>Title</label>
	<!-- <input type="hidden"  id="old"  name="blog_image"  value="<?php echo $blog->blog_image; ?>"> -->
	<input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $blog->title;; ?>">
</div>






<div class="no-img">
<div class="form-group">
<label>Image</label>
<div class="input-group mb-3">
<div class="custom-file">
<input type="hidden"  id="old_prod_image"  name="old_prod_image"  value="<?php echo $blog->blog_image; ?>">
<input type="file" accept="image/png, image/jpeg, image/jpg" name="userfile" class="custom-file-input" id="inputGroupFile02">
<small><?php if(isset($imageError)){echo $imageError;} ?></small>
<label class="custom-file-label" for="inputGroupFile02">Upload Image</label>
</div>
</div>
</div>
</div>





<!-- video start 1 -->


<label>Video</label>
<div class="form-group">
<label class="custom-file-label" for="v_url">Paste Url</label>
	<input type="text" placeholder="add link here" id="v_url" class="form-control" name="v_url" value="https://youtube.com/watch?v=<?php echo $blog->v_url; ?>">
</div>
<!-- video start end -->




<?php foreach($description->result() as $row): ?>
<div class="form-group">
<label>Description</label>
<textarea id="editor<?= $row->order_no;?>" class="form-control" name="description" placeholder="Add description"><?php echo $row->description; ?></textarea>
</div>
<?php endforeach; ?>



<input type="submit" class="btn btn-primary mb-3" value="Update" class="btn btn-default btn-lg">
<a href="<?= site_url()?>" class="btn btn-primary mb-3">BACK</a>
<?php echo form_close(); ?>
<div class="imagelocation" style="position: absolute;top: 88px;left:5px;width: 100%;">
<div class="form-group">
<div class="input-group mb-3">
<div class="custom-file<?php echo $blog->id; ?>">
<img  src="<?php echo  base_url('/application/assets/images/blogs/'.$blog->blog_image); ?>"  style="vertical-align:middle;position: absolute;width: 186px;height: 200px;">

</div>
</div>
</div>
</div>
</div>




<script type="text/javascript">

var n = '<?php echo $count; ?>';
for(var i =1;i<=n;i++){
	CKEDITOR.replace('editor'+i+'');
}

</script>
