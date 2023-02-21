<?php
class Person{
    public string $name;
    public int $age;
    public string $gender;

// __construct(name:string, age:int, gender:string)
// 名前、年齢、 性別を受け取ってプロパティを初期化する。
    public function __construct($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    // selfIntroduction(): string
    // 私の名前は〇〇です。年齢は〇〇歳です。性別は〇〇です。 という文字列を出力する。
    public function selfIntroduction(): string{
        return '私の名前は'. $this->name. 'です。年齢は'. $this->age. 'です。性別は'. $this->gender. 'です。';
    }
    // addAge(): void
    // 誕生日が来ました。 という文字列を出力し、年齢を＋１する。
    public function addAge(): void{
        echo '誕生日が来ました。';
        $this->age++;
    }
}

// クラスができたら適当なインスタンスを作成し、
// 自己紹介→年齢加算→自己紹介の順にメソッドを動かして年齢を確認してください。

$person = new Person('山田太郎', 30, '男');
echo $person->selfIntroduction();
echo '<br>';
echo $person->addAge();
echo '<br>';
echo $person->selfIntroduction();

?>