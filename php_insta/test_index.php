

<?php  include('header.php'); ?>


   <section class="main">
       <div class="wrapper">
        <div class="left-col">

            <!--Status wrapper-->
               <div class="status-wrapper">
                   <div class="status-card">
                       <div class="profile-pic"><img src="assets/imgs/1.jpeg"/></div>
                       <p class="username">Mark</p>
                   </div>
                   <div class="status-card">
                    <div class="profile-pic"><img src="assets/imgs/2.jpeg"/></div>
                    <p class="username">Sepastian</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="assets/imgs/3.jpeg"/></div>
                    <p class="username">John</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="https://cdn.vox-cdn.com/thumbor/mYa6GNh0Xdeg46CvfmD2ab1uJLc=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/13396989/922984782.jpg.jpg"/></div>
                    <p class="username">Jo</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="assets/imgs/2.jpeg"/></div>
                    <p class="username">Noah</p>
                </div>


                <div class="status-card">
                    <div class="profile-pic"><img src="assets/imgs/3.jpeg"/></div>
                    <p class="username">Rich</p>
                </div>


                <div class="status-card">
                    <div class="profile-pic"><img src="https://cdn.vox-cdn.com/thumbor/mYa6GNh0Xdeg46CvfmD2ab1uJLc=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/13396989/922984782.jpg.jpg"/></div>
                    <p class="username">Lars</p>
                </div>


                <div class="status-card">
                    <div class="profile-pic"><img src="assets/imgs/1.jpeg"/></div>
                    <p class="username">Bob</p>
                </div>

              </div>
              






       <?php include('get_latest_posts.php'); ?>


       <?php foreach($posts as $post){ ?>
            <!--Post-->
            <div class="post" style="height: auto">
                <div class="info">
                    <div class="user">
                        <div class="profile-pic"><img src="<?php echo "assets/imgs/".$post['profile_image']; ?>"/></div>
                        <p class="username"><?php echo $post['username']; ?></p>
                    </div>
                    <i class="fas fa-ellipsis-h options"></i>
                </div>
                <!--POST-->
                <img src="<?php echo "assets/imgs/". $post['image']; ?>" class="post-image"/>
                <div class="post-content">
                    <div class="reaction-wrapper">
                        <i class="icon fas fa-heart"></i>
                        <i class="icon fas fa-comment"></i>
                    </div>

                    <p class="likes"><?php echo $post['likes']; ?> likes</p>
                    <p class="description"><span>Mark</span> <?php echo $post['caption'] . " " . $post['hashtags']; ?></p>
                    <p class="post-time"><?php echo date('Y,M', strtotime($post['date'])); ?></p>
                    <button class="comment-btn">comments</button>
                </div>

             <!--    <div class="comment-wrapper">
                    <img src="assets/imgs/1.jpeg" class="icon"/>
                    <input type="text" class="comment-box" placeholder="Add a comment"/>
                    <button class="comment-btn">comment</button>
              </div> -->
            </div>   
     


       <?php } ?>




 



       <nav aria-label="Page navigation example" class="mx-auto mt-5">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>




    <nav  aria-label="Page navigation example" class="mx-auto mt-3">
            <ul class="pagination">

                <li class="page-item <?php if($page_no<=1){echo 'disabled';}?>">
                      <a class="page-link" href="<?php if($page_no<=1){echo'#';}else{echo '?page_no='.($page_no-1);}?>">Previous</a>
               </li>
           
              <li class="page-item">
                  <a class="page-link" href="?page_no=1">1</a>
              </li>

              <li class="page-item">
                  <a class="page-link" href="?page_no=2">2</a>
              </li>

              <?php if($page_no >= 3){ ?>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo "?page_no=". $page_no;?>"><?php echo $page_no;?></a>
                    </li>
              <?php } ?>

              <li class="page-item <?php if($page_no>= $total_no_of_pages){echo 'disabled';}?>">
                      <a class="page-link" href="<?php if($page_no>=$total_no_of_pages){echo'#';}else{echo '?page_no='.($page_no+1);}?>">Next</a>
               </li>
           


            </ul>
        </nav>









   </div>




    

        <div class="right-col">

            <!--Profile card-->
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="assets/imgs/1.jpeg"/>
                </div>
                <div>
                    <p class="username">Mark</p>
                    <p class="sub-text">engineer engineer</p>
                </div>

                <form method="GET" action="logout.php">
                  <button class="logout-btn" >logout</button>
                </form>
               
            </div>


            <p class="suggestion-text">Suggestions for you</p>


            <?php include("get_suggestions.php"); ?>

            <?php foreach($suggestions as $suggestion){ ?>

            <!--Suggestions-->
            <div class="suggestion-card">
                <div class="suggestion-card">
                    <div class="suggestion-pic">
                        <img src="<?php echo "assets/imgs/".$suggestion['image'];?>"/>
                    </div>
                    <div>
                        <p class="username"><?php echo $suggestion['username']; ?></p>
                        <p class="sub-text"><?php echo substr($suggestion['bio'],0,15); ?></p>
                    </div>
                    <button class="follow-btn">follow</button>
                 </div> 
            </div>

            <?php } ?>
            

        
       </div>
   </section>









</body>
</html>

