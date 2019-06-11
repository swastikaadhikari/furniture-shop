<!--template for enquiry-->
<?php 
session_start();//starts the session
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {//checks the variable is set ot not
    ?>  
      <h2>View Message</h2>
      <a class="new" href="msgcompletion">completed message</a><!--view the message-->
      <?php
      echo "<table border='1'>";
      echo '<thead>';
      echo '<tr>';
      echo '<th>Message</th>';
      echo '<th style="width: 15%">Posted By</th>';

      echo '<th style="width: 5%"></th>';
      echo '</tr>';
      $enquiry=$msglist->find('completion_status',0);//fincd the completion status 
      $query=$user->find('username',$_SESSION['username']);//find the username

    foreach ($query as $key ) {//calls the function itself

      foreach ($enquiry as $value) {//calls the function itself
      echo '<tr>';
      echo '<td>' . $value['msg'] . '</td>';//display the message
      echo '<td>' . $value['firstname'] .' '.$value['lastname'] . '</td>';//display the firstname and surnmae
      echo '<td><form method="post" action="msgcompletion&completedid='.$value['contact_id'].'&aid='.$value['admin_id'].'">
        <input type="submit" name="submit" value="Complete" />
        </form></td>';//admin id is passed
      echo '</tr>';
    }
  }
    echo '</thead>';
    echo '</table>';
?> 
<?php

    if (isset($_GET['completedid'])) {//checks the variable
     $criteria = [
      'completion_status' => 1,
      'admin_id' => $_GET['aid'],
      'contact_id' => $_GET['completedid']
     ];//values are passed

     $updatemsg->update($criteria,'contact_id');//update the contact id

      echo 'Message Completed!';
      header('location:completemsgtemplate');
}
}
?>