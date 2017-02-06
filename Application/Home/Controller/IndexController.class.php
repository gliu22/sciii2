<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this -> display();
    }

    public function about_us(){
      return $this->display();

    }

    public function service(){
      return $this->display();

    }

    public function SponsorShip(){
      return $this->display();
    }

}
 ?>
