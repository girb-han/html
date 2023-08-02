<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $water = $_POST["water"];
	
$hostname = "svc.sel4.cloudtype.app:30493"; // 호스트명 (기본값은 localhost)
$username = "root"; // 사용자 이름
$password = "1234"; // 비밀번호
$database = "dog"; // 데이터베이스 이름

// MariaDB와 연결
$conn = new mysqli($hostname, $username, $password, $database);

// 연결 확인
if ($conn->connect_error) {
    die("MariaDB 연결 실패: " . $conn->connect_error);
}
   
$sql = INSERT INTO dog_health(DATE, TIME ,$wather) VALUES(CURRENT_DATE, CURRENT_TIME, water);
$result = $conn->query($sql);
$conn = null;

function goBack() {
    // 이전 페이지로 리다이렉트
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

// 함수 호출로 이전 페이지로 이동
goBack();
	
?>
