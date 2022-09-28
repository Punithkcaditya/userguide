<!-- Wrapper Start -->
<div class="wrapper">
    <?php 
$this->load->helper('text');
if ($this->session->userdata('blog_error')) { ?>
    <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $this->session->flashdata('blog_error'); ?>
    </div>
    <?php } ?>
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
                    <?php $leftcategories = $this->categories_model->get_published_cat(); ?>
                    <ul class="navi-acc">
                        <?php foreach ($leftcategories as $leftcategory) { ?>

                        <li>
                            <a href="#dashboard" id="<?php echo $leftcategory['id'] ?>"
                                class="dashboard"><?php echo $leftcategory['title']?></a>
                            <ul>
                                <?php $catid = $leftcategory['id'];
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
                        <a href="#"><img
                                src="<?php echo str_replace('index.php','',site_url());?>application/assetstwo/images/logo.jpg"
                                alt="Adminise" /></a>
                    </figure>
                    <!-- <div class="welcome">
                        <p>Welcome</p>
                        <h5><a href="#">Stephen N. Arellano</a></h5>
                    </div> -->
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
            <div class="container top-margin">
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
                <?php if($this->session->userdata('logged_in')){ ?>
                <div style="position: absolute;margin: 10px;left: 283px;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createCategory">Add
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
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                    <input type="text" class="form-control" id="categoryName" name="categoryName"
                                        placeholder="Enter Category Name">
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
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
                <br>
                <?php } ?>
            </div>


            <div class="row">
                <div class="col-xs-12">
                    <div class="sec-box">
                        <a class="closethis">Close</a>
                        <header>
                            <h2 class="heading">Category Table</h2>
                        </header>
                        <div class="contents">
                            <a class="togglethis">Toggle</a>
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
                                                    data-published="<?php echo $category['published'] ?>" title="Edit">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
                                            <th><input type="text" name="search_browser" value="Search Category Name"
                                                    class="search_init" /></th>
                                            <th></th>
                                            <th></th>
                                            <th><input type="text" name="search_grade" value="Search Created By"
                                                    class="search_init" /></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!-- Content Section Start -->
        </div>
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
        </script>
