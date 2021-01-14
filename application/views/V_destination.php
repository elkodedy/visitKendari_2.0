
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/images/senja1.jpg')?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Tour Destination</h1>
            <p class="breadcrumbs"><span class="mr-2">Traveling Makes You Live Longer</span></p>
          </div>
        </div>
      </div>
    </section>


		<section class="ftco-section">
    	<div class="container">
            
        <div class="row">
          <div class="col-lg-8 ftco-animate order-md-last">
            <?php $i=1; foreach($des_1 as $row_1){} ?>
            <p>
              <img src="<?php echo base_url().$row_1->des_photo ?>" alt="" class="img-fluid">
            </p>
            <h2 class="mb-3"><?php echo $row_1->des_name ?></h2>
            <p>
              <b><?php echo $row_1->des_tag ?></b>
              <br><br>
              <?php echo $row_1->des_info ?>
            </p>
            <p class="text-center"><a href="#" class="btn btn-primary px-5 py-3">Go Now <?php echo $row_1->des_cost ?></a></p>
            
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Sea</a>
                <a href="#" class="tag-cloud-link">Jungle</a>
                <a href="#" class="tag-cloud-link">Culture</a>
                <a href="#" class="tag-cloud-link">Hotel</a>
              </div>
            </div>
            
            <div class="pt-5 mt-5">
              <h3 class="mb-5">5 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="<?php echo base_url('assets/images/com_prime.png')?>" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Prime</h3>
                    <div class="meta">Oktober 7, 2018 at 2:21pm</div>
                    <p>Barang bagus</p>
                    <p><a href="#" class="reply">Balas</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="<?php echo base_url('assets/images/com_gagas.png')?>" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Gagas</h3>
                    <div class="meta">Oktober 12, 2018 at 4:21pm</div>
                    <p>Barang sesuai harapan, peforma mantul. Adminya ramah tamah seperti badak</p>
                    <p><a href="#" class="reply">Balas</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="<?php echo base_url('assets/images/com_abi.png')?>" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>Abi</h3>
                        <div class="meta">Oktober 12, 2018 at 4:27pm</div>
                        <p>ehem</p>
                        <p><a href="#" class="reply">Balas</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="<?php echo base_url('assets/images/com_gagas.png')?>" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>Gagas</h3>
                            <div class="meta">Oktober 12, 2018 at 7:12pm</div>
                            <p>Maaf bang</p>
                            <p><a href="#" class="reply">Balas</a></p>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="<?php echo base_url('assets/images/com_tiyan.png')?>" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Tiyan</h3>
                    <div class="meta">Oktober 19, 2018 at 1:21pm</div>
                    <p>Casing pecah sedikit, tapi gaming lancar banyak</p>
                    <p><a href="#" class="reply">Balas</a></p>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Tinggalkan komentar</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Nama *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>
          </div> 
          <!-- .col-md-8 -->
		    	<div class="col-lg-4 sidebar">
          <div class="row">
            <div class="ftco-search">
              <div class="nav-link-wrap">
                <div class="nav nav-pills d-flex text-center justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Destinations</a>
                </div>
              </div>
            </div>
          </div>
          
	          <div class="col-md-12">
	            <div class="tab-content" id="v-pills-tabContent">
	              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
	              	<div class="row d-flex align-items-stretch">
                    <?php $i=1; foreach($des as $row){ ?> <!-- ////////////////////////////////// -->
                    <div class="col-lg-12 d-flex sidebar mt-3">
                      <div class="menus d-sm-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(<?php echo base_url().$row->des_photo?>);"></div>
                        <div class="text d-flex align-items-center">
                          <div>
                            <div class="d-flex">
                              <div class="one-half">
                                <h3><?php echo $row->des_name ?></h3>
                              </div>
                            </div>
                            <!-- <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p> -->
                            <p><a href="#" class="btn btn-primary">view</a></p>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <?php } ?> <!-- ////////////////////////////////// -->
					        </div>
	              </div>
	            </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>