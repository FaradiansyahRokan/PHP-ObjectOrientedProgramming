<?php

class finalClass{
    final public function finalMethod(){
        return "Final";
    }
}

// jika kode di bawah Di jalankan Maka Akan Terjadi Error Karena FinalMethod Tidak Dapat Di override;

// class child extends finalClass{
//     public function finalMethod(){

//     }
// }