<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="row">                    
                    <div class="mb-3 col-md-9">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-12">
                                <div class="card-body">       
									<?= $this->session->flashdata('message'); ?>
									<br>
                                    <h5 class="card-title text-primary">Selamat Datang <?=$panggil?> <?= $add['name']; ?>! 🎉</h5>
                                    <p class="mb-4">
                                        <span class="fw-bold">Mari mulai berkerja</span> Cek tugas anda hari ini.
                                    </p>
                                                                     
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="<?php echo base_url('vendor/'); ?>/assets/img/pegawai/<?= $add['image']; ?>" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
      
    <div class="row">
    	<div class="col-lg-12 mb-4 order-0">    
        	<div class="row mb-4">
            	<div class="row">
                    <div class="col-lg-2 text-center col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-center justify-content-center">
                                    <div class="avatar flex-shrink-0">
                                        <img src="<?php echo base_url('vendor/'); ?>/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Jumlah Hakim</span>
                                <h3 class="card-title mb-2">
                                    <?=$hakim;?>
                                </h3>                            
                            </div>
                        </div>
                    </div>
					<div class="col-lg-2 text-center col-md-12 col-6 mb-4">
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center justify-content-center">
									<div class="avatar flex-shrink-0">
										<img src="<?php echo base_url('vendor/'); ?>/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
									</div>
								</div>
								<span class="fw-semibold d-block mb-1">Jumlah Pegawai</span>
								<h3 class="card-title mb-2">
									<?=$pegawai;?>
								</h3>                            
							</div>
						</div>
					</div>
					<div class="col-lg-2 text-center col-md-12 col-6 mb-4">
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center justify-content-center">
									<div class="avatar flex-shrink-0">
										<img src="<?php echo base_url('vendor/'); ?>/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
									</div>
								</div>
								<span class="fw-semibold d-block mb-1">Jumlah PPNPN</span>
								<h3 class="card-title mb-2">
									<?=$ppnpn;?>
								</h3>                           
							</div>
						</div>
					</div>
					<div class="col-lg-2 text-center col-md-12 col-6 mb-4">
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center justify-content-center">
									<div class="avatar flex-shrink-0">
										<img src="<?php echo base_url('vendor/'); ?>/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
									</div>
								</div>
								<span class="fw-semibold d-block mb-1">Jumlah C.PNS</span>
								<h3 class="card-title mb-2">
								<?=$cpns;?>
								</h3>                            
							</div>
						</div>
					</div>
					<div class="col-lg-2 text-center col-md-12 col-6 mb-4">
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center justify-content-center">
									<div class="avatar flex-shrink-0">
										<img src="<?php echo base_url('vendor/'); ?>/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
									</div>
								</div>
								<span class="fw-semibold d-block mb-1">Jumlah TOTAL</span>
								<h3 class="card-title mb-2">
								<?php
								  $total = $hakim+$pegawai+$ppnpn+$cpns;
								  echo $total;
								  ?>
								</h3>                            
							</div>
						</div>
					</div>
					<div class="col-lg-2 text-center col-md-12 col-6 mb-4">
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-center justify-content-center">
									<div class="avatar flex-shrink-0">
										<img src="<?php echo base_url('vendor/'); ?>/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
									</div>
								</div>
								<span class="fw-semibold d-block mb-1">Jumlah Magang</span>
								<h3 class="card-title mb-2">
								<?=$magang;?>
								</h3>                            
							</div>
						</div>
					</div>
				</div>
              
              <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="row">
                <div class="col-lg-2 text-center col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-center justify-content-center">
                                <div class="avatar flex-shrink-0">
                                    <img src="<?php echo base_url('vendor/'); ?>/assets/img/icons/unicons/chart-success.png"
                                        alt="chart success" class="rounded" />
                                </div>
                            </div>
                                <span class="fw-semibold d-block mb-1">Nilai IKM</span>
                                <h3 class="card-title mb-2">
                                <?php
                                $total	= $jum1+$jum2+$jum3+$jum4+$jum5+$jum6+$jum7+$jum8+$jum9;
                                $rat 		= $total/9;
                                echo number_format($rat,2);                               
                                ?>
                                </h3>
                                <small class="text-success fw-semibold">Triwulan 
                            <?php
                            if (!empty($triw)) { 
                                echo $triw;
                            } else {
                                $date = date('Y-m-d');
                                $year = date('Y');

                                $date=date('Y-m-d', strtotime($date));
                                $awtw1 = date('Y-m-d', strtotime("$year/01/01"));
                                $aktw1 = date('Y-m-d', strtotime("$year/03/31"));
                                $awtw2 = date('Y-m-d', strtotime("$year/04/01"));
                                $aktw2 = date('Y-m-d', strtotime("$year/06/30"));
                                $awtw3 = date('Y-m-d', strtotime("$year/07/01"));
                                $aktw3 = date('Y-m-d', strtotime("$year/09/30"));
                                $awtw4 = date('Y-m-d', strtotime("$year/10/01"));
                                $aktw4 = date('Y-m-d', strtotime("$year/12/31"));

                                if (($date >= $awtw1) && ($date <= $aktw1)){
                                echo "1";
                                }
                                if (($date >= $awtw2) && ($date <= $aktw2)){
                                echo "2";
                                }
                                if (($date >= $awtw3) && ($date <= $aktw3)){
                                echo "3";
                                }
                                if (($date >= $awtw4) && ($date <= $aktw4)){
                                echo "4";
                                }  
                            }  
                            ?>
                            , <?=$year;?></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-center justify-content-center">
                                <div class="avatar flex-shrink-0">
                                    <img src="<?php echo base_url('vendor/'); ?>/assets/img/icons/unicons/chart-success.png"
                                        alt="chart success" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Nilai IPK</span>
                            <h3 class="card-title text-nowrap mb-1">
                              <?php
                                $total	= $jum10+$jum11+$jum12+$jum13+$jum14+$jum15+$jum16+$jum17+$jum18+$jum19;
                                $rat 		= $total/10;
                                echo number_format($rat,2);                               
                              ?>
                          	</h3>
                            <small class="text-success fw-semibold">Triwulan 
                              <?php
                              if (!empty($triw)) { 
                                echo $triw;
                              } else {
                                $date = date('Y-m-d');
                                $year = date('Y');

                                $date=date('Y-m-d', strtotime($date));
                                $awtw1 = date('Y-m-d', strtotime("$year/01/01"));
                                $aktw1 = date('Y-m-d', strtotime("$year/03/31"));
                                $awtw2 = date('Y-m-d', strtotime("$year/04/01"));
                                $aktw2 = date('Y-m-d', strtotime("$year/06/30"));
                                $awtw3 = date('Y-m-d', strtotime("$year/07/01"));
                                $aktw3 = date('Y-m-d', strtotime("$year/09/30"));
                                $awtw4 = date('Y-m-d', strtotime("$year/10/01"));
                                $aktw4 = date('Y-m-d', strtotime("$year/12/31"));

                                if (($date >= $awtw1) && ($date <= $aktw1)){
                                  echo "1";
                                }
                                if (($date >= $awtw2) && ($date <= $aktw2)){
                                  echo "2";
                                }
                                if (($date >= $awtw3) && ($date <= $aktw3)){
                                  echo "3";
                                }
                                if (($date >= $awtw4) && ($date <= $aktw4)){
                                  echo "4";
                                }  
                              }  
                              ?>
                              , <?=$year;?></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-center justify-content-center">
                                <div class="avatar flex-shrink-0">
                                    <img src="<?php echo base_url('vendor/'); ?>/assets/img/icons/unicons/chart-success.png"
                                        alt="Credit Card" class="rounded" />
                                </div>                       
                            </div>
                                <span class="d-block mb-1">Konversi IKM</span>
                                <h3 class="card-title text-nowrap mb-2">
                                <?php
                                $total	= $jum1+$jum2+$jum3+$jum4+$jum5+$jum6+$jum7+$jum8+$jum9;
                                $anu    = $total/9;
                                $an     = $anu*25;
                                echo number_format($an,2);                               
                                ?>
                                </h3>
                                <small class="text-success fw-semibold">Triwulan 
                                <?php
                                if (!empty($triw)) { 
                                    echo $triw;
                                } else {
                                    $date = date('Y-m-d');
                                    $year = date('Y');

                                    $date=date('Y-m-d', strtotime($date));
                                    $awtw1 = date('Y-m-d', strtotime("$year/01/01"));
                                    $aktw1 = date('Y-m-d', strtotime("$year/03/31"));
                                    $awtw2 = date('Y-m-d', strtotime("$year/04/01"));
                                    $aktw2 = date('Y-m-d', strtotime("$year/06/30"));
                                    $awtw3 = date('Y-m-d', strtotime("$year/07/01"));
                                    $aktw3 = date('Y-m-d', strtotime("$year/09/30"));
                                    $awtw4 = date('Y-m-d', strtotime("$year/10/01"));
                                    $aktw4 = date('Y-m-d', strtotime("$year/12/31"));

                                    if (($date >= $awtw1) && ($date <= $aktw1)){
                                    echo "1";
                                    }
                                    if (($date >= $awtw2) && ($date <= $aktw2)){
                                    echo "2";
                                    }
                                    if (($date >= $awtw3) && ($date <= $aktw3)){
                                    echo "3";
                                    }
                                    if (($date >= $awtw4) && ($date <= $aktw4)){
                                    echo "4";
                                    }  
                                }  
                                ?>
                                , <?=$year;?></small>
                        </div>
                    </div>
                </div>
              <div class="col-lg-2 text-center col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-center justify-content-center">
                                <div class="avatar flex-shrink-0">
                                    <img src="<?php echo base_url('vendor/'); ?>/assets/img/icons/unicons/chart-success.png"
                                        alt="Credit Card" class="rounded" />
                                </div>                       
                            </div>
                                <span class="d-block mb-1">Konversi IPK</span>
                                <h3 class="card-title text-nowrap mb-2">
                                <?php
                                $total	= $jum10+$jum11+$jum12+$jum13+$jum14+$jum15+$jum16+$jum17+$jum18+$jum19;
                                $anu    = $total/10;
                                $an     = $anu*25;
                                echo number_format($an,2);                               
                                ?>
                                </h3>
                                <small class="text-success fw-semibold">Triwulan 
                                <?php
                                if (!empty($triw)) { 
                                    echo $triw;
                                } else {
                                    $date = date('Y-m-d');
                                    $year = date('Y');

                                    $date=date('Y-m-d', strtotime($date));
                                    $awtw1 = date('Y-m-d', strtotime("$year/01/01"));
                                    $aktw1 = date('Y-m-d', strtotime("$year/03/31"));
                                    $awtw2 = date('Y-m-d', strtotime("$year/04/01"));
                                    $aktw2 = date('Y-m-d', strtotime("$year/06/30"));
                                    $awtw3 = date('Y-m-d', strtotime("$year/07/01"));
                                    $aktw3 = date('Y-m-d', strtotime("$year/09/30"));
                                    $awtw4 = date('Y-m-d', strtotime("$year/10/01"));
                                    $aktw4 = date('Y-m-d', strtotime("$year/12/31"));

                                    if (($date >= $awtw1) && ($date <= $aktw1)){
                                    echo "1";
                                    }
                                    if (($date >= $awtw2) && ($date <= $aktw2)){
                                    echo "2";
                                    }
                                    if (($date >= $awtw3) && ($date <= $aktw3)){
                                    echo "3";
                                    }
                                    if (($date >= $awtw4) && ($date <= $aktw4)){
                                    echo "4";
                                    }  
                                }  
                                ?>
                                , <?=$year;?></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-center justify-content-center">
                                <div class="avatar flex-shrink-0">
                                    <img src="<?php echo base_url('vendor/'); ?>/assets/img/icons/unicons/chart-success.png"
                                        alt="Credit Card" class="rounded" />
                                </div>                                
                            </div>
                            <span class="fw-semibold d-block mb-1">Mutu IKM</span>
                            <h3 class="card-title mb-2">
                          	<?php
                                $total	= $jum1+$jum2+$jum3+$jum4+$jum5+$jum6+$jum7+$jum8+$jum9;
                                $anu    = $total/9;
                                $an     = $anu*25;                            
                                
                                if ($an >= "81" && $an <= "100") {
                                  echo "A";
                                } elseif ($an >= "62" && $an <= "80") {
                                  echo "B";	
                                } elseif ($an >= "43" && $an <= "61") {
                                  echo "C";	
                                } else {
                                  echo "D";
                                }                                                    
                              ?>
                          	</h3>
                            <small class="text-success fw-semibold">Triwulan 
                              <?php
                              if (!empty($triw)) { 
                                echo $triw;
                              } else {
                                $date = date('Y-m-d');
                                $year = date('Y');

                                $date=date('Y-m-d', strtotime($date));
                                $awtw1 = date('Y-m-d', strtotime("$year/01/01"));
                                $aktw1 = date('Y-m-d', strtotime("$year/03/31"));
                                $awtw2 = date('Y-m-d', strtotime("$year/04/01"));
                                $aktw2 = date('Y-m-d', strtotime("$year/06/30"));
                                $awtw3 = date('Y-m-d', strtotime("$year/07/01"));
                                $aktw3 = date('Y-m-d', strtotime("$year/09/30"));
                                $awtw4 = date('Y-m-d', strtotime("$year/10/01"));
                                $aktw4 = date('Y-m-d', strtotime("$year/12/31"));

                                if (($date >= $awtw1) && ($date <= $aktw1)){
                                  echo "1";
                                }
                                if (($date >= $awtw2) && ($date <= $aktw2)){
                                  echo "2";
                                }
                                if (($date >= $awtw3) && ($date <= $aktw3)){
                                  echo "3";
                                }
                                if (($date >= $awtw4) && ($date <= $aktw4)){
                                  echo "4";
                                }  
                              }  
                              ?>
                              , <?=$year;?></small>
                        </div>
                    </div>
                </div>
              	<div class="col-lg-2 text-center col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-center justify-content-center">
                                <div class="avatar flex-shrink-0">
                                    <img src="<?php echo base_url('vendor/'); ?>/assets/img/icons/unicons/chart-success.png"
                                        alt="Credit Card" class="rounded" />
                                </div>                                
                            </div>
                            <span class="fw-semibold d-block mb-1">Mutu IPK</span>
                            <small class="card-title mb-2">
                          	<?php
                                $total	= $jum10+$jum11+$jum12+$jum13+$jum14+$jum15+$jum16+$jum17+$jum18+$jum19;
                                $anu    = $total/10;
                                $an     = $anu*25;                            
                                
                                if ($an >= "81" && $an <= "100") {
                                  echo "Bersih Dari Korupsi";
                                } elseif ($an >= "62" && $an <= "80") {
                                  echo "Cukup Bersih dari Korupsi";	
                                } elseif ($an >= "43" && $an <= "61") {
                                  echo "Kurang Bersih dari Korupsi";	
                                } else {
                                  echo "Tidak Bersih dari Korupsi";
                                }                                                    
                              ?>
                          	</small>
                          <br>
                            <small class="text-success fw-semibold">Triwulan 
                              <?php
                              if (!empty($triw)) { 
                                echo $triw;
                              } else {
                                $date = date('Y-m-d');
                                $year = date('Y');

                                $date=date('Y-m-d', strtotime($date));
                                $awtw1 = date('Y-m-d', strtotime("$year/01/01"));
                                $aktw1 = date('Y-m-d', strtotime("$year/03/31"));
                                $awtw2 = date('Y-m-d', strtotime("$year/04/01"));
                                $aktw2 = date('Y-m-d', strtotime("$year/06/30"));
                                $awtw3 = date('Y-m-d', strtotime("$year/07/01"));
                                $aktw3 = date('Y-m-d', strtotime("$year/09/30"));
                                $awtw4 = date('Y-m-d', strtotime("$year/10/01"));
                                $aktw4 = date('Y-m-d', strtotime("$year/12/31"));

                                if (($date >= $awtw1) && ($date <= $aktw1)){
                                  echo "1";
                                }
                                if (($date >= $awtw2) && ($date <= $aktw2)){
                                  echo "2";
                                }
                                if (($date >= $awtw3) && ($date <= $aktw3)){
                                  echo "3";
                                }
                                if (($date >= $awtw4) && ($date <= $aktw4)){
                                  echo "4";
                                }  
                              }  
                              ?>
                              , <?=$year;?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
			</div>
		</div>
	</div>

