<?php
    echo "<h1>Update</h1>";
    echo "</br>";
    include 'configuration.php';
    echo "</br>";

   $id=$_GET['updateid'];
   $sqls="Select * from activities where id=$id";
   $result=mysqli_query($connection,$sqls);
   $row=mysqli_fetch_assoc($result);
   $name=$row['name'];
   $description=$row['description'];
   $display_picture=$row['display_picture'];
   $tagname=$row['tag_name'];


    if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $file= $_FILES['display_picture'];
    $display_picture = base64_encode(file_get_contents($file['tmp_name']));
    $tagname = $_POST['tagname'];

    
    
    

    //$sql="update activities set id='$id',name='$name',description='$description',display_picture='$display_picture',tag_name='$tagname' where id=$id"; //
    $sql = "UPDATE activities SET name=?, description=?, display_picture=?, tag_name=? WHERE id=?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, "sssss", $name, $description, $display_picture, $tagname, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

     

    }

?>

<head>
    
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

    <!-- Please code inside here -->
    <div>
        <form method="post" enctype="multipart/form-data">

         <!-- These are the code for the forms that will allow user to add data to the table -->
            <label>Name</label>
            <div class="input-group mb-3">
                 <span class="input-group-text" id="inputGroup-sizing-default"></span>
                     <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value=<?php echo $name; ?>>
            </div>

            </br>

            <label>Description</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default"></span>
                    <input type="text" name="description"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value=<?php echo $description; ?> >
            </div>

            </br>

            <label>Display picure</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default"></span>
                    <input type="file" name="display_picture" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" onchange="previewImage(event)"  >
            </div> 
            <div>
                image preview
                <div id="imagePreview"></div>
                
            </div>   
            <div>
                current image 
                <?php echo '</br>';?>
                <?php echo '<img src="data:image/jpeg;base64,'.($display_picture).'" width="100px" height="100px"/>'; ?>


            </div>   

            </br>

            <label>Tag Name</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default"></span>
                    <input type="text" name="tagname"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value=<?php echo $tagname; ?> >
            </div>

            </br>

            

            </br>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>

        </form>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('imagePreview');
                output.innerHTML = '<img src="' + reader.result + '" width="100px" height="100px"/>';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

</body>
