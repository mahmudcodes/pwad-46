<?php 
	class Book{
		private $title;
		private $isbn;
		private $copies;
		function __construct($isbn, $title, $copies){
			$this->setIsbn($isbn);
			$this->title = $title;
			$this->copies = $copies;
		}
		public function setIsbn($isbn){
			$this->isbn = $isbn;
		}
		public function bookInfo(){
			echo "Book name: " . $this->title . "<br>ISBN: " . $this->isbn . "<br>Number of copy: " . $this->copies;
		}
	}
	$book = new Book("21547896589365", "PHP Begainers", "300");
	//$book->title = "PHP Begainers";
	//$book->isbn = 21547896589365;
	//$book->copies = 300;
	$book->bookInfo();
?>