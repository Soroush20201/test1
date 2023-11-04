
<?php get_header(); ?>
      <div class="latest-posts">
         <div class="container-fluid">
            <div class="blog-title-span">
               <span class="title">اخبار و مقالات</span>
            </div>
            <?php
            $term = get_term_by('slug', 'category-slug', 'category');
            if ($term) {
                $category_id = $term->term_id;
                // Now, $category_id contains the ID of the category with the specified slug.
            } else {
                // Category not found
            }
// Specify the category ID or slug
$category = $category_id; // Replace with your category slug or ID

// Get the posts from the specified category
$args = array(
    'category_name' => $category,
    'posts_per_page' => -1, // Retrieve all posts in the category
);
$posts = get_posts($args);

// Loop through the posts
foreach ($posts as $post) {
    setup_postdata($post); // Setup the post data for use in the loop
?>
<div class="col-md-3">
               <div class="post-box">
                  <a href="#">
                     <figure>
                     <?php the_post_thumbnail(); // Display the post thumbnail if available ?>
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
                        <h5>چ<?php the_title(); ?> ؟</h5>
                        <p> متن<?php the_excerpt(); // Display the post excerpt ?>
                        </p>
                        <div class="text-rigt">
                  <a href="#">ادامه ...</a></div>
                  </div>
                  </a>
               </div>
            </div>
    <div class="post">
        <h2><?php the_title(); ?></h2>
        <?php the_post_thumbnail(); // Display the post thumbnail if available ?>
        <p><?php the_excerpt(); // Display the post excerpt ?></p>
    </div>
<?php
}

// Reset post data to the main query
wp_reset_postdata();
?>
            
            
            <div class="col-md-3">
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
            <div class="col-md-3">
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
            <div class="col-md-3">
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
            <div class="col-md-3">
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
            <div class="col-md-3">
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
   </body>
   <?php get_footer(); ?>
