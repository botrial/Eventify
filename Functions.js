function toggleCheckboxes(experience) {
    // Hide all checkbox sections first
    document.getElementById('excellentCheckboxes').style.display = 'none';
    document.getElementById('goodCheckboxes').style.display = 'none';
    document.getElementById('badCheckboxes').style.display = 'none';
    document.getElementById('OkCheckboxes').style.display = 'none';

    // Show checkboxes based on the selected experience
    if (experience === 'Excellent') {
        document.getElementById('excellentCheckboxes').style.display = 'block';
        document.getElementById('goodCheckboxes').style.display = 'none';
        document.getElementById('OkCheckboxes').style.display = 'none';
        document.getElementById('badCheckboxes').style.display = 'none';
    } else if (experience === 'Very good' || experience === 'Good') {
        document.getElementById('goodCheckboxes').style.display = 'block';
        document.getElementById('excellentCheckboxes').style.display = 'none';
        document.getElementById('OkCheckboxes').style.display = 'none';
        document.getElementById('badCheckboxes').style.display = 'none';
    } else if (experience === 'OK') {
        document.getElementById('OkCheckboxes').style.display = 'block';
        document.getElementById('excellentCheckboxes').style.display = 'none';
        document.getElementById('goodCheckboxes').style.display = 'none';
        document.getElementById('badCheckboxes').style.display = 'none';
    } else if (experience === 'Bad' || experience === 'Very bad') {
        document.getElementById('badCheckboxes').style.display = 'block';
        document.getElementById('excellentCheckboxes').style.display = 'none';
        document.getElementById('goodCheckboxes').style.display = 'none';
        document.getElementById('OkCheckboxes').style.display = 'none';
    }
}
function toggleTable() {
        const table = document.getElementById('table');
        const button = document.getElementById('showButton');
        if (table.style.display === 'none' ) {
            table.style.display = 'table'; // Show the table
            button.textContent = 'Hide FAQ'; // Change button text
        } else {
            table.style.display = 'none'; // Hide the table
            button.textContent = 'Show FAQ'; // Change button text
        }
    }
