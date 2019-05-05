<?php require('includes/config.php'); 
include 'partials/header.php';
include 'partials/navbar.php';

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: blog');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HNG Blog - <?php echo $row['postTitle'];?></title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="../app/css/main.css">
</head>
<body>

	<div id="wrapper">

		<div style="display: flex; justify-content: flex-start; align-items: center">
			<div class="auth_img">
				<img height="50px" width="50px" src="../app/img/Rectangle 2.png" alt="">
			</div>
			<div >
				<h2 style="margin: 0">Sauce codee</h2>
				<p style="margin-top: 0">Posted on <?php echo date('jS M Y', strtotime($row['postDate'])) ?></p>
			</div>

		</div>
		


		<h3>HNG Blog</h3>
		<hr />
		<p><a href="/blog" style="color:#990033">Return Back</a></p>


		<?php	
			echo '<div>';
				echo '<a>'.$row['postCont'].'</a>';				

					

			echo '</div>';
		?>

	</div>
	

	<div class="main-recommended" style="background: #f1f1f1; padding: 30px 0">
		<div id="wrapper">
			<div class="top-recommended">
				<h1>Recommended</h1>
				<span>view all blog post</span>
			</div>
			<div class="row">
  				<div class="col-sm-4">
					<div class="card more-post-card">
						<img class="card-img-top" height="100%" width="100%"  src="../app/img/Rectangle 2.png" alt="Card image cap">
						<div class="card-body">
							<h3>Category</h3>
							<h1>The main title here for 2018 HNG</h1>
							<div class="card-auth">
								<img src="../app/img/Rectangle 2.png" alt="">
								by
								<span style="color:#1fbdef; font-weight:600">Sauce code </span>|
								<span> 4 days ago</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card more-post-card">
						<img class="card-img-top" height="100%" width="100%"  src="../app/img/Rectangle 2.png" alt="Card image cap">
						<div class="card-body">
							<h3>Category</h3>
							<h1>The main title here for 2018 HNG</h1>
							<div class="card-auth">
								<img src="../app/img/Rectangle 2.png" alt="">
								by
								<span style="color:#1fbdef; font-weight:600">Sauce code </span>|
								<span> 4 days ago</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card more-post-card">
						<img class="card-img-top" height="100%" width="100%"  src="../app/img/Rectangle 2.png" alt="Card image cap">
						<div class="card-body">
							<h3>Category</h3>
							<h1>The main title here for 2018 HNG</h1>
							<div class="card-auth">
								<img src="../app/img/Rectangle 2.png" alt="">
								by
								<span style="color:#1fbdef; font-weight:600">Sauce code </span>|
								<span> 4 days ago</span>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
</div>

</body>

<?php include 'partials/footer.php'?>;
</html>