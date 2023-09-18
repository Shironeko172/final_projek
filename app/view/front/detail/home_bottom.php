</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
  const todayBtn = document.getElementById('today-btn');
  const thisMonthBtn = document.getElementById('this-month-btn');
  const allBtn = document.getElementById('all-btn');
  const itemList = document.querySelector('.item-list').children;

  todayBtn.addEventListener('click', function() {
    filterItems('today');
  });

  thisMonthBtn.addEventListener('click', function() {
    filterItems('thisMonth');
  });

  allBtn.addEventListener('click', function() {
    filterItems('all');
  });

  function filterItems(filterType) {
    for (let i = 0; i < itemList.length; i++) {
      const item = itemList[i];
      const date = new Date(item.dataset.date); // Ganti dengan properti tanggal item Anda

      item.style.display = 'block';

      if (filterType === 'today') {
        if (!isToday(date)) {
          item.style.display = 'none';
        }
      } else if (filterType === 'thisMonth') {
        if (!isThisMonth(date)) {
          item.style.display = 'none';
        }
      }
    }
  }

  function isToday(date) {
    const today = new Date();
    return (
      date.getDate() === today.getDate() &&
      date.getMonth() === today.getMonth() &&
      date.getFullYear() === today.getFullYear()
    );
  }

  function isThisMonth(date) {
    const today = new Date();
    return (
      date.getMonth() === today.getMonth() &&
      date.getFullYear() === today.getFullYear()
    );
  }
});
