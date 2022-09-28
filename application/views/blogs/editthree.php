<body class="s-lib-public-body">


    <!-- <div class="clear"></div> -->
    <div class="wrapper container">
        <!-- BEGIN: Page Header -->
        <div id="header" class="container">

            <!-- <div class="header-logo">
                <a href="http://www.vu.edu.au/"><img
                        src="libapps-au.s3-ap-southeast-2.amazonaws.com/customers/1607/images/logo-library-325.png"></a>
            </div> -->
            <div class="header-title">
                <a href="#"><img
                        src="<?php echo str_replace('index.php','',site_url());?>application/assetstwo/images/logo.jpg"
                        alt="Adminise" /></a>
                <nav class="topnav">
                    <?php if(!$this->session->userdata('logged_in')): ?>
                    <ul id="nav1">
                        <li class="inbox">
                            <a href="<?php echo site_url('signup'); ?>"><i class="fa fa-sign-in"></i>Sign-Up</a>
                        </li>

                        <li class="inbox">

                            <a href="<?php echo site_url('login'); ?>">
                                <i class="fa fa-user" aria-hidden="true"></i>Login</a>

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
                            <a class="nav-link" href="<?php echo site_url('categories'); ?>"><i class="fa fa-plus"
                                    aria-hidden="true"></i>Add Categories</a>
                        </li>
                        <li class="inbox">
                            <a href="<?php echo site_url('blogs/savethree'); ?>"><i class="fa fa-plus"
                                    aria-hidden="true"></i>Add Blogs</a>
                        </li>
                        <li class="inbox">
                            <a href="<?php echo site_url('logout'); ?>"><i class="fa fa-sign-out"
                                    aria-hidden="true"></i>LogOut</a>
                        </li>
                    </ul>
                    <?php endif; ?>
                </nav>
            </div>

        </div>
        <!-- END: Page Header -->


        <!-- BEGIN: Guide Info Header -->
        <div id="s-lg-guide-header" class="container s-lib-header">


            <div id="s-lg-guide-header-info">


                <div id="s-lg-guide-desc-container">
                    <span id="s-lg-guide-description"></span>
                </div>
            </div>
        </div>
        <!-- END: Guide Info Header -->
        <div id="s-lg-tabs-container" class="container s-lib-side-borders pad-top-med">
            <div id="s-lg-guide-tabs" class="tabs">
                <ul class="nav nav-tabs split-button-nav">
                    <li class=""><a title="" class="" href="home.html"><span>Home</span></a></li>
                    <li class="active"><a title="" class="active" href="gettingstarted.html"><span>Getting started with
                                IEEE referencing</span></a></li>

                </ul>
            </div>
        </div>
        <div id="s-lg-guide-tabs-title-bar" class="container s-lib-side-borders"></div>
        <!-- BEGIN: Guide Content -->
        <div id="s-lg-guide-main" class="container s-lib-main">

            <div class="row s-lg-row">
                <div id="s-lg-col-126" class="col-md-12">
                    <div class="s-lg-col-boxes"></div>
                </div>
            </div>
            <div class="row s-lg-row">
                <div id="s-lg-col-1" class="col-md-3">
                    <div class="s-lg-col-boxes">
                        <div id="s-lg-box-wrapper-9928698" class="s-lg-box-wrapper-9928698">
                            <div id="s-lg-box-8413942-container" class="s-lib-box-container">
                                <div id="s-lg-box-8413942" class="s-lib-box s-lib-box-std">
                                    <h2 class="s-lib-box-title">On this page
                                    </h2>
                                    <div id="s-lg-box-collapse-8413942">
                                        <div class="s-lib-box-content">

                                            <div id="s-lg-content-16944478" class="  clearfix">
                                                <?php $categories = $this->categories_model->get_published_cat(); ?>
                                                <ul class="navi-acc">
                                                    <?php foreach ($categories as $category) { ?>
                                                    <li class="dashboard2">
                                                        <i class="fa-solid fa-angle-right"></i><a href="#dashboard"
                                                            class="dashboard"><?php echo $category['title']?></a>
                                                        <ul class="children">
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

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="s-lg-col-2" class="col-md-9">
                    <div class="s-lg-col-boxes">
                        <div id="s-lg-box-wrapper-17836871" class="s-lg-box-wrapper-17836871">

                        </div>
                        <div id="s-lg-box-wrapper-10429210" class="s-lg-box-wrapper-10429210">
                            <div id="s-lg-box-8845846-container" class="s-lib-box-container">
                      

<!-- edit three start -->

<table class="table">
                                            <thead>
                                                <tr>
                                                    <!-- <th class="col-md-4"></th> -->
                                                    <th class="col-md-12"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <!-- <td class="col-md-4">
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
                                                    </td> -->
                                                    <td class="col-md-12">
													<div id="s-lg-box-8845846" class="s-lib-box s-lib-box-std">


													<div class="imagelocation">
                                                            <div class="form-group">
                                                                <div class="input-group mb-3">
                                                                    <div class="custom-file<?php echo $blog->id; ?>">
                                                                        <img src="<?php echo  base_url('/application/assets/images/blogs/'.$blog->blog_image); ?>"
                                                                            style="height: 200px;">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

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
																</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>


<!-- edit three end -->


                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row s-lg-row">
            <div id="s-lg-col-127" class="col-md-12">
                <div class="s-lg-col-boxes"></div>
            </div>
        </div>
        <ul id="s-lg-page-prevnext" class="pager s-lib-hide">
            <li class="previous"><a href="home.html">&lt;&lt; <strong>Previous:</strong> Home</a></li>
            <li class="next"><a href="formats.html"><strong>Next:</strong> Reference formats & examples &gt;&gt;</a>
            </li>
        </ul>

    </div>
    <!-- END: Guide Content -->


    <!-- BEGIN: Page Footer -->
    <div class="footer-vu-info">
        <!-- <nav>
                <ul class="links footer-links menu-footer">
                    <li class="menu-20411 first"><a href="http://www.vu.edu.au/contact-us">Contact us</a></li>
                    <li class="menu-20415"><a href="/privacy" title="Privacy">Privacy</a></li>
                    <li class="menu-20417"><a href="/legal" title="Legal">Legal</a></li>
                    <li class="menu-20419"><a href="http://www.vu.edu.au/about-us/administration-governance/provider-registration">Provider registration</a></li>
                    <li class="menu-20421"><a href="http://www.vu.edu.au/about-us/vision-mission/accessibility-of-our-website">Accessibility information</a></li>
                    <li class="menu-21691 last"><a href="http://www.vu.edu.au/feedback" title="Provide website feedback">Feedback</a></li>
                </ul>
            </nav> -->

        <!-- <p><a href="/sitemap">Full sitemap</a></p>  -->
    </div>
    <div id="s-lib-footer-public" class="s-lib-footer footer container  s-lib-side-borders">
        <div id="s-lg-guide-header-meta" class="pad-top-sm pad-left-med clearfix">
            <ul id="s-lg-guide-header-attributes" class="">
                <li id="s-lg-guide-header-updated" class="s-lg-h-separator">
                    <span class="s-lg-guide-label"></span> <span class="s-lg-text-greyout"></span>
                </li>
                <li id="s-lg-guide-header-url" class="s-lg-h-separator">

                </li>
                <li id="s-lg-guide-print-url">

                </li>
            </ul>
            <div id="s-lib-footer-login-link" class="pull-right pad-right-med">

            </div>
        </div>
        <div class="pad-bottom-sm clearfix">
            <div id="s-lib-footer-support-link" class="pull-right pad-right-med">

            </div>
            <div id="s-lg-guide-header-subjects" class="pad-top-sm pad-left-med pad-right-med pull-left">

            </div>
            <div id="s-lg-guide-header-tags" class="pad-top-sm pad-left-med">

            </div>
        </div>
    </div>
    <!-- END: Page Footer -->

    <!-- End wrapper -->
    </div>
    <div id="s-lib-scroll-top" title="Back to Top">
        <span class="fa-stack fa-lg">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <i class="fa fa-angle-double-up fa-stack-1x" style="position:relative; bottom:2px;"></i>
        </span>
    </div>
    <div id="s-lib-alert" title="">
        <div id="s-lib-alert-content"></div>
    </div>
    <!-- BEGIN: Custom Footer -->



    <!-- END: Custom Footer -->
    <div id="background"></div>
    <!-- BEGIN: Analytics code -->
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-1582839-37', 'auto');
    ga('send', 'pageview');

    //   dashboard
    $('.dashboard2').click(function() {
        if ($(this).find('ul.children')) {
            $(this).find('ul.children').toggle();
        }
    });







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





    </script><!-- END: Analytics code -->
</body>


</html>
