<h1> API for It's Coming Home - Football Team Generator App</h1>
<p>This API was created to co-inside with the technical challenge set by DevelopMe_ bootcamp. This API provides requests for a React Redux front-end which can be viewed here:
The GitHub repository for the front-end project is found here: https://github.com/Tumekab/football-team-generator </p>

<p>The API was created using Laravel with a Homestead database. The API was deployed using Heroku and can be found here: https://football-team-database.herokuapp.com/. </p>

<h2>API Setup</h2>
<p>The API consists of one table. This table is used to track each game when a user wishes to save their details once the teams have been generated. This then serves as a history on the app that can be viewed by the user. <br>
Details of the API requests are below.</p>

<h2>Requests</h2>
<p>All requests should use the basename: <code>https://football-team-database.herokuapp.com/</code>

<h3> Standard response for Games</h3>
<code><strong> GET /api/games </strong></code>
<p>Will return a list of all the games saved</p>
<br>
<code><strong> GET /api/games/{id}</strong></code>
<p>Will returns a specific game with the given id</p>
<br>
<code><strong> POST /api/games </strong></code>
<p>This will create a new game in the database</p>
<strong>Requests</strong>
<ul>
    <li>game_date: date (YYYY/MM/DD)</li>
    <li>team_one: string, max 50 characters</li>
    <li>team_two: string, max 50 characters</li>
    <li>winning_team: string, max 50 characters</li>
</ul>
<br>
<code><strong> PUT /api/games/{id} </strong></code>
<p>Will update an existing game with the given id</p>
<strong>Requests</strong>
<ul>
    <li>game_date: date (YYYY/MM/DD)</li>
    <li>team_one: string, max 50 characters</li>
    <li>team_two: string, max 50 characters</li>
    <li>winning_team: string, max 50 characters</li>
</ul>
<br>
<code><strong> DELETE /api/games/{id} </strong></code>
<p>Will delete a specific game with the given id</p>
<br>

<h2>API Improvements</h2>
<strong>Database</strong>
<ul>
    <li>Added team_one_score & team_two_score columns - to keep track of teams scores, which then comes through the GET request on the Match History Front-End table</li>
    <li>Players Table where players were kept track of - this would entail a one to many relationship where players only belong to a set match</li>
    <li>Team Name Generator table - where teams can randomly get selected a team name from the database</li>
    <li>Player Generator Table - where teams can select a random player from the database to sub in if they are low on players</li>
</ul>

<h1>Cloning this Laravel API</h1>
<p>When Cloning this repo please do the following;<p>
    <ul>
        <li>cd into the directory you wish to clone the project into</li>
        <li>then run <code> git clone git@github.com:Tumekab/football-team-generator-database.git</code></li>
        <li>once that has done then make an .env file</li>
        <li>then run <code> composer install </code></li>
        <li>then run <code> npm install </code> this will install all the dependencies</li>
        <li>then run <code> composer require laravel/homestead </code> </li>
        <li>then you will need to update your homestead.yaml file to descrease it's memory to 512 </li>
        <li>then finally run <code> vendor/bin/homestead make </code> </li>
    </ul>
   <p>Once these steps have been taken you should now be able to run vagrant up and view the Laravel hosted api at homestead.test</p>
    
<br>
<h2>Foot-Note (not to be ignored)</h2>
<em>Please note: ID numbers go up in 10. For example, the first game posted will have the id number of 1, then next game will have an id number of 11, next 21, next 31, and so on. This is a strange behaviour that I have not been able to understand why is happening. For now it is a quirk that will be fixed. </em>
            
