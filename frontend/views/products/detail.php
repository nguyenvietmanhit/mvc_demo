<div class="main-content-wrapper">
    <!--MAIN LEFT-->
    <div class="main-left content-body">
        <!--BREADCRUMB-->
        <div class="content-breadcrumb content-timeline">
            <!--Timeline items start -->
            <h1 class="detail-post-breadcrumb post-list-title">
                <a href="#" class="detail-link-breadcrumb link-category-item">Thể thao</a> <span
                        class="color"> &gt; </span>
                <a href="#" class="detail-link-breadcrumb link-category-item">Bóng đá</a>
                <span class="link-category-child">
                                    <a href="#" class="link-category-child-item">Điểm tin thế giới</a>
                                    <a href="#" class="link-category-child-item">Khám phá</a>
                                    <a href="#" class="link-category-child-item">Hồ sơ</a>
                                    <a href="#" class="link-category-child-item">Năm châu</a>
                                </span>
            </h1>
            <p class="current-time">
              <?php echo date('d-m-Y H:i:s'); ?>

                <span class="socical-share color">
                            <a href="socical-link" title="Share facebook">
                            <i class="socical-fa fa fa-facebook-square"></i>
                                </a>
                            <a href="socical-link" title="Share twitter">
                            <i class="socical-fa fa fa-twitter-square"></i>
                            </a>
                        </span>
            </p>
        </div>
        <!--END BREADCRUMB-->

        <?php

        ?>
        <!--CONTENT-->
        <div class="main">
            <div class="timeline-items">

                <div class="timeline-item">
                    <div class="timeline-left">
                        <div class="timeline-left-wrapper">
                            <a href="#" class="timeline-category" data-zebra-tooltip="" title="<?php echo $product['category_name']; ?>"><i
                                        class="material-icons"></i></a>
                            <span class="timeline-date"><?php echo date('d-m-Y', strtotime($product['created_at'])); ?></span>
                        </div>
                    </div>
                    <div class="timeline-right">
                        <div class="timeline-post-image">
                            <a href="#">
                                <img src="../backend/assets/uploads/<?php echo $product['avatar'] ?>" width="260">
                            </a>
                        </div>
                        <div class="timeline-post-content">
                            <!--<a href="#" class="timeline-category-name font-arial">Thể thao</a>-->
                            <h1 class="post-list-title"><?php echo $product['title']; ?></h1>

                        </div>
                    </div>
                </div>

            </div>

            <!--Timeline items end -->
            <div class="detail-content-wrap timeline-items">
                <b class="detail-summary"><?php echo $product['title']; ?></b>
                <div class="detail-description">
                  <?php echo $product['content']; ?>
                </div>
            </div>
            <div class="detail-comment">
                <h1 class="post-list-title">
                    <a href="#" class="link-category-item">Bình luận</a>
                </h1>
                <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="https://sukien.net"
                     data-width="100%" data-numposts="5" fb-xfbml-state="rendered"
                     fb-iframe-plugin-query="app_id=462973804185893&amp;container_width=782&amp;height=100&amp;href=https%3A%2F%2Fsukien.net%2F&amp;locale=en_GB&amp;numposts=5&amp;sdk=joey&amp;version=v3.3"
                     style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 628px;"><iframe
                                name="f10eba2bdb4ca6" width="1000px" height="100px"
                                data-testid="fb:comments Facebook Social Plugin"
                                title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true"
                                allowfullscreen="true" scrolling="no" allow="encrypted-media"
                                src="https://www.facebook.com/v3.3/plugins/comments.php?app_id=462973804185893&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df23163aacdd2754%26domain%3Dlocalhost%26origin%3Dhttp%253A%252F%252Flocalhost%253A63342%252Ff2d27fa308fe5a4%26relation%3Dparent.parent&amp;container_width=782&amp;height=100&amp;href=https%3A%2F%2Fsukien.net%2F&amp;locale=en_GB&amp;numposts=5&amp;sdk=joey&amp;version=v3.3"
                                style="border: none; visibility: visible; width: 100%; height: 628px;"
                                class=""></iframe></span></div>
            </div>

            <div class="category-one category-two">

                <h1 class="post-list-title">
                    <a href="#" class="link-category-item">Tin cùng chuyên mục</a>
                </h1>
                <!--<select class="frm-input">-->
                <!--<option value="1">Thể thao</option>-->
                <!--<option value="1">Book</option>-->
                <!--<option value="1">Cinema</option>-->
                <!--</select>-->

                <div class="two-item-wrap">
                    <div class="link-secondary-wrap">
                        <div class="item-link-secondary">
                            <a href="not-defined.html">
                                <img class="secondary-img img-responsive" src="assets/images/category-img-1.png">
                            </a>

                            <div class="two-item-title">
                                <a href="not-defined.html" class="two-item-link">
                                    <h4 class="timeline-post-title">
                                        Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô
                                        số phát
                                        ngôn ấn tượng!
                                    </h4>
                                </a>
                                <div class="category-time-ago">
                                    <a href="#" class="timeline-category-name font-arial">Thể thao</a> - <span
                                            class="time-ago">3 phút trước</span>
                                </div>
                                <div class="short-description">
                                    Có thể thấy, Lương Thùy Linh ngay từ nhỏ đã được rèn dũa có nét chữ đẹp,
                                    ngay
                                    ngắn, trình bày gọn gàng.
                                    Nhiều người còn ...
                                </div>

                            </div>
                        </div>
                        <div class="item-link-secondary">
                            <a href="not-defined.html">
                                <img class="secondary-img img-responsive" src="assets/images/category-img-1.png">
                            </a>

                            <div class="two-item-title">
                                <a href="not-defined.html" class="two-item-link">
                                    <h4 class="timeline-post-title">
                                        Suốt mùa 2 "Người ấy là ai", Trấn Thành &amp; Hương Giang đã để lại vô
                                        số phát
                                        ngôn ấn tượng!
                                    </h4>
                                </a>
                                <div class="category-time-ago">
                                    <a href="#" class="timeline-category-name font-arial">Thể thao</a> - <span
                                            class="time-ago">3 phút trước</span>
                                </div>
                                <div class="short-description">
                                    Có thể thấy, Lương Thùy Linh ngay từ nhỏ đã được rèn dũa có nét chữ đẹp,
                                    ngay
                                    ngắn, trình bày gọn gàng.
                                    Nhiều người còn ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END CONTENT-->
    </div>
    <!--END MAIN LEFT-->

    <!--MAIN RIGHT-->
    <div class="main-right">
        <!--SIDEBAR RIGHT-->
        <div class="content-sidebar">
            <div class="sidebar_inner">

                <div class="widget-item">
                    <div class="post-list-header">
                        <h1 class="post-list-title">
                            <a href="#" class="link-category-item">Đọc nhiều nhất</a>
                        </h1>
                    </div>
                    <div class="w-boxed-post">
                        <ul>
                            <li class="">
                                <a href="not-defined.html"
                                   style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img7.jpg);">
                                    <div class="box-wrapper">
                                        <div class="box-left">
                                            <span>1</span>
                                        </div>
                                        <div class="box-right">
                                            <h3 class="p-title">Things to Consider When Choosing City Moving
                                                Companies</h3>
                                            <div class="p-icons">
                                                213 likes . 124 comments
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="">
                                <a href="not-defined.html"
                                   style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img5.jpg);">
                                    <div class="box-wrapper">
                                        <div class="box-left">
                                            <span>2</span>
                                        </div>
                                        <div class="box-right">
                                            <h3 class="p-title">Things to Consider When Choosing City Moving
                                                Companies</h3>
                                            <div class="p-icons">
                                                213 likes . 124 comments
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="">
                                <a href="not-defined.html"
                                   style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img6.jpg);">
                                    <div class="box-wrapper">
                                        <div class="box-left">
                                            <span>3</span>
                                        </div>
                                        <div class="box-right">
                                            <h3 class="p-title">Things to Consider When Choosing City Moving
                                                Companies</h3>
                                            <div class="p-icons">
                                                213 likes . 124 comments
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="active">
                                <a href="not-defined.html"
                                   style="background-image: url(http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img3.jpg);">
                                    <div class="box-wrapper">
                                        <div class="box-left">
                                            <span>4</span>
                                        </div>
                                        <div class="box-right">
                                            <h3 class="p-title">Things to Consider When Choosing City Moving
                                                Companies</h3>
                                            <div class="p-icons">
                                                213 likes . 124 comments
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="widget-item">
                    <div class="w-header">
                        <div class="w-title"></div>
                        <div class="w-seperator"></div>
                    </div>
                    <div class="w-carousel-post">
                        <div class="owl-carousel owl-loaded owl-drag" id="widgetCarousel">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1392px;">
                                    <div class="owl-item active" style="width: 348px;">
                                        <div class="item">
                                            <a href="#">
                                                <div class="w-play-img">
                                                    <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img4.jpg"
                                                         width="300">
                                                    <span class="w-video-icon"><i class="material-icons"></i></span>
                                                </div>
                                                <span class="w-post-title">It has roots in a piece of classical Latin literature from</span>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 348px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img5.jpg"
                                                     width="300">
                                                <span class="w-post-title">Lorem Ipsum used since</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 348px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img6.jpg"
                                                     width="300">
                                                <span class="w-post-title">English versions from the 1914 translation</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 348px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/news-test-images/news-img7.jpg"
                                                     width="300">
                                                <span class="w-post-title">The standard chunk of Lorem Ipsum used since</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"><span
                                            aria-label="Previous">‹</span></button>
                                <button type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span></button>
                            </div>
                            <div class="owl-dots">
                                <button role="button" class="owl-dot active"><span></span></button>
                                <button role="button" class="owl-dot"><span></span></button>
                                <button role="button" class="owl-dot"><span></span></button>
                                <button role="button" class="owl-dot"><span></span></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-header">
                    <div class="w-title">Quảng cáo</div>
                    <div class="w-seperator"></div>

                </div>

                <a href="#" class="widget-ad-box">
                    <img src="http://tevratgundogdu.com/works/ideabox-html-template/img/adbox300x250.png" width="300"
                         height="250">
                </a>

            </div>
        </div>
        <!--END SIDEBAR RIGHT-->
    </div>
    <!--END MAIN RIGHT-->
</div>