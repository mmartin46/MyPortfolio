const express = require('express');
const nodemailer = require('nodemailer');
const bodyParser = require('body-parser');
require('dotenv').config(); // Load environment variables

const app = express();
const port = 3000;

// Body parser middleware to parse form data
app.use(bodyParser.urlencoded({ extended: true }));

// Serve static files (e.g., CSS, images)
app.use(express.static('public'));

// Set up the home route
app.get('/', (req, res) => {
    res.sendFile(__dirname + '/index.html');
});

// Handle form submissions
app.post('/submit', (req, res) => {
    // Get form data
    const { email, subject, message } = req.body;

    // Create a nodemailer transporter using environment variables
    const transporter = nodemailer.createTransport({
        service: 'gmail',
        auth: {
            user: process.env.GMAIL_USER,
            pass: process.env.GMAIL_PASS,
        },
    });

    // Set up email options
    const mailOptions = {
        from: process.env.GMAIL_USER,
        to: process.env.DESTINATION_EMAIL,
        subject: subject,
        text: `From: ${email}\n\n${message}`,
    };

    // Send the email
    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            return console.log(error);
        }
        console.log('Email sent: ' + info.response);
    });

    // Redirect or respond as needed
    res.send('Form submitted successfully!');
});

// Start the server
app.listen(port, () => {
    console.log(`Server is running at http://localhost:${port}`);
});
