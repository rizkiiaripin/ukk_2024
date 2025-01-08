<?php
require_once 'koneksi2.php';

class Buku extends db{
    public function tampilbuku(){
        $result =mysqli_query($this->konek,"SELECT * FROM tbl_buku");
        while ($row=mysqli_fetch_assoc($result)) {
            $data[] = $row;

        }
        return $data;
    }
    public function tampilBukuSingle($id){
        $result =mysqli_query($this->konek,"SELECT * FROM view_buku where id_buku = '$id' ");
        while ($row=mysqli_fetch_assoc($result)) {
            $data[] = $row;

        }
        return $data;
    }
    public function tampilbukuRandom(){
        $result =mysqli_query($this->konek,"SELECT * FROM tbl_buku order by rand() limit 3");
        while ($row=mysqli_fetch_assoc($result)) {
            $data[] = $row;

        }
        return $data;
    }
    public function tampilbukuKategori($id){
        $result =mysqli_query($this->konek,"SELECT * FROM tbl_buku where id_kategori = '$id'");
        while ($row=mysqli_fetch_assoc($result)) {
            $data[] = $row;

        }
        return $data;
    }

    public function hapusBuku($id){
        $result =mysqli_query($this->konek,"DELETE  FROM tbl_buku where id_buku = '$id'");
    }
    public function inputBuku($id,$judul,$thn,$jml,$isbn,$ktg,$pengarang,$penerbit,$photo,$des,$harga,$lokasi){
        $sql = mysqli_query($this->konek,"INSERT INTO tbl_buku VALUES ('$id','$judul','$thn','$jml','$isbn','$ktg','$pengarang','$penerbit','$photo','$des','$harga','$lokasi')");
    }

    public function updateBuku($id,$judul,$thn,$jml,$isbn,$ktg,$pengarang,$penerbit,$photo,$des,$harga,$lokasi){

        $sql = mysqli_query($this->konek,"UPDATE tbl_buku SET 
        judul='$judul',thn_terbit='$thn',jumlah='$jml',isbn='$isbn',id_kategori='$ktg'
        ,pengarang='$pengarang',id_penerbit='$penerbit',foto_sampul='$photo'
        ,deskripsi='$des',harga_beli='$harga',lokasi='$lokasi' where id_buku='$id'");
     
    }
    public function totalBuku(){
       
        $result =mysqli_query($this->konek,"SELECT COUNT(*) as jumlah FROM tbl_anggota");
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
}
    public function cari($cari){
        $result =mysqli_query($this->konek,"SELECT * FROM tbl_buku where judul like '%$cari%'");
        while ($row=mysqli_fetch_assoc($result)) {
            $data[] = $row;

        }
        if (isset($data)) {
            return $data;
        }
       
        
    }

}
class Anggota extends db{
    public function tampilanggota(){
        $result =mysqli_query($this->konek,"SELECT * FROM tbl_anggota");
        while ($row=mysqli_fetch_assoc($result)) {
            $data[] = $row;

        }
        return $data;
    }
    public function tampilAnggotaSingle($id){
        $result =mysqli_query($this->konek,"SELECT * FROM  tbl_anggota where id_anggota = '$id'");
        while ($row=mysqli_fetch_assoc($result)) {
            $data[] = $row;

        }
        return $data;
    }

    public function inputAnggota($id,$user,$status,$pass,$nama,$gender,$alamat,$telepon){
        $sql = mysqli_query($this->konek,"INSERT INTO tbl_anggota VALUES ('$id',
                '$user','$status','$pass','$nama','$gender','$alamat','$telepon')");
    }
    public function inputAnggotaRegister($id,$user,$status,$pass,$nama,$gender,$alamat,$telepon){
        $result = mysqli_query($this->konek,"SELECT username FROM tbl_anggota where username='$user'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>
                alert('username sudah tersedia')
                window.location.href = 'form_pendaftaran.php';
                
                </script>";
            return false;
        }
        $sql = mysqli_query($this->konek,"INSERT INTO tbl_anggota VALUES ('$id',
                '$user','$status','$pass','$nama','$gender','$alamat','$telepon')");
        echo "<script>
        alert('silahkan Login')
        window.location.href = 'login.php';
                
        </script>";
    }
    public function idOtomatis(){
        $sql = mysqli_query($this->konek,"SELECT max(id_anggota) as idTerbesar from tbl_anggota");
        $dtanggota=mysqli_fetch_array($sql);
        $noID=$dtanggota['idTerbesar'];
        $urutan=(int)substr($noID,3,3);
        $urutan++;
        $huruf = "AG";
        $noID=$huruf.sprintf("%03s",$urutan);
        return $noID;

    }
    public function tampilAnggotaLogin($_user,$_pass){
       
        $result =mysqli_query($this->konek,"SELECT *  FROM tbl_anggota where username='$_user' and password='$_pass'");
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        
        
        }return $rows;
    }
    public function cekLogin($_user,$_pass){
       
        $result =mysqli_query($this->konek,"SELECT COUNT(*) as jumlah FROM tbl_anggota where username='$_user' and password='$_pass'");
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        
        
        }return $rows;
    }
    public function editAnggota($id,$user,$status,$pass,$nama,$gender,$alamat,$telepon){
        $sql = mysqli_query($this->konek,"UPDATE tbl_anggota SET username = '$user',status = '$status',nm_anggota='$nama',jk='$gender',alamat_anggota ='$alamat',telp_anggota = '$telepon' where id_anggota='$id'");
    }
    public function hapusAnggota($id){
        $sql = mysqli_query($this->konek,"DELETE FROM tbl_anggota where id_anggota ='$id'");
    }
    public function totalanggota(){
       
        $result =mysqli_query($this->konek,"SELECT COUNT(*) as jumlah FROM tbl_anggota");
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;

   
}
    
}

class Kategori extends db{
    public function tampilkategori(){
        $result =mysqli_query($this->konek,"SELECT * FROM tbl_kategori");
        while ($row=mysqli_fetch_assoc($result)) {
            $data[] = $row;

        }
        return $data;
    }
    public function totalKategori(){
       
        $result =mysqli_query($this->konek,"SELECT COUNT(*) as jumlah FROM tbl_kategori");
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;

   
}
public function inputKategori($id,$nama){
    $sql = mysqli_query($this->konek,"INSERT INTO tbl_kategori VALUES ('$id','$nama')");
}
public function hapusKategori($id){
    $sql = mysqli_query($this->konek,"DELETE FROM tbl_kategori where id_kategori ='$id'");
}
public function tampilKategoriSingle($id){
    $result =mysqli_query($this->konek,"SELECT * FROM  tbl_kategori where id_kategori = '$id'");
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;

    }
    return $data;
}
public function editkategori($id,$nama){
    $sql = mysqli_query($this->konek,"UPDATE tbl_kategori SET nm_kategori='$nama' where id_kategori='$id'");
}
}

class Penerbit extends db{
    public function tampilpenerbit(){
        $result =mysqli_query($this->konek,"SELECT * FROM tbl_penerbit");
        while ($row=mysqli_fetch_assoc($result)) {
            $data[] = $row;

        }
        return $data;
    }
    public function totalPenerbit(){
       
        $result =mysqli_query($this->konek,"SELECT COUNT(*) as jumlah FROM tbl_penerbit");
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
        
      
   
}
public function inputPenerbit($id,$nama,$alamat,$telepon){
    $sql = mysqli_query($this->konek,"INSERT INTO tbl_penerbit VALUES ('$id','$nama','$alamat','$telepon')");
}
public function hapusPenerbit($id){
    $sql = mysqli_query($this->konek,"DELETE FROM tbl_penerbit where id_penerbit ='$id'");
}
public function tampilPenerbitSingle($id){
    $result =mysqli_query($this->konek,"SELECT * FROM  tbl_penerbit where id_penerbit = '$id'");
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;

    }
    return $data;
}
public function editPenerbit($id,$nama,$alamat,$telepon){
    $sql = mysqli_query($this->konek,"UPDATE tbl_penerbit SET nm_penerbit='$nama', alamat_penerbit ='$alamat',telp_penerbit = '$telepon' where id_penerbit='$id'");
}
}
class Petugas extends db{
    public function tampilpetugas(){
        $result =mysqli_query($this->konek,"SELECT * FROM tbl_petugas");
        while ($row=mysqli_fetch_assoc($result)) {
            $data[] = $row;

        }
        return $data;
    }
    public function totalPetugas(){
       
        $result =mysqli_query($this->konek,"SELECT COUNT(*) as jumlah FROM tbl_petugas");
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        
        
        }return $rows;
    }
    public function tampilPetugasLogin($_user,$_pass){
       
        $result =mysqli_query($this->konek,"SELECT *  FROM tbl_petugas where username='$_user' and password='$_pass'");
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        
        
        }return $rows;
    }
    public function cekLogin($_user,$_pass){
       
        $result =mysqli_query($this->konek,"SELECT COUNT(*) as jumlah FROM tbl_petugas where username='$_user' and password='$_pass'");
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        
        
        }return $rows;
    }
        public function editPetugas($id,$user,$status,$pass,$nama,$gender,$telepon,$alamat){
            $sql = mysqli_query($this->konek,"UPDATE tbl_petugas SET username = '$user',status = '$status',nm_petugas='$nama',jk='$gender',telp_petugas = '$telepon',alamat_petugas ='$alamat' where id_petugas='$id'");
        }
        public function inputPetugas($id,$user,$status,$pass,$nama,$gender,$telepon,$alamat){
            $sql = mysqli_query($this->konek,"INSERT INTO tbl_petugas Values('$id','$user','$status','$pass','$nama','$gender','$telepon','$alamat')");
        }


        public function tampilPetugasSingle($id){
            $result =mysqli_query($this->konek,"SELECT * FROM  tbl_petugas where id_petugas = '$id'");
            while ($row=mysqli_fetch_assoc($result)) {
                $data[] = $row;
    
            }
            return $data;
        }
        public function hapusPetugas($id){
            $sql = mysqli_query($this->konek,"DELETE FROM tbl_petugas where id_petugas ='$id'");
        }
}

class Peminjaman extends db{
    public function totalPeminjaman(){
		$sql=mysqli_query($this->konek,"SELECT COUNT(*) AS jumlah FROM view_peminjaman");
		while($row=mysqli_fetch_array($sql)){
			$data[]=$row;
		}
		return $data;
	}
    public function tampilPeminjaman(){
		$sql=mysqli_query($this->konek,"SELECT * FROM view_peminjaman");
		while($row=mysqli_fetch_array($sql)){
			$data[]=$row;
		}
		return $data;
	}
    public function tampilPeminjamanDipinjam(){
		$sql=mysqli_query($this->konek,"SELECT * FROM view_peminjaman where status_peminjaman='Dipinjam'" );
		while($row=mysqli_fetch_array($sql)){
			$data[]=$row;
		}
		return $data;
	}

	public function tampilPeminjamanSingle($id){
		$sql=mysqli_query($this->konek,"SELECT * FROM view_peminjaman where id_pinjam='$id'");
		while($row=mysqli_fetch_array($sql)){
			$data[]=$row;
		}
		return $data;
	}

	public function tampilPeminjamanDetail($id){
		$sql=mysqli_query($this->konek,"SELECT * FROM view_detail_peminjaman where id_pinjam='$id'");
		while($row=mysqli_fetch_array($sql)){
			$data[]=$row;
		}
		return $data;
	}

	public function tampilPeminjamanDetailDiterima($id){
		$sql=mysqli_query($this->konek,"SELECT * FROM view_detail_peminjaman where id_pinjam='$id' and status='Diterima'");
		while($row=mysqli_fetch_array($sql)){
			$data[]=$row;
		}
		return $data;
	}

	public function editPeminjaman($id,$idbuku,$jml,$status,$alasan){
		$sql=mysqli_query($this->konek,"update tbl_detail_pinjam set jumlah='$jml', status='$status', alasan='$alasan' where id_pinjam='$id' and id_buku='$idbuku'");
	}

	public function editStatusPinjam($id,$status,$idptg){
		$sql=mysqli_query($this->konek,"update tbl_pinjam set status_peminjaman='$status', id_petugas='$idptg' where id_pinjam='$id'");
	}
    public function idOtomatis(){
        $sql = mysqli_query($this->konek,"SELECT max(id_pinjam) as idTerbesar from tbl_pinjam");
        $dtanggota=mysqli_fetch_array($sql);
        $noID=$dtanggota['idTerbesar'];
        $urutan=(int)substr($noID,3,3);
        $urutan++;
        $huruf = "PJ";
        $noID=$huruf.sprintf("%03s",$urutan);
        return $noID;

    }public function inputPeminjaman($idpinjam,$tgl_pinjam,$tgl_kembali,$status,$idanggota,$idpetugas){
		$sql=mysqli_query($this->konek,"INSERT INTO tbl_pinjam VALUES('$idpinjam','$tgl_pinjam',
        '$tgl_kembali','$status','$idanggota','$idpetugas')");
	}
    public function inputDetailPeminjaman($no,$idpinjam,$status2,$id_buku,$jumlah,$alasan){
		$sql=mysqli_query($this->konek,"INSERT INTO tbl_detail_pinjam VALUES('$no','$idpinjam','$id_buku',
        '$jumlah','$status2','$alasan')");
	}
    public function idOtomatisDetail(){
        $sql = mysqli_query($this->konek,"SELECT count(*) as idTerbesar from tbl_detail_pinjam");
        $dtanggota=mysqli_fetch_array($sql);
        $noID=$dtanggota['idTerbesar'];
        $huruf = "N";
        $noID=$huruf.sprintf("%03s",$noID);
        return $noID;

    }
}
class pengembalian extends db{
    public function tampilPengembalian(){
       
            $result =mysqli_query($this->konek,"SELECT COUNT(*) as jumlah FROM tbl_kembali");
            while( $row = mysqli_fetch_assoc($result)){
                $rows[] = $row;
            }
            return $rows;
    
       
    }
    public function inputPengembalian($id,$tglkbl,$denda,$idang,$idptg,$stskem){
		$sql=mysqli_query($this->konek,"insert into tbl_kembali values('$id','$tglkbl','$denda','$id','$idang','$idptg','$stskem')");
	}

	public function inputPengembalianDetail($id,$idbuku,$jml,$jmlkembali,$ket,$denbk){
		$sql=mysqli_query($this->konek,"insert into tbl_detail_kembali values('','$id','$idbuku','$jml','$jmlkembali','$ket','$denbk')");
	}
}
class datalogin extends db{
    public function login($user,$pass){
        $sql = mysqli_query($this->konek,"SELECT * FROM tbl_anggota WHERE username='$user' and password='$pass'");
        $row = mysqli_fetch_array($sql);
        $cari = mysqli_num_rows($sql);
        if ($cari > 0) {
            return $row['id_anggota'];
        }
        else{
            return false;
        }   
    }
    public function details($sql) 
    {
    $query = $this->konek->query($sql);
    $row = mysqli_fetch_array($query);
    return $row;
    }
    public function escape_string($value){
        return $this->konek->real_escape_string($value);
    }

}
class Laporan extends db{
	
	public function tampilLaporan($tglawal, $tglakhir){
		$sql=mysqli_query($this->konek,"SELECT * FROM view_peminjaman
WHERE tgl_pinjam BETWEEN '$tglawal' AND '$tglakhir'");
		while($row=mysqli_fetch_array($sql)){
			$data[]=$row;
		}
		return $data;
	}
}
class Kritik extends db{
    function inputPesan($nama,$pesan) {
        $sql = mysqli_query($this->konek,"INSERT INTO kritiksaran VALUES ('$nama','$pesan')");
        
    }
}

?>