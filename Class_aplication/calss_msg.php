<?php
/*************
CLASS USING CONFIG



************/


class user {
public  $msg="inclua dados do seu SGBD";
public $css ='<link rel="stylesheet" type="text/css" href="styles/style-all.css">';

 public  static function send_msg($text)
{return $text;
return  self ::$msg;

}

public function estilo()
{return $this->css;}


             }/*end class*/





?>