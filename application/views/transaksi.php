 <!--================Breadcrumb Area =================-->
         <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Transaksi</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="active">Transaksi</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        <!--================Payment Area =================-->
        <section class="payment_area section_gap">
				<div class="container text-center">
                        <h1 style="color: black">Your Reservation</h1>
                        <div class="container">
                            <div class="row">
                            <table id="inforeservasi" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>No. Identitas</th>
                                        <th>Email</th>
                                        <th>No. Telp</th>
                                        <th>Arrival</th>
                                        <th>Departure</th>
                                        <th>Adult</th>
                                        <th>Child</th>
                                        <th>Harga Total</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($transaksi as $data){ ?>
                                  <tr>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['identitas']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['telp']; ?></td>
                                    <td><?php echo $data['arrival']; ?></td>
                                    <td><?php echo $data['departure']; ?></td>
                                    <td><?php echo $data['adult']; ?></td>
                                    <td><?php echo $data['child']; ?></td>
                                    <td><?php echo $data['total_harga']; ?></td>
                                    <?php if($data['status']==0){ ?>
                                        <td>Belum Dibayar</td>
                                    <?php } elseif($data['status']==1){ ?>
                                        <td>Sudah Dibayar</td>
                                    <?php } ?>
                                  </tr>
                                  <?php } ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <input class="text-center" type="text" name="code" placeholder="Input Your Money"/>
                        <button style="block-size: 40px" type="button" class="btn btn-primary" onclick="window.location.href ='<?php echo base_url('');?>'">Transfer</button>
				</div>
        </section>
        <!--================Payment Area =================-->