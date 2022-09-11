<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome To Scraapy- The Scrap Marketplace</title>
<link rel="shortcut icon" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/fluid_dg.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<link rel="stylesheet" href="css/conditional.css">
</head>
<body>
	
<div class="w100">
<form name="scrap-form" id="scrap-form" action="{{ route('scrap.update') }}" method="POST" role="form" enctype="multipart/form-data">
@csrf
	<h4 class="mb-3">Upload Your Scrap</h4>
	<div class="pop_cont">
		<div class="row">
			<div class="col-md-6">
				<p class="mb-3">
					<select name="scrap_category">
						@foreach($scrap as $scrap)
						<option value="{{ $scrap->category_name }}">{{ $scrap->category_name }}</option>
						@endforeach
					</select>
				</p>
				<p class="mb-3">
					<select required name="category" id="test-dropdown" onChange="getScrapAmountonCatChange(this)">
						<option> - Select - </option>
						@foreach($category as $category)
						<option data-price="{{ $category->price }}" value="{{ $category->id }}">{{$category->scrap_type}}</option>
						@endforeach
					</select>
				</p>
				
				<p class="mb-3">
					<input required name="weight" type="text" id="weight" placeholder="Qty. Avl. 0.00"  onInput="getScrapAmountOnWeightChange(this)">
					<select><option>Kg</option></select>
				</p>
				<p class="mb-3">
					<input required name="buyprice" readonly="readonly" type="text" id="buyprice" placeholder="Buy Price - 0.00">
					<select><option>S</option></select>
				</p>
				<p class="mb-3">
					<input required name="totalPrice" readonly="readonly" type="text" id="totalPrice" placeholder="Total Price - 0.00">
					<select><option>S</option></select>
				</p>
				<p class="mb-3"><input required type="text" name="dlv_date" id="dlv_date" placeholder="DLV. Date"></p>
				<p class="mb-3"><select name="dlv_time" id="dlv_time">
						<option value="">Time</option>
					</select></p>
			</div>
			<div class="col-md-6">
				<div class="row mb-3">
					<div class="col-md-6">
						<div class="upload-btn-wrapper upf">
							<button class="p20 pt-2 pb-2 b fs14 bg-white"><i class="fas fa-paperclip"></i> <strong>Upload Photo</strong></button> 
							<input required class="uploadFile" type="file" name="myfile[]">
						</div>
					</div>
					<div class="col-md-6">
						<div class="upload-btn-wrapper upf">
							<button class="p20 pt-2 pb-2 b fs14 bg-white"><i class="fas fa-paperclip"></i> <strong>Upload Photo</strong></button> 
							<input required class="uploadFile" type="file" name="myfile[]">
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md-6">
						<div class="upload-btn-wrapper upf">
							<button class="p20 pt-2 pb-2 b fs14 bg-white"><i class="fas fa-paperclip"></i> <strong>Upload Photo</strong></button> 
							<input required class="uploadFile" type="file" name="myfile[]">
						</div>
					</div>
					<div class="col-md-6">
						<div class="upload-btn-wrapper upf">
							<button class="p20 pt-2 pb-2 b fs14 bg-white"><i class="fas fa-paperclip"></i> <strong>Upload Photo</strong></button> 
							<input required class="uploadFile" type="file" name="myfile[]">
						</div>
					</div>
				</div>
				<p id="demo1"></p>
				<div class="text-center mt-3">
					
					<input name="input" type="submit" value="Submit" class="contact_btn">
				</div>
			</div>
		</div>
	</div>
</form>
</div>
</body>
</html>

<script type="text/javascript">


/* Get scrap total on change category */
function getScrapAmountonCatChange(cat) {
	$('#buyprice, #totalPrice').val('');
	if($(cat).val() > 0) {
		var categoryPrice = $(cat).find(':selected').attr('data-price');
		var weight = 1;
		if($('#weight').val() == '') {
			$('#weight').val(1);
		} else {
			var weight = $('#weight').val();
		}
		$('#buyprice').val(categoryPrice);
		var totalPrice = parseInt(weight) * parseFloat(categoryPrice);
		$('#totalPrice').val(totalPrice);
	}
}

/* Get scrap total on change weight */
function getScrapAmountOnWeightChange(wgt) {
    if(parseInt($(wgt).val())) {
		if($('#test-dropdown').val() > 0) {
			var categoryPrice = $('#test-dropdown').find(':selected').attr('data-price');
			var weight = parseInt($(wgt).val());
			var totalPrice = parseInt(weight) * parseFloat(categoryPrice);
			$('#totalPrice').val(totalPrice);
		}
	}
}

// File upload name
$(".uploadFile").change(function(e) {
	$(this).parent().find('button').html(e.target.files[0].name);
});
</script>