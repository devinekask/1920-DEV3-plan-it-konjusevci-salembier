require('./style.css');

{
  //Array with all the 'planner' sections used for input flow
  let planningArray = [];

  const init = () => {
    const $steps = document.querySelectorAll('.step');
    const $doc = document.getElementsByClassName('planning--stap1');

    if ($doc.length !== 0) {
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
  };

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


  init();
}