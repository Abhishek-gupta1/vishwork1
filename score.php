<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<html>
 
<head>
	<meta charset=UTF-8" />
	
	<title>Calculating Scores</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
	<div id="page-wrap">
 
		<center><h1>Result</h1></center>
		
        <?php
            error_reporting(0);
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10= $_POST['question-10-answers'];
            $answer11= $_POST['question-11-answers'];
            $answer12= $_POST['question-12-answers'];
            $answer13= $_POST['question-13-answers'];
            $answer14= $_POST['question-14-answers'];
            $answer15= $_POST['question-15-answers'];
            $answer16= $_POST['question-16-answers'];
            $answer17= $_POST['question-17-answers'];
            $answer18= $_POST['question-18-answers'];
            $answer19= $_POST['question-19-answers'];
            $answer20= $_POST['question-20-answers'];
            $answer21= $_POST['question-21-answers'];
            $answer22= $_POST['question-22-answers'];
            $answer23= $_POST['question-23-answers'];
            $answer24= $_POST['question-24-answers'];
            $answer25= $_POST['question-25-answers'];

            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            if ($answer6 == "B") { $totalCorrect++; }
            if ($answer7 == "D") { $totalCorrect++; }
            if ($answer8 == "A") { $totalCorrect++; }
            if ($answer9 == "D") { $totalCorrect++; }
            if ($answer10 == "C") { $totalCorrect++; }
            if ($answer11 == "D") { $totalCorrect++; }
            if ($answer12 == "D") { $totalCorrect++; }
            if ($answer13 == "D") { $totalCorrect++; }
            if ($answer14 == "C") { $totalCorrect++; }
            if ($answer15 == "A") { $totalCorrect++; }
            if ($answer16 == "B") { $totalCorrect++; }
            if ($answer17 == "B") { $totalCorrect++; }
            if ($answer18 == "A") { $totalCorrect++; }
            if ($answer19 == "A") { $totalCorrect++; }
            if ($answer20 == "D") { $totalCorrect++; }
            if ($answer21 == "A") { $totalCorrect++; }
            if ($answer22 == "C") { $totalCorrect++; }
            if ($answer23 == "C") { $totalCorrect++; }
            if ($answer24 == "B") { $totalCorrect++; }
            if ($answer25 == "B") { $totalCorrect++; }
            
             echo "<center><div id='results'>Your score in the test is $totalCorrect out of 25 </div></center>";

            if($totalCorrect>0 && $totalCorrect<=9) {
                echo "You have to study again full in deep.Your performance is poor!!";
            }

            else if($totalCorrect>=10 && $totalCorrect<=12) {
                echo "You have to study it again.Your performace is satisfactory!!";
            }
            
            else if($totalCorrect>=13 && $totalCorrect<=15) {
                echo "You have to revise again once and then try.Your performance is average!!";
            }

            else if($totalCorrect>15 && $totalCorrect<=20) {
                echo "You have to just read it once.Your performance is fair!!";
            }

            else if($totalCorrect>20 && $totalCorrect<=23) {
                echo "Great work.Your perforamnce is good!!";
             }
              
             else {
                echo "Outstanding perforamnce!!Well Done.";
             }
            
        ?>
	
	</div>
 
</body>
 