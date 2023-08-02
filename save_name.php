<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $water = $_POST["water"];
	
$hostname = "localhost"; // 호스트명 (기본값은 localhost)
$username = "root"; // 사용자 이름
$password = "1234"; // 비밀번호
$database = "dog"; // 데이터베이스 이름

// MariaDB와 연결
$conn = new mysqli($hostname, $username, $password, $database);

// 연결 확인
if ($conn->connect_error) {
    die("MariaDB 연결 실패: " . $conn->connect_error);
}
   
$sql = INSERT INTO dog_health(DATE, TIME ,wather) VALUES(CURRENT_DATE, CURRENT_TIME, water);
$result = $conn->query($sql);