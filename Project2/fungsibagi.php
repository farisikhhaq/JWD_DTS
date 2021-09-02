<?php
	function pembagian($pembagian1, $pembagian2)
	{
        if($pembagian2 == 0){
            throw new Exception('Hasil Tidak Valid');
        } else{
            $hasil = $pembagian1 / $pembagian2;
            echo "<p>$pembagian1 / $pembagian2 = $hasil</p>";
        }

	}

	try{
        pembagian(2, 2);
        pembagian(7, 2);
        pembagian(5, 0);
        echo '<p>All divisions performed successfully.</p>';
    } catch(Exception $e){
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }

    echo "<p>Pembagian Menggunakan Try-Catch!</p>";

?>