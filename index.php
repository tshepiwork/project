<Style>
body{ background-color: green;}
</Style>
<head>

    <?php echo "<h1>Hello Word</h1>" ?>

    <?php echo "<title>Index</title>" ?>

</head>

<body>

    <div >
        <button class="btn btn-primary" onclick="windowOpen()">
            Open List 
        </button>
    </div>
</br>
    <div>
        <button onclick="window.location='http://localhost/Interface/locations.php'">Locations</button>
    </div>

</body>

<script>
    function windowOpen(){
        open("http://localhost/Interface/list.php");
    }
</script>