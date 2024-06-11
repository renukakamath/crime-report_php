<?php include 'admin_header.php' ;
if (isset($_POST['add'])) 
{
	extract($_POST);
	$q="insert into crime_type values(null,'$cname','$pfine')";
	insert($q);

}
if (isset($_GET['del'])) 
{
	extract($_GET);
	$q3="delete from crime_type where crime_type_id='$del'";
	delete($q3);

}
if (isset($_POST['update'])) 
{
	extract($_POST);
	$q5="update crime_type set crime_type_name='$cname',minimum_penalty='$pfine' where crime_type_id='$upd'";
	update($q5);
	alert("update successfull");
	return redirect ('admin_manage_crime_type.php');
}


 ?>
<body>
<!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

	<?php
	if (isset($_GET['upd'])) 
	{
		extract($_GET);
		$q4="select * from crime_type where crime_type_id='$upd'";
		$ch=select($q4);
	?>
	<h1 align="center" style="color: white">manage crime types</h1>
	<form method="post">
		<table align="center" style="width: 500px;color: white " class="table">
			<tr>
				<th>crime name</th>
				<td><input type="text" class=" form-control" name="cname" value="<?php echo $ch[0]['crime_type_name'] ?>"></td>
			</tr>
			<tr>
				<th>minimum penalty</th>
				<td><input type="text" class=" form-control" name="pfine" value="<?php echo $ch[0]['minimum_penalty'] ?>"></td>

			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
		<?php
	} else 

		{
			?>
			<h1 align="center" style="color: white">manage crime types</h1>
	<form method="post">
		<table align="center"  style="width: 500px;color: white" class="table">
			<tr>
				<th>crime name</th>
				<td><input type="text" name="cname" class=" form-control"></td>
			</tr>
			<tr>
				<th>minimum penalty</th>
				<td><input type="text" name="pfine" class=" form-control"></td>

			</tr>
			<tr>

				<td align="center" colspan="2"><input type="submit" name="add" value="add"></td>
			</tr>
		</table>




		<?php
} ?>

		<h1 style="color: white">view crime type</h1>
		<table style="width: 500px;color: white" class="table" >
			<tr>
				<th>si no</th>
				<th>crime name</th>
				<th>minimum penalty</th>
			</tr>
			<?php
			$q2="select * from crime_type";
			$temp=select($q2);
			$si=1;
			foreach ($temp as $key) 
			{
				?>
				<tr>
					<td><?php echo $si++ ?></td>
					<td><?php echo $key['crime_type_name'] ?></td>
					<td><?php echo $key['minimum_penalty'] ?></td>
					<td><a href="?del=<?php echo $key['crime_type_id'] ?> ">delete</a></td>
				
					<td><a href="?upd=<?php echo $key['crime_type_id'] ?>">update</a></td>
				</tr>
				<?php
			} ?>

		</table>
	</form>
</body>


 <!--  <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span> -->
          



                    </div> 
  
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>	