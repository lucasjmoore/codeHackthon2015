<?php
session_start();
	


$queryBrand = NULL;
$queryModel = NULL;
$queryYear = NULL;
$queryGetModel = NULL;

// Get the query parameter of the $_REQUEST super global array
if(isset($_REQUEST["brand"])){
	$queryBrand = $_REQUEST["brand"];
}

if(isset($_REQUEST["model"])){
	$queryModel = $_REQUEST["model"];
}

if(isset($_REQUEST["year"])){
	$queryYear = $_REQUEST["year"];
}

if(isset($_REQUEST["getModel"])){
	$queryGetModel = $_REQUEST["getModel"];
}





if(isset($queryBrand))
{
	$_SESSION['userBrand'] = $queryBrand;
	
	$file = fopen("http://data.tc.gc.ca/extracts/vrdb_full_monthly.csv","r");

	$typesArr = array("Car", "Truck", "Light Truck & Van", "Minivan");
	
	$ouputString = "";
	$count = 1;
	$countTotal = 4;
	$loops = 0;
	
	/**/
	while( (($csvRecord = fgetcsv($file)) !== FALSE)  &&  ($count <= $countTotal) )
	{
		if($csvRecord[5] == $queryBrand)
		{
			
		if(	$csvRecord[3] == $typesArr[0] ||
			$csvRecord[3] == $typesArr[1] ||
			$csvRecord[3] == $typesArr[2] ||
			$csvRecord[3] == $typesArr[3] )
		{
			
			//if($csvRecord[1] == 1980)
			//{
				$ouputString .= '<div class="panel panel-default">
          <div class="panel-heading" role="tab" id="heading' . $count . '">
		      <h4 class="panel-title accordion-height">
		        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse' . $count . '" aria-expanded="true" aria-controls="collapseOne">
               <div class="col-xs-1 "><i class="fa fa-caret-down"></i></div>
               <div class="col-xs-4">'. $csvRecord[1] .'</div>
               <div class="col-xs-6">'. $csvRecord[6] .'</div>
		        </a>
		      </h4>
		    </div>
		   <div id="collapse' . $count . '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading' . $count . '">
		      <div class="panel-body">' . $csvRecord[12] . 
			  '</div>
		    </div>
		  </div>';
		  
		  $count++;
		  
		  		//$csvRecord[1] // Year
				//$csvRecord[3] // Type
				//$csvRecord[5] // Make
				//$csvRecord[6] // Model
				//$csvRecord[12] // Comment
			//}
		}
		}
	}
	
	echo $ouputString;
	fclose($file);
}




if(isset($queryModel))
{
	$_SESSION['userModel'] = $queryModel;
	$file = fopen("http://data.tc.gc.ca/extracts/vrdb_full_monthly.csv","r");

	$typesArr = array("Car", "Truck", "Light Truck & Van", "Minivan");
	
	$ouputString = "";
	$count = 1;
	$countTotal = 4;
	$loops = 0;
	
	/**/
	while( (($csvRecord = fgetcsv($file)) !== FALSE)  &&  ($count <= $countTotal) )
	{
		if(($csvRecord[5] == $_SESSION['userBrand']) && ($csvRecord[6] == $queryModel))
		{
			
		if(	$csvRecord[3] == $typesArr[0] ||
			$csvRecord[3] == $typesArr[1] ||
			$csvRecord[3] == $typesArr[2] ||
			$csvRecord[3] == $typesArr[3] )
		{
			
			//if($csvRecord[1] == 1980)
			//{
				$ouputString .= '<div class="panel panel-default">
          <div class="panel-heading" role="tab" id="heading' . $count . '">
		      <h4 class="panel-title accordion-height">
		        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse' . $count . '" aria-expanded="true" aria-controls="collapseOne">
               <div class="col-xs-1 "><i class="fa fa-caret-down"></i></div>
               <div class="col-xs-4">'. $csvRecord[1] .'</div>
               <div class="col-xs-6">'. $csvRecord[6] .'</div>
		        </a>
		      </h4>
		    </div>
		   <div id="collapse' . $count . '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading' . $count . '">
		      <div class="panel-body">' . $csvRecord[12] . 
			  '</div>
		    </div>
		  </div>';
		  
		  $count++;
		  
		  		//$csvRecord[1] // Year
				//$csvRecord[3] // Type
				//$csvRecord[5] // Make
				//$csvRecord[6] // Model
				//$csvRecord[12] // Comment
			//}
		}
		}
	}
	
	echo $ouputString;
	fclose($file);
}


if(isset($queryYear))
{
	$file = fopen("http://data.tc.gc.ca/extracts/vrdb_full_monthly.csv","r");

	$typesArr = array("Car", "Truck", "Light Truck & Van", "Minivan");
	
	$ouputString = "";
	$count = 1;
	$countTotal = 4;
	$loops = 0;
	
	/**/
	while( (($csvRecord = fgetcsv($file)) !== FALSE)  &&  ($count <= $countTotal) )
	{
		$brand = NULL;
		$model = NULL;
		if(isset($_SESSION['userBrand']))
		{
			$brand = $_SESSION['userBrand'];
		}
			
		if(isset($_SESSION['userModel']))
		{
			$model = $_SESSION['userModel'];
		}
			
		if(($csvRecord[5] == $_SESSION['userBrand']) && ($csvRecord[1] == $queryYear))
		{
			
		if(	$csvRecord[3] == $typesArr[0] ||
			$csvRecord[3] == $typesArr[1] ||
			$csvRecord[3] == $typesArr[2] ||
			$csvRecord[3] == $typesArr[3] )
		{
			
			//if($csvRecord[1] == 1980)
			//{
				$ouputString .= '<div class="panel panel-default">
          <div class="panel-heading" role="tab" id="heading' . $count . '">
		      <h4 class="panel-title accordion-height">
		        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse' . $count . '" aria-expanded="true" aria-controls="collapseOne">
               <div class="col-xs-1 "><i class="fa fa-caret-down"></i></div>
               <div class="col-xs-4">'. $csvRecord[1] .'</div>
               <div class="col-xs-6">'. $csvRecord[6] .'</div>
		        </a>
		      </h4>
		    </div>
		   <div id="collapse' . $count . '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading' . $count . '">
		      <div class="panel-body">' . $csvRecord[12] . 
			  '</div>
		    </div>
		  </div>';
		  
		  $count++;
		  
		  		//$csvRecord[1] // Year
				//$csvRecord[3] // Type
				//$csvRecord[5] // Make
				//$csvRecord[6] // Model
				//$csvRecord[12] // Comment
			//}
		}
		}
	}
	
	echo $ouputString;
	fclose($file);
}



$modelArray = array();

if(isset($queryGetModel))
{
	
	$file = fopen("http://data.tc.gc.ca/extracts/vrdb_full_monthly.csv","r");

	$typesArr = array("Car", "Truck", "Light Truck & Van", "Minivan");
	
	
	$count = 0;
	
	
	/**/
	while( (($csvRecord = fgetcsv($file)) !== FALSE)  && $count < 1000)
	{
		$count++;
		
	if(isset($_SESSION['userBrand'])){
		
		if(strtolower($csvRecord[5]) == strtolower($_SESSION['userBrand']))
		{
				
			if(	$csvRecord[3] == $typesArr[0] ||
				$csvRecord[3] == $typesArr[1] ||
				$csvRecord[3] == $typesArr[2] ||
				$csvRecord[3] == $typesArr[3] )
			{
//				$new = true;
//				
//				
//				if(count($modelArray) > 0)
//				{
//					foreach($modelArray as $model)
//					{
//						if($model == $csvRecord[6])
//						{
//							$new = false;
//						}
//					}
//				}
//				
//				if($new == true)
//				{
//					array_push($modelArray, $csvRecord[6]);
//				}
				
				if(!in_array($csvRecord[6], $modelArray, true)){
					array_push($modelArray, $csvRecord[6]);
				}
		
			}
		}
	}
	}
	
	
	$ouputString = '<select class="form-control col-xs-4"  onChange="modelSelection(this.value);" >
	<option value="Model">Select a Model</option>';
	
	
	sort($modelArray);
	if(count($modelArray) > 0)
	{
		foreach($modelArray as $model)
		{
			$label = strtolower($model);
			$label[0] = strtoupper($label[0]);
			$ouputString .= '<option value="' . $model . '">' . $label . '</option>';
		}
	}
	
	$ouputString .= '</select>';
	
	
	echo $ouputString;
}










$brandArray = array();


function makeBrandArray()
{
	

	$file = fopen("http://data.tc.gc.ca/extracts/vrdb_full_monthly.csv","r");

	$typesArr = array("Car", "Truck", "Light Truck & Van", "Minivan");
	
	$ouputString = "";
	
	$count = 0;
	
	/**/
	while( (($csvRecord = fgetcsv($file)) !== FALSE) )// && $count < 100)
	{
		//$count++;
		if(	$csvRecord[3] == $typesArr[0] ||
			$csvRecord[3] == $typesArr[1] ||
			$csvRecord[3] == $typesArr[2] ||
			$csvRecord[3] == $typesArr[3] )
		{
			$new = true;
			
			
			if(count($brandArray) > 0)
			{
				foreach($brandArray as $brand)
				{
					if($brand == $csvRecord[5])
					{
						$new = false;
					}
				}
			}
			
			if($new == true)
			{
				array_push($brandArray, $csvRecord[5]);
			}
			
			
	
		}
	}
	if(count($brandArray) > 0)
	{
		foreach($brandArray as $brand)
		{
			echo $brand . "<br/>";
		}
	}
}


//makeBrandArray();




?> 
