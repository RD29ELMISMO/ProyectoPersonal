document.getElementById('searchNews').addEventListener('input', filterNews);
document.getElementById('categoryFilter').addEventListener('change', filterNews);

function filterNews() {
    const searchTerm = document.getElementById('searchNews').value.toLowerCase();
    const category = document.getElementById('categoryFilter').value;

    document.querySelectorAll('.news-item').forEach(item => {
        const title = item.querySelector('h4').textContent.toLowerCase();
        const cat = item.dataset.category;

        const matchesSearch = title.includes(searchTerm);
        const matchesCategory = category === 'all' || cat === category;

        item.style.display = matchesSearch && matchesCategory ? 'block' : 'none';
    });
}


// COntenido leer mas

document.querySelectorAll('.read-more').forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const fullContent = this.closest('.news-item').querySelector('.full-content');
      fullContent.style.display = fullContent.style.display === 'none' ? 'block' : 'none';
      this.textContent = this.textContent === 'Leer más' ? 'Leer menos' : 'Leer más';
    });
  });