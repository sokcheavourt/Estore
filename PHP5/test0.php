<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['msg'])!=null){
            ?>
            <script>
                alert('<?php echo $_SESSION['msg'];?>');
            </script>

            <?php
            session_destroy(); 
        }
    ?>
    <form action="action.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" id="photo">
        <input type="submit" value="Add">
    </form>


    <img src="https://i.pinimg.com/474x/db/40/43/db40433674a9ea8eee9206a49e59f62b.jpg" 
    style="width: 300px;height: 300px;object-fit: contain;" alt="" id="previewIMG">

</body>
<script>
    var file= document.getElementById('photo');
    var previewIMG= document.getElementById('previewIMG');

    file.addEventListener('change',function(){
        // catch srcfile from input 
        var srcfile= this.files[0]; 
        var reader= new FileReader();
        reader.addEventListener('load',function(){
            //link srcfile to img 
            previewIMG.src=reader.result;
        })
        //return src to dispay
        reader.readAsDataURL(srcfile);
    })
</script>
</html>