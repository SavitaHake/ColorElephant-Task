<html lang="en">
    <head>
     
        <title>information</title>
		

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/rating.min.css">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon.png">
  <script src="js/rating.min.js"></script>
    </head>
	
    <body>

        <?php
        $con=  mysqli_connect("localhost", "root", "", "user_info");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from pdf");

       ?>
        <div><center>
            <td><h1>information</h1></td>
         <table border="1" align=center>
            <th> Name</th>
                    <th>profile</th>
                    <th>File</th>
                    <th>coverletter</th>
                    <th>Rating</th>
					<th>Review Action</th>
            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))

             {
                 ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['profile']; ?></td>
                <td><?php echo $row['file']; ?></td>
                <td><?php echo $row['coverletter'] ;?></td>
				<td id="shop" width="30%">	</td>
				<td><input type=button value='Review candidate' onclick="review(); return 0;"></td>
                
            </tr>
        <?php
             }
             ?>
             </table>
            </div></center>
			
			<script>
			function review(){
				alert("candidated reviewed");
			}
			
			 /**
			   * Demo in action!
			   */
			  (function() {

				'use strict';

				// SHOP ELEMENT
				var shop = document.querySelector('#shop');

				// DUMMY DATA
				var data = [
				  
				  {
					rating: null
				  }
				];

				// INITIALIZE
				(function init() {
				  for (var i = 0; i < data.length; i++) {
					addRatingWidget(buildShopItem(data[i]), data[i]);
				  }
				})();

				// BUILD SHOP ITEM
				function buildShopItem(data) {
				  var shopItem = document.createElement('div');

				  var html = '<ul class="c-rating"></ul>';

				  shopItem.classList.add('c-shop-item');
				  shopItem.innerHTML = html;
				  shop.appendChild(shopItem);

				  return shopItem;
				}

				// ADD RATING WIDGET
				function addRatingWidget(shopItem, data) {
				  var ratingElement = shopItem.querySelector('.c-rating');
				  var currentRating = data.rating;
				  var maxRating = 5;
				  var callback = function(rating) { alert(rating); };
				  var r = rating(ratingElement, currentRating, maxRating, callback);
				}

			  })();
			</script>
    </body>
</html>
