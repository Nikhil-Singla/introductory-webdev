<!DOCTYPE html>
<html>
    <?php  
    $ans1 = $_POST["ans1"]; 
    $ans2 = $_POST["ans2"]; 
    $ans3 = $_POST["ans3"]; 
    $ans4 = $_POST["ans4"]; 
    $ans5 = $_POST["ans5"]; 

    $ans1cor = "Trick Question";
    $ans2cor = "Legendary Bird Trio";
    $ans3cor = "Slowking";
    $ans4cor = "C";
    $ans5cor = "Yes";

    $checkOne="red";
    $checkTwo="red";
    $checkThree="red";
    $checkFour="red";
    $checkFive="red";

    $correct = 0;
    if ($ans1 == $ans1cor) {$correct++; $checkOne="green";}
    if ($ans2 == $ans2cor) {$correct++; $checkTwo="green";}
    if ($ans3 == $ans3cor) {$correct++; $checkThree="green";}
    if ($ans4 == $ans4cor) {$correct++; $checkFour="green";}
    if ($ans5 == $ans5cor) {$correct++; $checkFive="green";}

    echo "<!DOCTYPE html><h3>Lab 06 Exercise 2: Quiz</h3>";

    echo "<body style='width: fit-content;'>";

    echo "<div class='Qform' style='border: 1px solid black; padding: 8px;'>";
    echo "<label>Question 1: What is the very first Pokemon?</label><br>";
    echo "<label style='margin-left: 16px; color: ", $checkOne, "'>  You answered: ", $ans1, "</label><br>";
    echo "<label style='margin-left: 16px;'>  Correct answer: ", $ans1cor, "</label><br>";
    echo "</div><br>";

    echo "<div class='Qform' style='border: 1px solid black; padding: 8px;'>";
    echo "<label>Question 2: What is the pokemon trio named after Spanish Numbers?</label><br>";
    echo "<label style='margin-left: 16px; color: ", $checkTwo, "'>  You answered: ", $ans2, "</label><br>";
    echo "<label style='margin-left: 16px;'>  Correct answer: ", $ans2cor, "</label><br>";
    echo "</div><br>";

    echo "<div class='Qform' style='border: 1px solid black; padding: 8px;'>";
    echo "<label>Question 3: Which pokemon can devolve?</label><br>";
    echo "<label style='margin-left: 16px; color: ", $checkThree, "'>  You answered: ", $ans3, "</label><br>";
    echo "<label style='margin-left: 16px;'>  Correct answer: ", $ans3cor, "</label><br>";
    echo "</div><br>";

    echo "<div class='Qform' style='border: 1px solid black; padding: 8px;'>";
    echo "<label>Question 4: What answer is correct?</label><br>";
    echo "<label style='margin-left: 16px; color: ", $checkFour, "'>  You answered: ", $ans4, "</label><br>";
    echo "<label style='margin-left: 16px;'>  Correct answer: ", $ans4cor, "</label><br>";
    echo "</div><br>";

    echo "<div class='Qform' style='border: 1px solid black; padding: 8px;'>";
    echo "<label>Question 5: You can fish in pokemon Red and Blue tiles</label><br>";
    echo "<label style='margin-left: 16px; color: ", $checkFive, "'>  You answered: ", $ans5, "</label><br>";
    echo "<label style='margin-left: 16px;'>  Correct answer: ", $ans5cor, "</label><br>";
    echo "</div><br>";

    echo "<div class='quizTotal' style='border: 1px solid black; padding: 8px;'>";
    echo "TOTAL:<br>", 100 * ($correct / 5), "% (", $correct, "/5)";
    echo "</div><br>";

    echo "</body>";

?>
</html>