const inputTag = document.querySelector("input[name=roomTag");
const inputTags = document.querySelector("input[name=roomTags");
const divTags = document.querySelector(".tags");
let tags;

inputTag.addEventListener("input", (e) => {
  let value = e.currentTarget.value;
  tags = value.split(",").map((tag) => tag.replaceAll(" ", ""));
  let tagsHtml = tags.map((tag) => `<span class="tag">${tag}</span>`);
  divTags.innerHTML = tagsHtml.join("");
  inputTags.value = JSON.stringify(tags);
});