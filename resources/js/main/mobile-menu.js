(() => {
    const mainMenuBtnRef = document.querySelector("[data-main-menu-button]");
    const searchMenuBtnRef = document.querySelector("[data-search-menu-button]");
    const mobileMainMenuRef = document.querySelector("[data-main-menu]");
    const mobileSearchMenuRef = document.querySelector("[data-search-menu]");
    const lock = document.querySelector("[data-lock]");

    mainMenuBtnRef.addEventListener("click", () => {
      const expanded =
        mainMenuBtnRef.getAttribute("aria-expanded") === "true" || false;

      mainMenuBtnRef.classList.toggle("is-open");
      mainMenuBtnRef.setAttribute("aria-expanded", !expanded);

      mobileMainMenuRef.classList.toggle("is-open");

      lock.classList.toggle("is-locked");

    });

    searchMenuBtnRef.addEventListener("click", () => {
        const expanded =
        searchMenuBtnRef.getAttribute("aria-expanded") === "true" || false;

        searchMenuBtnRef.classList.toggle("is-open");
        searchMenuBtnRef.setAttribute("aria-expanded", !expanded);

        mobileSearchMenuRef.classList.toggle("is-open");

        lock.classList.toggle("is-locked");

      });
  })();
