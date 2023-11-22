<?php
	function LayIDGioHang($idTaiKhoan){
		$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "webbansach";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from giohang where idTaiKhoan = ".$idTaiKhoan;
		$result = $conn->query($sql);
	
		$giohang = array();
	
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$giohang[] = $row;
			}
		}
		return $giohang[0]['idGioHang'];
	}
	
	function LayThongTinGioHang($idGioHang){
		$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "webbansach";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "SELECT * FROM chitietgiohang inner join sanpham on chitietgiohang.idSanPham = sanpham.id where idGioHang = ".$idGioHang;
		$result = $conn->query($sql);
	
		$giohang = array();
	
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$giohang[] = $row;
			}
		}
		return $giohang;
	}
	
	function LayThongTinHoaDon($idHoaDon){
		$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "webbansach";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "SELECT * FROM chitiethoadon inner join sanpham on chitiethoadon.idSanPham = sanpham.id where idHoaDon = ".$idHoaDon;
		$result = $conn->query($sql);
	
		$hoadon = array();
	
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$hoadon[] = $row;
			}
		}
		return $hoadon;
	}
	
	function ThanhToanGioHang($idGioHang, $idTaiKhoan){
		$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "webbansach";
			
		$giohang = LayThongTinGioHang($idGioHang);
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$sql = "insert into hoadon(idTaiKhoan) values(".$idTaiKhoan.")";
		$conn->query($sql);
		
		$idHoaDon = $conn->insert_id;	
			
		foreach($giohang as $gh){
			$sql = "insert into chitiethoadon(idHoaDon,idSanPham,SLSanPham) values(".$idHoaDon.",".$gh['idSanPham'].",".$gh['SLSanPham'].")";
			$conn->query($sql);
		}
		
		$sql = "delete FROM chitietgiohang where idGioHang = ".$idGioHang;
		$result = $conn->query($sql);
		header("Location: muathanhcong.php?idHoaDon=".$idHoaDon);
	}
?>