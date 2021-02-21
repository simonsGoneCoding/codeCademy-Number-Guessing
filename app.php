<!-- In this project, you’ll create a number guessing game. Your program will generate a random number between 1 and 10. You’ll run the game 10 times and tell the user some information about their guessing abilities. -->

<?php 
  //initial vars
  $play_count = 0; 
  $correct_guesses = 0; 
  $guess_high = 0; 
  $guess_low = 0;

  echo "Try to guess a number from 1 to 10 inclusive.\n"; 


  function guessNumber(){
    //access global vars: 
    global $play_count, $correct_guesses, $guess_high, $guess_low;
    $play_count++; 

    $rand_num = rand(1, 10); 
    echo "\n Make your guess... \n"; 

    $player_guess = readline(">>>> "); 
    $player_guess = intval($player_guess); // converting string input to number type
    
    echo "\nRound: $play_count\nYour guess: $player_guess\nAI pick: $rand_num\n";

    //logic counting game score: 
    if($player_guess === $rand_num){
      $correct_guesses++; 
    }elseif($player_guess > $rand_num){
      $guess_high++; 
    }elseif($player_guess < $rand_num){
      $guess_low;
    }


  }


  function gameSummary(){
    global $play_count, $correct_guesses, $guess_high, $guess_low;

    //calculating % of correct guesses.
    $score = $correct_guesses / $play_count * 100; 
    echo "$play_count rounds played, $score% of correct guesses.";
    //scecifying tendency in guessing: 
    echo $guess_high > $guess_low ? "When you guessed wrong, you tended to guess high." : "When you guessed wrong, you tended to guess low."; 
  }


  function resetGame(){
  global $play_count, $correct_guesses, $guess_high, $guess_low;
  $play_count = 0; 
  $correct_guesses = 0; 
  $guess_high = 0; 
  $guess_low = 0; 
  }



  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();
  gameSummary(); 
  resetGame();