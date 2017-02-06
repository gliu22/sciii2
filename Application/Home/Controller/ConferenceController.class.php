<?php
namespace Home\Controller;
use Think\Controller;
class ConferenceController extends Controller {
  public function conference(){
    return $this->display();

  }

  public function AllConferences(){
    return $this->display();

  }

  public function ConferenceSubject(){
    $subject=(string)$_REQUEST['subject'];
    $data = M('subject');
    $condition['abb'] = $subject;
    $result = $data->where($condition)->find();
    $this->assign('SubjectName',$result['name']);
    return $this->display();
  }

}
 ?>
