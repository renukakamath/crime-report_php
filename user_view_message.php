<?php include 'user_header.php';
extract($_GET);

if (isset($_POST['sub'])) 
{
	extract($_POST);
	echo $q8="update message set replay='$replay' where message_id='$snd'";
	update($q8);
	alert("replay updated successfully");
	return redirect('user_view_message.php');
}
?>
<body>
		<div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 500px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
<?php
if (isset($_GET['snd'])) 
{
	extract($_GET);
	$q7="select * from message where message_id='$snd'";
	$ch=select($q7);
	?>

<h1 align="center" style="color: white">send messages</h1>
<form method="post">
	<table style="width: 500px;color: white" class="table">
		<tr>
			<th>send replay</th>
			<td><input type="text" name="replay" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="sub" value="send"></td>
		</tr>
		
	</table>
	<?php
}  ?>
	



	<h1 align="center" style="color: white">view message</h1>
	<body>
		<form method="post">
			<table align="center" style="width: 500px;color: white" class="table">
				<tr>
					<th>si no</th>
					<th>user name</th>
					<th>message descriptiopn</th>
					<th>replay</th>
					<th>date_time</th>
				</tr>
				<?php
				$q="SELECT * FROM `message` INNER JOIN USER USING (user_id) where user_id='$uid'";
				$temp=select($q);
				$si=1;
				foreach ($temp as $key) 
				{
				 	?>
				 	<tr>
				 		<td><?php echo $si++ ?></td>
				 		<td><?php echo $key['first_name'] ?><?php echo $key['last_name'] ?></td>
				 		<td><?php echo $key['message_description'] ?></td>
				 		<td><?php echo $key['replay'] ?></td>
				 		<td><?php echo $key['date_time'] ?></td>
				 		<?php
				 		if ($key['replay']=="pending") 
				 		{
				 			?>
				 			<td><a href="?snd=<?php echo $key['message_id'] ?>">send replay</a></td>
				 			<?php
				 		}  ?>
				 		
				 	</tr>
				 	<?php
				}  ?>

			</table>
		</form>
	</body>
</body>
			</div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

	
<?php include 'footer.php'?>