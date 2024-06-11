<?php include 'station_header.php';
extract($_GET);
if (isset($_POST['add'])) 
{
	extract($_POST);
	echo $q4="insert into message values(null,'$msg','$mdec','pending',now())";
	insert($q4);
	alert("message send successfully");
	return redirect('station_view_complaints.php');


}
?>
<h1>send manage</h1>
<body>

	<!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

	<form method="post" style="color: white">
		<table align="center" style="width: 500px;color: white" class="table">
			<tr>
				<th>message_description</th>
				<td><input type="text" class=" form-control" name="mdec"></td>
			</tr>
			<tr>
			    <td align="center"  colspan="2"><input type="submit" name="add" value="send"></td>
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