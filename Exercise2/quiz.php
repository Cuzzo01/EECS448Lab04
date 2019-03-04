<?php
  $numCorrect = 0;
  $correctKey = [false, false, false, false, false];
  if (isset($_POST['q1'])) {
    $answer1 = $_POST['q1'];
    if ($answer1 == '4') {
      $numCorrect++;
      $correctKey[0] = True;
    }
  } else {
    $answer1 = 'Not answered';
  }

  if (isset($_POST['q2'])) {
    $answer2 = $_POST['q2'];
    if ($answer2 == '28') {
      $numCorrect++;
      $correctKey[1] = True;
    }
  } else {
    $answer2 = 'Not answered';
  }

  if (isset($_POST['q3'])) {
    $answer3 = $_POST['q3'];
    if ($answer3 == '5') {
      $numCorrect++;
      $correctKey[2] = True;
    }
  } else {
    $answer3 = 'Not answered';
  }

  if (isset($_POST['q4'])) {
    $answer4 = $_POST['q4'];
    if ($answer4 == '19') {
      $numCorrect++;
      $correctKey[3] = True;
    }
  } else {
    $answer4 = 'Not answered';
  }

  if (isset($_POST['q5'])) {
    $answer5 = $_POST['q5'];
    if ($answer5 == '44') {
      $numCorrect++;
      $correctKey[4] = True;
    }
  } else {
    $answer5 = 'Not answered';
  }
?>
<html>
  <head>
    <title>Quiz Results</title>
  </head>
  <body>
    <h1>Results</h1>
    <h3>You Scored: <?php echo $numCorrect ?>/5 (<?php echo ($numCorrect / 5) * 100; ?>%)</h3>

    <h2>Detailed Results</h2>
    <?php
    if ($correctKey[0] == True) {
      echo '<h3 style="color:green;">Question #1</h3>';
    } else {
      echo '<h3 style="color:red;">Question #1</h3>';
    }
    ?>
    <p><b>Question:</b> What is 2 + 2?</p>
    <p><b>Correct Answer:</b> 4</p>
    <p><b>Your Answer:</b> <?php echo $answer1 ?></p>


    <?php
    if ($correctKey[1] == True) {
      echo '<h3 style="color:green;">Question #2</h3>';
    } else {
      echo '<h3 style="color:red;">Question #2</h3>';
    }
    ?>
    <p><b>Question:</b> What is 4 * 7?</p>
    <p><b>Correct Answer:</b> 28</p>
    <p><b>Your Answer:</b> <?php echo $answer2 ?></p>


    <?php
    if ($correctKey[2] == True) {
      echo '<h3 style="color:green;">Question #3</h3>';
    } else {
      echo '<h3 style="color:red;">Question #3</h3>';
    }
    ?>
    <p><b>Question:</b> What is 50 / 10?</p>
    <p><b>Correct Answer:</b> 5</p>
    <p><b>Your Answer:</b> <?php echo $answer3 ?></p>


    <?php
    if ($correctKey[3] == True) {
      echo '<h3 style="color:green;">Question #4</h3>';
    } else {
      echo '<h3 style="color:red;">Question #4</h3>';
    }
    ?>
    <p><b>Question:</b> What is 23 - 4?</p>
    <p><b>Correct Answer:</b> 19</p>
    <p><b>Your Answer:</b> <?php echo $answer4 ?></p>


    <?php
    if ($correctKey[4] == True) {
      echo '<h3 style="color:green;">Question #5</h3>';
    } else {
      echo '<h3 style="color:red;">Question #5</h3>';
    }
    ?>
    <p><b>Question:</b> What is 35 + 9?</p>
    <p><b>Correct Answer:</b> 44</p>
    <p><b>Your Answer:</b> <?php echo $answer5 ?></p>
  </body>
</html>
