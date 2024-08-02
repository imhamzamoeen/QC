$('.factor_checkbox').click(function (e) {

    if ($(this).prop("checked") == true) {
        $('.' + $(this).val() + '_true_row').show()


        //here we will add dyanmic validation to the form 
        if ($(this).val() == 'whole_factor') {

            $('#factor_detail_form').validate().settings.rules.annual_mode_factor_whole = {
                required: true,
                number:true
            };
            $('#factor_detail_form').validate().settings.rules.policy_fee_annual_whole = {
                required: true,
                number:true
            };

            $('#factor_detail_form').validate().settings.rules.semi_annual_mode_factor_whole = {
                required: true,
                number:true
            };
            $('#factor_detail_form').validate().settings.rules.policy_fee_semi_annual_whole = {
                required: true,
                number:true
            };

            $('#factor_detail_form').validate().settings.rules.quarterly_mode_factor_whole = {
                required: true,
                number:true
            };
            $('#factor_detail_form').validate().settings.rules.policy_fee_quarterly_whole = {
                required: true,
                number:true
            };

            $('#factor_detail_form').validate().settings.rules.monthly_mode_factor_whole = {
                required: true,
                number:true
            };
            $('#factor_detail_form').validate().settings.rules.policy_fee_monthly_whole = {
                required: true,
                number:true
            };

        } else {

            $('#factor_detail_form').validate().settings.rules.annual_mode_factor_term = {
                required: true,
                number:true
            };
            $('#factor_detail_form').validate().settings.rules.policy_fee_annual_term = {
                required: true,
                number:true
            };

            $('#factor_detail_form').validate().settings.rules.semi_annual_mode_factor_term = {
                required: true,
                number:true
            };
            $('#factor_detail_form').validate().settings.rules.policy_fee_semi_annual_term = {
                required: true,
                number:true
            };

            $('#factor_detail_form').validate().settings.rules.quarterly_mode_factor_term = {
                required: true,
                number:true
            };
            $('#factor_detail_form').validate().settings.rules.policy_fee_quarterly_term = {
                required: true,
                number:true
            };

            $('#factor_detail_form').validate().settings.rules.monthly_mode_factor_term = {
                required: true,
                number:true
            };
            $('#factor_detail_form').validate().settings.rules.policy_fee_monthly_term = {
                required: true,
                number:true
            };

        }


    } else {
        $('.' + $(this).val() + '_true_row').hide()
    }


});
