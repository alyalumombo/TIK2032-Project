let slideIndex = 0;
showSlides();

function showSlides() {
  const slides = document.getElementsByClassName("slide");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) slideIndex = 1;
  slides[slideIndex - 1].style.display = "flex";
  setTimeout(showSlides, 4000);
}

document.addEventListener("DOMContentLoaded", () => {
  const contactForm = document.getElementById("contact-form");

  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      const name = document.getElementById("name");
      const email = document.getElementById("email");
      const message = document.getElementById("message");

      if (!name.value || !email.value || !message.value) {
        alert("Semua kolom harus diisi!");
        e.preventDefault();
      }
    });
  }
});

const toggleBtn = document.createElement("button");
toggleBtn.innerText = "🌙 Dark Mode";
toggleBtn.style.position = "fixed";
toggleBtn.style.bottom = "20px";
toggleBtn.style.right = "20px";
toggleBtn.style.padding = "10px";
toggleBtn.style.borderRadius = "8px";
toggleBtn.style.border = "none";
toggleBtn.style.backgroundColor = "#333";
toggleBtn.style.color = "#fff";
toggleBtn.style.cursor = "pointer";
document.body.appendChild(toggleBtn);

let darkMode = false;

toggleBtn.addEventListener("click", () => {
  darkMode = !darkMode;
  document.body.style.backgroundColor = darkMode ? "#111" : "white";
  document.body.style.color = darkMode ? "#eee" : "black";
  toggleBtn.innerText = darkMode ? "☀️ Light Mode" : "🌙 Dark Mode";
});
