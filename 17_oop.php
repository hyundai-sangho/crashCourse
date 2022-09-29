<?php

// PHP 5부터 절차적 또는 객체지향 방식으로 PHP를 쓸 수 있습니다.
// OOP는 "속성" 및 "메소드"를 유지할 수 있는 클래스로 구성됩니다.
// 객체는 수업에서 만들 수 있습니다.

class User
{
  // 속성은 클래스에 속하는 속성입니다.

  // 접근 권한: public, private, protected
  // public - 어디서나 액세스 할 수 있습니다.
  // private - 해당 클래스 내부에서만 액세스 할 수 있습니다.
  // protected - 클래스 내부와 상속받은 클래스에서만 액세스 할 수 있습니다.
  public $name;
  public $email;
  public $password;

  // 생성자는 객체가 생성될 때 실행되는 메소드입니다.
  public function __construct($name = '조상호', $email = 'cho@naver.com', $password = 'password')
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    echo '<br>';
    // echo $this->name . " " . $this->email . " " . $this->password;
  }


  // 메소드는 클래스에 속하는 함수입니다.
  function set_name($name)
  {
    $this->name = $name;
  }

  function get_name()
  {
    return $this->name;
  }
}

// 사용자 객체를 인스턴스화 하십시오.
// $user1 = new User();
// $user2 = new User();

// $user1->name = '조상호';
// var_dump($user1);

// $user1->set_name('이민재');
// $user2->set_name('김동수');
// echo $user1->name;
// echo '<br>';
// echo $user2->name;

// echo $user1->get_name();
// echo '<br>';
// echo $user2->get_name();

// 사용자 객체를 인스턴스화하십시오.
$user1 = new User('이민재', 'lee@naver.com', 'leepassword');
$user2 = new User('지성현', 'jee@naver.com', 'jeeword');

// echo $user1->email;
// echo $user2->name;

// 계승
class Employee extends User
{
  private $title;
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title()
  {
    return $this->title;
  }
}

$cho = new Employee('김원준', 'kwj@naver.com', 'pass', '매니저');
echo $cho->get_title();