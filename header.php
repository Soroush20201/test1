
 <head>
    
<?php wp_head();?>
  
      <div class="top-bar">
         <div class="container-fluid">
            <div class="col-md-6">
               <div class="search-btn">
                  <span><i class="fa fa-search"></i></span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="top-cat-box">
                  <div class="col-md-12">
                     <div class="menu">
                        <ul>
                           <li><a href="#">تماس با ما</a></li>
                           <li><a href="#">درباره ما</a></li>
                           <li><a href="#">مقالات</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- <div class="col-md-3">
                     <div class="show-cat">
                         <span>
                             دسته ها
                             <i class="fa fa-bars"></i>
                         </span>
                     </div>
                     </div> -->
               </div>
            </div>
         </div>
      </div>
      <div class="main-header">
         <div class="container-fluid">
            <div class="col-md-10">
               <div class="main-menu">
                <?php
                wp_nav_menu(
                  array(
                      'theme_location' => 'top_menu',
                      'menu_id' => 'main-menu',
                      'container' => 'ul',
                      'menu_class' => 'main-menu'
                  )
              );
                ?>

<?php
$current_user = wp_get_current_user();

if ($current_user->exists()) {
    echo   $current_user->user_login . 'خوش آمدید<br>';
   
}
?>


               </div>
            </div>
            <div class="col-md-2">
               <div class="social-box">
                  <ul>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="clear-fix"></div>
 </head>


