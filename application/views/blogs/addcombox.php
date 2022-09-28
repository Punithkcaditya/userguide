<!-- Wrapper Start -->
<div class="wrapper">
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
                        <a href="#"><img
                                src="<?php echo str_replace('index.php','',site_url());?>application/assetstwo/images/logo.jpg"
                                alt="Adminise" /></a>
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
                                <!-- <a class="closethis">Close</a> -->
                                <header>
                                    <h2 class="heading"><?php echo $blog['title'] ?></h2>
                                </header>
                                <div class="contents">
                                    <a class="togglethis">Toggle</a>
                                    <div class="linkslist boxpadding">
                                        <ul>
                                            <li>
                                                <h5 style="float: right;"> Posted on: <?php echo $blog['created_on']; ?>
                                                </h5>
                                            </li>
                                            <li>
                                                <h4>List group item heading</h4>
                                                <p>
                                                    <?php echo $blog['description']; ?>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="row sec-box">
                                <div class="col-xs-6">
                                    <img src="<?php echo str_replace('index.php', '', site_url()); ?>/application/assets/images/blogs/<?php echo $blog['blog_image']; ?>"
                                        alt="" loading="lazy" style="padding-bottom:10px; width: 280px;">
                                </div>
                                <div class="col-xs-6">
                                    <div class="sec-box">
                                        <a class="closethis">Close</a>
                                        <header>

                                            <?php if (isset($blog['v_name']) and $blog['v_name'] != "") { ?>
                                            <h5 class="heading" style="width: 300px;"><?php echo $blog['v_name'] ?></h5>
                                            <?php } else { ?>
                                            <h5>Youtube video</h5>
                                            <?php 	} ?>
                                            </h2>
                                        </header>
                                        <div class="contents">
                                            <a class="togglethis">Toggle</a>
                                            <section class="map-box">

                                                <?php if (isset($blog['v_url']) and $blog['v_url'] != "") { ?>
                                                <a href="https://www.youtube.com/watch?v=<?php echo $blog['v_url'] ?>"><img
                                                        src="http://img.youtube.com/vi/<?php echo $blog['v_url'] ?>/1.jpg" /></a>
                                                <?php } else { ?>
                                                <img alt="<?php echo $blog['v_name'] ?>"
                                                    src=" <?php echo base_url(); ?>application/assets/images/blogs/no-image.jpg"
                                                    style="width: 200px;" />
                                                <?php 	} ?>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row sec-box">
                                <div class="col-xs-12" style="margin-bottom:50px;">
                                    <?php if ($this->session->userdata('user_id') == $blog['created_by']) : ?>
                                    <div class="columns social_icons">
                                        <a class="btn btn-default pull-left member tables"
                                            href="<?php echo site_url(); ?>/blogs/edittwo/<?php echo $blog['id']; ?>">Edit</a>
                                        <?php echo form_open('/blogs/delete/'.$blog['id']); ?>
                                        <button type="submit" class="btn btn-default">Delete</button>
                                        <?php echo form_close(); ?>
                                    </div>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-4 ">
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
                                                    <?php 
												$id = $blog['id'];
												$counts = $this->blog_model->countComt($id); ?>
                                                    <h5 class="media-heading"><?php echo $counts ?> Questions</h5>
                                                    <form id="createcommentform">
                                                        <!-- <div class="form-group"><input type="text" class="form-control" placeholder="Name here" id="user_name" name="user_name"></div> -->
                                                        <input type='hidden' name='ne_id'
                                                            value="<?= set_value("ne_id", $blog['id']) ?>" id='ne_id' />
                                                        <input type='hidden' name='created_by'
                                                            value="<?= set_value("created_by", $blog['created_by']) ?>"
                                                            id='created_by' />
                                                        <div class="form-group">
                                                            <textarea class="input form-control" rows="3" id="comments"
                                                                name="comments"
                                                                value="<?= set_value("comments") ?>"></textarea>
                                                        </div>

                                                        <div id='submit_button'>
                                                            <button tabindex="-1" class="btn btn-default float-right"
                                                                type="submit" id="addcomment">Add Questions</button>
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
                        </div>








                    </div>
                    <div class="row replyrow" style="display:none;">
                        <div class="col-md-12" align="right">
                            <textarea align="center" id="replycomment" class="form-control"
                                placeholder="please add comment" cols="30" rows="3"></textarea><br>
                            <button class="btn-warning btn" onclick="$('.replyrow').hide();"
                                style="background: black;">close</button>
                            <button class="btn-primary btn" onclick="isreply=true;" id="addreply">reply</button>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
            </div>

            <!-- Wrapper End -->
            <?php 
endif;
?>
