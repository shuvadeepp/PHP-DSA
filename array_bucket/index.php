<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array Bucket </title>
</head>
<body>
    <h3> Array Bottle Bucket </h3>
    <form action="" method="post">
        <button type="button" name="pushElement" id="pushElement" > Push Element </button> 
        <button type="button" name="emptyBucket" id="emptyBucket"> Empty the Bucket </button>
        <input type="text" name="bucketSize" id="bucketSize" placeholder="Enter your bucket size...">
        <p id="showBlankArr"></p>
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('input[name="bucketSize"]').keyup(function(e) {
        if (/\D/g.test(this.value)) { 
            this.value = this.value.replace(/\D/g, '');
        }
    });
    $("#pushElement").click(function(){ 
        var bucketSize = $("#bucketSize").val();
        // alert(bucketSize);
        $.ajax({
            url: "Bucket.php",
            method: "POST",
            data: { action : "generateElem", bucketSize: bucketSize },
            success: function(data) { 
                console.log(data);
                $("#showBlankArr").html(data); 
            }
        });
    }); 
    $("#emptyBucket").click(function(){ 
        if(confirm("Are you sure to empty?")){
            $.ajax({
                url: "Bucket.php",
                method: "POST",
                data: { action : "unsetArray" },
                success: function(data) { 
                    console.log(data); 
                    $("#showBlankArr").html(data); 
                }
            });
        }
    }); 
    
</script>
</html>