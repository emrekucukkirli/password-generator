  function copyFun() {
    var copyText = document.querySelector("#copy_input");
    copyText.select();
    document.execCommand("copy");
  }
  
  document.querySelector("#copy_btn").addEventListener("click", copy);