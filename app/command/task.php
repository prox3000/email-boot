<?php
class taskCommand {
    
  public function base(){
      $aActionTask = Task::getInstance()->getActivTask();
      $aResp = [];
      for( $i = 0;$i < count($aActionTask) ;$i++){
          $aResp[] = $this->useTask($aActionTask[$i]);
      }
      return $aResp;
  } 
  
  private function useTask($task){
      
  }
  
}
