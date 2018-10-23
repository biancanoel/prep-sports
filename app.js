const express = require('express');
const bodyParser = require('body-parser');
const nodemailer = require('nodemailer');
const exphbs = require('express-handlebars');
const path = require('path');

const app = express();

//View engine setup
app.engine('handlebars', exphbs() );
app.set('view engine', 'handlebars');

//Static Folder
app.use('/public', express.static(path.join(__dirname, 'public')))

//Body Parser Middleware
app.use(bodyParser.urlencoded({extended: false}));
app.use(bodyParser.json());

app.get('/', (req,res) => {
    res.sendFile(path.join(__dirname, "./public/index.html"));
});

app.listen(3000, () => {
    console.log('Server started!');
})
