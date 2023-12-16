new DataTable('#home_table');

let navigation = document.querySelector('.home');

document.querySelector('#collapse-side').onclick = () => {
  navigation.classList.toggle('collapse');
}