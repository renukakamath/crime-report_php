<?php include 'user_header.php';
extract($_GET);
if (isset($_POST['upload'])) 
{

extract($_POST);
	$dir = "image/";
	$file = basename($_FILES['img']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("images_").".".$file_type;

	if ($file_type == "jpg" OR $file_type=="JPG" OR $file_type == "png" OR $file_type=="PNG" ) {



		if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
		{

	$q="insert into evidence values(null,'$uid','$sid','$target','$desc',now())";
 insert($q);
	alert("evidence uploaded successfully");
	return redirect("user_make_complaints.php");

}                                                               
		else
		{
			echo "file uploading error occured";
		}
	}
	else
	{
		echo "invalid file format, file format =". $file_type;
		echo "error";
	}
}
?>
<body>

<div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 500px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">	

	<h1 align="center" style="color: white">upload evidence</h1>
	<form method="post" enctype="multipart/form-data">
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>evidence</th>
				<td><input type="file" class=" form-control" name="img"></td>
			</tr>
			<tr>
				<th>description</th>
				<td><input type="text" class=" form-control"  name="desc"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="upload" value="upload"></td>
			</tr>
			
		</table>
	</form>
</body>
			</div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>