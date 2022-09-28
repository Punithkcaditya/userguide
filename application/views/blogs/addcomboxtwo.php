<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->

<!-- Sidebarover lay -->
<div class="sidebar-overlay" data-toggle="sidebar"></div>
<?php 
$this->load->helper('text');
if ($this->session->userdata('blog_error')) { ?>
<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $this->session->flashdata('blog_error'); ?>
</div>
<?php } if (empty($blog)): ?>
<div class="container card" style="box-shadow: rgba(0, 0, 0, 0.3) 12px 12px 5px 1px;">
    <div class="row text-white bg-dark">
        <div class="col-md-9 card-body">
            <div class="card-text">
                <p>No Records found....</p>
            </div>
        </div>
    </div>
</div>
<?php else:?>
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


    <div class="container-fluid">
        <div class="block-header">
            <h1><?php echo $blog['title'] ?></h1>
        </div>

        <div class="row clearfix">
            <div class="col-sm-12 col-lg-12 col-xl-11">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="card section bg-primary-transparent" id="About">
                            <div class="body">
                                <ul style="list-style: none;">
                                    <li>
                                        <h5 style="float: right;margin-top: -5px;"> Posted on:

                                            <?php echo date("d-m-y",strtotime($blog['created_on'])) ?>
                                        </h5>
                                    </li>
                                    <li>

                                        <?php 
										$id = $blog['id'];
											 $descrpt = $this->categories_model->get_inner_desc($id);
											 foreach($descrpt as $desc) : ?>
                                        <p>
                                            <?php echo $desc['description'] ?>
                                        </p>
										<?php endforeach; ?>
                                    </li>


                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
					<?php if (isset($blog['blog_image']) && $blog['blog_image']!='noimage.jpg'):?>
                    <div class="col-xs-6 col-sm-6">
                        <div class="card section" id="Indroduction">
                            <img src="<?php echo str_replace('index.php', '', site_url()); ?>/application/assets/images/blogs/<?php echo $blog['blog_image']; ?>"
                                alt="" loading="lazy" style="padding: 20px;width: auto;">
                        </div>
                    </div>
					<?php endif; ?>
                    <div class="col-xs-5 col-sm-5">
                        <div class="card youtube-sec">

                            <?php if (isset($blog['v_url']) && $blog['v_url'] != "") { ?>
                            <a href="https://www.youtube.com/watch?v=<?php echo $blog['v_url'] ?>"><img
                                    src="http://img.youtube.com/vi/<?php echo $blog['v_url'] ?>/1.jpg"
                                    style="padding: 20px;" /></a>
                            <?php } else if($blog['v_name'] != "") { ?>
                            <img alt="<?php echo $blog['v_name'] ?>"
                                src=" <?php echo base_url(); ?>application/assets/images/blogs/no-image.jpg"
                                style="width: 286px;padding: 20px;" />
                            <?php 	} else { ?>

								<script>
									document.querySelector('.youtube-sec').style.display = 'none'
								</script>
							<?php }?>
                            <div class="containers" style="padding:5px;">
                                <?php if (isset($blog['v_name']) && $blog['v_name'] != "" && $blog['v_url'] != "") { ?>
                                <h5 class="heading">
                                    <?php echo $blog['v_name'] ?>
                                </h5>
                                <?php } else if ($blog['v_url'] != ""){ ?>
                                <h5>Youtube video</h5>
                                <?php 	} else {} ?>
                            </div>
                        </div>


                        <header>
                            <h2 class="heading">Add your Question</h2>
                        </header>
                        <div class="contents">

                            <div class="comments-box boxpadding">
                                <div class="media">
                                    <div class="media-body">
                                        <?php 
											$id = $blog['id'];
											$counts = $this->blog_model->countComt($id); 
											if ($counts==1){?>
                                        <h5 class="media-heading">
                                            <?php echo $counts ?> Question</h5>
                                        <?php } else { ?>
                                        <h5 class="media-heading">
                                            <?php echo $counts ?> Questions</h5>
                                        <?php } ?>
                                        <form id="createcommentform">
                                            <!-- <div class="form-group"><input type="text" class="form-control" placeholder="Name here" id="user_name" name="user_name"></div> -->
                                            <input type='hidden' name='ne_id'
                                                value="<?= set_value("ne_id", $blog['id']) ?>" id='ne_id' />
                                            <input type='hidden' name='created_by'
                                                value="<?= set_value("created_by", $blog['created_by']) ?>"
                                                id='created_by' />
												<div class="form-group" style="width:100%;">
                                                <input type="text" id="user_name" placeholder="Enter Name"
                                                    name="user_name" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <textarea class="input form-control" rows="5" id="comments"
                                                    name="comments" value="<?= set_value("comments") ?>"></textarea>
                                            </div>

                                            <div id='submit_button'>
                                                <button tabindex="-1" class="btn btn-default" type="submit"
                                                    id="addcomment">Add
                                                    Questions</button>
                                            </div>
                                        </form>

                                        <div class="usercomments">

                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- reply -->
                        <div class="row replyrow" style="display:none;">
                            <div class="col-md-12" align="right">
                                <textarea align="center" id="replycomment" class="form-control"
                                    placeholder="please add comment" cols="30" rows="3"></textarea><br>
                                <button class="btn-warning btn" onclick="$('.replyrow').hide();"
                                    style="background: black;">close</button>
                                <button class="btn-primary btn" onclick="isreply=true;" id="addreply">reply</button>
                            </div>
                        </div>

                        <!-- reply -->
                    </div>

                    <!--  -->
                    <div class="col-xs-6" style="margin-bottom:20px;">
                        <?php if ($this->session->userdata('user_id') == $blog['created_by']) : ?>
                        <div class="columns social_icons">
                            <a class="btn btn-default pull-left member tables"
                                href="<?php echo site_url(); ?>/blogs/editfour/<?php echo $blog['id']; ?>/<?php echo $blog['category_id']; ?>">Edit</a>
                            <?php echo form_open('/blogs/delete/'.$blog['id']); ?>
                            <button type="submit" class="btn btn-default">Delete</button>
                            <?php echo form_close(); ?>
                        </div>

                        <?php endif ?>
                    </div>
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
<?php 
endif;
?>

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
                <a class="nav-item nav-link" href="<?php echo base_url(); ?>">OC<span
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
