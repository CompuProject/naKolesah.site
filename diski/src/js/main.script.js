$(document).ready(function () {

    // smooth scroll
    $("a.scrollto").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top - 150;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination
        }, 800);
        return false;
    });

    //input range init
    $(".range-example-start").asRange({
        step: 1000,
        range: false,
        min: 1000,
        max: 80000,
        value: 39000
    });

    function changeOnlineSelectionSteps() {
        let i;
        for (i = 1; i <= 4; i++) {
            let currentStep = $(`#step${i}`),

                prevStepNumber = i - 1,
                prevStep = $(`#step${prevStepNumber}`),
                prevButton = currentStep.find('.js-prev-step'),

                nextStepNumber = i + 1,
                nextStep = $(`#step${nextStepNumber}`),
                nextButton = currentStep.find('.js-next-step');

            if (prevButton) {
                prevButton.on('click', (e) => {
                    console.log('кря');
                    e.preventDefault();
                    currentStep.fadeOut('fast');
                    prevStep.fadeIn('slow');
                })
            }

            if (nextButton) {
                nextButton.on('click', (e) => {
                    e.preventDefault();
                    currentStep.fadeOut('fast');
                    nextStep.fadeIn('slow');
                })
            }

        }
    }


    changeOnlineSelectionSteps();

});


