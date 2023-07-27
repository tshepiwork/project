    <?php

        include 'configuration.php';

        echo  "<h1>List </h1>".
        "</br>";
        echo '<input type="button" style="width:120px;height:30px" value="index" onclick="window.location=\'http://localhost/Interface/index.php\'" />';
        echo "</br>";
        echo "</br>";
        echo '<input type="button" style="width:120px;height:30px" value="Create" onclick="window.location=\'http://localhost/Interface/create.php\'" />';
        echo "</br>";
    ?>

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
    </br>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Display picture</th>
        <th scope="col">Tag name</th>
        <th scope="col">Created at</th>
        <th scope="col">Update data</th>
        <th scope="col">Updated at</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $sql="Select * from activities";
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
        echo' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$description.'</td>
        <td> <img src="data:image/jpeg;base64,'.($displaypicture).'" width="100px" height="100px"/></td>
        <td>'.$tagname.'</td>
        <td>'.$created.'</td>
        <td><button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button></td>
        <td>'.$updated.'</td>
        <td><button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button></td>
        
        
    </tr>';
    } 
    }

    ?>
        
        
    </tbody>
    </table>




    </body>