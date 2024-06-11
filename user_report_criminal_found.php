<?php include 'user_header.php';
if (isset($_POST['submit'])) 
{
	extract($_POST);
	$q2="insert into found_report value(null,'$cname','$uid','$place',now(),'$desc')";
	insert($q2);
	alert("report successfully");
	
}
?>
<body>


	<div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 500px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">	

	<h1 style="color: white">report criminal found</h1>
	<form method="post">
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>criminal name</th>
					<td><select name="cname" class=" form-control"   >
						<option>select</option>
						<?php 

						$q="select * from criminals";
						$sto=select($q);
						foreach ($sto as $key) 
						{
							?>
							<option value="<?php echo $key['criminal_id'] ?>"><?php echo $key['first_name'] ?><?php echo $key['last_name'] ?></option>
								<?php
							} ?>

						</select></td>
					</tr>
					<tr>
						<th>place</th>
						<td><input type="text" class=" form-control" name="place"></td>
					</tr>
					<tr>
						<th>description</th>
						<td><input type="text" class=" form-control" name="desc"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td>
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