<?php 
	class Penjualan {
		private $IdPenjualan;
		private $JumlahPenjualan;
		private $HargaJual;
        private $IdPengguna;
        private $IdBarang;
        private $IdPelanggan;

		private $conn;

		public function __construct(\PDO $database) {
			$this->conn = $database;
		}

        function setIdPenjualan($IdPenjualan) {
			$this->IdPenjualan = $IdPenjualan;
		}

        
		function setJumlahPenjualan($JumlahPenjualan) {
			$this->JumlahPenjualan = $JumlahPenjualan;
		}

        
		function setHargaJual($HargaJual) {
			$this->HargaJual = $HargaJual;
		}

		function setIdPengguna($IdPengguna) {
			$this->IdPengguna = $IdPengguna;
		}

        
		function setIdBarang($IdBarang) {
			$this->IdBarang = $IdBarang;
		}

		function setIdPelanggan($IdPelanggan) {
			$this->IdPelanggan = $IdPelanggan;
		}
		
		
		function getIdPenjualan() {
			return $IdPenjualan;
		}

		function getJumlahPenjualan() {
			return $JumlahPenjualan;
		}

		function getHargaJual() {
			return $HargaJual;
		}

        function getIdPengguna() {
			return $IdPengguna;
		}

        function getIdBarang() {
			return $IdBarang;
		}

        function getIdPelanggan() {
			return $IdPelanggan;
		}

		function totalHargaJual() {
			try {
				$conn = mysqli_connect("localhost", "root", "", "maju_jaya");
				$query = "SELECT SUM(harga_jual * jumlah_penjualan) as total_harga_jual FROM penjualan";
				$result = mysqli_query($conn, $query);
				$row = mysqli_fetch_assoc($result);

				return $row['total_harga_jual'];

				mysqli_close($conn);

			} catch (Exception $e) {
				throw $e;
			}
					
		  }

		  function penjualanList() {
			try {
				$query = "SELECT * FROM penjualan ORDER BY id_penjualan ASC";
				$prepareDB = $this->conn->prepare($query);
				$prepareDB->execute();
				$penjualanList = $prepareDB->fetchAll();
	
				return $penjualanList;
			} catch (Exception $e) {
				throw $e;
			}
		}
		function addPenjualan() {
			try {
				$query = "INSERT INTO penjualan(`id_penjualan`, `harga_jual`, `jumlah_penjualan`, id_pengguna, id_barang) VALUES (?, ?, ?, ?)";
				$prepareDB = $this->conn->prepare($query);
				$sqlAddPenjualan = $prepareDB->execute([$this->IdPenjualan, $this->HargaJual, $this->JumlahPenjualan, $this->IdPengguna, $this->IdBarang]);
	
				return $sqlAddPenjualan;
			} catch (Exception $e) {
				throw $e;
			}
		}
	}
?>