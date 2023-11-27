<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StringController extends Controller
{
    public function index(){
      echo '<h1>String Helper</h1>';

      echo "Str::of('Welcome to my Youtube Channel')->after('welcome to');";
      $rs = Str::of('Welcome to my Youtube Channel')->after('Welcome to');
      echo "<br>결과 : ".$rs."<br><br>";
      #결과 : my Youtube Channel


      echo "Str::of('This is my name')->before('my');";
      $rs = Str::of('This is my name')->before('my');
      echo "<br>결과 : ".$rs."<br><br>";
      #결과 : This is

      //마지막 번호 출력
      echo "Str::of('010-1234-5678')->afterLast('-');";
      $rs = Str::of('010-1234-5678')->afterLast('-');
      echo "<br>결과 : ".$rs."<br><br>";
      #결과 : 5678

      //이미지나 파일의 마지막 확장자를 출력하고 싶을 때
      echo "Str::of('aaa.tt.jpg')->afterLast('.');";
      $rs = Str::of('aaa.tt.jpg')->afterLast('.');
      echo "<br>결과 : ".$rs."<br><br>";
      #결과 : jpg


      echo "Str::of('Laravel 9.0')->replace('9.0', '10.0');";
      $rs = Str::of('Laravel 9.0')->replace('9.0', '10.0');
      echo "<br>결과 : ".$rs."<br><br>";
      

      echo "Str::of('Laravel 10 Framework')->slug();";
      $rs = Str::of('Laravel 10 Framework')->slug();
      echo "<br>결과 : ".$rs."<br><br>";
      #결과 : laravel-10-framework

      echo "Str::of('a')->repeat(20);";
      $rs = Str::of('a')->repeat(20);
      $rs = Str::repeat('a',20);
      echo "<br>결과 : ".$rs."<br><br>";
      #결과 : aaaaaaaaaaaaaaaaaaaa


      echo "Str::random(20);";
      $rs = Str::random(20);
      echo "<br>결과 : ".$rs."<br><br>";
      #결과 : akJsuqiQrqqdurLz6joo

      echo "Str::remove('e', 'Peter Piper picked a peck of pickled peppers');";
      $rs = Str::remove('e', 'Peter Piper picked a peck of pickled peppers');
      echo "<br>결과 : ".$rs."<br><br>";
      #결과 : Ptr Pipr pickd a pck of pickld ppprs


      echo "Str::of('Peter Piper picked a peck of pickled peppers')->remove('e');";
      $rs = Str::of('Peter Piper picked a peck of pickled peppers')->remove('e');
      echo "<br>결과 : ".$rs."<br><br>";
      #결과 : Ptr Pipr pickd a pck of pickld ppprs  


      // containsAll은 둘다 있을 때에만 1을 리턴한다 아니면 아무값도 리턴하지 않는다.
      echo "Str::of('This is my name')->containsAll(['my','name']);";
      $rs = Str::of('This is my name')->containsAll(['my','name']);
      echo "<br>결과 : ".$rs."<br><br>";
      #결과 : 1


      echo "Str::of('Hello ')->append('World!');";
      $rs = Str::of('Hello ')->append('World!');
      echo "<br>결과 : ".$rs."<br><br>";
      #결과 : Hello World!




      #기타Helper
      #upper()
      #lower()
      #substr()
    }
}
