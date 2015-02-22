<!doctype html>
<html>
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ReportCar</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/flatly.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
    
</head>

<body>

<div id="view">


<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-car"></i> ReportCars</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse" >
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">        
        <h4 class="form-group">Choose your car</h4>
        <form action="return 0;">
        
            <select class="form-control col-xs-4" id="brand_select" onChange="getModelSelectOptions(this.value);brandSelection(this.value); ">
               <option value="Brand">Select a Brand</option>
               <option value="ACURA">Acura</option>
<option value="ALFA ROMEO">Alfa romeo</option>
<option value="AMC">Amc</option>
<option value="ARO">Aro</option>
<option value="ASTON MARTIN">Aston martin</option>
<option value="ASTROSTART">Astrostart</option>
<option value="AUDI">Audi</option>
<option value="AURORA">Aurora</option>
<option value="AUSTIN">Austin</option>
<option value="BENTLEY">Bentley</option>
<option value="BF GOODRICH">Bf goodrich</option>
<option value="BMW">Bmw</option>
<option value="BRAUN">Braun</option>
<option value="BUICK">Buick</option>
<option value="CADILLAC">Cadillac</option>
<option value="CANADIAN ELECTRIC VEHICLES">Canadian electric vehicles</option>
<option value="CCE">Cce</option>
<option value="CHAMPION">Champion</option>
<option value="CHECKER">Checker</option>
<option value="CHEVROLET">Chevrolet</option>
<option value="CHRYSLER">Chrysler</option>
<option value="CON AMB">Con amb</option>
<option value="CONTINENTAL">Continental</option>
<option value="CRESTLINE">Crestline</option>
<option value="DACIA">Dacia</option>
<option value="DAEWOO">Daewoo</option>
<option value="DATSUN">Datsun</option>
<option value="DEMERS">Demers</option>
<option value="DODGE">Dodge</option>
<option value="EAGLE COACH">Eagle coach</option>
<option value="EAGLE">Eagle</option>
<option value="EXECUTIVE COACH">Executive coach</option>
<option value="FEDERAL COACH">Federal coach</option>
<option value="FERRARI">Ferrari</option>
<option value="FIAT">Fiat</option>
<option value="FIESTA">Fiesta</option>
<option value="FIRESTONE">Firestone</option>
<option value="FISKER">Fisker</option>
<option value="FORD">Ford</option>
<option value="FRONTLINE">Frontline</option>
<option value="GEM">Gem</option>
<option value="GENERAL">General</option>
<option value="GEO">Geo</option>
<option value="GMC">Gmc</option>
<option value="GOLDEN BOY">Golden boy</option>
<option value="GRUMMAN OLSON">Grumman olson</option>
<option value="HONDA">Honda</option>
<option value="HUMMER">Hummer</option>
<option value="HYUNDAI">Hyundai</option>
<option value="IHC">Ihc</option>
<option value="INFINITI">Infiniti</option>
<option value="INNOCENTI">Innocenti</option>
<option value="ISUZU">Isuzu</option>
<option value="ITASCA">Itasca</option>
<option value="JAGUAR">Jaguar</option>
<option value="JAY-B">Jay-b</option>
<option value="JEEP">Jeep</option>
<option value="KIA">Kia</option>
<option value="KRYSTAL KOACH">Krystal koach</option>
<option value="LADA">Lada</option>
<option value="LAMBORGHINI">Lamborghini</option>
<option value="LANCIA">Lancia</option>
<option value="LAND ROVER">Land rover</option>
<option value="LEXUS">Lexus</option>
<option value="LINCOLN">Lincoln</option>
<option value="LOTUS">Lotus</option>
<option value="MARRS">Marrs</option>
<option value="MASERATI">Maserati</option>
<option value="MAZDA">Mazda</option>
<option value="MERCEDES-BENZ">Mercedes-benz</option>
<option value="MERCURY">Mercury</option>
<option value="MERKUR">Merkur</option>
<option value="MG">Mg</option>
<option value="MINI">Mini</option>
<option value="MITSUBISHI">Mitsubishi</option>
<option value="MORGAN OLSON">Morgan olson</option>
<option value="NISSAN">Nissan</option>
<option value="OLDSMOBILE">Oldsmobile</option>
<option value="PACIFIC MOBILE">Pacific mobile</option>
<option value="PASSPORT">Passport</option>
<option value="PERREAULT">Perreault</option>
<option value="PETER DENNIS">Peter dennis</option>
<option value="PETERBILT">Peterbilt</option>
<option value="PEUGEOT">Peugeot</option>
<option value="PLYMOUTH">Plymouth</option>
<option value="PONTIAC">Pontiac</option>
<option value="PORSCHE">Porsche</option>
<option value="RAM">Ram</option>
<option value="RAYMOND LEBLANC">Raymond leblanc</option>
<option value="RENAULT">Renault</option>
<option value="ROADTREK">Roadtrek</option>
<option value="ROLLS-ROYCE">Rolls-royce</option>
<option value="ROVER">Rover</option>
<option value="ROYALE">Royale</option>
<option value="SAAB">Saab</option>
<option value="SALEEN">Saleen</option>
<option value="SATURN">Saturn</option>
<option value="SCION">Scion</option>
<option value="SKODA">Skoda</option>
<option value="SMART">Smart</option>
<option value="SRT">Srt</option>
<option value="STERLING">Sterling</option>
<option value="SUBARU">Subaru</option>
<option value="SUPERIOR">Superior</option>
<option value="SUZUKI">Suzuki</option>
<option value="TESLA">Tesla</option>
<option value="TOYOTA">Toyota</option>
<option value="TRIUMPH">Triumph</option>
<option value="UNION CITY BODY COMPANY">Union city body company</option>
<option value="UTILIMASTER">Utilimaster</option>
<option value="VAN CONVERSIONS">Van conversions</option>
<option value="VAN-ACTION">Van-action</option>
<option value="VMI">Vmi</option>
<option value="VOLKSWAGEN">Volkswagen</option>
<option value="VOLVO">Volvo</option>
<option value="WESTWARD">Westward</option>
<option value="WHEELED COACH">Wheeled coach</option>
<option value="WILSON">Wilson</option>
<option value="WINNEBAGO">Winnebago</option>
            </select>
        
            <div id="model_select">
               <select class="form-control col-xs-4"  onChange="modelSelection(this.value);" disabled>
                  <option value="Model">Select a Model</option>
                <!--   <option value="F150">F150</option>
                  <option value="F350">F350</option>
                  <option value="Granada">Granada</option>
                  <option value="Mustang">Mustang</option>
                  <option value="Pinto">Pinto</option> -->
               </select>
            </div>

            <select class="form-control col-xs-4"  id="year_select" onChange="yearSelection(this.value);">
               <option value="Year"> Select a Year</option>
               <option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option>
            </select>
        
        
        </form>
    </div>

    </div>
    
    <br>
    <div class="container well" id="recalls">
         <h4>Recalls</h4>
         <h4 class="col-xs-4 col-xs-offset-1"><strong>Year</strong></h4>
         <h4 class="col-xs-4"><strong>Model</strong></h4>
         <br>
         <br>

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

		  
		</div>
    </div>
	






    <div class="container well" id="emissions">
        <h4>Gas Emissions</h4>
        <div class="progress" style="background-color:#aaa; height:20px;">
            <div class="progress-bar progress-bar-success" style="width: 25%"></div>
            <div class="progress-bar progress-bar-danger" style="width: 75%"></div>
        </div>
        <div>
            <span class="col-xs-1">Cough cough</span>
            <span class="col-xs-1 col-xs-offset-9">Feeling good</span>
        </div>
    </div>
	
    <div id="gasPrices">
    </div>
	
    <div id="dealershipMaps">
    </div>
	
    
    
	
</div>

    
</body>
</html>
