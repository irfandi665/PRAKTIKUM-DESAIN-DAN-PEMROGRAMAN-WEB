 <?php 
       $umur = array("diki"=>"21", "irfandi"=>"22", "rosyid"=>"23");
       $prodi = array("diki"=>"Sistem Informasi", "Mr.X"=>"Tektel", "Panda"=>"Industri");

       foreach ($prodi as $x_nama => $x_prodi) {
           echo $x_nama . " dan " . $x_prodi;
           echo "<br>";
       }

?>