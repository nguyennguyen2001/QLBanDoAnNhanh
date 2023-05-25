<?php 
	trait MaterialModel{
		//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function fetchAll(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from tbl_material order by MaNL asc");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//tinh tong so luong ban ghi
		public function totalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select MaNL from tbl_material");
			//tra ve tong so luong ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function fetch($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from tbl_material where MaNL=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
			//tra ve tong so luong ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function update($id){
			
			$TenNL = $_POST["TenNL"];
			$MaKho = $_POST["MaKho"];
			$MaNCC = $_POST["MaNCC"];
			$product_id = $_POST["product_id"];
			$GiaTien = $_POST["GiaTien"];
			$NgayNhap = $_POST["NgayNhap"];
			$HanSuDung = $_POST["HanSuDung"];
			$TrangThai = $_POST["TrangThai"];
			//lay doi tuong ket noi
			$conn = Connection::getInstance();
			//update ban ghi
			$query = $conn->prepare("update tbl_material set TenNL=:TenNL, MaKho=:MaKho ,MaNCC=:MaNCC,product_id=:product_id,GiaTien=:GiaTien,NgayNhap=:NgayNhap,HanSuDung=:HanSuDung,TrangThai=:TrangThai where MaNL=:id");
			$query->execute(array("TenNL"=>$TenNL,"MaKho"=>$MaKho,"MaNCC"=>$MaNCC,"product_id"=>$product_id,"GiaTien"=>$GiaTien,"NgayNhap"=>$NgayNhap,"HanSuDung"=>$HanSuDung,"TrangThai"=>$TrangThai,"id"=>$id));
			
		}
		//insert ban ghi
		public function insert(){
			//lay doi tuong ket noi
			$conn = Connection::getInstance();
			$TenNL = $_POST["TenNL"];
			$MaKho = $_POST["MaKho"];
			$MaNCC = $_POST["MaNCC"];
			$product_id = $_POST["product_id"];
			$GiaTien = $_POST["GiaTien"];
			$NgayNhap = $_POST["NgayNhap"];
			$HanSuDung = $_POST["HanSuDung"];	
			$TrangThai = $_POST["TrangThai"];
			//lay doi tuong ket noi
			$conn = Connection::getInstance();
			//update ban ghi
			$query = $conn->prepare("insert into tbl_material set  TenNL=:TenNL, MaKho=:MaKho ,MaNCC=:MaNCC,product_id=:product_id,GiaTien=:GiaTien,NgayNhap=:NgayNhap,HanSuDung=:HanSuDung,TrangThai=:TrangThai");
			$query->execute(array("TenNL"=>$TenNL,"MaKho"=>$MaKho,"MaNCC"=>$MaNCC,"product_id"=>$product_id,"GiaTien"=>$GiaTien,"NgayNhap"=>$NgayNhap,"HanSuDung"=>$HanSuDung,"TrangThai"=>$TrangThai));		
		}
		//delete
		public function deleteMaterial($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("delete from tbl_material where MaNL=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
		//lay danh muc 
		public function getMaKho($MaKho){
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select TenKho from tbl_storage where MaKho=$MaKho");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		//lay danh muc 
		public function getMaNCC($MaNCC){
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select TenNCC from tbl_supplier where MaNCC=$MaNCC");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function priceTotal(){
		    $total = 0;
		    foreach($_SESSION['material'] as $material){
		        $total += $material['price'];
		    }
		    return $total;
		}
	}
 ?>