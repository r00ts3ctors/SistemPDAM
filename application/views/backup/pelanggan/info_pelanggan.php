   <div class="row">
       <div class="col-xl-3 col-md-6">
           <div class="card card-stats">
               <!-- Card body -->
               <div class="card-body">
                   <div class="row">
                       <div class="col">




                           <h5 class="card-title text-uppercase text-muted mb-0">Perbaikan</h5>
                           <span class="h2 font-weight-bold mb-0"> <?php echo $infopelanggan['totalPerbaikan']; ?> </span>

                       </div>
                       <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                               <i class="ni ni-active-40"></i>
                           </div>
                       </div>
                   </div>
                   <p class="mt-3 mb-0 text-sm">
                       <span class="text-success mr-2">Pelanggan</span>
                   </p>
               </div>
           </div>
       </div>
       <div class="col-xl-3 col-md-6">
           <div class="card card-stats">
               <!-- Card body -->
               <div class="card-body">
                   <div class="row">
                       <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Selesai Perbaikan</h5>
                           <span class="h2 font-weight-bold mb-0"> <?php echo $infopelanggan['totalFixPerbaikan']; ?> </span>
                       </div>
                       <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                               <i class="ni ni-chart-pie-35"></i>
                           </div>
                       </div>
                   </div>
                   <p class="mt-3 mb-0 text-sm">
                       <span class="text-success mr-2">Telah terselesaikan</span>
                   </p>
               </div>
           </div>
       </div>
       <div class="col-xl-3 col-md-6">
           <div class="card card-stats">
               <!-- Card body -->
               <div class="card-body">
                   <div class="row">
                       <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Total Pelanggan</h5>
                           <span class="h2 font-weight-bold mb-0"><?php echo $infopelanggan['totalFixPerbaikan'] + $infopelanggan['totalPerbaikan']; ?></span>
                       </div>
                       <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                               <i class="ni ni-money-coins"></i>
                           </div>
                       </div>
                   </div>
                   <p class="mt-3 mb-0 text-sm">
                       <span class="text-success mr-2">Total Pelanggan</span>
                   </p>
               </div>
           </div>
       </div>
       <div class="col-xl-3 col-md-6">
           <div class="card card-stats">
               <!-- Card body -->
               <div class="card-body">
                   <div class="row">
                       <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                           <span class="h2 font-weight-bold mb-0">49,65%</span>
                       </div>
                       <div class="col-auto">
                           <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                               <i class="ni ni-chart-bar-32"></i>
                           </div>
                       </div>
                   </div>
                   <p class="mt-3 mb-0 text-sm">
                       <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                       <span class="text-nowrap">Since last month</span>
                   </p>
               </div>
           </div>
       </div>
   </div>