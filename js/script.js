let toggleBtn = document.getElementById("toggle-btn");
let body = document.body;
let darkMode = localStorage.getItem("dark-mode");

const enableDarkMode = () => {
  toggleBtn.classList.replace("fa-sun", "fa-moon");
  body.classList.add("dark");
  localStorage.setItem("dark-mode", "enabled");
};

const disableDarkMode = () => {
  toggleBtn.classList.replace("fa-moon", "fa-sun");
  body.classList.remove("dark");
  localStorage.setItem("dark-mode", "disabled");
};

if (darkMode === "enabled") {
  enableDarkMode();
}

toggleBtn.onclick = (e) => {
  darkMode = localStorage.getItem("dark-mode");
  if (darkMode === "disabled") {
    enableDarkMode();
  } else {
    disableDarkMode();
  }
};

document.addEventListener("DOMContentLoaded", function () {
  let searchForm = document.querySelector(".search-form");

  searchForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Cegah pengiriman form secara default

    let searchBox = document.querySelector('input[name="search_box"]');
    let searchValue = searchBox.value.toLowerCase();

    let playlistPages = {
      html: "playlist-html.php",
      css: "playlist-css.php",
      javascript: "playlist-js.php",
      react: "playlist-react.php",
      node: "playlist-node.php",
      php: "playlist-php.php",
      // Tambahkan kata kunci lain dan halaman playlist yang sesuai di sini
    };

    for (let keyword in playlistPages) {
      if (searchValue.includes(keyword)) {
        window.location.href = playlistPages[keyword];
        return; // Berhenti setelah menemukan kata kunci yang cocok
      }
    }

    alert("Playlist not found for the given keyword.");
  });

  // Event listener untuk tombol "view playlist"
  const viewPlaylistButtons = document.querySelectorAll(".inline-btn");
  viewPlaylistButtons.forEach((button) => {
    button.addEventListener("click", function (event) {
      const playlistURL = this.getAttribute("href");
      window.location.href = playlistURL;
      event.preventDefault();
    });
  });
});

const juduls = document.querySelectorAll(".judul");

juduls.forEach((judul) => {
  judul.addEventListener("click", function () {
    const content = this.nextElementSibling;

    // Toggle max-height untuk membuka atau menutup konten
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
});
