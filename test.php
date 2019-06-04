<h3>program untuk mencari huruf yang pertama duplikat</h3>
<p>Masukkan Huruf : </p>
<form action="" method="post" method="POST">
    <input type="text" name="huruf">
    <input type="submit">
</form>
<p>
    <?php
    if(isset($_POST['huruf'])){
        $huruf = $_POST['huruf'];
        $tmp_huruf = str_split($huruf);
        $nilai = "Tidak ada yang sama";
        $stop = 0;
        for($a=0; $a<strlen($huruf); $a++){
            for($b=$a+1; $b<strlen($huruf); $b++){
               if ($tmp_huruf[$a]==$tmp_huruf[$b] || $tmp_huruf[$b] == $tmp_huruf[$b-1] ){
                   $nilai = $tmp_huruf[$b];
                   $stop = 1;
                   break;
               }
            }
            if($stop==1){
                break;
            }
        }
        echo $nilai; 
    }
    ?>
</p>
<h3>program buble sort tanpa menggunakan temporary variable</h3>
<p>Masukkan angka (Pemisah pakai spasi) : </p>
<form action="" method="post" method="POST">
    <input type="text" name="angka">
    <input type="submit">
</form>
<p>
    <?php 
    if(isset($_POST['angka'])){
        $angka = $_POST['angka'];
        $tmp_angka = explode(' ',$angka);
        for($a=0; $a<count($tmp_angka); $a++){
            for($b=0; $b<count($tmp_angka)-1; $b++){
                if($tmp_angka[$b]>$tmp_angka[$b+1]){
                    $tmp_angka[$b]=$tmp_angka[$b] + $tmp_angka[$b+1] ;
                    $tmp_angka[$b+1]=$tmp_angka[$b] - $tmp_angka[$b+1];
                    $tmp_angka[$b]=$tmp_angka[$b] - $tmp_angka[$b+1];
                }
            }
        }

        for($i=0; $i<count($tmp_angka); $i++){
            echo $tmp_angka[$i]." ";
        }
    } 
    ?>
</p>