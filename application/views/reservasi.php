<!--================Breadcrumb Area =================-->
         <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Reservation</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="active">Reservation</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        <!--================Reservasi Area =================-->
        <section class="reservasi_area mt-30 mb-30">
            <div class="">
				<div class="container">
                      <h1 class="text-center"style="color: black">Reservation</h1>
                      <form action="<?php echo base_url('/c_reservasi/do_reservasi/')?>" method="post">
                        <div class="container">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="formGroupExampleInput">Nama Lengkap</label>
                                  <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">No. Identitas (KTP/SIM)</label>
                                    <input type="text" class="form-control" name="identitas" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">Email</label>
                                  <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">Telp</label>
                                  <input type="text" class="form-control" name="telp" required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Rooms</label>
                                        <select class="wide" name="id_room" required>
                                            <option data-display="Choose Room"></option>
                                            <?php foreach ($room as $data) { ?>
                                            <option value="<?php echo $data['id_room'];?>"><?php echo $data['nama_room'];?></option>
                                            <?php } ?>
                                        </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                    <label>Arrival Date</label>
                                    <div class="input-group date form-group">
                                      <input type='date' class="form-control" name="arrival" min="01-01-2019" max="12-31-2019" required>
                                    </div>
                                    <label class="">Departure Date</label>
                                    <div class='input-group date'>
                                      <input type='date' class="form-control" name="departure" min="01-01-2019" max="12-31-2019" required>
                                    </div>
                                    <div class="mt-15 form-group">
                                                <label class="">Adult</label>
                                                <div class="form-group">
                                                    <select class="wide" name="adult" required>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4+</option>
                                                    </select>
                                                </div>
                                                <label class="mt-15">Child</label>
                                                <div class="form-group">
                                                    <select class="wide" name="child" required>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4+</option>
                                                    </select>
                                                </div>
                                    </div>	
                              </div>
                            </div>
                            <input type="hidden" value="<?php echo strtoupper(random_string('alnum',5));?>" name="uniquecode">
                            <button type="submit" class="mt-100 btn btn-primary btn-block">Book Now</button>
                        </form>
                    </div>
				</div>
            </div>
        </section>
        <!--================Reservasi Area =================-->