const inputPw = document.querySelector(".input-box #pass");
const passIcon = document.querySelector("#pass_icon");
const label = document.querySelector(".input-box #label");
const check = document.querySelector(".forget #checkbox");
const textCheck = document.querySelector(".forget label");

passIcon.addEventListener("click", () => {
    if (inputPw.type === "password") {
        inputPw.type = "text";
        passIcon.classList.replace("fa-eye-slash", "fa-eye");
    } else {
        inputPw.type = "password";
        passIcon.classList.replace("fa-eye", "fa-eye-slash");
    }
});

check.addEventListener("change", function () {
    if (this.checked) {
        textCheck.style.color = "#224038";
    } else {
        textCheck.style.color = "#a6a6a6";
    }
});
