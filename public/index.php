<?php
/*
function a() {
	$b = 0;
	echo $b;
	$b++;
}

a();
a();

// результат 00
//чтобы сделать переменную неубиаемой и не происходило ее обнуление добавляем static

function a() {
	static $b = 0;
	echo $b;
	$b++;
}

a();
a();
a();
//результат 012


////// статические переменные и статические функции внутри класса

class A1 {
	public static $count = 0;
	public $number = 0;
}

//для того чтобы получить доступ к статической переменной пользуемся так же как иконстантой двумя двоеточиями:

A1::$count = 100;

echo A1::$count;

/// $number вывести не можем, пока не создадим объект класса

$a1 = new A1();
$a1->number = 50;

echo "<br>";
echo $a1->number;


//вывод статической переменной у объета
echo "<br>";
echo $a1::$count;

// если поменяем ее то она изменится и если так вызвать

$a1::$count = 200;
echo "<br>";
echo A1::$count;


/////////статические функции
class A1 {
	public static $count = 0;
	public $number = 0;
	public static function getCount(){
		return self::$count;
	}
}

*/


////////////магические функции

/// когда начинаем собирать объект используем маг функцию конструктор она важна
/// все магические методы  https://www.php.net/manual/ru/language.oop5.magic.php
//магичекие методы срабатывают независимо от того вызываем их на прямую или нет
/*class File
{
	private $path;
	public function __construct(string $path)
	{
		$this->path = $path;
	}

	public function __destruct()
	{
		echo __CLASS__ . 'destruct <br>';
	}
	public function __set($name, $value)
	{
		echo "Called Method set [$name]";
		print_r [$value];
	}
	public function __get($name)
	{
		echo "Called Method get [$name]";
	}
}
 //$file = new File();//в данном случае прямого вызова функции нет но она срабатывает при создании объекта

 class TextFile extends File
 {
 	public function __construct(string $path, string $autor)
	{
		parent::__construct($path);
	}

	public function __destruct()
	{
		echo __CLASS__ . 'destruct <br>';
	}
 }


$file = new File('/app/test.txt');

echo '<br> first obgect';
print_r($file);

echo '<br> second obgect';
$txtfile = new TextFile('/app/text.txt', 'Pushkin');

echo '<br>';
print_r($txtfile);

echo '<br> destroy <br>';

unset($file);
unset($txtfile);

$file = new File('/app/file');

$file->abs = 10;
echo $file->xyz;
*/

///////////приведение типов меняет скалярное значение переменных

/*
$num = 50;

//echo gettype((string)$num);

var_dump($num);
var_dump((string)$num);
var_dump((array)$num);
*/
///пример потери данных
$string = 'hello123';

var_dump((int)$string);
