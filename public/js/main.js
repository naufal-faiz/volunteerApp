const container = document.querySelector(".container");
const registerBtn = document.querySelector(".register-btn");
const loginBtn = document.querySelector(".login-btn");

registerBtn.addEventListener("click", () => {
    container.classList.add("active");
});

loginBtn.addEventListener("click", () => {
    container.classList.remove("active");
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".btn-close").forEach((btn) => {
        btn.addEventListener("click", function () {
            const alert = this.closest(".alert");
            if (alert) alert.remove();
        });
    });
});

const section = "{{ session('auth_section') }}";
if(section === 'register') {
    document.querySelector('.register-btn')?.click();
}