<?php

//$modelArray;


function makeBrandArray()
{
	$brandArray = array();

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
	
	sort($brandArray);
	if(count($brandArray) > 0)
	{
		foreach($brandArray as $brand)
		{
			$label = strtolower($brand);
			$label[0] = strtoupper($label[0]);
			echo '<option value="' . $brand . '">' . $label . '</option>';
		}
	}
}


makeBrandArray();

?>