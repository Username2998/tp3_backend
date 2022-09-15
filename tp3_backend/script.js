function ClearFields() {
  document.getElementById("textfield1").value = "";
  document.getElementById("textfield2").value = "";

}

window.onpageshow = function (event) {
  if (event.persisted || performance.getEntriesByType("navigation")[0].type === 'back_forward') {
    location.reload();
  }
};

