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
            <?php $categories = $this->categories_model->get_published_cat(); ?>
            <ul class="list navi-acc" id="documenter_nav">
                <?php foreach ($categories as $category) { ?>

                <li class="nav-item dashboard2"><a class="nav-link" href="#">
                        <i class="fe fe-chevron-right sidemenu-icon"></i>
                        <span class="sidemenu-label"><?php echo $category['title']?></span></a>
                    <ul class="children">
                        <?php $catid = $category['id'];
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


    <div class="container-fluid bg-nice">


        <div class="row clearfix">
            <div class="col-sm-12 col-lg-12 col-xl-11">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-md-12"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-12">

                                <div class="imagelocation">
                                    <div class="form-group">
                                        <div class="input-group ">
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
                                <input type="hidden" name="count_itemscryto" id="count_itemscryto"
                                    value="<?= $count ?>" />
                                <!-- 1 -->
                                <label style="margin-top:15px;">Title</label>
                                <div class="form-group ">
                                    <input type="text" placeholder="Add Title" name="title" class="form-control"
                                        value="<?php echo $blog->title; ?>">
                                </div>
                                <!-- 2 -->
                                <label style="margin-top:15px;">Upload Image</label>
                                <div class="no-img">
                                    <div class="form-group">
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                <input type="hidden" id="old_prod_image" name="old_prod_image"
                                                    value="<?php echo $blog->blog_image; ?>">
                                                <input type="file" accept="image/png, image/jpeg, image/jpg"
                                                    name="userfile" class="custom-file-input form-control"
                                                    id="inputGroupFile02">
                                                <small><?php if(isset($imageError)){echo $imageError;} ?></small>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <label class="video url" for="v_url">Paste
                                    Url</label>
                                <div class="form-group" style="margin-top:15px;">

                                    <input type="text" placeholder="add link here" id="v_url" class="form-control"
                                        name="v_url" value="https://youtube.com/watch?v=<?php echo $blog->v_url; ?>">
                                </div>
                                <!-- 4 -->
                                <label style="margin-top:15px;">Description</label>
                                <?php foreach($description->result() as $row): ?>
                                <div class="form-group " id="addanother<?= $row->order_no; ?>">
                                    <input type="hidden" name="count_items" id="count_items"
                                        value="<?= $row->order_no; ?>" />
                                    <input type="hidden" name="decription_id" id="decription_id"
                                        value="<?= $row->description_id; ?>" />
                                    <textarea id="editor<?= $row->order_no;?>" class="form-control"
                                        name="description<?= $row->order_no; ?>"
                                        placeholder="Add description"><?php echo $row->description; ?></textarea>
                                </div>

                                <?php endforeach; ?>
                                <!-- 5 -->
                                <label style="margin-top:15px;">Category</label>
                                <div class="form-group ">
                                    <select name="category_id" class="form-control">
                                        <?php foreach($categoriesopt as $categor): ?>
                                        <option value="<?php echo $categor['id']; ?>"
                                            <?php echo !empty($categor['id']) && $blog->category_id == $categor['id'] ? "selected" : ''; ?>>
                                            <?php echo $categor['title']; ?></option>

                                        <?php endforeach?>
                                    </select>
                                </div>


                                <!-- 6 -->
                                <div class="form-group " style="margin-top: 10px;">
                                    <input type="submit" class="btn btn-primary " value="Update"
                                        class="btn btn-default btn-lg">
                                    <a href="<?= site_url()?>" class="btn btn-primary ">BACK</a>

                                    <button class="btn btn-info addfields " id="addrow">+
                                        Add Fields</button>
                                    <button class="btn btn-info hidebtn " type="button" id="deletebtn">Delete
                                        Fields</button>
                                </div>
                                <?php echo form_close(); ?>
                                <div class="imagelocation" style="position: absolute;top: 88px;left:5px;width: 100%;">
                                    <div class="form-group" style="display:none;">
                                        <div class="input-group ">
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









<!-- Jquery Core Js -->
<script type="text/javascript" src="<?php echo base_url('application/assetsthree/bundles/libscripts.bundle.js'); ?>">
</script>
<!-- Lib Scripts Plugin Js -->
<script type="text/javascript"
    src="<?php echo base_url('application/assetsthree/bundles/morphingsearchscripts.bundle.js'); ?>"></script>
<!-- morphing search Js -->
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
var elm = document.querySelector('#main-menu');
var ms = new MenuSpy(elm);

(function() {





    var n = '<?php echo $count; ?>';
    for (var i = 1; i <= n; i++) {
        CKEDITOR.replace('editor' + i + '', {
            filebrowserImageBrowseUrl: '<?php echo base_url('application/assets/kcfinder/browse.php');?>',
            extraPlugins: "N1ED-editor",
            skin: "n1theme", // own CKEditor theme, included into ZIP
            removePlugins: "iframe",
			height: 500
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
        $("#addanother" + count).append(newRow);
        CKEDITOR.replace('editor' + oneplus + '', {
            filebrowserImageBrowseUrl: '<?php echo base_url('application/assets/kcfinder/browse.php');?>',
			extraPlugins: "N1ED-editor",
            skin: "n1theme", // own CKEditor theme, included into ZIP
            removePlugins: "iframe",
			height: 500
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


$('.dashboard2').click(function() {
    if ($(this).find('ul.children')) {
        $(this).find('ul.children').toggle();
    }
    $(this).find("i").toggleClass("fe-chevron-right fe-chevrons-down");
});




$(document).on('ready', function() {

    // ______________ Page Loading
    $(window).on("load", function(e) {
        $("#global-loader").fadeOut("slow");
    })

    // FOOTER
    document.getElementById("year").innerHTML = new Date().getFullYear();

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
</script>
