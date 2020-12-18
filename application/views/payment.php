 <!--================Breadcrumb Area =================-->
         <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Payment</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="active">Payment</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        <!--================Payment Area =================-->
        <form action="<?php echo base_url('c_payment/searchunique');?>" method="post">
        <section class="payment_area section_gap">
				<div class="container text-center">
                        <h1 style="color: black">Insert Your Unique Code</h1>
                        <input class="text-center" type="text" name="code" placeholder="Unique Code"/><br>
                        <button style="block-size: 40px" type="submit" class="mt-10 btn btn-primary" onclick="window.location.href ='<?php echo base_url('c_transaksi');?>'">Search</button>
				</div>
        </section>
        </form>
        
        <!--================Payment Area =================-->