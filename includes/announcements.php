<?php

while ($row = $result->fetch_array()) {

  echo '<div class="post"><h3>'.$row['post_time'].'</h3>';
  echo $row['post_content'].'</div>';

}

?>
