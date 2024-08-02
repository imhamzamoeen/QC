(function (window, document, $) {
    "use strict";

    var dailyLadger = $(".dailyLadger"),
        monthPickerLadger = $(".dt-picker-month"),
        rangeDt = $(".dt-flatpickr-range"),
        exeDate = $(".dt-picker-exeDate"),
        agentSumm = $(".agentSummary");

    // custom pickers here
    if (dailyLadger.length) {
        dailyLadger.flatpickr({ dateFormat: "Y" });
        dailyLadger.attr("readonly", false);
    }

    if (monthPickerLadger.length) {
        monthPickerLadger.flatpickr({ dateFormat: "m" });
        monthPickerLadger.attr("readonly", false);
    }

    if (rangeDt.length) {
        rangeDt.flatpickr({
            mode: "range",
        });
        rangeDt.attr("readonly", false);
    }

    if (exeDate.length) {
        exeDate.flatpickr();
        exeDate.attr("readonly", false);
    }

    if (agentSumm.length) {
        agentSumm.flatpickr();
        agentSumm.attr("readonly", false);
    }
})(window, document, jQuery);
