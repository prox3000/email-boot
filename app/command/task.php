<?php
class taskCommand {
    
  public function base(){
      $aActionTask = Task::getInstance()->getActivTask();
      print_r('ok');
  } 
  
}
