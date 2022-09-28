<!--HEADER-->

<section>
    <h1 class="title"><?php echo $blog['title']; ?></h1>
    <span><a href="<?php echo base_url(); ?>">Home</a> <i class="fa fa-angle-double-right"></i> <a href="#"
            class="active">Blog</a></span>
</section>
</header>

<!--BLOG SECTION-->
<div class="blog_container">
    <div class="blog_content">
        <div class="left_content">
            <!--CARD BEGINING-->
            <div class="blog_card">
                <a href="article.html" class="figure">
                    <img src="<?php echo str_replace('index.php', '', site_url()); ?>/application/assets/images/blogs/<?php echo $blog['blog_image']; ?>"
                        alt="" loading="lazy">
                    <span class="tag"><?php echo $blog['created_on']; ?></span>
                </a>
                <section>
                    <a href="#" class="title"><?php echo $blog['title']; ?></a>
                    <p><?php echo $blog['description']; ?> </p>
                </section>
            </div>
            <!--CARD ENDS-->
            <!--CARD BEGINING-->
            <!-- <div class="blog_card">
<a href="#" class="figure">
<img src="https://i.postimg.cc/KcwkZQsx/dummy.png" alt="" loading="lazy">
<span class="tag">15 JAN</span>
</a>
<section>
<a href="article.html" class="title">Blog title goes here...</a>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... </p>
</section>
</div> -->
            <!--CARD ENDS-->
            <!--CARD BEGINING-->


            <!--CARD ENDS-->
        </div>
        <?php if ($this->session->userdata('user_id') == $blog['created_by']) : ?>
        <div class="columns social_icons">
            <a class="btn btn-default pull-left member tables"
                href="<?php echo site_url(); ?>/blogs/edit/<?php echo $blog['id']; ?>">Edit</a>
            <?php echo form_open('/blogs/delete/'.$blog['id']); ?>
            <input type="submit" value="Delete" class="btn member tables">
        </div>

        <?php endif ?>
        <section id="app">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="comment">
                            <p v-for="items in item" v-text="items"></p>
                        </div>
                        <!--End Comment-->
                    </div>
                    <!--End col -->
                </div><!-- End row -->


                <!-- reply section -->




                <!-- reply section -->

                <div class="row" style="display:none;">
                    <div class="col-6">
                        <hr>
                        <form id="comment_form" action="<?php echo site_url(); ?>/blogs/add_comment/<?= $blog['id'] ?>"
                            method='post'>
                            <div class="form-group">
                                <input class="input form-control" type="text" required name="comment_name" id='name'
                                    placeholder="Name" value="<?= set_value("comment_name") ?>" />
                            </div>
                            <!-- 
<div class="form-group">
<input class="input form-control" type="text" name="comment_email" placeholder="email" value="<?= set_value("comment_email") ?>" id='email'/>
</div> -->


                            <div class="form-group">
                                <!-- <textarea type="text" id="text_area" class="input form-control" placeholder="Write a comment" v-model="newItem" @keyup.enter="addItem()"></textarea> -->
                                <textarea class="input form-control" rows="3" name="comment_body"
                                    value="<?= set_value("comment_body") ?>" id='comment'></textarea>
                            </div>
                            <input type='hidden' name='parent_id' value="0" id='parent_id' />
                            <input type='hidden' name='ne_id' value="<?= set_value("ne_id", $blog['id']) ?>"
                                id='parent_id' />
                            <input type='hidden' name='slug' value="<?= set_value("slug", $blog['slug']) ?>"
                                id='slug' />

                            <!-- <textarea type="text" id="text_area" class="input form-control" placeholder="Write a comment" v-model="newItem" @keyup.enter="addItem()"></textarea> -->
                            .
                            <!-- <button v-on:click="addItem()" class='primaryContained float-right' placeholder="Write a comment" type="submit" id="add_data">Add Comment</button> -->


                            <div id='submit_button'>
                                <button class='primaryContained float-right' placeholder="Write a comment" name="submit"
                                    type="submit" id="add_data">Add Comment</button>
                                <!-- <input class="primaryContained float-right" type="submit" name="submit" value="add comment"/> -->
                            </div>
                            <input type="hidden" id="no" name="no" value="">
                        </form>



                    </div><!-- End col -->
                </div>
                <!--End Row -->
            </div>
            <!--End Container -->
        </section><!-- end App -->







        <div class="row" style="margin-top:60px;">
            <div class="col-md-6">
			<h2 style="color:black;">Add your Question</h2>
			<b><h4 id="comm_count" style="color:black;margin-bottom:40px;"><?php echo $counts ?> Comments </h4></b>
                <form id="createcommentform">
     <!-- <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name here" id="user_name" name="user_name">
                    </div> -->
					<input type='hidden' name='ne_id' value="<?= set_value("ne_id", $blog['id']) ?>" id='ne_id' />
					<input type='hidden' name='created_by' value="<?= set_value("created_by", $blog['created_by']) ?>" id='created_by' />
                    <div class="form-group">
                        <textarea class="input form-control" rows="3" id="comments" name="comments"
                            value="<?= set_value("comments") ?>"></textarea>
                    </div>

					<div id='submit_button'>
                                <button class='primaryContained float-right'  name="submit"
                                     id="addcomment">Add Comment</button>
                            </div>
							</form>
            <div class="row">
                <div class="col-md-12">
                    <div class="usercomments">

                    </div>
                </div>
            </div>
            <div class="row replyrow" style="display:none;">
                <div class="col-md-12" align="right">
                    <textarea align="center" id="replycomment" class="form-control" placeholder="please add comment"
                        cols="30" rows="3" style="margin-top: 100px;"></textarea><br>
                    <button class="btn-default btn" onclick="$('.replyrow').hide();" style="background: black;">close</button>
                    <button class="btn-primary btn" onclick="isreply=true;" id="addreply">reply</button>
                </div>
            </div>
         
        </div>
    </div>













</div>

<div class="blog_content right_content">
    <!--SEARCH COLUMN BEGINING-->
    <!--SEARCH COLUMN ENDS-->
    <!--BOOKS COLUMN BEGINING-->

    <!--CATEGORIES COLUMN ENDS-->
    <!--POSTS COLUMN BEGINING-->
    <div class="columns posts">
        <span class="title"><?php if (isset($blog['v_name']) and $blog['v_name'] != "") { ?>
            <h5><?php echo $blog['v_name'] ?></h5>
            <?php  } else { ?>
            <h5>Video Link</h5> <?php 	} ?>
            <!-- <a href="#" title="Explore More"><i class="fa fa-share"></i></a> -->
        </span>
        <section>
            <?php if (isset($blog['v_url']) and $blog['v_url'] != "") { ?>
            <a href="https://www.youtube.com/watch?v=<?php echo $blog['v_url'] ?>"><img
                    src="http://img.youtube.com/vi/<?php echo $blog['v_url'] ?>/1.jpg" loading="lazy" /></a>
            <?php } else { ?>
            <img alt="<?php echo $blog['v_name'] ?>"
                src=" <?php echo base_url(); ?>application/assets/images/blogs/no-image.jpg" loading="lazy" />
            <?php 	} ?>
            <!-- <a href="#"><img src="https://i.postimg.cc/KcwkZQsx/dummy.png" alt="" >
<p>Be brave, be strong, be bold. Man dies but once. </p>
</a> -->
        </section>




        <!-- second comment -->


    </div>
    <!--POSTS COLUMN ENDS-->
    <!--COMMENTS COLUMN BEGINING-->
    <!-- <div class="columns comments">
<span class="title"> Recent Comments <a href="#" title="Explore More"><i class="fa fa-share"></i></a></span>
<section>
<marquee direction="up" scrollamount="4" onMouseOver="this.stop()" onMouseOut="this.start()" class="marquee2">
<p>Remember, torn clothes should not be left at home. Dispose of them out. Buying new clothes like towels.</p>
<p>wearing clothes, bedsheets are like inviting good luck to the home.</p>
<p>Arrange doormats before every door and please change the doormats once in 6/8 months or maximum within 1 year. For More Daily</p>
</marquee>
</section>
</div> -->
    <!--COMMENTS COLUMN ENDS-->
    <!--SOCIAL MEDIA ICONS BEGINING-->
    <div class="columns social_icons">
        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" title="Instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" title="Youtube"><i class="fa fa-youtube"></i></a>
        <a href="#" title="Whatsapp"><i class="fa fa-whatsapp"></i></a>
        <a href="#" title="Telegram"><i class="fa fa-telegram"></i></a>
    </div>
    <!--SOCIAL MEDIA ICONS ENDS-->
</div>


<!-- comment two start -->


<!-- comment two end -->
</div>

<!--REMOVE THIS-->







<!-- blog front-end end -->
