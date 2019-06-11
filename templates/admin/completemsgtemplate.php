<!--template of complete message page-->
<?php 
session_start(); //start the session
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {//checks the variable logged in is set or not
      ?>
      <!---display the information about message-->
      <h2>Completed Messages</h2>
      <?php
      echo "<table border='1'>";
      echo '<thead>';
      echo '<tr>';
      echo '<th>Message</th>';
      echo '<th style="width: 20%">Posted By</th>';
      echo '<th style="width: 20%">Completed By Admin</th>';
      echo '</tr>';

      $message = $completemsg->find('completion_status',1);//find the completion status and set as 1
     
      foreach ($message as $row ) {//calls the function itself
        $contact = $user->find('admin_id',$row['admin_id'])->fetch();//get the admin id and fetch the data
        echo '<tr>';
        echo '<td>' . $row['enquiry'] . '</td>';//display the enquiry
        echo '<td>' . $row['firstname'] .' '.$row['lastname'] . '</td>';//display the firstname and surname
        echo '<td align="center">' . $contact['username'] . '</td>';//display the username
      }
      echo '</thead>';
      echo '</table>';
    
}
?>