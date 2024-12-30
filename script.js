document.addEventListener('DOMContentLoaded', () => {
const taskItems = document.querySelectorAll('.task');
taskItems.forEach(item => {
item.addEventListener('click', () => {
item.classList.toggle('completed');
});});});