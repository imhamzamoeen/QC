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

   
    // Modern Vertical Wizard
    // --------------------------------------------------------------------
    if (typeof modernVerticalWizard !== undefined && modernVerticalWizard !== null) {
      var modernVerticalStepper = new Stepper(modernVerticalWizard, {
        linear: false
      });
      $(modernVerticalWizard)
        .find('.btn-next')
        .on('click', function () {
          if ($('#register-user-personal-detail-form').valid()){
          modernVerticalStepper.next();
          }
        });
      $(modernVerticalWizard)
        .find('.btn-prev')
        .on('click', function () {
          modernVerticalStepper.previous();
        });
  
      $(modernVerticalWizard)
        .find('.btn-submit')
        .on('click', function () {
          var formData= new FormData($('#register-additional-detail-form')[0]);
          var GlobalForm= new FormData($('#register-user-personal-detail-form')[0]);
          for (let [key, value] of formData) {
            
            GlobalForm.append(key, value); 
          }
          // for (let [key, value] of GlobalForm) {
          //   console.log(`${key}: ${value}`)
          // }
          if ($('#register-additional-detail-form').valid()){
          Ajax_Call_Dynamic(route,'POST',GlobalForm,"RegisterSuccess","RegisterFailed");
    
        }
         
        });
    }
  });
  