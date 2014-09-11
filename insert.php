    <?php
    
    include('dbConfig.php');
    
        $Name=$_POST['Name'];
        $Age=$_POST['Age'];
        

        if(!$Name||!$Age)
        {
            echo 'Try again.';
        }
        
        echo 'Data received:<br>';
        echo 'Name:'.$Name.'<br>';
        echo 'Age:'.$Age.'<br>';
      
       

        
        $insere="insert into teachers123 (name, age) values "
                . "('$Name', '$Age')";
        
        echo $insere;
        
        $result=mysql_query($insere);
         
        if($result==1)
            echo "<p>Sucess! Here's a cookie! :)<br>";
        else
            echo "<p>Boo-hoo!<br>";
        ?>