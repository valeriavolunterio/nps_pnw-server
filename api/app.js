const express = require("express");
const bodyParser = require("body-parser");

const app = express();
const PORT = process.env.PORT || 3000;

// Middleware to parse JSON bodies
app.use(bodyParser.json());

// Endpoint to handle POST requests to /api/data
app.post("/api/data", (req, res) => {
  // Retrieve JSON data from request body
  const jsonData = req.body;

  // Log the JSON data to the console
  console.log("Received JSON data:", jsonData);

  // Send the JSON data back as a response
  res.status(200).json(jsonData);
});

// Start the server
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
