<?php
class mahasiswa {
    var $nim;
    var $nama;
    var $thn_angkatan;
    var $prodi;
    var $ipk;
    function __construct ($nim, $nama, $prodi, $thn_angkatan, $ipk ) {
        $this->nim = $nim ;
        $this->nama = $nama;
        $this->prod = $prodi;
        $this->ta = $thn_angkatan;
        $this->ipk = $ipk;
    }
    
    function predikat_ipk (){
        if ($this->ipk < 2.0 ) return "Cukup";
        elseif ($this->ipk >= 2.0 && $this->ipk < 3.0)
            return "Baik";
        elseif ($this->ipk >= 3.0 && $this->ipk < 3.75)
            return "Memuaskan";
        elseif ($this->ipk >= 3.75 && $this->ipk <= 4 )
            return "Cum Laude";
    }
    
}


?>