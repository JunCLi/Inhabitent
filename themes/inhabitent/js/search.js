const searchToggle = document.getElementsByClassName('search-toggle');

for (let i = 0; i < searchToggle.length; i++) {
  const searchField = document.getElementsByClassName('search-field');

  document.addEventListener('click', event => {

    let toggleSearchField = false;
    let isSearchField = false;
    let oneNodeUp = event.target;

    while(oneNodeUp.parentNode !== document) {

      if (oneNodeUp.classList.contains('search-toggle')) {
        toggleSearchField = true;
      }

      if (oneNodeUp.classList.contains('search-field')) {
        isSearchField = true;
      }

      oneNodeUp = oneNodeUp.parentNode;
    }
      if (toggleSearchField) {
        for (let k = 0; k < searchField.length; k++) {
          if (searchField[k].classList.contains('show-search') && !isSearchField) {
            searchField[k].classList.remove('show-search');
          } else {
            searchField[k].classList.add('show-search');
          }
        }
      } else {
        for (let k = 0; k < searchField.length; k++) {
          if (searchField[k].classList.contains('show-search')) {
            searchField[k].classList.remove('show-search');
          }
        }
      }
  });
}