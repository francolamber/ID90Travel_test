
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

        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Hotel Search Results</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="index.php">HOME</a></li>
                    <li class="active">Hotel Search Results</li>
                </ul>
            </div>
        </div>
        <section id="content" >
            <div class="container">
                <div id="main">
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="toggle-container filters-container">
                                <div class="panel style1 arrow-right">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#modify-search-panel" class="collapsed">Modify Search</a>
                                    </h4>
                                    <div id="modify-search-panel" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            <form action="hotel-list-view.php" method="get">
                                                <input type="hidden" name="page" value="1"/>
                                                <div class="form-group">
                                                    <label>Destination</label>
                                                    <input type="text" name="destination" class="input-text full-width" placeholder="" value="<?php echo $_GET['destination'] ?>" required />
                                                </div>
                                                <div class="form-group">
                                                    <label>Check in</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" value="<?php echo date('m/d/Y', strtotime($_GET['checkin']))?>" name="checkin" class="input-text full-width" placeholder="mm/dd/yy" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Check out</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" value="<?php echo date('m/d/Y', strtotime($_GET['checkout']))?>" name="checkout" class="input-text full-width" placeholder="mm/dd/yy" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rooms</label>
                                                    <div class="selector">
                                                        <select name="rooms" class="full-width">
                                                            <option value="1" <?php if($_GET['rooms'] == '1'){ echo 'selected';}  ?>>01</option>
                                                            <option value="2" <?php if($_GET['rooms'] == '2'){ echo 'selected';}  ?>>02</option>
                                                            <option value="3" <?php if($_GET['rooms'] == '3'){ echo 'selected';}  ?>>03</option>
                                                            <option value="4" <?php if($_GET['rooms'] == '4'){ echo 'selected';}  ?>>04</option>
                                                        </select>
                                                    </div> 
                                                </div>
                                                <div class="form-group">
                                                    <label>Adults</label>
                                                    <div class="selector">
                                                        <select name="guests" class="full-width">
                                                            <option value="1" <?php if($_GET['guests'] == '1'){ echo 'selected';}  ?>>01</option>
                                                            <option value="2" <?php if($_GET['guests'] == '2'){ echo 'selected';}  ?>>02</option>
                                                            <option value="3" <?php if($_GET['guests'] == '3'){ echo 'selected';}  ?>>03</option>
                                                            <option value="4" <?php if($_GET['guests'] == '4'){ echo 'selected';}  ?>>04</option>
                                                        </select>
                                                    </div>  
                                                </div>
                                                <div class="form-group">
                                                    <label>Currency</label>
                                                    <div class="selector">
                                                        <select name="currency" class="full-width" >
                                                            <option value="USD" <?php if($_GET['currency'] == 'USD'){ echo 'selected';}  ?>>USD</option>
                                                            <option value="ARS" <?php if($_GET['currency'] == 'ARS'){ echo 'selected';}  ?> >ARS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Min Price</label>
                                                    <input name="price_low" type="number" class="input-text full-width" placeholder="" value="<?php echo $_GET['price_low'] ?>" min=0 onchange="document.getElementById('price_high').min=this.value;" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Max Price</label>
                                                    <input name="price_high" id="price_high" type="number" class="input-text full-width" placeholder="" value="<?php echo $_GET['price_high'] ?>" min='<?php echo $_GET['price_high'] ?>' />
                                                </div>
                                                <br />
                                                <button class="btn-medium icon-check uppercase full-width">search again</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-9">
                            <div class="listing-style3 hotel">
                                <?php 
                                    //Llamo a la funcion para armar el listado de hoteles
                                    include 'phpfunctions/getListHotels.php'; 
                                    echo getListHotels();
                                ?>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="btn-group ">
                                        <?php if(isset($backurl)){echo '<a href="'.$backurl.'" class="uppercase button btn-large">Previus Page</a>';}?>
                                        <?php if(isset($nexturl)){echo '<a href="'.$nexturl.'" class="uppercase button btn-large ">Next Page</a>';}?>
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

