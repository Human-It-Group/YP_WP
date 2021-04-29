const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 2000);

var userFeed = new Instafeed({
                get: 'user',
                target: "instafeed-container",
                resolution: 'low_resolution',
                accessToken: 'IGQVJWb1N6cVpETkl6MjBXYUsyaGFRa1otVTBRV1ZA2cXhSZAmYyS2lBRFotTFNTYVVWQnlDZADJWZAkp5a1lSNk15S1U4OUFZAbHVuaE5ZAYVVnWDN4dlZApLWhVb3U0amhwZA2lpYjJBZA1VWTUp0Y2QzZA0hCXwZDZD'
            });
userFeed.run();
