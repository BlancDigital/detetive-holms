const cursor = document.getElementById("cursor")
const cursorFrame = document.getElementById("cursorFrame")

document.addEventListener("mousemove", function (e) {
  let x = e.clientX
  let y = e.clientY
  cursor.style.left = x + "px"
  cursor.style.top = y + "px"
  cursorFrame.style.left = x + "px"
  cursorFrame.style.top = y + "px"
})
