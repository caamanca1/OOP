<?php
class Visibility{
	public $public = 'public';
	protected $protected = 'protected';
	private $private = 'private';
	function CetakProperti(){
		echo "Akses dari dalam class <br>";
		echo "Public : ".$this->public."<br>";
		echo "Protected : ".$this->protected."<br>";
		echo "Private : ".$this->private."<br>";
	}
}

$obj = new Visibility();
$obj->CetakProperti();
echo "<br> Pengaksesan dari luar class <br>";
echo "Public : ".$obj->public."<br>"; // OK
echo "Protected : ".$obj->protected."<br>"; // ERROR
echo "Private : ".$obj->private."<br>"; // ERROR

?>

<?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR
?>