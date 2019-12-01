require('./style.css');

{
  //Array with all the 'planner' sections used for input flow
  let planningArray = [];

  const init = () => {
    /* EVERYTHING ABOUT STEP CHANING/NEXT STEPS VIA JS */
    const $steps = document.querySelectorAll('.step');
    const $doc = document.getElementsByClassName('planning--stap1');

    if ($doc.length > 0) {
      //Trigger when planning sections are found and when there's a next needed in JS
      planningArray = Array.from(document.querySelectorAll('.planning'));

      document.querySelectorAll('.button').forEach($button => {
        $button.addEventListener('click', handleButtonClickEvent);
      });
      //Trigger when clicking on steps at the top
      if ($steps) {
        $steps.forEach($step => {
          $step.addEventListener('click', handleStepClickEvent);
        });
      }
      hideMenus();
    }

    /* EVERYTHING ABOUT SLIDERS ON STEP 2 */

    const $sliders = document.querySelectorAll('.slider');
    if ($sliders.length > 0) {
      $sliders.forEach($slider => {
        $slider.addEventListener('change', handleSliderChangeEvent);
      });
    }

    /* EVERYTHING ABOUT TEMPLATE-DETAILPAGE */

    const $info = document.querySelector('.information-template--workout');
    if ($info) {
      $info.addEventListener('click', handleInfoClickEvent);
    }
  };

  /* EVERYTHING ABOUT STEP CHANING/NEXT STEPS VIA JS */

  const handleButtonClickEvent = e => {
    //First checks if it's the last button before preventing default
    if (planningArray.length <= 1) { return; }
    e.preventDefault();
    nextStep();
  };

  const nextStep = () => {
    //Set display of current section to none and reveal next section
    planningArray.shift().style.display = 'none';
    planningArray[0].style.display = '';
  };

  const handleStepClickEvent = e => {
    e.preventDefault();
    resetPlanningArray(e.toElement.dataset.plannerClass);
  };

  const resetPlanningArray = current => {
    //Edits planningArray depending on what the current location is after changing step
    planningArray = [];
    Array.from(document.querySelectorAll('.planning')).forEach($section => {
      if ($section.className === current || planningArray.length > 0) {
        planningArray.push($section);
      }
    });
    hideMenus(current);
  };

  const hideMenus = (current = planningArray[0].className) => {
    const initialPlanningArray = Array.from(document.querySelectorAll('.planning'));
    //Reset all section displays to normal
    initialPlanningArray.forEach($section => {
      $section.style.display = '';
    });

    //Hide all sections except the one we are looking at right now
    initialPlanningArray.forEach($section => {
      if ($section.className !== current) {
        $section.style.display = 'none';
      }
    });
  };

  /* EVERYTHING ABOUT SLIDERS ON STEP 2 */

  const handleSliderChangeEvent = e => {
    changeValues(e.currentTarget);
  };

  const changeValues = e => {
    const $inputs = Array.from(document.getElementsByClassName('input__step2'));
    const inputs = [];

    $inputs.forEach($input => {
      if ($input.classList[1] === undefined) {
        inputs.push($input);
      }
    });

    inputs.forEach(input => {
      if (input.name === e.id) {
        input.value = e.value;
      }
    });
  };

  /* EVERYTHING ABOUT TEMPLATE-DETAILPAGE */

  const handleInfoClickEvent = () => {
    const $info = document.querySelector('.information-js');
    $info.classList.toggle('hidden');
  };

  init();
}