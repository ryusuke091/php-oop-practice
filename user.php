<?php
class User
{
  public string $name;
  public int $age;

  public function __construct(string $name, int $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function introduce(): string
  {
    return "こんにちは、私は{$this->name}です。{$this->age}歳です。<br/>";
  }

  public function isAdult(): bool
  {
    return $this->age >= 18;
  }
}


$users = [
  ['name' => '田中太郎', 'age' => 25],
  ['name' => '佐藤花子', 'age' => 17],
  ['name' => '鈴木一郎', 'age' => 30],
];


echo "<h1>ユーザー管理プログラム</h1>";

echo "<h2>自己紹介</h2>";
foreach ($users as $user) {
  $u = new User($user['name'], $user['age']);
  echo $u->introduce();
}

echo "<h2>成人判定</h2>";
foreach ($users as $user) {
  $u = new User($user["name"], $user["age"]);
  if ($u->isAdult())
    echo "{$user['name']}さんは成人です。<br/>";
  else
    echo "{$user['name']}さんは未成年です。<br/>";
}