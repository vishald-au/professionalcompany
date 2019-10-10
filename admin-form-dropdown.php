
	<script>$(document) .ready(function(){$('.ui.selection.dropdown').dropdown(); $('.ui.menu .ui.dropdown').dropdown({on: 'hover'});}) ; </script>
    <script type="text/javascript">

        jQuery(document).ready(function () {
            var currentTime = new Date();
            var month = currentTime.getMonth();
            var day = currentTime.getDate();
            var year = currentTime.getFullYear();
            jQuery('#demo2').datepicker({
                minDate: new Date(year, month, day),
                dateFormat: 'mm-dd-yy',
                constrainInput: true,
                changeMonth: true,
                changeYear: true
            });
        });
    </script>

<form action="admin-email.php" method="post" class="moving-form" id="move_type_form" style="  z-index: 1;">
<div id="div_error" style="display:block;color:#4e4e4e; padding-left:6%; font-weight:bold;" class="err"><b></b></div>

<div class="row">   
    <div class="col-sm-6 low-padd">
<input class="main-inp main-inp1" type="number" name="from" id="from" placeholder="From (zip only)" required>

    </div>
    <div class="col-sm-6 low-padd">
<input class="main-inp main-inp1" type="number" name="to" id="to" placeholder="To (zip only)" required>

    </div>
    <div class="col-sm-10 low-padd">
	       <div class="ui selection dropdown mdrop main-inp">
    <input type="hidden" name="size_of_move" id="movesize" required>
    <i class="dropdown icon"></i>
    <div class="default text">Moving Size</div>
    <div class="menu">
        <div class="item" data-value="1">Studio</div>
        <div class="item" data-value="2">1 Bedroom</div>
        <div class="item" data-value="5">2 Bedroom</div>
        <div class="item" data-value="8">3 Bedroom</div>
        <div class="item" data-value="10">4 Bedroom</div>
        <div class="item" data-value="11">5+ Bedroom</div>
        <div class="item" data-value="3">Small Office</div>
        <div class="item" data-value="6">Medium Office</div>
        <div class="item" data-value="12">Large Office</div>
        <div class="item" data-value="4">Small storage (5x5, 5x8, 5x10)</div>
        <div class="item" data-value="7">Medium storage (10x10, 10x15)</div>
        <div class="item" data-value="9">Large storage (10x20)</div>
    </div>
</div>

</div>
    <div class="col-sm-2 low-padd">
<input type="text" class="main-inp" name="date_of_move" id="demo2" placeholder="Moving Date" required>
    </div>
    <div class="col-sm-6 low-padd">
<input class="main-inp" type="text" name="first_name" placeholder="First Name" required>
    </div>
    <div class="col-sm-6 low-padd">
<input class="main-inp" type="text" name="last_name" placeholder="Last Name" required>
    </div>
    <div class="col-sm-6 low-padd">
<input class="main-inp" type="text" name="phone" id="phone" placeholder="Phone Number" required>
    </div>
    <div class="col-sm-6 low-padd">
<input class="main-inp" type="text" name="email" placeholder="Email Address" id="email">
    </div>
    <div class="col-sm-12 low-padd text-right">
    <input class="sub-inp" type="submit" value="Get Estimate">
</div>
</div>
    
</form>
 

	<script type="text/javascript">
	$(document) .ready(function(){
	$.validator.addMethod("zipcode", function(value, element) {
  return this.optional(element) || /^\d{5}(?:-\d{4})?$/.test(value);
}, "Please provide a valid zipcode.");
$.validator.addMethod("validemail", function(value, element) {
  return this.optional(element) || /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(value);
}, "Please enter a valid email.");

			$("#move_type_form").validate({
				rules: {
			from: {
			  required: true,
			  maxlength: 5,
			  minlength: 5,
			  zipcode: true
			},
			to: {
			  required: true,
			  maxlength: 5,
			  minlength: 5,
			  zipcode: true,
			},
					phone: {
						required: true,
					},
					email: {
      					required: true,
      					email: true,
						validemail:true,
    				}
				}
			});
		});
		 $(window).load(function()
    {
       var phones = [{ "mask": "(###) ###-###"}, { "mask": "(###) ###-####"}];
        $('#phone').inputmask({ 
            mask: phones, 
            greedy: false, 
            definitions: { '#': { validator: "[0-9]", cardinality: 1}} });
    });
	</script>
 
 