<!-- by Maharani Triza Putri - 121140071  -->
<!-- Praktikum Pemrograman Web RB - Tugas 7 -->

<?php

class Mahasiswa{
    public $nama;
    public $nim;
    public $prodi;

    public function __construct($nama, $nim, $prodi){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function dataMhs(){
        echo "Nama    : ".$this->nama."<br>";
        echo "NIM     : ".$this->nim."<br>";
        echo "Prodi   : ".$this->prodi."<br><br>";
    }
}

$Maharani = new Mahasiswa("Maharani Triza Putri","121140071","Teknik Informatika");
$Maharani->dataMhs();

class Presma extends Mahasiswa{
    public $status;
    public $angkatan;

    public function __construct($nama, $nim, $prodi, $status, $angkatan) {
        parent::__construct($nama, $nim, $prodi);
        $this->status = $status;
        $this->angkatan = $angkatan;
    }

    public function infoPresma() {
        echo "Nama     : ".$this->nama."<br>";
        echo "NIM      : ".$this->nim."<br>";
        echo "Prodi    : ".$this->prodi."<br>";
        echo "Status   : ".$this->status."<br>";
        echo "Angkatan : ".$this->angkatan."<br><br>";
    }
}

$presmaBaru = new Presma("Henry", "12114001", "Teknik Informatika", "Mahasiswa", 2021);
$presmaBaru->infoPresma();

class akunMaharani{
    public $username;
    private $password;
    public function __construct($username, $password) {
        $this->username = $username;
        $this->setPw($password);
    }

    public function setPw($password) {
        if(is_string($password) && strlen($password) > 0) {
            $this->password = $password;
        }else{
            throw new InvalidArgumentException("Password anda salah!");
        }
    }

    public function get_Pw() {
        return "Username :".$this->username."<br> Password: ".$this->password."<br>";
    }
}

try{ 
    $Akunsaya = new akunMaharani("MaharaniTriza", "-");

    $Akunsaya->setPw("teknikinformatika");

    echo $Akunsaya->get_Pw();
}catch(InvalidArgumentException $e){ 
    echo "Error!!! ".$e->getMessage()."<br>";
}

$html = '<p>Nama saya <span style="color:red;">Maharani</span> dengan NIM <span style="color:blue;">121140087</span></p>';

$regex = '/<span style="color:\s*([^"]+)">/';

$warna = 'blue';

$newHtml = preg_replace($regex, '<span style="color: '.$warna. ';">', $html);
echo $newHtml;
?>
