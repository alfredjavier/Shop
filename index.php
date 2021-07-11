<?php
include ('config.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <style>
    body{
        margin-top: 40px;
        padding: 50px;
        height: 50px;
        box-sizing: border-box;
        
    }
    img {
        width: 100% !important;
        height: 200px !important;
        object-fit: contain;
        
        
    }
    table{
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 720px;
        border-radius: 5px 5px 0 0;;
    }

    td{
  
        font-size: 20px;
    }
  

    tr{
        
        border-bottom: 3px solid black;
        border-top: 3px solid black;
        border-right: 3px solid black;
        border-left: 3px solid black;
        border-collapse: collapse;
    }
    h4{
        margin-right: 45%;
        font-size: 2em;

    }

   b{
       margin-right: 70%;
       padding: 2px;
       max-width: 100%;
       font-size: 1em;
 
     
   }
   button{
       margin-top: 25px;
       margin: 1px;
     
    
   }
    h3 {
        text-align: center;
        white-space: nowrap;
        font-size: 10px;
    }

    h6 {
        text-align: center;
        font-size: 13px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
            <div class="row">

<?php

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql); 
while($row = mysqli_fetch_assoc($result)) {
// echo $row['id'] ." ". $row['name'] ." ". $row['image'] ." ". $row['price']."<br>";
?>
<div class="col-md-3 text-center mt-5">
    <img src="images/<?php echo $row['image']?>" alt="">
    <h3><?php echo $row['name']?></h3>
    <h6>Price: <?php echo $row['price']?></h6>
    <div class="form-group">
        <label>Select list:</label>
        <select class="form-control" id="quantity<?php echo $row['id']?>">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
        <input type="hidden" id="name<?php echo $row['id']?>" value='<?php echo $row['name']?>'>
        <input type="hidden" id="price<?php echo $row['id']?>" value='<?php echo $row['price']?>'>

        <button class='btn btn-primary add' data-id="<?php echo $row['id']?>">Add to Cart</button>

    </div>

</div>






<?php
}

?>

</div>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-4">
            <h4 class='text-center'> Checkout</h4>
            <div id="displayCheckout">
            <?php 
                if(!empty($_SESSION['cart'])){
                    $outputTable = '';
                    $total = 0;
                    $outputTable .= "<table class='table table-bordered'><thead><tr><td>Name</td><td>Price</td><td>Quantity</td> </tr></thead>";
                    foreach($_SESSION['cart'] as $key => $value){
                        $outputTable .= "<tr><td>".$value['p_name']."</td><td>".($value['p_price'] * $value['p_quantity']) ."</td><td>".$value['p_quantity']."</td><td><button id=".$value['p_id']." class='btn btn-danger delete'>Delete</button><td><button id=".$value['p_id']." class='btn btn-success update'>Update</button></td></tr>";  
                        $total = $total + ($value['p_price'] * $value['p_quantity']);
                    }
                    $outputTable .= "</table>";
                    $outputTable .= "<div class='text-center'><b>Total: ".$total."</b></div>";
                    echo $outputTable;
                      echo "<a href='welcome.php' <input type='button' class='btn btn-dark out'>Check Out</a>";
                    echo "<br>";
                    echo "<br>";
                  echo "<a href='welcome.php' <input type='button' class='btn btn-info'>Back To Home</a>";
                }
?>
            </div> 
            </div>
        </div>


       
    </div>


    <script>
    $(document).ready(function() {
         alldeleteBtn = document.querySelectorAll('.delete')

         alldeleteBtn.forEach(onebyone => {
            onebyone.addEventListener('click',deleteINsession)
         })

function deleteINsession(){
    removable_id = this.id;
    $.ajax({
                url:'cart.php',
                method:'POST',
                dataType:'json',
                data:{ 
                      id_to_remove:removable_id,
                      action:'remove' 
                },
                success:function(data){
                        $('#displayCheckout').html(data);
           alldeleteBtn = document.querySelectorAll('.delete')
       
         alldeleteBtn.forEach(onebyone => {
            onebyone.addEventListener('click',deleteINsession)
         })
                      }
              }).fail( function(xhr, textStatus, errorThrown) {
        alert(xhr.responseText);
    });

}


        $('.add').click(function() { 
            id = $(this).data('id');
            name = $('#name' + id).val();
            price = $('#price' + id).val();
            quantity = $('#quantity' + id).val();
              $.ajax({
                url:'cart.php',
                method:'POST',
                dataType:'json',
                data:{
                      cart_id : id,
                      cart_name : name,
                      cart_price : price,
                      cart_quantity : quantity,
                      action:'add' 
                },
                success:function(data){
                        $('#displayCheckout').html(data);
                        alldeleteBtn = document.querySelectorAll('.delete')
         alldeleteBtn.forEach(onebyone => {
            onebyone.addEventListener('click',deleteINsession)
         })
                      }
              }).fail( function(xhr, textStatus, errorThrown) {
        alert(xhr.responseText);
    });
        
        })
    })
    </script>

</body>

</html>


<?php


mysqli_close($conn);
 
 
?>