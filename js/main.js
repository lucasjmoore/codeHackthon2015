// JavaScript Document



// Make a variable that will hold our HTTP connection object
var xmlhttpBrand;

// Initialize object for IE7 and up, and other modern browsers
if (window.XMLHttpRequest){
	xmlhttpBrand=new XMLHttpRequest();
}
// Or, initialize object for IE 6 and 5
else{
	xmlhttpBrand=new ActiveXObject("Microsoft.XMLHTTP");
}
  
  
var xmlhttpModel;

// Initialize object for IE7 and up, and other modern browsers
if (window.XMLHttpRequest){
	xmlhttpModel=new XMLHttpRequest();
}
// Or, initialize object for IE 6 and 5
else{
	xmlhttpModel=new ActiveXObject("Microsoft.XMLHTTP");
}
  
  
var xmlhttpYear;

// Initialize object for IE7 and up, and other modern browsers
if (window.XMLHttpRequest){
	xmlhttpYear=new XMLHttpRequest();
}
// Or, initialize object for IE 6 and 5
else{
	xmlhttpYear=new ActiveXObject("Microsoft.XMLHTTP");
}
  
  
  
  var xmlhttpGetModel;

// Initialize object for IE7 and up, and other modern browsers
if (window.XMLHttpRequest){
	xmlhttpGetModel=new XMLHttpRequest();
}
// Or, initialize object for IE 6 and 5
else{
	xmlhttpGetModel=new ActiveXObject("Microsoft.XMLHTTP");
}
  
  

function brandSelection(selectionValue)
{
  //alert(selectionValue);
  // Check if the user string is empty and exit the function right away if it is.
  if (selectionValue=="Brand")
  { 
    document.querySelector("#model_select").innerHTML='<select class="form-control col-xs-4"  onChange="modelSelection(this.value);" disabled><option value="Model">Select a Model</option></select>';
    document.querySelector("#accordion").innerHTML='';
    return;
  }
	
	sendBrandAjax(selectionValue);
	
//ajax return is going to return model options for select statement
  //document.querySelector("#model_select").innerHTML='<select class="form-control col-xs-4"  onChange="modelSelection(this.value);"><option value="Model">Select a Model</option><option value="F150">F150</option><option value="F350">F350</option><option value="Granada">Granada</option><option value="Mustang">Mustang</option><option value="Pinto">Pinto</option></select>';
}



function modelSelection(selectionValue)
{
  //alert(selectionValue);
  // Check if the user string is empty and exit the function right away if it is.
	if (selectionValue=="Model")
  { 
    document.querySelector("#model_select").innerHTML='<select class="form-control col-xs-4"  onChange="modelSelection(this.value);" disabled><option value="Model">Select a Model</option></select>';
    document.querySelector("#accordion").innerHTML='';
    return;
  }
	
	sendModelAjax(selectionValue);
	
}

function yearSelection(selectionValue)
{
  //alert(selectionValue);
  // Check if the user string is empty and exit the function right away if it is.
  	if (selectionValue=="Year")
  { 
    document.querySelector("#model_select").innerHTML='<select class="form-control col-xs-4"  onChange="modelSelection(this.value);" disabled><option value="Model">Select a Model</option></select>';
    document.querySelector("#accordion").innerHTML='';
    return;
  }
	
	function sendYearAjax(selectionValue);

    if(seelctionVale == 2015){
      alert("SELECTIONVALUE:!"+selectionValue);

      //highest gas emissions on the char is 453
      var emissionsPercentage = (gasData[i].EMISSIONS * 2)/10;
      console.log("emissionsPercentage: "+emissionsPercentage);

      var fillerBar = 1000-emissionsPercentage;
    

       document.querySelector("#emissions-bar").innerHTML='<div class="progress-bar progress-bar-success" style="width: '+ fillerBar +'%"></div><div class="progress-bar progress-bar-danger" style="width: ' + emissionsPercentage+ '%"></div>';
    }
  }  








// console.log(recallData[0].MAKE_NAME_NM);

//  // Check if the user string is empty and exit the function right away if it is.
//   if (selectionValue=="Brand")
//   { 
//     document.querySelector("#model_select").innerHTML='<select class="form-control col-xs-4"  onChange="modelSelection(this.value);" disabled><option value="Model">Select a Model</option></select';
//     return;
//   }


// var htmlMakeOutput ='<select class="form-control col-xs-4"  onChange="modelSelection(this.value);"><option value="Model">Select a Model</option>main.js";'

// for (var i = 0; i < gasData.length; i++) {
//   // console.log(gasData[i].YEAR);

//   var tempSelectionValue = selectionValue.toUpperCase(); 

//   if(gasData[i].MAKE == tempSelectionValue){
//     console.log(gasData[i].MODEL);
//     htmlMakeOutput += '<option value="'+gasData[i].MODEL+'">'+gasData[i].MODEL+'/option>';
//   }

//   document.querySelector("#model_select").innerHTML=htmlMakeOutput;



















function sendBrandAjax(selectionValue){
	// To send your message to the server you use the 'open' function
	// which takes 3 parameter: a string indicating we want to use GET,
	// the url to the PHP file on the server with the query data added,
	// and the last is a boolean setting Asynchronous mode to true.
	xmlhttpBrand.open("GET","processAjax.php?brand=" + selectionValue, true);
	// Then send the message.
	xmlhttpBrand.send();
}

function sendModelAjax(selectionValue){
	xmlhttpModel.open("GET","processAjax.php?model=" + selectionValue, true);
	// Then send the message.
	xmlhttpModel.send();
}

function sendYearAjax(selectionValue){
	xmlhttpYear.open("GET","processAjax.php?year=" + selectionValue, true);
	// Then send the message.
	xmlhttpYear.send();
}

function getModelSelectOptions(selectionValue){
	//alert("GOGOGO");
	xmlhttpGetModel.open("GET","processAjax.php?getModel=" + selectionValue, true);
	// Then send the message.
	xmlhttpGetModel.send();
}



// Now we write code to handle any response from the server, done in the 
  // onreadystatechange function you define like this..
  xmlhttpBrand.onreadystatechange= function() {
	  
	
    if (xmlhttpBrand.readyState==4 && xmlhttpBrand.status==200){
      // The readyState==4 and status=200 are HTTP codes.
      // If your status=404 the page is missing.
      //document.getElementById("suggestions").innerHTML = xmlhttp.responseText;
	  document.querySelector("#accordion").innerHTML = xmlhttpBrand.responseText;
    }
    else{
      // Handle if something went wrong getting the server response.
      // document.querySelector("#accordion").innerHTML = "Error getting data from server! HTTP.status=" + xmlhttpBrand.status;
      document.querySelector("#accordion").innerHTML = '<div class="progress" id="recallLoadingBar"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">Fetching Data</span></div></div>';
    
    }
  }


// Now we write code to handle any response from the server, done in the 
  // onreadystatechange function you define like this..
  xmlhttpModel.onreadystatechange= function() {
	  
	
    if (xmlhttpModel.readyState==4 && xmlhttpModel.status==200){
      // The readyState==4 and status=200 are HTTP codes.
      // If your status=404 the page is missing.
      //document.getElementById("suggestions").innerHTML = xmlhttp.responseText;
	  document.querySelector("#accordion").innerHTML = xmlhttpModel.responseText;
    }
    else{
      // Handle if something went wrong getting the server response.
      // document.querySelector("#accordion").innerHTML = "Error getting data from server! HTTP.status=" + xmlhttpModel.status;
      document.querySelector("#accordion").innerHTML = '<div class="progress"  id="recallLoadingBar"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">Fetching Data</span></div></div>';
    }

  }


// Now we write code to handle any response from the server, done in the 
  // onreadystatechange function you define like this..
  xmlhttpYear.onreadystatechange= function() {
	  
	
    if (xmlhttpYear.readyState==4 && xmlhttpYear.status==200){
      // The readyState==4 and status=200 are HTTP codes.
      // If your status=404 the page is missing.
      //document.getElementById("suggestions").innerHTML = xmlhttp.responseText;
	  document.querySelector("#accordion").innerHTML = xmlhttpYear.responseText;
    }
    else{
      // Handle if something went wrong getting the server response.
      // document.querySelector("#accordion").innerHTML = "Error getting data from server! HTTP.status=" + xmlhttpYear.status;
      document.querySelector("#accordion").innerHTML = '<div class="progress" " id="recallLoadingBar"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">Fetching Data</span></div></div>';
    }
  }


// Now we write code to handle any response from the server, done in the 
  // onreadystatechange function you define like this..
  xmlhttpGetModel.onreadystatechange= function() {
	  
	//alert("thinking")
    if (xmlhttpGetModel.readyState==4 && xmlhttpGetModel.status==200){
      // The readyState==4 and status=200 are HTTP codes.
      // If your status=404 the page is missing.
      //document.getElementById("suggestions").innerHTML = xmlhttp.responseText;
	  //alert("good");
	  document.querySelector("#model_select").innerHTML = xmlhttpGetModel.responseText;
    }
    else{
		//alert("bad");
      // Handle if something went wrong getting the server response.
      document.querySelector("#model_select").innerHTML = '<select class="form-control col-xs-4"  onChange="modelSelection(this.value);" disabled><option value="Model">Select a Model</option></select>';
    }
  }