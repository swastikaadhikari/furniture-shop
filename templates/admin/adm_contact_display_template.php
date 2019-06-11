<!--to display the enquiry-->
<?php
session_start(); //starts the session
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {//checks the variable logged in is set or not
   ?>  
    <h2>View Message</h2>
    <a class="new" href="msgcompletion">completed message</a><!--view the complete message-->
    <?php
    echo "<table border='1'>";
    echo '<thead>';
    echo '<tr>';
    echo '<th>Message</th>';
    echo '<th style="width: 15%">Posted By</th>';

    echo '<th style="width: 5%"></th>';
    echo '</tr>';

  $message = $list->find('completion_status',0);//find the completion status
  $contact = $user->find('username',$_SESSION['username']);//find the username

    foreach ($contact as $rows) {//call the function itself
        foreach ($message as $row) {//call the function itself
        echo '<tr>';
        echo '<td>' . $row['enquiry'] . '</td>';//display the enquiry
        echo '<td>' . $row['firstname'] .' '.$row['lastname'] . '</td>';//display the firstname and surnmae
        //view the contact display
        echo '<td><form method="post" action="adm_contact_display&completedid='.$row['contact_id'].'&aid='.$rows['admin_id'].'">
          <input type="submit" name="submit" value="Complete" />
          </form></td>';//gets the id and shows the details
        echo '</tr>';
      }
    }
      echo '</thead>';
      echo '</table>';
    ?> 
    <?php

      if (isset($_GET['completedid'])) {//checks the completedid
       $criterian = [
        'completion_status' => 1,
        'admin_id' => $_GET['aid'],
        'contact_id' => $_GET['completedid']
       ];//checks the criteria

       $updatemsg->update($criterian,'contact_id');//update the id 

        echo 'Message Completed!';
        header('location:msgcompletion');
    }
    }
?>