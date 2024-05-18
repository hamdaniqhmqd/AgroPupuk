const inputPw = document.querySelector(".input-box #pass");
// const ConfirLab = document.querySelector(".input-box #labelconf");
const confirmPw = document.querySelector(".input-box #conf_pass");
const passIcon = document.querySelector("#pass_icon");
const confIcon = document.querySelector("#conf_icon");
const alertIcon = document.querySelector(".peringatan .error_icon");
const alertText = document.querySelector(".peringatan .pesan");
const submitBtn = document.querySelector("#button");
const label = document.querySelector(".input-box #labelconf");

passIcon.addEventListener("click", () => {
  if (inputPw.type === "password") {
    inputPw.type = "text";
    passIcon.classList.replace("fa-eye-slash", "fa-eye");
  } else {
    inputPw.type = "password";
    passIcon.classList.replace("fa-eye", "fa-eye-slash");
  }
});

confIcon.addEventListener("click", () => {
  if (confirmPw.type === "password") {
    confirmPw.type = "text";
    confIcon.classList.replace("fa-eye-slash", "fa-eye");
  } else {
    confirmPw.type = "password";
    confIcon.classList.replace("fa-eye", "fa-eye-slash");
  }
});

inputPw.addEventListener("input", () => {
  let inputValue = inputPw.value.trim();

  if (inputValue.length >= 8) {
    confirmPw.removeAttribute("disabled");
    confirmPw.classList.remove("active");
    label.classList.add("active");
    submitBtn.removeAttribute("disabled");
    submitBtn.classList.add("active");
  } else {
    confirmPw.setAttribute("disabled", true);
    confirmPw.classList.add("active");
    label.classList.remove("active");
    submitBtn.setAttribute("disabled", true);
    submitBtn.classList.remove("active");

    confirmPw.value = "";
    alertText.style.color = "#a6a6a6";
    alertText.innerText = "Enter at least 8 characters";
    alertIcon.style.display = "none";
  }
});

submitBtn.addEventListener("click", () => {
  if (inputPw.value === confirmPw.value) {
    alertText.innerText = "Password matched";
    alertIcon.style.display = "none";
    alertText.style.color = "var(--green-color)";
  } else {
    alertText.innerText = "Password didn't matched";
    alertIcon.style.display = "block";
    alertText.style.color = "var(--red-color)";
  }
});
