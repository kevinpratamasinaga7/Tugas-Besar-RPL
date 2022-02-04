// Eskpor Fungsi getCustomProperty
export function getCustomProperty(elem, prop) {
  return parseFloat(getComputedStyle(elem).getPropertyValue(prop)) || 0
}

// Eskpor Fungsi setCustomProperty
export function setCustomProperty(elem, prop, value) {
  elem.style.setProperty(prop, value)
}

// Eskpor Fungsi incrementCustomProperty
export function incrementCustomProperty(elem, prop, inc) {
  setCustomProperty(elem, prop, getCustomProperty(elem, prop) + inc)
}
