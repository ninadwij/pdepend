<html>
<body onLoad="window.print();">
   <?php
   include '../koneksi.php';
   ?>
<style type="text/css">
body {
	font-size:8px;
	font-family:Arial, Helvetica, sans-serif;
}
.style1{
	font-size:11px;
	font-family:Arial, Helvetica, sans-serif;	
}
</style>
<div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">       
                            <div class="page-header">
                                <div class="page-title">
								<p style="text-align:right;"><img src="../gambar/PPLN.png" height="70px" width="370px" style="float:left;" /><br/><br/><br/><br/><br/><br/><br/>								
								<p class="style1" style="text-align:center;">AGENDA KUNJUNGAN TAMU</p>
								<p class="style1" style="text-align:center;">KANTOR SEKTOR DALKIT BANDAR LAMPUNG</p>
								<p class="style1" style="text-align:center;">F-SBDL/HSM/KKK/015-01</p>
   			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="1px" class="style1">		   
   	          <tr>
   	            <td width="2%" height="34" align="center" bgcolor="#CCCCCC">No</td>
				<td width="7%" bgcolor="#CCCCCC" align="center">Tanggal</td>
   	            <td width="10%" bgcolor="#CCCCCC" align="center">Nama</td>
   	            <td width="4%" bgcolor="#CCCCCC" align="center">ID</td>
				<td width="4%" bgcolor="#CCCCCC" align="center">Roda2/4</td>
   	            <td width="7%" bgcolor="#CCCCCC" align="center">Pekerjaan</td>
                <td width="10%" bgcolor="#CCCCCC" align="center">Alamat</td>
                <td width="8%" bgcolor="#CCCCCC" align="center">Instansi</td>
   	            <td width="7%" bgcolor="#CCCCCC" align="center">Telp / HP</td>
                <td width="9%" bgcolor="#CCCCCC" align="center">Bertemu</td>
				<td width="5%" bgcolor="#CCCCCC" align="center">Janji</td>
				<td width="13%" bgcolor="#CCCCCC" align="center">Keperluan</td>
				<td width="4%" bgcolor="#CCCCCC" align="center">Jam Masuk</td>
				<td width="4%" bgcolor="#CCCCCC" align="center">Jam Keluar</td>
				<td width="8%" bgcolor="#CCCCCC" align="center">Security</td>
              </tr>  	        
   	  <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM data_tamu ORDER BY id_user ASC");
                    if(mysqli_num_rows($sql) == 0){ 
                        echo '<tr><td colspan="8">Data Tidak Ada.</td></tr>';
                    }else{
						$nomor = 1;
                        while($row = mysqli_fetch_assoc($sql)){
                            echo '
                            <tr>
								<td>'.$nomor++.'</td>
								<td>'.date('d-m-Y ',strtotime($row['Tgl'])).'</td>
                                <td>'.$row['Nama'].'</td>
								<td>'.$row['Nomor_Identitas'].'</td>
								<td>'.$row['Plat'].'</td>
                               <td>'.$row['Pekerjaan'].'</td>
                                <td>'.$row['Alamat'].'</td>
                                <td>'.$row['Instansi'].'</td>
                                <td>'.$row['Nomor_Telepon'].'</td>
                                <td>'.$row['Bertemu_dengan'].'</td>
                                <td>'.$row['TanpaPerjanjian_SudahJanji'].'</td>
                                <td>'.$row['Keperluan'].'</td>
								<td>'.date('G : i ',strtotime($row['Jam_Masuk'])).'</td>
								<td>'.date('G : i ',strtotime($row['Jam_Keluar'])).'</td>
								<td>'.$row['Security'].'</td>                                         
                            </tr>
                            ';
                        }
                    }
                    ?>
          </table>
</body>
