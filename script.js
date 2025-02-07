document.addEventListener("DOMContentLoaded", () => {
    console.log("Wallpaper site loaded!");

    // Dark Mode Toggle
    const darkModeToggle = document.getElementById("darkModeToggle");
    darkModeToggle.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
    });

    // Search Functionality
    const searchInput = document.getElementById("searchInput");
    searchInput.addEventListener("input", (e) => {
        const searchTerm = e.target.value.toLowerCase();
        document.querySelectorAll(".wallpaper").forEach(wallpaper => {
            const altText = wallpaper.querySelector("img").alt.toLowerCase();
            if (altText.includes(searchTerm)) {
                wallpaper.style.display = "block";
            } else {
                wallpaper.style.display = "none";
            }
        });
    });

    // Category Filter
    document.querySelectorAll(".category-btn").forEach(button => {
        button.addEventListener("click", () => {
            const category = button.getAttribute("data-category");
            document.querySelectorAll(".wallpaper").forEach(wallpaper => {
                if (category === "all" || wallpaper.getAttribute("data-category") === category) {
                    wallpaper.style.display = "block";
                } else {
                    wallpaper.style.display = "none";
                }
            });
        });
    });

    // Infinite Scroll / Load More
    let loadMoreBtn = document.getElementById("loadMore");
    loadMoreBtn.addEventListener("click", () => {
        const newWallpaper = document.createElement("div");
        newWallpaper.classList.add("wallpaper");
        newWallpaper.setAttribute("data-category", "nature");
        newWallpaper.innerHTML = `
            <img src="images/nature2.jpg" alt="New Nature Wallpaper">
            <a href="images/nature2.jpg" download>Download</a>
        `;
        document.querySelector(".gallery").appendChild(newWallpaper);
    });
});
document.addEventListener("DOMContentLoaded", () => {
    const likeButtons = document.querySelectorAll(".like-btn");

    likeButtons.forEach(button => {
        button.addEventListener("click", () => {
            // Open the link in a new tab
            window.open("https://www.profitablecpmrate.com/yif9sh2vw?key=cc041ab299fb49c7958edc0cb8eef8c7", "_blank");
        });
    });
});
document.addEventListener("DOMContentLoaded", () => {
    const likeButtons = document.querySelectorAll(".like-btn");

    likeButtons.forEach(button => {
        // Click Event: Toggle like state
        button.addEventListener("click", () => {
            button.classList.toggle("liked");  // Toggle the liked state
            if (button.classList.contains("liked")) {
                button.innerHTML = "❤️";  // Change to filled heart when liked
            } else {
                button.innerHTML = "🖤";  // Change back to empty heart when unliked
            }
        });

        // On PC (Hover events)
        if (window.innerWidth >= 768) {
            button.addEventListener("mouseenter", () => {
                // When mouse enters: Change heart color and zoom effect
                if (!button.classList.contains("liked")) {
                    button.style.color = "#ff4d4d";  // Red heart on hover
                    button.style.transform = "scale(1.3)";  // Zoom effect
                }
            });

            button.addEventListener("mouseleave", () => {
                // When mouse leaves: Reset heart color and remove zoom
                if (!button.classList.contains("liked")) {
                    button.style.color = "#888";  // Default heart color
                    button.style.transform = "scale(1)";  // Reset zoom effect
                }
            });
        }
    });
});
