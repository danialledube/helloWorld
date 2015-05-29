jQuery(document).ready(function() {	

	jQuery("#registration").submit(function() {
			var isValid = true;
			if ((jQuery("#firstName").val() == null) || (jQuery("#firstName").val() == "")) {
				jQuery("#firstNameError").removeClass("hidden");
				isValid = false;
			} else {
				jQuery("#firstNameError").addClass("hidden");
			}
			if ((jQuery("#lastName").val() == null) || (jQuery("#lastName").val() == "")) {
				jQuery("#lastNameError").removeClass("hidden");
				isValid = false;
			} else {
				jQuery("#lastNameError").addClass("hidden");
			}
			if ((jQuery("#address").val() == null) || (jQuery("#address").val() == "")) {
				jQuery("#addressError").removeClass("hidden");
				isValid = false;
			} else {
				jQuery("#addressError").addClass("hidden");
			}
			if ((jQuery("#city").val() == null) || (jQuery("#city").val() == "")) {
				jQuery("#cityError").removeClass("hidden");
				isValid = false;
			} else {
				jQuery("#cityError").addClass("hidden");
			}
			if ((jQuery("#state").val() == null) || (jQuery("#state").val() == "")) {
				jQuery("#stateError").removeClass("hidden");
				isValid = false;
			} else {
				jQuery("#stateError").addClass("hidden");
			}
			if ((jQuery("#zip").val() == null) || (jQuery("#zip").val() == "") || !(isValidUSZip(jQuery("#zip").val()))){
				jQuery("#zipError").removeClass("hidden");
				isValid = false;
			} else {
				jQuery("#zipError").addClass("hidden");
			}
			if ((jQuery("#country").val() == null) || (jQuery("#country").val() == "")) {
				jQuery("#countryError").removeClass("hidden");
				isValid = false;
			} else {
				jQuery("#countryError").addClass("hidden");
			}
			return isValid;			
	})
})



function isValidUSZip(sZip) {
   return /^\d{5}(-\d{4})?$/.test(sZip);
}

