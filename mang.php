<html>
	<head>
	 <meta charset="UTF-8"/>

	</head>
	<body>
	<?php
        $hocsinh = array(
		    'ten' =>'Vu Van Tung', 
			'tuoi' => 26, 
			'gioitinh'=>'Nam', 
			'email'=>'ngocthuong2561992@gmail.com'
			);
		echo  '<pre>';
		print_r($hocsinh);
		echo  '<pre>';
		echo  $hocsinh['ten'].'</br>';
		echo  $hocsinh['tuoi'].'</br>';
		echo  $hocsinh['gioitinh'].'</br>';
		echo  $hocsinh['email'].'</br>';
		
		$aosomi = array(
		    'hang' =>'tomy', 
			'ngaysx'=> '10/11/2016', 
			'chitiet'=>array(
			    'mau' => 'Xanh',
				'size' => 30,
				'gia' => 200000,
			), 
			'loai' => 'ao'
		);
		echo '<pre>';
		print_r($aosomi);
		echo '</pre>';
	    echo 'Hang san xuat:'.$aosomi['hang'].'<br>';
	    echo 'Ngay san xuat:'.$aosomi['ngaysx'].'<br>';
	    echo 'Mau ao:'.$aosomi['chitiet']['mau'].'<br>';
		
		$so = array(5,10,15,22,35,39);
		echo '<pre>';
		print_r($so);
		echo '</pre>';
		echo rsort($so);
		
		//ham gop phan tuoi
		$t = implode(',',$so);
		echo $t;
		
		//tach
		$tach= explode(',',$t);
		foreach($tach as $tach);
		echo '<pre>';
        
		print_r($so);
		echo '<pre>';
		
		//Hien thi ngau nhien
		$so2 = array('html','css','javascipt','php','jquery');
		shuffle($so2);
		echo '<pre>';
		print_r($so);
		echo '</pre>'
		
		
		$thang = array(
			1 => 'Thang 1';
			2 => 'Thang 2';
			3 => 'Thang 3';
			4 => 'Thang 4';
			5 => 'Thang 5';
			6 => 'Thang 6';
			7 => 'Thang 7';
			8 => 'Thang 8';
			9 => 'Thang 9';
			10 => 'Thang 10';
			11 => 'Thang 11';
			12 => 'Thang 12';
		);
		$ngay = range(1,31);
	    $nam = range(1980,2030);
	?>
	 <form name= "frmthaythe" method= "POST">
	    <select name="ngaysinh">
		   <option>Chon ngay sinh</option>
		   <?php
		      foreach($thang as $k=>$v)
			  {
			?>
			 <option value="<?php echo $k; ?>"><?php echo $v; ?> </option>
			<?php
			 } 
		   ?>
		</select>
	 </form>
	</body>
</html>