<html>  
    <body>  
        <h2>Area Of Rectangle</h2>
    <form method = "post">   

    Width: <input type="number" name="width">   
    <br><br>   
    Length: <input type="number" name="length"> <br> <br>

            <input type = "submit" name = "submit" value="Calculate">   
    </form>   
    </body>   
</html>

<?php   
if(isset($_POST['submit']))  
    {   
$width = $_POST['width'];   
$length = $_POST['length'];   
$area = $width*$length;   
echo "The area of a rectangle with a width $width and length $length is $area";   
}   
?>   