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
        const button = document.getElementById('show button');
        if (table.style.display === 'none' ) {
            table.style.display = 'table'; // Show the table
            button.value = 'Hide FAQ'; // Change button text
            console.log(button.value)
        } else {
            table.style.display = 'none'; // Hide the table
            button.value = 'Show FAQ'; // Change button text
        }
    }
    let currentIndex = 0;
    const images = ['Event1.jpeg', 'Event2.jpeg', 'Event3.jpg']; // Your image sources
    const imageElement = document.getElementById('galleryImage');
    const totalImages = images.length;
    
    function cycleGalleryPhotos() {
        // Set the current image source
        imageElement.src = images[currentIndex];
    
        // Increment the currentIndex
        currentIndex++;
    
        // If currentIndex exceeds the length, reset to 0
        if (currentIndex >= totalImages) {
            currentIndex = 0;
        }
    
        // Schedule the next cycle using setTimeout for smoother timing control
        setTimeout(cycleGalleryPhotos, 3000); // Delay next image change by 3000ms (3 seconds)
    }

    // Directly calling the function after the page loads
    window.onload = cycleGalleryPhotos;


let discount = 0
let Number_of_attended_Events

function discount(Attendance) {
    if (Attendance)

}

