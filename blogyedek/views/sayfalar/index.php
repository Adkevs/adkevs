<?php require "views/header.php";?>

<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <!-- post content -->
            <div class="content col-lg-9">

                <!-- Blog -->
                <div id="blog">

                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>Lifestyle</a></span>
                                <h2><a href="#">Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor</a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere luctus commodo dolor. Vivamus luctus commodo dolor porta pulvinar euismod ante feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- end: Blog -->
                <!-- Pagination -->
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- end: Pagination -->
            </div>
            <!-- end: post content -->
            <!-- Sidebar-->
            <div class="sidebar sticky-sidebar col-lg-3">
                <!--Tabs with Posts-->
                <div class="widget ">
                    <h4 class="widget-title">Recent Posts</h4>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="<?php echo URL;; ?>/dosyalar/images/blog/thumbnail/5.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">A true story, that never been told!</a>
                                <span class="post-date"><i class="icon-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="<?php echo URL;; ?>/dosyalar/images/blog/thumbnail/6.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                                <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="<?php echo URL;; ?>/dosyalar/images/blog/thumbnail/7.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet</a>
                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End: Tabs with Posts-->
                <!-- Twitter widget -->
                <div class="widget widget-tweeter" data-username="envato" data-limit="2">
                    <h4 class="widget-title">Recent Tweets</h4>
                </div>
                <!-- end: Twitter widget-->
                <!--widget tags -->
                <div class="widget  widget-tags">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tags">
                        <a href="#">Design</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Digital</a>
                        <a href="#">Branding</a>
                        <a href="#">HTML</a>
                        <a href="#">Clean</a>
                        <a href="#">Peace</a>
                        <a href="#">Love</a>
                        <a href="#">CSS3</a>
                        <a href="#">jQuery</a>
                    </div>
                </div>
                <!--end: widget tags -->
                <!--widget newsletter-->
                <div class="widget  widget-newsletter">
                    <form class="widget-subscribe-form" novalidate action="include/subscribe-form.php" role="form" method="post">
                        <h4 class="widget-title">Newsletter</h4>
                        <small>Stay informed on our latest news!</small>
                        <div class="input-group">
                            <input type="email" required name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                            <span class="input-group-btn">
                                        <button type="submit" id="widget-subscribe-submit-button" class="btn"><i class="fa fa-paper-plane"></i></button>
                                    </span> </div>
                    </form>
                </div>
                <!--end: widget newsletter-->
            </div>
            <!-- end: Sidebar-->
        </div>
    </div>
</section> <!-- end: Content -->



<?php require "views/footer.php";?>
