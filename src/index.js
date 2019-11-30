require('./style.css');

{
  let planningArray = [];

  const init = () => {
    const $doc = document.getElementsByClassName('planning--stap1');

    if ($doc.length !== 0) {
      planningArray = Array.from(document.querySelectorAll('.planning'));

      document.querySelectorAll('.button').forEach($button => {
        $button.addEventListener('click', handleClickEvent);
      });
      hideMenus();
    }
  };

  const handleClickEvent = e => {
    if (planningArray.length <= 1) { return; }
    e.preventDefault();
    nextStep();
  };

  const nextStep = () => {
    planningArray.shift().style.display = 'none';
    planningArray[0].style.display = '';
  };

  const hideMenus = () => {
    planningArray.forEach($section => {
      $section.style.display = 'none';
    });
    planningArray[0].style.display = '';
  };

  init();
}
