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
    class Hall {
        constructor(bookingTime, location, picture, capacity) {
            this.size = determineSizeByCapacity(capacity); // Hall size (Small, Medium, Big)
            this.bookingTime = bookingTime; // Booking time in minutes
            this.location = location; // Hall location
            this.picture = picture; // URL or path to the hall's picture
            this.capacity = capacity; // Capacity of the hall
        }
    
        // Getter for size
        getSize() {
            return this.size;
        }
    
        // Setter for size
        setSize(newSize) {
            if (newSize === 'Small' || newSize === 'Medium' || newSize === 'Big') {
                this.size = newSize;
            }
        }
    
        // Getter for bookingTime
        getBookingTime() {
            return this.bookingTime;
        }
    
        // Setter for bookingTime
        setBookingTime(newBookingTime) {
            if (newBookingTime > 0) {
                this.bookingTime = newBookingTime;
            }
        }
    
        // Getter for location
        getLocation() {
            return this.location;
        }
    
        // Setter for location
        setLocation(newLocation) {
            if (typeof newLocation === 'string') {
                this.location = newLocation;
            }
        }
    
        // Getter for picture
        getPicture() {
            return this.picture;
        }
    
        // Setter for picture
        setPicture(newPicture) {
            if (typeof newPicture === 'string') {
                this.picture = newPicture;
            }
        }
    
        // Getter for capacity
        getCapacity() {
            return this.capacity;
        }
    
        // Setter for capacity
        setCapacity(newCapacity) {
            if (newCapacity > 0) {
                this.capacity = newCapacity;
            }
        }
    }
    
    // Function to determine size based on capacity
    function determineSizeByCapacity(capacity) {
        if (capacity <= 20) {
            return 'Small';
        } else if (capacity <= 100) {
            return 'Medium';
        } else {
            return 'Big';
        }
    }
    
    


// Function to calculate the hall booking cost
function HallBookingCost(size, timeInMinutes) {
    const timeInHours = Math.ceil(timeInMinutes / 60); // Convert minutes to hours
    if (size === 'Small') return 10 * timeInHours;
    else if (size === 'Medium') return 20 * timeInHours;
    else if (size === 'Big') return 30 * timeInHours;
    else return "Invalid size provided"; // Handle invalid size
}

// Function to calculate a discount
function Discount(bookingsThisMonth, firstBooking) {
    let discount = 0; // Default discount is 0
    if (firstBooking === true) discount = 0.20; // 20% discount for the first booking
    else if (bookingsThisMonth > 3) discount = 0.15; // 15% discount for more than 3 bookings
    return discount;
}

// Function to calculate the final bill after applying the discount
function CalculateBill(cost, discount) {
    return cost * (1 - discount); // Apply discount and return the final cost
}
