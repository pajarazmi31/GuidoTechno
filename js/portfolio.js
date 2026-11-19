document.addEventListener('DOMContentLoaded', () => {
  const filterButtons = document.querySelectorAll('.filter-btn');
  const portfolioItems = document.querySelectorAll('.portfolio-item');

  if (!filterButtons.length || !portfolioItems.length) return;

  filterButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const selectedCategory = button.getAttribute('data-filter');

      // Update status aktif tombol filter
      filterButtons.forEach((btn) => {
        btn.classList.remove('bg-[#0B409C]', 'text-white', 'active');
        btn.classList.add('bg-white', 'text-[#10316B]');
      });

      button.classList.remove('bg-white', 'text-[#10316B]');
      button.classList.add('bg-[#0B409C]', 'text-white', 'active');

      // Filter elemen kartu portofolio yang sudah ada di HTML
      portfolioItems.forEach((item) => {
        const itemCategory = item.getAttribute('data-category');
        if (selectedCategory === 'all' || itemCategory === selectedCategory) {
          item.classList.remove('hidden-item');
        } else {
          item.classList.add('hidden-item');
        }
      });
    });
  });
});