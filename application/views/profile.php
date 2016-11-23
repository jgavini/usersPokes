<!DOCTYPE html>
<html>
<head>
<?php
	if($this->session->flashdata('success')){
		echo $this->session->flashdata('success');
	}
?>
<?php 
	if($this->session->flashdata('error'))
	{
?><strong>Error!</strong><br> <?= $this->session->flashdata('error'); ?>
<?php
	}
?>
  <title>Profile Page</title>
  	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/assets/bootstrap.min.css">
	<!-- jQuery 1.11.2 -->
	<script src="/assets/jquery.1.11.2.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="/assets/bootstrap.min.js"></script>
	<!-- Normalize.CSS -->
	<link rel="stylesheet" href="/assets/normalize.css">
	<!-- Custom Styles -->
	<link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
 <p>Tired of poking?</p><a href="/logout"><button type="submit" class="btn btn-success">Log Out</button></a>
	<div class="container">
		<div class="row">
  		<div class="col-md-12">
				<h2>Hello There <?= "<h1>" . $this->session->userdata('name') . "</h1>" . "<br>" . "<img src='https://media.giphy.com/media/zWIYI1VXp7xMA/giphy.gif'>"; ?></h2>
<?php 	$pokeCount = 0;
				foreach ($pokes as $poke) 
				{
					$pokeCount += $poke['poke_count'];
				}
?>			<h3><?= count($pokes) ?> people poked you!</h3>
				<div class="col-lg-4 box">
				<h3><u>Pokedex (who has poked you):</u></h3>
<!-- LOOP STARTS -->
<?php 	$pokeCount = 0;
				foreach ($pokes as $poke) 
				{
					$pokeCount += $poke['poke_count'];
?>				<h5><?= $poke['name']; ?> poked you <?= $poke['poke_count']; ?> time(s).<br>POKE THEM BACK!</h5>
<?php 
				}
?>
<!-- LOOP Ends -->
				</div>
  		</div>
  	</div>
  </div>
	
  <div class="container">
		<div class="row">
  		<div class="col-md-12">
				<h3>People you should poke:</h3>
				<table class="table table-bordered">
		      <thead>
		        <tr>
		          <th>Name</th>
		          <th>Alias</th>
		          <th>Email Address</th>
		          <th>History of Pokes</th>
		          <th>POKE 'EM!</th>
		        </tr>
		      </thead>
		      <tbody>
<?php 			foreach ($users as $user)
						{
							$query = "SELECT * FROM pokes where pokes.user_id = ?";
							$pokes = $this->db->query($query, $user['id'])->result_array();
							$pokeCount = 0; 
							foreach ($pokes as $poke) 
							{
								$pokeCount += $poke['poke_count'];
							}
?>		        <tr>
			          <td><?= $user['name']; ?>
			          </td>
			          <td><?= $user['alias']; ?></td>
			          <td><?= $user['email']; ?></td>
			          <td><?= $pokeCount ?> Poke(s)</td>
			          <td>
			          	<form action="/pokeUser" method="POST">
			          		<input type="hidden" name="user_id" value="<?= $user['id']; ?>">
			          		<input type="hidden" name="poker_id" value="<?= $this->session->userdata('id'); ?>">
			          		<input type="submit" class="btn btn-info" value="CLICK TO POKE!">
			          	</form>
			          </td>
			        </tr>
<?php 			} 
?>
		      </tbody>
		    </table>			
  		</div>
  	</div>
  </div>
</body>
</html>