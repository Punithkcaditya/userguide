<!-- Wrapper Start -->
<div class="wrapper">

    <div class="structure-row">
        <!-- Sidebar Start -->
        <aside class="sidebar">
            <div class="sidebar-in">
                <!-- Sidebar Header Start -->
                <header>
                    <!-- Logo Start -->
                    <div class="logo" style="display: none;">
                        <a href="dashboard1.html"><img src="application/assetstwo/images/logo.png" alt="Adminise" /></a>
                    </div>
                    <!-- Logo End -->
                    <!-- Toggle Button Start -->
                    <a href="#" class="togglemenu">&nbsp;</a>
                    <!-- Toggle Button End -->
                    <div class="clearfix"></div>
                </header>
                <!-- Sidebar Header End -->
                <!-- Sidebar Navigation Start -->

                <nav class="navigation">
                    <?php $categories = $this->categories_model->get_published_cat(); ?>
                    <ul class="navi-acc">
                        <?php foreach ($categories as $category) { ?>

                        <li>
                            <a href="#dashboard" id="<?php echo $category['id'] ?>"
                                class="dashboard"><?php echo $category['title']?></a>
                            <ul>
                                <?php $catid = $category['id'];
$categoriesmodal = $this->categories_model->get_innercat($catid);
foreach ($categoriesmodal as $categ) { ?>

                                <li><a
                                        href="<?php echo site_url('/blogs/addcombox/'.$categ['slug'].'/'.$categ['id']); ?>"><?php echo $categ['title']?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>

                        <?php } ?>
                    </ul>
                </nav>
                <!-- Sidebar Navigation End -->
                <!-- Shadow Start -->
                <span class="shadows"></span>
                <!-- Shadow End -->
            </div>
        </aside>
        <!-- Sidebar End -->
        <!-- Right Section Start -->
        <div class="right-sec">
            <!-- Right Section Header Start -->
            <header>
                <!-- User Section Start -->
                <div class="user">
                    <figure>
                        <a href="#"><img src="<?php echo str_replace('index.php','',site_url());?>application/assetstwo/images/logo.jpg" alt="Adminise" /></a>
                    </figure>
                    <div class="welcome" style="display: none;">
                        <p>Welcome</p>
                        <h5><a href="#">Stephen N. Arellano</a></h5>
                    </div>
                </div>
                <!-- User Section End -->
                <!-- Search Section Start -->
                <div class="search-box" style="display: none;">
                    <input type="text" placeholder="Search Anything" />
                    <input type="submit" value="go" />
                </div>
                <!-- Search Section End -->
                <!-- Header Top Navigation Start -->
                <nav class="topnav">
                    <?php if(!$this->session->userdata('logged_in')): ?>
                    <ul id="nav1">
                        <li class="inbox">
                            <a href="<?php echo site_url('signup'); ?>"><i
                                    class="glyphicon glyphicon-user"></i>Sign-Up</a>
                        </li>
                        <li class="settings">

                            <a href="<?php echo site_url('login'); ?>"><i
                                    class="glyphicon glyphicon-log-in"></i>Login</a>

                            <!-- <div class="popdown popdown-right settings">
                            	<nav>
                                	<a href="#"><i class="glyphicon glyphicon-user"></i>Your Profile</a>
                                    <a href="#"><i class="glyphicon glyphicon-pencil"></i>Edit Account</a>
                                    <a href="#"><i class="glyphicon glyphicon-question-sign"></i>Get Help</a>
                                    <a href="#"><i class="glyphicon glyphicon-log-out"></i>Log out</a>
                                </nav>
                            </div> -->
                        </li>
                    </ul>
                    <?php else: ?>
                    <ul id="nav1">
					<li class="inbox">
					<a class="nav-link" href="<?php echo site_url('categories'); ?>"><i
                                    class="glyphicon glyphicon-plus"></i>Add Categories</a>
                        </li>
                        <li class="inbox">
                            <a href="<?php echo site_url('blogs/savetwo'); ?>"><i
                                    class="glyphicon glyphicon-plus"></i>Add Blogs</a>
                        </li>
                        <li class="inbox">
                            <a href="<?php echo site_url('logout'); ?>"><i
                                    class="glyphicon glyphicon-log-out"></i>LogOut</a>
                        </li>
                    </ul>
                    <?php endif; ?>
                </nav>
                <!-- Header Top Navigation End -->
                <div class="clearfix"></div>
            </header>
            <!-- Right Section Header End -->
            <!-- Content Section Start -->
            <div class="content-section">
                <div class="container-liquid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="sec-box">
                                <a class="closethis">Close</a>
                                <header>
                                    <h2 class="heading">Edit Listings</h2>
                                </header>
                                <div class="contents">
                                    <a class="togglethis">Toggle</a>
                                    <div class="table-box">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="col-md-4"></th>
                                                    <th class="col-md-8"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="col-md-4">
                                                        <div class="imagelocation"
                                                            style="position: absolute;top: 88px;left:5px;width: 100%;">
                                                            <div class="form-group">
                                                                <div class="input-group mb-3">
                                                                    <div class="custom-file<?php echo $blog->id; ?>">
                                                                        <img src="<?php echo  base_url('/application/assets/images/blogs/'.$blog->blog_image); ?>"
                                                                            style="height: 200px;">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="col-md-8">
                                                        <?php echo validation_errors(); ?>
                                                        <?php echo form_open_multipart('blogs/update/'.$blog->id); ?>
                                                        <input type="hidden" name="id" value="<?php echo $blog->id; ?>">
                                                        <input type="hidden" name="count_itemscryto"
                                                            id="count_itemscryto" value="<?= $count ?>" />
                                                        <!-- 1 -->
                                                        <label style="margin-top:15px;">Title</label>
                                                        <div class="form-group mb-5" style="width:100%;">
                                                            <input type="text" placeholder="Add Title" name="title"
                                                                class="form-control"
                                                                value="<?php echo $blog->title; ?>">
                                                        </div>
                                                        <!-- 2 -->
                                                        <label style="margin-top:15px;">Upload Image</label>
                                                        <div class="no-img">
                                                            <div class="form-group m-5" style="width:100%;">
                                                                <div class="input-group mb-3">
                                                                    <div class="custom-file">
                                                                        <input type="hidden" id="old_prod_image"
                                                                            name="old_prod_image"
                                                                            value="<?php echo $blog->blog_image; ?>">
                                                                        <input type="file"
                                                                            accept="image/png, image/jpeg, image/jpg"
                                                                            name="userfile" class="custom-file-input"
                                                                            id="inputGroupFile02">
                                                                        <small><?php if(isset($imageError)){echo $imageError;} ?></small>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- 3 -->

                                                        <div class="form-group" style="width:100%;margin-top:15px;">
                                                            <label class="custom-file-label mb-5" for="v_url">Paste
                                                                Url</label>
                                                            <input type="text" placeholder="add link here" id="v_url"
                                                                class="form-control" name="v_url"
                                                                value="https://youtube.com/watch?v=<?php echo $blog->v_url; ?>">
                                                        </div>
                                                        <!-- 4 -->
                                                        <label style="margin-top:15px;">Description</label>
                                                        <?php foreach($description->result() as $row): ?>
                                                        <div class="form-group mb-5" id="addanother<?= $row->order_no; ?>">
                                                            <input type="hidden" name="count_items" id="count_items"
                                                                value="<?= $row->order_no; ?>" />
                                                            <input type="hidden" name="decription_id" id="decription_id"
                                                                value="<?= $row->description_id; ?>" />
                                                            <textarea id="editor<?= $row->order_no;?>"
                                                                class="form-control"
                                                                name="description<?= $row->order_no; ?>"
                                                                placeholder="Add description"><?php echo $row->description; ?></textarea>
                                                        </div>
													
                                                        <?php endforeach; ?>
                                                        <!-- 5 -->
														<label style="margin-top:15px;">Category</label>
                                                        <div class="form-group mb-5">
                                                            <select name="category_id" class="form-control m-5">
                                                                <?php foreach($categoriesopt as $categor): ?>
                                                                <option value="<?php echo $categor['id']; ?>">
                                                                    <?php echo $categor['title']; ?></option>
                                                                <?php endforeach?>
                                                            </select>
                                                        </div>


                                                        <!-- 6 -->
                                                        <div class="form-group mb-5" style="width:100%;margin-top: 10px;">
                                                            <input type="submit" class="btn btn-primary mb-3"
                                                                value="Update" class="btn btn-default btn-lg">
                                                            <a href="<?= site_url()?>"
                                                                class="btn btn-primary mb-3">BACK</a>
                                                            <button class="btn btn-info addfields mb-3" id="addrow">+
                                                                Add Fields</button>
                                                            <button class="btn btn-info hidebtn mb-3" type="button"
                                                                id="deletebtn">Delete Fields</button>
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                        <div class="imagelocation"
                                                            style="position: absolute;top: 88px;left:5px;width: 100%;">
                                                            <div class="form-group" style="display:none;">
                                                                <div class="input-group mb-3">
                                                                    <div class="custom-file<?php echo $blog->id; ?>">
                                                                        <img src="<?php echo  base_url('/application/assets/images/blogs/'.$blog->blog_image); ?>"
                                                                            style="vertical-align:middle;position: absolute;width: 186px;height: 200px;">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Content Section End -->
        </div>
        <!-- Right Section End -->
    </div>
</div>
<!-- Wrapper End -->
<!-- Wrapper End -->

<script type="text/javascript">
var n = '<?php echo $count; ?>';
for (var i = 1; i <= n; i++) {
    CKEDITOR.replace('editor' + i + '',{
                    filebrowserImageBrowseUrl : '<?php echo base_url('application/assets/kcfinder/browse.php');?>'             
                });
}
document.querySelector('.hidebtn').style.display = 'none';

var count = $("#count_itemscryto").val();
// var addanother = $("#addanother"count).val();
// alert(count);
var counter = parseInt(count);


$("#addrow").on("click", function(e) {
    e.preventDefault();
    var newRow = $("<div>");
    var cols = "";
    var oneplus = counter + 1;
    cols += '<textarea id="editor' + oneplus + '" class="ck_editor_txt" name="description' + oneplus +
        '" placeholder="Add Description"></textarea>';
    newRow.append(cols);
    $("#addanother"+count).append(newRow);
    CKEDITOR.replace('editor' + oneplus + '',{
                    filebrowserImageBrowseUrl : '<?php echo base_url('application/assets/kcfinder/browse.php');?>'             
                });
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
    document.querySelector('.hidebtn').style.display = 'inline-block';

}

$("#deletebtn").on("click", function(e) {
    if (counter == 1) {
        document.querySelector('.hidebtn').style.display = 'none';
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
