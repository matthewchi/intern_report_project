<?php

while ($row = $result->fetch_array()) {

  echo '<div class="internship">'.$row['userid'].
  '<br /><form method="post" action="supervisor_home.php">
    <input type="hidden" name ="intern_name" value="'.$row['userid'].'" />
    <button name="intern_eval" type="submit" style="float:right;">Evaluate Intern</button>
  </form></div>';

}

?>
