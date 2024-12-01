// Define the block size and board dimensions
var blockSize = 25; // Size of each block in the game
var rows = 20; // Number of rows on the board
var cols = 20; // Number of columns on the board
var board; // Canvas element for the game board
var context; // Context for drawing on the canvas

// Snake's head position
var snakeX = blockSize * 5; // Initial X position of the snake
var snakeY = blockSize * 5; // Initial Y position of the snake

// Snake's movement velocity
var velocityX = 0; // Horizontal velocity
var velocityY = 0; // Vertical velocity

// Snake's body (array to store segments)
var snakeBody = []; // Array to track snake's body segments

// Food position
var foodX; // X coordinate of the food
var foodY; // Y coordinate of the food

// Set game state to false
var gameOver = false; // Boolean to track if the game is over

// Initialize the game
window.onload = function() {
    board = document.getElementById("board"); // Get the canvas element
    board.height = rows * blockSize; // Set canvas height
    board.width = cols * blockSize; // Set canvas width
    context = board.getContext("2d"); // Get the drawing context

    placeFood(); // Place the first food on the board
    document.addEventListener("keyup", changeDirenction); // Listen for arrow key presses to change direction
    setInterval(update, 1000 / 10); // Call the update function every 100ms (10 FPS)
}

// Update function to refresh the game state
function update() {
    // Check if the game is over
    if (gameOver) {
        return; // Stop updating if the game is over
    }

    // Clear the board
    context.fillStyle = "black"; // Set background color to black
    context.fillRect(0, 0, board.width, board.height); // Fill the entire board

    // Draw the food
    context.fillStyle = "red"; // Set food color to red
    context.fillRect(foodX, foodY, blockSize, blockSize); // Draw the food

    // Check if the snake eats the food
    if (snakeX == foodX && snakeY == foodY) {
        snakeBody.push([foodX, foodY]); // Add a new segment to the snake's body
        placeFood(); // Place a new food on the board
    }

    // Move the snake's body
    for (let i = snakeBody.length - 1; i > 0; i--) {
        snakeBody[i] = snakeBody[i - 1]; // Shift each segment to the position of the previous one
    }
    if (snakeBody.length) {
        snakeBody[0] = [snakeX, snakeY]; // Update the first segment to follow the head
    }

    // Move the snake's head
    snakeX += velocityX * blockSize; // Update X position based on velocity
    snakeY += velocityY * blockSize; // Update Y position based on velocity

    // Draw the snake
    context.fillStyle = "lime"; // Set snake color to lime green
    context.fillRect(snakeX, snakeY, blockSize, blockSize); // Draw the snake's head
    for (let i = 0; i < snakeBody.length; i++) {
        context.fillRect(snakeBody[i][0], snakeBody[i][1], blockSize, blockSize); // Draw each body segment
    }

    // Check for collisions with the walls
    if (snakeX < 0 || snakeX >= cols * blockSize || snakeY < 0 || snakeY >= rows * blockSize) {
        gameOver = true; // End the game
        alert("Game Over, better luck next time!"); // Show game over message
    }

    // Check for collisions with the snake's own body
    for (let i = 0; i < snakeBody.length; i++) {
        if (snakeX == snakeBody[i][0] && snakeY == snakeBody[i][1]) {
            gameOver = true; // End the game
            alert("Game Over, better luck next time!"); // Show game over message
        }
    }
}

// Change the snake's direction based on user input
function changeDirenction(e) {
    if (e.code == "ArrowUp" && velocityY != 1) {
        velocityX = 0; // Stop horizontal movement
        velocityY = -1; // Move up
    } else if (e.code == "ArrowDown" && velocityY != -1) {
        velocityX = 0; // Stop horizontal movement
        velocityY = 1; // Move down
    } else if (e.code == "ArrowLeft" && velocityX != 1) {
        velocityX = -1; // Move left
        velocityY = 0; // Stop vertical movement
    } else if (e.code == "ArrowRight" && velocityX != -1) {
        velocityX = 1; // Move right
        velocityY = 0; // Stop vertical movement
    }
}

// Place the food at a random position
function placeFood() {
    foodX = Math.floor(Math.random() * cols) * blockSize; // Random X position
    foodY = Math.floor(Math.random() * rows) * blockSize; // Random Y position
}