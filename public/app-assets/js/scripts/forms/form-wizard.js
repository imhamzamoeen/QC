/*=========================================================================================
    File Name: form-wizard.js
    Description: wizard steps page specific js
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function () {
    'use strict';

    var bsStepper = document.querySelectorAll('.bs-stepper'),
        select = $('.select2'),
        horizontalWizard = document.querySelector('.horizontal-wizard-example'),
        verticalWizard = document.querySelector('.vertical-wizard-example'),
        modernWizard = document.querySelector('.modern-wizard-example'),
        modernVerticalWizard = document.querySelector('.modern-vertical-wizard-example');

    // Adds crossed class
    if (typeof bsStepper !== undefined && bsStepper !== null) {
        for (var el = 0; el < bsStepper.length; ++el) {
            bsStepper[el].addEventListener('show.bs-stepper', function (event) {
                var index = event.detail.indexStep;
                var numberOfSteps = $(event.target).find('.step').length - 1;
                var line = $(event.target).find('.step');

                // The first for loop is for increasing the steps,
                // the second is for turning them off when going back
                // and the third with the if statement because the last line
                // can't seem to turn off when I press the first item. ¯\_(ツ)_/¯

                for (var i = 0; i < index; i++) {
                    line[i].classList.add('crossed');

                    for (var j = index; j < numberOfSteps; j++) {
                        line[j].classList.remove('crossed');
                    }
                }
                if (event.detail.to == 0) {
                    for (var k = index; k < numberOfSteps; k++) {
                        line[k].classList.remove('crossed');
                    }
                    line[0].classList.remove('crossed');
                }
            });
        }
    }

    // select2
    select.each(function () {
        var $this = $(this);
        $this.wrap('<div class="position-relative"></div>');
        $this.select2({
            placeholder: 'Select value',
            dropdownParent: $this.parent()
        });
    });

    // Horizontal Wizard
    // --------------------------------------------------------------------
    if (typeof horizontalWizard !== undefined && horizontalWizard !== null) {
        var numberedStepper = new Stepper(horizontalWizard),
            $form = $(horizontalWizard).find('form');
        $form.each(function () {
            var $this = $(this);
            $this.validate({
                rules: {
                    phone: {
                        required: false,
                        maxlength: 14,
                        minlength: 14,
                    },
                    first_name: {
                        required: false
                    },
                    company: {
                        required: true
                    },
                    last_name: {
                        required: false
                    },
                    user_email: {
                        required: false,
                        email: true,
                    },
                    gender: {
                        required: true,
                    },
                    policy_type: {
                        required: true,
                    },
                    'sub_policy_type[]': {
                        required: true,
                    },
                    policy_level: {
                        required: true,
                    },
                    coverage: {
                        required: true,
                    },
                    childrens: {
                        required: true,
                        number: true,
                        min: 1,
                        max: 20,
                    },
                    country: {
                      required: true,
                    },
                    state: {
                        required: true,
                    },
                    features: {
                        required: true
                    },
                    pic: {
                        required: true,
                    },
                    "Company_features[0]": {
                        required: true,

                    },

                    username: {
                        required: true
                    },
                    email: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                    'highlights':{
                        required: true,
                    },
                    'confirm-password': {
                        required: true,
                        equalTo: '#password'
                    },
                    'first-name': {
                        required: true
                    },
                    'last-name': {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    landmark: {
                        required: true
                    },
                    language: {
                        required: true
                    },
                    twitter: {
                        required: true,
                        url: true
                    },
                    facebook: {
                        required: true,
                        url: true
                    },
                    google: {
                        required: true,
                        url: true
                    },
                    linkedin: {
                        required: true,
                        url: true
                    }
                },
                messages: {
                    image: {
                        required: "Please upload a image.",
                        extension: "Please upload file in these format only (jpg, jpeg, png, ico, bmp)."
                    }
                },
                errorPlacement: function (error, element) {
                    //Custom position: first name
                    if (element.attr("name") == "age")
                        error.insertAfter(".demo-inline-spacing");

                    else
                        error.insertAfter(element);
                },
            });
        });

        $(horizontalWizard)
            .find('.btn-next')
            .each(function () {
                $(this).on('click', function (e) {
                    var quote_check = $(this).parent().siblings('form');
                    if (quote_check[0] == undefined) { //agr form nhe h tu beghair validation k agy jany do
                        // alert("form nhe ");
                        numberedStepper.next();
                    } else {
                        // alert("form h yeh pkro isy");
                        FormSumit();
                        // var isValid =quote_check.valid();
                        // if (isValid) {
                        //   FormSumit();
                        //   numberedStepper.next();
                        // } else {

                        //   e.preventDefault();
                        // }
                    }


                });
            });

        $(horizontalWizard)
            .find('.btn-prev')
            .on('click', function () {
                numberedStepper.previous();
            });

        $(horizontalWizard)
            .find('.btn-submit')
            .on('click', function () {
                var isValid = $(this).parent().siblings('form').valid();
                if (isValid) {
                    alert('Submitted..!!');
                }

            });
    }

    // Vertical Wizard
    // --------------------------------------------------------------------
    if (typeof verticalWizard !== undefined && verticalWizard !== null) {
        var verticalStepper = new Stepper(verticalWizard, {
            linear: false
        });
        $(verticalWizard)
            .find('.btn-next')
            .on('click', function () {
                verticalStepper.next();
            });
        $(verticalWizard)
            .find('.btn-prev')
            .on('click', function () {
                verticalStepper.previous();
            });

        $(verticalWizard)
            .find('.btn-submit')
            .on('click', function () {
                alert('Submitted..!!');
            });
    }

    // Modern Wizard
    // --------------------------------------------------------------------
    if (typeof modernWizard !== undefined && modernWizard !== null) {
        var modernStepper = new Stepper(modernWizard, {
            linear: false
        });
        $(modernWizard)
            .find('.btn-next')
            .on('click', function () {
                modernStepper.next();
            });
        $(modernWizard)
            .find('.btn-prev')
            .on('click', function () {
                modernStepper.previous();
            });

        $(modernWizard)
            .find('.btn-submit')
            .on('click', function () {
                alert('Submitted..!!');
            });
    }

    // Modern Vertical Wizard
    // --------------------------------------------------------------------
    if (typeof modernVerticalWizard !== undefined && modernVerticalWizard !== null) {
        var modernVerticalStepper = new Stepper(modernVerticalWizard, {
            linear: true
        });
        $(modernVerticalWizard)
            .find('.btn-next')
            .on('click', function () {
                modernVerticalStepper.next();
            });
        $(modernVerticalWizard)
            .find('.btn-prev')
            .on('click', function () {
                modernVerticalStepper.previous();
            });

        $(modernVerticalWizard)
            .find('.btn-submit')
            .on('click', function () {
                alert('Submitted..!!');
            });
    }
});
