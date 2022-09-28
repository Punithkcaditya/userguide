<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->

<!-- Sidebarover lay -->
<div class="sidebar-overlay" data-toggle="sidebar"></div>

<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="admin-image">
            <!-- <img src="assets/images/logo-3.png" alt="">  -->

            <!-- simple try -->
            <?php if(!$this->session->userdata('logged_in')): ?>
            <ul>
                <li><a href="<?php echo site_url('signup'); ?>"><i class="fe fe-log-in"></i>Sign-Up</a>
                </li>
                <li><a href="<?php echo site_url('login'); ?>"><i class="fe fe-user"></i>Login</a></li>
            </ul>
            <?php else: ?>
            <ul>
                <li><a href="<?php echo site_url('categories'); ?>"><i class="fe fe-file-plus"></i>Add
                        Categories</a></li>
                <li><a href="<?php echo site_url('blogs/savefour'); ?>"><i class="fe fe-file-plus"></i>Add
                        Pages</a></li>
                <li><a href="<?php echo site_url('logout'); ?>"><i class="fe fe-log-out"></i>LogOut</a>
                </li>
            </ul>
            <?php endif; ?>
            <!-- simple try end -->

        </div>
        <!-- Menu -->
        <div class="menu main-sidebar">
            <?php $categoriyes = $this->categories_model->get_published_cat(); ?>
            <ul class="list navi-acc" id="documenter_nav">
                <?php foreach ($categoriyes as $categoryy) { ?>

                <li class="nav-item dashboard2"><a class="nav-link" href="#">
                        <i class="fe fe-chevron-right sidemenu-icon"></i>
                        <span class="sidemenu-label"><?php echo $categoryy['title']?></span></a>
                    <ul class="children">
                        <?php $catid = $categoryy['id'];
								$categoriesmodal = $this->categories_model->get_innercat($catid);
								foreach ($categoriesmodal as $categ) { ?>

                        <li><a
                                href="<?php echo site_url('/blogs/addcomboxtwo/'.$categ['slug'].'/'.$categ['id']); ?>"><?php echo $categ['title']?></a>
                        </li>
                        <?php } ?>
                    </ul>

                </li>
                <?php } ?>
            </ul>

        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>

<section class="content home">

    <div class="container top-margin" style="padding: 28px;">
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
        <div style="position: absolute;margin: 13px;left: 0px;">
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
                        <label>Category Type</label>
                        <div class="form-group">
                            <select name="category_id" class="form-control">

                                <option value="1">OC</option>
                                <option value="2">EMS</option>
                            </select>
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
                                <input type="radio" id="customRadio1" name="published" class="custom-control-input"
                                    value="1">
                                <label class="custom-control-label" for="customRadio1">Yes</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="published" class="custom-control-input"
                                    value="0">
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
            <div class="container-fluid">
                <header>
                    <h2 class="heading">Category Table</h2>
                </header>
                <div class="contents">
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
                                    <th scope="col">Type</th>
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
                                <tr class="table-secondary" align="left">
                                    <th scope="row"><?php echo $i++; ?></th>
                                    <td><a
                                            href="<?php echo site_url('/categories/blogs/'.$category['id']); ?>"><?php echo $category['title'] ?></a>
                                    </td>
                                    <td><span
                                            class="<?php echo $category['published'] ? 'text-success' : 'text-danger'; ?>">&check;</span>
                                    </td>
                                    <td><?php echo $category['type']; ?>
                                    </td>
                                    <td>
                                        <?php if ($this->session->userdata('user_id') == $category['created_by']) : ?>
                                        <button type="button" onclick="deleteCategory(this);"
                                            data-delete="<?php echo base64_encode($category['id']); ?>"
                                            class="btn btn-outline-primary" title="Delete">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
                                    <th><input type="text" name="search_engine" value="Search id" class="search_init" />
                                    </th>
                                    <th><input type="text" name="search_browser" value="Search Category Name"
                                            class="search_init" /></th>
                                    <th></th>
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
    <!-- Footer opened -->
    <div class="main-footer ht-40">
        <div class="pd-t-0-f ht-100p">

        </div>
    </div>
    <!-- Footer closed -->
</section>

<div class="color-bg">
    <!-- <a href="#"><img
src="<?php echo str_replace('index.php','',site_url());?>application/assetstwo/images/logo.jpg"
alt="Adminise" /></a> -->
    <!-- nav start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <img src="https://www.superiorengineering.com.au/image/catalog/logo.png" title="Superior Engineering"
                alt="Superior Engineering" class="img-responsive" style="width: 23%;">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?php echo base_url(); ?>">OC <span
                        class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="<?php echo site_url(); ?>/blogs/ems">EMS</a>
            </div>
        </div>
    </nav>

    <!-- nav end -->

    <div class="sidebar__toggle" data-toggle="sidebar">
        <a class="open-toggle" href="javascript:void(0);"><i class="fe fe-menu"></i></a>
    </div>
    <?php if(!$this->session->userdata('logged_in')): ?>
    <ul class="nav navbar-nav small_width">
        <li class="nav-item mr-8"><a href="<?php echo site_url('signup'); ?>"><i class="fe fe-log-in"></i>Sign-Up</a>
        </li>
        <li class="nav-item mr-8"><a href="<?php echo site_url('login'); ?>"><i class="fe fe-user"></i>Login</a></li>
    </ul>
    <?php else: ?>
    <ul class="nav navbar-nav">
        <li class="nav-item mr-8"><a href="<?php echo site_url('categories'); ?>"><i class="fe fe-file-plus"></i>Add
                Categories</a></li>
        <li class="nav-item mr-8"><a href="<?php echo site_url('blogs/savefour'); ?>"><i class="fe fe-file-plus"></i>Add
                Pages</a></li>
        <li class="nav-item mr-8"><a href="<?php echo site_url('logout'); ?>"><i class="fe fe-log-out"></i>LogOut</a>
        </li>
    </ul>
    <?php endif; ?>
</div>





<!-- morphing search Js -->
<!-- start -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('application/assetstwo/js/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('application/assetstwo/js/bootstrap.min.js'); ?>"></script>



<!-- end -->
<script type="text/javascript" src="<?php echo base_url('application/assetsthree/bundles/libscripts.bundle.js'); ?>">
</script>
<!-- Lib Scripts Plugin Js -->
<script type="text/javascript"
    src="<?php echo base_url('application/assetsthree/bundles/morphingsearchscripts.bundle.js'); ?>"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('application/assetstwo/js/jquery.accordion.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('application/assetstwo/js/jquery.custom-scrollbar.min.js'); ?>">
</script>
<script type="text/javascript" src="<?php echo base_url('application/assetstwo/js/icheck.min.js'); ?>"></script>



<!-- Jquery Core Js -->
<script type="text/javascript" src="<?php echo base_url('application/assetsthree/bundles/vendorscripts.bundle.js'); ?>">
</script>
<!-- Lib Scripts Plugin Js -->
<script type="text/javascript" src="<?php echo base_url('application/assetsthree/bundles/mainscripts.bundle.js'); ?>">
</script>
<!-- Custom Js -->




<!-- Internal Prism js-->
<script type="text/javascript" src="<?php echo base_url('application/assetsthree/plugins/prism/prism.js'); ?>"></script>



<!-- Treeview js-->
<script type="text/javascript" src="<?php echo base_url('application/assetsthree/plugins/treeview-prism/prism.js'); ?>">
</script>
<script type="text/javascript"
    src="<?php echo base_url('application/assetsthree/plugins/treeview-prism/prism-treeview.js'); ?>"></script>


<!-- Perfectscroll js-->
<script type="text/javascript"
    src="<?php echo base_url('application/assetsthree/plugins/perfect-scrollbar/perfect-scrollbar.min.js'); ?>">
</script>
<script type="text/javascript"
    src="<?php echo base_url('application/assetsthree/plugins/perfect-scrollbar/p-scroll.js'); ?>"></script>


<!-- Custom js-->
<script type="text/javascript" src="<?php echo base_url('application/assetsthree/js/custom.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('application/assetsthree/js/menuspy.min.js.js'); ?>"></script>
<!-- demo lib -->


<script>
$('.dashboard2').click(function() {
    if ($(this).find('ul.children')) {
        $(this).find('ul.children').toggle();
    }
    $(this).find("i").toggleClass("fe-chevron-right fe-chevrons-down");
});








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
    let categoryName = $this.parent().prev().prev().prev().children().text();
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



//dashboard



var asInitVals = new Array();

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



// dashboard


// confused soul


$(document).on('ready', function() {

    // ______________ Page Loading
    $(window).on("load", function(e) {
        $("#global-loader").fadeOut("slow");
    })

    // FOOTER


    // ______________ Back to Top
    $(window).on("scroll", function(e) {
        if ($(this).scrollTop() > 0) {
            $('#back-to-top').fadeIn('slow');
        } else {
            $('#back-to-top').fadeOut('slow');
        }
    });
    $("#back-to-top").on("click", function(e) {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });



    $(document).on('click', 'a[href^="#"]', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

    //   dashboard


    // dashboard

});

// confused soul end




var elm = document.querySelector('#main-menu');
var ms = new MenuSpy(elm);

(function() {

    if (typeof self === 'undefined' || !self.Prism || !self.document) {
        return;
    }

    /**
     * Class name for <pre> which is activating the plugin
     * @type {String}
     */
    var PLUGIN_CLASS = 'line-numbers';

    /**
     * Resizes line numbers spans according to height of line of code
     * @param  {Element} element <pre> element
     */
    var _resizeElement = function(element) {
        var codeStyles = getStyles(element);
        var whiteSpace = codeStyles['white-space'];

        if (whiteSpace === 'pre-wrap' || whiteSpace === 'pre-line') {
            var codeElement = element.querySelector('code');
            var lineNumbersWrapper = element.querySelector('.line-numbers-rows');
            var lineNumberSizer = element.querySelector('.line-numbers-sizer');
            var codeLines = element.textContent.split('\n');

            if (!lineNumberSizer) {
                lineNumberSizer = document.createElement('span');
                lineNumberSizer.className = 'line-numbers-sizer';

                codeElement.appendChild(lineNumberSizer);
            }

            lineNumberSizer.style.display = 'block';

            codeLines.forEach(function(line, lineNumber) {
                lineNumberSizer.textContent = line || '\n';
                var lineSize = lineNumberSizer.getBoundingClientRect().height;
                lineNumbersWrapper.children[lineNumber].style.height = lineSize + 'px';
            });

            lineNumberSizer.textContent = '';
            lineNumberSizer.style.display = 'none';
        }
    };

    /**
     * Returns style declarations for the element
     * @param {Element} element
     */
    var getStyles = function(element) {
        if (!element) {
            return null;
        }

        return window.getComputedStyle ? getComputedStyle(element) : (element.currentStyle || null);
    };

    window.addEventListener('resize', function() {
        Array.prototype.forEach.call(document.querySelectorAll('pre.' + PLUGIN_CLASS), _resizeElement);
    });

    Prism.hooks.add('complete', function(env) {
        if (!env.code) {
            return;
        }

        // works only for <code> wrapped inside <pre> (not inline)
        var pre = env.element.parentNode;
        // Original regex check for class, leaving it here
        // for its redundancy check
        var clsReg = /\s*\bline-numbers\b\s*/;
        // New regex check for opt-out class
        var clsRegB = /\s*\bno-line-numbers\b\s*/;

        if (env.element.querySelector(".line-numbers-rows")) {
            // Abort if line numbers already exists
            return;
        }

        // Added to facilitate opting out
        if (clsRegB.test(pre.className)) {
            // Respect the opt-out
            return;
        }

        if (clsReg.test(env.element.className)) {
            // Remove the class "line-numbers" from the <code>
            env.element.className = env.element.className.replace(clsReg, ' ');
        }
        if (!clsReg.test(pre.className)) {
            // Add the class "line-numbers" to the <pre>
            pre.className += ' line-numbers';
        }

        var match = env.code.match(/\n(?!$)/g);
        var linesNum = match ? match.length + 1 : 1;
        var lineNumbersWrapper;

        var lines = new Array(linesNum + 1);
        lines = lines.join('<span></span>');

        lineNumbersWrapper = document.createElement('span');
        lineNumbersWrapper.setAttribute('aria-hidden', 'true');
        lineNumbersWrapper.className = 'line-numbers-rows';
        lineNumbersWrapper.innerHTML = lines;

        if (pre.hasAttribute('data-start')) {
            pre.style.counterReset = 'linenumber ' + (parseInt(pre.getAttribute('data-start'), 10) - 1);
        }

        env.element.appendChild(lineNumbersWrapper);

        _resizeElement(pre);
    });

}());
</script>
