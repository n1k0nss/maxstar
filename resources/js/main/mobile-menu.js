(() => {
    const mainMenuBtnRef = document.querySelector("[data-main-menu-button]");
    const searchMenuBtnRef = document.querySelector("[data-search-menu-button]");
    const mobileMainMenuRef = document.querySelector("[data-main-menu]");
    const mobileSearchMenuRef = document.querySelector("[data-search-menu]");
    const lock = document.querySelector("[data-lock]");

    const phoneBoxBtnRef = document.querySelector("[data-phone-box-button]");
    const phoneBoxRef = document.querySelector("[data-phone-box]");

    mainMenuBtnRef.addEventListener("click", () => {
      const expanded =
        mainMenuBtnRef.getAttribute("aria-expanded") === "true" || false;


        if(mobileSearchMenuRef.classList.contains("is-open")){
            searchMenuBtnRef.classList.remove("is-open");
            mobileSearchMenuRef.classList.remove("is-open");
            lock.classList.remove("is-locked");
        }

      mainMenuBtnRef.classList.toggle("is-open");
      mainMenuBtnRef.setAttribute("aria-expanded", !expanded);

      mobileMainMenuRef.classList.toggle("is-open");

      lock.classList.toggle("is-locked");

    });

    searchMenuBtnRef.addEventListener("click", () => {
        const expanded =
        searchMenuBtnRef.getAttribute("aria-expanded") === "true" || false;


        if(mobileMainMenuRef.classList.contains("is-open")){
            mainMenuBtnRef.classList.remove("is-open");
            mobileMainMenuRef.classList.remove("is-open");
            lock.classList.remove("is-locked");
        }

        searchMenuBtnRef.classList.toggle("is-open");
        searchMenuBtnRef.setAttribute("aria-expanded", !expanded);


        mobileSearchMenuRef.classList.toggle("is-open");

        lock.classList.toggle("is-locked");

      });

      phoneBoxBtnRef.addEventListener("click", () => {
        const expanded =
        phoneBoxBtnRef.getAttribute("aria-expanded") === "true" || false;

        phoneBoxBtnRef.classList.toggle("is-open");
        phoneBoxBtnRef.setAttribute("aria-expanded", !expanded);

        phoneBoxRef.classList.toggle("is-open");

      });
  })();
