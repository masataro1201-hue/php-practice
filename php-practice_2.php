<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 === 0 && $i % 4 === 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 === 0) {
        echo "tic\n";
    } elseif ($i % 5 === 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
//問題1
echo 'Bさんの電話番号' . $personalInfos[1]['tel'] . 'はです。';

//問題2

foreach ($personalInfos as $index => $information) {
    echo ($index + 1) . '番目の' . $information['name'] . 'のメールアドレスは' . $information['mail'] . 'で、電話番号は' . $information['tel'] . "です。\n";
}

//問題3
$ageList = [25, 30, 18];
$count = 0;

foreach ($ageList as $age) {
    $personalInfos[$count]['age'] = $age;
    $count++;
}

var_dump($personalInfos);

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$gakusei = new Student(120, '山田');
echo '学籍番号' . $gakusei->studentId . '番の生徒は' . $gakusei->studentName . 'です。';

// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($language)
    {
        if ($this->studentId > 0) {

            echo $this->studentName . 'は' . $language . 'の授業に参加しました。学籍番号：' . $this->studentId;
        }
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1

$time = new DateTime();
echo $time->format('Y-m-d');

//問題2

$today = new DateTime();
$time = new DateTime('1992-4-25');

$diffDay = $today->diff($time);
echo 'あの日から' . $diffDay->days . '日経過しました。';
