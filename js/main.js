jQuery(document).ready(function ($) {
    $(function() {

        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('#content').addClass('fixed-content');
            } else {
                $('#content').removeClass('fixed-content');
            }
        }); 

        $(document).find(
            'input[name="entity[address2_line1]"], \
             input[name="entity[address2_line2]"], \
             input[name="entity[address2_line3]"], \
             input[name="entity[address2_city]"], \
             input[name="entity[address2_stateorprovince]"], \
             input[name="entity[address2_country]"], \
             select[name="entity[purchasetimeframe]"]'
        ).closest('.form-group').remove();

        $(document).find('input[name="entity[address2_postalcode]"]').eq(1).closest('.form-group').remove();

        $(document).find('select[name="entity[dmc_leadsource]"] option').filter(function() {
            if($(this).text() == 'Web') {
                $(this).prop('selected', true);
            }
        });
    });

    $(function() {
        var options = [];

        $(document).find('select[name="entity[dmc_movetype]"] option').filter(function() {
            if($(this).text() == 'Commercial Office Move') {
                $(this).text('Commercial');
                options.push($(this));
            }
            if($(this).text() == 'Department of State HHG Shipment') {
                $(this).text('Government');
                options.push($(this));
            }
            if($(this).text() == 'Local HHG Shipment') {
                $(this).text('Household');
                options.push($(this));
            }
            if($(this).text() == 'Warehousing and Storage Services') {
                $(this).text('Storage');
                options.push($(this));
            }
        });

        $(document).find('select[name="entity[dmc_movetype]"] option').remove();
        $(document).find('select[name="entity[dmc_movetype]"]').append('<option></option>');
        $(document).find('select[name="entity[dmc_movetype]"]').append(options);
        $(document).find('select[name="entity[dmc_movetype]"] option:first').prop('selected', true);

    });

    $(function() {
        // This logic aims to identify any links with a class that ends in "async-email".
        // Identified links will have a new "mailto:" href applied asynchronously to the element.
        $('.team__section a[class$="async-email"]').each(function() {
            var classes = $(this).attr('class').split(" ");
            for(var i = 0; i < classes.length; i++) {
                var classSplit = classes[i].split("-");
                if (classSplit[1] != 'async' || classSplit[2] != 'email') continue;
                var emailHref = 'mailto:' + classSplit[0] + '@districtmoving.com';
                $(this).attr('href', emailHref);
                break;
            }
        });
    });
     
}); 


