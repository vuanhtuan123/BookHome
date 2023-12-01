<?php
	class DangNhapModel{
		public function LayKetQuaDangNhap($tentk,$matKhau){
			$ketqua = false;
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "webbansacsh";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			$sql = "SELECT * from TaiKhoan";
			$result = $conn->query($sql);
			
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					if($tentk == $row['user'] && $matKhau == $row['pass']){
						$ketqua = true;
						session_start();
						$_SESSION['idTaiKhoan'] = $row['id'];
						$_SESSION['tentk'] = $row['user'];
						$_SESSION['role'] = $row['role'];
                        if($row['role'] == 1){
                            header("Location: admin/index.php");
                        }else{
                            header("Location: index.php");

                        }
						break;
					}
				}
			}
		}
	}
?>