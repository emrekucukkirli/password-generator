  function copyFun() {
    var copyText = document.querySelector("#copy_input");
    copyText.select();
    document.execCommand("copy");
  }

const checkbox = document.getElementById('checkbox');
const body = document.body;
checkbox.addEventListener('change', (e) => {
  const isChecked = e.target.checked;

  if(isChecked) {
    body.classList.remove('dark');
  } else {
    body.classList.add('dark');
  }
});
