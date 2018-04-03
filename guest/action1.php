<?php
//action.php
session_start();
$connect = mysqli_connect("localhost", "root", "mind", "jewellery");
if (isset($_POST["p_id"])) {
    $order_table = '';
    $message = '';
    if ($_POST["action"] == "add") {
        if (isset($_SESSION["shopping_cart"])) {
            $is_available = 0;
            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                if ($_SESSION["shopping_cart"][$keys]['p_id'] == $_POST["p_id"]) {
                    $is_available++;
                    $_SESSION["shopping_cart"][$keys]['qty'] = $_SESSION["shopping_cart"][$keys]['qty'] + $_POST["qty"];
                }
            }
            if ($is_available < 1) {
                $item_array = array(
                    'product_id' => $_POST["p_id"],
                    'product_name' => $_POST["p_name"],
                    'product_price' => $_POST["price"],
                    'product_quantity' => $_POST["qty"]
                );
                $_SESSION["shopping_cart"][] = $item_array;
            }
            $query = "SELECT * FROM product as p
LEFT JOIN cart as c ON p.product_id = c.product_id
WHERE product.p_id;  
           }  
           else  
           {  
                $item_array = array(  
                    'product_id'               =>     $_POST["p_id"],  
                          'product_name'               =>     $_POST["p_name"],  
                          'product_price'               =>     $_POST["price"],  
                          'product_quantity'          =>     $_POST["qty"]   
                );  
                $_SESSION["shopping_cart"][] = $item_array;  
           }  
      }  
      if($_POST["action"] == "remove")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["product_id"] == $_POST["p_id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     $message = '<label class="text - success">Product Removed</label>';  
                }  
           }  
      }  
      if($_POST["action"] == "quantity_change")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["p_id"])  
                {  
                     $_SESSION["shopping_cart"][$keys]['qty'] = $_POST["qty"];  
                }  
           }  
      }  
      $order_table .= '  
           '.$message.'  
           <table class="table - shopping - cart">
                  <tr class="table - head">
                     <th class="column - 1"></th>
                     <th class="column - 2">Product</th>
                     <th class="column - 3">Price</th>
                     <th class="column - 4 p - l - 70">Quantity</th>
                     <th class="column - 5">Total</th>
                  </tr>
           ';  
      if(!empty($_SESSION["shopping_cart"]))  
      {  
           $total = 0;  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                $order_table .= '  
                     <tr>  
                          <td>'.$values["p_name"].'</td>  
                          <td><input type="text" name="quantity[]" id="quantity'.$values["p_id"].'" value="'.$values["qty"].'" class="form - control quantity" data-product_id="'.$values["p_id"].'" /></td>  
                          <td align="right">$ '.$values["p_price"].'</td>  
                          <td align="right">$ '.number_format($values["qty"] * $values["price"], 2).'</td>  
                          <td><button name="delete" class="btn btn - danger btn - xs delete" id="'.$values["p_id"].'">Remove</button></td>  
                     </tr>  
                ';  
                $total = $total + ($values["qty"] * $values["price"]);  
           }  
           $order_table .= '  
                <tr>  
                     <td colspan="3" align="right">Total</td>  
                     <td align="right">$ '.number_format($total, 2).'</td>  
                     <td></td>  
                </tr>  
                <tr>  
                     <td colspan="5" align="center">  
                          <form method="post" action="cart . php">  
                               <input type="submit" name="place_order" class="btn btn - warning" value="Place Order" />  
                          </form>  
                     </td>  
                </tr>  
           ';  
      }  
      $order_table .= '</table>';  
      $output = array(  
           'order_table'     =>     $order_table,  
           'cart_item'          =>     count($_SESSION["shopping_cart"])  
      );  
      echo json_encode($output);  
 }  
 ?>