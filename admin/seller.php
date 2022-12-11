<?php
                require 'glob_funcc.php';

                $users= getseller();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Seller</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
    <body>
        <form>
        <h1>Welcome To Seller list</h1>
        <h2>Seller Page</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Seller Name</th>
                    <th>Seller Id</th>
                    <th>Seller Type</th>
                </tr>
            </thead>
            <tbody>
            
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['sname']?></td> <br>
                        <td><?php echo $user['id']?></td>
                        <td><?php echo $user['stype']?></td>
                        <td> 
                            
                            <button onclick="document.location='updateform.php'">Edit</button>
                            
                        </td>
                    </tr>
                <?php endforeach;;?>
            </tbody>
        </table>
        </form>
    </body>
</html>