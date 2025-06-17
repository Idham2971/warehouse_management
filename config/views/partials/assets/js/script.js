$(document).ready(function () {
  // Toggle sidebar collapse
  $("#sidebarCollapse, #menuToggle").on("click", function () {
    $("#sidebar").toggleClass("collapsed");

    // Store state in localStorage
    const isCollapsed = $("#sidebar").hasClass("collapsed");
    localStorage.setItem("sidebarCollapsed", isCollapsed);
  });

  // Check localStorage for saved state
  if (localStorage.getItem("sidebarCollapsed") === "true") {
    $("#sidebar").addClass("collapsed");
  }

  // Responsive behavior
  function handleResponsive() {
    if ($(window).width() < 768) {
      $("#sidebar").addClass("collapsed");
    } else {
      // Restore previous state for larger screens
      if (localStorage.getItem("sidebarCollapsed") === "false") {
        $("#sidebar").removeClass("collapsed");
      }
    }
  }

  // Initial check
  handleResponsive();

  // Check on resize
  $(window).resize(handleResponsive);

  // Smooth transitions
  $("a").on("click", function (e) {
    if (this.hash !== "") {
      e.preventDefault();
      const hash = this.hash;
      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top,
        },
        800,
        function () {
          window.location.hash = hash;
        }
      );
    }
  });
});
