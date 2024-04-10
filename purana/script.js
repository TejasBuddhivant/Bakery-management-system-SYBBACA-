document.addEventListener('DOMContentLoaded', () => {
    fetch('C:/xampp/htdocs/tejasproject/purana/tabble.php') 
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector('#customerList tbody');
            data.forEach(record => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${record.id}</td>
                    <td>${record.name_of_customer}</td>
                    <td>${record.cake_name}</td>
                    <td>${record.date_of_del}</td>
                `;
                tableBody.appendChild(row);
            });
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
});