<?php
  declare(strict_types=1);
  final class Linio
  {

    function __construct(int $indice)
    {
      $this->linianos($indice);
    }

    public function linianos($max = 100)
    {
      while ($max > 100 || $max < 1) {
        throw new InvalidArgumentException("¡Lo está haciendo mal!", 112);
        exit;
      }
      for ($i=1; $i <= $max; $i++) {
        $multTres = ($i % 3 == 0);
        $multCinco = ($i % 5 == 0);
        $multAmbos = (($i % 3 == 0) && ($i % 5 == 0));
        $multAlguno = (($i % 3 == 0) || ($i % 5 == 0));

        if ($multAlguno){
          $entro = 0;
          while ($entro == 0 && $multAmbos) {
            $entro = 1;
            echo "Linianos";
          }
          while ($entro == 0 && $multCinco) {
            $entro = 1;
            echo "IT";
          }

          while ($entro == 0 && $multTres) {
            $entro = 1;
            echo "Linio";
          }
        }
        echo "=> ".$i."<br>";
        // switch ($i) {
        //   case (($i % 3 == 0) && ($i % 5 == 0)):
        //   echo "Linianos ".$i;
        //   echo "<br>";
        //   break;
        //   case $i % 3 == 0:
        //     echo "Linio ".$i;
        //     echo "<br>";
        //     break;
        //   case $i % 5 == 0:
        //     echo "IT ".$i;
        //     echo "<br>";
        //     break;
        //   default:
        //     echo $i;
        //     echo "<br>";
        //     break;
        // }

      }
      return 1;
    }
  }

  // $linioExample = new Linio(100);
