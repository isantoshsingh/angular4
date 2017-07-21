<?php
#var_dump($_POST['word']);die;
#var_dump($_POST);die;


if(isset($_POST['word'])) {
  $word = trim($_POST['word']);
  //remove white spaces
  $word = preg_replace("/\s+/","",$word);

  $reverse = strrev($word); // reverse the word

  if ($word == $reverse) {
    $res = [
      'msg' => 'This string is a palindrome',
      'success' => true,
    ];
  } else {
    $res = [
      'msg' => 'This string is not a palindrome',
      'success' => false,
    ];
  }
} else {
    $res =[
      'msg' => 'You are at wrong place!!',
      'success' => false,
    ];
}

echo json_encode($res);
