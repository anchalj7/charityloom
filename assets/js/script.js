document.addEventListener("DOMContentLoaded", () => {
  const dashboardLink = document.getElementById("dashboard-link");
  const donationsLink = document.getElementById("donations-link");
  const inquiriesLink = document.getElementById("inquiries-link");
  const logoutLink = document.getElementById("logout-link");

  const dashboardSection = document.getElementById("dashboard");
  const donationsSection = document.getElementById("donations");
  const inquiriesSection = document.getElementById("inquiries");

  dashboardLink.addEventListener("click", () => {
    dashboardSection.classList.remove("hidden");
    donationsSection.classList.add("hidden");
    inquiriesSection.classList.add("hidden");
    setActiveLink(dashboardLink);
  });

  donationsLink.addEventListener("click", () => {
    dashboardSection.classList.add("hidden");
    donationsSection.classList.remove("hidden");
    inquiriesSection.classList.add("hidden");
    setActiveLink(donationsLink);
  });

  inquiriesLink.addEventListener("click", () => {
    dashboardSection.classList.add("hidden");
    donationsSection.classList.add("hidden");
    inquiriesSection.classList.remove("hidden");
    setActiveLink(inquiriesLink);
  });

  logoutLink.addEventListener("click", () => {
    // Handle logout
    alert("Logging out...");
  });

  function setActiveLink(link) {
    dashboardLink.classList.remove("active");
    donationsLink.classList.remove("active");
    inquiriesLink.classList.remove("active");
    link.classList.add("active");
  }
});
