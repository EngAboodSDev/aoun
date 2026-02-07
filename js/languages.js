/*
 * Copyright © 2026 Aoun - Hajj & Umrah Helper
 * All rights reserved.
 * Developed by Abdulrahman Fadhl Ameer Saif
 * @EngAboodSDev (abdulrahmanfadhl@gmail.com)
*/

/**
 * languages.js - Language options for volunteer registration
 * Populates all elements with class "languages" with the available language options
 */

/** List of languages offered (display name in English and Arabic) */
const languages_list = [
  'Arabic | العربية',
  'Bengali | البنغالية',
  'Chinese | الصينية',
  'Dutch | الهولندية',
  'English | الإنجليزية',
  'French | الفرنسية',
  'German | الألمانية',
  'Hindi | الهندية',
  'Italian | الإيطالية',
  'Japanese | اليابانية',
  'Korean | الكورية',
  'Portuguese | البرتغالية',
  'Russian | الروسية',
  'Spanish | الإسبانية',
  'Swahili | السواحيلية',
  'Turkish | التركية',
  'أُخـرى | Other '
];

/** All select elements with class "languages" (e.g. on index.php signup form) */
selectTag = document.querySelectorAll(".languages");

/**
 * Populates each language select element with options from languages_list.
 * @param {HTMLSelectElement} tag - The select element to populate
 * @param {number} id - Index of the current tag in the NodeList
 */
selectTag.forEach((tag, id) => {
  for (let name in languages_list) {
    let option = `<option  value="${languages_list[name]}">${languages_list[name]}</option>`;
    tag.insertAdjacentHTML("beforeend", option);
  }
});

/*
 * Copyright © 2026 Aoun - Hajj & Umrah Helper
 * All rights reserved.
 * Developed by Abdulrahman Fadhl Ameer Saif
 * @EngAboodSDev (abdulrahmanfadhl@gmail.com)
*/
