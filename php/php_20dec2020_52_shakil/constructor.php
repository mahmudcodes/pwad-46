<?

class employee
{
	protected $name;
	protected $title;

	function __construct() {
		echo "I am a constructor";
	}
}

new employee;//constructor dont need to call...
?>