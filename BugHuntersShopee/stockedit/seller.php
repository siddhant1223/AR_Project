<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Edit/Add Stock</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Edit/Add Stock</a></h1>
		<form id="form_26539" class="appnitro"  method="post" action="stockupdate.php">
					<div class="form_description">
			<h2>Edit/Add Stock</h2>
			<p>Sellers can edit grocery stock and AR images here.</p>
		</div>						
			<ul >
			
					<li id="li_6" >
		<label class="description" for="element_6">Select Item Type </label>
		<span>
			<input id="element_6_1" name="itemtype" class="element radio" type="radio" value="1" />
<label class="choice" for="element_6_1">New Item</label>
<input id="element_6_2" name="itemtype" class="element radio" type="radio" value="2" />
<label class="choice" for="element_6_2">Existing Item</label>

		</span> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">ItemID </label>
		<div>
			<input id="element_4" name="itemID" class="element text small" type="text" maxlength="255"/> 
		</div> 
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Item Name </label>
		<div>
			<input id="element_1" name="itemname" class="element text large" type="text" maxlength="255"/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Available Quantity </label>
		<div>
			<input id="element_2" name="availquantity" class="element text medium" type="number"/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Price/kg </label>
		<div>
			<input id="element_3" name="price" type="number"/> 
		</div><p class="guidelines" id="guide_3"><small>Enter price in Rupees.</small></p> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Add Image Link </label>
		<div>
			<input id="element_5" name="imglink" class="element text large" type="text" maxlength="255"/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="26539" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<center><h4><a href="datadisplay.php">View Stock Sheet</a></h4>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>