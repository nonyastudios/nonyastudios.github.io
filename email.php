<?php // Check if form was submitted
if ($_POST['email'] && $_POST['message']) {
  if ($_POST['subject']) {
    echo "Go away you dirty spammer!";
  } else {
    mail(
      "nonyastudios@gmail.com,
      "[website] New message from ".$_POST['email'],
      $_POST['message']
    );
    echo "<p>Thank you for your message</p>";
  }
}	?>