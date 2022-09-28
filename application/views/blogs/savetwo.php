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
                                    <h2 class="heading">Input Groups</h2>
                                </header>
                                <div class="contents">
                                    <a class="togglethis">Toggle</a>
                                    <div class="table-box">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="col-md-2"></th>
                                                    <th class="col-md-8"></th>
													<th class="col-md-2"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="col-md-2"></td>
                                                    <td class="col-md-8">
                                                        <?php echo validation_errors(); ?>
                                                        <?php echo form_open_multipart('blogs/savetwo'); ?>
                                                      
                                                        <!-- 1 -->
                                                        <label>Title</label>
                                                        <div class="form-group" style="width:100%;">
                                                            <input type="text" placeholder="Add Title" name="title"
                                                                class="form-control" />
                                                        </div>
                                                        <!-- 2 -->
														<label class="custom-file-label"
                                                                        for="inputGroupFile02" style="margin-top:15px;">Upload Image</label>
                                                        <div class="form-group  mb-3">
														
                                                            <div class="input-group mb-3">
                                                                <div class="custom-file">
                                                                    <input type="file"
                                                                        accept="image/png, image/jpeg, image/jpg"
                                                                        name="userfile" class="custom-file-input"
                                                                        id="inputGroupFile02">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- 3 -->

                                                        <label style="margin-top:15px;">Paste Video Url</label>
                                                        <div class="form-group">
                                                          
                                                            <input type="text" placeholder="add link here" id="v_url"
                                                                class="form-control" name="v_url"
                                                                value="<?php set_value('v_url') ?>">
                                                        </div>
                                                        <!-- video start end -->
                                                        <!-- 4 -->
                                                        <?php $i = 1; ?>
                                                        <div class="form-group" style="margin-top:15px;" id="addanother">
                                                            <label>Description</label>

                                                            <input type="hidden" name="count_items" id="count_items"
                                                                value="<?= $i ?>" />
                                                            <textarea id="editor<?= $i ?>" class="ck_editor_txt"
                                                                name="description<?= $i ?>"
                                                                placeholder="Add Description"></textarea>
                                                        </div>
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
                                                        <div class="form-group" style="width:100%;margin-top:15px;">
                                                            <button type="submit" class="btn btn-primary mb-3"
                                                                id="add_data">Submit</button>
                                                            <button class="btn btn-info addfields mb-3" id="addrow">+
                                                                Add Fields</button>
                                                            <button class="btn btn-info hideing mb-3" type="button"
                                                                id="deletebtn">Delete Fields</button>

                                                        </div>
                                                        <?php echo form_close(); ?>

                                                    </td>
													<td class="col-md-2"></td>
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
$(function() {




    document.querySelector('.hideing').style.display = 'none';
    // var editor = CKEDITOR.replace('editor1');
    // CKFinder.setupCKEditor(editor);

	CKEDITOR.replace('editor1',{
                    filebrowserImageBrowseUrl : '<?php echo base_url('application/assets/kcfinder/browse.php');?>'             
                });

    var count = $("#count_items").val();
    var counter = parseInt(count);




    $("#addrow").on("click", function(e) {
        e.preventDefault();
        var newRow = $("<div>");
        var cols = "";
        var oneplus = counter + 1;
        cols += '<textarea id="editor' + oneplus + '" class="ck_editor_txt" name="description' +
            oneplus + '" placeholder="Add Description"></textarea>';
        newRow.append(cols);
        $("#addanother").append(newRow);
        CKEDITOR.replace('editor' + oneplus + '',{
                    filebrowserImageBrowseUrl : '<?php echo base_url('application/assets/kcfinder/browse.php');?>'             
                });
        counter++;
        showBtn();
        document.getElementById("count_items").value = counter;
        // alert(document.getElementById("count_items").value);
        // var count_lens =  $("#count_items").val(counter);
        // var count_lens = $('#count_items').val(JSON.stringify(counter));
        // var total =  JSON.parse(count_lens);

    });


    function showBtn(e) {
        document.querySelector('.hideing').style.display = 'inline-block';

    }

    $("#deletebtn").on("click", function(e) {
        if (counter == 1) {
            document.querySelector('.hideing').style.display = 'none';
            return;
        }
        var gfg_down_one = document.getElementById('cke_editor' + counter + '');
        var gfg_down_two = document.getElementById('editor' + counter + '');
        gfg_down_one.remove();
        gfg_down_two.remove();
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
