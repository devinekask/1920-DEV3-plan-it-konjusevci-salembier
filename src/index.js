require('./style.css');

{
  let planningArray = [];

  const init = () => {
    const $doc = document.querySelector('main');

    if ($doc.querySelector('h2') && $doc.querySelector('h2').textContent === 'Planning') {
      planningArray = $doc.querySelectorAll('.planning');
      $doc.querySelectorAll('.button').forEach($button => {
        $button.addEventListener('click', handleClickEvent);
      });
      hideMenus();
    }
  };

  const handleClickEvent = e => {
    if (e.path[2].className === 'planning planning--stap3') { return; }
    e.preventDefault();
    nextStep(e);
  };

  const nextStep = e => {
    e.path[3].style.display = 'none';
    console.log(e.path[3].nextSibling);
    e.path[3].nextSibling.nextSibling.style.display = '';
  };

  const hideMenus = () => {
    planningArray.forEach($section => {
      if ($section.className === 'planning planning--stap1') { true; } else {
        $section.style.display = 'none';
      }
    });
  };

  init();
}
