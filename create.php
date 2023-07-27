<?php
    include 'configuration.php';

    if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $file= $_FILES['display_picture'];
    $display_picture = base64_encode(file_get_contents($file['tmp_name']));
    $tagname = $_POST['tagname'];

   
    
     $sql = "INSERT INTO activities (name, description, display_picture, tag_name) VALUES (?, ?, ?, ?)";
     $stmt = mysqli_prepare($connection, $sql);
     mysqli_stmt_bind_param($stmt, "ssss", $name, $description, $display_picture, $tagname);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);

    //  $result=mysqli_query($connection,$sql);
    //  if($result){
    //  echo"Data inserted successfully";
    //  }else {
    //  die(mysqli_error($connection));
    //  }

    }

?>

<head>
    <title>Create</title>
    <h1>Create</h1>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <!-- Please code inside here -->
    <div>
        <form method="post"  enctype="multipart/form-data">

         <!-- These are the code for the forms that will allow user to add data to the table -->
            <label>Name</label>
            <div class="input-group mb-3">
                 <span class="input-group-text" id="inputGroup-sizing-default"></span>
                     <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            </br>

            <label>Description</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default"></span>
                    <input type="text" name="description"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            </br>

            <label>Display picture</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default"></span>
                    <input type="file" name="display_picture" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div> 

            </br>

            <label>Tag Name</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default"></span>
                    <input type="text" name="tagname"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            </br>

            

            </br>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>
    </div>
</body>
