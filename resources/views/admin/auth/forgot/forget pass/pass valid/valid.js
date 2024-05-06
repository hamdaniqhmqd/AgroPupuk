const input = document.getElementById("tgl");
const icon = document.getElementById('tgl_icon');

icon.addEventListener('click', function() {
  input.type = 'date';
  input.focus();
});

input.addEventListener("focus", function () {
  if (input.value === "") {
    input.type = "date";
  }
});

input.addEventListener("blur", function () {
  if (input.value === "") {
    input.type = "text";
  }
});

