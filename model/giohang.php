<?php
	function LayIDGioHang($idTaiKhoan){
		$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "webbansacsh";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "select * from carts where idTaiKhoan = ".$idTaiKhoan;
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
			$dbname = "webbansacsh";

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
			$dbname = "webbansacsh";

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
			$dbname = "webbansacsh";
			
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
    function getCart($idUser){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webbansacsh";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT carts.id AS cart_id,sanpham.name,sanpham.img,carts.quantity,sanpham.price
FROM carts
JOIN sanpham ON carts.product_id = sanpham.id
WHERE carts.user_id =  $idUser and carts.status = 0";
        $result = $conn->query($sql);
        return $result;

    }
    function updateCart($action,$id){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webbansacsh";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($action == 'decrement'){
            $sql = "SELECT quantity FROM carts WHERE id = $id";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $quantity = $row['quantity'];

                if ($quantity <= 0) {
                    $deleteSql = "DELETE FROM carts WHERE id = $id";
                    $conn->query($deleteSql);
                }else{
                    $update = "UPDATE carts SET quantity = quantity - 1 WHERE id = $id";
                    $conn->query($update);
                }
            }

        }
        if($action == 'increment'){
            $sql = "UPDATE carts SET quantity = quantity + 1 WHERE id = $id";
            $conn->query($sql);
        }
    }
    function checkOut($userId){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webbansacsh";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT MAX(order_id) FROM order_items";
        $result =  $conn->query($sql);
            $row = $result->fetch_assoc();
            $maxOrderId = $row['MAX(order_id)'];
            $maxOrderId ? $maxOrderId : 0;
            $sql = "select * from carts where user_id = $userId";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                $product_id = $row['product_id'];
                $quantity = $row['quantity'];

                $sql = "INSERT INTO order_items (order_id, user_id, product_id, quantity,date) VALUES ($maxOrderId +1 , $userId, $product_id, $quantity,NOW())";
                if ($conn->query($sql) !== TRUE) {
                    echo "Lỗi khi thêm dữ liệu: " . $conn->error;
                    die;
                }
                $sql = "DELETE FROM carts WHERE user_id = $userId";
                if ($conn->query($sql) !== TRUE) {
                    echo "Lỗi khi thêm dữ liệu: " . $conn->error;
                    die;
                }
            }
    }
    function getTotalCart($id){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webbansacsh";

        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT oi.user_id, SUM(oi.quantity * sp.price) AS total_amount FROM carts oi JOIN sanpham sp ON oi.product_id = sp.id where user_id = $id and oi.status = 0;";
        $result =  $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            return  $row['total_amount'];
        }
    }
    function deleteCart($id){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webbansacsh";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "DELETE FROM carts WHERE id = $id;";
        $conn->query($sql);
    }
    function checkouCod($id,$name,$address,$phone){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webbansacsh";

        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "UPDATE carts
SET name = '$name', address = '$address', phone = '$phone',status = 1
WHERE user_id = $id and status = 0";
        $conn->query($sql);
        echo  "<h1>Thanh toan thanh cong</h1>";
        echo "<a href='index.php' style='font-size: 3rem'>Tro ve trang chu</a>";
    }
    function checkOutOnline($userId,$name,$address,$phone){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webbansacsh";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT MAX(order_id) FROM order_items";
        $result =  $conn->query($sql);
        $row = $result->fetch_assoc();
        $maxOrderId = $row['MAX(order_id)'];
        $maxOrderId ? $maxOrderId : 0;
        $sql = "select * from carts where user_id = $userId and status = 0";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $product_id = $row['product_id'];
            $quantity = $row['quantity'];

            $sql = "INSERT INTO order_items (order_id, user_id, product_id, quantity, date, name, address, phone) 
        VALUES (" . ($maxOrderId + 1) . ", $userId, $product_id, $quantity, NOW(), '$name', '$address', '$phone')";
            if ($conn->query($sql) !== TRUE) {
                echo "Lỗi khi thêm dữ liệu: " . $conn->error;
                die;
            }
            $sql = "DELETE FROM carts WHERE user_id = $userId and status = 0";
            if ($conn->query($sql) !== TRUE) {
                echo "Lỗi khi thêm dữ liệu: " . $conn->error;
                die;
            }
        }
        echo  "<h1>Thanh toan thanh cong</h1>";
        echo "<a href='index.php' style='font-size: 3rem'>Tro ve trang chu</a>";
    }
?>