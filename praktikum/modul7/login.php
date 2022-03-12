
    <?php  
        if(isset($_POST['login'])){
            $num1 = $_POST['usr'];
            $num2 = $_POST['pwd'];
        };

        if ($num1=="123" && $num2=="123") {
            header("location: power_ranger2.php");
        }
        
    
    ?>


