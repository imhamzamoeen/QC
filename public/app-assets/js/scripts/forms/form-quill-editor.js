(function (window, document, $) {
    "use strict";

    var Font = Quill.import("formats/font");
    Font.whitelist = ["sofia", "slabo", "roboto", "inconsolata", "ubuntu"];
    Quill.register(Font, true);

    var snowEditor = new Quill("#snow-container .editor", {
        bounds: "#snow-container .editor",
        modules: {
            formula: true,
            syntax: true,
            toolbar: "#snow-container .quill-toolbar",
        },
        theme: "snow",
    });

    var editors = [snowEditor];
})(window, document, jQuery);
