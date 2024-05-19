const inputPw = document.querySelector(".input-box #pass");
const passIcon = document.querySelector("#pass_icon");
const inputConfPw = document.querySelector(".input-box #conf_pass");
const ConfPassIcon = document.querySelector("#confpass_icon");
const label = document.querySelector(".input-box #labelconfpass");

passIcon.addEventListener("click", () => {
    if (inputPw.type === "password") {
        inputPw.type = "text";
        passIcon.classList.replace("fa-eye-slash", "fa-eye");
    } else {
        inputPw.type = "password";
        passIcon.classList.replace("fa-eye", "fa-eye-slash");
    }
});

ConfPassIcon.addEventListener("click", () => {
    if (inputConfPw.type === "password") {
        inputConfPw.type = "text";
        ConfPassIcon.classList.replace("fa-eye-slash", "fa-eye");
    } else {
        inputConfPw.type = "password";
        ConfPassIcon.classList.replace("fa-eye", "fa-eye-slash");
    }
});

inputPw.addEventListener("input", () => {
    let inputValue = inputPw.value.trim();

    if (inputValue.length >= 8) {
        inputConfPw.removeAttribute("disabled");
        inputConfPw.classList.remove("active");
        label.classList.remove("active");
        ConfPassIcon.style.display = "block";
    } else {
        inputConfPw.setAttribute("disabled", true);
        inputConfPw.classList.add("active");
        label.classList.add("active");
        ConfPassIcon.style.display = "none";

        inputConfPw.value = "";
    }
});
