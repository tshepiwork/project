<Style>

</Style>
<?php 
    include 'configuration.php';
	echo "</br>";
	echo "</br>";
    echo "</br>";
    echo "</br>";
	
	
?>

<head>

<!--Bootstrap CSS link -->
<Link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>

<body>
<!--Bootstrap Javascript link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>








</br>

<div class="container my-3">
    <h1 class="text-center">Locations</h1>
</div>

<div class="container">
    <button class="btn btn-primary">Add</button>
</div>

</br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">suburb</th>
      <th scope="col">City</th>
      <th scope="col">Province</th>
      <th scope="col">Country</th>
	  <th scope="col">Created At:</th>
	  <th scope="col">Updated At:</th>

    </tr>
  </thead>
  <tbody>
	<?php
	$sql="Select * from locations";
	$result=mysqli_query($connection,$sql);
	if($result){
        while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $description=$row['description'];
        
        $displaypicture=$row['display_picture'];
        $tagname=$row['tag_name'];
        $created=$row['created_at'];
        $updated=$row['updated_at'];
        }
      }

	?>
   
   
  </tbody>
</table>
















</body>