/*
 * Copyright © 2026 Aoun - Hajj & Umrah Helper
 * All rights reserved.
 * Developed by Abdulrahman Fadhl Ameer Saif
 * @EngAboodSDev (abdulrahmanfadhl@gmail.com)
*/

/**
 * trans_script.js - Translation page logic
 * Handles language selection, translation API calls, copy, and text-to-speech
 * Depends on: countries.js (from countries object)
 */

/** Source textarea for input to translate */
const fromText = document.querySelector(".from-text"),
    /** Target textarea for translation output */
    toText = document.querySelector(".to-text"),
    /** Swap button to exchange source and target */
    exchageIcon = document.querySelector(".exchange"),
    /** Language select dropdowns (index 0 = from, 1 = to) */
    selectTag = document.querySelectorAll("select"),
    /** Copy and volume icons in the translation UI */
    icons = document.querySelectorAll(".row i");
/** Translate button to trigger API request */
translateBtn = document.querySelector(".t_btn"),

    /**
     * Populates each language select with options from countries object.
     * Sets default: first select = English (en-GB), second = Arabic (ar-SA).
     * @param {HTMLSelectElement} tag - The select element to populate
     * @param {number} id - Index (0 = from, 1 = to)
     */
    selectTag.forEach((tag, id) => {
        for (let country_code in countries) {
            let selected = id == 0 ? country_code == "en-GB" ? "selected" : "" : country_code == "ar-SA" ? "selected" : "";
            let option = `<option ${selected} value="${country_code}">${countries[country_code]}</option>`;
            tag.insertAdjacentHTML("beforeend", option);
        }
    });

/**
 * Swaps source and target text and language selections when exchange icon is clicked.
 */
exchageIcon.addEventListener("click", () => {
    let tempText = fromText.value,
        tempLang = selectTag[0].value;
    fromText.value = toText.value;
    toText.value = tempText;
    selectTag[0].value = selectTag[1].value;
    selectTag[1].value = tempLang;
});

/**
 * Clears translation output when source text is emptied (on keyup).
 */
fromText.addEventListener("keyup", () => {
    if (!fromText.value) {
        toText.value = "";
    }
});

/**
 * Fetches translation from MyMemory API and displays result.
 * Shows "Translating..." placeholder during request.
 */
translateBtn.addEventListener("click", () => {
    let text = fromText.value.trim(),
        translateFrom = selectTag[0].value,
        translateTo = selectTag[1].value;
    if (!text) return;
    toText.setAttribute("placeholder", "Translating...");
    let apiUrl = `https://api.mymemory.translated.net/get?q=${text}&langpair=${translateFrom}|${translateTo}`;
    fetch(apiUrl).then(res => res.json()).then(data => {
        toText.value = data.responseData.translatedText;
        data.matches.forEach(data => {
            if (data.id === 0) {
                toText.value = data.translation;
            }
        });
        toText.setAttribute("placeholder", "Translation");
    });
});

/**
 * Handles click on copy or volume icons.
 * Copy: writes source or target text to clipboard.
 * Volume: speaks source or target text using Web Speech API.
 * @param {HTMLElement} icon - The clicked icon element
 */
icons.forEach(icon => {
    icon.addEventListener("click", ({ target }) => {
        if (!fromText.value || !toText.value) return;
        if (target.classList.contains("fa-copy")) {
            if (target.id == "from") {
                navigator.clipboard.writeText(fromText.value);
            } else {
                navigator.clipboard.writeText(toText.value);
            }
        } else {
            let utterance;
            if (target.id == "from") {
                utterance = new SpeechSynthesisUtterance(fromText.value);
                utterance.lang = selectTag[0].value;
            } else {
                utterance = new SpeechSynthesisUtterance(toText.value);
                utterance.lang = selectTag[1].value;
            }
            speechSynthesis.speak(utterance);
        }
    });
});

/*
 * Copyright © 2026 Aoun - Hajj & Umrah Helper
 * All rights reserved.
 * Developed by Abdulrahman Fadhl Ameer Saif
 * @EngAboodSDev (abdulrahmanfadhl@gmail.com)
*/