<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this -> display();
    }

    //about us page
    public function about_us(){
      return $this->display();

    }

    //service page
    public function service(){
      return $this->display();

    }

    //spensorship page 123
    public function SponsorShip(){
      return $this->display();
    }

}
 ?>
