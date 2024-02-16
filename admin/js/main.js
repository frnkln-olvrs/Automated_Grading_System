let navigation = document.querySelector('.home');

document.querySelector('#collapse_btn').onclick = (event) => {
  event.stopPropagation();
  navigation.classList.toggle('collapse');
}

document.querySelector("input[type=number]").oninput = e => console.log(
  new Date(e.target.valueAsNumber, 0, 1)
);