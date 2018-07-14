
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>

    <?php include 'header.php'; ?>
    
</head>
<body>
    <div id="page-wrapper">
        
        <?php include 'headerbody.php'; ?>
            
        <section id="content" class="image-bg1">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-sm-12 col-md-10">
                        <div class="search-box-wrapper style1">
                            <div class="search-box">
                                <ul class="search-tabs clearfix">
                                    <li class="active"><a href="#hotels-tab" data-toggle="tab"><i class="soap-icon-hotel"></i>HOTELS</a></li>
                                    <li><a href="#comingsoon-tab" data-toggle="tab"><i class="soap-icon-plane-right takeoff-effect"></i>FLIGHTS</a></li>
                                    <li><a href="#comingsoon-tab" data-toggle="tab"><i class="soap-icon-flight-hotel"></i>FLIGHT &amp; HOTELS</a></li>
                                    <li><a href="#comingsoon-tab" data-toggle="tab"><i class="soap-icon-car"></i>CARS</a></li>
                                    <li><a href="#comingsoon-tab" data-toggle="tab"><i class="soap-icon-cruise"></i>CRUISES</a></li>
                                    </li>
                                </ul>
                                <div class="visible-mobile">
                                    <ul id="mobile-search-tabs" class="search-tabs clearfix">
                                        <li class="active"><a href="#hotels-tab">HOTELS</a></li>
                                        <li><a href="#comingsoon-tab">FLIGHTS</a></li>
                                        <li><a href="#comingsoon-tab">FLIGHT &amp; HOTELS</a></li>
                                        <li><a href="#comingsoon-tab">CARS</a></li>
                                        <li><a href="#comingsoon-tab">CRUISES</a></li>
                                    </ul>
                                </div>
                                
                                <div class="search-tab-content">
                                    <div class="tab-pane fade active in" id="hotels-tab">
                                        <form action="hotel-list-view.php" method="get">
                                            <input type="hidden" name="page" value="1"/>
                                            <div class="title-container">
                                                <h2 class="search-title">Search and Book Hotels</h2>
                                                <p>We're bringing you a new level of comfort.</p>
                                                <i class="soap-icon-hotel"></i>
                                            </div>
                                            <div class="search-content">
                                                <h5 class="title">Where</h5>
                                                <label>Your Destination</label>
                                                <input type="text" name="destination" class="input-text full-width" placeholder="enter a destination or hotel name" required />
                                                <hr>
                                                <h5 class="title">When</h5>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <label>Check In</label>
                                                        <div class="datepicker-wrap">
                                                            <input type="text" name="date_from" class="input-text full-width" placeholder="mm/dd/yy" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label>Check Out</label>
                                                        <div class="datepicker-wrap">
                                                            <input type="text" name="date_to" class="input-text full-width" placeholder="mm/dd/yy" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h5 class="title">Who</h5>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <label>ROOMS</label>
                                                        <div class="selector">
                                                            <select name="rooms" class="full-width">
                                                                <option value="1">01</option>
                                                                <option value="2">02</option>
                                                                <option value="3">03</option>
                                                                <option value="4">04</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label>ADULTS</label>
                                                        <div class="selector">
                                                            <select name="guests" class="full-width">
                                                                <option value="1">01</option>
                                                                <option value="2">02</option>
                                                                <option value="3">03</option>
                                                                <option value="4">04</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h5 class="title">Price</h5>
                                                <div class="row">
                                                    <div class="col-xs-4">
                                                        <label>Min Price</label>
                                                        <input name="price_low" type="number" class="input-text full-width" placeholder="" value="<?php echo $_GET['price_low'] ?>" min=0 onchange="document.getElementById('price_high').min=this.value;" />
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>Max Price</label>
                                                        <input name="price_high" id="price_high" type="number" class="input-text full-width" placeholder="" value="<?php echo $_GET['price_high'] ?>" min='<?php echo $_GET['price_high'] ?>' />
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <label>Currency</label>
                                                        <div class="selector">
                                                            <select name="currency" class="full-width">
                                                                <option value="USD">USD</option>
                                                                <option value="ARS">ARS</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <button type="submit" class="full-width uppercase">SEARCH NOW</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="comingsoon-tab">
                                        <div class="title-container">
                                            <h2 class="search-title">Cooming soon!</h2>
                                            <i class="soap-icon-clock"></i>
                                        </div>
                                        <div class="search-content" style="height: 300px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include 'footerjs.php';?>

</body>
</html>

