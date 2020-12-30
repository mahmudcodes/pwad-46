<?php 
interface Persistable {
  public function save();
  public function load();
  public function delete();
}
?>


<?php
class Member implements Persistable {
  private $username;
  private $location;
  private $homepage;
  public function __construct( $username, $location, $homepage ) {
    $this->username = $username;
    $this->location = $location;
    $this->homepage = $homepage;
  }
  public function getUsername() {
    return $this->username;
  }
  public function getLocation() {
    return $this->location;
  }
  public function getHomepage() {
    return $this->homepage;
  }
  public function save() {
    echo "Saving member to database<br>";
  }
  public function load() {
    echo "Loading member from database<br>";
  }
  public function delete () {
    echo "Deleting member from database<br>";
  }
}
?>

 <?php
class Topic implements Persistable {
  private $subject;
  private $author;
  private $createdTime;
  public function __construct( $subject, $author ) {
    $this->subject = $subject;
    $this->author = $author;
    $this->createdTime = time();
  }
  public function showHeader() {
    $createdTimeString = date( 'l jS M Y h:i:s A', $this->createdTime );
    $authorName = $this->author->getUsername();
    echo "$this->subject (created on $createdTimeString by $authorName)<br>";
  }
  public function save() {
    echo "Saving topic to database<br>";
  }
  public function load() {
    echo "Loading topic from database<br>";
  }
  public function delete () {
    echo "Deleting topic from database<br>";
  }
}
?>

<?php
$aMember = new Member("shakil","paltan","google.com");
echo $aMember->getUsername()." lives in ".$aMember->getLocation().".<br>";
$aMember->save();
$aTopic = new Topic( "Futonto Golap", $aMember );
$aTopic->showHeader();
$aTopic->save();
?>