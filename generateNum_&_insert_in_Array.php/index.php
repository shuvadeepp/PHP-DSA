<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Number Array</title>
</head>
<body>
  <form method="POST">
    <button type="button" name="generateNum" id="generateNum">Generate a number</button><br><br><br>
    <button type="submit" name="pushButton" id="pushButton">Push Number in Array</button>
    <p id="showArray"></p>
    <p id="showNumber"></p>
  </form> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
 
 
    $(document).ready(function(){
        $.ajax({
            url: "get_array.php",
            method: "POST",
            data: { action: "getArray" },
            success: function(data) { 
                $("#showArray").html(data);
            }
        });
    });
      
    $("#generateNum").click(function() {
        $.ajax({
            url: "get_array.php",
            method: "POST",
            data: { action: "generateNumber" },
            success: function(data) {
                // var resultString = JSON.stringify(data);  
                $("#showNumber").text("Generatingggf: " + data);
                // $('#showNumber').append(resultString);
            }
        });
    }); 
     
    $("#pushButton").click(function(e) {
        e.preventDefault();  
            $.ajax({
                url: "get_array.php",
                method: "POST",  
                data: { action: "pushNumber" },
                success: function(data) { 
                    $("#showArray").html(data);
                }
            }); 
    });
  </script>
</body>
</html>