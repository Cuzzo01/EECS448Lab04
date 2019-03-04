<?php
  $numCorrect = 0;
  $answer1 = $_POST['q1'];
  if ($answer1 == '4') {
    $numCorrect++;
  }

  $answer2 = $_POST['q2'];
  if ($answer2 == '28') {
    $numCorrect++;
  }

  $answer3 = $_POST['q3'];
  if ($answer3 == '5') {
    $numCorrect++;
  }

  $answer4 = $_POST['q4'];
  if ($answer4 == '19') {
    $numCorrect++;
  }

  $answer5 = $_POST['q5'];
  if ($answer5 == '44') {
    $numCorrect++;
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
    <h3>Question #1</h3>
    <p><b>Question:</b> What is 2 + 2?</p>
    <p><b>Correct Answer:</b> 4</p>
    <p><b>Your Answer:</b> <?php echo $answer1 ?></p>


    <h3>Question #2</h3>
    <p><b>Question:</b> What is 4 * 7?</p>
    <p><b>Correct Answer:</b> 28</p>

    <p><b>Your Answer:</b> <?php echo $answer2 ?></p>


    <h3>Question #3</h3>
    <p><b>Question:</b> What is 50 / 10?</p>
    <p><b>Correct Answer:</b> 5</p>

    <p><b>Your Answer:</b> <?php echo $answer3 ?></p>


    <h3>Question #4</h3>
    <p><b>Question:</b> What is 23 - 4?</p>
    <p><b>Correct Answer:</b> 19</p>

    <p><b>Your Answer:</b> <?php echo $answer4 ?></p>


    <h3>Question #5</h3>
    <p><b>Question:</b> What is 35 + 9?</p>
    <p><b>Correct Answer:</b> 44</p>

    <p><b>Your Answer:</b> <?php echo $answer5 ?></p>

  </body>
</html>
