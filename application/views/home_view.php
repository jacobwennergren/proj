    <div id="productgrid">
    <table id="producttable">
        <tr>
        <?php
           $i = 0; //placement counter
           foreach ($products as $product){
               ++$i;
                echo '<td>';
                echo '<img src="images/'.$product->imageurl.'" alt="" width="200px" height="200px">';
                echo $product->name;
                echo '</td>';
               if($i === 3){
                   echo '</tr>';
                   echo '<tr>';
                   $i = 0;
               }

            }
        ?>
        </tr>
    </table>
    </div>
