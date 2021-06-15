<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
</head>

<body style="background-color : #BDC3C7;">
    <div class="header">
        <img src="img/transaction.jpg" alt="Transaction">
      </div>
      <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transaction History</h2>
        <br>
        <div class="table-responsive-sm">
     <table class="table table-hover table-striped table-condensed table-bordered">
         <thead style="color : black;">
             <tr>
                 <th class="text-center">S.No.</th>
                 <th class="text-center">Sender</th>
                 <th class="text-center">Receiver</th>
                 <th class="text-center">Amount</th>
                 <th class="text-center">Date & Time</th>
             </tr>
         </thead>
         <tbody>
            <?php
    
                include 'config.php';
    
                $sql ="select * from transaction";
    
                $query =mysqli_query($conn, $sql);
    
                while($rows = mysqli_fetch_assoc($query))
                {
            ?>
    
                <tr style="color : black;">
                <td class="py-2"><?php echo $rows['sno']; ?></td>
                <td class="py-2"><?php echo $rows['sender']; ?></td>
                <td class="py-2"><?php echo $rows['receiver']; ?></td>
                <td class="py-2"><?php echo $rows['balance']; ?> </td>
                <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                    
            <?php
                }
    
            ?>
            </tbody>
        </table>

    </div>
</div>