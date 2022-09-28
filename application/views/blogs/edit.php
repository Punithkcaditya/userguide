<div class="container top-margin text-white bg-dark">

    <?php echo validation_errors(); ?>

    <?php echo form_open_multipart('blogs/update/'.$blog->id); ?>
    <input type="hidden" name="id" value="<?php echo $blog->id; ?>">
    <input type="hidden" name="count_itemscryto" id="count_itemscryto" value="<?= $count ?>" />


    <div class="form-group">
        <label>Title</label>
        <!-- <input type="hidden"  id="old"  name="blog_image"  value="<?php echo $blog->blog_image; ?>"> -->
        <input type="text" class="form-control" name="title" placeholder="Add Title"
            value="<?php echo $blog->title; ?>">
    </div>






    <div class="no-img">
        <div class="form-group">
            <label>Image</label>
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="hidden" id="old_prod_image" name="old_prod_image"
                        value="<?php echo $blog->blog_image; ?>">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="userfile"
                        class="custom-file-input" id="inputGroupFile02">
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
        <input type="text" placeholder="add link here" id="v_url" class="form-control" name="v_url"
            value="https://youtube.com/watch?v=<?php echo $blog->v_url; ?>">
    </div>
    <!-- video start end -->




    <?php foreach($description->result() as $row): ?>
    <div class="form-group" id="addanother">
        <label>Description</label>
        <input type="hidden" name="count_items" id="count_items" value="<?= $row->order_no; ?>" />
        <input type="hidden" name="decription_id" id="decription_id" value="<?= $row->description_id; ?>" />
        <textarea id="editor<?= $row->order_no;?>" class="form-control" name="description<?= $row->order_no; ?>"
            placeholder="Add description"><?php echo $row->description; ?></textarea>
    </div>
    <?php endforeach; ?>



    <input type="submit" class="btn btn-primary mb-3" value="Update" class="btn btn-default btn-lg">
    <a href="<?= site_url()?>" class="btn btn-primary mb-3">BACK</a>
    <button class="btn btn-info addfields mb-3" id="addrow">+ Add Fields</button>
    <button class="btn btn-info hide mb-3" type="button" id="deletebtn">Delete Fields</button>
    <?php echo form_close(); ?>
    <div class="imagelocation" style="position: absolute;top: 88px;left:5px;width: 100%;">
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="custom-file<?php echo $blog->id; ?>">
                    <img src="<?php echo  base_url('/application/assets/images/blogs/'.$blog->blog_image); ?>"
                        style="vertical-align:middle;position: absolute;width: 186px;height: 200px;">

                </div>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
var n = '<?php echo $count; ?>';
for (var i = 1; i <= n; i++) {
    CKEDITOR.replace('editor' + i + '');
}
document.querySelector('.hide').style.display = 'none';

var count = $("#count_itemscryto").val();
var counter = parseInt(count);


$("#addrow").on("click", function(e) {
    e.preventDefault();
    var newRow = $("<div>");
    var cols = "";
    var oneplus = counter + 1;
    cols += '<textarea id="editor' + oneplus + '" class="ck_editor_txt" name="description' + oneplus +
        '" placeholder="Add Description"></textarea>';
    newRow.append(cols);
    $("#addanother").append(newRow);
    CKEDITOR.replace('editor' + oneplus + '');
    counter++;
    showBtn();
    document.getElementById("count_items").value = counter;
    document.getElementById("count_itemscryto").value = counter;
    // alert(document.getElementById("count_items").value);
    // var count_lens =  $("#count_items").val(counter);count_itemscryto
    // var count_lens = $('#count_items').val(JSON.stringify(counter));
    // var total =  JSON.parse(count_lens);

});


function showBtn(e) {
    document.querySelector('.hide').style.display = 'inline-block';

}

$("#deletebtn").on("click", function(e) {
    if (counter == 1) {
        document.querySelector('.hide').style.display = 'none';
        return;
    }
    var gfg_down_one = document.getElementById('cke_editor' + counter + '');
    var gfg_down_two = document.getElementById('editor' + counter + '');
    gfg_down_one.remove();
    gfg_down_two.remove();
    counter -= 1;
    document.getElementById("count_items").value = counter;
    document.getElementById("count_itemscryto").value = counter;
    // $("#count_items").val(counter);

});
</script>
