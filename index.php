<html>
<?php get_header(); ?>
<body>
   
   
      <div class="clear-fix"></div>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-3">
               <div class="top-sidebar-r">
                  <span class="title">عکس</span>
                  <a href="#">
                     <div class="bx">
                        <div class="col-md-6">
                           <div class="img-box">
                              <figure>
                                 <img src="<?php echo get_template_directory_uri(); ?>/img/696112501123546.jpg"alt="">
                                 <figcaption><span>1</span></figcaption>
                              </figure>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="meta">
                              <h5>
                              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                              گرافیک است. چاپگرها و...</h6>
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>
                              <div class="text-left">
                                 <sub><i class="fa fa-comment"></i> 26</sub>
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="#">
                     <div class="bx">
                        <div class="col-md-6">
                           <div class="img-box">
                              <figure>
                                 <img src="<?php echo get_template_directory_uri(); ?>/img/1733753707Capture.png" alt="">
                                 <figcaption><span>2</span></figcaption>
                              </figure>
                           </div>
                        </div>
                        <div class="col-md-6 ">
                           <div class="meta">
                              <h5>
                              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                              گرافیک است. چاپگرها و... متن ارسال شده</h6>
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>
                              <div class="text-left">
                                 <sub><i class="fa fa-comment"></i> 26</sub>
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="#">
                     <div class="bx">
                        <div class="col-md-6">
                           <div class="img-box">
                              <figure>
                                 <img src="<?php echo get_template_directory_uri(); ?>/img/290667058azer news.jpg" alt="">
                                 <figcaption><span>3</span></figcaption>
                              </figure>
                           </div>
                        </div>
                        <div class="col-md-6 ">
                           <div class="meta">
                              <h5>
                              عنوان برایلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                              از طراحان گرافیک است. چاپگرها و... شده</h6>
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>
                              <div class="text-left">
                                 <sub><i class="fa fa-comment"></i> 26</sub>
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
                  <a href="#">
                     <div class="bx">
                        <div class="col-md-6">
                           <div class="img-box">
                              <figure>
                                 <img src="<?php echo get_template_directory_uri(); ?>/img/parsitarh-1038x515.png" alt="">
                                 <figcaption><span>4</span></figcaption>
                              </figure>
                           </div>
                        </div>
                        <div class="col-md-6 ">
                           <div class="meta">
                              <h5>
                              عنوان برای متن ارسال شده</h6>
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>
                              <div class="text-left">
                                 <sub><i class="fa fa-comment"></i> 246</sub>
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-md-6">
               <div class="main-slider-box">
                  <div class="owl-carousel owl-theme main-slider">
                     <div class="item">
                        <figure>
                         <?php
// Save the current post data
$temp_post = $post;

// Replace the post data with the desired post's data
$post = get_post(378); // Replace 123 with the post ID you want to display

// Output the post thumbnail
the_post_thumbnail(); // 'thumbnail' is the size of the thumbnail

// Restore the original post data
$post = $temp_post;
?>
                           <figcaption class="gradient-fig"></figcaption>
                           <figcaption class="desc-fig">
                              <span><i class="fa fa-heart"></i> 56</span>
                             <h3> <?php echo get_the_title(378); ?> </h3>
                              <span><i class="fa fa-clock-o"></i> 10 ماه پیش</span>
                              <p>
                                 <?php echo get_the_content(null,false,378); ?>
                              </p>
                           </figcaption>
                        </figure>
                     </div>
                     <div class="item">
                        <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/290667058azer news.jpg" alt="">
                           <figcaption class="gradient-fig"></figcaption>
                           <figcaption class="desc-fig">
                              <span><i class="fa fa-heart"></i> 56</span>
                              <h3>عنوان خبری در اسلایدر</h3>
                              <span><i class="fa fa-clock-o"></i> 10 ماه پیش</span>
                              <p>
                                 گرافیک است. چاپگرها و...
                              </p>
                           </figcaption>
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3"> 
               
               <div class="top-sidebar-l">
                  <span class="title">یادداشت</span>
                  <a href="#">
                     <div class="bx">
                        <div class="col-md-3 nopadding">
                           <span><i class="fa fa-heart"></i> 56</span>
                        </div>
                        <div class="col-md-8 nopadding">
                           <h3><?php echo get_the_content(null,false,427); ?>
                           </h3>
                        </div>
                     </div>
                  </a>
                  <a href="#">
                     <div class="bx">
                        <div class="col-md-3 nopadding">
                           <span><i class="fa fa-heart"></i> 78</span>
                        </div>
                        <div class="col-md-8 nopadding">
                           <h3> <?php echo get_the_content(null,false,431); ?>
                           </h3>
                        </div>
                     </div>
                  </a>
                  <a href="#">
                     <div class="bx">
                        <div class="col-md-3 nopadding">
                           <span><i class="fa fa-heart"></i> 321</span>
                        </div>
                        <div class="col-md-8 nopadding">
                           <h3>رم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                              گرافیک
                              است. چاپگرها و متو
                           </h3>
                        </div>
                     </div>
                  </a>
                  <?php
// Define the category ID you want to display posts from
$category_id = 11; // Replace 5 with the ID of your desired category

// Create a custom WP_Query to retrieve posts from the specified category
$custom_query = new WP_Query(array(
    'cat' => $category_id, // Specify the category ID
    'posts_per_page' => -1, // Retrieve all posts from the category
));

// Loop through the custom query to display the content in different places
if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
?>
<div class="top-sidebar-l">
               
                  <a href="#">
                     <div class="bx">
                        <div class="col-md-3 nopadding">
                           <span><i class="fa fa-heart"></i> 56</span>
                        </div>
                        <div class="col-md-8 nopadding">
                           <h3> <?php the_content(); ?>
                           </h3>
                        </div>
                     </div>
                  </a>
 </div>               
    <div class="post-content">
       
    </div>
    <!-- You can place this content wherever you need it within your HTML -->
<?php
    endwhile;
    wp_reset_postdata(); // Reset the custom query
endif;
?>
                  <a href="#">
                     <div class="bx">
                        <div class="col-md-3 nopadding">
                           <span><i class="fa fa-heart"></i> 56</span>
                        </div>
                        <div class="col-md-8 nopadding">
                           <h3>ر<div class="post-content">
                             <?php the_content(); ?>
                         </div>
                           </h3>
                        </div>
                     </div>
                  </a>
                  <a href="#">
                     <div class="bx">
                        <div class="col-md-3 nopadding">
                           <span><i class="fa fa-heart"></i> 56</span>
                        </div>
                        <div class="col-md-8 nopadding">
                           <h3><div class="post-content">
                           <?php the_content(); ?>
                            </div>
                           </h3>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="clear-fix"></div>
      <div class="main-content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-3">
                  <div class="r-sidebar">
                     <div class="special-posts">
                        <span class="title">گفتگو</span><br>
                        <div class="special-box">
                           <a href="#">
                              <figure>
                                 <img src="img/1397022612335447514155694.jpg" alt="">
                                 <figcaption class="txt">
                                    <h4>عنوان مطلب ارسالی</h4>
                                    <span><i class="fa fa-calendar-o"></i> 99/3/20</span>
                                    <span><i class="fa fa-comment-o"></i> 98</span>
                                 </figcaption>
                                 <figcaption class="link"><i class="fa fa-external-link"></i></figcaption>
                              </figure>
                           </a>
                        </div>
                        <div class="special-box">
                           <a href="#">
                              <figure>
                                 <img src="img/unnamed.jpg" alt="">
                                 <figcaption class="txt">
                                    <h4>که لازم است و برای شرایط فعلی تکنولوژی مور</h4>
                                    <span><i class="fa fa-calendar-o"></i> 99/3/20</span>
                                    <span><i class="fa fa-comment-o"></i> 98</span>
                                 </figcaption>
                                 <figcaption class="link"><i class="fa fa-external-link"></i></figcaption>
                              </figure>
                           </a>
                        </div>
                        <div class="special-box">
                           <a href="#">
                              <figure>
                                 <img src="img/696112501123546.jpg" alt="">
                                 <figcaption class="txt">
                                    <h4>لازمه توجه به نشریات در اینترنت</h4>
                                    <span><i class="fa fa-calendar-o"></i> 99/3/20</span>
                                    <span><i class="fa fa-comment-o"></i> 98</span>
                                 </figcaption>
                                 <figcaption class="link"><i class="fa fa-external-link"></i></figcaption>
                              </figure>
                           </a>
                        </div>
                        <div class="special-box">
                           <a href="#">
                              <figure>
                                 <img src="img/parsitarh-1038x515.png" alt="">
                                 <figcaption class="txt">
                                    <h4>یک عنوان برای این بخش نظر بگیرید ، این عنوا اگر بسیار بلند هم باشد توسط
                                       خود قالب بهینه خواهد شد
                                    </h4>
                                    <span><i class="fa fa-calendar-o"></i> 99/3/20</span>
                                    <span><i class="fa fa-comment-o"></i> 98</span>
                                 </figcaption>
                                 <figcaption class="link"><i class="fa fa-external-link"></i></figcaption>
                              </figure>
                           </a>
                        </div>
                     </div>
                     <div class="ads-box">
                        <span class="title">تبلیغات</span><br>
                        <figure>
                           <img src="<?php echo get_template_directory_uri(); ?>/img/unnamed.jpg" alt="">
                        </figure>
                        <figure>
                           <img src="<?php echo get_template_directory_uri(); ?>/img/696112501123546.jpg" alt="">
                        </figure>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="content-wrapper">
                     <div class="most-views">
                        <span class="title"><?php
                   get_the_title(427)  
?>
</span>
                        <div class="col-md-8">
                           <div class="main-post">
                              <a href="#">
                                 <figure>

                                    <img src="<?php echo get_template_directory_uri(); ?>/img/290667058azer news.jpg" alt="">
                                    <figcaption>
                                       <span><i class="fa fa-folder-o"></i> خبر روز</span>
                                       <h3>ایپسوم متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت</h3>
                                       <span><i class="fa fa-comments-o"></i> 65</span>
                                    </figcaption>
                                 </figure>
                                 <div class="p-div">
                                    <p>
<?php
echo get_the_content(null,false,431);
?>

                                    </p>
                                 </div>
                           </div>
                           </a>
                        </div>
                        <div class="col-md-4">
                           <div class="oth-posts">
                              <div class="r-box">
                                 <span class="cat-span">آموزشی</span>
                                 <span class="cat-span">#خبر</span>
                                 <a href="#">
                                    <h5>که لازم است و برای شرایط فعلی تکنولوژی مور</h5>
                                 </a>
                                 <span><i class="fa fa-clock-o"></i> 3 دی 98</span>
                              </div>
                              <div class="r-box">
                                 <span class="cat-span">آموزشی</span>
                                 <span class="cat-span">#خبر</span>
                                 <a href="#">
                                    <h5>که لازم است و برای شرایط فعلی تکنولوژی مور</h5>
                                 </a>
                                 <span><i class="fa fa-clock-o"></i> 3 دی 98</span>
                              </div>
                              <div class="r-box">
                                 <span class="cat-span">آموزشی</span>
                                 <span class="cat-span">#خبر</span>
                                 <a href="#">
                                    <h5>که لازم است و برای شرایط فعلی تکنولوژی مور</h5>
                                 </a>
                                 <span><i class="fa fa-clock-o"></i> 3 دی 98</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="special-cat-box">
                        <span class="title">فیلم و ویدئو</span>
                        <div class="col-md-6">
                           <div class="main-post">
                              <a href="#">
                                 <figure>
                                    <img src="img/290667058azer news.jpg" alt="">
                                    <figcaption>
                                       <span><i class="fa fa-folder-o"></i> خبر روز</span>
                                       <h3>ایپسوم متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت</h3>
                                       <span><i class="fa fa-comments-o"></i> 65</span>
                                    </figcaption>
                                 </figure>
                              </a>
                           </div>
                           <div class="main-post">
                              <a href="#">
                                 <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/696112501123546.jpg" alt="">
                                    <figcaption>
                                       <span><i class="fa fa-folder-o"></i> خبر روز</span>
                                       <h3>ایپسوم متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت</h3>
                                       <span><i class="fa fa-comments-o"></i> 65</span>
                                    </figcaption>
                                 </figure>
                              </a>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="left-content">
                              <div class="col-md-6">
                                 <a href="#">
                                    <div class="content">
                                       <figure>
                                          <img src="<?php echo get_template_directory_uri(); ?>/img/696112501123546.jpg" alt="">
                                          <figcaption><i class="fa fa-external-link"></i></figcaption>
                                       </figure>
                                       <span>آموزشی</span>
                                       <span>انجمن</span>
                                       <h5> متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت</h5>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6">
                                 <a href="#">
                                    <div class="content">
                                       <figure>
                                          <img src="<?php echo get_template_directory_uri(); ?>/img/parsitarh-1038x515.png" alt="">
                                          <figcaption><i class="fa fa-external-link"></i></figcaption>
                                       </figure>
                                       <span>آموزشی</span>
                                       <h5> متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت</h5>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6">
                                 <a href="#">
                                    <div class="content">
                                       <figure>
                                          <img src="<?php echo get_template_directory_uri(); ?>/img/karkhaneh_iran_3.jpg" alt="">
                                          <figcaption><i class="fa fa-external-link"></i></figcaption>
                                       </figure>
                                       <span>آموزشی</span>
                                       <h5> متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت</h5>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-6">
                                 <a href="#">
                                    <div class="content">
                                       <figure>
                                          <img src="<?php echo get_template_directory_uri(); ?>/img/1397022612335447514155694.jpg" alt="">
                                          <figcaption><i class="fa fa-external-link"></i></figcaption>
                                       </figure>
                                       <span>آموزشی</span>
                                       <h5> متن ساختگی با تولید سادگی نامفهوم تولید سادگی از صنعت</h5>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
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
                  <div class="l-sidebar">
                     <div class="cat-sidebar">
                        <span class="title">دسته بندی مطالب</span>
                        <div class="text-left"><i class="fa fa-folder-o"></i></div>
                        <ul>
                        <?php
    $categories = get_categories(array('hide_empty' => 0)); // Get all categories including empty ones
    foreach ($categories as $category) {
        echo '<li><a href="' . esc_url(get_category_link($category)) . '">' . esc_html($category->name) . '</a> <span>' . $category->count . '</span></li>';
    }
    ?>
</ul>

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
               </div>
            </div>
         </div>
         <div class="clear-fix"></div>
         <div class="latest-posts">
            <div class="container-fluid">
               <div class="blog-title-span">
                  <span class="title">آخرین مطالب</span>
               </div>
               <div class="col-md-3">
                  <div class="post-box">
                     <a href="#">
                        <figure>
                           <img src="<?php echo get_template_directory_uri(); ?>/img/290667058azer news.jpg" alt="">
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
               <?php
$args = array(
    'post_type' => 'city_post_type',
    'posts_per_page' => -1,
);

$city_query = new WP_Query($args);

if ($city_query->have_posts()) {
    while ($city_query->have_posts()) {
        $city_query->the_post();
        $city_id = get_the_ID();
        $city_title = get_the_title();

        echo '<h2>' . $city_title . '</h2>';
echo '<br/>';
        $store_args = array(
            'post_type' => 'store_post_type',
            'meta_query' => array(
                array(
                    'key' => 'store_city',
                    'value' => $city_id,
                ),
            ),
        );

        $store_query = new WP_Query($store_args);

        if ($store_query->have_posts()) {
            while ($store_query->have_posts()) {
                $store_query->the_post();
                $store_title = get_the_title();
                $store_link = get_permalink();
                $store_thumbnail = get_the_post_thumbnail();
                $store_excerpt = get_the_excerpt();

               //  echo '<h3><a href="' . $store_link . '">' . $store_title . '</a></h3>';
               //  echo $store_thumbnail;
                echo '<div class="col-md-3">
                        <div class="post-box">
                            <a href="' . $store_link . '">
                                <figure>
                                    ' . $store_thumbnail . '
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
                                    <h5>' . $store_title . '</h5>
                                    <p>' . $store_excerpt . '</p>
                                    <div class="text-rigt">
                                        <a href="' . $store_link . '">ادامه ...</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>';
            }
            wp_reset_postdata();
        }
    }
    wp_reset_postdata();
}
?>
               <div class="col-md-3">
                  <div class="post-box">
                     <a href="#">
                        <figure>
                           <img src="<?php echo get_template_directory_uri(); ?>/img/unnamed.jpg" alt="">
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
               <div class="col-md-3">
                  <div class="post-box">
                     <a href="#">
                        <figure>
                           <img src="<?php echo get_template_directory_uri(); ?>/img/parsitarh-1038x515.png" alt="">
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
                           <img src="<?php echo get_template_directory_uri(); ?>/img/290667058azer news.jpg" alt="">
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
                           <img src="<?php echo get_template_directory_uri(); ?>/img/1397022612335447514155694.jpg" alt="">
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
                           <img src="<?php echo get_template_directory_uri(); ?>/img/1397022612335447514155694.jpg" alt="">
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
                           <img src="<?php echo get_template_directory_uri(); ?>/img/290667058azer news.jpg" alt="">
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
               <div class="col-md-3">
                  <div class="post-box">
                     <a href="#">
                        <figure>
                           <img src="<?php echo get_template_directory_uri(); ?>/img/unnamed.jpg" alt="">
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
         </div>
      </div>
      <div class="clear-fix"></div>
 </body>
<?php get_footer(); ?>
  
</html>