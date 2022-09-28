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
                            <a href="<?php echo site_url('blogs/savetwo'); ?>"><i class="fa fa-plus"
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
                                                <?php $categoriys = $this->categories_model->get_published_cat(); ?>
                                                <ul class="navi-acc">
                                                    <?php foreach ($categoriys as $category) { ?>
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
                    <div class="container top-margin" style="height: 61px;">
                        <?php if ($this->session->userdata('category_deleted')) { ?>
                        <div class="alert alert-dismissible alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('category_deleted'); ?>
                        </div>
                        <?php } ?>
                        <?php if ($this->session->userdata('category_create')) { ?>
                        <div class="alert alert-dismissible alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('category_create'); ?>
                        </div>
                        <?php } ?>
                        <?php 
	if($this->session->userdata('logged_in')){ ?>
                        <div style="position: absolute;margin: 10px;left: 6px;">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#createCategory">Add
                                Category</button>
                        </div>
                        <div class="modal fade" id="createCategory">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Create Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('categories/create'); ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="text" class="form-control" name="categoryName"
                                                placeholder="Enter Category Name">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                        <!-- Edit Category -->
                        <div class="modal fade" id="editCategory">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('categories/edit'); ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="text" class="form-control" id="categoryName"
                                                name="categoryName" placeholder="Enter Category Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Published</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="published"
                                                    class="custom-control-input" value="1">
                                                <label class="custom-control-label" for="customRadio1">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="published"
                                                    class="custom-control-input" value="0">
                                                <label class="custom-control-label" for="customRadio2">No</label>
                                            </div>
                                        </div>
                                        <input type="hidden" id="editCategoryid" name="editCategoryid" value="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php } ?>
                    </div>


                    <div class="s-lg-col-boxes">
                        <div id="s-lg-box-wrapper-17836871" class="s-lg-box-wrapper-17836871">

                        </div>
                        <div id="s-lg-box-wrapper-10429210" class="s-lg-box-wrapper-10429210">
                            <div id="s-lg-box-8845846-container" class="s-lib-box-container">
                                <div id="s-lg-box-8845846" class="s-lib-box s-lib-box-std">
                                    <!-- cotegory start -->
                                    <div class="table-box">
                                        <script type="text/javascript"
                                            src="<?php echo base_url('application/assetstwo/js/jquery.dataTables.min.js'); ?>">
                                        </script>
                                        <table class="table table-hover" id="example">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Category Name</th>
                                                    <th scope="col">Published</th>
                                                    <th scope="col">Action</th>
                                                    <th scope="col">Created By</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (empty($categories)) { ?>
                                                <tr class="table-secondary">
                                                    <td colspan="10" align="center">No records found.....</th>
                                                </tr>
                                                <?php } ?>
                                                <?php $i=1; foreach($categories as $category): ?>
                                                <tr class="table-secondary" align="center">
                                                    <th scope="row"><?php echo $i++; ?></th>
                                                    <td><a
                                                            href="<?php echo site_url('/categories/blogs/'.$category['id']); ?>"><?php echo $category['title'] ?></a>
                                                    </td>
                                                    <td><span
                                                            class="<?php echo $category['published'] ? 'text-success' : 'text-danger'; ?>">&check;</span>
                                                    </td>
                                                    <td>
                                                        <?php if ($this->session->userdata('user_id') == $category['created_by']) : ?>
                                                        <button type="button" onclick="deleteCategory(this);"
                                                            data-delete="<?php echo base64_encode($category['id']); ?>"
                                                            class="btn btn-outline-primary" title="Delete">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-trash" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                                </path>
                                                                <path fill-rule="evenodd"
                                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button type="button" onclick="editCategory(this);"
                                                            data-edit="<?php echo base64_encode($category['id']); ?>"
                                                            class="btn btn-outline-primary"
                                                            data-published="<?php echo $category['published'] ?>"
                                                            title="Edit">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                                class="bi bi-pen" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <?php else: ?>
                                                        -
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo $category['name']; ?></td>

                                                </tr>
                                                <?php endforeach?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th><input type="text" name="search_engine" value="Search id"
                                                            class="search_init" /></th>
                                                    <th><input type="text" name="search_browser"
                                                            value="Search Category Name" class="search_init" /></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th><input type="text" name="search_grade" value="Search Created By"
                                                            class="search_init" /></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>



                                    <!-- category end -->
                                </div>
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

    <script type="text/javascript">
    function deleteCategory(elmnt) {
        var r = confirm('Are you sure to delete this record ?');
        if (!r) {
            return false;
        }
        var $this = jQuery(elmnt);
        jQuery.post("<?php echo site_url('categories/delete'); ?>", {
                id: $this.attr('data-delete'),
                categoryName: $this.parent().prev().prev().children().text()
            },
            function(data, status) {
                if (data) {
                    let row = $this.parent().parent();
                    row.hide('slow', function() {
                        row.remove();
                    });
                    //$this.parent().parent().fadeOut().remove();
                    //window.location.reload();
                }
            });
    }

    function editCategory(elmnt) {
        var $this = jQuery(elmnt);
        jQuery('#editCategory').modal();
        let modal = jQuery('#editCategory');
        let categoryName = $this.parent().prev().prev().children().text();
        console.log(categoryName);
        let id = $this.attr('data-edit');
        let published = $this.attr('data-published');
        jQuery('#categoryName').val(categoryName);
        if (published == '1') {
            jQuery('#customRadio1').val(published).attr('checked', 'checked').trigger('click');
            jQuery('#customRadio2').val('').removeAttr('checked');
        } else if (published == '0') {
            jQuery('#customRadio2').val(published).attr('checked', 'checked').trigger('click');
            jQuery('#customRadio1').val('').removeAttr('checked');
        }
        jQuery('#editCategoryid').val(id);
    }



    var asInitVals = new Array();
    $(document).ready(function() {
        var oTable = $('#example').dataTable({
            "oLanguage": {
                "sSearch": "Search all columns:"
            }
        });

        $("tfoot input").keyup(function() {
            /* Filter on the column (the index) of this element */
            oTable.fnFilter(this.value, $("tfoot input").index(this));
        });



        /*
         * Support functions to provide a little bit of 'user friendlyness' to the textboxes in 
         * the footer
         */
        $("tfoot input").each(function(i) {
            asInitVals[i] = this.value;
        });

        $("tfoot input").focus(function() {
            if (this.className == "search_init") {
                this.className = "";
                this.value = "";
            }
        });

        $("tfoot input").blur(function(i) {
            if (this.value == "") {
                this.className = "search_init";
                this.value = asInitVals[$("tfoot input").index(this)];
            }
        });
    });


	$('.dashboard2').click(function() {
        if ($(this).find('ul.children')) {
            $(this).find('ul.children').toggle();
        }
    });
    </script>
