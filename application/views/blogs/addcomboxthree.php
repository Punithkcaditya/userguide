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
                            <a href="<?php echo site_url('blogs/gettingstarted'); ?>">Getting-started</a>
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
                                                                    href="<?php echo site_url('/blogs/addcomboxtwo/'.$categ['slug'].'/'.$categ['id']); ?>"><?php echo $categ['title']?></a>
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

                                <div id="s-lg-box-8845846" class="s-lib-box s-lib-box-std">
                                    <h2 class="s-lib-box-title"><?php echo $blog['title'] ?>
                                    </h2>
                                    <div id="s-lg-box-collapse-8845846">
                                        <div class="s-lib-box-content">

                                            <div id="s-lg-content-17901751" class="  clearfix">
                                                <ul style="list-style: none;">
                                                    <li>
                                                        <h5 style="float: right;margin-top: -5px;"> Posted on:

                                                            <?php echo date("Y-m-d",strtotime($blog['created_on'])) ?>
                                                        </h5>
                                                    </li>

                                                    <!-- <h4><?php echo $blog['catle']; ?></h4> -->
                                                    <?php
												$id = $blog['id'];
											 $descrpt = $this->categories_model->get_inner_desc($id);
											 foreach($descrpt as $desc) : ?>
                                                    <li>
                                                        <p>
                                                            <?php echo $desc['description'] ?>
                                                        </p>
                                                    </li>
                                                    <?php endforeach; ?>

                                                </ul>

                                                <div class="row">
                                                    <div class="column">
                                                        <img src="<?php echo str_replace('index.php', '', site_url()); ?>/application/assets/images/blogs/<?php echo $blog['blog_image']; ?>"
                                                            alt="" loading="lazy" style="padding: 20px;width: 560px;">
                                                    </div>

                                                    <div class="column">


                                                        <!-- start -->

                                                        <div class="card">

                                                            <?php if (isset($blog['v_url']) and $blog['v_url'] != "") { ?>
                                                            <a
                                                                href="https://www.youtube.com/watch?v=<?php echo $blog['v_url'] ?>"><img
                                                                    src="http://img.youtube.com/vi/<?php echo $blog['v_url'] ?>/1.jpg"
                                                                    style="padding: 20px;" /></a>
                                                            <?php } else { ?>
                                                            <img alt="<?php echo $blog['v_name'] ?>"
                                                                src=" <?php echo base_url(); ?>application/assets/images/blogs/no-image.jpg"
                                                                style="width: 286px;padding: 20px;" />
                                                            <?php 	} ?>
                                                            <div class="container"
                                                                style="float:right;width:63%;padding-top: 25px;">
                                                                <?php if (isset($blog['v_name']) and $blog['v_name'] != "") { ?>
                                                                <h5 class="heading">
                                                                    <?php echo $blog['v_name'] ?>
                                                                </h5>
                                                                <?php } else { ?>
                                                                <h5>Youtube video</h5>
                                                                <?php 	} ?>
                                                            </div>
                                                        </div>


                                                        <!-- end -->

                                                        <!-- somment start -->
                                                        <div class="sec-box">
                                                            <a class="closethis">Close</a>

                                                            <div class="sec-box">
                                                                <a href="#" class="closethis">Close</a>
                                                                <header>
                                                                    <h2 class="heading">Add your Question</h2>
                                                                </header>
                                                                <div class="contents">
                                                                    <a href="#" class="togglethis">Toggle</a>
                                                                    <div class="comments-box boxpadding">
                                                                        <div class="media">
                                                                            <div class="media-body">
                                                                                <?php $id = $blog['id'];$counts = $this->blog_model->countComt($id); ?>
                                                                                <h5 class="media-heading">
                                                                                    <?php echo $counts ?> Questions</h5>
                                                                                <form id="createcommentform">
                                                                                    <!-- <div class="form-group"><input type="text" class="form-control" placeholder="Name here" id="user_name" name="user_name"></div> -->
                                                                                    <input type='hidden' name='ne_id'
                                                                                        value="<?= set_value("ne_id", $blog['id']) ?>"
                                                                                        id='ne_id' />
                                                                                    <input type='hidden'
                                                                                        name='created_by'
                                                                                        value="<?= set_value("created_by", $blog['created_by']) ?>"
                                                                                        id='created_by' />
                                                                                    <div class="form-group">
                                                                                        <textarea
                                                                                            class="input form-control"
                                                                                            rows="3" id="comments"
                                                                                            name="comments"
                                                                                            value="<?= set_value("comments") ?>"></textarea>
                                                                                    </div>

                                                                                    <div id='submit_button'>
                                                                                        <button tabindex="-1"
                                                                                            class="btn btn-default float-right"
                                                                                            type="submit"
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
                                                            </div>
                                                        </div>
                                                        <!-- comment end -->
                                                        <div class="row replyrow" style="display:none;">
                                                            <div class="col-md-12" align="right">
                                                                <textarea align="center" id="replycomment"
                                                                    class="form-control"
                                                                    placeholder="please add comment" cols="30"
                                                                    rows="3"></textarea><br>
                                                                <button class="btn-warning btn"
                                                                    onclick="$('.replyrow').hide();"
                                                                    style="background: black;">close</button>
                                                                <button class="btn-primary btn" onclick="isreply=true;"
                                                                    id="addreply">reply</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- edit -->
                                    <div class="col-xs-12" style="margin-bottom:20px;">
                                        <?php if ($this->session->userdata('user_id') == $blog['created_by']) : ?>
                                        <div class="columns social_icons">
                                            <a class="btn btn-default pull-left member tables"
                                                href="<?php echo site_url(); ?>/blogs/editthree/<?php echo $blog['id']; ?>">Edit</a>
                                            <?php echo form_open('/blogs/delete/'.$blog['id']); ?>
                                            <button type="submit" class="btn btn-default">Delete</button>
                                            <?php echo form_close(); ?>
                                        </div>

                                        <?php endif ?>
                                    </div>
                                </div>
                                <!-- delete -->

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
    </script><!-- END: Analytics code -->
</body>


</html>
