const myModalEl = document.querySelector('#loginModal')
const modal = new bootstrap.Modal(myModalEl) // initialized with defaults

const configObject = { keyboard: false }
const modal1 = new bootstrap.Modal(myModalEl, configObject) // initialized with no keyboard
