 <!--================Breadcrumb Area =================-->
         <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Total</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="active">Reservation</li>
                        <li class="active">Total</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        <!--================ Total Area =================-->
        <?php foreach ($total as $data) { ?>
        <form action="<?php echo base_url('c_transaksi/selectByCode2/'.$data['uniquecode']);?>" method="post">
        <section class="payment_area section_gap">
                <div class="container text-center">
                    <div class="container row">
                      <div class="col-lg-4">
                        <h1 style="color: black">Total Pembayaran</h1>
                        <h4 style="text-align: center">Harga Kamar + Kode Unik Pesanan</h4>

                        <h2>Rp. <?php echo $data['total_harga'];?>,-</h2>
                        <input type="hidden" name="totalharga" value="<?php echo $data['total_harga'];?>">

                        <button type="submit" class="mt-10 btn btn-primary">Next</button>
                        <h6 class="mt-10"style="color: red">Klik "Payment Button" if you want to transfer now</h6>
                      </div>
                      <div class="col-lg-4">
                        <h1 style="font-size: 100pt">OR</h1>
                      </div>
                      <div class="col-lg-4">
                        <h1 class="mt-30" style="color: black">Your Unique Code</h1>
						<h1><?php echo $data['uniquecode'];?></h1>
                        <h6 class="mt-10"style="color: red">Note : Save your unique code if you want to pay later or check payment status</h6>
                      </div>
                    </div>
                </div>
        </section>
        </form>
        <?php } ?>
        <!--================ End Total Area =================-->