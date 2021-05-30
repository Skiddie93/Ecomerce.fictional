<?php



  $connect = new mysqli('localhost','root','','test');

  if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }

  $sql = "SELECT COUNT(ID) AS total FROM items";
$result = $connect->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page);

  for ($i=1; $i<=$total_pages; $i++) {
    if ($i==$page) {
      echo "<a class='clickedpage' href='index.php?page=".$i."'>".$i."</a> ";
    }else{
    echo "<a class='pagesrest' href='index.php?page=".$i."'>".$i."</a> ";
  };
};

 ?>
