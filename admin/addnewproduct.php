<?php
include('function.php');
user_session();
user_check("");
?>
<?php
include("connection.php");
include('header.php');
?>
 <script language="javascript">
function check()
{
	if(document.form1.product_category.value=="")
  {
    alert("Kindly Select the Category the products fall to");
	document.form1.product_category.focus();
	return false;
  }
 if(document.form1.farm_name.value=="")
  {
    alert("Kindly Select a Farm that owns this product");
	document.form1.farm_name.focus();
	return false;
  }
	if(document.form1.description.value=="")
  {
    alert("Kindly Describe Products in details to the user");
	document.form1.description.focus();
	return false;
  }
if(document.form1.product_name.value=="")
  {
    alert("Product Name cannot be Empty");
	document.form1.product_name.focus();
	return false;
  } 
  if(document.form1.category.value=="")
  {
    alert("Plese Select a Category");
	document.form1.category.focus();
	return false;
  }
  if(document.form1.price.value=="")
  {
    alert("Please Enter a Price");
	document.form1.price.focus();
	return false;
  }
if(document.form1.formerprice.value=="")
  {
    alert("Please Enter Old Price");
	document.form1.fomerprice.focus();
	return false;
  }
  if(document.form1.quantity.value=="")
  {
    alert("The quantity cannot be empty");
	document.form1.quantity.focus();
	return false;
  }
    if(document.form1.size.value=="")
  {
    alert("Kindly Select a Size");
	document.form1.size.focus();
	return false;
  }
  return true;
  }
  
</script>
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>ADD NEW FARM PRODUCTS</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li class="active">FARM MARKET</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<br><br>
     <div class="col-md-12">
        <div class="row">
         <div class="col-lg-2"></div>
              <div class="col-lg-8" >
        <div class="card" style="background-image:url(images/bg.jpg)">
          <div class="card-header">
                   <strong>ADD NEW PRODUCTS</strong>
                                                    </div>
             <form name="form1" onsubmit="return check();" action="productup.php" method="post" enctype="multipart/form-data">
             <div class="card-body card-block">
				    <div class="has-success form-group"><label for="inputIsValid" class=" form-control-label"><b>Product Category</b></label>
               <select name="product_category"  id="inputIsInValid" class="is-Invalid form-control-success form-control" style="text-transform:uppercase">
        <option value="" disabled selected hidden >Please select</option>
         <option value="bulkproduct">BULK PRODUCT</option>
         <option value="singleproduct">SINGLE PRODUCTS</option>
     </select></div>
           <div class="has-success form-group"><label for="inputIsValid" class=" form-control-label"><b>Farm Name</b></label>
               <select name="farm_name"  id="inputIsValid" class="is-valid form-control-success form-control" style="text-transform:uppercase">
        <option value="" disabled selected hidden >Please select</option>
       <?php
$rs=mysqli_query($db_connect,"SELECT * FROM farmersprofile ORDER BY farm_name",$cn);
	  while($row=mysqli_fetch_array($rs))
{
if($row[0]==$id)
{
echo "<option value='$row[1]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[1]'>$row[1]</option>";
}
}
?>
     </select></div>
        <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Product CODE</b></label><input type="text" id="inputIsInvalid" name="product_code" value="<?php
       function random_code ($limit)
       {
           return substr(base_convert (sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
       }
        echo random_code(5);                                                   
        ?>" readonly class="is-invalid form-control"></div>
                
          <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Product Name</b></label><input type="text" name="product_name" id="inputIsValid"  class="is-valid form-control"></div>  
                  <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Product Type</b></label>  <select name="category" id="inputIsInValid" class="is-invalid form-control-success form-control" style="text-transform:uppercase">
                     
        <option value="" disabled selected hidden >Please select</option>
                     <option value="FRUIT">FRUIT</option>
                     <option value="VEGETABLES">VEGETABLES</option>
                     <option value="CEREALS">CEREALS</option>
                     <option value="GRAIN">GRAIN</option>
                      <option value="TUBERS">TUBERS</option>
                      <option value="CASHCROPS&OTHERS">CASH CROPS</option>
                      <option value="SEAFOODS">SEA FOODS</option>
                      <option value="OTHERS">OTHERS</option>
                     </select></div>
                    <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Price</b></label><input type="text" name="price" id="inputIsValid"  class="is-valid form-control"></div> 
				 <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Former Price</b></label><input type="text" name="formerprice" id="inputIsValid"  class="is-valid form-control"></div> 
                 <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Size </b></label>  <select name="size" id="inputIsInValid" class="is-invalid form-control-success form-control" style="text-transform:uppercase">
                     
        <option value="" disabled selected hidden >Please select</option>
                     <option value="SMALL">Small</option>
                     <option value="MEDIUM">Medium</option>
                     <option value="LARGE">Large</option>
                     <option value="XTRA LARGE">XLarge</option>
                     </select></div>
          <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Quantity</b></label><input type="text" name="quantity" id="inputisValid" class="is-valid form-control"></div>
				 <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Product Description</b></label><textarea type="text" name="description" id="textarea-input inputisValid" rows="6" class="is-valid form-control"></textarea></div>
            <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Expiry Date</b></label><input type="date" name="expiry_date" id="inputisInvalid" class="is-invalid form-control"></div>
                 
             <div class="has-warning form-group"><label for="inputIsValid" class=" form-control-label"><b>Date of Receive</b></label><input type="text" name="receive_date" readonly id="inputisValid" value="<?php
        echo date(DATE_RFC822);                                                  
        ?>" class="is-valid form-control"></div>
                 <div class="form-group">
                 <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-camera"></i></div>
          <b><i>Upload Product Picture </i></b>  <input type="file"  id="image" name="image">         
     </div>
                </div>
                  <div class="form-actions form-group">  <button name="submit" type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> ADD NEW PRODUCT
                                                        </button>
                 
                                                    </div>
                  </form>
                                                </div>
           
                                            </div>
            <div class="col-lg-2"></div>
         </div>    
    </div>

<?php
include('footer.php');
?>