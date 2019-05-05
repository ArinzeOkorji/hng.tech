<?php require('includes/config.php');
include 'partials/header.php';
include 'partials/navbar.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HNG Blog</title>
    <link rel="stylesheet" href="..app/css/normalize.css">
    <link rel="stylesheet" href="../app/css/main.css">

</head>
<body>

	<!-- Blog title with navigation starts -->
    <div class="bodyContainer">
        <div>
            <h1 id="header">World changing insights, <br>
            One story at a time.</h1>
        </div>

        <!-- Blog navigation starts -->
        <div class="blogNavSection">
            <div class="blogNavSectionInner">
                <ul class="blogNavList">
                    <li class='active nav-list'><a href="#">All</a></li>
                    <li class="nav-list"><a href="#">Intern Stories</a></li>
                    <li class="nav-list"><a href="#">Design</a></li>
                    <li class="nav-list"><a href="#">Frontend</a></li>
                    <li class="nav-list"><a href="#">Backend</a></li>
                    <li class="nav-list"><a href="#">Machine Learning</a></li>
                    <li class="nav-list"><a href="#">Digital Marketing</a></li>
                </ul>
            </div>
        </div>
        <!-- Blog navigation ends -->
    </div>

    <!-- Blog title with navigation ends -->

    <!-- Blog body starts -->
    <div class="bodyContainer">
        <div>
            <div class="blogBodyContainer">
                    <div class="topPosts">
                            <div>
                                <h3 class="topPostsHeader">Top Posts</h3>
                            </div>
        
                            <div class="topPostsBody">
                                <div class="topPostsArticle">
                                    <img src="..app/css/img/mask _group.png" alt="Author's Avatar">
                                    <div class="topPostInfo">
                                        <h5>20 Relevant Design Trends from 2018</h5>
                                        <div class="moreBlogInfo">
                                            <span>by <span class="articleAuthorName"><a href="#">Design Walker</a></span></span>
                                            <span>2 days ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="topPostsArticle">
                                    <img src="..app/css/img/mask _group.png" alt="Author's Avatar">
                                    <div class="topPostInfo">
                                        <h5>20 Relevant Design Trends from 2018</h5>
                                        <div class="moreBlogInfo">
                                            <span>by <span class="articleAuthorName"><a href="#">Design Walker</a></span></span>
                                            <span>2 days ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="topPostsArticle">
                                    <img src="..app/css/img/mask _group.png" alt="Author's Avatar">
                                    <div class="topPostInfo">
                                        <h5>20 Relevant Design Trends from 2018</h5>
                                        <div class="moreBlogInfo">
                                            <span>by <span class="articleAuthorName"><a href="#">Design Walker</a></span></span>
                                            <span>2 days ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="blogArticlesList">
                    <div class="blogArticle">
                        <div class="imageContainer">
                                <img src="..app/css/img/mask _group.png" alt="Article's image" srcset="">
                        </div>
                        <div class="articleDetails">
                            <span class="articleCategory">DESIGN</span>
                            <h5 class="articleTitle">20 Relative Design Trends from 2018</h5>
                            <p class="articleSummary">They're late. My experiment worked. They're all exactly twenty-five minutes slow. My insurance, it's your car, your insurance should pay for it. Hey, I wanna know ...</p>
                            <div class="articleInfo">
                                <img src="..app/css/img/mask _group.png" alt="Author's Avatar" srcset="">
                                <span>by <span class="articleAuthorName"><a href="#">Design Walker</a> </span> | 4 days ago</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="blogArticle">
                        <div class="imageContainer">
                                <img src="..app/css/img/mask _group.png" alt="Article's image" srcset="">
                        </div>
                        <div class="articleDetails">
                            <span class="articleCategory">DESIGN</span>
                            <h5 class="articleTitle">20 Relative Design Trends from 2018</h5>
                            <p class="articleSummary">They're late. My experiment worked. They're all exactly twenty-five minutes slow. My insurance, it's your car, your insurance should pay for it. Hey, I wanna know ...</p>
                            <div class="articleInfo">
                                <img src="..app/css/img/mask _group.png" alt="Author's Avatar" srcset="">
                                <span>by <span class="articleAuthorName"><a href="#">Design Walker</a> </span> | 4 days ago</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="blogArticle">
                        <div class="imageContainer">
                                <img src="..app/css/img/mask _group.png" alt="Article's image" srcset="">
                        </div>
                        <div class="articleDetails">
                            <span class="articleCategory">DESIGN</span>
                            <h5 class="articleTitle">20 Relative Design Trends from 2018</h5>
                            <p class="articleSummary">They're late. My experiment worked. They're all exactly twenty-five minutes slow. My insurance, it's your car, your insurance should pay for it. Hey, I wanna know ...</p>
                            <div class="articleInfo">
                                <img src="..app/css/img/mask _group.png" alt="Author's Avatar" srcset="">
                                <span>by <span class="articleAuthorName"><a href="#">Design Walker</a> </span> | 4 days ago</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="blogArticle">
                        <div class="imageContainer">
                                <img src="..app/css/img/mask _group.png" alt="Article's image" srcset="">
                        </div>
                        <div class="articleDetails">
                            <span class="articleCategory">DESIGN</span>
                            <h5 class="articleTitle">20 Relative Design Trends from 2018</h5>
                            <p class="articleSummary">They're late. My experiment worked. They're all exactly twenty-five minutes slow. My insurance, it's your car, your insurance should pay for it. Hey, I wanna know ...</p>
                            <div class="articleInfo">
                                <img src="/app/css/img/mask _group.png" alt="Author's Avatar" srcset="">
                                <span>by <span class="articleAuthorName"><a href="#">Design Walker</a> </span> | 4 days ago</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Blog body ends -->  
	<?php include 'partials/footer.php'?>;
</body>
</html>