<div class="container">
<h3>view products</h3>
<form method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <th>numero</th>
            <th>product Name</th>
            <th>picture</th>
            <th>description</th>
          
        </tr>
     
        <?php include('functions/function.php'); echo viewAllProducts(); ?>
       
    </table>
</form>
</div>
<?php


