const express = require("express");
const bodyParser = require("body-parser");

const app = express();
const PORT = process.env.PORT || 3000;

// Middleware to parse JSON bodies
app.use(bodyParser.json());

// Endpoint to handle POST requests
app.post("/api/data", (req, res) => {
  // Assuming the PHP script sends JSON data in the request body
  const receivedData = req.body;

  // Do something with the received data
  console.log("Received data:", receivedData);

  // Respond with a success message
  res.status(200).json({ message: "Data received successfully" });
});

// Start the server
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
