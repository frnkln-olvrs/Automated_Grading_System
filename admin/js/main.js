let navigation = document.querySelector('.home');


// Function to handle collapse toggle
function toggleCollapse() {
  let navigation = document.querySelector('.home');
  navigation.classList.toggle('collapse');
  
  // Store collapse state in localStorage
  localStorage.setItem('sidebarCollapsed', navigation.classList.contains('collapse'));
}

// Check if sidebar should be collapsed or expanded on page load
document.addEventListener('DOMContentLoaded', function() {
  let isSidebarCollapsed = localStorage.getItem('sidebarCollapsed');

  if (isSidebarCollapsed === 'true') {
    let navigation = document.querySelector('.home');
    navigation.classList.add('collapse');
  }
});

// Attach click event listener to collapse button
document.querySelector('#collapse_btn').addEventListener('click', function(event) {
  event.stopPropagation();
  toggleCollapse();
});

document.querySelector("input[type=number]").oninput = e => console.log(
  new Date(e.target.valueAsNumber, 0, 1)
);