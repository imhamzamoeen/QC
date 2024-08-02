
function FactorCalculateSuccess(response)
{
    // console.log(response);
    $('.annaul_price').html('Annual : '+response.response.data.annual_rate+'$' );
    $('.semi_annual_price').html('Semi Annual : '+response.response.data.semi_annual_rate+'$');
    $('.monthly_price').html('Monthly : '+response.response.data.monthly_rate+'$');

    $('.adb_factor_point').html(response.response.data.adb_rider);
    $('.semi_annual_child_factor_point').html(response.response.data.semi_annual_child_rider);
    $('.annual_child_factor_point').html(response.response.data.annual_child_rider);
    $('.monthly_child_factor_point').html(response.response.data.monthly_child_rider);
    $('.legacy_factor_point').html(response.response.data.legacy_rider);

}