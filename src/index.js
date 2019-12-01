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

    /* EVERYTHING ABOUT WORKOUTS ON STEP 1 AND EXERCISES DERIVED FROM WORKOUTS */

    const $workouts = document.querySelectorAll('.workout');
    if ($workouts.length > 0) {
      $workouts.forEach($workout => {
        $workout.addEventListener('click', handleWorkoutClickEvent);
      });
    }

    /* EVERYTHING ABOUT SLIDERS ON STEP 2 */

    const $sliders = document.querySelectorAll('.slider');
    if ($sliders.length > 0) {
      $sliders.forEach($slider => {
        $slider.addEventListener('change', handleSliderChangeEvent);
      });
    }
    /* EVERYTHING ABOUT TEMPLATE-DETAILPAGE */

    const $infos = document.querySelectorAll('.information-template--workout');
    if ($infos.length > 0) {
      $infos.forEach($info => {
        $info.addEventListener('click', handleInfoClickEvent);
      });
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


  /* EVERYTHING ABOUT WORKOUTS ON STEP 1 AND EXERCISES DERIVED FROM WORKOUTS */
  const handleWorkoutClickEvent = e => {
    const $form = document.querySelector('form');
    const url = `${$form.getAttribute('action')}?page=planner&workout=${e.currentTarget.dataset.id}`;
    fetch(url, {
      headers: new Headers({
        Accept: 'application/json'
      })
    })
      .then(res => {
        return res.json();
      })
      .then(json => {
        updateExercises(json);
        // Do something with the returned data.
      });
  };

  const updateExercises = exercises => {
    const $doing = document.querySelector('.doing__wrapper');
    const $notDoing = document.querySelector('.not__doing');
    $doing.innerHTML = '';
    $notDoing.innerHTML = '';
    exercises.forEach(exercise => {
      console.log(exercise);
      const $el = document.createElement('label');
      $el.classList.add('doing');
      $el.for = exercise.info;
      $el.innerHTML = `${exercise.info}<input checked id='${exercise.info}' name="exercises_id[]" value="${exercise.id}" type="checkbox" class="doing checkbox__button">`;
      $doing.append($el);
    });
    const $doingItems = document.querySelectorAll('.doing');
    $doingItems.forEach($item => {
      $item.addEventListener('click', handleItemClickEvent);
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

  /* EVERYTHING ABOUT (NOT) DOS ON STEP 3 */

  const handleItemClickEvent = e => {
    const $doing = document.querySelector('.doing__wrapper');
    const $notDoing = document.querySelector('.not__doing');
    if (e.path[1] === $notDoing) {
      $doing.appendChild(e.currentTarget);
    }

    if (e.path[1] === $doing) {
      $notDoing.appendChild(e.currentTarget);
    }
  };

  /* EVERYTHING ABOUT TEMPLATE-DETAILPAGE */

  const handleInfoClickEvent = () => {
    const $infos = document.querySelectorAll('.information-js');
    $infos.forEach($info => {
      $info.classList.toggle('hidden');
    });
  };

  init();
}