<?php
namespace Drupal\custom_drush\Command;

use Drush\Commands\DrushCommands;


/**
 * Drush command file.
 */
class CustomCommands extends DrushCommands {

  /**
   * A custom Drush command to displays the given text.
   * 
   * @command simple-text
   * @param $text Argument with text to be printed
   * @option uppercase Uppercase the text
   * @aliases simtxt
   */
  public function printMe($text = 'Hello world!', $options = ['uppercase' => FALSE]) {
    if ($options['uppercase']) {
      $text = strtoupper($text);
    }
    $this->output()->writeln($text);
  }

  
  /**
   * A custom Drush command to displays the given text.
   * 
   * @command prime
   * @param $num Argument with text to be printed
   * @option num number till prime need to be print.
   * @aliases pn
   */
  public function printPrime($num = 20, $options = ['num' => 0]) {
    if ($options['num'] > 0 ) {
    $num  =  $options['num'];
    }

    for($i = 2;$i<=$num;$i++)
    {
        $isPrime = true;
        
        for($j = 2;$j <=($i/2); $j++) 
        {
            if($i % $j == 0)
                {
                    $isPrime = false;
                }
        }
        if($isPrime == true)
        {
            $this->output()->writeln($i);
        }	
    }
  }


  /**
   * A custom Drush command to displays the given text.
   * 
   * @command odd-even
   * @param $num Argument with text to be printed
   * @option num number till prime need to be print.
   * @aliases oe
   */
  public function oddEvent($num = 30, $options = ['num' => 0]) {
    if ($options['num'] > 0 ) {
    $num  =  $options['num'];
    }

    if($num % 2 == 0){
        $this->output()->writeln($num . ' is even.');
    }else{
        $this->output()->writeln($num . ' is odd.');
    }
    
  }

}