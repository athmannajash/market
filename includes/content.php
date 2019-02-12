
<div class ="container">
   <div class="row">
     <div class="col-sm-3 col-md-6" style="background-color:lavender;">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
       incididunt ut labore et dolore magna aliqua.</p>
       <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
       aliquip ex ea commodo consequat.</p>
     </div>
     <div class="col-sm-9 col-md-6" style="background-color:lavenderblush;">
       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
       doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
       veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
     </div>
   </div>
        <div class="row">
            <div class="head">Top List</div>
            <?php
                $db = mysqli_connect("localhost","root","athman","market");
                $sql = "SELECT * FROM image";
                $result = mysqli_query($db, $sql);
                while ($row = mysqli_fetch_array($result)) {
                  echo "<div class = 'col-md-5' id = 'img_div'>";
                    echo "<div class='thumbnail' id='thumbnail'>";
                      echo "<img src='includes/files/".$row['name']."'>";
                      echo "<p class='price'>".$row['price']."/=</p>";
                      echo "<p>".$row['description']."</p>";
                      echo "</div>";
                  echo "</div>";
                }
             ?>
        </div>
    </div>
