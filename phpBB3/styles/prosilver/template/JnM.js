jQuery(function($) {
	phpbb.addAjaxCallback('attributes_callback', function(r) {
		if(r.strength) {
			$('#my_strength').html(r.strength);
			$('#my_attributes_to_use').html(r.attributes_to_use);
			if(r.strength == 8) $('#my_strength_button').hide();
			if(r.attributes_to_use == 0) $('.my_attributes_button').hide();
		}
		else if(r.sensoriality) {
			$('#my_sensoriality').html(r.sensoriality);
			$('#my_attributes_to_use').html(r.attributes_to_use);
			if(r.sensoriality == 8) $('#my_sensoriality_button').hide();
			if(r.attributes_to_use == 0) $('.my_attributes_button').hide();
		}
		else if(r.stealth) {
			$('#my_stealth').html(r.stealth);
			$('#my_attributes_to_use').html(r.attributes_to_use);
			if(r.stealth == 8) $('#my_stealth_button').hide();
			if(r.attributes_to_use == 0) $('.my_attributes_button').hide();
		}
		else if(r.swiftness) {
			$('#my_swiftness').html(r.swiftness);
			$('#my_attributes_to_use').html(r.attributes_to_use);
			if(r.swiftness == 8) $('#my_swiftness_button').hide();
			if(r.attributes_to_use == 0) $('.my_attributes_button').hide();
		}
		else if(r.ninjutsu) {
			$('#my_ninjutsu').html(r.ninjutsu);
			$('#my_attributes_to_use').html(r.attributes_to_use);
			if(r.ninjutsu == 8) $('#my_ninjutsu_button').hide();
			if(r.attributes_to_use == 0) $('.my_attributes_button').hide();
		}
		else if(r.taijutsu) {
			$('#my_taijutsu').html(r.taijutsu);
			$('#my_attributes_to_use').html(r.attributes_to_use);
			if(r.taijutsu == 8) $('#my_taijutsu_button').hide();
			if(r.attributes_to_use == 0) $('.my_attributes_button').hide();
		}
		else if(r.genjutsu) {
			$('#my_genjutsu').html(r.genjutsu);
			$('#my_attributes_to_use').html(r.attributes_to_use);
			if(r.genjutsu == 8) $('#my_genjutsu_button').hide();
			if(r.attributes_to_use == 0) $('.my_attributes_button').hide();
		}
	});
	phpbb.addAjaxCallback('first_element_callback', function(r) {
		if(window.confirm("Êtes-vous sûr de choisir l\'élément " + $('#first_element_select').val() + " ? Vous ne pourrez pas le changer !")) {
			window.location.reload(true);
		}
	});
	phpbb.addAjaxCallback('second_element_callback', function(r) {
		if(window.confirm("Êtes-vous sûr de choisir l\'élément " + $('#second_element_select').val() + " ? Vous ne pourrez pas le changer !")) {
			window.location.reload(true);
		}
	});
	phpbb.addAjaxCallback('third_element_callback', function(r) {
		if(window.confirm("Êtes-vous sûr de choisir l\'élément " + $('#third_element_select').val() + " ? Vous ne pourrez pas le changer !")) {
			window.location.reload(true);
		}
	});
	phpbb.addAjaxCallback('first_genjutsu_callback', function(r) {
		window.confirm(`Vous êtes désormais spécialisé dans les Genjutsu de type ${r.first_genjutsu} !`);
		window.location.reload(true);
	});
});