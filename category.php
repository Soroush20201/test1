<html>
<?php get_header(); ?>
      <div class="latest-posts">
         <div class="container-fluid">
            <div class="col-md-9">
               <div class="blog-title-span">
                  <span class="title">اخبار و مقالات</span>
               </div>
               <?php

?>
               <?php
            // Get the current category object
$current_category = get_queried_object();

if ($current_category instanceof WP_Term) {
    // Check if it's a valid category object
    $category_slug = $current_category->slug;
} else {
    $category_slug = 'default-slug'; // Set a default slug in case no category is found
}
// Replace 'your_category_slug' with the slug of your target category.
$cat_query = new WP_Query("category_name='$category_slug");

if ($cat_query->have_posts()) {
    while ($cat_query->have_posts()) {
        $cat_query->the_post();
        ?>
        
        <div class="col-md-4">
                  <div class="post-box">
                     <a href="<?php the_permalink(); ?>">
                        <figure>
                        <?php the_post_thumbnail(); // Use 'thumbnail' or other image size here ?>
                           <figcaption class="meta-fig">
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>&nbsp;
                              <span><i class="fa fa-comment-o"></i> 12</span>
                           </figcaption>
                           <figcaption class="view">
                              <span>بخش ویژه</span>
                              <span>انجمن</span>
                              <span>اتاق خبر</span>
                           </figcaption>
                        </figure>
                        <div class="text-p">
                           <h5><?php the_title(); ?></h5>
                           <p> 
                           <?php the_excerpt(); ?>
                           </p>
                           <div class="text-rigt">
                     <a href="<?php the_permalink(); ?>">ادامه ...</a></div>
                     </div>
                     </a>
                  </div>
               </div>
        <?php
    }
} else {
    echo 'No posts found in this category.';
}

wp_reset_postdata(); // Restore the global post data.
?>


               <div class="col-md-4">
                  <div class="post-box">
                     <a href="#">
                        <figure>
                           <img src="img/290667058azer news.jpg" alt="">
                           <figcaption class="meta-fig">
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>&nbsp;
                              <span><i class="fa fa-comment-o"></i> 12</span>
                           </figcaption>
                           <figcaption class="view">
                              <span>بخش ویژه</span>
                              <span>انجمن</span>
                              <span>اتاق خبر</span>
                           </figcaption>
                        </figure>
                        <div class="text-p">
                           <h5>چگونه از اشخاص مطالبی که دوست نداریم دوری کنیم ؟</h5>
                           <p> متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت متن ساختگی با تولید سادگی
                              نامفهوم تولید سادگی از صنعت
                           </p>
                           <div class="text-rigt">
                     <a href="#">ادامه ...</a></div>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="post-box">
                     <a href="#">
                        <figure>
                           <img src="img/unnamed.jpg" alt="">
                           <figcaption class="meta-fig">
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>&nbsp;
                              <span><i class="fa fa-comment-o"></i> 12</span>
                           </figcaption>
                           <figcaption class="view">
                              <span>مجلات</span>
                              <span>انجمن</span>
                           </figcaption>
                        </figure>
                        <div class="text-p">
                           <h5>چگونه از اشخاص مطالبی که دوست نداریم دوری کنیم ؟</h5>
                           <p> متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت متن ساختگی با تولید سادگی
                              نامفهوم تولید سادگی از صنعت
                           </p>
                           <div class="text-rigt">
                     <a href="#">ادامه ...</a></div>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="post-box">
                     <a href="#">
                        <figure>
                           <img src="img/parsitarh-1038x515.png" alt="">
                           <figcaption class="meta-fig">
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>&nbsp;
                              <span><i class="fa fa-comment-o"></i> 12</span>
                           </figcaption>
                           <figcaption class="view">
                              <span>بخش ویژه</span>
                              <span>هفتگی</span>
                           </figcaption>
                        </figure>
                        <div class="text-p">
                           <h5>چگونه از اشخاص مطالبی که دوست نداریم دوری کنیم ؟</h5>
                           <p> متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت متن ساختگی با تولید سادگی
                              نامفهوم تولید سادگی از صنعت
                           </p>
                           <div class="text-rigt">
                     <a href="#">ادامه ...</a></div>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="post-box">
                     <a href="#">
                        <figure>
                           <img src="img/290667058azer news.jpg" alt="">
                           <figcaption class="meta-fig">
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>&nbsp;
                              <span><i class="fa fa-comment-o"></i> 12</span>
                           </figcaption>
                           <figcaption class="view">
                              <span>بخش ویژه</span>
                           </figcaption>
                        </figure>
                        <div class="text-p">
                           <h5>چگونه از اشخاص مطالبی که دوست نداریم دوری کنیم ؟</h5>
                           <p> متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت متن ساختگی با تولید سادگی
                              نامفهوم تولید سادگی از صنعت
                           </p>
                           <div class="text-rigt">
                     <a href="#">ادامه ...</a></div>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="post-box">
                     <a href="#">
                        <figure>
                           <img src="img/1397022612335447514155694.jpg" alt="">
                           <figcaption class="meta-fig">
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>&nbsp;
                              <span><i class="fa fa-comment-o"></i> 12</span>
                           </figcaption>
                           <figcaption class="view">
                              <span>ماه نامه</span>
                              <span>گزارش</span>
                           </figcaption>
                        </figure>
                        <div class="text-p">
                           <h5>چگونه از اشخاص مطالبی که دوست نداریم دوری کنیم ؟</h5>
                           <p> متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت متن ساختگی با تولید سادگی
                              نامفهوم تولید سادگی از صنعت
                           </p>
                           <div class="text-rigt">
                     <a href="#">ادامه ...</a></div>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="post-box">
                     <a href="#">
                        <figure>
                           <img src="img/1397022612335447514155694.jpg" alt="">
                           <figcaption class="meta-fig">
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>&nbsp;
                              <span><i class="fa fa-comment-o"></i> 12</span>
                           </figcaption>
                           <figcaption class="view">
                              <span>ویدئویی</span>
                              <span>تصویری</span>
                           </figcaption>
                        </figure>
                        <div class="text-p">
                           <h5>چگونه از اشخاص مطالبی که دوست نداریم دوری کنیم ؟</h5>
                           <p> متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت متن ساختگی با تولید سادگی
                              نامفهوم تولید سادگی از صنعت
                           </p>
                           <div class="text-rigt">
                     <a href="#">ادامه ...</a></div>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="post-box">
                     <a href="#">
                        <figure>
                           <img src="img/290667058azer news.jpg" alt="">
                           <figcaption class="meta-fig">
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>&nbsp;
                              <span><i class="fa fa-comment-o"></i> 12</span>
                           </figcaption>
                           <figcaption class="view">
                              <span>بخش ویژه</span>
                              <span>انجمن</span>
                              <span>اتاق خبر</span>
                           </figcaption>
                        </figure>
                        <div class="text-p">
                           <h5>چگونه از اشخاص مطالبی که دوست نداریم دوری کنیم ؟</h5>
                           <p> متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت متن ساختگی با تولید سادگی
                              نامفهوم تولید سادگی از صنعت
                           </p>
                           <div class="text-rigt">
                     <a href="#">ادامه ...</a></div>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="post-box">
                     <a href="#">
                        <figure>
                           <img src="img/unnamed.jpg" alt="">
                           <figcaption class="meta-fig">
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>&nbsp;
                              <span><i class="fa fa-comment-o"></i> 12</span>
                           </figcaption>
                           <figcaption class="view">
                              <span>مجلات</span>
                              <span>انجمن</span>
                           </figcaption>
                        </figure>
                        <div class="text-p">
                           <h5>چگونه از اشخاص مطالبی که دوست نداریم دوری کنیم ؟</h5>
                           <p> متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت متن ساختگی با تولید سادگی
                              نامفهوم تولید سادگی از صنعت
                           </p>
                           <div class="text-rigt">
                     <a href="#">ادامه ...</a></div>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="post-box">
                     <a href="#">
                        <figure>
                           <img src="img/unnamed.jpg" alt="">
                           <figcaption class="meta-fig">
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>&nbsp;
                              <span><i class="fa fa-comment-o"></i> 12</span>
                           </figcaption>
                           <figcaption class="view">
                              <span>مجلات</span>
                              <span>انجمن</span>
                           </figcaption>
                        </figure>
                        <div class="text-p">
                           <h5>چگونه از اشخاص مطالبی که دوست نداریم دوری کنیم ؟</h5>
                           <p> متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت متن ساختگی با تولید سادگی
                              نامفهوم تولید سادگی از صنعت
                           </p>
                           <div class="text-rigt">
                     <a href="#">ادامه ...</a></div>
                     </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-3 main-content">
               <div class="l-sidebar">
                  <div class="cat-sidebar">
                     <span class="title">دسته بندی مطالب</span>
                     <div class="text-left"><i class="fa fa-folder-o"></i></div>
                     <ul>
                        <li><a href="#">موضوعی</a><span>32</span></li>
                        <li><a href="#">اخبار</a><span>322</span></li>
                        <li><a href="#">انجمن</a><span>2</span></li>
                        <li><a href="#">اتاق خبر</a><span>32</span></li>
                        <li><a href="#">دسته بندی نشده</a><span>52</span></li>
                        <li><a href="#">تستی</a><span>89</span></li>
                        <li><a href="#">خبر روز</a><span>30</span></li>
                        <li><a href="#">انجمن</a><span>74</span></li>
                        <li><a href="#">اتاق خبر</a><span>65</span></li>
                        <li><a href="#">دسته بندی نشده</a><span>81</span></li>
                        <li><a href="#">تستی</a><span>72</span></li>
                     </ul>
                  </div>
               </div>
               <div class="l-sidebar">
                  <div class="cat-sidebar report">
                     <span class="title">گزارش</span>
                     <div class="text-left"><i class="fa fa-arrows-alt"></i></div>
                     <ul>
                        <li><a href="#">لورم ایپسو استفاده از طراحان</a></li>
                        <li><a href="#">و سه درصد می طلبد تا با نرم افزارها ش</a></li>
                        <li><a href="#"> فارسی ایجاد کرد. در ارائه راهکارها</a></li>
                        <li><a href="#"> اصلی و جوابگوی مورد استفاده قرار گیرد.</a></li>
                        <li><a href="#">متن ساختگی با تولید سادگی نامفهوم متن ساختگی با تولید سادگی نامفهوم
                           استفاده استفاده</a>
                        </li>
                        <li><a href="#"> و سه درصد گذشته با نرم افزارها </a></li>
                        <li><a href="#">لورم ایپسو استفاده از طراحان</a></li>
                        <li><a href="#">و سه درصد می طلبد تا با نرم افزارها ش</a></li>
                        <li><a href="#"> فارسی ایجاد کرد. در ارائه راهکارها</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-12 text-center">
               <nav aria-label="Page navigation example">
                  <ul class="pagination">
                     <li class="page-item"><a class="page-link" href="#">قبلی</a></li>
                     <li class="page-item"><a class="page-link" href="#">1</a></li>
                     <li class="page-item"><a class="page-link" href="#">2</a></li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
      <div class="clear-fix"></div>
      <?php get_footer(); ?>
   </body>
</html>