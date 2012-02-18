  <?php
  
  interface QuackBehavior
  {
      public function doQuack();
  }
  
  class Quack implements QuackBehavior
  {
      public function doQuack()
      {
          echo 'ガーガー', PHP_EOL;
      }
  }
  
  class MuteQuack implements QuackBehavior
  {
      public function doQuack()
      {
          echo 'キューキュー', PHP_EOL;
      }
  }
